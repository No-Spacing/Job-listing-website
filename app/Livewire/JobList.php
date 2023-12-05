<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendResume;

class JobList extends Component
{
    use WithFileUploads;

    public $company = '';

    #[Validate('required|min:6')]
    public $name = '';

    #[Validate('required|mimes:pdf')]
    public $resume = '';

    public function submitConverge(){

        $this->validate();

        $title = "Converge ICT Solutions INC.";

        Mail::to('jerichovega06@gmail.com')->send(new SendResume($this->resume, $this->name, $title));

        session()->flash('messageConverge', 'Your Resume has sent to Converge ICT Solutions INC.');
        
    }

    public function submitAeon(){

        $this->validate();

        $title = "Aeon Credit Service";

        Mail::to('jerichovega06@gmail.com')->send(new SendResume($this->resume, $this->name, $title));

        session()->flash('messageAeon', 'Your Resume has sent to Aeon Credit Service.');
        
    }

    public function submitTrimms(){

        $this->validate();
        
        $title = "Tri-S Manpower Management Services";

        Mail::to('jerichovega06@gmail.com')->send(new SendResume($this->resume, $this->name, $title));

        session()->flash('messageTrimms', 'Your Resume has sent to Tri-S Manpower Management Services.');
        
    }

    public function render()
    {
        return view('livewire.job-list');
    }
}
