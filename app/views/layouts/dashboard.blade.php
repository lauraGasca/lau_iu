<!DOCTYPE html>
    <head>
        <!-- BEGIN META SECTION -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta content="iuark" name="description" />
            <meta content="iuark" name="author" />
        <!-- END META SECTION -->

        <title>
            @section('titulo')
                Iuark
            @show
        </title>

        @section('css')
            <!-- BEGIN MANDATORY STYLE -->
            {{ HTML::style('/css/icons/icons.min.css') }}
            {{ HTML::style('/css/bootstrap.min.css') }}
            {{ HTML::style('/css/plugins.min.css') }}
            {{ HTML::style('/css/style.min.css') }}
            <!-- END  MANDATORY STYLE -->

            <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
            {{ HTML::script('/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}


        @show
    </head>

    <body data-page="blank_page">
        <!-- BEGIN TOP MENU -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="menu-medium" class="sidebar-toggle tooltips">
                        <i class="fa fa-outdent"></i>
                    </a>
                    <a class="navbar-brand" href="index.html">
                        {{ HTML::image('images/logo.png','Iuark',['height'=>"26"]) }}
                    </a>
                </div>
                <div class="navbar-center">Inicio</div>
                <div class="navbar-collapse collapse">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <ul class="nav navbar-nav pull-right header-menu">
                        <!-- BEGIN USER DROPDOWN -->
                        <li class="dropdown" id="user-header">
                            <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img src="/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5">
                                <span class="username">Bob Nilson</span>
                                <i class="fa fa-angle-down p-r-10"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="extra_profile.html">
                                        <i class="glyph-icon flaticon-account"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html">
                                        <i class="glyph-icon flaticon-calendar"></i> My Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html">
                                        <i class="glyph-icon flaticon-settings21"></i> Account Settings
                                    </a>
                                </li>
                                <li class="dropdown-footer clearfix">
                                    <a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
                                        <i class="glyph-icon flaticon-fullscreen3"></i>
                                    </a>
                                    <a href="lockscreen.html" title="Lock Screen">
                                        <i class="glyph-icon flaticon-padlock23"></i>
                                    </a>
                                    <a href="{{url('login/logged-out')}}" title="Logout">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER DROPDOWN -->
                    </ul>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
        </nav>
        <!-- END TOP MENU -->
        <!-- BEGIN WRAPPER -->
        <div id="wrapper">
            <!-- BEGIN MAIN SIDEBAR -->
            <nav id="sidebar">
                <div id="main-menu">
                    <ul class="sidebar-nav">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="widgets.html"><i class="glyph-icon flaticon-widgets"></i><span class="sidebar-text">Widgets <span class="label label-danger pull-right">New</span></span></a>
                        </li>
                        <li>
                            <a href="charts.html"><i class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">Charts</span><span class="pull-right badge badge-primary">2</span></a>
                        </li>
                        <li>
                            <a href="http://themes-lab.com/pixit/frontend/index.html" target="_blank"><i class="glyph-icon flaticon-frontend"></i><span class="sidebar-text">Frontend</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="glyph-icon flaticon-email"></i><span class="sidebar-text">Email</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="mailbox.html"><span class="sidebar-text">Inbox</span></a>
                                </li>
                                <li>
                                    <a href="email_compose.html"><span class="sidebar-text">Write a Message</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Forms</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="forms.html"><span class="sidebar-text">Form Elements</span></a>
                                </li>
                                <li>
                                    <a href="form_validation.html"><span class="sidebar-text">Form Validation</span></a>
                                </li>
                                <li>
                                    <a href="form_wizards.html"><span class="sidebar-text">Form Wizards</span></a>
                                </li>
                                <li>
                                    <a href="sliders.html"><span class="sidebar-text">Sliders</span></a>
                                </li>
                                <li>
                                    <a href="wysiwyg.html"><span class="sidebar-text">Editors</span></a>
                                </li>
                                <li>
                                    <a href="file_upload.html"><span class="sidebar-text">File Upload</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyph-icon flaticon-ui-elements2"></i><span class="sidebar-text">UI Elements</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="components.html"><span class="sidebar-text">Components</span></a>
                                </li>
                                <li>
                                    <a href="animations.html"><span class="sidebar-text">Animations CSS3</span></a>
                                </li>
                                <li>
                                    <a href="buttons.html"><span class="sidebar-text">Buttons</span></a>
                                </li>
                                <li>
                                    <a href="icons.html"><span class="sidebar-text">Icons</span></a>
                                </li>
                                <li>
                                    <a href="typography.html"><span class="sidebar-text">Typography</span></a>
                                </li>
                                <li>
                                    <a href="modals.html"><span class="sidebar-text">Modals</span></a>
                                </li>
                                <li>
                                    <a href="notifications.html"><span class="sidebar-text">Notifications</span></a>
                                </li>
                                <li>
                                    <a href="tabs_accordion.html"><span class="sidebar-text">Tabs &amp; Accordion</span></a>
                                </li>
                                <li>
                                    <a href="nestable-list.html"><span class="sidebar-text">Nestable &amp; Sortable lists</span></a>
                                </li>
                                <li>
                                    <a href="tree.html"><span class="sidebar-text">Tree View</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="active current hasSub">
                            <a href="#"><i class="glyph-icon flaticon-pages"></i><span class="sidebar-text">Pages</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="timeline.html"><span class="sidebar-text">Timeline</span></a>
                                </li>
                                <li>
                                    <a href="blog-list.html"><span class="sidebar-text">Blog List</span></a>
                                </li>
                                <li>
                                    <a href="blog-single.html"><span class="sidebar-text">Blog Single</span></a>
                                </li>
                                <li>
                                    <a href="404.html"><span class="sidebar-text">404 Error Page</span></a>
                                </li>
                                <li>
                                    <a href="500.html"><span class="sidebar-text">500 Error Page</span></a>
                                </li>
                                <li class="current">
                                    <a href="blank_page.html"><span class="sidebar-text">Blank Page</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="maps.html"><i class="glyph-icon flaticon-world"></i><span class="sidebar-text">Google Maps</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="glyph-icon flaticon-panels"></i><span class="sidebar-text">Panels</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="panels.html"><span class="sidebar-text">Custom Panels</span></a>
                                </li>
                                <li>
                                    <a href="panels_draggable.html"><span class="sidebar-text">Draggable Panels</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table"></i><span class="sidebar-text">Tables</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="tables.html"><span class="sidebar-text">Style Tables</span></a>
                                </li>
                                <li>
                                    <a href="tables_editable.html"><span class="sidebar-text">Editable Tables</span></a>
                                </li>
                                <li>
                                    <a href="tables_dynamic.html"><span class="sidebar-text">Dynamic Tables</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">Account</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="profil.html"><span class="sidebar-text">User Profile</span></a>
                                </li>
                                <li>
                                    <a href="login.html"><span class="sidebar-text">Login</span></a>
                                </li>
                                <li>
                                    <a href="signup.html"><span class="sidebar-text">Signup</span></a>
                                </li>
                                <li>
                                    <a href="password_forgot.html"><span class="sidebar-text">Password recover</span></a>
                                </li>
                                <li>
                                    <a href="lockscreen.html"><span class="sidebar-text">Lockscreen</span></a>
                                </li>
                                <li>
                                    <a href="session_timeout.html"><span class="sidebar-text">Session Timeout</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyph-icon flaticon-gallery"></i><span class="sidebar-text">Images Manager</span><span class="fa arrow"></span></a>
                            <ul class="submenu collapse">
                                <li>
                                    <a href="gallery.html"><span class="sidebar-text">Gallery</span></a>
                                </li>
                                <li>
                                    <a href="medias.html"><span class="sidebar-text">Medias</span></a>
                                </li>
                                <li>
                                    <a href="image_croping.html"><span class="sidebar-text">Image Croping</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="m-b-245">
                            <a href="calendar.html"><i class="glyph-icon flaticon-calendar53"></i><span class="sidebar-text">Calendar</span></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <div class="sidebar-footer clearfix">
                        <a class="pull-left" href="profil.html" rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>
                        <a class="pull-left toggle_fullscreen" href="#" rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
                        <a class="pull-left" href="lockscreen.html" rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
                        <a class="pull-left" href="{{url('login/logged-out')}}" rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
                    </div>
                </div>
            </nav>
            <!-- END MAIN SIDEBAR -->
            <!-- BEGIN MAIN CONTENT -->
            <div id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        @section('contenido')
                            contenido
                        @show
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END WRAPPER -->

        @section('scripts')

            <!-- BEGIN MANDATORY SCRIPTS -->
            {{ HTML::script('/plugins/jquery-1.11.js') }}
            {{ HTML::script('/plugins/jquery-migrate-1.2.1.js') }}
            {{ HTML::script('/plugins/jquery-ui/jquery-ui-1.10.4.min.js') }}
            {{ HTML::script('/plugins/bootstrap/bootstrap.min.js') }}
            {{ HTML::script('/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js') }}
            {{ HTML::script('/plugins/bootstrap-select/bootstrap-select.js') }}
            {{ HTML::script('/plugins/icheck/icheck.js') }}
            {{ HTML::script('/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}
            {{ HTML::script('/plugins/mmenu/js/jquery.mmenu.min.all.js') }}
            {{ HTML::script('/plugins/nprogress/nprogress.js') }}
            {{ HTML::script('/plugins/charts-sparkline/sparkline.min.js') }}
            {{ HTML::script('/plugins/breakpoints/breakpoints.js') }}
            {{ HTML::script('/plugins/numerator/jquery-numerator.js') }}
            <!-- END MANDATORY SCRIPTS -->

            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            {{ HTML::script('/js/application.js') }}
            <!-- END PAGE LEVEL SCRIPTS -->

        @show
    </body>
</html>
