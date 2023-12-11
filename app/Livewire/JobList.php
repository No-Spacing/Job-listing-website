<?php

namespace App\Livewire;

use Livewire\Attributes\Validate; 
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendResume;
use App\Models\Job;
use Livewire\Attributes\Url;

class JobList extends Component
{
    use WithFileUploads;

    public $company = '';

    #[Validate('required|min:6')]
    public $name = '';

    #[Validate('required|mimes:pdf')]
    public $resume = '';

    #[Url] 
    public $search = '';

    public function submitResume(){

        $this->validate();

        $title = "Converge ICT Solutions INC.";

        Mail::to('jerichovega06@gmail.com')->send(new SendResume($this->resume, $this->name, $title));

        session()->flash('messageConverge', 'Your Resume has sent to Converge ICT Solutions INC.');
        
    }

    public function render()
    {
        return view('livewire.job-list')->with([
            'jobs' => Job::where('name', 'like', '%' . $this->search . '%')->get()    
        ]);
    }
}
