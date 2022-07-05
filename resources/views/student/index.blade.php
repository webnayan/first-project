@extends('layouts.master')

@section('content')



  <div class="container">
       <div class="col-md-12">
         <div class="card">
      <div class="card-header mx-auto">
                   <h4> New Era Education Student Details
                     <a class="btn btn-primary" href="{{ url('add-student') }}" role="button">Add Student</a>
                     <a class="btn btn-primary" href="{{ url('/') }}" role="button">Back</a>
</h4>
<div class ="card-body">
<table class="table table-bordered table-striped">
        <thead>
          <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Email</th>
               <th>Course</th>
               <th>Country</th>
               <th>Image</th>
               <th>Edit</th>
               <th>Delete</th>
          </tr>
        </thead>
<tbody>
         @foreach ($student as $item)
           <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->course}}</td>
            <td>{{ $item->country}}</td>
            <td><img src="{{asset('uploads/'.$item->profile_image) }}" width="70px" height="70px" alt="Image"></td>
            <td>
              <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
            </td>
            <td>
              <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-primary btn-sm">Delete</a>
              </td>

            </tr>
                @endforeach
           
            </tbody>
            </table>
    </div>
</div>
</div>
</div>
</div>

@endsection

