@extends('layouts.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Create Salary') }}</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Salary') }}
                        <button class="btn btn-secondary float-right"><a href="{{ route('salaries.index') }}"
                                class="float-right" style="text-decoration: none;color:white;">Back</a></button>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('salaries.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Employee Name') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="username"
                                        placeholder="Enter Employee Name" value="{{ old('username') }}" required
                                        autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="salary"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                                <div class="col-md-6">
                                    <input id="salary" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="salary"
                                        placeholder="Enter salary" value="{{ old('salary') }}" required
                                        autocomplete="salary" autofocus>

                                    @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Create ') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
