<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:title" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:description" content="Edumin - Bootstrap Admin Dashboard" />
	<meta property="og:image" content="{{asset('admin-assets/social-image.png')}}" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="https://edumin.dexignlab.com/xhtml/error-404.html" type="{{asset('admin-assets/image/x-icon')}}" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-assets/images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE -->
	<title>Edumin - Bootstrap Admin Dashboard</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{asset('admin-assets/vendor/jqvmap/css/jqvmap.min.css')}}">
	  <link rel="stylesheet" href="{{asset('admin-assets/vendor/chartist/css/chartist.min.css')}}">
	  <link rel="stylesheet"  href="{{asset('admin-assets/vendor/summernote/summernote.css')}}">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin-assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/css/skin-3.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   @yield('css')
</head>	
<body>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="{{ url('admin/dashboard') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('assets/logo.png') }}" alt="Logo Abbr">
                <img class="logo-compact" src="{{ asset('admin-assets/images/logo-text-white.png') }}" alt="Compact Logo">
                <img class="brand-title" src="{{ asset('admin-assets/images/logo-text-white.png') }}" alt="Brand Title">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
  
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{asset('admin-assets/images/profile/education/pic1.jpg')}}" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <form action="{{ route('admin.logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item ai-icon">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ml-2">Logout </span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-home"></i>
                            <span class="nav-text">Our Specialities</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('/specialties') }}">All Specialities</a></li>
                            <li><a href="{{ url('/specialties/create') }}">Add Speciality</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Our Doctors</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/doctors') }}">All Doctors</a></li>
                            <li><a href="{{ url('admin/doctors/create') }}">Add Doctor</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Rare Cases</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('rare-cases') }}">All Rare Cases</a></li>
                            <li><a href="{{ url('rare-cases/create') }}">Add Rare Case</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Blog</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('blogs') }}">All Blogs</a></li>
                            <li><a href="{{ url('blogs/create') }}">Add Blog</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Community Events</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('community-events') }}">All Community Events</a></li>
                            <li><a href="{{ url('community-events/create') }}">Add Community Event</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Patient Testimonials</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('patient-testimonials') }}">All Patient Testimonials</a></li>
                            <li><a href="{{ url('patient-testimonials/create') }}">Add Patient Testimonial</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text"> Video Testimonials</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('video-testimonials') }}">All Video Testimonials</a></li>
                            <li><a href="{{ url('video-testimonials/create') }}">Add Video Testimonial</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text"> Faq</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('faqs') }}">All Faq</a></li>
                            <li><a href="{{ url('faqs/create') }}">Add FAQ</a></li>
                        </ul>
                    </li>
					<li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Professors</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-professors.html">All Professor</a></li>
                            <li><a href="add-professor.html">Add Professor</a></li>
                            <li><a href="edit-professor.html">Edit Professor</a></li>
                            <li><a href="professor-profile.html">Professor Profile</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Students</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-students.html">All Students</a></li>
                            <li><a href="add-student.html">Add Students</a></li>
                            <li><a href="edit-student.html">Edit Students</a></li>
                            <li><a href="about-student.html">About Students</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Courses</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-courses.html">All Courses</a></li>
                            <li><a href="add-courses.html">Add Courses</a></li>
                            <li><a href="edit-courses.html">Edit Courses</a></li>
                            <li><a href="about-courses.html">About Courses</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">Library</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-library.html">All Library</a></li>
                            <li><a href="add-library.html">Add Library</a></li>
                            <li><a href="edit-library.html">Edit Library</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-building"></i>
							<span class="nav-text">Departments</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-departments.html">All Departments</a></li>
                            <li><a href="add-departments.html">Add Departments</a></li>
                            <li><a href="edit-departments.html">Edit Departments</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Staff</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-staff.html">All Staff</a></li>
                            <li><a href="add-staff.html">Add Staff</a></li>
                            <li><a href="edit-staff.html">Edit Staff</a></li>
                            <li><a href="staff-profile.html">Staff Profile</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-gift"></i>
							<span class="nav-text">Holiday</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-holiday.html">All Holiday</a></li>
                            <li><a href="add-holiday.html">Add Holiday</a></li>
                            <li><a href="edit-holiday.html">Edit Holiday</a></li>
                            <li><a href="holiday-calendar.html">Holiday Calendar</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-dollar"></i>
							<span class="nav-text">Fees</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="fees-collection.html">Fees Collection</a></li>
                            <li><a href="add-fees.html">Add Fees</a></li>
                            <li><a href="fees-receipt.html">Fees Receipt</a></li>
                        </ul>
                    </li>					
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
									<li><a href="ecom-product-list.html">Product List</a></li>
									<li><a href="ecom-product-detail.html">Product Details</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									<li><a href="ecom-checkout.html">Checkout</a></li>
									<li><a href="ecom-invoice.html">Invoice</a></li>
									<li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="la la-signal"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li class="mega-menu mega-menu-xl"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="la la-globe"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alert.html">Alert</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-media-object.html">Media Object</a></li>
                            <li><a href="ui-card.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-popover.html">Popover</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-plus-square-o"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Select 2</a></li>
                            <li><a href="uc-nestable.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" aria-expanded="false">
							<i class="la la-desktop"></i>
							<span class="nav-text">Widget</span>
						</a></li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-file-text"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-table"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-th-list"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
				</ul>
            </div>
        </div>
        <div class="content-body">
            <!-- row -->
            @yield('content')
        </div>
        <div class="footer">
            <div class="copyright">
                <p>
                    Copyright © {{ date('Y') }} 
                    Designed &amp; Developed by 
                    <a href="https://digitalnawb.com" target="_blank">DigitalNawb.com</a>
                </p>
            </div>
        </div>
       </div>

        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="{{asset('admin-assets/vendor/global/global.min.js')}}"></script>
        <!-- <script src="{{asset('admin-assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js ')}}"></script> -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="{{asset('admin-assets/js/custom.min.js ')}}"></script>
        <script src="{{asset('admin-assets/js/dlabnav-init.js ')}}"></script>	
        
        <!-- Chart sparkline plugin files -->
        <script src="{{asset('admin-assets/vendor/jquery-sparkline/jquery.sparkline.min.js ')}}"></script>
        <script src="{{asset('admin-assets/js/plugins-init/sparkline-init.js ')}}"></script>
        
        <!-- Chart Morris plugin files -->
        <script src="{{asset('admin-assets/vendor/raphael/raphael.min.js ')}}"></script>
        <script src="{{asset('admin-assets/vendor/morris/morris.min.js ')}}"></script> 
        
        <!-- Init file -->
        <script src="{{asset('admin-assets/js/plugins-init/widgets-script-init.js ')}}"></script>
        
        <!-- Demo scripts -->
        <script src="{{asset('admin-assets/js/dashboard/dashboard.js ')}}"></script>
        
        <!-- Summernote -->
        <script src="{{asset('admin-assets/vendor/summernote/js/summernote.min.js ')}}"></script>
        <!-- Summernote init -->
        <script src="{{asset('admin-assets/js/plugins-init/summernote-init.js ')}}"></script>
        
        <!-- Svganimation scripts -->
        <script src="{{asset('admin-assets/vendor/svganimation/vivus.min.js ')}}"></script>
        <script src="{{asset('admin-assets/vendor/svganimation/svg.animation.js ')}}"></script>
        <script src="{{asset('admin-assets/js/styleSwitcher.js ')}}"></script>
        <!-- SweetAlert2 CSS & JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @yield('scripts')
    </div>
</body>
</html>