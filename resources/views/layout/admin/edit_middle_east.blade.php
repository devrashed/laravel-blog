@extends('layout.admin.default')
@section('title', 'Update Middle East News')

@section('content')

 <h2> Update East News </h2>
 


<form class="form-horizontal" action="{{url('Mupdate', [$data->id])}}"  method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

 <table width="100%">
   
   <tr>
     <td> <b>Add New Title :</b> <input class="form-control" type="text" name="ntitle" value="{{$data->titel}}"></td>  
   </tr> 
    
    <tr>
     <td> </td>  
   </tr> 

   <tr>
  <td> <b> Description :</b> <textarea class="form-control" name="ndescription" rows="10"> {{$data->mcontent }} </textarea>  </td>  
   </tr>

        
    <tr>
     <td> </td>  
   </tr>  

   <tr>
     <td>   
  <div class="form-group">
    <label for="exampleFormControlFile1"> <b>Image Upload : </b></label>
    <input type="file" class="form-control-file" name="image"><img src="../public/upload/{{$data->mimages}}" width="100" height="100">
  </div> 


  </td>  
   </tr>
   <tr>
     <td> <b>Youtube Embad :</b> <input class="form-control" type="text" name="youtube" value="{{$data->youtube_video}}">
             <input class="form-control" type="hidden" name="media" value="Middle">
     </td> 
   </tr>
 

    <tr>
     <td> </td>  
   </tr>  
   
    <tr>
     <td> </td>  
   </tr>
   
      
    <tr>
     <td> <button type="submit" class="btn btn-primary"> Update </button></td>  
   </tr>  


 </table>

  </form>
 



@endsection