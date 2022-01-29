<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photogallary;
use DB;
class photocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function photostore(Request $request)
    {
        $request->validate([
        'photocaption'=>'required',
         'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
     ]);
    
      $data = new photogallary([

        $file = $request->input('image'),
        $photo = $request->file('image')->getClientOriginalName(),
        $destination = base_path() . '/public/upload',
        $request->file('image')->move($destination, $photo),
        

        'caption' => $request->get('photocaption'),
        'photogallary'=> $photo,

      ]);    

      $data->save();
      return redirect('/createphoto')->with('success', 'Photo has been added');
      //
    }

      public function Doupdate(Request $request, $id)
    { 
      
      $data = photogallary::find($id);
      $data->caption=$request->input('photocaption');
                    
      if($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.'. $extension;
        $file->move('./public/upload',$filename);
        $data->photogallary = $filename; 
      }

      $data->save();
      $request->session()->flash('message', 'Successfully update Data');
        return redirect('viewphoto'); 
    } 


     public function photoview() 
     {
       $photos = photogallary::paginate(20); //all()->toArray();
       return view ('layout.admin.viewphoto',compact('photos'));  
     }

    public function photodel($id) {

       $photoremove=DB::table('photogallary')->where('id',$id)->delete();
       return redirect('/viewphoto')->with('success','Photo removed'); 
    }

     
    public function photoEdit($id)
    {
       
        $photo= DB::table('photogallary')
         ->where('photogallary.id', '=', $id)
         ->first(); 

     /*  dd($photo);
       die();*/
       return view ('layout.admin.edit_Photo',compact('photo'));
    }
    
  



/*   public function update(Request $request, profile $profile)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
             'address' => 'nullable' ,
        ]);
           $profile->update($request->all());
           $profile-> name = $request->name;
           $profile-> address = $request->address;         
           $request->image->store('public/images');
           $path = $request->image->hashName();
           $profile-> images = $path;
           $profile->save();
           return redirect('/home');
    }
*/





}
