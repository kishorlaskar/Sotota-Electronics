<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use  Image;
use DB;

class SliderController extends Controller
{
    public function addSlider()
    {
    	return view('admin.slider.slider');
    }
     protected function sliderImageUpload($request)
    {
        $sliderImage = $request->file('slider_image');
        $filetype = $sliderImage->getClientOriginalExtension();
        
        $name = $sliderImage->getClientOriginalName();
        $imageName = $name.'.'.$filetype;
        $directory = 'slider-images/';
        // Storage::disk('local')->makeDirectory('slider-images/' . $);
        $imageUrl = $directory.$imageName;
        Image::make($sliderImage)->resize(1700,600)->save($imageUrl);
        return $imageUrl;
    }
    protected function sliderInfoValidate($request)
    {
       $this->validate($request, [
    'slider_image' => 'required',
    'status' =>'required'
    ]);
  
    }
    protected function saveSliderInfo($request, $imageUrl)
    {
        
        $slider =  new Slider();
        $slider->slider_image = $imageUrl;
        $slider->status = $request->status;
        $slider->save();
    } 
    public function saveSlider(Request $request)
    {
        $this->sliderInfoValidate($request);
        $imageUrl = $this->sliderImageUpload($request);
        $this->saveSliderInfo($request, $imageUrl);
        return redirect('/add-slider')->with('message','Slider info saved');
       
       //return 'sucess';
    	 
    }
    public function manageSlider()
    {
        $sliders = DB::table('sliders')
                  ->select('sliders.*')
                  ->get();
                  return view('admin.slider.manage-slider',['sliders' => $sliders]);
    }
  
    public function editSlider($id)
    {

        $slider = Slider::find($id);
        return view('admin.slider.edit-slider',[
            'slider'   => $slider,
          
                    ]);

    }
    public function unpublishSlider($id)
    {
        $slider = Slider::find($id);
        $slider->status = 0;
        $slider->save();

        return redirect('/manage-slider')->with('message','Slider is Unpublished');

    }
      public function publishSlider($id)
    {
        $slider = Slider::find($id);
        $slider->status = 1;
        $slider->save();

        return redirect('/manage-slider')->with('message','Slider is published');

    }
    public function sliderBasicInfoUpdate($slider,$request,$imageUrl=null)
    {

      
        if($imageUrl)
        {
            $slider->slider_image =$imageUrl;
        }
       // $product->publication_status = $request->publication_status;
        $slider->save();
       
    }
      public function updateSlider(Request $request)
    
    {
         $sliderImage = $request->file('slider_image');
         $slider =  Slider::find($request->id);
       //  $this->productBasicInfoUpdate($product,$request,$imageUrl);
         if($sliderImage)
         { 
            unlink($slider->slider_image);

            $imageUrl = $this->sliderImageUpload($request);
            $this->sliderBasicInfoUpdate($slider,$request,$imageUrl);

         }
    else
    {
        $this->sliderBasicInfoUpdate($slider,$request);
    }
return redirect('/manage-slider')->with('message','Slider Update Sucessfully');
    
}
  public  function deleteSlider($id)
  {
      $slider = Slider::find($id);
      unlink($slider->slider_image);
      $slider->delete();

    return redirect('/manage-slider')->with('message','Slider info Delete Sucessfully');
   }
}
