@extends('layout')

@section('content')
    <div class="container pt-3">
        <form method="post" enctype="multipart/form-data" action=" {{ route('store') }} ">
            {{ csrf_field() }}
            <fieldset>
                <div class="row pt-3 pb-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="first_name" class="form-label mt-4">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name"
                                placeholder="Enter First Name" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="surname" class="form-label mt-4">Surname </label>
                            <input type="text" class="form-control" id="surname" placeholder="Enter Surname"
                                name="surname" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="middle_name" class="form-label mt-4">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" placeholder="Enter Middle Name"
                                name="middle_name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="sex" class="form-label mt-4">Sex</label>
                            <select class="form-select" id="sex" name="sex" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="age_group" class="form-label mt-4">Age Group</label>
                            <select class="form-select" id="age_group" name="age_range" required>
                                <option value="Under 20">Under 20</option>
                                <option value="20 - 25">20 - 25</option>
                                <option value="26 - 30">26 - 30</option>
                                <option value="31 - 35">31 - 35</option>
                                <option value="36 - 40">36 - 40</option>
                                <option value="Above 40">Above 40</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="phone" class="form-label mt-4">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone_number"
                                placeholder="Enter Phone Number" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="email" class="form-label mt-4">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address"
                                name="email" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="marital_status" class="form-label mt-4">Marital Status</label>
                            <select class="form-select" id="marital_status" name="marital_status" required>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="age_group" class="form-label mt-4">Centre</label>
                            <select class="form-select" id="age_group" name="centre" required>
                                <option value="CFC ABUJA">CFC ABUJA</option>
                                <option value="CFC GBOKO">CFC GBOKO</option>
                                <option value="CFC MAKURDI">CFC MAKURDI</option>
                                <option value="CFC SAGAMU">CFC SAGAMU</option>
                                <option value="CFC KADUNA">CFC KADUNA</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="address" class="form-label mt-4">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter Contact Address" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="file" class="form-label mt-4">Passport Picture</label>
                            <input type="file" class="form-control" @error('file') is-invalid @enderror name="file"
                                id="file" accept="image/*" required>
                            @error('file')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="growth_track_status"
                                name="completed_growth_track">
                            <label class="form-check-label" for="growth_track_status"> Have You Completed The Growth Track
                                Class?</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-4 text-center">
                        <div class="form-group mt-1 mb-3 ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
