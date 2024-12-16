<?php

namespace App\Console\Commands;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemaps:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $brands_sitemap = Sitemap::create();
        Brand::where('is_active', 1)
            ->each(function (Brand $brand) use ($brands_sitemap) {
                if($brand->products()->count() > 0 ) {
                    $brands_sitemap->add(
                        Url::create("/brands/{$brand->slug}")->setLastModificationDate($brand->updated_at)
                    );
                }
            });

        $categories_sitemap = Sitemap::create();
        Category::where('is_active', 1)
            ->each(function (Category $category) use ($categories_sitemap) {
                if($category->products()->count() > 0){
                    $categories_sitemap->add(
                        Url::create("/categories/{$category->slug}")->setLastModificationDate($category->updated_at)
                    );
                }
            });

        $products_sitemap = Sitemap::create();
        Product::where('is_active', 1)
            ->where('in_stock', 1)
            ->each(function (Product $product) use ($products_sitemap) {
                $products_sitemap->add(
                    Url::create("/products/{$product->slug}")
                        ->setLastModificationDate($product->updated_at)
                    ->addImage(url('storage',$product->images[0]))
                );
            });

        $brands_sitemap->writeToFile(public_path('sitemap-brand-en.xml'));
        $categories_sitemap->writeToFile(public_path('sitemap-category-en.xml'));
        $products_sitemap->writeToFile(public_path('sitemap-products-en.xml'));
    }
}
