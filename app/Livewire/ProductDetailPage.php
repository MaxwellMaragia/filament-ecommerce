<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\SchemaOrg\Schema;

class ProductDetailPage extends Component
{
    use LivewireAlert;

    public $slug;
    public $quantity = 1;
    public $cart_item;
    public $product;
    public string $title;
    public string $description;
    public string $image;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->product = Product::where('slug', $this->slug)->firstOrFail();
        if (!$this->product->in_stock | !$this->product->is_active) {
            return redirect()->to('/categories/' . $this->product->category->slug);
        }


        $this->cart_item = CartManagement::getCartItemFromCookie($slug);

        if ($this->cart_item) {
            $this->quantity = $this->cart_item['quantity'];
        } else {
            $this->quantity = 1;
        }
    }

    public function increaseQty()
    {
        $this->quantity++;
    }

    public function decreaseQty()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemsToCartWithQty($product_id, $this->quantity);
        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);
        $this->alert('success', 'Product added to cart successfully!', [
            'position' => 'top-right',
            'timer' => 3000,
            'toast' => true,
            'background' => 'success',
        ]);
    }

    public function structuredData()
    {
        return Schema::product()
            ->name($this->product->name)
            ->description($this->description)
            ->brand(Schema::brand()->name($this->product->brand->name))
            ->image(
                Schema::imageObject()->caption($this->product->name)
                    ->identifier(url('storage', $this->image))
                    ->url(url('storage', $this->image))
                    ->image(url('storage', $this->image))
                    ->thumbnailUrl(url('storage', $this->image))
            )
            ->category($this->product->category->name)
            ->offers(
                Schema::offer()
                    ->url(canonical_url())
                    ->price($this->product->price)
                    ->priceCurrency('KES')
                    ->availability('http://schema.org/InStock')  // Use schema URL for availability
                    ->itemCondition('http://schema.org/NewCondition')
            );

    }

    public function render()
    {
        $this->title = $this->product->name . " - " . env('app_name') . " in Kenya";
        $this->description = "Discover " . $this->product->name . " at " . env('app_name') . ". Designed for efficiency and reliability, our products deliver optimal performance for your energy and lighting needs. Perfect for sustainable solutions.";
        $this->image = url('storage', $this->product->images[0]);
        $robots = "index,follow";
        return view('livewire.product-detail-page',
            [
                'product' => $this->product,
                'SEOData' => new SEOData(
                    title: $this->title,
                    description: $this->description,
                    image: $this->image,
                    robots: $robots,
                ),
                'schema' => $this->structuredData()->toScript()
            ]);
    }
}
