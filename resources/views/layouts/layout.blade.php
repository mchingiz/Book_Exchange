<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h"
    crossorigin="anonymous">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/animate.css">      
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/fl-bigmug-line.css">  
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/book-card.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/comments.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/profile.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <header class="site-navbar py-1" role="banner">
      <div class="container">
        <div class="row align-items-center">          
          <div class="col-6 col-xl-2">
              <h1 class="mb-0"><a href="/home" class="text-black h2 mb-0">Kitab<strong class="logoColor">Tap</strong></a></h1>
          </div>
          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="/home">Əsas səhifə</a></li>
                <li class="has-children">
                  <a href="category.html">Kitablar</a>
                  <ul class="dropdown">
                    @foreach($categories as $c)
                      <li>
                        <a href="{{ route('category',$c) }}">{{ $c->name }}</a>
                      </li>
                    @endforeach
                  </ul>
                </li>
                <li><a href="/about">Haqqımızda</a></li>
                <li><a href="/contact">Əlaqə</a></li>
                @guest
                <li><a href="{{ route('login') }}">Daxil ol</a></li>

                @else
                <li><a href="{{ route('user_profile',Auth::user() ) }}">{{ strtoupper(Auth::user()->name) }}</a></li>
                <li>
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         Çıxış
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                </form>
                </li>
                <li><a href="{{ route('add_book') }}"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Kitab əlavə et</span></a></li>
                @endguest

              </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2 text-right d-block">            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>      
    </header>

    @yield('content')

    <footer class="site-footer" data-aos="fade">
      <div class="container">      
        <div class="row">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">İstifadəçilər</h3>
                <ul class="list-unstyled">
                  @guest
                    <li><a href="{{ route('login') }}">Daxil ol</a></li>
                    <li><a href="{{ route('register') }}">Qeydiyyatdan keç</a></li>
                  @else
                    <li><a href="{{ route('user_profile', auth()->user()) }}">Profilim</a></li>

                  @endguest
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Kitablar</h3>
                <ul class="list-unstyled">
                  @foreach($categories as $c)
                      <li>
                        <a href="{{ route('category',$c) }}">{{ $c->name }}</a>
                      </li>
                    @endforeach
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Biz</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Haqqımızda</a></li>
                  <li><a href="#">Komandamız</a></li>
                  <li><a href="#">İstifadə qaydaları</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading mb-4">Əlaqə</h3>
            <ul class="list-unstyled">
              <!-- <li>
                <span class="d-block text-white">Address</span>
                New York - 2398 10 Hadson Carl Street
              </li> -->
              <li>
                <span class="d-block text-white">Əlaqə nömrəsi</span>
                +994 51 301 22 28 
              </li>
              <li>
                <span class="d-block text-white">Elektron poçt</span>
                 behruzaydnl@gmail.com
              </li>
            </ul>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Bütün hüquqları qorunur |<i class="icon-triangle text-danger" aria-hidden="true"></i> by Kitabtap
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/jquery-ui.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/jquery.countdown.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/bootstrap-datepicker.min.js"></script>
  <script src="/js/aos.js"></script>
  
  <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  <script src="/js/main.js"></script>
  <script src="/js/book-card.js"></script>
     @yield('scripts')
  <script src="js/closeBox.js"></script>

  </body>
</html>