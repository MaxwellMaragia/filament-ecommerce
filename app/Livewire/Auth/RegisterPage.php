<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class RegisterPage extends Component
{
    use LivewireAlert;
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;


    public function save()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        auth()->login($user);
        $this->alert('success', 'User account created successfully!',[
            'position'=>'top-right',
            'timer'=>3000,
            'toast'=>true,
            'background'=>'success',
        ]);
        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
