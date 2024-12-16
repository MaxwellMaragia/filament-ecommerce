<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\SchemaOrg\Schema;

class ProductsPage extends Component
{
    use WithPagination;
    use LivewireAlert;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];
    #[Url]
    public $featured;

    #[Url]
    public $on_sale;

    #[Url]
    public $price_range;

    #[Url]
    public $sort = 'latest';
    public $title;
    public $description;

    //add product to cart method
    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemsToCart($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
        $this->alert('success', 'Product added to cart successfully!',[
            'position'=>'top-right',
            'timer'=>3000,
            'toast'=>true,
            'background'=>'success',
        ]);
    }

    public function mount()
    {
        $this->price_range = Product::max('price');
        $this->title = env('app_name') . " | Shop Solar Products | Flood Lights, Ceiling Lights, and More in Kenya";
        $this->description = env('app_name') . " - Explore our Solar Lights category, featuring Flood Lights, Ceiling Lights, and Energy Saving Bulbs. Enjoy ✓ Pay on Delivery in Kenya!";
    }


    public function structuredData()
    {
        $paginatedProducts = Product::where('is_active', 1)->paginate(12);
        $products = $paginatedProducts->items();

        $itemList = [];

        foreach ($products as $product) {
            // Create each product schema
            $productSchema = Schema::product()
                ->name($product->name)
                ->url(url('/products/' . $product->slug))
                ->image(
                    Schema::imageObject()
                        ->caption($product->name)
                        ->identifier(url('storage', $product->images[0] ?? 'default.jpg'))
                        ->url(url('storage', $product->images[0] ?? 'default.jpg'))
                )
                ->offers(
                    Schema::offer()
                        ->price($product->price)
                        ->priceCurrency('KES')
                        ->availability($product->in_stock ? 'http://schema.org/InStock' : 'http://schema.org/OutOfStock')
                );

            $itemList[] = Schema::listItem()
                ->position(count($itemList) + 1)
                ->item($productSchema);
        }

        return Schema::collectionPage()
            ->name(env('APP_NAME').' | Products')
            ->description($this->description ?? 'brand description')
            ->url(url()->current())
            ->mainEntity(Schema::itemList()->itemListElement($itemList));
    }

    public function render()
    {
        $productQuery = Product::query()->where('is_active', 1);

        if(!empty($this->selected_categories)){
            $productQuery->whereIn('category_id', $this->selected_categories);
        }

        if(!empty($this->selected_brands)){
            $productQuery->whereIn('brand_id', $this->selected_brands);
        }

        if($this->featured){
            $productQuery->where('is_featured', 1);
        }

        if($this->on_sale){
            $productQuery->where('on_sale', 1);
        }

        if($this->price_range){
            $productQuery->whereBetween('price', [0, $this->price_range]);
        }

        if($this->sort == 'latest'){
            $productQuery->latest();
        }

        if($this->sort == 'price'){
            $productQuery->orderBy('price');
        }

        $products = $productQuery->paginate(12);
        $brands = Brand::where('is_active',1)->get();
        $categories = Category::where('is_active',1)->get();
        $image = url('storage','home/brand-image.jpg');
        $robots='index,follow';

        return view('livewire.products-page', [
            'products'=>$products,
            'brands'=>$brands,
            'categories'=>$categories,
            'SEOData' => new SEOData(
                title: $this->title,
                description: $this->description,
                image: $image,
                robots: $robots,
            ),
            'schema' => $this->structuredData() ? $this->structuredData()->toScript() : null,
        ]);
    }
}
