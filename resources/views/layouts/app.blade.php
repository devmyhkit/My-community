<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{url('css/style.css')}}">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
<!--     <link rel="stylesheet" href="style5.css"> -->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
     <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</head>

<body>

    <div class="wrapper" id="app">
        <!-- Sidebar Holder -->
         @if (Auth::check())
        <nav id="sidebar">
        
           
            <div class="sidebar-header">
                <h3>Brings <span class="secondAppname">Me</span></h3>
            </div>

            <ul class="list-unstyled components">
                <h1 class="text-center">MENU</h1>
                <div class="profile-userpic">
                    <img src="http://www.sohocapitalmedan.com/images/sohocapitalmedan_06news/1501578764_user.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                       {{ Auth::user()->name }}
                    </div>
                    <div class="profile-usertitle-job">
                        Mother
                    </div>
                </div>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout</a>
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                        </li>
                        
                    </ul>
                </li>
                
                     <li class="list-group-item">
                        Activer suivi
                        <div class="material-switch pull-right">
                            <input id="switchFollow" name="someSwitchFollow" type="checkbox"/>
                            <label for="switchFollow" class="label-success"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Partager position
                        <div class="material-switch pull-right">
                            <input id="switchPosition" name="someSwitchPosition" type="checkbox"/>
                            <label for="switchPosition" class="label-success"></label>
                        </div>
                    </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                </li>
                    
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">Upgrade account</a>
                </li>
                <li>
                      <a class="article" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout</a>
                        

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
            </ul>
            
        </nav>
        @endif

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  
                        <div class="col-sm-12 col-md-12">

                          <div class="row">  
                                
                            <button type="button" id="sidebarCollapse" class="navbar-btn pull-left d-inline-block " >
                            <span></span>
                            <span></span>
                            <span></span>
                            </button>
                                        <!-- 
                                    SEARCH BOX -->
                              @if (Auth::check())
                                  
                                       <div class="search-input col-sm-6">
                                         
                                          <input type="text">
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                          <label>Search here <span class="fas fa-search float-right"></span></label>
                                        
                                        </div>

                          </div>

                                <div class=" nav-item col-sm-12">
                                     

                                      <div class="row">
                                     
                                        <a href="#" class="btn btn-lg btn-success call-to-action-check col-sm-4">Check <span class="fas fa-check"></span></a>
                                        <a href="#" class="btn btn-lg btn-warning  call-to-action-call col-sm-4">Emergency Call <span class="fas fa-phone"></span></a>
                                    </div>
                                    
                                   <!--  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                       <i class="fas fa-align-justify"></i>
                                   </button> -->
                                

                                        @endif
                                </div>


                        </div>
                   
                  
            
               @if (Auth::guest())
                    <div class="nav-item " id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- Authentication Links -->
                     
                            <li class="inline-block text-center"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="inline-block text-center"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            <li class="inline-block text-center"><a class="nav-link" href="index.php"> About us </a></li>

                        </ul>
                    </div>
                        @endif
                </div>
            </nav>
            
            <!--     here content of the page -->
          @yield('content')
            

        </div>
    </div>

  
