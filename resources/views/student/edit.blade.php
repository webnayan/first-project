@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div> 

@endif 
         <div class="card">
            <div class="card-header">
                <h4> Edit Student details
                    <a class="btn btn-primary" href="{{ url('students') }}" role="button">Back</a>
</h4>

<div class ="card-body">

<form action="{{ url('update-student/'.$student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
               
                <div class= form-group mb-3">
                <label for="">student name</label>
                <input type="text" name="name" value="{{$student->name}}" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student email</label>
                <input type="text" name="email" value="{{$student->email}}" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student course</label>
                <input type="text" name="course" value="{{$student->course}}" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student country</label>
                <input type="text" name="country" value="{{$student->country}}" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student profile image</label>
                <input type="file" name="profile_image" class="form-control">
                <img src="{{ asset('uploads/'.$student->profile_image) }}" width="70px" height="70px" alt="Image">
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">Update Student</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection
