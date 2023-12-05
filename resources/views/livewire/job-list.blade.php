<div>
    
    <div class="red-bar container mt-3">
        <h1 class="text-center text-white">Job List</h1>
    </div>   
    <div class="d-flex container py-5">
        <div class="container">
            <div class="card container">
                <img class="pt-3" src="{{ Storage::url('images/converge.png') }}" style="height: auto; width: 150px;"/>
                <div class="card-body">
                    <h5 class="card-title">Converge ICT Solutions INC.</h5>
                    <p class="card-text">
                        Converge provides the absolute premium fiber 
                        internet experience for home, businesses and 
                        in the corporate world, we are the brand of choice.
                    </p><br>
                    <div class="d-flex justify-content-end">
                        <a href="#" wire:click="$set('company', 'converge')" class="btn btn-primary stretched-link">Select</a>
                    </div>
                </div>        
            </div>

            <div class="card container">
                <img class="pt-3" src="{{ Storage::url('images/aeon.png') }}" style="height: auto; width: 70px;"/>
                <div class="card-body">
                    <h5 class="card-title">Aeon Credit Service</h5>
                    <p class="card-text">
                        Aeon Philippines is the best online lending company in the Philippines. 
                        Minimum requirements needed and low interest rates.
                    </p><br>
                    <div class="d-flex justify-content-end">
                        <a href="#" wire:click="$set('company', 'aeon')" class="btn btn-primary stretched-link">Select</a>
                    </div>
                </div>
            </div>

            <div class="card container">
            <img class="pt-3" src="{{ Storage::url('images/logo2.png') }}" style="height: auto; width: 70px;"/>
                <div class="card-body">
                    <h5 class="card-title">Tri-S Manpower Management Services</h5>
                    <p class="card-text">
                        The Tri-S Manpower Management Services is a legitimate Job 
                        Contractor/Subcontractor recognized by the Department of Labor 
                        and Employment with License No.
                    </p><br>
                    <div class="d-flex justify-content-end">
                        <a href="#" wire:click="$set('company', 'manpower')" class="btn btn-primary stretched-link">Select</a>
                    </div>
                </div>
            </div>
        </div>

        @if($company == 'converge')
            <div class="card container">
                
                <img class="pt-3" src="{{ Storage::url('images/converge_cover.jpg') }}" style="height: auto; width: auto;"/>

                <div class="card-body">        
                    <h5 class="card-title">Converge</h5>
                    <p class="card-text">
                        Converge provides the absolute premium fiber 
                        internet experience for home, businesses and 
                        in the corporate world, we are the brand of choice.
                    </p><br>
                    <p class="card-text">
                        WE'RE HIRING‼️<br>
                        📌SALES AGENT<br>
                        <br>
                        QUALIFICATIONS:<br>
                        - Must have sales related working<br>
                        - Can work in field independently<br>
                        - Can negotiate to Company's Top Management<br>
                        EMPLOYMENT DETAILS<br>
                        ☑️Unlimited Income<br>
                        ☑️FREE Training (Online)<br>
                        ☑️ Life Insurance<br>
                        REQUIREMENTS:<br>
                        ☑️Resume/Bio-data<br>
                        ☑️(1) Valid ID<br>
                        ☑️Brgy. Clearance/Police or NBI Clearance (1 only).
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
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Converge</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    @if (session()->has('messageConverge'))
                                        <div class="alert alert-success">
                                            {{ session('messageConverge') }}
                                        </div>
                                    @endif
                                    <form wire:submit.prevent="submitConverge">
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
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
        @elseif($company == 'manpower')
            <div class="card container"> 
                <img class="pt-3" src="{{ Storage::url('images/manpower_cover.jpg') }}" style="height: auto; width: auto;"/>
                <div class="card-body">        
                    <h5 class="card-title">Tri-S Manpower Management Services</h5>
                    <p class="card-text">
                        The Tri-S Manpower Management Services is a legitimate Job 
                        Contractor/Subcontractor recognized by the Department of Labor 
                        and Employment with License No.
                    </p><br>
                    <p class="card-text">
                        We're Hiring!<br>
                        Our client is currently looking for a Merchandise Auditor.<br>
                        This is a project based employment only.<br>
                        Fully remote and with Competitive Salary. <br>
                        <br>
                        Job Responsibilities:<br>
                        📌 Site Audit<br>
                        📌 Product Categorization<br>
                        📌 Category Benchmarking and Review<br>
                        📌 Support in Publishing Process Design<br>
                        <br>
                        Job Qualifications:<br>
                        📌 Experience in Retail<br>
                        📌 Experience in merchandising in groceries<br>
                        📌 Experience in e-commerce is a plus<br>
                        <br>
                        You may send your resume at:<br>
                        Email: trismmshrd.asst@gmail.com<br>
                        Contact Number: 0951 079 4421
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
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tri-S Manpower Management Services</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    @if (session()->has('messageTrimms'))
                                        <div class="alert alert-success">
                                            {{ session('messageTrimms') }}
                                        </div>
                                    @endif
                                    <form wire:submit.prevent="submitTrimms">
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
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
        @elseif($company == 'aeon')
        <div class="card container"> 
                <img class="pt-3" src="{{ Storage::url('images/aeon_cover.jpg') }}" style="height: auto; width: auto;"/>
                <div class="card-body">        
                    <h5 class="card-title">Aeon Credit Service</h5>
                    <p class="card-text">
                        Aeon Philippines is the best online lending company in the Philippines. 
                        Minimum requirements needed and low interest rates.
                    </p>
                    <p class="card-text">
                        WE'RE HIRING‼<br>
                        <br>
                        We are looking for professional and passionate individuals to join our team as:<br>
                        📌SALES PROMOTER<br>
                        for AEON CREDIT SERVICES INC.<br>
                        <br>
                        Qualifications:<br>
                        📌 With at least 6 monts to 1 year Sales Experience<br>
                        📌 High School Graduate / College Level<br>
                        📌 NO Pending Itime<br>
                        ❌ NO Visible Tattoo<br>
                        <br>
                        Employment Details:<br>
                        ✅ 610/day (Metro Manila) | 550/day (Province)<br>
                        ✅ Paid Training (5 days)<br>
                        ✅ Laptop & Pocket Wifi Provided<br>
                        ✅ Life Insurance<br>
                        <br>
                        You may send your resume at:<br>
                        Email: recruitment.trismanpower@gmail.com<br>
                        Subject: (Input here your preferred POSITION - AREA)<br>
                        0910-717-1958 or message us here.<br>
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
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Aeos Credit Service</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    @if (session()->has('messageAeon'))
                                        <div class="alert alert-success">
                                            {{ session('messageAeon') }}
                                        </div>
                                    @endif
                                    <form wire:submit.prevent="submitAeon">
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
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
    </div>
</div>
