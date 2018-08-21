<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\Farm;



class CatalogController extends Controller
{
    

public function index () {

$catalogs = Catalog::all();

$total = Catalog::count();
  
return view('catalogs.index')->with('catalogs',$catalogs)->with('total',$total);


}



public function show ($id) {

$catalog = Catalog::findOrFail($id);

$total_farms = Farm::where('category_id', '=',$id)->get()->count();

$farms = Farm::where('category_id', '=',$id)->paginate(10);

return view('catalogs.show')->with('catalog',$catalog)->with('total_farms',$total_farms)->with('farms',$farms);

}


public function show_farm ($id) {

$farm = Farm::findOrFail($id);

return view('catalogs.show_farm')->with('farm',$farm);

}





}
