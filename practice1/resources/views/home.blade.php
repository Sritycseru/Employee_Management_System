@extends('layout')

@section('page-content')
<a href="{{route('employees.create')}}" >add book</a>
<table class="table">

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Job_title</th>
            <th>Joining_Date</th>
            <th>Salary</th>
            <th>Email</th>
            <th>Mobile_no</th>
            <th>address</th>
        </tr>

                @foreach ($employee as $employe)
                <tr>

                <td>{{$employe->id}}</td>
                <td>{{$employe->name}}</td>
                <td>{{$employe->job_title}}</td>
                <td>{{$employe->joining_date}}</td>
                <td>{{$employe->salary}}</td>
                <td>{{$employe->email}}</td>
                <td>{{$employe->mobile_no}}</td>
                <td>{{$employe->address}}</td>
                <td>
                    <form action="{{route('employee.destroy',$employe->id)}}" method="POST" >
                        <a href="{{route('employees.show', $employe->id)}}" >Details Books</a>
                        @csrf
                        {{-- @method('DELETE') --}}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </td>
                </tr>

                @endforeach
        </table>

        {{$employee->links()}};

@endsection
