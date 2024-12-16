<?php

namespace App\Livewire;

use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Log;
use App\Helpers\CartManagement;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

#[Title('Checkout')]
class CheckoutPage extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $street_address;
    public $city;
    public $state;
    public $zip_code;
    public $payment_method;
    public $saved_address;

    public function mount()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        if(count($cart_items) == 0){
            return redirect('/products');
        }
        $order = auth()->user()->orders()->latest()->first();
        $this->saved_address = optional($order)->address()->first();
        $this->first_name = optional($this->saved_address)->first_name;
        $this->last_name = optional($this->saved_address)->last_name;
        $this->phone = optional($this->saved_address)->phone;
        $this->street_address = optional($this->saved_address)->street_address;
        $this->city = optional($this->saved_address)->city;
    }
    public function placeOrder()
    {
            $this->validate([
                'first_name' => 'required|min:3',
                'last_name' => 'required|min:3',
                'phone' => 'required',
                'street_address' => 'required',
                'city' => 'required',
                'payment_method' => 'required',
            ]);


            $cart_items = CartManagement::getCartItemsFromCookie();

            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->grand_total = CartManagement::calculateGrandTotal($cart_items);
            $order->payment_method = $this->payment_method;
            $order->payment_status = 'pending';
            $order->status = 'new';
            $order->currency = 'Ksh';
            $order->shipping_amount = 0;
            $order->notes = 'Order placed by ' . auth()->user()->name;

            $address = new Address();
            $address->first_name = $this->first_name;
            $address->last_name = $this->last_name;
            $address->phone = $this->phone;
            $address->street_address = $this->street_address;
            $address->city = $this->city;
            $address->state = "Kenya";

            $redirect_url = route('success');

            $order->save();
            $address->order_id = $order->id;
            $address->save();
            $order->items()->createMany($cart_items);
            CartManagement::clearCartItems();
            Mail::to(request()->user())->send(new OrderPlaced($order));
            return redirect($redirect_url);

    }

    public function render()
    {
        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);

        return view('livewire.checkout-page', [
            'cart_items' => $cart_items,
            'grand_total' => $grand_total,
        ]);
    }
}
