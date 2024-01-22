<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageuploadRequest;
use App\Models\PropertyRent;
use App\Models\RentPropertyImage;
use Illuminate\Http\Request;

class RentPropertyImageController extends Controller
{
    public function index(PropertyRent $property){
        return view('agent_dashboard.images-upload',[
            'property'=> $property,
            'property_type'=>'rent'
        ]);
    }

    public function store(ImageuploadRequest $request, $id)
    {
        $cleanData = $request->validated();

        foreach ($cleanData['images'] as $img) {

            $image_url = '/storage/' . $img->store('/rent-property-images');
            RentPropertyImage::create([
                'property_id' => $id,
                'image' => $image_url
            ]);
        }
        return back();
    }

    public function destory($id){
        $image = RentPropertyImage::find($id);
        $image->delete();
        return back();
    }
}
