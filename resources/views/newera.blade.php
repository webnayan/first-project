@extends('layouts.master')

@section('content')




      <div class="card">
      <div class="card-header mx-auto"><h4> New Era Education Portal </h4>
      <div class="d-grid gap-2 col-6 mx-auto">
 <a class="btn btn-primary" href="{{ url('add-student') }}" role="button">Add Student</a>
 <a class="btn btn-primary" href="{{ url('students') }}" role="button">Student List</a>
</div>

@endsection


{{-- <a class="btn btn-primary" href="{{ url('add-student') }}" role="button">Add Student</a> --}}