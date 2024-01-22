<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageuploadRequest;
use App\Models\PropertySale;
use App\Models\SalePropertyImage;
use Illuminate\Http\Request;

class SalePropertyImageController extends Controller
{
    public function index($id)
    {
      
         $property = PropertySale::find($id);
        

        return view('agent_dashboard.images-upload', [
            'property' => $property,
            'property_type'=>'sale'
        ]);
    }

    public function store(ImageuploadRequest $request, $id)
    {
        $cleanData = $request->validated();

        foreach ($cleanData['images'] as $img) {

            $image_url = '/storage/' . $img->store('/sale-property-images');
            SalePropertyImage::create([
                'property_id' => $id,
                'image' => $image_url
            ]);
        }
        return back();
    }

    public function destory(SalePropertyImage $image){
        $image->delete();
        return back();
    }
}
