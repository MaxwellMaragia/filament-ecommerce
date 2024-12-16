<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

#[Title('My orders')]
class MyOrdersPage extends Component
{
    public function render()
    {
        $my_orders = Order::where('user_id', auth()->id())->latest()->paginate(5);
        return view('livewire.my-orders-page',
            [
                'orders'=>$my_orders
            ]);
    }
}
