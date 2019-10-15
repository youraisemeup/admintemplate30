﻿<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="./images/favicon.ico">

  <title>Fab Admin - Dashboard</title>

  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="./assets/vendor_components/bootstrap/dist/css/bootstrap.css">

  <!-- Morris charts -->
  <link rel="stylesheet" href="./assets/vendor_components/morris.js/morris.css">

  <!-- Bootstrap switch-->
  <link rel="stylesheet" href="./assets/vendor_components/bootstrap-switch/switch.css">

  <!-- fullCalendar -->
  <link rel="stylesheet" href="./assets/vendor_components/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="./assets/vendor_components/fullcalendar/fullcalendar.print.min.css" media="print">

  <!-- Bootstrap extend-->
  <link rel="stylesheet" href="css/bootstrap-extend.css">

  <!-- theme style -->
  <link rel="stylesheet" href="css/master_style.css">

  <!-- Fab Admin skins -->
  <link rel="stylesheet" href="css/skins/_all-skins.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body class="hold-transition sidebar-mini fixed skin-blue">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.html" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
          <span class="light-logo"><img src="./images/logo-light.png" alt="logo"></span>
          <span class="dark-logo"><img src="./images/logo-dark.png" alt="logo"></span>
        </b>
        <!-- logo-->
        <span class="logo-lg">
          <img src="./images/logo-light-text.png" alt="logo" class="light-logo">
          <img src="./images/logo-dark-text.png" alt="logo" class="dark-logo">
        </span>
      </a>
      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div>
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <!-- <div class="btn-group d-none d-lg-inline-block mt-5">
			 <button class="btn dropdown-toggle mr-10 btn-outline btn-white" type="button" data-toggle="dropdown">Dashboard</button>
			 <div class="dropdown-menu">
				<a class="dropdown-item" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/src/"><i class="fa fa-dashboard w-30"></i>Main Dashboard</a>
				<a class="dropdown-item" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/ecommerce-dashboard/"><i class="fa fa-shopping-basket w-30"></i>eCommerce Dashboard</a>
				<a class="dropdown-item" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/hospital-dashboard/"><i class="fa fa-heartbeat w-30"></i>Hospital Dashboard</a>
				<a class="dropdown-item" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/horizontal-nav/main"><i class="fa fa-bars w-30"></i>Horizontal Nav Dashboard</a>
				<a class="dropdown-item" href="http://html-templates.multipurposethemes.com/bootstrap-4/admin/fab-admin/horizontal-nav/real-estate-dashboard"><i class="fa fa-building w-30"></i>Real Estate Dashboard</a>
			 </div>
		  </div> -->
        </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!--<li class="search-box">-->
              <!--<a class="nav-link hidden-sm-down" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>-->
              <!--<form class="app-search" style="display: none;">-->
                <!--<input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i-->
                    <!--class="ti-close"></i></a>-->
              <!--</form>-->
            <!--</li>-->

            <!--&lt;!&ndash; Messages &ndash;&gt;-->
            <!--<li class="dropdown messages-menu">-->
              <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--<i class="mdi mdi-email"></i>-->
              <!--</a>-->
              <!--<ul class="dropdown-menu scale-up">-->
                <!--<li class="header">You have 5 messages</li>-->
                <!--<li>-->
                  <!--&lt;!&ndash; inner menu: contains the actual data &ndash;&gt;-->
                  <!--<ul class="menu inner-content-div">-->
                    <!--<li>-->
                      <!--&lt;!&ndash; start message &ndash;&gt;-->
                      <!--<a href="#">-->
                        <!--<div class="pull-left">-->
                          <!--<img src="./images/user2-160x160.jpg" class="rounded-circle" alt="User Image">-->
                        <!--</div>-->
                        <!--<div class="mail-contnet">-->
                          <!--<h4>-->
                            <!--Lorem Ipsum-->
                            <!--<small><i class="fa fa-clock-o"></i> 15 mins</small>-->
                          <!--</h4>-->
                          <!--<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash; end message &ndash;&gt;-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<div class="pull-left">-->
                          <!--<img src="./images/user3-128x128.jpg" class="rounded-circle" alt="User Image">-->
                        <!--</div>-->
                        <!--<div class="mail-contnet">-->
                          <!--<h4>-->
                            <!--Nullam tempor-->
                            <!--<small><i class="fa fa-clock-o"></i> 4 hours</small>-->
                          <!--</h4>-->
                          <!--<span>Curabitur facilisis erat quis metus congue viverra.</span>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<div class="pull-left">-->
                          <!--<img src="./images/user4-128x128.jpg" class="rounded-circle" alt="User Image">-->
                        <!--</div>-->
                        <!--<div class="mail-contnet">-->
                          <!--<h4>-->
                            <!--Proin venenatis-->
                            <!--<small><i class="fa fa-clock-o"></i> Today</small>-->
                          <!--</h4>-->
                          <!--<span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<div class="pull-left">-->
                          <!--<img src="./images/user3-128x128.jpg" class="rounded-circle" alt="User Image">-->
                        <!--</div>-->
                        <!--<div class="mail-contnet">-->
                          <!--<h4>-->
                            <!--Praesent suscipit-->
                            <!--<small><i class="fa fa-clock-o"></i> Yesterday</small>-->
                          <!--</h4>-->
                          <!--<span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<div class="pull-left">-->
                          <!--<img src="./images/user4-128x128.jpg" class="rounded-circle" alt="User Image">-->
                        <!--</div>-->
                        <!--<div class="mail-contnet">-->
                          <!--<h4>-->
                            <!--Donec tempor-->
                            <!--<small><i class="fa fa-clock-o"></i> 2 days</small>-->
                          <!--</h4>-->
                          <!--<span>Praesent vitae tellus eget nibh lacinia pretium.</span>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                  <!--</ul>-->
                <!--</li>-->
                <!--<li class="footer"><a href="#">See all e-Mails</a></li>-->
              <!--</ul>-->
            <!--</li>-->
            <!--&lt;!&ndash; Notifications &ndash;&gt;-->
            <!--<li class="dropdown notifications-menu">-->
              <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--<i class="mdi mdi-bell"></i>-->
              <!--</a>-->
              <!--<ul class="dropdown-menu scale-up">-->
                <!--<li class="header">You have 7 notifications</li>-->
                <!--<li>-->
                  <!--&lt;!&ndash; inner menu: contains the actual data &ndash;&gt;-->
                  <!--<ul class="menu inner-content-div">-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<i class="fa fa-users text-aqua"></i> Curabitur id eros quis nunc suscipit blandit.-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<i class="fa fa-warning text-yellow"></i> Duis malesuada justo eu sapien elementum, in semper-->
                        <!--diam posuere.-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<i class="fa fa-users text-red"></i> Donec at nisi sit amet tortor commodo porttitor pretium a-->
                        <!--erat.-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<i class="fa fa-shopping-cart text-green"></i> In gravida mauris et nisi-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<i class="fa fa-user text-red"></i> Praesent eu lacus in libero dictum fermentum.-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<i class="fa fa-user text-red"></i> Nunc fringilla lorem-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                      <!--<a href="#">-->
                        <!--<i class="fa fa-user text-red"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum-->
                        <!--imperdiet.-->
                      <!--</a>-->
                    <!--</li>-->
                  <!--</ul>-->
                <!--</li>-->
                <!--<li class="footer"><a href="#">View all</a></li>-->
              <!--</ul>-->
            <!--</li>-->
            <!--&lt;!&ndash; Tasks&ndash;&gt;-->
            <!--<li class="dropdown tasks-menu">-->
              <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--<i class="mdi mdi-message"></i>-->
              <!--</a>-->
              <!--<ul class="dropdown-menu scale-up">-->
                <!--<li class="header">You have 6 tasks</li>-->
                <!--<li>-->
                  <!--&lt;!&ndash; inner menu: contains the actual data &ndash;&gt;-->
                  <!--<ul class="menu inner-content-div">-->
                    <!--<li>-->
                      <!--&lt;!&ndash; Task item &ndash;&gt;-->
                      <!--<a href="#">-->
                        <!--<h3>-->
                          <!--Lorem ipsum dolor sit amet-->
                          <!--<small class="pull-right">30%</small>-->
                        <!--</h3>-->
                        <!--<div class="progress xs">-->
                          <!--<div class="progress-bar progress-bar-aqua" style="width: 30%" role="progressbar"-->
                            <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                            <!--<span class="sr-only">30% Complete</span>-->
                          <!--</div>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                    <!--<li>-->
                      <!--&lt;!&ndash; Task item &ndash;&gt;-->
                      <!--<a href="#">-->
                        <!--<h3>-->
                          <!--Vestibulum nec ligula-->
                          <!--<small class="pull-right">20%</small>-->
                        <!--</h3>-->
                        <!--<div class="progress xs">-->
                          <!--<div class="progress-bar progress-bar-danger" style="width: 20%" role="progressbar"-->
                            <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                            <!--<span class="sr-only">20% Complete</span>-->
                          <!--</div>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                    <!--<li>-->
                      <!--&lt;!&ndash; Task item &ndash;&gt;-->
                      <!--<a href="#">-->
                        <!--<h3>-->
                          <!--Donec id leo ut ipsum-->
                          <!--<small class="pull-right">70%</small>-->
                        <!--</h3>-->
                        <!--<div class="progress xs">-->
                          <!--<div class="progress-bar progress-bar-light-blue" style="width: 70%" role="progressbar"-->
                            <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                            <!--<span class="sr-only">70% Complete</span>-->
                          <!--</div>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                    <!--<li>-->
                      <!--&lt;!&ndash; Task item &ndash;&gt;-->
                      <!--<a href="#">-->
                        <!--<h3>-->
                          <!--Praesent vitae tellus-->
                          <!--<small class="pull-right">40%</small>-->
                        <!--</h3>-->
                        <!--<div class="progress xs">-->
                          <!--<div class="progress-bar progress-bar-yellow" style="width: 40%" role="progressbar"-->
                            <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                            <!--<span class="sr-only">40% Complete</span>-->
                          <!--</div>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                    <!--<li>-->
                      <!--&lt;!&ndash; Task item &ndash;&gt;-->
                      <!--<a href="#">-->
                        <!--<h3>-->
                          <!--Nam varius sapien-->
                          <!--<small class="pull-right">80%</small>-->
                        <!--</h3>-->
                        <!--<div class="progress xs">-->
                          <!--<div class="progress-bar progress-bar-red" style="width: 80%" role="progressbar"-->
                            <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                            <!--<span class="sr-only">80% Complete</span>-->
                          <!--</div>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                    <!--<li>-->
                      <!--&lt;!&ndash; Task item &ndash;&gt;-->
                      <!--<a href="#">-->
                        <!--<h3>-->
                          <!--Nunc fringilla-->
                          <!--<small class="pull-right">90%</small>-->
                        <!--</h3>-->
                        <!--<div class="progress xs">-->
                          <!--<div class="progress-bar progress-bar-primary" style="width: 90%" role="progressbar"-->
                            <!--aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                            <!--<span class="sr-only">90% Complete</span>-->
                          <!--</div>-->
                        <!--</div>-->
                      <!--</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash; end task item &ndash;&gt;-->
                  <!--</ul>-->
                <!--</li>-->
                <!--<li class="footer">-->
                  <!--<a href="#">View all tasks</a>-->
                <!--</li>-->
              <!--</ul>-->
            <!--</li>-->
            <!-- User Account-->
            <!--<li class="dropdown user user-menu">-->
              <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                <!--<img src="./images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">-->
              <!--</a>-->
              <!--<ul class="dropdown-menu scale-up">-->
                <!--&lt;!&ndash; User image &ndash;&gt;-->
                <!--<li class="user-header">-->
                  <!--<img src="./images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">-->

                  <!--<p>-->
                    <!--Juliya Brus-->
                    <!--<small class="mb-5">jb@gmail.com</small>-->
                    <!--<a href="#" class="btn btn-danger btn-sm btn-rounded">View Profile</a>-->
                  <!--</p>-->
                <!--</li>-->
                <!--&lt;!&ndash; Menu Body &ndash;&gt;-->
                <!--<li class="user-body">-->
                  <!--<div class="row no-gutters">-->
                    <!--<div class="col-12 text-left">-->
                      <!--<a href="#"><i class="ion ion-person"></i> My Profile</a>-->
                    <!--</div>-->
                    <!--<div class="col-12 text-left">-->
                      <!--<a href="#"><i class="ion ion-email-unread"></i> Inbox</a>-->
                    <!--</div>-->
                    <!--<div class="col-12 text-left">-->
                      <!--<a href="#"><i class="ion ion-settings"></i> Setting</a>-->
                    <!--</div>-->
                    <!--<div role="separator" class="divider col-12"></div>-->
                    <!--<div class="col-12 text-left">-->
                      <!--<a href="#"><i class="ti-settings"></i> Account Setting</a>-->
                    <!--</div>-->
                    <!--<div role="separator" class="divider col-12"></div>-->
                    <!--<div class="col-12 text-left">-->
                      <!--<a href="#"><i class="fa fa-power-off"></i> Logout</a>-->
                    <!--</div>-->
                  <!--</div>-->
                  <!--&lt;!&ndash; /.row &ndash;&gt;-->
                <!--</li>-->
              <!--</ul>-->
            <!--</li>-->
            <!--&lt;!&ndash; Control Sidebar Toggle Button &ndash;&gt;-->
            <!--<li>-->
              <!--<a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>-->
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="user-profile treeview">
            <a href="index.html">
              <img src="./images/user5-128x128.jpg" alt="user">
              <span>Juliya Brus</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
              <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
              <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
              <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
              <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
            </ul>
          </li>
          <li class="header nav-small-cap">PERSONAL</li>
          <li class="active">
            <a href="index.html">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
          </li>
          <!--<li><a href="apps/users/app-users.html"><i class="fa fa-circle-thin"></i>Support Ticket</a></li>-->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i>
              <span>App</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <!--<li><a href="pages/app/app-chat.html"><i class="fa fa-circle-thin"></i>Chat app</a></li>-->
              <!--<li><a href="pages/app/app-contact.html"><i class="fa fa-circle-thin"></i>Contact / Employee</a></li>-->
              <li><a href="apps/users/app-users.html"><i class="fa fa-circle-thin"></i>Users</a></li>
              <!--<li><a href="pages/app/calendar.html"><i class="fa fa-circle-thin"></i>Calendar</a></li>-->
              <!--<li><a href="pages/app/profile.html"><i class="fa fa-circle-thin"></i>Profile</a></li>-->
              <!--<li><a href="pages/app/userlist-grid.html"><i class="fa fa-circle-thin"></i>Userlist Grid</a></li>-->
              <!--<li><a href="pages/app/userlist.html"><i class="fa fa-circle-thin"></i>Userlist</a></li>-->
            </ul>
          </li>
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-envelope"></i> <span>Mailbox</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/mailbox/mailbox.html"><i class="fa fa-circle-thin"></i>Inbox</a></li>-->
              <!--<li><a href="pages/mailbox/compose.html"><i class="fa fa-circle-thin"></i>Compose</a></li>-->
              <!--<li><a href="pages/mailbox/read-mail.html"><i class="fa fa-circle-thin"></i>Read</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-laptop"></i>-->
              <!--<span>UI Elements</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/UI/badges.html"><i class="fa fa-circle-thin"></i>Badges</a></li>-->
              <!--<li><a href="pages/UI/border-utilities.html"><i class="fa fa-circle-thin"></i>Border</a></li>-->
              <!--<li><a href="pages/UI/buttons.html"><i class="fa fa-circle-thin"></i>Buttons</a></li>-->
              <!--<li><a href="pages/UI/bootstrap-switch.html"><i class="fa fa-circle-thin"></i>Bootstrap Switch</a></li>-->
              <!--<li><a href="pages/UI/cards.html"><i class="fa fa-circle-thin"></i>User Card</a></li>-->
              <!--<li><a href="pages/UI/color-utilities.html"><i class="fa fa-circle-thin"></i>Color</a></li>-->
              <!--<li><a href="pages/UI/date-paginator.html"><i class="fa fa-circle-thin"></i>Date Paginator</a></li>-->
              <!--<li><a href="pages/UI/dropdown.html"><i class="fa fa-circle-thin"></i>Dropdown</a></li>-->
              <!--<li><a href="pages/UI/dropdown-grid.html"><i class="fa fa-circle-thin"></i>Dropdown Grid</a></li>-->
              <!--<li><a href="pages/UI/general.html"><i class="fa fa-circle-thin"></i>General</a></li>-->
              <!--<li><a href="pages/UI/icons.html"><i class="fa fa-circle-thin"></i>Icons</a></li>-->
              <!--<li><a href="pages/UI/media-advanced.html"><i class="fa fa-circle-thin"></i>Advanced Medias</a></li>-->
              <!--<li><a href="pages/UI/modals.html"><i class="fa fa-circle-thin"></i>Modals</a></li>-->
              <!--<li><a href="pages/UI/nestable.html"><i class="fa fa-circle-thin"></i>Nestable</a></li>-->
              <!--<li><a href="pages/UI/notification.html"><i class="fa fa-circle-thin"></i>Notification</a></li>-->
              <!--<li><a href="pages/UI/portlet-draggable.html"><i class="fa fa-circle-thin"></i>Draggable Portlets</a></li>-->
              <!--<li><a href="pages/UI/ribbons.html"><i class="fa fa-circle-thin"></i>Ribbons</a></li>-->
              <!--<li><a href="pages/UI/sliders.html"><i class="fa fa-circle-thin"></i>Sliders</a></li>-->
              <!--<li><a href="pages/UI/sweatalert.html"><i class="fa fa-circle-thin"></i>Sweet Alert</a></li>-->
              <!--<li><a href="pages/UI/tab.html"><i class="fa fa-circle-thin"></i>Tabs</a></li>-->
              <!--<li><a href="pages/UI/timeline.html"><i class="fa fa-circle-thin"></i>Timeline</a></li>-->
              <!--<li><a href="pages/UI/timeline-horizontal.html"><i class="fa fa-circle-thin"></i>Horizontal Timeline</a>-->
              <!--</li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-bars"></i>-->
              <!--<span>Widgets</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/widgets/blog.html"><i class="fa fa-circle-thin"></i>Blog</a></li>-->
              <!--<li><a href="pages/widgets/chart.html"><i class="fa fa-circle-thin"></i>Chart</a></li>-->
              <!--<li><a href="pages/widgets/list.html"><i class="fa fa-circle-thin"></i>List</a></li>-->
              <!--<li><a href="pages/widgets/social.html"><i class="fa fa-circle-thin"></i>Social</a></li>-->
              <!--<li><a href="pages/widgets/statistic.html"><i class="fa fa-circle-thin"></i>Statistic</a></li>-->
              <!--<li><a href="pages/widgets/weather.html"><i class="fa fa-circle-thin"></i>Weather</a></li>-->
              <!--<li><a href="pages/widgets/widgets.html"><i class="fa fa-circle-thin"></i>Widgets</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-files-o"></i>-->
              <!--<span>Layout Options</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/layout/boxed.html"><i class="fa fa-circle-thin"></i>Boxed</a></li>-->
              <!--<li><a href="pages/layout/fixed.html"><i class="fa fa-circle-thin"></i>Fixed</a></li>-->
              <!--<li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-thin"></i>Collapsed Sidebar</a>-->
              <!--</li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-square-o"></i>-->
              <!--<span>Box</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/box/advanced.html"><i class="fa fa-circle-thin"></i>Advanced</a></li>-->
              <!--<li><a href="pages/box/basic.html"><i class="fa fa-circle-thin"></i>Basic</a></li>-->
              <!--<li><a href="pages/box/color.html"><i class="fa fa-circle-thin"></i>Color</a></li>-->
              <!--<li><a href="pages/box/group.html"><i class="fa fa-circle-thin"></i>Group</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-pie-chart"></i>-->
              <!--<span>Charts</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-thin"></i>ChartJS</a></li>-->
              <!--<li><a href="pages/charts/flot.html"><i class="fa fa-circle-thin"></i>Flot</a></li>-->
              <!--<li><a href="pages/charts/inline.html"><i class="fa fa-circle-thin"></i>Inline charts</a></li>-->
              <!--<li><a href="pages/charts/morris.html"><i class="fa fa-circle-thin"></i>Morris</a></li>-->
              <!--<li><a href="pages/charts/peity.html"><i class="fa fa-circle-thin"></i>Peity</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-edit"></i> <span>Forms</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/forms/advanced.html"><i class="fa fa-circle-thin"></i>Advanced Elements</a></li>-->
              <!--<li><a href="pages/forms/code-editor.html"><i class="fa fa-circle-thin"></i>Code Editor</a></li>-->
              <!--<li><a href="pages/forms/editor-markdown.html"><i class="fa fa-circle-thin"></i>Markdown</a></li>-->
              <!--<li><a href="pages/forms/editors.html"><i class="fa fa-circle-thin"></i>Editors</a></li>-->
              <!--<li><a href="pages/forms/form-validation.html"><i class="fa fa-circle-thin"></i>Form Validation</a></li>-->
              <!--<li><a href="pages/forms/form-wizard.html"><i class="fa fa-circle-thin"></i>Form Wizard</a></li>-->
              <!--<li><a href="pages/forms/general.html"><i class="fa fa-circle-thin"></i>General Elements</a></li>-->
              <!--<li><a href="pages/forms/mask.html"><i class="fa fa-circle-thin"></i>Formatter</a></li>-->
              <!--<li><a href="pages/forms/xeditable.html"><i class="fa fa-circle-thin"></i>Xeditable Editor</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-table"></i> <span>Tables</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/tables/simple.html"><i class="fa fa-circle-thin"></i>Simple tables</a></li>-->
              <!--<li><a href="pages/tables/data.html"><i class="fa fa-circle-thin"></i>Data tables</a></li>-->
              <!--<li><a href="pages/tables/editable-tables.html"><i class="fa fa-circle-thin"></i>Editable Tables</a></li>-->
              <!--<li><a href="pages/tables/table-color.html"><i class="fa fa-circle-thin"></i>Table Color</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li>-->
            <!--<a href="pages/email/index.html">-->
              <!--<i class="fa fa-envelope-open-o"></i> <span>Emails</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
          <!--</li>-->
          <!--<li class="header nav-small-cap">EXTRA COMPONENTS</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-map"></i> <span>Map</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/map/map-google.html"><i class="fa fa-circle-thin"></i>Google Map</a></li>-->
              <!--<li><a href="pages/map/map-vector.html"><i class="fa fa-circle-thin"></i>Vector Map</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-plug"></i> <span>Extension</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/extension/fullscreen.html"><i class="fa fa-circle-thin"></i>Fullscreen</a></li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-file"></i> <span>Sample Pages</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="pages/samplepage/blank.html"><i class="fa fa-circle-thin"></i>Blank</a></li>-->
              <!--<li><a href="pages/samplepage/coming-soon.html"><i class="fa fa-circle-thin"></i>Coming Soon</a></li>-->
              <!--<li><a href="pages/samplepage/custom-scroll.html"><i class="fa fa-circle-thin"></i>Custom Scrolls</a></li>-->
              <!--<li><a href="pages/samplepage/faq.html"><i class="fa fa-circle-thin"></i>FAQ</a></li>-->
              <!--<li><a href="pages/samplepage/gallery.html"><i class="fa fa-circle-thin"></i>Gallery</a></li>-->
              <!--<li><a href="pages/samplepage/invoice.html"><i class="fa fa-circle-thin"></i>Invoice</a></li>-->
              <!--<li><a href="pages/samplepage/lightbox.html"><i class="fa fa-circle-thin"></i>Lightbox Popup</a></li>-->
              <!--<li><a href="pages/samplepage/pace.html"><i class="fa fa-circle-thin"></i>Pace</a></li>-->
              <!--<li><a href="pages/samplepage/pricing.html"><i class="fa fa-circle-thin"></i>Pricing</a></li>-->
              <!--<li class="treeview">-->
                <!--<a href="#"><i class="fa fa-circle-thin"></i>Authentication-->
                  <!--<span class="pull-right-container">-->
                    <!--<i class="fa fa-angle-right pull-right"></i>-->
                  <!--</span>-->
                <!--</a>-->
                <!--<ul class="treeview-menu">-->
                  <!--<li><a href="pages/samplepage/login.html"><i class="fa fa-circle"></i>Login</a></li>-->
                  <!--<li><a href="pages/samplepage/register.html"><i class="fa fa-circle"></i>Register</a></li>-->
                  <!--<li><a href="pages/samplepage/lockscreen.html"><i class="fa fa-circle"></i>Lockscreen</a></li>-->
                  <!--<li><a href="pages/samplepage/user-pass.html"><i class="fa fa-circle"></i>Recover password</a></li>-->
                <!--</ul>-->
              <!--</li>-->
              <!--<li class="treeview">-->
                <!--<a href="#"><i class="fa fa-circle-thin"></i>Error Pages-->
                  <!--<span class="pull-right-container">-->
                    <!--<i class="fa fa-angle-right pull-right"></i>-->
                  <!--</span>-->
                <!--</a>-->
                <!--<ul class="treeview-menu">-->
                  <!--<li><a href="pages/samplepage/404.html"><i class="fa fa-circle"></i>404</a></li>-->
                  <!--<li><a href="pages/samplepage/500.html"><i class="fa fa-circle"></i>500</a></li>-->
                  <!--<li><a href="pages/samplepage/maintenance.html"><i class="fa fa-circle"></i>Maintenance</a></li>-->
                <!--</ul>-->
              <!--</li>-->
            <!--</ul>-->
          <!--</li>-->
          <!--<li class="treeview">-->
            <!--<a href="#">-->
              <!--<i class="fa fa-share"></i> <span>Multilevel</span>-->
              <!--<span class="pull-right-container">-->
                <!--<i class="fa fa-angle-right pull-right"></i>-->
              <!--</span>-->
            <!--</a>-->
            <!--<ul class="treeview-menu">-->
              <!--<li><a href="#">Level One</a></li>-->
              <!--<li class="treeview">-->
                <!--<a href="#">Level One-->
                  <!--<span class="pull-right-container">-->
                    <!--<i class="fa fa-angle-right pull-right"></i>-->
                  <!--</span>-->
                <!--</a>-->
                <!--<ul class="treeview-menu">-->
                  <!--<li><a href="#">Level Two</a></li>-->
                  <!--<li class="treeview">-->
                    <!--<a href="#">Level Two-->
                      <!--<span class="pull-right-container">-->
                        <!--<i class="fa fa-angle-right pull-right"></i>-->
                      <!--</span>-->
                    <!--</a>-->
                    <!--<ul class="treeview-menu">-->
                      <!--<li><a href="#">Level Three</a></li>-->
                      <!--<li><a href="#">Level Three</a></li>-->
                    <!--</ul>-->
                  <!--</li>-->
                <!--</ul>-->
              <!--</li>-->
              <!--<li><a href="#">Level One</a></li>-->
            <!--</ul>-->
          <!--</li>-->

        </ul>
      </section>
    </aside>
    <div class="content-wrapper">
      <h1>Dashboard Will Be Coming Soon</h1>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <!--<div class="content-wrapper">-->
      <!--&lt;!&ndash; Content Header (Page header) &ndash;&gt;-->
      <!--<section class="content-header">-->
        <!--<h1>-->
          <!--Dashboard-->
          <!--<small>Control panel</small>-->
        <!--</h1>-->
        <!--<ol class="breadcrumb">-->
          <!--<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
          <!--<li class="breadcrumb-item active">Dashboard</li>-->
        <!--</ol>-->
      <!--</section>-->

      <!--&lt;!&ndash; Main content &ndash;&gt;-->
      <!--<section class="content">-->
        <!--<div class="row">-->
          <!--<div class="col-lg-3 col-md-6">-->
            <!--<div class="info-box">-->
              <!--<span class="info-box-icon bg-primary rounded"><i class="fa fa-wheelchair"></i></span>-->

              <!--<div class="info-box-content">-->
                <!--<span class="info-box-number">4,569</span>-->
                <!--<span class="info-box-text">Patient</span>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.info-box-content &ndash;&gt;-->
            <!--</div>-->
          <!--</div>-->
          <!--<div class="col-lg-3 col-md-6">-->
            <!--<div class="info-box">-->
              <!--<span class="info-box-icon bg-warning rounded"><i class="fa fa-file"></i></span>-->

              <!--<div class="info-box-content">-->
                <!--<span class="info-box-number">23,009</span>-->
                <!--<span class="info-box-text">Encounters</span>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.info-box-content &ndash;&gt;-->
            <!--</div>-->
          <!--</div>-->
          <!--<div class="col-lg-3 col-md-6">-->
            <!--<div class="info-box">-->
              <!--<span class="info-box-icon bg-info rounded"><i class="fa fa-calendar"></i></span>-->

              <!--<div class="info-box-content">-->
                <!--<span class="info-box-number">56</span>-->
                <!--<span class="info-box-text">Appointments</span>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.info-box-content &ndash;&gt;-->
            <!--</div>-->
          <!--</div>-->
          <!--<div class="col-lg-3 col-md-6">-->
            <!--<div class="info-box">-->
              <!--<span class="info-box-icon bg-success rounded"><i class="fa fa-heartbeat"></i></span>-->

              <!--<div class="info-box-content">-->
                <!--<span class="info-box-number">12,100</span>-->
                <!--<span class="info-box-text">Lab & Radiology</span>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.info-box-content &ndash;&gt;-->
            <!--</div>-->
          <!--</div>-->
        <!--</div>-->
        <!--<div class="row">-->
          <!--<div class="col-lg-4 col-12">-->

            <!--<div class="box">-->
              <!--<div class="box-header with-border">-->
                <!--<h4 class="box-title pt-5">Current Vitals</h4>-->
                <!--<div class="box-controls pull-right">-->
                  <!--<div class="lookup lookup-circle lookup-right">-->
                    <!--<input type="text" name="s" placeholder="Patients id">-->
                  <!--</div>-->
                <!--</div>-->
              <!--</div>-->
              <!--<div class="box-body">-->
                <!--<div class="flexbox bb-1 mb-15">-->
                  <!--<div>-->
                    <!--<p><span class="text-light">Patient Name:</span> <strong>Jonsahn</strong></p>-->
                  <!--</div>-->
                  <!--<div>-->
                    <!--<p><span class="text-light">Patient Id:</span> <strong>1254896</strong></p>-->
                  <!--</div>-->
                <!--</div>-->
                <!--<div class="row">-->
                  <!--<div class="col-xl-5 col-4 pr-0">-->
                    <!--<img class="img-fluid float-left w-40 mr-5" src="./images/human.png" alt="">-->
                    <!--<div class="height-div">-->
                      <!--<p class="mb-0 mt-20 ml-10"><small>Height</small></p>-->
                      <!--<h4 class="text-black mb-0"><strong>6’1</strong></h4>-->
                    <!--</div>-->
                  <!--</div>-->
                  <!--<div class="col-xl-7 col-8">-->
                    <!--<div class="row bb-1 pb-10">-->
                      <!--<div class="col-6">-->
                        <!--<img class="img-fluid float-left w-30 mt-10 mr-10" src="./images/weight.png" alt="">-->
                        <!--<div>-->
                          <!--<p class="mb-0"><small>Weight</small></p>-->
                          <!--<h5 class="text-black mb-0"><strong>230 ibs</strong></h5>-->
                        <!--</div>-->
                      <!--</div>-->
                      <!--<div class="col-6 bl-1">-->
                        <!--<img class="img-fluid float-left w-30 mt-10 mr-10" src="./images/bmi.png" alt="">-->
                        <!--<div>-->
                          <!--<p class="mb-0"><small>BMI</small></p>-->
                          <!--<h5 class="text-black mb-0"><strong>30.34</strong></h5>-->
                        <!--</div>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--<div class="row pt-5">-->
                      <!--<div class="col-12">-->
                        <!--<span class="text-danger">Blood Pressure</span>-->
                      <!--</div>-->
                      <!--<div class="col-6">-->
                        <!--<div class="progress progress-xs mb-0 mt-5 w-40">-->
                          <!--<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"-->
                            <!--aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">-->
                          <!--</div>-->
                        <!--</div>-->
                        <!--<h2 class="float-left mt-0 mr-10"><strong>150</strong></h2>-->
                        <!--<div>-->
                          <!--<p class="mb-0"><small>Systolic</small></p>-->
                          <!--<p class="text-black mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>-->
                        <!--</div>-->
                      <!--</div>-->
                      <!--<div class="col-6 bl-1">-->
                        <!--<div class="progress progress-xs mb-0 mt-5 w-40">-->
                          <!--<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"-->
                            <!--aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">-->
                          <!--</div>-->
                        <!--</div>-->
                        <!--<h2 class="float-left mt-0 mr-10"><strong>90</strong></h2>-->
                        <!--<div>-->
                          <!--<p class="mb-0"><small>Diastolic</small></p>-->
                          <!--<p class="text-black mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>-->
                        <!--</div>-->
                      <!--</div>-->
                    <!--</div>-->
                  <!--</div>-->
                <!--</div>-->
              <!--</div>-->
              <!--<div class="box-body pt-0">-->
                <!--<p><small>Recorded on 25/05/2018</small></p>-->
              <!--</div>-->
              <!--<div class="box-body bg-danger">-->
                <!--<img src="./images/smoking.png" alt="" class="float-left mr-10">-->
                <!--<p>Smoking Status : current every day smoker</p>-->
              <!--</div>-->
            <!--</div>-->

            <!--<div class="box">-->
              <!--<div class="box-header with-border">-->
                <!--<h4 class="box-title">Daily Patients Overview</h4>-->

                <!--<ul class="box-controls pull-right">-->
                  <!--<li><a class="box-btn-close" href="#"></a></li>-->
                  <!--<li><a class="box-btn-slide" href="#"></a></li>-->
                  <!--<li><a class="box-btn-fullscreen" href="#"></a></li>-->
                <!--</ul>-->
              <!--</div>-->
              <!--<div class="box-body">-->
                <!--<ul class="list-inline text-right">-->
                  <!--<li>-->
                    <!--<h5><i class="fa fa-circle mr-5 text-success"></i>OPD</h5>-->
                  <!--</li>-->
                  <!--<li>-->
                    <!--<h5><i class="fa fa-circle mr-5 text-danger"></i>ICU</h5>-->
                  <!--</li>-->
                <!--</ul>-->
                <!--<div class="chart" id="bar-chart" style="height: 300px;"></div>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
            <!--</div>-->
            <!--&lt;!&ndash; /.box &ndash;&gt;-->

            <!--&lt;!&ndash; AREA CHART &ndash;&gt;-->
            <!--<div class="box">-->
              <!--<div class="box-header with-border">-->
                <!--<h4 class="box-title">OPD Overview</h4>-->
                <!--<ul class="box-controls pull-right">-->
                  <!--<li><a class="box-btn-close" href="#"></a></li>-->
                  <!--<li><a class="box-btn-slide" href="#"></a></li>-->
                  <!--<li><a class="box-btn-fullscreen" href="#"></a></li>-->
                <!--</ul>-->
              <!--</div>-->
              <!--<div class="box-body">-->
                <!--<div class="">-->
                  <!--<canvas id="satatistics1" height="135" style="position: absolute;"></canvas>-->
                  <!--<canvas id="satatistics2" height="135"></canvas>-->
                <!--</div>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
            <!--</div>-->
            <!--&lt;!&ndash; /.box &ndash;&gt;-->

            <!--<div class="box">-->
              <!--<div class="box-header with-border">-->
                <!--<h4 class="box-title">Appointment</h4>-->

                <!--<ul class="box-controls pull-right">-->
                  <!--<li class="dropdown">-->
                    <!--<a data-toggle="dropdown" href="#" aria-expanded="false"><i class="ti-more-alt rotate-90"></i></a>-->
                    <!--<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"-->
                      <!--style="position: absolute; transform: translate3d(-114px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">-->
                      <!--<a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>-->
                      <!--<a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>-->
                      <!--<a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>-->
                      <!--<div class="dropdown-divider"></div>-->
                      <!--<a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>-->
                    <!--</div>-->
                  <!--</li>-->
                  <!--<li><a class="box-btn-close" href="#"></a></li>-->
                  <!--<li><a class="box-btn-slide" href="#"></a></li>-->
                  <!--<li><a class="box-btn-fullscreen" href="#"></a></li>-->
                <!--</ul>-->
              <!--</div>-->
              <!--<div class="box-body p-0">-->
                <!--&lt;!&ndash; THE CALENDAR &ndash;&gt;-->
                <!--<div id="calendar" class="dask"></div>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
            <!--</div>-->
            <!--&lt;!&ndash; /.box &ndash;&gt;-->

            <!--<div class="box">-->
              <!--<div class="box-header with-border">-->
                <!--<h4 class="box-title">Hospital Earning of the Day </h4>-->

                <!--<ul class="box-controls pull-right">-->
                  <!--<li><a class="box-btn-close" href="#"></a></li>-->
                  <!--<li><a class="box-btn-slide" href="#"></a></li>-->
                  <!--<li><a class="box-btn-fullscreen" href="#"></a></li>-->
                <!--</ul>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.box-header &ndash;&gt;-->
              <!--<div class="box-body">-->
                <!--<div id="feesdaily">-->
                  <!--<b>Total Collection</b> : &nbsp;$15,500<br><br>-->
                  <!--<b>Total Discount</b> : &nbsp;$800-->
                <!--</div>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
            <!--</div>-->

          <!--</div>-->

          <!--<div class="col-12 col-lg-8">-->
            <!--<div class="box">-->
              <!--<div class="box-header with-border">-->
                <!--<h4 class="box-title">Radiology</h4>-->

                <!--<ul class="box-controls pull-right">-->
                  <!--<li><a class="box-btn-close" href="#"></a></li>-->
                  <!--<li><a class="box-btn-slide" href="#"></a></li>-->
                  <!--<li><a class="box-btn-fullscreen" href="#"></a></li>-->
                <!--</ul>-->
              <!--</div>-->
              <!--&lt;!&ndash; /.box-header &ndash;&gt;-->
              <!--<div class="box-body">-->
                <!--<div class="table-responsive">-->
                  <!--<table class="table table-striped table-hover">-->
                    <!--<thead>-->
                      <!--<tr>-->
                        <!--<th class="bb-2">No.</th>-->
                        <!--<th class="bb-2">Test Name</th>-->
                        <!--<th class="bb-2">Handling Lab</th>-->
                        <!--<th class="bb-2">Priority</th>-->
                        <!--<th class="bb-2">Cost</th>-->
                        <!--<th class="bb-2">Handling</th>-->
                        <!--<th class="bb-2">Collect By</th>-->
                        <!--<th class="bb-2">Status</th>-->
                        <!--<th class="bb-2">Result</th>-->
                        <!--<th class="bb-2">Signed</th>-->
                      <!--</tr>-->
                    <!--</thead>-->
                    <!--<tbody>-->
                      <!--<tr>-->
                        <!--<td>1</td>-->
                        <!--<td>Full Blood Count</td>-->
                        <!--<td>Microbiology</td>-->
                        <!--<td><span class="badge badge-warning">Law</span></td>-->
                        <!--<td>N500</td>-->
                        <!--<td>Coker Mi</td>-->
                        <!--<td>5.45pm 11/05</td>-->
                        <!--<td><span class="badge badge-success">Result Added</span></td>-->
                        <!--<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result </a>-->
                          <!--<a href="#">LMIS </a>-->
                          <!--<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment </a>-->
                        <!--</td>-->
                        <!--<td><button type="button" class="btn btn-sm btn-toggle active" data-toggle="button"-->
                            <!--aria-pressed="false" autocomplete="off">-->
                            <!--<div class="handle"></div>-->
                          <!--</button>-->
                        <!--</td>-->
                      <!--</tr>-->
                      <!--<tr>-->
                        <!--<td>2</td>-->
                        <!--<td>Full Blood Count</td>-->
                        <!--<td>Microbiology</td>-->
                        <!--<td><span class="badge badge-warning">Law</span></td>-->
                        <!--<td>N500</td>-->
                        <!--<td>Coker Mi</td>-->
                        <!--<td>5.45pm 11/05</td>-->
                        <!--<td><span class="badge badge-success">Result Added</span></td>-->
                        <!--<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result </a>-->
                          <!--<a href="#">LMIS </a>-->
                          <!--<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment </a>-->
                        <!--</td>-->
                        <!--<td><button type="button" class="btn btn-sm btn-toggle" data-toggle="button"-->
                            <!--aria-pressed="false" autocomplete="off">-->
                            <!--<div class="handle"></div>-->
                          <!--</button>-->
                        <!--</td>-->
                      <!--</tr>-->
                      <!--<tr>-->
                        <!--<td>3</td>-->
                        <!--<td>Full Blood Count</td>-->
                        <!--<td>Microbiology</td>-->
                        <!--<td><span class="badge badge-warning">Law</span></td>-->
                        <!--<td>N500</td>-->
                        <!--<td>Coker Mi</td>-->
                        <!--<td>5.45pm 11/05</td>-->
                        <!--<td><span class="badge badge-success">Result Added</span></td>-->
                        <!--<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result </a>-->
                          <!--<a href="#">LMIS </a>-->
                          <!--<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment </a>-->
                        <!--</td>-->
                        <!--<td><button type="button" class="btn btn-sm btn-toggle active" data-toggle="button"-->
                            <!--aria-pressed="false" autocomplete="off">-->
                            <!--<div class="handle"></div>-->
                          <!--</button>-->
                        <!--</td>-->
                      <!--</tr>-->
                      <!--<tr>-->
                        <!--<td>4</td>-->
                        <!--<td>Full Blood Count</td>-->
                        <!--<td>Microbiology</td>-->
                        <!--<td><span class="badge badge-warning">Law</span></td>-->
                        <!--<td>N500</td>-->
                        <!--<td>Coker Mi</td>-->
                        <!--<td>5.45pm 11/05</td>-->
                        <!--<td><span class="badge badge-success">Result Added</span></td>-->
                        <!--<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result </a>-->
                          <!--<a href="#">LMIS </a>-->
                          <!--<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment </a>-->
                        <!--</td>-->
                        <!--<td><button type="button" class="btn btn-sm btn-toggle" data-toggle="button"-->
                            <!--aria-pressed="false" autocomplete="off">-->
                            <!--<div class="handle"></div>-->
                          <!--</button>-->
                        <!--</td>-->
                      <!--</tr>-->
                      <!--<tr>-->
                        <!--<td>5</td>-->
                        <!--<td>Full Blood Count</td>-->
                        <!--<td>Microbiology</td>-->
                        <!--<td><span class="badge badge-warning">Law</span></td>-->
                        <!--<td>N500</td>-->
                        <!--<td>Coker Mi</td>-->
                        <!--<td>5.45pm 11/05</td>-->
                        <!--<td><span class="badge badge-success">Result Added</span></td>-->
                        <!--<td><a href="#" data-toggle="modal" data-target="#result" class="text-info">Result </a>-->
                          <!--<a href="#">LMIS </a>-->
                          <!--<a href="#" data-toggle="modal" data-target="#comment-dialog" class="text-info">Comment </a>-->
                        <!--</td>-->
                        <!--<td><button type="button" class="btn btn-sm btn-toggle" data-toggle="button"-->
                            <!--aria-pressed="false" autocomplete="off">-->
                            <!--<div class="handle"></div>-->
                          <!--</button>-->
                        <!--</td>-->
                      <!--</tr>-->
                    <!--</tbody>-->
                  <!--</table>-->
                <!--</div>-->
                <!--&lt;!&ndash; result modal content &ndash;&gt;-->
                <!--<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="result-popup" aria-hidden="true"-->
                  <!--style="display: none;" id="result">-->
                  <!--<div class="modal-dialog modal-lg">-->
                    <!--<div class="modal-content">-->
                      <!--<div class="modal-header">-->
                        <!--<h4 class="modal-title" id="result-popup">Radiology Investigations - Result</h4>-->
                        <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
                      <!--</div>-->
                      <!--<div class="modal-body">-->
                        <!--<div class="row justify-content-between">-->
                          <!--<div class="col-md-7 col-12">-->
                            <!--<h4>Test Name - Full Neck Scan</h4>-->
                          <!--</div>-->
                          <!--<div class="col-md-5 col-12">-->
                            <!--<h4 class="text-right">Lab Order Id : L0000002821</h4>-->
                          <!--</div>-->
                        <!--</div>-->
                        <!--<div class="table-responsive">-->
                          <!--<table class="table table-bordered">-->
                            <!--<thead class="bg-secondary">-->
                              <!--<tr>-->
                                <!--<th scope="col">Test</th>-->
                                <!--<th scope="col">Result</th>-->
                                <!--<th scope="col">Range</th>-->
                              <!--</tr>-->
                            <!--</thead>-->
                            <!--<tbody>-->
                              <!--<tr>-->
                                <!--<td>Swelling Diameter</td>-->
                                <!--<td>45 - 1000</td>-->
                                <!--<td>&nbsp;</td>-->
                              <!--</tr>-->
                              <!--<tr>-->
                                <!--<td>&nbsp;</td>-->
                                <!--<td>&nbsp;</td>-->
                                <!--<td>&nbsp;</td>-->
                              <!--</tr>-->
                            <!--</tbody>-->
                          <!--</table>-->
                        <!--</div>-->
                        <!--<div class="comment">-->
                          <!--<p><span class="font-weight-600">Comment</span> : <span class="comment-here text-light">Lorem-->
                              <!--ipsum dolor sit amet, consectetur adipisicing elit. </span></p>-->
                        <!--</div>-->
                        <!--<div class="table-responsive">-->
                          <!--<table class="table">-->
                            <!--<tbody>-->
                              <!--<tr>-->
                                <!--<th colspan="2" class="b-0">Test By</th>-->
                                <!--<th colspan="2" class="b-0">Signed By</th>-->
                              <!--</tr>-->
                              <!--<tr class="bg-secondary">-->
                                <!--<td>Donald jr</td>-->
                                <!--<td>Time : 11-8-2017 04:22</td>-->
                                <!--<td>Lous Clark</td>-->
                                <!--<td>Time : 11-8-2017 04:22</td>-->
                              <!--</tr>-->
                            <!--</tbody>-->
                          <!--</table>-->
                        <!--</div>-->
                      <!--</div>-->
                      <!--<div class="modal-footer">-->
                        <!--<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>-->
                        <!--<button type="button" class="btn btn-info pull-right">Print</button>-->
                        <!--<button type="button" class="btn btn-success pull-right">Save</button>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.modal-content &ndash;&gt;-->
                  <!--</div>-->
                  <!--&lt;!&ndash; /.modal-dialog &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.modal &ndash;&gt;-->


                <!--&lt;!&ndash; comment modal content &ndash;&gt;-->
                <!--<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="comment-popup" aria-hidden="true"-->
                  <!--style="display: none;" id="comment-dialog">-->
                  <!--<div class="modal-dialog modal-lg">-->
                    <!--<div class="modal-content">-->
                      <!--<div class="modal-header">-->
                        <!--<h4 class="modal-title" id="comment-popup">Radiology Investigations - Comment</h4>-->
                        <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
                      <!--</div>-->
                      <!--<div class="modal-body">-->
                        <!--<div class="row justify-content-between">-->
                          <!--<div class="col-12">-->
                            <!--<h4>Comment</h4>-->
                          <!--</div>-->
                        <!--</div>-->
                        <!--<form>-->
                          <!--<div class="form-group">-->
                            <!--<textarea class="form-control" id="comment-area" rows="3"></textarea>-->
                          <!--</div>-->
                        <!--</form>-->
                      <!--</div>-->
                      <!--<div class="modal-footer">-->
                        <!--<button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>-->
                        <!--<button type="button" class="btn btn-success pull-right mr-10">Save</button>-->
                      <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /.modal-content &ndash;&gt;-->
                  <!--</div>-->
                  <!--&lt;!&ndash; /.modal-dialog &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.modal &ndash;&gt;-->

              <!--</div>-->
              <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
            <!--</div>-->
            <!--&lt;!&ndash; /.box &ndash;&gt;-->
            <!--<div class="row">-->

              <!--<div class="col-12 col-lg-6">-->
                <!--<div class="box box-body">-->
                  <!--<div class="flexbox">-->
                    <!--<h6 class="text-uppercase">New Patient</h6>-->
                    <!--<h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20 High then last month-->
                    <!--</h6>-->
                  <!--</div>-->

                  <!--<ul class="flexbox flex-justified text-center my-20">-->
                    <!--<li class="br-1">-->
                      <!--<div class="font-size-18">953</div>-->
                      <!--<small>Overall</small>-->
                    <!--</li>-->

                    <!--<li class="br-1">-->
                      <!--<div class="font-size-18">813</div>-->
                      <!--<small>Montly</small>-->
                    <!--</li>-->

                    <!--<li>-->
                      <!--<div class="font-size-18">369</div>-->
                      <!--<small>Day</small>-->
                    <!--</li>-->
                  <!--</ul>-->

                  <!--<div id="newpatient"></div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.box &ndash;&gt;-->
              <!--</div>-->

              <!--<div class="col-12 col-lg-6">-->
                <!--<div class="box box-body">-->
                  <!--<div class="flexbox">-->
                    <!--<h6 class="text-uppercase">OPD Patients</h6>-->
                    <!--<h6><i class="ion-android-arrow-dropdown text-danger font-size-18 mr-1"></i> %20 less then last-->
                      <!--month</h6>-->
                  <!--</div>-->

                  <!--<ul class="flexbox flex-justified text-center my-20">-->
                    <!--<li class="br-1">-->
                      <!--<div class="font-size-18">%76.58</div>-->
                      <!--<small>Overall</small>-->
                    <!--</li>-->

                    <!--<li class="br-1">-->
                      <!--<div class="font-size-18">%35.12</div>-->
                      <!--<small>Montly</small>-->
                    <!--</li>-->

                    <!--<li>-->
                      <!--<div class="font-size-18">%6.66</div>-->
                      <!--<small>Day</small>-->
                    <!--</li>-->
                  <!--</ul>-->

                  <!--<div id="opdpatient" class="text-center"></div>-->
                <!--</div>-->
              <!--</div>-->

              <!--<div class="col-12">-->
                <!--&lt;!&ndash; Groth widget &ndash;&gt;-->
                <!--<div class="box">-->
                  <!--<div class="box-header">-->
                    <!--<h4 class="box-title">Hospital Groth</h4>-->
                    <!--<ul class="box-controls pull-right">-->
                      <!--<li><a class="box-btn-close" href="#"></a></li>-->
                      <!--<li><a class="box-btn-slide" href="#"></a></li>-->
                      <!--<li><a class="box-btn-fullscreen" href="#"></a></li>-->
                    <!--</ul>-->
                  <!--</div>-->
                  <!--<div class="box-body">-->
                    <!--<div id="hospitalgroth" style="height: 370px;"></div>-->
                  <!--</div>-->
                <!--</div>-->
              <!--</div>-->

              <!--<div class="col-6 col-xl-3">-->
                <!--<a class="box box-link-shadow text-center" href="javascript:void(0)">-->
                  <!--<div class="box-body py-25 bg-light">-->
                    <!--<p class="font-weight-600">Prescription</p>-->
                  <!--</div>-->
                  <!--<div class="box-body">-->
                    <!--<p class="mt-5">-->
                      <!--<i class="fa fa-file-text fa-4x text-info"></i>-->
                    <!--</p>-->
                  <!--</div>-->
                <!--</a>-->
              <!--</div>-->

              <!--<div class="col-6 col-xl-3">-->
                <!--<a class="box box-link-shadow text-center" href="javascript:void(0)">-->
                  <!--<div class="box-body py-25 bg-light">-->
                    <!--<p class="font-weight-600">Lab & Radiology</p>-->
                  <!--</div>-->
                  <!--<div class="box-body">-->
                    <!--<p class="mt-5">-->
                      <!--<i class="fa fa-heartbeat fa-4x text-primary"></i>-->
                    <!--</p>-->
                  <!--</div>-->
                <!--</a>-->
              <!--</div>-->

              <!--<div class="col-6 col-xl-3">-->
                <!--<a class="box box-link-shadow text-center" href="javascript:void(0)">-->
                  <!--<div class="box-body py-25 bg-light">-->
                    <!--<p class="font-weight-600">Encounters</p>-->
                  <!--</div>-->
                  <!--<div class="box-body">-->
                    <!--<p class="mt-5">-->
                      <!--<i class="fa fa-file fa-4x text-danger"></i>-->
                    <!--</p>-->
                  <!--</div>-->
                <!--</a>-->
              <!--</div>-->

              <!--<div class="col-6 col-xl-3">-->
                <!--<a class="box box-link-shadow text-center" href="javascript:void(0)">-->
                  <!--<div class="box-body py-25 bg-light">-->
                    <!--<p class="font-weight-600">Patient</p>-->
                  <!--</div>-->
                  <!--<div class="box-body">-->
                    <!--<p class="mt-5">-->
                      <!--<i class="fa fa-wheelchair fa-4x text-success"></i>-->
                    <!--</p>-->
                  <!--</div>-->
                <!--</a>-->
              <!--</div>-->

              <!--<div class="col-12">-->
                <!--&lt;!&ndash; AREA CHART &ndash;&gt;-->
                <!--<div class="box">-->
                  <!--<div class="box-header with-border">-->
                    <!--<h4 class="box-title">Monthly Overview</h4>-->
                    <!--<ul class="box-controls pull-right">-->
                      <!--<li><a class="box-btn-close" href="#"></a></li>-->
                      <!--<li><a class="box-btn-slide" href="#"></a></li>-->
                      <!--<li><a class="box-btn-fullscreen" href="#"></a></li>-->
                    <!--</ul>-->
                  <!--</div>-->
                  <!--<div class="box-body">-->
                    <!--<div class="chart">-->
                      <!--<canvas id="chart_2" height="100"></canvas>-->
                    <!--</div>-->
                  <!--</div>-->
                  <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.box &ndash;&gt;-->
              <!--</div>-->

            <!--</div>-->
          <!--</div>-->

        <!--</div>-->

        <!--&lt;!&ndash; /.row &ndash;&gt;-->
      <!--</section>-->
      <!--&lt;!&ndash; /.content &ndash;&gt;-->
    <!--</div>-->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Purchase Now</a>
          </li>
        </ul>
      </div>
      &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
    </footer>

    <!-- Control Sidebar -->
    <!--<aside class="control-sidebar control-sidebar-light">-->
      <!--&lt;!&ndash; Create the tabs &ndash;&gt;-->
      <!--<ul class="nav nav-tabs nav-justified control-sidebar-tabs">-->
        <!--<li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>-->
        <!--<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i-->
              <!--class="fa fa-cog fa-spin"></i></a></li>-->
      <!--</ul>-->
      <!--&lt;!&ndash; Tab panes &ndash;&gt;-->
      <!--<div class="tab-content">-->
        <!--&lt;!&ndash; Home tab content &ndash;&gt;-->
        <!--<div class="tab-pane" id="control-sidebar-home-tab">-->
          <!--<h3 class="control-sidebar-heading">Recent Activity</h3>-->
          <!--<ul class="control-sidebar-menu">-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<i class="menu-icon fa fa-birthday-cake bg-danger"></i>-->

                <!--<div class="menu-info">-->
                  <!--<h4 class="control-sidebar-subheading">Admin Birthday</h4>-->

                  <!--<p>Will be July 24th</p>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<i class="menu-icon fa fa-user bg-warning"></i>-->

                <!--<div class="menu-info">-->
                  <!--<h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>-->

                  <!--<p>New Email : jhone_doe@demo.com</p>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<i class="menu-icon fa fa-envelope-o bg-info"></i>-->

                <!--<div class="menu-info">-->
                  <!--<h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>-->

                  <!--<p>disha@demo.com</p>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<i class="menu-icon fa fa-file-code-o bg-success"></i>-->

                <!--<div class="menu-info">-->
                  <!--<h4 class="control-sidebar-subheading">Code Change</h4>-->

                  <!--<p>Execution time 15 Days</p>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
          <!--</ul>-->
          <!--&lt;!&ndash; /.control-sidebar-menu &ndash;&gt;-->

          <!--<h3 class="control-sidebar-heading">Tasks Progress</h3>-->
          <!--<ul class="control-sidebar-menu">-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<h4 class="control-sidebar-subheading">-->
                  <!--Web Design-->
                  <!--<span class="label label-danger pull-right">40%</span>-->
                <!--</h4>-->

                <!--<div class="progress progress-xxs">-->
                  <!--<div class="progress-bar progress-bar-danger" style="width: 40%"></div>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<h4 class="control-sidebar-subheading">-->
                  <!--Update Data-->
                  <!--<span class="label label-success pull-right">75%</span>-->
                <!--</h4>-->

                <!--<div class="progress progress-xxs">-->
                  <!--<div class="progress-bar progress-bar-success" style="width: 75%"></div>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<h4 class="control-sidebar-subheading">-->
                  <!--Order Process-->
                  <!--<span class="label label-warning pull-right">89%</span>-->
                <!--</h4>-->

                <!--<div class="progress progress-xxs">-->
                  <!--<div class="progress-bar progress-bar-warning" style="width: 89%"></div>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
            <!--<li>-->
              <!--<a href="javascript:void(0)">-->
                <!--<h4 class="control-sidebar-subheading">-->
                  <!--Development-->
                  <!--<span class="label label-primary pull-right">72%</span>-->
                <!--</h4>-->

                <!--<div class="progress progress-xxs">-->
                  <!--<div class="progress-bar progress-bar-primary" style="width: 72%"></div>-->
                <!--</div>-->
              <!--</a>-->
            <!--</li>-->
          <!--</ul>-->
          <!--&lt;!&ndash; /.control-sidebar-menu &ndash;&gt;-->

        <!--</div>-->
        <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
        <!--&lt;!&ndash; Stats tab content &ndash;&gt;-->
        <!--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>-->
        <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
        <!--&lt;!&ndash; Settings tab content &ndash;&gt;-->
        <!--<div class="tab-pane" id="control-sidebar-settings-tab">-->
          <!--<form method="post">-->
            <!--<h3 class="control-sidebar-heading">General Settings</h3>-->

            <!--<div class="form-group">-->
              <!--<input type="checkbox" id="report_panel" class="chk-col-grey">-->
              <!--<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>-->

              <!--<p>-->
                <!--general settings information-->
              <!--</p>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

            <!--<div class="form-group">-->
              <!--<input type="checkbox" id="allow_mail" class="chk-col-grey">-->
              <!--<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>-->

              <!--<p>-->
                <!--Other sets of options are available-->
              <!--</p>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

            <!--<div class="form-group">-->
              <!--<input type="checkbox" id="expose_author" class="chk-col-grey">-->
              <!--<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>-->

              <!--<p>-->
                <!--Allow the user to show his name in blog posts-->
              <!--</p>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

            <!--<h3 class="control-sidebar-heading">Chat Settings</h3>-->

            <!--<div class="form-group">-->
              <!--<input type="checkbox" id="show_me_online" class="chk-col-grey">-->
              <!--<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

            <!--<div class="form-group">-->
              <!--<input type="checkbox" id="off_notifications" class="chk-col-grey">-->
              <!--<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.form-group &ndash;&gt;-->

            <!--<div class="form-group">-->
              <!--<label class="control-sidebar-subheading">-->
                <!--<a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>-->
                <!--Delete chat history-->
              <!--</label>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.form-group &ndash;&gt;-->
          <!--</form>-->
        <!--</div>-->
        <!--&lt;!&ndash; /.tab-pane &ndash;&gt;-->
      <!--</div>-->
    <!--</aside>-->
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <!--<div class="control-sidebar-bg"></div>-->

  </div>
  <!-- ./wrapper -->



  <!-- jQuery 3 -->
  <script src="./assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

  <!-- jQuery UI 1.11.4 -->
  <script src="./assets/vendor_components/jquery-ui/jquery-ui.js"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>

  <!-- popper -->
  <script src="./assets/vendor_components/popper/dist/popper.min.js"></script>

  <!-- Bootstrap 4.0-->
  <script src="./assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

  <!-- ChartJS -->
  <script src="./assets/vendor_components/chart.js-master/Chart.min.js"></script>

  <!-- Slimscroll -->
  <script src="./assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

  <!-- FastClick -->
  <script src="./assets/vendor_components/fastclick/lib/fastclick.js"></script>

  <!-- Morris.js charts -->
  <script src="./assets/vendor_components/raphael/raphael.min.js"></script>
  <script src="./assets/vendor_components/morris.js/morris.min.js"></script>

  <!-- fullCalendar -->
  <script src="./assets/vendor_components/fullcalendar/lib/moment.min.js"></script>
  <script src="./assets/vendor_components/fullcalendar/fullcalendar.min.js"></script>

  <!-- Sparkline -->
  <script src="./assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

  <!-- EChartJS JavaScript -->
  <script src="./assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
  <script src="./assets/vendor_components/echarts/echarts-liquidfill.min.js"></script>
  <script src="./assets/vendor_components/echarts/ecStat.min.js"></script>

  <!-- Fab Admin App -->
  <script src="js/template.js"></script>

  <!-- Fab Admin dashboard demo (This is only for demo purposes) -->
  <script src="js/pages/dashboard.js"></script>

  <!-- Fab admin for calendar -->
  <script src="js/pages/calendar.js"></script>

  <!-- Fab Admin for demo purposes -->
  <script src="js/demo.js"></script>

</body>

</html>