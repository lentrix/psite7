<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP-NAME')}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
</head>
<body>

    <div class="landing">
        <a href="#home">
          <img src="{{asset('images/psite_central_visayas_logo.png')}}" alt="PSITE7 Logo" id="logo">
        </a>
        <p class="title">
          PHILIPPINE SOCIETY OF INFORMATION TECHNOLOGY EDUCATORS<br>
          CENTRAL VISAYAS REGION
        </p>
        <div class="icon-links">
          <a href="#" class="icon-link">
            <img src="{{asset('images\about_us_icon.png')}}" alt="About Us">
            <div class="icon-link-label">About Us</div>
          </a>
          <a href="" class="icon-link">
            <img src="{{asset('images\membership_icon.png')}}" alt="Membership">
            <div class="icon-link-label">Membership</div>
          </a>
          <a href="#" class="icon-link">
            <img src="{{asset('images\activities_icon.png')}}" alt="Activities">
            <div class="icon-link-label">Activities</div>
          </a>
          <a href="#" class="icon-link">
            <img src="{{asset('images\announcements_icon.png')}}" alt="Announcements">
            <div class="icon-link-label">Announcements</div>
          </a>
          <a href="#" class="icon-link">
            <img src="{{asset('images\members_area_icon.png')}}" alt="Members' Area">
            <div class="icon-link-label">Members' Area</div>
          </a>
          <a href="#" class="icon-link">
            <img src="{{asset('images\gallery_icon.png')}}" alt="Gallery">
            <div class="icon-link-label">Gallery</div>
          </a>
        </div>
    </div>

</body>
</html>
