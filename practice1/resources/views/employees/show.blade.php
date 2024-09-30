@extends('layout')

@section('page-content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Name :{{$employee->name}}</h5>
        <p class="card-text">Job_title : {{$employee->job_title}}</p>
        <p class="card-text">Salary : {{$employee->salary}}</p>
        <p class="card-text">Mobile_No : {{$employee->mobile_no}}</p>
        <p class="card-text">Address : {{$employee->address}}</p>
        <p class="card-text">Email : {{$employee->email}}</p>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="{{route('index')}}" class="btn btn-secondary">Cancel</a>

    </div>
</div>
@endsection
