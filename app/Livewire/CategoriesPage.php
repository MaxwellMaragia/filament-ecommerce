<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\SchemaOrg\Schema;


class CategoriesPage extends Component
{
    use LivewireAlert;

    public $slug;
    public $category;
    public $title;
    public $description;
    public $image;

    // Add product to cart method
    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemsToCart($product_id);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
        $this->alert('success', 'Product added to cart successfully!', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
            'background' => 'success',
        ]);
    }

    // Mount method to get the category details
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->category = Category::with('products')->where('slug', $slug)->first();

        $this->title = $this->category->name . ' - ' . env('APP_NAME') . ' in Kenya';
        $this->description = "Discover top-quality {$this->category->name} at " . env('APP_NAME') . ". Explore reliable and sustainable energy solutions designed for homes and businesses in Kenya.";
        $this->image = url('storage', $this->category->image);
    }

    // Structured data for SEO (updated to handle pagination properly)
    public function structuredData()
    {
        $category = Category::where('slug', $this->slug)->first();
        $paginatedProducts = $category->products()->where('is_active', 1)->paginate(12);
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
            ->name($category->name)
            ->description($this->description ?? 'Category description')
            ->url(url()->current())
            ->mainEntity(Schema::itemList()->itemListElement($itemList));
    }



    // Render method to pass products and other data to the view
    public function render()
    {
        $robots = "index,follow";

        // Fetch paginated products for the view
        $products = $this->category->products()->where('is_active', 1)->paginate(12);

        // Adjust SEO meta if no products are found
        if ($products->total() < 1) {
            $robots = "noindex,follow";
        }

        return view('livewire.categories-page', [
            'category' => $this->category,
            'categories' => Category::where('is_active', 1)->get(),
            'products' => $products, // Pass paginated products
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
