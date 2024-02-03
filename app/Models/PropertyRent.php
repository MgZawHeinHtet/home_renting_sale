<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRent extends Model
{
    use HasFactory;

    public function rentReview(){
        return $this->hasMany(RentReview::class,'property_id');
    }
    public function booking(){
        return $this->hasMany(booking::class,'property_id');
    }

    public function agent(){
        return $this->belongsTo(User::class,'agent_id');
    }

    public function rentPropertyImage(){
        return $this->hasMany(RentPropertyImage::class,'property_id');
    }
    public function scopeFilter($propertyQuery,$request){
        

        if($search_input = $request['search_input'] ?? null)
        {
            $propertyQuery->where(function($query) use ($search_input){
                $query->where('title','LIKE','%'.$search_input."%")
                ->orWhere('region','LIKE','%'.$search_input."%")
                ->orWhere('township','LIKE','%'.$search_input."%");
            });
        }
    }

    public function ratedUsers(){
        return $this->belongsToMany(User::class);
    }


    public function oldRating()
    {
        return $this->belongsToMany(User::class)->withPivot('rate')->first()->pivot->rate;
    }

    public function addRating($value){
        $this->rating += $value;
        $this->avg_rating = $this->getAvgRating();
    }

    public function reduceRating($value){
        $this->rating-= $value;
        $this->avg_rating = $this->getAvgRating();
    }

    public function reduceAndAddRating($old,$new){
        $this->reduceRating($old);
        $this->addRating($new);
    }
    public function getAvgRating(){
        //plus 1 for count defaut 
        return $this->rating / ($this->ratedUsers->count()+1);
    }

}
