<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Catalog;
use App\Farm;
use Auth;
use Image;
use App\User;
use Carbon\Carbon;

class ManagerController extends Controller
{
    

public function __construct()
    {
        $this->middleware('auth');
    }

 

    public function index () {
     $user = Auth::user();
     return view('manager.index')->with('user', $user);
    }


    public function profile () {
        $user = Auth::user();
        return view('manager.profile')->with('user', $user);

    }

   
   public function update(Request $request) {
    
     $user_id = $request->get('user_id');
     $user = User::where( 'id', '=', $user_id )->first();
     $user->email=$request->get('email'); 
     $user->name =$request->get('name'); 
     $user->save();
   
   return view('manager.index')->with('user', $user);

   }



   public function add_farm() {

       $catalogs = Catalog::all();
       $farms = Farm::all(); 
       return view('manager.add_farm')->with('farms', $farms)->with('catalogs', $catalogs);

   }


 public function post_farm(Request $request) {
 
 if( $request->hasFile('picture')) { 
  $farm = new Farm;
  $image = $request->file('picture');
  $filename = time() . '.' . $image->getClientOriginalExtension();
  Image::make($image)->resize(300, 300)->insert($image, 'center', 10, 10)->text('FARMS', 120, 100, function($font) {  

          $font->file(public_path('fonts/Scream Real.ttf'));  

          $font->size(28);  

          $font->color('#e1e1e1');  

          $font->align('center');  

          $font->valign('bottom');  

          $font->angle(90);  

      })->save( public_path('images/' . $filename ) );

  $farm->picture  = $filename; 	
  $farm->name = $request->get('name'); 
  $farm->category_id  = $request->get('category_id'); 
  $farm->price  = $request->get('price'); 
  $farm->producer  = $request->get('producer'); 
  $farm->due  = Carbon::now(); 
  $farm->save(); 
  }

  return \Redirect::route('profile')->with('message', 'Препарат добавлен');

}












}
