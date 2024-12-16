<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('Reset your password')]
class ResetPasswordPage extends Component
{
    use LivewireAlert;

    public $token;
    #[Url]
    public string $email;
    public string $password;
    public string $password_confirmation;

    public function mount($token)
    {
        $this->token = $token;
    }

    public function reset_password()
    {
        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset([
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
            'token' => $this->token,
        ],
            function (User $user, $password) {
                $password = $this->password;
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->setRememberToken(Str::random(60));
                $user->save();
                event(new PasswordReset($user));
            }
        );

//        return $status === Password::PASSWORD_RESET ? redirect('/login') : session()->flash('error', 'Something went wrong or password reset link expired');

        if ($status === Password::PASSWORD_RESET) {
            $this->alert('success', 'Password changed successfully!', [
                'position' => 'top-right',
                'timer' => 3000,
                'toast' => true,
                'background' => 'success',
            ]);
            redirect('/login');
        } else {
            session()->flash('error', 'Something went wrong or password reset link expired');
        }
    }

    public function render()
    {
        return view('livewire.auth.reset-password-page');
    }
}
