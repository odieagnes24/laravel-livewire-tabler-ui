<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    #[Rule('required|email')]
    public string $email; 
    
    #[Rule('required')]
    public string $password;

    public function authenticate()
    {
        $executed = RateLimiter::attempt(
            'do-login:' . request()->ip(),
            $perMinute = 5,
            function() {
                $this->validate();

                if (! auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
                    $this->reset('password');
        
                    return session()->flash('invalid-status', 'Invalid credentials!');
                }

                request()->session()->regenerate();
        
                return $this->redirect('/');
            }
        );

        if (! $executed) {
        return abort(429);
        }
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('components.layouts.auth');
    }
}
