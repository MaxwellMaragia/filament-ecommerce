<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ChangePassword extends Component
{
    use LivewireAlert;
    public string $password;
    public string $password_confirmation;

    public function change_password()
    {
        $this->validate([
            'password' => 'required|min:8|confirmed'
        ]);

        if (auth()->user()->update(['password' => Hash::make($this->password)])) {
            $this->alert('success', 'Password changed successfully!', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
                'background' => 'success',
            ]);
            redirect('/logout');

        } else {
            session()->flash('error', 'Something went wrong or password reset link expired');
        }



    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
