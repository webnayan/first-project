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
                <h4>Add Student details to New Era Education
                    <a class="btn btn-primary" href="{{ url('/') }}" role="button">Back</a>
</h4>

<div class ="card-body" >

<form action="{{ url('add-student') }}" method="POST" enctype="multipart/form-data">
    @csrf
               
                <div class= form-group mb-3">
                <label for="">student name</label>
                <input type="text" name="name" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student email</label>
                <input type="text" name="email" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student course</label>
                <input type="text" name="course" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student country</label>
                <input type="text" name="country" class="form-control"
</div>
                <div class= form-group mb-3">
                <label for="">student profile image</label>
                <input type="file" name="profile_image" class="form-control"
</div>
<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">Save Student</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection
