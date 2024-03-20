<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <a wire:click="doLogout" style="cursor:pointer;" class="dropdown-item">Logout</a>
        </div>
        HTML;
    }

    public function doLogout()
    {
        auth()->logout();

        return $this->redirect('/login');
    }
}
