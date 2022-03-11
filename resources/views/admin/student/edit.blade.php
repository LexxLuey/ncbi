@extends('layouts.admin-dashboard')
@section('title', 'Edit Student Details')
{{-- @section('heading', 'Edit This Post')
@section('link_text', 'Goto All Posts')
@section('link', '/post') --}}

@section('content')

    <div class="row">
        <div class="col">
            <form  action="{{ route('edit-student', $student) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                            value="{{ $student->first_name }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name"
                            value="{{ $student->middle_name }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname"
                            value="{{ $student->surname }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number"
                            value="{{ $student->phone_number }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                            value="{{ $student->email }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address"
                            value="{{ $student->address }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                            value="{{ $student->first_name }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                            value="{{ $student->first_name }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                            value="{{ $student->first_name }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                            value="{{ $student->first_name }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                            value="{{ $student->first_name }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"
                            value="{{ $student->first_name }}" required>
                    </div>
                </div>
                
                <div class="my-2">
                    <input type="file" name="file" id="file" accept="image/*" class="form-control">
                </div>
        
                <img src="{{ asset('storage/images/'.$student->photo) }}" class="img-fluid img-thumbnail" width="150" height="15">
        

                <div class="row">
                    <div class="col-xs-4 text-center">
                        <div class="form-group mt-1 mb-3 ">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
