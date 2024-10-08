<!DOCTYPE html>
<body xmlns="http://www.w3.org/1999/xhtml" lang="en-US" class="video videoloop videopreload fa-events-icons-ready no-videoogg videoh264 no-videowebm is-safari is-webkit no-videoautoplay">

<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">


        <meta name="robots" content="index, follow">

        <link rel="icon" href="{{ asset('/img/favicon/msl-icon.png') }}" type="image/png">

      

        <title>@yield('title')</title>

        <meta name="Description" content="Middle East Shipping Agent.">



        <!-- Style Sheets -->

        <link rel="stylesheet" href="{{asset('css/landing.css')}}">
        <link rel="stylesheet" href="{{asset('css/overview.css')}}">
        @yield('style') ;
        <link rel="stylesheet" href="{{asset('css/global-navigation.css')}}">
        <link rel="stylesheet" href="{{asset('css/services-navigation.css')}}">
        <link rel="stylesheet" href="{{asset('css/global-footer.css')}}">


        <!-- Scripts -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/5caf55bc5f.js"></script>

        <script type="text/javascript" src="{{asset('js/head.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/lazy-load.js')}}"></script>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23984892-1"></script>

</head>
</body>

        @yield('container')

        <input type="checkbox" id="ac-gn-menustate" class="ac-gn-menustate">

        @include("layouts.nav")

        @yield('content')

        @include("layouts.footer")


        <script type="text/javascript" src="{{asset('js/body.js')}}"></script>
        <script>
                document.addEventListener("DOMContentLoaded", function() {
         const servicesLink = document.getElementById('services-link');
         const dropdownMenu = document.getElementById('dropdown-menu');
     
         // Toggle dropdown visibility on click
         servicesLink.addEventListener('click', function(event) {
             event.stopPropagation(); // Prevent the event from bubbling up
             dropdownMenu.classList.toggle('show');
         });
     
         // Close the dropdown if clicked outside
         document.addEventListener('click', function(event) {
             if (!servicesLink.contains(event.target) && !dropdownMenu.contains(event.target)) {
                 dropdownMenu.classList.remove('show');
             }
         });
     });
     
     
             </script>
</body>
</html>
