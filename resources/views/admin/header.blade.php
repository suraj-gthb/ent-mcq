<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{$page_name}} - Entmcq</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('admin/modules/bootstrap-5.1.3/css/bootstrap.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="{{asset('admin/modules/fontawesome6.1.1/css/all.css')}}">
    <!-- Boxicons CSS-->
    <link rel="stylesheet" href="{{asset('admin/modules/boxicons/css/boxicons.min.css')}}">
    <!-- Apexcharts  CSS -->
    <link rel="stylesheet" href="{{asset('admin/modules/apexcharts/apexcharts.css')}}">

</head>

<body>

    <!--Topbar -->
    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="menu">
            <ul>
                <!-- <li class="nav-item dropdown dropdown-list-toggle">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell size-icon-1"></i><span class="badge bg-danger notif">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-list">
                        <div class="dropdown-header">Notifications</div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <div class="custome-list-notif">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        The Atrana template has the latest update!
                                        <div class="time text-primary">3 Min Ago</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Sri asks you for friendship!
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Storage has been cleared, now you can get back to work!
                                        <div class="time">20 Hours Ago</div>
                                    </div>
                                </a>


                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Atrana Template, I hope you enjoy using this template!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>

                            </div>
                    </div>

                        <div class="dropdown-footer text-center">
                            <a href="#">View All</a>
                        </div>


                </li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" alt="">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="my-profile.html"><i class="fa fa-user size-icon-1"></i> <span>My Profile</span></a>
                        <a class="dropdown-item" href="settings.html"><i class="fa fa-cog size-icon-1"></i> <span>Settings</span></a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item" href="{{asset('admin/logout')}}"><i class="fa fa-sign-out-alt  size-icon-1"></i> <span>Logout</span></a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!--Sidebar-->
    <div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        <div class="sidebar-content">
            <div id="sidebar">

                <!-- Logo -->
                <div class="logo">
                    <h2 class="mb-0"><img src="assets/images/logo.png">ENT MCQ</h2>
                </div>

                <ul class="side-menu">
                    <li>
                        <a href="{{asset('admin/dashboard')}}" class="active">
                            <i class='bx bxs-dashboard icon'></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-columns icon'></i>
                            Course
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="{{asset('admin/course/create')}}">Add Course</a></li>
                            <li><a href="{{asset('admin/course')}}">View Course</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-columns icon'></i>
                            Subject
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="{{asset('admin/subject/create')}}">Add Subject</a></li>
                            <li><a href="{{asset('admin/subject')}}">View Subject</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-columns icon'></i>
                            Question
                            <i class='bx bx-chevron-right icon-right'></i>
                        </a>
                        <ul class="side-dropdown">
                            <li><a href="{{asset('admin/question/create')}}">Add Question</a></li>
                            <li><a href="{{asset('admin/question')}}">View Question</a></li>
                        </ul>
                    </li>


                </ul>


            </div>

        </div>
    </div>
    </div><!-- End Sidebar-->


    <div class="sidebar-overlay"></div>
    <div class="content-start transition pt-2">
    <div class="container-fluid dashboard">

        @yield('content')
    </div>
    </div>
    <!-- Footer -->
    <!-- <footer>
        <div class="footer">
            <div class="float-start">
                <p>2022 &copy; Atrana</p>
            </div>
            <div class="float-end">
                <p>Crafted with
                    <span class="text-danger">
                        <i class="fa fa-heart"></i> by
                        <a href="https://www.facebook.com/andreew.co.id/" class="author-footer">Andre Tri Ramadana</a>
                    </span>
                </p>
            </div>
        </div>
    </footer> -->


    <!-- Preloader -->
    <div class="loader">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Loader -->
    <div class="loader-overlay"></div>

    <!-- General JS Scripts -->
    <script src="{{asset('admin/js/atrana.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('admin/modules/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/modules/popper/popper.min.js')}}"></script>

    <!-- Chart Js -->
    <script src="{{asset('admin/modules/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('admin/js/ui-apexcharts.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('admin/js/script.js')}}"></script>
    <script src="{{asset('admin/js/custom.js')}}"></script>
</body>

</html>