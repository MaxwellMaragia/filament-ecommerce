<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Reset your password')]
class ForgotPasswordPage extends Component
{
    public string $email;

    public function forgot()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('success','Password reset link has been sent to your email');
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password-page');
    }
}
