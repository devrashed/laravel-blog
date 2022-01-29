<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use DB;


class Carticle extends Controller
{
   
public function index() 
  {
    
    
           
 }


public function arview() 
  {
       $data = article::paginate(20);
       return view ('layout.admin.view_article',compact('data'));          
  }

        
   public function articleEdit($id)    {
       
        $data= DB::table('article')
         ->where('article.id', '=', $id)
         ->first(); 

     /*  dd($photo);
       die();*/
       return view ('layout.admin.edit_article',compact('data'));
    }


  public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = article::find($id);
        /*var_dump($data);
        die();*/
        $data->update($input);
        $request->session()->flash('message', 'Successfully update Data');
        return redirect('articleview'); 

    }


}




