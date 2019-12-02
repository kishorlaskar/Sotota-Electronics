<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagorey;
use DB;

class CatagoreyController extends Controller
{
    public function addCatagorey()
    {
    	return view ('admin.Catagorey.add-catagorey');
    }
    public function savecatagorey(Request $request)
    {
          $catagorey = new Catagorey();
          $catagorey->catagorey_name = $request->catagorey_name;
          $catagorey->catagorey_description = $request->catagorey_description;
          $catagorey->publication_status = $request->publication_status;
          $catagorey->save();

        return redirect('/add-catagorey')->with('message','Catagorey info save sucessfully');
          
          //Catagorey::create($request->all);
          //Query Builder Process
          // DB::table('catagoreys')->insert([
          //   'catagorey_name' = $request->catagorey_name;
          //  'catagorey_description' = $request->catagorey_description;
          // 'publication_status' = $request->publication_status;


          // ]);
    }

    public function manageCatagorey()
    {
      $catagoreys = Catagorey::all();
    	return view ('admin.Catagorey.manage-catagorey',['catagoreys' => $catagoreys]);
    }
    public function unpublishCatagorey($id)
    {
        $catagorey = Catagorey::find($id);
        $catagorey->publication_status = 0;
        $catagorey->save();

        return redirect('/manage-catagorey')->with('message','Catagorey is Unpublished');

    }
     public function publishCatagorey($id)
    {
        $catagorey = Catagorey::find($id);
        $catagorey->publication_status = 1;
        $catagorey->save();

        return redirect('/manage-catagorey')->with('message','Catagorey is Published');

    }

    public function editCatagorey($id)
    {
        $catagorey = Catagorey::find($id);
        return view('admin.catagorey.edit-catagorey',['catagorey'=>$catagorey]);
    }
    public function updateCatagorey(Request $request)
    {
        $catagorey =  Catagorey::find($request->id);
        $catagorey->catagorey_name = $request->catagorey_name;
        $catagorey->catagorey_description = $request->catagorey_description;
        $catagorey->publication_status = $request->publication_status;
        $catagorey->save();

        return redirect('/manage-catagorey')->with('message','Catagorey Update Sucessfully');
    }
  public  function deleteCatagorey($id)
  {

     $catagorey = Catagorey::find($id);
     $catagorey->delete();

     return redirect('/manage-catagorey')->with('message','Catagorey info Delete Sucessfully');
   }


}
