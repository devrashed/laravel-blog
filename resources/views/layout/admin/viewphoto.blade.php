@extends('layout.admin.default')
@section('title', 'View ALL PhotoGallery')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">View All Founder Member Information</div>
</div>

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Caption </th>
      <th scope="col">Pic</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

      @foreach($photos as $photo)
    <tr>
      <th scope="row"></th>
      <td>{{$photo['caption']}}</td>
      <td><img src="././public/upload/{{$photo['photogallary']}}" width="100" height="100"></td>
      <td><a href="./photoedit/{{$photo->id}}">Edit</a> / <a href="./delete/{{$photo->id}}">Delete</a></td>
    </tr>
     @endforeach
    </tbody>

</table>



@endsection