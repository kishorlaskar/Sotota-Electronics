<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Brand;
class BrandController extends Controller
{
    public function addBrand()
    {
    	return view ('admin.Brand.add-brand');
    }
    public function saveBrand(Request $request)
    {
      $this->validate($request, [
        'brand_name' => 'required|regex:/^[\pL\s\-]+$/u',
        'brand_description' => 'required|regex:/^[\pL\s\-]+$/u',
        'publication_status'=>'required'
    ]);
      

          $brand = new Brand();
          $brand->brand_name = $request->brand_name;
          $brand->brand_description = $request->brand_description;
          $brand->publication_status = $request->publication_status;
          $brand->save();
         

        return redirect('/add-brand')->with('message','Brand info save sucessfully');
          
          //Catagorey::create($request->all);
          //Query Builder Process
          // DB::table('catagoreys')->insert([
          //   'catagorey_name' = $request->catagorey_name;
          //  'catagorey_description' = $request->catagorey_description;
          // 'publication_status' = $request->publication_status;


          // ]);
    }

    public function manageBrand()
    {
      $brands = Brand::all();
    	return view ('admin.Brand.manage-brand',['brands' => $brands]);
    }
    public function unpublishBrand($brand_id)
    {
        $brand = Brand::find($brand_id);
        $brand->publication_status = 0;
        $brand->save();

        return redirect('/manage-brand')->with('message','Brand is Unpublished');

    }
     public function publishBrand($brand_id)
    {
        $brand = Brand::find($brand_id);
        $brand->publication_status = 1;
        $brand->save();
        return redirect('/manage-brand')->with('message','Brand is Published');

    }

    public function editBrand($brand_id)
    {

        $brand = Brand::find($brand_id);
        return view('admin.Brand.edit-brand',['brand'=>$brand]);
    }
    public function updateBrand(Request $request)
    {
        $brand =  Brand::find($request->id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/manage-brand')->with('message','Brand Update Sucessfully');
    }
  public  function deleteBrand($brand_id)
  {

     $brand = Brand::find($brand_id);
     $brand->delete();

     return redirect('/manage-brand')->with('message','Brand info Delete Sucessfully');
   }

}
