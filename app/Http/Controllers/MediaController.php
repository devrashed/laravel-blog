<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\media;
use DB;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function Asiastore(Request $request)
  {        
       $request->validate([
        'ntitle'=> 'required',
        'ndescription'=> 'required',
        'image'=> 'required',
        'youtube'=> 'required',
        //'media'=> 'required',
  ]);

    /*dd($request);
     exit(); */

      $data = new media([
         
        $file = $request->input('image'),
        $photo = $request->file('image')->getClientOriginalName(),
        $destination = base_path() . '/public/upload',
        $request->file('image')->move($destination, $photo), 

        'titel'=> $request->get('ntitle'),
        'mcontent'=> $request->get('ndescription'),
        'youtube_video'=> $request->get('youtube'),
        'mimages'=> $photo,
        'mediatype'=>$request->get('media'),
    ]);
         
  /* dd($data);
     exit(); */

  $data->save();
  return redirect('/viewsouth')->with('success', 'successfully South Asia News');

}

 public function southview() 
 {
       $data = DB::table('media')    
              ->where('mediatype','=','southAsia')
              ->get();
       return view ('layout.admin.south_asia',compact('data'));  
 }

public function southDel($id) {
    $deldata=DB::table('media')->where('id',$id)->delete();
   return redirect('/viewsouth')->with('success','Post removed'); 
}

public function southEdit($id) {

        $data= DB::table('media')
         ->where('media.id', '=', $id)
         ->first(); 
       return view ('layout.admin.edit_south_asia',compact('data'));
}

 public function sthupdate(Request $request, $id)
    { 
      $data = media::find($id);
      $data->titel=$request->input('ntitle');
      $data->email=$request->input('ndescription');
      $data->utype=$request->input('youtube');
      $data->mediatype=$request->input('media');
                    
      if($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.'. $extension;
        $file->move('./public/upload',$filename);
        $data->mimages = $filename; 
      }

      $data->save();
      $request->session()->flash('message', 'Successfully update Data');
        return redirect('/viewsouth'); 
 } 






public function Middlestore(Request $request)
  {        
       $request->validate([
        'ntitle'=> 'required',
        'ndescription'=> 'required',
        'image'=> 'required',
        'youtube'=> 'required',
        'media'=> 'required',
  ]);

    /*dd($request);
     exit(); */

      $data = new media([
         
        $file = $request->input('image'),
        $photo = $request->file('image')->getClientOriginalName(),
        $destination = base_path() . '/public/upload',
        $request->file('image')->move($destination, $photo), 

        'titel'=> $request->get('ntitle'),
        'mcontent'=> $request->get('ndescription'),
        'youtube_video'=> $request->get('youtube'),
        'mimages'=> $photo,
        'mediatype'=>$request->get('media'),
    ]);
         
   /*dd($data);
     exit(); */

  $data->save();
  //return redirect()->back();
  return redirect('/viewmiddle')->with('success', 'Successfully Middle East News');

}


 public function middleview() 
 {
       $data = DB::table('media')    
              ->where('mediatype','=','Middle')
              ->get();
       return view ('layout.admin.middle_east',compact('data'));  
 }

public function midelDel($id) {
    $deldata=DB::table('media')->where('id',$id)->delete();
    return redirect('/viewmiddle')->with('success','Post removed'); 
}


public function MiddleEdit($id) {

        $data= DB::table('media')
         ->where('media.id', '=', $id)
         ->first(); 
       return view ('layout.admin.edit_middle_east',compact('data'));
}


 public function middleupdate(Request $request, $id)
    { 
      $data = media::find($id);
      $data->titel=$request->input('ntitle');
      $data->mcontent=$request->input('ndescription');
      $data->youtube_video=$request->input('youtube');
      $data->mediatype=$request->input('media');
                    
      if($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.'. $extension;
        $file->move('./public/upload',$filename);
        $data->mimages = $filename; 
      }

      $data->save();
      $request->session()->flash('message', 'Successfully update Data');
      return redirect('/viewmiddle'); 
 } 






public function Americastore(Request $request)
  {        
       $request->validate([
        'ntitle'=> 'required',
        'ndescription'=> 'required',
        'image'=> 'required',
        'youtube'=> 'required',
        'media'=> 'required',
  ]);

    /*dd($request);
     exit(); */

      $data = new media([
         
        $file = $request->input('image'),
        $photo = $request->file('image')->getClientOriginalName(),
        $destination = base_path() . '/public/upload',
        $request->file('image')->move($destination, $photo), 

        'titel'=> $request->get('ntitle'),
        'mcontent'=> $request->get('ndescription'),
        'youtube_video'=> $request->get('youtube'),
        'mimages'=> $photo,
        'mediatype'=>$request->get('media'),
    ]);
         
   /*dd($data);
     exit(); */

  $data->save();
  //return redirect()->back();
  return redirect('/viewamerica')->with('success', 'success fully America News');

}

 public function americaview() 
 {
       $data = DB::table('media')    
              ->where('mediatype','=','America')
              ->get();
       return view ('layout.admin.america',compact('data'));  
 }

public function americaDel($id) {
    $deldata=DB::table('media')->where('id',$id)->delete();
    return redirect('/viewamerica')->with('success','Post removed'); 
}


public function AmericaEdit($id) {

        $data= DB::table('media')
         ->where('media.id', '=', $id)
         ->first(); 
       return view ('layout.admin.edit_america',compact('data'));
}


 public function Americaupdate(Request $request, $id)
    { 
      $data = media::find($id);
      $data->titel=$request->input('ntitle');
      $data->mcontent=$request->input('ndescription');
      $data->youtube_video=$request->input('youtube');
      $data->mediatype=$request->input('media');
                    
      if($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.'. $extension;
        $file->move('./public/upload',$filename);
        $data->mimages = $filename; 
      }

      $data->save();
      $request->session()->flash('message', 'Successfully update Data');
      return redirect('/viewamerica'); 
 } 




public function Europestore(Request $request)
  {        
       $request->validate([
        'ntitle'=> 'required',
        'ndescription'=> 'required',
        'image'=> 'required',
        'youtube'=> 'required',
        'media'=> 'required',
  ]);

    /*dd($request);
     exit(); */

      $data = new media([
         
        $file = $request->input('image'),
        $photo = $request->file('image')->getClientOriginalName(),
        $destination = base_path() . '/public/upload',
        $request->file('image')->move($destination, $photo), 

        'titel'=> $request->get('ntitle'),
        'mcontent'=> $request->get('ndescription'),
        'youtube_video'=> $request->get('youtube'),
        'mimages'=> $photo,
        'mediatype'=>$request->get('media'),
    ]);
         
   /*dd($data);
     exit(); */

  $data->save();
  //return redirect()->back();
  return redirect('/vieweurope')->with('success', 'success fully Europe News');

}

 public function europeview() 
 {
       $data = DB::table('media')    
              ->where('mediatype','=','Europe')
              ->get();
       return view ('layout.admin.europe',compact('data'));  
 }

public function europeDel($id) {
    $deldata=DB::table('media')->where('id',$id)->delete();
    return redirect('/vieweurope')->with('success','Post removed'); 
}


public function EuropeEdit($id) {

        $data= DB::table('media')
         ->where('media.id', '=', $id)
         ->first(); 
       return view ('layout.admin.edit_europe',compact('data'));
}


 public function europeupdate(Request $request, $id)
    { 
      $data = media::find($id);
      $data->titel=$request->input('ntitle');
      $data->mcontent=$request->input('ndescription');
      $data->youtube_video=$request->input('youtube');
      $data->mediatype=$request->input('media');
                    
      if($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.'. $extension;
        $file->move('./public/upload',$filename);
        $data->mimages = $filename; 
      }

      $data->save();
      $request->session()->flash('message', 'Successfully update Data');
      return redirect('/vieweurope'); 
 } 
 






public function Oceaniastore(Request $request)
  {        
       $request->validate([
        'ntitle'=> 'required',
        'ndescription'=> 'required',
        'image'=> 'required',
        'youtube'=> 'required',
        'media'=> 'required',
  ]);

    /*dd($request);
     exit(); */

      $data = new media([         
        $file = $request->input('image'),
        $photo = $request->file('image')->getClientOriginalName(),
        $destination = base_path() . '/public/upload',
        $request->file('image')->move($destination, $photo), 

        'titel'=> $request->get('ntitle'),
        'mcontent'=> $request->get('ndescription'),
        'youtube_video'=> $request->get('youtube'),
        'mimages'=> $photo,
        'mediatype'=>$request->get('media'),
    ]);
         
   /*dd($data);
     exit(); */

  $data->save();
  //return redirect()->back();
  return redirect('/viewoceania')->with('success', 'success fully Oceania News');

}

 public function oceaniaview()
 {
       $data = DB::table('media')    
              ->where('mediatype','=','Ocenia')
              ->get();
       return view ('layout.admin.Oceania_zone',compact('data'));  
 }

public function oceaniaDel($id) {
    $deldata=DB::table('media')->where('id',$id)->delete();
    return redirect('/viewoceania')->with('success','Post removed'); 
}



public function OceEdit($id) {

        $data= DB::table('media')
         ->where('media.id', '=', $id)
         ->first(); 
       return view ('layout.admin.edit_oceania',compact('data'));
}


public function Ocupdate(Request $request, $id)
    { 
      $data = media::find($id);
      $data->titel=$request->input('ntitle');
      $data->mcontent=$request->input('ndescription');
      $data->youtube_video=$request->input('youtube');
      $data->mediatype=$request->input('media');
                    
      if($request->hasfile('image')) {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.'. $extension;
        $file->move('./public/upload',$filename);
        $data->mimages = $filename; 
      }

      $data->save();
      $request->session()->flash('message', 'Successfully update Data');
      return redirect('/viewoceania'); 
} 
 






}
