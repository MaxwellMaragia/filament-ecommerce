<?php

namespace App\Livewire;

use Livewire\Component;

class AccountPage extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $street_address;
    public $city;
    public $state;
    public $saved_address;

    public function mount(){
        $order = auth()->user()->orders()->latest()->first();
        $this->saved_address = optional($order)->address()->first();
        $this->first_name = optional($this->saved_address)->first_name;
        $this->last_name = optional($this->saved_address)->last_name;
        $this->phone = optional($this->saved_address)->phone;
        $this->street_address = optional($this->saved_address)->street_address;
        $this->city = optional($this->saved_address)->city;
    }

    public function render()
    {
        return view('livewire.account-page');
    }
}
