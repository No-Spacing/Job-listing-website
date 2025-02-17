<!DOCTYPE html>
<style>
    html {
        position: relative;
        min-height: 100%;
        padding-bottom:50px;
    }
    body {
        margin-bottom: 160px;
    }
    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 50px;
    }
</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" type="image/x-icon" href="images/job-icon.png">
        <title>{{ $title ?? 'Job Finder' }}</title>
    </head>
    <body>
        @include('components.layouts.navbar')
        {{ $slot }}
        <div class="footer"> 
            <div class="d-flex flex-row bg-dark pt-3 container-fluid ">
                <div class="col-md-12 container">
                    <!-- <div class="col col-xl-2">
                        <h4 style="color: white;">Daet Branch</h4>
                        <p style="color: white;">Kenboy Bldg, Central Plaza Complex, Brgy Lag-on, Daet Camarines Norte.</p>
                    </div> -->
                    <div class=" d-flex justify-content-center">
                        <p style="color: white;">COPYRIGHT © 2023 Job Finding Website. All rights reserved.</p>
                    </div>   
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    
</html>
