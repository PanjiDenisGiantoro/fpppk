@extends('dashboard')
@section('content')
    <div class="main">
        <div class="main-content dashboard">

            @if(auth()->user()->hasRole('admin'))

                <div class="row">
                    <div class="col-12">
                        <div class="box card-box">
                            <div class="icon-box bg-color-1">
                                <div class="icon bg-icon-1">
                                    <i class="bx bxs-bell bx-tada bx-tada"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title-box">Notification</h5>
                                    <p class="color-1 mb-0 pt-4">5 Unread notification</p>
                                </div>
                            </div>
                            <div class="icon-box bg-color-2">
                                <div class="icon bg-icon-2">
                                    <i class='bx bxs-message-rounded'></i>
                                </div>
                                <div class="content click-c">
                                    <h5 class="title-box">Message</h5>
                                    <p class="color-2 mb-0 pt-4">5 Unread notification</p>
                                </div>
                                <div class="notification-list card">
                                    <div class="top box-header">
                                        <h5>Notification</h5>

                                    </div>
                                    <div class="pd-1r">
                                        <div class="divider"></div>
                                    </div>

                                    <div class="box-body">
                                        <ul class="list">
                                            <li class="d-flex no-seen">
                                                <div class="img-mess"><img class="mr-14" src="assets_backend/images/avatar/avt-1.png" alt="avt"></div>
                                                <div class="info">
                                                    <a href="#" class="font-w600 mb-0 color-primary">Elizabeth Holland</a>
                                                    <p class="pb-0 mb-0 line-h14 mt-6">Proin ac quam et lectus vestibulum</p>
                                                </div>
                                            </li>

                                            <li class="d-flex">
                                                <div class="img-mess"><img class="mr-14" src="assets_backend/images/avatar/avt-1.png" alt="avt"></div>
                                                <div class="info">
                                                    <a href="#" class="font-w600 mb-0 color-primary">Elizabeth Holland</a>
                                                    <p class="pb-0 mb-0 line-h14 mt-6">Proin ac quam et lectus vestibulum</p>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="btn-view">
                                            <a class="font-w600 h5" href="message.html">View All</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="icon-box bg-color-3">
                                <a class="create d-flex" href="calendar.html">
                                    <div class="icon bg-icon-3">
                                        <i class="bx bx-calendar"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title-box">Calendar</h5>
                                        <p class="color-3 mb-0 pt-4">5 Unread notification</p>
                                    </div>
                                </a>
                            </div>
                            <div class="icon-box bg-color-4">
                                <a class="create d-flex" href="#" data-toggle="modal" data-target="#add_project">
                                    <div class="icon bg-white">
                                        <i class="bx bx-plus"></i>
                                    </div>
                                    <div class="content d-flex align-items-center">
                                        <h5 class="color-white">Create New Project</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-sm-12 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <!-- CUSTOMERS CHART -->
                                <div class="box f-height">
                                    <div class="box-header d-flex justify-content-between mb-wrap">
                                        <h3 class="mt-9 ml-5">Project Statistics</h3>
                                        <ul class="card-list mb-0">
                                            <li class="custom-label"><span></span>Complete</li>
                                            <li class="custom-label"><span></span>Doing</li>
                                        </ul>
                                    </div>
                                    <div class="box-body pt-20">
                                        <div id="customer-chart"></div>
                                    </div>
                                </div>
                                <!-- END CUSTOMERS CHART -->
                            </div>
                            <div class="col-6 col-xl-12 col-sm-12">
                                <div class="box">
                                    <div class="box-body d-flex pb-0">
                                        <div class="me-auto">
                                            <h5 class="box-title">Total Clients</h5>
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-0 font-wb fs-30 mt-23">78</h4>
                                                <div class="text-primary transaction-caret">
                                                    <i class="bx bxs-up-arrow"></i>
                                                    <p class="mb-0 text-primary fs-18 font-w400 mt-14 ml-7">+0.5%</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" donut-chart-sale">
                                            <span class="donut-1" data-peity='{ "fill": ["#3C21F7", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>7/9</span>
                                            <small class="">76%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-12 col-sm-12">
                                <div class="box">
                                    <div class="box-body d-flex pb-0">
                                        <div class="me-auto">
                                            <h5 class="box-title mb-36">Total Task Done</h5>
                                            <div class="progress skill-progress mb-10" style="height:10px;">
                                                <div class="progress-bar bg-primary progress-animated" style="width: 78%; height:10px;" role="progressbar">
                                                    <span class="sr-only">78% Complete</span>
                                                </div>
                                            </div>
                                            <p class="fs-16 mb-0 mt-2"><span class="text-primary">87 </span>left from target</p>
                                        </div>
                                        <h4 class="numb font-wb fs-30">34</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-12 col-sm-12">
                                <div class="box">
                                    <div class="box-body d-flex pb-0">
                                        <div class="me-auto">
                                            <h4 class="numb fs-30 font-wb">565</h4>
                                            <h5 class="card-title fs-18 font-w400">Total Clients</h5>
                                            <p class="fs-14 mb-0 mt-11"><span class="text-primary">-3% </span>than last month</p>
                                        </div>
                                        <div id="total-revenue-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-12 col-sm-12">
                                <div class="box">
                                    <div class="box-body d-flex pb-0">
                                        <div class="me-auto">
                                            <h4 class="numb fs-30">565</h4>
                                            <h5 class="card-title fs-18 font-w400">New Projects</h5>
                                            <p class="fs-14 mb-0 mt-11"><span class="text-primary">+0.5% </span>than last month</p>
                                        </div>
                                        <div id="total-revenue-chart-1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="box f-height">
                                    <div class="box-header d-flex justify-content-between">
                                        <h3 class="mt-9 ml-5">Project Statistics</h3>

                                    </div>
                                    <div class="box-body pt-20">
                                        <div id="chartBar3" class="bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-sm-12 mb-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="box box-manage">
                                    <div class="box-body d-flex pd-7 pb-0">
                                        <div class="me-auto w-55">
                                            <h5 class="card-title text-white fs-30 font-w500 mt-4">Manage your project in one touch</h5>
                                            <p class="mb-0 text-o7 fs-18 font-w500 pb-11">Etiam facilisis ligula nec velit posuere egestas. Nunc dictum</p>
                                        </div>
                                        <div class="btn-now">
                                            <a class="h6 font-w500" href="#"><span>Try For Free Now</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6 col-xl-12 col-md-12 col-sm-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="me-auto">
                                            <h6 class="card-title font-w400 mb-20">Current Balance</h6>
                                            <div class="count-number d-flex">
                                                <span class="h4 font-w900">$</span>
                                                <h4 class="count font-w900 pl-5">25,456.44</h4>
                                            </div>
                                            <p class="fs-18 mb-0 mt-6"><span class="text-primary pr-7">+3.2</span>than last week</p>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="chartBar2" class="bar-chart "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-12 col-md-12 col-sm-12">
                                <div class="box">
                                    <div class="box-body center">
                                        <div class="w-100"><span class="donut-2 w-100" data-peity='{ "fill": ["#9B8DFF", "#E4EAF8"]}'>228,134</span>
                                        </div>
                                        <h5 class="fs-20 mb-0 mt-20 font-w500 color-text mt-28">On Progress<span class="text-primary font-w600 pl-8">50% </span></h5>
                                        <h5 class="fs-22 mt-18 mb-10 font-wb">Workload Dashboard For CMS Website</h5>
                                        <p class="fs-18 mt-18">Praesent eu dolor eu orci vehicula euismod.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title mb-22">Daily Task</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="content-item mb-wrap">
                                            <div class="left">
                                                <h5 class="font-w500">10:00</h5>
                                            </div>
                                            <div class="right bg-orange">
                                                <div class="content-box w-100">
                                                    <h5 class="font-wb text-white fs-20">iOs Dev team meeting</h5>
                                                    <h6 class="font-w400 text-w07">10:00 - 11:00</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-item mb-wrap mb-32">
                                            <div class="left">
                                                <h5 class="font-w500">11:00</h5>
                                            </div>
                                            <div class="right d-flex pd-0">
                                                <div class="content-box bg-yellow">
                                                    <h5 class="font-wb text-white fs-20">Design meeting</h5>
                                                    <h6 class="font-w400 text-w07">11:00 - 11:30</h6>
                                                </div>
                                                <div class="content-box bg-blue">
                                                    <h5 class="font-wb text-white fs-20">SEO meeting</h5>
                                                    <h6 class="font-w400 text-w07">11:30 12:00</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-item mb-0 mb-wrap">
                                            <div class="left">
                                                <h5 class="font-w500">12:00</h5>
                                            </div>
                                            <div class="right bg-light">
                                                <div class="content-box w-100">
                                                    <h5 class="font-w500">Lunch Break</h5>
                                                    <h6 class="font-w400 mt-10">12:00 - 1:00</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="me-auto">
                                    <h4 class="card-title mb-6">Project Statistics</h4>
                                    <p class="mb-0 fs-14 mt-9 ">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="box-body pt-20">
                                <div class="themesflat-carousel-box data-effect has-bullets bullet-circle bullet24 clearfix" data-gap="30" data-column="4" data-column2="2" data-column3="1" data-auto="true">
                                    <div class="owl-carousel owl-theme">
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-green">G</h5>
                                                    <a href="project-details.html" class="h5 t-title">Gold App</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400 fs-16">Task Done:23/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 52%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-yellow">G</h5>
                                                    <a class="h5 t-title" href="project-details.html">Landing Page</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400">Task Done:30/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 67%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-blue">G</h5>
                                                    <a class="h5 t-title" href="project-details.html">App Landing UI</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400">Task Done:35/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-orange">G</h5>
                                                    <a class="h5 t-title" href="project-details.html">Blog Template UI</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400">Task Done:23/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 52%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-green">G</h5>
                                                    <a class="h5 t-title" href="project-details.html">Brand logo design</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400">Task Done:30/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 68%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-yellow">G</h5>
                                                    <a class="h5 t-title" href="project-details.html">Gold App</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400">Task Done:30/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 67%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-blue">G</h5>
                                                    <a class="h5 t-title" href="project-details.html">New Landing Design</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400">Task Done:35/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 78%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box box-carousel">
                                            <div class="card-top">
                                                <div class="sm-f-wrap d-flex">
                                                    <h5 class="icon-gold text-white bg-orange">G</h5>
                                                    <a class="h5 t-title" href="project-details.html">Skote Dashboard UI</a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="bx bx-trash"></i> Delete</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-center">
                                                <h6 class="font-w400">Task Done:23/45</h6>
                                                <div class="progress skill-progress mb-23" style="height:7px; width: 80%;">
                                                    <div class="progress-bar bg-primary progress-animated" style="width: 52%; height:7px;" role="progressbar">
                                                    </div>
                                                </div>
                                                <div class="sm-f-wrap d-flex justify-content-between">
                                                    <ul class="user-list">
                                                        <li><img src="assets_backend/images/avatar/user-1.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-2.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-3.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-4.png" alt="user"></li>
                                                        <li><img src="assets_backend/images/avatar/user-5.png" alt="user"></li>
                                                    </ul>
                                                    <ul class="tf-icon-list">
                                                        <li><a href="#"><i class='bx bx-calendar'></i></a></li>
                                                        <li><a href="#"><i class='bx bxs-star' ></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.owl-carousel -->
                                </div>
                                <!-- /.themesflat-carousel -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-12">
                        <div class="box">
                            <div class="box-header">
                                <div class="me-auto">
                                    <h4 class="card-title">Project Category</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="box-body pt-0">
                                <div class="row">
                                    <div class="col-6 col-xl-12 w-sm-100 mb-0">
                                        <ul class="box-list mt-26 pr-67">
                                            <li><span class="bg-blue square"></span>Web Design<span>25%</span></li>
                                            <li><span class="bg-success square"></span>UX/UI Design<span>18%</span></li>
                                            <li><span class="bg-warning square"></span>Graphics Design<span>17%</span></li>
                                            <li><span class="bg-blue square"></span>Motion Design<span>12.50%</span></li>
                                            <li><span class="bg-success square"></span>Brand Identity<span>12.50%</span></li>
                                            <li><span class="bg-warning square"></span>Others<span>12.50%</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-xl-12 w-sm-100 mb-0">
                                        <!-- <canvas id="doughnut-chart" width="240" height="240"></canvas> -->
                                        <div class="canvas-container">
                                            <canvas id="chartjs-4" class="chartjs" width="100" height="100"></canvas>
                                            <div class="chart-data">
                                                <div data-percent="25" data-color="#3C21F7" data-label="Web Design"></div>
                                                <div data-percent="18" data-color="#00BC8B" data-label="UX/UI Design"></div>
                                                <div data-percent="17" data-color="#FFB800" data-label="Graphics Design"></div>
                                                <div data-percent="12.5" data-color="#00ECCC" data-label="Motion Design"></div>
                                                <div data-percent="12.5" data-color="#EF7F5A" data-label="Brand Identity"></div>
                                                <div data-percent="12.5" data-color="#5D45FB" data-label="Others"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-12">
                        <div class="box">
                            <div class="box-header pt-0">
                                <div class="me-auto">
                                    <h4 class="card-title mb-0">Message</h4>
                                </div>
                            </div>
                            <div class="box-body pb-0 pt-39">
                                <ul class="message mb-2">
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets_backend/images/avatar/message-01.png" class="rounded-circle user_img" alt="" />
                                            </div>
                                            <div class="user_info">
                                                <a class="h6" href="message.html">Richard Coleman</a>
                                                <p class="fs-14 mb-0">Hi Jackma! How are you?</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont border-pink">
                                                <img src="assets_backend/images/avatar/message-02.png" class="rounded-circle user_img" alt="" />
                                            </div>
                                            <div class="user_info">
                                                <a class="h6" href="message.html">Jessica Elliot</a>
                                                <p class="fs-14 mb-0">Do you need like the Color, typography and spacing? </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont border-green">
                                                <img src="assets_backend/images/avatar/message-03.png" class="rounded-circle user_img" alt="" />
                                            </div>
                                            <div class="user_info">
                                                <a class="h6" href="message.html">Steve Ford</a>
                                                <p class="fs-14 mb-0">Can I your budget?</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dlab-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont border-blue">
                                                <img src="assets_backend/images/avatar/message-04.png" class="rounded-circle user_img" alt="" />
                                            </div>
                                            <div class="user_info">
                                                <a class="h6" href="message.html">Mary Ann Lucas</a>
                                                <p class="fs-14 mb-0">Looks Good. Please go forward!</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="add_project" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Project</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 mb-0">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input class="form-control" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-0">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="select">
                                                    <option>Client 1</option>
                                                    <option>Client 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-0">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control " type="date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-0">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <div class="cal-icon">
                                                    <input class="form-control" type="date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 mb-0">
                                            <div class="form-group">
                                                <label>Rate</label>
                                                <input placeholder="$50" class="form-control" value="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-0">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <select class="select">
                                                    <option>Hourly</option>
                                                    <option selected>Fixed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-0">
                                            <div class="form-group">
                                                <label>Priority</label>
                                                <select class="select">
                                                    <option selected>High</option>
                                                    <option>Medium</option>
                                                    <option>Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Files</label>
                                        <input class="form-control" type="file">
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal custom-modal fade" id="delete_project" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Project</h3>
                                    <p>Are you sure want to delete?</p>
                                </div>
                                <div class="modal-btn delete-action">
                                    <div class="row">
                                        <div class="col-6 mb-0">
                                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                        </div>
                                        <div class="col-6 mb-0">
                                            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal custom-modal fade" id="edit_project" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h5 class="modal-title">Edit Project</h5>
                                </div>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 mb-0">
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input class="form-control" value="Gold App" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-0">
                                            <div class="form-group">
                                                <label>Client</label>
                                                <select class="select">
                                                    <option>Client 1</option>
                                                    <option>Client 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                            <section class="login singup">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box">
                                            <div class="box-header d-flex justify-content-between">
                                                <div class="">
                                                    <a href="#">
                                                        <img src="assets_backend/images/logo.png" alt=""
                                                             style=" max-width: 100%;height: auto;">
                                                    </a>
                                                </div>
                                                <div class="action-reg">
                                                    <h4 class="fs-30">Register</h4>
                                                </div>

                                            </div>
                                            <div class="line"></div>
                                            <div class="box-body">
                                                <div class="auth-content my-auto">
                                                    <form class="mt-6 pt-2" id="myForm"
                                                          @if(empty($user->profiles))
                                                              method="post"
                                                          action="{{ route('profile.store') }}"  enctype="multipart/form-data">
                                                        @else
                                                            method="post"
                                                            action="{{ route('profile.update', $user->profiles->id) }}"
                                                            enctype="multipart/form-data">
                                                        @endif
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label class="form-label mb-14">Nama</label>
                                                            <input type="text" class="form-control" id="username" name="username"
                                                                   onkeyup="myFunction()"
                                                                   placeholder="Your Name" value="{{ Auth::user()->name }}" autofocus>
                                                        </div>
                                                        <div class="mb-3 mt-24">
                                                            <label class="form-label mb-14">Gelar</label>
                                                            <input type="text" class="form-control" id="gelar" name="gelar"
                                                                   placeholder="S.Pd" value="{{ $user->profiles->gelar ?? '' }}"
                                                                   autofocus>
                                                        </div>
                                                        <div class="mb-3 mt-24">
                                                            <label for="useremail" class="form-label mb-14">E-Mail</label>
                                                            <input type="email" class="form-control" id="email" name="email"
                                                                   placeholder="Your Email" value="{{ Auth::user()->email }}">
                                                            <div class="invalid-feedback">
                                                                Please Enter Email
                                                            </div>
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Pendidikan</label>
                                                            <select name="degree" id="degree" class="form-control select2">

                                                                @if(empty($user->profiles))
                                                                    <option value="">Pilih</option>
                                                                    <option value="SMA">SMA</option>
                                                                    <option value="SMK">SMK</option>
                                                                    <option value="D3">D3</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>

                                                                @else
                                                                    <option value="SMA"
                                                                            @if($user->profiles->degree == 'SMA')
                                                                                selected
                                                                        @endif

                                                                    >SMA
                                                                    </option>
                                                                    <option value="SMA

                                                 @if($user->profiles->degree == 'SMK')
                                                    selected
                                                @endif
                                                ">SMK
                                                                    </option>
                                                                    <option value="D3"

                                                                            @if($user->profiles->degree == 'D3')
                                                                                selected
                                                                        @endif
                                                                    >D3
                                                                    </option>
                                                                    <option value="S1"

                                                                            @if($user->profiles->degree == 'S1')
                                                                                selected
                                                                        @endif
                                                                    >S1
                                                                    </option>
                                                                    <option value="S2"

                                                                            @if($user->profiles->degree == 'S2')
                                                                                selected
                                                                        @endif
                                                                    >S2
                                                                    </option>
                                                                    <option value="S3"

                                                                            @if($user->profiles->degree == 'S3')
                                                                                selected
                                                                        @endif
                                                                    >S3
                                                                    </option>

                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Tempat Lahir</label>
                                                            <input type="text" class="form-control" id="place"
                                                                   placeholder="Tempat Lahir" name="place"
                                                                   value="{{ $user->profiles->place ?? '' }}"
                                                            >
                                                        </div>

                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="date_of_birth"
                                                                   value="{{ $user->profiles->date_of_birth ?? '' }}"
                                                                   name="date_of_birth">
                                                        </div>

                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Jenis Kelamin</label>
                                                            <select name="gender" id="gender" class="form-control select2">
                                                                @if(empty($user->profiles->gender))
                                                                    <option value="">Pilih</option>
                                                                    <option value="L">Laki-laki</option>
                                                                    <option value="P">Perempuan</option>
                                                                @else
                                                                    <option value="L"
                                                                            @if($user->profiles->gender == 'L')
                                                                                selected
                                                                        @endif
                                                                    >Laki-laki
                                                                    </option>
                                                                    <option value="P"
                                                                            @if($user->profiles->gender == 'P')
                                                                                selected
                                                                        @endif
                                                                    >Perempuan
                                                                    </option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Agama</label>
                                                            <select name="religion" id="religion" class="form-control select2">

                                                                @if(empty($user->profiles->religion))
                                                                    <option value="">Pilih</option>
                                                                    <option value="Islam">Islam</option>
                                                                    <option value="Kristen">Kristen</option>
                                                                    <option value="Katolik">Katolik</option>
                                                                    <option value="Hindu">Hindu</option>
                                                                    <option value="Budha">Budha</option>
                                                                    <option value="Konghucu">Konghucu</option>
                                                                @else
                                                                    <option value="Islam"
                                                                            @if($user->profiles->religion == 'Islam')
                                                                                selected
                                                                        @endif
                                                                    >Islam
                                                                    </option>
                                                                    <option value="Kristen"
                                                                            @if($user->profiles->religion == 'Kristen')
                                                                                selected
                                                                        @endif
                                                                    >Kristen
                                                                    </option>
                                                                    <option value="Katolik"
                                                                            @if($user->profiles->religion == 'Katolik')
                                                                                selected
                                                                        @endif
                                                                    >Katolik
                                                                    </option>
                                                                    <option value="Hindu"

                                                                            @if($user->profiles->religion == 'Hindu')
                                                                                selected
                                                                        @endif
                                                                    >Hindu
                                                                    </option>
                                                                    <option value="Budha"
                                                                            @if($user->profiles->religion == 'Budha')
                                                                                selected
                                                                        @endif
                                                                    >Budha
                                                                    </option>
                                                                    <option value="Konghucu"

                                                                            @if($user->profiles->religion == 'Konghucu')
                                                                                selected
                                                                        @endif
                                                                    >Konghucu
                                                                    </option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Alamat</label>
                                                            <input type="text" class="form-control" id="address"
                                                                   placeholder="Alamat" value="{{ $user->profiles->address ?? '' }}"
                                                                   name="address">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Provinsi</label>
                                                            @php
                                                                $provinces = new App\Http\Controllers\AreaController;
                                                                $provinces= $provinces->provinces();
                                                            @endphp
                                                            @if(empty($user->profiles->province_id))
                                                                <select class="form-control select2" name="province_id" id="provinsi">
                                                                    <option value="">==Pilih Salah Satu==</option>
                                                                    @foreach ($provinces as $item)
                                                                        <option
                                                                            value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @else
                                                                <select class="form-control select2" name="province_id" id="provinsi">
                                                                    <option value="">==Pilih Salah Satu==</option>
                                                                    @foreach ($provinces as $item)
                                                                        <option
                                                                            value="{{ $item->id ?? '' }}"
                                                                            @if($user->profiles->province_id == $item->id)
                                                                                selected
                                                                            @endif
                                                                        >{{ $item->name ?? '' }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endif

                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Kabupaten / Kota</label>
                                                            <select class="form-control select2" name="city_id" id="kota">
                                                                <option value="">Pilih</option>
                                                                @if(!empty($user->profiles->city_id))
                                                                    @php
                                                                        $city =   \Illuminate\Support\Facades\DB::table('indonesia_cities')->where('id', $user->profiles->city_id)->first(
                                                                          );
                                                                        $cityget =  \Illuminate\Support\Facades\DB::table('indonesia_cities')->where('province_code', $city->province_code)->get(
                                                                          );

                                                                    @endphp
                                                                    @foreach($cityget as $get)
                                                                        <option value="{{ $get->id }}"
                                                                                @if($user->profiles->city_id == $get->id)
                                                                                    selected
                                                                            @endif
                                                                        >{{ $get->name }}</option>

                                                                    @endforeach
                                                                @endif
                                                            </select>

                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Kecamatan</label>
                                                            <select class="form-control select2" name="district_id" id="kecamatan">
                                                                <option value="">Pilih</option>

                                                                @if(!empty($user->profiles->district_id))
                                                                    @php
                                                                        $kecam =   \Illuminate\Support\Facades\DB::table('indonesia_districts')->where('id', $user->profiles->district_id)->first(
                                                                          );
                                                                        $district_get =  \Illuminate\Support\Facades\DB::table('indonesia_districts')->where('city_code', $kecam->city_code)->get(
                                                                          );

                                                                    @endphp
                                                                    @foreach($district_get as $get)
                                                                        <option value="{{ $get->id }}"
                                                                                @if($user->profiles->district_id == $get->id)
                                                                                    selected
                                                                            @endif
                                                                        >{{ $get->name }}</option>

                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Kelurahan / Desa</label>

                                                            <select class="form-control select2" name="village_id" id="desa">
                                                                <option value="">Pilih</option>
                                                                @if(!empty($user->profiles->village_id))
                                                                    @php
                                                                        $villa =   \Illuminate\Support\Facades\DB::table('indonesia_villages')->where('id', $user->profiles->village_id)->first(
                                                                          );
                                                                        $vvilla_get =  \Illuminate\Support\Facades\DB::table('indonesia_villages')->where('district_code', $villa->district_code)->get(
                                                                          );
                                                                    @endphp
                                                                    @foreach($vvilla_get as $get)
                                                                        <option value="{{ $get->id }}"
                                                                                @if($user->profiles->village_id == $get->id)
                                                                                    selected
                                                                            @endif
                                                                        >{{ $get->name }}</option>

                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">RT / RW</label>
                                                            <input type="text" class="form-control" name="rtrw" id="rt"
                                                                   value="{{ $user->profiles->rtrw ?? '' }}">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Status</label>
                                                            @if(empty($user->profiles))
                                                                <option value="">Pilih</option>
                                                                <select name="status" id="status" class="form-control">
                                                                    <option value="">Pilih</option>
                                                                    <option value="PNS">PNS</option>
                                                                    <option value="PPPK">ASN PPPK</option>
                                                                    <option value="Honorer">Honorer</option>
                                                                </select>
                                                            @else
                                                                <select name="status" id="status" class="form-control">
                                                                    <option value="PNS"
                                                                            @if(!empty($user->profiles->status == 'PNS'))
                                                                                selected
                                                                        @endif
                                                                    >PNS
                                                                    </option>
                                                                    <option value="PPPK"
                                                                            @if(!empty($user->profiles->status == 'PPPK'))
                                                                                selected
                                                                        @endif

                                                                    >ASN PPPK
                                                                    </option>
                                                                    <option value="Honorer"
                                                                            @if(!empty($user->profiles->status == 'Honorer'))
                                                                                selected
                                                                        @endif
                                                                    >Honorer
                                                                    </option>
                                                                </select>
                                                        </div>
                                                        @if(!empty($user->profile))
                                                            @if($user->profiles->status == 'PPPK')
                                                                <script>
                                                                    $(document).ready(function () {
                                                                        $('.pppk').show();
                                                                    });
                                                                </script>
                                                            @endif
                                                            @if($user->profiles->status == 'Honorer')
                                                                <script>
                                                                    $(document).ready(function () {
                                                                        $('.honorer').show();
                                                                    });
                                                                </script>
                                                            @endif
                                                        @endif
                                                        @endif
                                                        <div class="mb-3  mt-24 pppk"
                                                             @if(empty($user->profiles))
                                                                 style="display: none"
                                                             @else
                                                                 @if($user->profiles->status == 'PPPK')
                                                                     style="display: block"
                                                             @else
                                                                 style="display: none"
                                                            @endif
                                                            @endif

                                                        >
                                                            <label class="form-label mb-14">TA PPPK</label>
                                                            <select name="tahun" id="tahun" class="form-control">
                                                                @if(!empty($user->profiles))

                                                                    <option value="2021"
                                                                            @if($user->profiles->tahun == '2021')
                                                                                selected
                                                                        @endif
                                                                    >2021
                                                                    </option>
                                                                    <option value="2022"
                                                                            @if($user->profiles->tahun == '2022')
                                                                                selected
                                                                        @endif
                                                                    >2022
                                                                    </option>
                                                                    <option value="2023"
                                                                            @if($user->profiles->tahun == '2023')
                                                                                selected
                                                                        @endif
                                                                    >2023
                                                                    </option>
                                                                @else
                                                                    <option value="">Pilih Tahun Pengangkatan</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3  mt-24 guru"
                                                             @if(empty($user->profiles))
                                                                 style="display: none"
                                                             @else
                                                                 @if($user->profiles->status == 'Honorer')
                                                                     style="display: block"
                                                             @else
                                                                 style="display: none"
                                                            @endif
                                                            @endif
                                                        >
                                                            <label class="form-label mb-14">Tipe Guru</label>
                                                            <select name="tipe" id="tipe" class="form-control">

                                                                @if(!empty($user->profiles))
                                                                        <option value="Guru Mapel"
                                                                                @if($user->profiles->tipe == 'Guru Mapel')
                                                                                    selected
                                                                            @endif
                                                                        >Guru Mapel
                                                                        </option>
                                                                        <option value="Guru Kelas"
                                                                                @if($user->profiles->tipe == 'Guru Kelas')
                                                                                    selected
                                                                            @endif
                                                                        >Guru Kelas
                                                                        </option>
                                                                    @else
                                                                        <option value="Pilih">Pilih</option>
                                                                        <option value="Guru Mapel">Guru Mapel</option>
                                                                        <option value="Guru Kelas">Guru Kelas</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">No Telepon</label>
                                                            <input type="text" class="form-control" name="phone_number"
                                                                   value="{{ $user->profiles->phone_number ?? '' }}"
                                                                   id="phone_number">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">No Whatsapp</label>
                                                            <input type="text" class="form-control" name="wa" id="wa"
                                                                   value="{{ $user->profiles->wa ?? '' }}">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Facebook</label>
                                                            <input type="text" class="form-control" name="fb" id="fb"
                                                                   value="{{ $user->profiles->fb ?? '' }}">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Instagram</label>
                                                            <input type="text" class="form-control" name="ig" id="ig"
                                                                   value="{{ $user->profiles->ig ?? '' }}">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Tiktok</label>
                                                            <input type="text" class="form-control" name="tiktok" id="tiktok"
                                                                   value="{{ $user->profiles->tiktok ?? '' }}">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">LinkedIn</label>
                                                            <input type="text" class="form-control" name="linkedin" id="linkedin"
                                                                   value="{{ $user->profiles->linkedin ?? '' }}">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Telegram</label>
                                                            <input type="text" class="form-control" name="telegram" id="telegram"
                                                                   value="{{ $user->profiles->telegram ?? '' }}">
                                                        </div>
                                                        <div class="mb-3  mt-24">
                                                            <label class="form-label mb-14">Foto
                                                                {{--                                                <span--}}
                                                                {{--                                                    style="font-size: 12px;color: red">Ukuran gambar 500 KB</span>--}}
                                                            </label>
                                                            <input id="max_id" type="hidden" name="MAX_FILE_SIZE" value="250000000"/>
                                                            <input type="file" class="form-control" name="foto" id="inputImageFile"
                                                                   accept="image/*">
                                                        </div>
                                                        <img id="output" width="100" height="100"/>
                                                        <div class="mb-3 mt-29">

                                                            <button
                                                                class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500"
                                                                id="store"
                                                                type="submit">
                                                                @if(!empty($user->profiles))
                                                                    Update
                                                                @else
                                                                    Simpan
                                                                @endif
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="mt-37 text-center">

                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void()" class="social-list-item text-white">
                                                                    <i class='bx bxl-facebook-square'></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void()" class="social-list-item text-white">
                                                                    <i class='bx bxl-twitter'></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                                    <i class='bx bxl-linkedin-square'></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                                    <i class='bx bxl-google-plus'></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>


            @endif
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function compressImage(inputFile, maxWidth, maxHeight, outputFormat, quality, callback) {
            const reader = new FileReader();
            reader.onload = function (event) {
                const image = new Image();
                image.src = event.target.result;
                image.onload = function () {
                    const canvas = document.createElement('canvas');
                    let width = image.width;
                    let height = image.height;

                    // Menyesuaikan ukuran gambar sesuai dengan maxWidth dan maxHeight yang ditentukan
                    if (width > maxWidth) {
                        height *= maxWidth / width;
                        width = maxWidth;
                    }
                    if (height > maxHeight) {
                        width *= maxHeight / height;
                        height = maxHeight;
                    }

                    canvas.width = width;
                    canvas.height = height;

                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(image, 0, 0, width, height);

                    // Mengubah gambar hasil kompresi ke format yang ditentukan (e.g., 'image/jpeg')
                    const compressedDataUrl = canvas.toDataURL(outputFormat, quality / 100);

                    // Memanggil callback dengan gambar yang telah dikompresi
                    callback(compressedDataUrl);
                };
            };

            reader.readAsDataURL(inputFile);
        }


        const inputImageFile = document.getElementById('inputImageFile'); // Ganti dengan elemen input gambar Anda
        const maxWidth = 800; // Lebar maksimum gambar yang diinginkan
        const maxHeight = 600; // Tinggi maksimum gambar yang diinginkan
        const outputFormat = 'image/jpeg'; // Format output gambar
        const quality = 50; // Kualitas gambar (0-100)

        inputImageFile.addEventListener('change', function (event) {
            const inputFile = event.target.files[0];
            if (inputFile) {
                compressImage(inputFile, maxWidth, maxHeight, outputFormat, quality, function (compressedDataUrl) {
                    const compressedImageElement = document.getElementById('compressedImage');
                    compressedImageElement.src = compressedDataUrl;
                });
            }
        });


        function myFunction() {
            var x = document.getElementById("username");
            x.value = x.value.toUpperCase();
        }

        function myFunction_gelar() {
            var x = document.getElementById("gelar");
            x.value = x.value.toUpperCase();
        }

        $(document).ready(function () {
            // $('.select2').select2();
        });
        var loadFile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        let status = $('#status').val();

        $('#status').change(function () {
            let status = $('#status').val();
            if (status == 'Honorer') {
                $('.guru').show();
            } else {
                $('.guru').hide();
            }

            if (status == 'PPPK') {
                $('.pppk').show();
            } else {
                $('.pppk').hide();
            }

        })


        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function (data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>==Pilih Salah Satu==</option>');
                    $.each(data, function (key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }

        $(function () {
            $('#provinsi').on('change', function () {
                onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function () {
                onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function () {
                onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
            })
        });


    </script>

@endpush


