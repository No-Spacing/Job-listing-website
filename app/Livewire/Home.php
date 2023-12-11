<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $search = '';

    public function submitSearch(){
        $this->redirectRoute('joblist', ['search' => $this->search]);
    }

    public function render()
    {
        return view('livewire.home');
    }
}
