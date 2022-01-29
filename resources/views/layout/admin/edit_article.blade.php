@extends('layout.admin.default')
@section('title', 'Edit Article ')

@section('content')

 <h2> Edit Article </h2>
 
                                        
<form class="form-horizontal" action="{{url('Doupdate', [$data->id])}}"  method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

 <table width="100%">
   
   <tr>
     <td> <b>Add New Title :</b> <input class="form-control" type="text" name="atype" 
     value="{{$data->atype}}" readonly></td>  
   </tr> 
    
    <tr>
     <td> </td>  
   </tr> 

   <tr>
     <td> <b> Description :</b> <textarea class="form-control" name="content" rows="10"> 
     {{$data->content}}   </textarea>  </td>  
   </tr>

        
    <tr>
     <td> </td>  
   </tr>  

   <tr>
     <td>   
<!--   <div class="form-group">
    <label for="exampleFormControlFile1"> <b>Image Upload : </b></label>
    <input type="file" name="image">
  </div>  -->


  <!-- </td>  
   </tr>
   <tr>
     <td> <b>Youtube Embad :</b> <input class="form-control" type="text" name="youtube" value="">
     <input class="form-control" type="hidden" name="media" value="America">
     </td> 
   </tr> -->
 

    <tr>
     <td> </td>  
   </tr>  
   
    <tr>
     <td> </td>  
   </tr>

      
    <tr>
     <td>  <button type="submit" class="btn btn-primary"> Update </button> </td>  
   </tr>  


 </table>

 </form>
 



@endsection