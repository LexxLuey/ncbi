@extends('layouts.admin-dashboard')
@section('title', 'Student Detail Page')
{{-- @section('heading', 'Post Details')
@section('link_text', 'Goto All Posts')
@section('link', '/student') --}}

@section('content')

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('storage/images/' . $student->photo) }}" class="img-fluid card-img-top">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" value=" {{$student->first_name}} " id="first_name" disabled>
                        </div>
                        @if ($student->middle_name)                            
                        <div class="col-md-6">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" value=" {{$student->middle_name}} " id="middle_name" disabled>
                        </div>
                        @endif
                        <div class="col-md-6">
                            <label for="surname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" value=" {{$student->surname}} " id="surname" disabled>
                        </div>
                      </div>
                    <div class="row m-t-lg">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" class="form-control" value=" {{$student->email}} " id="email"
                                aria-describedby="email" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" value=" {{$student->phone_number}} " id="phone_number" disabled>
                        </div>
                    </div>
                    <div class="row m-t-lg">
                        <div class="col-md-6">
                            <label for="sex" class="form-label">Sex</label>
                            <input type="text" class="form-control" value=" {{ $student->sex }} " id="sex"
                                aria-describedby="sex" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="age_range" class="form-label">Age Range</label>
                            <input type="text" class="form-control" id="age_range" value=" {{ $student->age_range }} " disabled>
                        </div>
                    </div>
                    <div class="row m-t-lg">
                        <div class="col-md-6">
                            <label for="marital_status" class="form-label">Marital Status</label>
                            <input type="text" class="form-control" id="marital_status" value=" {{ $student->marital_status }} "
                                aria-describedby="marital_status" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" value=" {{ $student->address }} " id="address" disabled>
                        </div>
                    </div>
                    <div class="row m-t-lg">
                        <div class="col-md-6">
                            <label for="centre" class="form-label">Centre</label>
                            <input type="text" class="form-control" value=" {{ $student->centre }} " id="centre"
                                aria-describedby="centre" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="completed_growth_track" class="form-label">Growth Track</label>
                            <input type="text" class="form-control" id="completed_growth_track" value=" {{ $student->completed_growth_track ? 'Completed' : 'Incomplete' }} " disabled>
                        </div>
                    </div>
                    <div class="row m-t-lg">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="SettingsNewsLetter">
                                <label class="form-check-label" for="SettingsNewsLetter">
                                    Receive notifications about student updates &amp; student progress
                                </label>
                            </div>
                            <div class="card-footer px-5 py-3 d-flex justify-content-end">
                                {{-- <a href="{{ route('edit-student', $student) }}" class="btn btn-success rounded-pill me-2">Edit</a> --}}
                                <a href="{{ route('pdf-generate', $student) }}" class="btn btn-primary rounded-pill me-2">Print</a>
                                <form action="{{ route('delete-student', $student) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger rounded-pill">Delete</button>
                                </form>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
