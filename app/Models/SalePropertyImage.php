<?php

namespace App\Models;

use App\Http\Requests\ImageuploadRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalePropertyImage extends Model
{
    use HasFactory;
    public function saleProperty()
    {
        return $this->belongsTo(PropertySale::class, 'property_id');
    }

    public function index($id)
    {
        $curr_routes = url()->current();
        $isSale = str_contains($curr_routes, 'sale');
        if ($isSale) {
            $property = PropertySale::find($id);
        }

        return view('agent_dashboard.images-upload', [
            'property' => $property
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
