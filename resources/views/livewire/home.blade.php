<div>
   
    <div class="d-flex justify-content-center"> 
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/job-search.jpg" class="d-block">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Job Finder</h5>
                        <p>Helps Filipino workers to find suitable jobs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3">
        <h1 class="text-center mb-4">Services</h1>
        <div class="row justify-content-center">
            <div class="col-3">
                <img src="images/people_workflow.jpg" class="img-fluid" style="height: auto; width: 450px" alt="...">
            </div>
            <div class="col-sm-3">
                <p>
                    Computer support<br>
                    Cybersecurity<br>
                    Networks and systems<br>
                    Software development<br>
                    Web development<br>
                    Data<br>
                    Cloud computing<br>
                </p>
            </div>
        </div>
    </div>

    <div class="py-3 bg-light">
        <h1 class="text-center mb-4">About</h1>
        <div class="row justify-content-center">
            <div class="col-3">
                <p>
                    <!-- Put your website description here -->
                    Job Finding Website is a website that look for jobs that is suited for you.
                </p>   
            </div>
            <div class="col-3 ">
                <img src="images/job-search-cover.jpeg" class="img-fluid" style="height: auto; width: 450px" alt="...">
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="container d-flex justify-content-between">
            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center mb-2">
                    <img class="d-flex justfify-content-center" src="images/job-icon.png" style="height: 50px; width: 50px"/>
                </div>
                <h6 class="">Job Finding <br> Website</h6>
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
                <span>Contact number</span>
                <span>yourcompany@email.com</span>
                <span>Your company address</span>
            </div>

        </div>
    </div>
   
</div>
