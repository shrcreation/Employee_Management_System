@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="row">
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('users.index') }}" class="text-decoration-none">
            <div class="card bg-primary text-white" style="height:150px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Total Employees</div>
                            <div style="font-size: 2.1rem;">10</div>
                        </div>
                        <i class="fas fa-users" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('departments.index')}}" class="text-decoration-none">
            <div class="card bg-dark text-white" style="height:150px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Total Department</div>
                            <div style="font-size: 2.1rem;">5</div>
                        </div>
                        <i class="fas fa-building" aria-hidden="true" style="font-size: 32px;"></i>

                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('tasks.index')}}" class="text-decoration-none">
            <div class="card bg-success text-white" style="height:150px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Total Task</div>
                            <div style="font-size: 2.1rem;">24</div>
                        </div>
                        <i class="fa fa-tasks" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('leave.index')}}" class="text-decoration-none">
            <div class="card bg-danger text-white" style="height:150px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Leave Requests</div>
                            <div style="font-size: 2.1rem;">17</div>
                        </div>
                        <i class="fa fa-comments" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('awards.index')}}" class="text-decoration-none">
            <div class="card bg-info text-white" style="height:150px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Total Award</div>
                            <div style="font-size: 2.1rem;">4</div>
                        </div>
                        <i class="fas fa-trophy" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('notices.index')}}" class="text-decoration-none">
            <div class="card bg-warning text-white" style="height:150px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Total Notice</div>
                            <div style="font-size: 2.1rem;">15</div>
                        </div>
                        <i class="fas fa-briefcase" aria-hidden="true" style="font-size: 32px;"></i>

                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('salaries.index')}}" class="text-decoration-none">
            <div class="card text-white" style="height:150px; background:#274a45;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Total Salary</div>
                            <div style="font-size: 2.1rem;">105000tk</div>
                        </div>
                        <i class="fa fa-credit-card" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-6 col-xl-3 mb-5">
        <a href="{{ route('events.index')}}" class="text-decoration-none">
            <div class="card bg-secondary text-white" style="height:150px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="me-3">
                            <div class="text-white-75 large">Total Event</div>
                            <div style="font-size: 2.1rem;">10</div>
                        </div>
                        <i class="fa fa-calendar" aria-hidden="true" style="font-size: 32px;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    {{-- attendance button --}}
    {{-- <div class="col-lg-6 col-xl-3 mb-5 mx-auto">
            <div>
                <a href="#">
                    <button class="btn btn-danger pl-5 pr-5 pt-3 pb-3" data-toggle="modal"
                        data-target="#modalLoginForm">Give an Attendance</button>
                </a>
            </div>
            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Attendance Form</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="mb-3">
                                <label class="form-label">Employee ID</label>
                                <input type="text" class="form-control" placeholder="Your ID">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Employee Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <div class="cs-form">
                                    <input type="date" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="cs-form">
                                    <input type="time" class="form-control" value="10:05 AM" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-success">Give Attendance</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
</div>
@endsection