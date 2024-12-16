<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class LoginPage extends Component
{
    public string $email;
    public string $password;

    public function login(){
        $this->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if(!auth()->attempt(['email' => $this->email, 'password' => $this->password])){
            $this->addError('login', 'Invalid credentials provided.');
            return;
        }

        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
