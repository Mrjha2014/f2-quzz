@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>image card <a href="{{ url('add-students') }}" class="btn btn-primary float-end"> add </a>
                        </h5>
                    </div>
<div class="card-body">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Image</th>
<th>edit</th>
<th>delete</th>
</tr>
</thead>
<tbody>
@foreach ($student as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>
<img src="{{asset('uplods/students/'.$item->profile)}}" alt="" width="70px" height="70px">
</td>
<td><a href="" class="btn btn-primary btn-sn">Edit</a></td>
<td><a href="" class="btn btn-danger btn-sn">Delete</a></td>
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
