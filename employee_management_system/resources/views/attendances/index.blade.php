@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Attendance</h1>
    </div>
    <div class="col-lg-6 col-xl-3 mb-5">
        <div>
            <a href="#">
                <button class="btn btn-dark pl-5 pr-5 pt-3 pb-3" data-toggle="modal"
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
    </div>
    <div class="row">
        <div class="col-lg-6 col-xl-3 mb-5">
            <a href="#" class="text-decoration-none">
                <div class="card bg-primary text-white" style="height:150px;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 large">Total Working Days</div>
                                <div class="fw-bold" style="font-size: 2.1rem;">10</div>
                            </div>
                            <i class="fas fa-users" aria-hidden="true" style="font-size: 32px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 mb-5">
            <a href="#" class="text-decoration-none">
                <div class="card bg-secondary text-white" style="height:150px;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 large">On Time Percentage</div>
                                <div class="fw-bold" style="font-size: 2.1rem;">84%</div>
                            </div>
                            <i class="fas fa-building" aria-hidden="true" style="font-size: 32px;"></i>

                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 mb-5">
            <a href="#" class="text-decoration-none">
                <div class="card bg-success text-white" style="height:150px;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 large">OnTime this Month</div>
                                <div class="fw-bold" style="font-size: 2.1rem;">10</div>
                            </div>
                            <i class="fa fa-tasks" aria-hidden="true" style="font-size: 32px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-xl-3 mb-5">
            <a href="#" class="text-decoration-none">
                <div class="card bg-danger text-white" style="height:150px;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 large">Late this Month</div>
                                <div class="fw-bold" style="font-size: 2.1rem;">2</div>
                            </div>
                            <i class="fa fa-comments" aria-hidden="true" style="font-size: 32px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

@endsection
