<?php

namespace App\Livewire\Partials;

use App\Models\Product;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = '';

    public function render()
    {
        $results = [];

        if(strlen($this->search) > 2){
            $results = Product::where('name', 'like', '%' . $this->search . '%')->limit(7)->get();
        }
        return view('livewire.partials.search-bar', ['results' => $results]);
    }
}
