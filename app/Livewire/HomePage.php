<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\SchemaOrg\Schema;

#[Title('Home Page  - Solar & Lights Hub')]
class HomePage extends Component
{
    use LivewireAlert;

    public string $title;
    public string $description;

    //add product to cart method
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


    public function structuredData()
    {
        $organization = Schema::Organization()
            ->name(env('APP_NAME'))
            ->alternateName('Pure Lights & Solar')
            ->alternateName('PureLightsAndSolar KE')
            ->alternateName(env('APP_URL'))
            ->description($this->description)
            ->url(canonical_url())
            ->sameAs([
                config('seo.social.facebook'),
                config('seo.social.twitter'),
                config('seo.social.instagram'),
            ])
            ->image(
                Schema::imageObject()->caption(env('APP_NAME') . ' Brand image')
                    ->identifier(url('storage', 'home/brand-image.png'))
                    ->url(url('storage', 'home/brand-image.png'))
                    ->image(url('storage', 'home/brand-image.png'))
                    ->height(500)
                    ->width(500)
            )
            ->logo(
                Schema::imageObject()->caption(env('APP_NAME') . ' logo')
                    ->identifier(url('storage', 'home/logo.png'))
                    ->url(url('storage', 'home/logo.png'))
                    ->image(url('storage', 'home/logo.png'))
            )
            ->founder(
                Schema::person()->givenName('Maxwell')
                    ->familyName('Maragia')
                    ->jobTitle('Founder of ' . env('APP_NAME'))
                    ->sameAs(['https://www.linkedin.com/in/maxwell-maragia/', 'https://github.com/maxwellmaragia', 'https://x.com/maxmaragia'])
            );

            $organization->contactPoint([
                Schema::contactPoint()
                    ->contactType('Customer Service')
                    ->telephone(config('seo.social.phone'))
                    ->email(config('seo.social.email'))
                    ->url(config('seo.social.facebook'))
                    ,
                Schema::contactPoint()->areaServed('Kenya')
                    ->contactType('Whatsapp')
                    ->telephone(config('seo.social.whatsapp'))
                    ->url(config('https://wa.me/'.config('seo.social.whatsapp')))
                ]
        );

        return $organization;
    }


    public function render()
    {
        $brands = Brand::where('is_active', 1)
            ->withCount('products')
            ->having('products_count', '>', 0)
            ->get();

        $categories = Category::where('is_active', 1)
            ->withCount('products')
            ->having('products_count', '>', 0)
            ->get();

        $products = Product::where('is_active', 1)->orderBy('created_at', 'asc')
            ->take(8)
            ->get();
        $this->title = env('app_name') . " | Online Shopping for Solar Flood lights, Ceiling lights, Energy saving bulbs, Snake lights, Party lights & More in Kenya";
        $this->description = env('app_name') . " in Kenya ✓ Buy Solar Flood lights, Ceiling lights, Energy saving bulbs, Snake lights, Party lights & More from reliable Brands ✓ Pay on Delivery";

//        $title = (config('seo.homepage.title',[
//            'appName'=>env('app_name')
//        ]));
        $image = url('storage', 'home/brand-image.jpg');
        $robots = 'index,follow';
        return view('livewire.home-page',
            [
                'brands' => $brands,
                'categories' => $categories,
                'products' => $products,
                'SEOData' => new SEOData(
                    title: $this->title,
                    description: $this->description,
                    image: $image,
                    robots: $robots,
                ),
                'schema' => $this->structuredData()->toScript()
            ]
        );
    }
}
