<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/pixeladmin/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 11:54:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/plugins/images/favicon.png') }}">
    <title>EggIoT</title>
    <!-- Bootstrap Core CSS  preseta error para los mensajes -->
    <link href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('assets/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('assets/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/assets/plugins/bower_components/switchery/dist/switchery.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/asset/plugins/bower_components/sweetalert/sweetalert.css') }} rel="stylesheet" type="text/css">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/default.css') }}" id="theme" rel="stylesheet">

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script> --}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
     <!-- Styles -->


     @livewireStyles

     <!-- Scripts -->
     <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="#">
                        <b>
                        <!--This is dark logo icon--><img src="{{ asset('assets/plugins/images/pixeladmin-logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ asset('assets/plugins/images/pixeladmin-logo-dark.png') }}" alt="home" class="light-logo" />
                     </b>
                        <span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{ asset('assets/plugins/images/pixeladmin-text.png') }}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{ asset('assets/plugins/images/pixeladmin-text-dark.png') }}" alt="home" class="light-logo" />
                     </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    {{-- <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="{{ asset('assets/plugins/images/users/pawandeep.jpg') }}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="{{ asset('assets/plugins/images/users/sonu.jpg') }}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="{{ asset('assets/plugins/images/users/arijit.jpg') }}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="{{ asset('assets/plugins/images/users/pawandeep.jpg') }}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li> --}}
                    <!-- /.dropdown -->
                    {{-- <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-note"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li> --}}
                    <!-- /.dropdown -->
                   
                </ul>
                {{-- <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <!-- .Megamenu -->
                    <li class="mega-dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Forms Elements</li>
                                    <li><a href="form-basic.html">Basic Forms</a></li>
                                    <li><a href="form-layout.html">Form Layout</a></li>
                                    <li><a href="form-advanced.html">Form Addons</a></li>
                                    <li><a href="form-material-elements.html">Form Material</a></li>
                                    <li><a href="form-float-input.html">Form Float Input</a></li>
                                    <li><a href="form-upload.html">File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Advance Forms</li>
                                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                                    <li><a href="form-pickers.html">Form-pickers</a></li>
                                    <li><a href="form-wizard.html">Form-wizards</a></li>
                                    <li><a href="form-typehead.html">Typehead</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                    <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Table Example</li>
                                    <li><a href="basic-table.html">Basic Tables</a></li>
                                    <li><a href="table-layouts.html">Table Layouts</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                    <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                    <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                    <li><a href="editable-tables.html">Editable Tables</a></li>
                                    <li><a href="foo-tables.html">FooTables</a></li>
                                    <li><a href="jsgrid.html">JsGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Charts</li>
                                    <li> <a href="flot.html">Flot Charts</a> </li>
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chart-js.html">Chart-js</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="knob-chart.html">Knob Charts</a></li>
                                    <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                    <li><a href="extra-charts.html">Extra Charts</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-12 m-t-40 demo-box">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-purple"><a href="index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 1</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-success"><a href="http://wrappixel.com/demos/admin-templates/pixeladmin/main/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 2</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-info"><a href="https://wrappixel.com/demos/admin-templates/pixeladmin/dark/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 3</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-inverse"><a href="https://wrappixel.com/demos/admin-templates/pixeladmin/horizontal-nav-fullwidth/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 4</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-warning"><a href="https://wrappixel.com/demos/admin-templates/pixeladmin/inverse-rtl/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 5</a></div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="white-box text-center bg-danger"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Buy Now</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul> --}}
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- MENU-header -->
        @include('layouts.menu')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid" style="padding: 30px;">
                <div class="contenido" style="padding: 50px;
                background: #fff;
                border-radius: 22px 22px 22px 22px;
                box-shadow: 1px 9px 13px 5px rgb(120 120 120 / 16%);
                ">

              
            
                <!-- CONTENIDO -->
                @yield('content')
            </div>
                
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2021 &copy; Canver </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    @livewireScripts


 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       {{-- <script src="{{ asset('assets/plugins/bower_components/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js') }}"></script> --}}
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Counter js -->
    <script src="{{ asset('assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('assets/plugins/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/morrisjs/morris.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/dashboard1.js') }}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>







    <script src="{{ asset('assets/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset('js/morris-data.js') }}"></script>


    {{-- <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script> --}}
    <!--Style Switcher -->
    <script src="{{ asset('assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/pixeladmin/inverse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 11:59:11 GMT -->
</html>
