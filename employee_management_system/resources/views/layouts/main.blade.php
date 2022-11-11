<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt" style="font-size: 30px;"></i>
                    <h2>Dashboard</h2>
                </a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-cog"></i>
                    <span class=""></span>Profile
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee"
                    aria-expanded="true" aria-controls="collapseEmployee">
                    <i class="fas fa-fw fa-cog"></i>
                    <span class="">System Manage</span>
                </a>
                <div id="collapseEmployee" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('employees.index') }}">Department</a>
                        <a class="collapse-item" href="#">Country</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLeave"
                    aria-expanded="true" aria-controls="collapseLeave">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Attandance Manage</span>
                </a>
                <div id="collapseLeave" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('employees.index') }}">Add Attendance</a>
                        <a class="collapse-item" href="#">Daily Attandance</a>
                        <a class="collapse-item" href="#">Attandance Report</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                    aria-expanded="true" aria-controls="collapseUser">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Salary Manage</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('users.index') }}">Add Salary</a>
                        <a class="collapse-item" href="#">Pay Salary</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystemEvent"
                    aria-expanded="true" aria-controls="collapseSystemEvent">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Event Manage</span>
                </a>
                <div id="collapseSystemEvent" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('countries.index') }}">Add Event</a>
                        <a class="collapse-item" href="{{ route('states.index') }}">View Event</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystemTask"
                    aria-expanded="true" aria-controls="collapseSystemTask">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Task Manage</span>
                </a>
                <div id="collapseSystemTask" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('countries.index') }}">Add Task</a>
                        <a class="collapse-item" href="{{ route('states.index') }}">View Task</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystemLeave"
                    aria-expanded="true" aria-controls="collapseSystemLeave">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Leave Manage</span>
                </a>
                <div id="collapseSystemLeave" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('countries.index') }}">Leave Type</a>
                        <a class="collapse-item" href="{{ route('states.index') }}">View Leave Application</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystemEmployee"
                    aria-expanded="true" aria-controls="collapseSystemEmployee">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Employee Manage</span>
                </a>
                <div id="collapseSystemEmployee" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('countries.index') }}">Add Employee</a>
                        <a class="collapse-item" href="{{ route('states.index') }}">View Employee List</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystemAward"
                    aria-expanded="true" aria-controls="collapseSystemAward">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Award Manage</span>
                </a>
                <div id="collapseSystemAward" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('countries.index') }}">Award Category</a>
                        <a class="collapse-item" href="{{ route('states.index') }}">Give an Award</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystemNotice"
                    aria-expanded="true" aria-controls="collapseSystemNotice">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Notice Manage</span>
                </a>
                <div id="collapseSystemNotice" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('countries.index') }}">Add Notice</a>
                        <a class="collapse-item" href="{{ route('states.index') }}">View Notice</a>
                    </div>
                </div>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 large">{{ Auth::user()->username }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                    <!-- Example Colored Cards for Dashboard Demo-->
                    <div class="row">
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-primary text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Total Employees</div>
                                                <div class="text-lg fw-bold">10</div>
                                            </div>
                                            <i class="fas fa-users" aria-hidden="true" style="font-size: 32px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-dark text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Total Department</div>
                                                <div class="text-lg fw-bold">5</div>
                                            </div>
                                            <i class="fas fa-building" aria-hidden="true"
                                                style="font-size: 32px;"></i>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-success text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Total Task</div>
                                                <div class="text-lg fw-bold">24</div>
                                            </div>
                                            <i class="fa fa-tasks" aria-hidden="true" style="font-size: 32px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-danger text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Leave Requests</div>
                                                <div class="text-lg fw-bold">17</div>
                                            </div>
                                            <i class="fa fa-comments" aria-hidden="true"
                                                style="font-size: 32px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-info text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Total Award</div>
                                                <div class="text-lg fw-bold">4</div>
                                            </div>
                                            <i class="fas fa-trophy" aria-hidden="true" style="font-size: 32px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-warning text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Total Notice</div>
                                                <div class="text-lg fw-bold">15</div>
                                            </div>
                                            <i class="fas fa-briefcase" aria-hidden="true"
                                                style="font-size: 32px;"></i>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-dark text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Total Salary</div>
                                                <div class="text-lg fw-bold">105000tk</div>
                                            </div>
                                            <i class="fa fa-credit-card" aria-hidden="true"
                                                style="font-size: 32px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-xl-3 mb-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card bg-secondary text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 large">Total Event</div>
                                                <div class="text-lg fw-bold">10</div>
                                            </div>
                                            <i class="fa fa-calendar" aria-hidden="true"
                                                style="font-size: 32px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; GSDA-2022 </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>

</body>

</html>
