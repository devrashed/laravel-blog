@extends('layout.admin.default')
@section('title', 'Add Oceania News')

@section('content')

 <h2> Add Oceania News </h2>
 

<form class="form-horizontal" action="{{URL::to('/insertOceania')}}"  method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

 <table width="100%">
   
   <tr>
     <td> <b>Add New Title :</b> <input class="form-control" type="text" name="ntitle" value=""></td>  
   </tr> 
    
    <tr>
     <td> </td>  
   </tr> 

   <tr>
     <td> <b> Description :</b> <textarea class="form-control" name="ndescription" rows="10"></textarea>  </td>  
   </tr>

        
    <tr>
     <td> </td>  
   </tr>  

   <tr>
     <td>   
  <div class="form-group">
    <label for="exampleFormControlFile1"> <b>Image Upload : </b></label>
    <input type="file" name="image">
  </div> 


  </td>  
   </tr>
   <tr>
     <td> <b>Youtube Embad :</b> <input class="form-control" type="text" name="youtube" value="">
     <input class="form-control" type="hidden" name="media" value="Ocenia">
     </td> 
   </tr>
 

    <tr>
     <td> </td>  
   </tr>  
   
    <tr>
     <td> </td>  
   </tr>

      
    <tr>
     <td>  <button type="submit" class="btn btn-primary"> Submit </button> </td>  
   </tr>  


 </table>

 </form>
 



@endsection