<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use http\Env;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\SchemaOrg\Schema;

class BrandsPage extends Component
{
    use LivewireAlert;
    public $slug;
    public $description;
    public $brand;
    public $title;
    public $image;

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

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->brand = Brand::with('products')->where('slug', $slug)->first();

        $this->title = $this->brand->name.' products - '.env('APP_NAME').' in Kenya';
        $this->description = "Explore {$this->brand->name} products Catalog in Kenya on ".env('APP_NAME')." - Amazing Deals & Discounts for {$this->brand->name} products";
        $this->image = url('storage',$this->brand->image);

    }

    public function structuredData()
    {
        $brand = Brand::where('slug', $this->slug)->first();
        $paginatedProducts = $brand->products()->where('is_active', 1)->paginate(12);
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
            ->name($brand->name)
            ->description($this->description ?? 'brand description')
            ->url(url()->current())
            ->mainEntity(Schema::itemList()->itemListElement($itemList));
    }

    public function render()
    {
        $robots="index,follow";
        $brand = Brand::where('slug', $this->slug)->first();
        $products = $brand->products()->where('is_active', 1)->paginate(12);

        if($brand->products()->where('is_active','1')->count() < 1){
            $robots="noindex,follow";
        }

        return view('livewire.brands-page',[
            'brand' => $brand,
            'products' => $products,
            'SEOData' => new SEOData(
                title: $this->title,
                description: $this->description,
                image: $this->image,
                robots: $robots,
            ),
            'schema' => $this->structuredData() ? $this->structuredData()->toScript() : null,
        ]);
    }
}
