<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.login.index');

    }
}
