<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class UpdateProfile extends Component
{
    use LivewireAlert;
    public $name;

    public function updateName()
    {
        $this->validate([
            'name' => 'required|min:3'
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->save();
        $this->alert('success', 'Profile updated successfully!',[
            'position'=>'top-right',
            'timer'=>3000,
            'toast'=>true,
            'background'=>'success',
        ]);

    }

    public function render()
    {
        return view('livewire.update-profile');
    }
}
