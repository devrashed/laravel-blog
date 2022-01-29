@extends('layout.admin.default')
@section('title', 'View all article')

@section('content')

 <h2> View Content </h2>


 
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Content Type</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td> {{$data['atype']}} </td>
      <td> <a href="./Editarticle/{{$data->id}}">Edit</a> </td>

    </tr>
    @endforeach
   
  </tbody>
</table>


 



@endsection