@extends('layout')

@section('content')
    <div class="container pt-3 pb-4">
        <div class="col-xs-4 text-center">
            <h1>WELCOME TO NCBI REGISTRATION PORTAL</h1>
            <h3>Click The Button Below To Begin Your Registration</h3>
            <a href="{{route('register')}}" class="btn btn-primary">REGISTER</a>
        </div>
    </div>
@endsection
