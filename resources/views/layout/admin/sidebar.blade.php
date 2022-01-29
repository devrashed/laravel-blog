<div id="smoothmenu2" class="ddsmoothmenu-v">
<ul>

	<li><a href="{!! url('/home'); !!}">Home</a></li>
	<li><a href="#">Content</a>
   <ul>
            <!-- <li><a href="{!! url('/newarticle'); !!}">New Content</a></li> -->
            <li><a href="{!! url('/articleview'); !!}">View Content</a></li> 
   </ul> 

	</li>
	<li><a href="#">Photogallery</a>
       
  <ul>
    <li><a href="{!! url('/createphoto'); !!}">Add New Photo</a></li>
    <li><a href="{!! url('/viewphoto'); !!}">View All Photo</a></li> 
  </ul> 

	</li>

    <li><a href="#">Media</a>

  <ul>
    <li><a href="{!! url('/viewsouth'); !!}">South Asia</a></li>
    <li><a href="{!! url('/viewmiddle'); !!}">Middle East</a></li> 
    <li><a href="{!! url('/viewamerica'); !!}">America</a></li> 
    <li><a href="{!! url('/vieweurope'); !!}">Europe</a></li>
    <li><a href="{!! url('/viewoceania'); !!}">Oceania Zone</a></li>
  </ul>

 </li>

 <li><a href="#">User Information</a>
          
       <ul>
          <li><a href="{!! url('/createuser'); !!}">Create New User</a></li>
          <li><a href="{!! url('/viewuser'); !!}">Show All User</a></li>
       </ul> 

 </li>    

    <li><a href="{!! url('/changepassword'); !!}">Change Password</a></li>    


</ul>


</div>
