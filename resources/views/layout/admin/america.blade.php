@extends('layout.admin.default')
@section('title', 'View ALL America News')

@section('content')


  
<h2> View ALL America News</h2>
 
 <a href="{!! url('/newamerica'); !!}"><button type="button" class="btn btn-outline-secondary">Add New</button></a> </br></br>
 
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">News Title</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

 @foreach($data as $data) 
    <tr>
      <th scope="row">1</th>
      <td> {{$data->titel}}  </td>
      <td><a href="./AmEdit/{{$data->id}}">Edit</a> / <a href="./del/{{$data->id}}">Delete</a></td>
    </tr>
  @endforeach

  </tbody>
</table>



@endsection