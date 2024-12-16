<?php

namespace App\Livewire\Partials;

use App\Helpers\CartManagement;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    public $total_count = 0;

    public function mount(){
        $this->total_count = count(CartManagement::getCartItemsFromCookie());
    }

    #[On('update-cart-count')]
    public function updateCartCount($total_count){
        $this->total_count = $total_count;
    }
    public function render()
    {
        $brands = Brand::where('is_active',1)->get();
        $categories = Category::where('is_active',1)->get();
        return view('livewire.partials.navbar',[
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }
}
