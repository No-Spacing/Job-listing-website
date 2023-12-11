<div>
    <div class="container-fluid">
        <div class="d-flex justify-content-center"> 
            <img style="height:auto; width:2080px;" src="{{ Storage::url('images/buildingimage.png') }}" class="img-fluid" alt="...">
        </div>
        <div class="red-bar text-white py-3">
            <p class="text-center fs-3">Providing decent work for Filipinos Nationwide</p>
            <form class="d-flex justify-content-center" wire:submit="submitSearch">
                <input class="form-control search-bar me-2" wire:model="search" type="search" placeholder="Search for Jobs" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>

        <div class="py-3">
            <h1 class="text-center mb-4">Services</h1>
            <div class="container d-flex justify-content-between">
                <img src="{{ Storage::url('images/people_workflow.jpg') }}" class="img-fluid" style="height: auto; width: 450px" alt="...">
                <p class="col-lg-5" 
                    style="color: black; 
                    font-size: 20px; 
                    font-family: Poppins; 
                    font-weight: 400; word-wrap: break-word">
                    Janitorial and Maintenace Sales &<br>
                    Merchandising Motorized Messenger<br>
                    Services Included:<br>
                    Comprehensive Staffing<br>
                    Employee Orientation<br>
                    Compensation Management /
                    Payroll Operations
                    Recruitment & Staffing<br>
                    Human Resource Operations<br>
                    Training & Development<br>
                    Workforce Management
                </p>
            </div>
        </div>

        <div class="py-3 bg-light">
            <h1 class="text-center mb-4">About</h1>
            <div class="container d-flex justify-content-between">
                <p class="col-lg-6">
                    <span style="color: #EA2326; 
                        font-size: 70px; font-family: 
                        Poppins; font-weight: 400; 
                        word-wrap: break-word">T
                    </span>
                    <span style="color: black; 
                        font-size: 20px; 
                        font-family: Poppins; 
                        font-weight: 700; 
                        word-wrap: break-word">RI - S MANPOWER MANAGEMENT SERVICES
                    </span>
                    <span style="color: black; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                    is dedicated to bridging the gap between talent and opportunity, 
                    offering a comprehensive suite of workforce solutions designed 
                    to meet the ever-evolving demands of the modern business landscape.
                    As a client-centric organization, Tri-S understands the significance 
                    of human capital in driving success, and thus, it specializes in providing 
                    top-notch staffing services to businesses of all sizes.
                    </span>
                </p>
                <img src="{{ Storage::url('images/community.jpg') }}" class="img-fluid" style="height: auto; width: 450px" alt="...">
            </div>
        </div>

        <div class="py-3">
            <div class="container d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <img class="" src="{{ Storage::url('images/logo2.png') }}" style="height: 50px; width: 50px"/>
                    <h6 class="">TRI-S MANPOWER <br> MANAGEMENT SERVICES</h6>
                </div>
                <div class="d-flex flex-column">
                    <h6>Quick Links</h6>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/job-list') }}">Job List</a>
                    <a href="{{ url('/about') }}">About Us</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </div>
                <div class="d-flex flex-column">
                    <h6>Country</h6>
                    <span>Philippines</span>
                </div>
                <div class="d-flex flex-column">
                    <h6>Contact Details</h6>
                    <span>(02)397-9201 | 0998-792-1769</span>
                    <span>recruitment.trismanpower@gmail.com</span>
                    <span>Suite 407 Columbian Building 160 <br> West Avenue Brgy. Philam, Quezon City</span>
                </div>

            </div>
        </div>
    </div>
</div>
