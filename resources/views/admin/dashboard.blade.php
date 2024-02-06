@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <h2 class="alert alert-success">{{ session('message') }}</h2>
            @endif

            <div class="me-md-3 me-xl-5">
                <h2>Dashboard</h2>
                <p class="mb-md-0">Your analytics dashboard template.</p>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body bg-primary text-white mb-3">
                        <label>Total User All</label>
                        <h5 class="mt-1">{{ $totalUserAll }}</h5>
                        <a href="{{ url('admin/users') }}" class="text-white">view</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
