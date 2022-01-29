@extends('layouts.app')
@section('title', 'New Donar Join')

@section('content')

<h3> New Donar Join </h3>
<br>
 <div class="row">

<div class="col-md-12"> 

<div class="panel-body">
   <form class="form-horizontal" method="post" action="{{URL::to('/forntnewdonar')}}">
                                    {{ csrf_field() }}
                                
<div class="form-group">
    <label for="fullname" class="col-md-4 control-label">Full Name</label>

    <div class="col-md-6">
        <input id="fullname" type="text" class="form-control" name="fullname" required autofocus>                        
    </div>
</div>

<div class="form-group">
    <label for="address" class="col-md-4 control-label">Address</label>
    <div class="col-md-6">
        <input id="address" type="text" class="form-control" name="address" required>
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">Gender</label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="gender">
        <option selected>--Gender--</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    </div>
</div>

 <div class="form-group">
    <label for="email" class="col-md-4 control-label">Blood Group</label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="blgroup">
        <option selected>--Blood Group--</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="AB-">AB-</option>
    </select>
    </div>
</div>


<div class="form-group">
    <label for="password" class="col-md-4 control-label">Phone Number</label>
 <div class="col-md-6">
    <input id="text" type="text" class="form-control" name="phonenumber" required>
  </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-md-4 control-label">Alternate Phone Number</label>
    <div class="col-md-6">
        <input id="phonenumber" type="text" class="form-control" name="alternetphone" required>
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">Select District Name   </label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="district" name="district">
        <option selected>Select District Name</option>
          
           {{$dis}}

         @foreach($dis as $districts)
        <option value="{{$districts['id']}}">{{$districts['districName']}}</option>
         @endforeach           
    </select>
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">Select Thana Name</label>     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="thana" name="thanas">
        <option selected>Select Thana Name</option>
          <option value="20">Demra</option> 
       </select>
    </div>
</div>

<div class="form-group">
 <div class="col-md-6">
    <input id="address" type="hidden" class="form-control" name="status" value="0" required>   
 </div>
</div>

    <div class="form-group">
                <div class="col-md-6">
<button type="submit" class="btn btn-primary"> Submit </button>
                            </div>
                        </div>
                    </form>
                </div>

</div> <!-- END THE COL-MD-4 -->
<!--  <div class="col-md-7"> </div>  -->
 
</div> <!-- END THE ROW -->


@endsection