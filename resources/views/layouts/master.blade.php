<!DOCTYPE html>

 <html lang="en">

 <head>
     <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
     <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('dashboard/img/apple-icon.png')}}">
     <link rel="icon" type="image/png" href="{{URL::asset('dashboard/img/favicon.ico')}}">
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta property="og:title" content="E-commerce ">
     <meta property="og:locale" content="en_US">
     <meta name="description" content="Toy">
     <meta property="og:description" content="At  TOYZEE  it is our belief that children are the future. In order to create the best possible future for them, we must give them the best possible start. TOYZEE  products not only encourage and stimulate young minds, we also protect their growing bodies with ergonomically sound designs.
">
     <meta name="keywords" content="e-commerce, toys, interactive games,autism, Kids ,  Php, CSS , JavaScript, Bootstrap, Web Developer,">
     <meta name="author" content="Mohammad Yacoub & Marya Alzoubi & Roaa AbuShaqra & Firas Diab & Lana Mustafa ">
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href="{{URL::asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" />
     <link href="{{URL::asset('dashboard/css/light-bootstrap-dashboard.css?v=2.0.0')}} " rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="{{URL::asset('dashboard/css/demo.css')}}" rel="stylesheet" />
 </head>

 <body>
     <div class="wrapper">
         <div class="sidebar" data-image="{{URL::asset('dashoard/img/sidebar-5.jpg')}}">

             <div class="sidebar-wrapper">
                 <div class="logo">
                     <a class="navbar-brand" href="/landing_page">
                     </a> <h4>Serviceya Dashboard</h4>
                 </div>
                 <ul class="nav">
                     <li class="nav-item ">
                         <a class="nav-link" href="{{URL::asset('/dashboard/index')}}">
                         <i class="nc-icon nc-circle-09"></i>
                             <p>Dashbord</p>
                         </a>
                     </li>
{{--                     <li class="nav-item ">--}}
{{--                         <a class="nav-link" href="{{URL::asset('/admin')}}">--}}
{{--                         <i class="nc-icon nc-circle-09"></i>--}}
{{--                             <p>Admin</p>--}}
{{--                         </a>--}}
{{--                     </li>--}}
                     <li>
                         <a class="nav-link" href="{{URL::asset('categories')}}">
                             <i class="nc-icon nc-notes"></i>
                             <p>Category</p>
                         </a>
                     </li>
                     <li>
                        <a class="nav-link" href="{{URL::asset('pending')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Pending Requests</p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="{{URL::asset('choose_category_form')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Accepted applicants</p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="{{URL::asset('pending')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Rejected Applicants</p>
                        </a>
                    </li>

                     {{-- <li>
                         <a class="nav-link" href="{{URL::asset('House_Cleaning')}}">
                         <i class="nc-icon nc-paper-2"></i>
                             <p>User House Cleaning </p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{URL::asset('Health_Care')}}">
                             <i class="nc-icon nc-paper-2"></i>
                             <p>User Health Care</p>
                         </a>
                     </li>
                     <li>
                         <a class="nav-link" href="{{URL::asset('Childcare')}}">
                         <i class="nc-icon nc-paper-2"></i>
                             <p>User Childcare</p>
                         </a>
                     </li> --}}


                 </ul>
             </div>
         </div>
         <div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">


                     <div class="collapse navbar-collapse justify-content-end" id="navigation">
                         <ul class="navbar-nav ml-auto">
                             <li class="nav-item">
                                 <a class="nav-link" href="#pablo">
                             <li class="nav-item dropdown">
                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ Auth::user()->name }} <span class="caret"></span>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                 </div>
                             </li>
                             </a>
                             </li>
                         </ul>
{{--                         <ul class="navbar-nav ml-auto">--}}
{{--                             <li class="nav-item">--}}
{{--                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                     <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                        onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                         {{ __('Logout') }}--}}
{{--                                     </a>--}}

{{--                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                         @csrf--}}
{{--                                     </form>--}}
{{--                                 </div>--}}
{{--                                 <a class="nav-link" href="#">--}}
{{--                                 @auth--}}
{{--                                     <span class="no-icon"> Hello {{auth()->user()->name}} </span>--}}
{{--                                 @endauth--}}
{{--                                 </a>--}}
{{--                                     <a class="nav-link" href="#">--}}
{{--                                 @auth()--}}
{{--                                     <span class="no-icon">Log out</span>--}}
{{--                                 @endauth--}}
{{--                                     </a>--}}
{{--                                                                          <span class="no-icon">--}}

{{--                                                                              @if (session('status'))--}}
{{--                                                                                  <div class="alert alert-success" role="alert">--}}
{{--                                                                              {{ session('status') }}--}}
{{--                                                                          </div>--}}
{{--                                                                              @endif--}}
{{--                                                                          </span>--}}

{{--                             </li>--}}
{{--                         </ul>--}}
                     </div>
                 </div>
             </nav>
             <!-- End Navbar -->
             <div class="content">

                 <div class="container-fluid">
                     <div class="row">



                        @yield('main')



                     </div>
                 </div>
             {{-- <footer class="footer">
                 <div class="container-fluid">
                     <nav>

                         <p class="copyright text-center">
                             ©
                             <script>
                                 document.write(new Date().getFullYear())
                             </script>
                             <a>Creative Tim</a>, made with love for a better web
                         </p>
                     </nav>
                 </div>
             </footer> --}}
         </div>
     </div>

 </body>
 <!--   Core JS Files   -->
 <script src="{{URL::asset('./dashboard/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('./dashboard/js/core/popper.min.js')}}" type="text/javascript"></script>
 <script src="{{URL::asset('./dashboard/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{URL::asset('./dashboard/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Chartist Plugin  -->
 <script src="{{URL::asset('./dashboard/js/plugins/chartist.min.js')}}"></script>
 <!--  Notifications Plugin    -->
 <script src="{{URL::asset('./dashboard/js/plugins/bootstrap-notify.js')}}"></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src="{{URL::asset('./dashboard/js/light-bootstrap-dashboard.js?v=2.0.0')}} " type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src="{{URL::asset('./dashboard/js/demo.js')}}"></script>


 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script>
     @if(session('status_store'))
     swal({
         title: "{{session('status_store')}}",
         icon: "success",
         {{--icon: "{{session('statuscode')}}",--}}
         button: "ok",
     });
     @endif
     @if(session('status_update'))
     swal({
         title: "{{session('status_update')}}",
         icon: "success",
         button: "ok",
     });
     @endif
     @if(session('status_destroy'))
     swal({
         title: "{{session('status_destroy')}}",
         icon: "error",
         button: "ok",
     });
     @endif
 </script>

</html>
