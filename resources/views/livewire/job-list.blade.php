<div>
    
    <div class="red-bar container mt-3 py-3">
        <h1 class="text-center text-white">Job List</h1>
        <div class="d-flex justify-content-center">
            <input class="form-control search-bar me-2" wire:model.live="search" type="search" placeholder="Search" aria-label="Search">
        </div>
    </div>   
    <div class="d-flex container py-5">
        <div class="container">
            @foreach($jobs as $job)
            <div class="card container">
                <img class="pt-3" src="{{ Storage::url($job->image) }}" style="height: auto; width: 150px;"/>
                <div class="card-body">
                    <h5 class="card-title">{{ $job->name }}</h5>
                    <p class="card-text">
                        {{ $job->description }}
                    </p><br>
                    <div class="d-flex justify-content-end">
                        <a href="#" wire:click="$set('company', {{ $job->id }})" class="btn btn-primary stretched-link">Select</a>
                    </div>
                </div>        
            </div>
            @endforeach
        </div>

        @foreach($jobs as $job)
            @if($company == $job->id)
                <div class="card container">
                    
                    <img class="pt-3" src="{{ Storage::url($job->image) }}" style="height: auto; width: auto;"/>

                    <div class="card-body">        
                        <h5 class="card-title">{{ $job->name }}</h5>
                        <p class="card-text">
                            {{ $job->description }}
                        </p><br>
                        <p class="card-text">
                            {{ $job->requirements }}
                        </p>
            
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Quick Apply
                            </button>
                        </div>
                        
                        <!-- Modal -->
                        <div class="modal fade" wire:ignore.self id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $job->name }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <form wire:submit.prevent="submitResume">
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                @error('name') 
                                                    <span class="error text-danger">
                                                        {{ $message }}
                                                    </span> 
                                                @enderror 
                                                <input type="text" wire:model.defer="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-2">
                                                <label for="fileID"class="form-label">Resume</label>
                                                @error('resume') 
                                                    <span class="error text-danger">
                                                        {{ $message }}
                                                    </span> 
                                                @enderror 
                                                <input type="file" wire:model.defer="resume" class="form-control" id="fileID">
                                            </div>
                                            <div class="mb-2 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                <label class="form-check-label" for="exampleCheck1">I Agree to Terms & Conditions</label>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
