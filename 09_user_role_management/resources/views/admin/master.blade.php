<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>:: Crush On :: Home</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/charts-c3/c3.min.css"/>
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/plugins/jvectormap/jvectormap-2.0.3.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/main.css"/>
    <link rel="stylesheet" href="{{asset('/')}}admin/theme2/assets/css/theme2.css" />
</head>

<body class="font-opensans">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">

    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="index.html"><i class="fa fa-dashboard brand-logo"></i></a>
                <div class="dropdown">
                    <a href="page-search.html" class="nav-link icon"><i class="fa fa-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
                    <a href="javascript:void(0)" class="nav-link icon create_page xs-hide"><i class="fa fa-plus" data-toggle="tooltip" data-placement="right" title="Create New"></i></a>
                    <a href="app-email.html"  class="nav-link icon app_inbox"><i class="fa fa-envelope" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
                    <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fa fa-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
                    <a href="app-social.html"  class="nav-link icon xs-hide"><i class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon xs-hide"><i class="fa fa-bullhorn" data-toggle="tooltip" data-placement="right" title="Projects"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon xs-hide"><i class="fa fa-cloud-upload" data-toggle="tooltip" data-placement="right" title="Cloud Upload"></i></a>
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fa fa-paint-brush" data-toggle="tooltip" data-placement="right" title="Themes"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin" data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="{{asset('/')}}admin/assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-opensans" checked="">
                            <span class="custom-control-label">Open Sans Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                    <div class="custom-controls-stacked arrow_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                    <div class="custom-controls-stacked list_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group">
                    <label class="d-block">Storage <span class="float-right">77%</span></label>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">
                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Default Theme</p>
                        <a href="../light/index.html"><img src="../assets/images/themes/default.png" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Night Mode Theme</p>
                        <a href="../dark/index.html"><img src="../assets/images/themes/dark.png" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Horizontal Version</p>
                        <a href="../horizontal/index.html"><img src="../assets/images/themes/horizontal.png" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="../rtl/index.html"><img src="../assets/images/themes/rtl.png" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Theme two colors</p>
                        <a href="../theme1/index.html"><img src="../assets/images/themes/theme1.png" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Theme2 with Crypto Dashboard</p>
                        <a href="../theme2/index.html"><img src="../assets/images/themes/theme2.png" alt="" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="user_div">
        <h5 class="brand-name mb-4">Crush On<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img class="avatar avatar-xl mr-3" src="../assets/images/sm/avatar1.jpg" alt="avatar">
                    <div class="media-body">
                        <h5 class="m-0">Sara Hopkins</h5>
                        <p class="text-muted mb-0">Webdeveloper</p>
                        <ul class="social-links list-inline mb-0 mt-2">
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Statistics</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <label class="mb-0">Balance</label>
                            <h4 class="font-30 font-weight-bold">$545</h4>
                        </div>
                        <div class="col-6 pb-3">
                            <label class="mb-0">Growth</label>
                            <h4 class="font-30 font-weight-bold">27%</h4>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Income<span class="float-right">77%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Friends</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <ul class="right_chat list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Donald Gardner</span>
                                    <span class="message">Designer, Blogger</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Wendy Keen</span>
                                    <span class="message">Java Developer</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Matt Rosales</span>
                                    <span class="message">CEO, anchortheme</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card b-none">
            <ul class="list-group">
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-blue"><i class="fa fa-credit-card"></i> </div>
                    <div class="ml-3">
                        <div>+$29 New sale</div>
                        <a href="javascript:void(0)">Admin Template</a>
                        <div class="text-muted font-12">5 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-pink"><i class="fa fa-upload"></i> </div>
                    <div class="ml-3">
                        <div>Project Update</div>
                        <a href="javascript:void(0)">New HTML page</a>
                        <div class="text-muted font-12">10 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-teal"><i class="fa fa-file-word-o"></i> </div>
                    <div class="ml-3">
                        <div>You edited the file</div>
                        <a href="javascript:void(0)">reposrt.doc</a>
                        <div class="text-muted font-12">11 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-cyan"><i class="fa fa-user"></i> </div>
                    <div class="ml-3">
                        <div>New user</div>
                        <a href="javascript:void(0)">Puffin web - view</a>
                        <div class="text-muted font-12">17 min ago</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">Crush On <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Directories</li>
                <li class="active"><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a></li>
                <li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                <li><a href="app-chat.html"><i class="icon-speech"></i><span>Chat</span></a></li>
                <li><a href="app-contact.html"><i class="icon-notebook"></i><span>Contact</span></a></li>
                <li><a href="app-blog.html"><i class="icon-globe"></i><span>Blog</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgot-password.html">Forgot password</a></li>
                        <li><a href="404.html">404 error</a></li>
                        <li><a href="500.html">500 error</a></li>
                    </ul>
                </li>
                <li class="g_heading">Pages</li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-tag"></i><span>Icons</span></a>
                    <ul>
                        <li><a href="icons-feather.html">Feather Icons</a></li>
                        <li><a href="icons-line.html">Line Icons</a></li>
                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                        <li><a href="icons-flags.html">Flags Icons</a></li>
                        <li><a href="icons-payments.html">Payments Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-bar-chart"></i><span>Charts</span></a>
                    <ul>
                        <li><a href="charts-apex.html">Charts Apex</a></li>
                        <li><a href="charts-e.html">EChart</a></li>
                        <li><a href="charts-c3.html">C3 Chart</a></li>
                        <li><a href="charts-knob.html">JQuery Knob</a></li>
                        <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-layers"></i><span>Forms</span></a>
                    <ul>
                        <li><a href="form-elements.html">Basic Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-tag"></i><span>Tables</span></a>
                    <ul>
                        <li><a href="table-normal.html">Bootstrap Table</a></li>
                        <li><a href="table-datatable.html">Jquery Datatable</a></li>
                    </ul>
                </li>
                <li><a href="widgets.html"><i class="icon-puzzle"></i><span>Widgets</span></a></li>
                <li class="g_heading">Extra</li>
                <li><a href="page-maps.html"><i class="icon-map"></i><span>Maps</span></a></li>
                <li><a href="page-gallery.html"><i class="icon-picture"></i><span>Gallery</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fe fe-file"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="page-empty.html">Empty page</a></li>
                        <li><a href="page-profile.html">Profile</a></li>
                        <li><a href="page-search.html">Search Results</a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>
                        <li><a href="page-invoices.html">Invoices</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-carousel.html">Carousel</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <div class="page">
        <div id="page_top" class="section-body ">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Cryptocurrency</h1>
                        <select class="custom-select">
                            <option>Year</option>
                            <option>Month</option>
                            <option>Week</option>
                        </select>
                        <div class="input-group xs-hide">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                    <div class="right">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('/')}}admin/assets/images/flags/us.svg" alt="">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('/')}}admin/assets/images/flags/es.svg" alt="">Spanish</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('/')}}admin/assets/images/flags/jp.svg" alt="">japanese</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('/')}}admin/assets/images/flags/bl.svg" alt="">France</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Graphics Design</a>
                                    <a class="dropdown-item" href="#">Angular Admin</a>
                                    <a class="dropdown-item" href="#">PSD to HTML</a>
                                    <a class="dropdown-item" href="#">iOs App Development</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Home Development</a>
                                    <a class="dropdown-item" href="#">New Blog post</a>
                                </div>
                            </li>
                        </ul>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w250 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('/')}}admin/assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Donald Gardner</span>
                                                        <span class="message">Designer, Blogger</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('/')}}admin/assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Wendy Keen</span>
                                                        <span class="message">Java Developer</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('/')}}admin/assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Matt Rosales</span>
                                                        <span class="message">CEO, anchortheme</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="{{asset('/')}}admin/assets/images/xs/avatar3.jpg" alt="">
                                                    <div class="media-body">
                                                        <span class="name">Phillip Smith</span>
                                                        <span class="message">Writter, Mag Editor</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                    <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                                    <a class="dropdown-item" href="app-email.html"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                                    <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="Crypto-tab" data-toggle="tab" href="#Crypto-Dashboard">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" id="Crypto-tab" data-toggle="tab" href="#Crypto-list">Transaction List</a></li>
                    </ul>
                    <div class="header-action">
                        <button type="button" class="btn btn-outline-primary"><i class="fe fe-plus mr-2"></i>Create</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="Crypto-Dashboard" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Available Balance</h6>
                                        <h3 class="pt-3"><i class="fa fa-bitcoin"></i> <span class="counter">136.25402</span></h3>
                                        <h5>$1,25,451.23</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Total Investment</h6>
                                        <h3 class="pt-3"><i class="fa fa-bitcoin"></i> <span class="counter">251.25402</span></h3>
                                        <h5>$3,80,451.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Profit in Bitcoin</h6>
                                        <h3 class="pt-3"><i class="fa fa-bitcoin"></i> <span class="counter">32.96512</span></h3>
                                        <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 65.27%</span> Since last month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Profit in USD</h6>
                                        <h3 class="pt-3"><i class="fa fa-dollar"></i> <span class="counter">98,532.02</span></h3>
                                        <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 165.27%</span> Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix row-deck">
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Crypto Statistics</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-md-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-1">BTC $<span class="counter">12,159.32</span></h5>
                                                <span class="text-muted">Note Enim omittam, ex quo dictas complectitur<a href="#">View more</a></span>
                                            </div>
                                            <div>
                                                <div class="selectgroup w250">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="low" class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">7 Day</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="medium" class="selectgroup-input">
                                                        <span class="selectgroup-button">15 Day</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="high" class="selectgroup-input">
                                                        <span class="selectgroup-button">30 Day</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="apex-Crypto_statistics"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">Transaction History</h2>
                                        <div class="card-options">
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-donut" style="height: 15rem"></div>
                                    </div>
                                    <table class="table card-table">
                                        <tbody>
                                        <tr>
                                            <td class="width45"><span class="avatar avatar-green"><i class="fa fa-check"></i></span></td>
                                            <td>
                                                <p class="mb-0">Payment from #1598</p>
                                                <span class="text-muted font-13">Feb 21, 2019, 3:30pm</span>
                                            </td>
                                            <td class="text-right">
                                                <p class="mb-0">$300</p>
                                                <span class="text-success font-13">Done</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45"><span class="avatar avatar-green"><i class="fa fa-truck"></i></span></td>
                                            <td>
                                                <p class="mb-0">Process to #85236</p>
                                                <span class="text-muted font-13">March 14, 2019, 2:30pm</span>
                                            </td>
                                            <td class="text-right">
                                                <p class="mb-0">$300</p>
                                                <span class="text-success font-13">Faild</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45"><span class="avatar avatar-orange"><i class="fa fa-angle-left"></i></span></td>
                                            <td>
                                                <p class="mb-0">Process refund #4568</p>
                                                <span class="text-muted font-13">March 18, 2019, 6:30pm</span>
                                            </td>
                                            <td class="text-right">
                                                <p class="mb-0">$300</p>
                                                <span class="text-success font-13">Done</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width45"><span class="avatar avatar-red"><i class="fa fa-cc-visa"></i></span></td>
                                            <td>
                                                <p class="mb-0">Payment failed from #32658</p>
                                                <span class="text-muted font-13">April 27, 2019, 3:48pm</span>
                                            </td>
                                            <td class="text-right">
                                                <p class="mb-0">$300</p>
                                                <span class="text-danger font-13">Declined</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix row-deck">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ICO Token</label>
                                                    <input type="email" class="form-control" placeholder="23097">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ETH</label>
                                                    <input type="email" class="form-control" placeholder="2">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Select</label>
                                                    <select class="custom-select">
                                                        <option selected="">ETH</option>
                                                        <option value="1">BTC</option>
                                                        <option value="2">LTC</option>
                                                        <option value="3">USDT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Wallet address</label>
                                                    <input type="email" class="form-control" placeholder="0OXD38D9EEB5B93E1D3862727635E9">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success btn-block">Buy now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ICO Token</label>
                                                    <input type="email" class="form-control" placeholder="23097">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ETH</label>
                                                    <input type="email" class="form-control" placeholder="2">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Select</label>
                                                    <select class="custom-select">
                                                        <option selected="">ETH</option>
                                                        <option value="1">BTC</option>
                                                        <option value="2">LTC</option>
                                                        <option value="3">USDT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Wallet address</label>
                                                    <input type="email" class="form-control" placeholder="0OXD38D9EEB5B93E1D3862727635E9">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger btn-block">Sale now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Current Active Trades</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-sm-flex mb-3">
                                            <div class="top_counter mb-2 mr-4">
                                                <div class="icon bg-green"><i class="fa fa-area-chart"></i> </div>
                                                <div class="content">
                                                    <span>Buy</span>
                                                    <h5 class="number mb-0">$2,02,150.52</h5>
                                                </div>
                                            </div>
                                            <div class="top_counter mb-2">
                                                <div class="icon bg-red"><i class="fa fa-area-chart"></i> </div>
                                                <div class="content">
                                                    <span>Sale</span>
                                                    <h5 class="number mb-0">$92,150.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <table class="table table-striped mb-0 table-vcenter">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Currency</th>
                                                    <th>Balance</th>
                                                    <th>Buying Rate</th>
                                                    <th>Curre Rate</th>
                                                    <th>Status</th>
                                                    <th>Last Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>BTC</td>
                                                    <td>54,124.25</td>
                                                    <td>$205.41</td>
                                                    <td>$209.98</td>
                                                    <td>$521.32 <i class="fa fa-sort-down"></i></td>
                                                    <td>$251.00</td>
                                                    <td><button type="submit" class="btn btn-danger btn-sm">Close</button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>ETH</td>
                                                    <td>54,124.25</td>
                                                    <td>$205.11</td>
                                                    <td>$209.98</td>
                                                    <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                    <td>$251.00</td>
                                                    <td><button type="submit" class="btn btn-danger btn-sm">Close</button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>XRP</td>
                                                    <td>54,124.25</td>
                                                    <td>$205.41</td>
                                                    <td>$209.98</td>
                                                    <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                    <td>$251.00</td>
                                                    <td><button type="submit" class="btn btn-danger btn-sm">Close</button></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>BCH</td>
                                                    <td>54,124.25</td>
                                                    <td>$880.41</td>
                                                    <td>$209.98</td>
                                                    <td>$521.65 <i class="fa fa-sort-down"></i></td>
                                                    <td>$251.00</td>
                                                    <td><button type="submit" class="btn btn-success btn-sm">Open</button></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>XLM</td>
                                                    <td>54,124.25</td>
                                                    <td>$205.41</td>
                                                    <td>$209.98</td>
                                                    <td>$521.65 <i class="fa fa-sort-down"></i></td>
                                                    <td>$105.00</td>
                                                    <td><button type="submit" class="btn btn-success btn-sm">Open</button></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>EOS</td>
                                                    <td>54,124.25</td>
                                                    <td>$205.41</td>
                                                    <td>$209.98</td>
                                                    <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                    <td>$251.00</td>
                                                    <td><button type="submit" class="btn btn-danger btn-sm">Close</button></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>LTC</td>
                                                    <td>54,124.25</td>
                                                    <td>$205.41</td>
                                                    <td>$209.98</td>
                                                    <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                    <td>$102.00</td>
                                                    <td><button type="submit" class="btn btn-success btn-sm">Open</button></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>ADA</td>
                                                    <td>54,124.25</td>
                                                    <td>$205.41</td>
                                                    <td>$65.98</td>
                                                    <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                    <td>$250.00</td>
                                                    <td><button type="submit" class="btn btn-danger btn-sm">Close</button></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Crypto-list" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-hover text-wrap table-custom spacing8 mb-0">
                                <tbody>
                                <tr>
                                    <td class="w60"><img src="{{asset('/')}}admin/assets/images/crypto/BTC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Bitcoin</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 BTC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="{{asset('/')}}admin/assets/images/crypto/ETH.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Ethereum Classic</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td><strong>0.108762 ETC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="{{asset('/')}}admin/assets/images/crypto/ETC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Ethereum</p></td>
                                    <td><span>11:20AM 17 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 ETH</strong></td>
                                    <td class="w100 text-info"><strong>$11,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="{{asset('/')}}admin/assets/images/crypto/neo.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">NEO</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 NEO</strong></td>
                                    <td class="w100 text-info"><strong>$3,102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="{{asset('/')}}admin/assets/images/crypto/LTC.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Litecoin</p></td>
                                    <td><span>11:20AM 7 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-danger">Stopped</span></td>
                                    <td><strong>0.108762 LTC</strong></td>
                                    <td class="w100 text-info"><strong>$8,309</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="{{asset('/')}}admin/assets/images/crypto/qtum.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Qtum</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 QTUM</strong></td>
                                    <td class="w100 text-info"><strong>$3,102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                <tr>
                                    <td class="w60"><img src="{{asset('/')}}admin/assets/images/crypto/XRP.svg" alt="" class="w30 rounded"></td>
                                    <td><p class="mb-0">Tether</p></td>
                                    <td><span>12:20PM 5 Nov 2018</span></td>
                                    <td><span>OX874JKHJKFG76767DFD67</span></td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                    <td><strong>0.108762 USDT</strong></td>
                                    <td class="w100 text-info"><strong>$102</strong></td>
                                    <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2019 <a href="javascript:void(0)">PuffinTheme</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>


<script src="{{asset('/')}}admin/assets/bundles/lib.vendor.bundle.js"></script>

<script src="{{asset('/')}}admin/assets/bundles/counterup.bundle.js"></script>
<script src="{{asset('/')}}admin/assets/bundles/apexcharts.bundle.js"></script>
<script src="{{asset('/')}}admin/assets/bundles/c3.bundle.js"></script>

<script src="{{asset('/')}}admin/assets/js/core.js"></script>
<script src="{{asset('/')}}admin/theme2/assets/js/page/index.js"></script>
</body>
</html>
