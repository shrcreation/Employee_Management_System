@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Employee Salary</h1>
</div>
<div class="row">
    <div class="card col-6 col-md-6 mx-auto">
        <div>
            @if (session()->has('message'))
            <div class="alert alert-secondary">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="card-header bg-white border-0">
            <div class="row">
                <div class="col">
                    <form method="GET" action="{{ route('salaries.index') }}">
                        <div class="form-row align-items-center">
                            <div class="col">
                                <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="Find Employee">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning mb-2">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <a href="{{ route('salaries.create') }}" class="btn btn-success mb-2">Create</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salaries as $salary)
                    <tr>
                        <th scope="row">{{ $salary->id }}</th>
                        <td>{{ $salary->username }}</td>
                        <td>{{ $salary->salary }}</td>
                        <td>
                            <a href="{{ route('salaries.edit', $salary->id) }}" class="btn btn-dark">Edit</a>
                            <form method="POST" action="{{ route('salaries.destroy', $salary->id) }}" class="float-right">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection