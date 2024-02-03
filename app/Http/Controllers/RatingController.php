<?php

namespace App\Http\Controllers;

use App\Models\PropertyRent;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function rate($id)
    {
        $property = PropertyRent::find($id);

        //user_input_rate 
        $rate = request()->rating;

        //check user already rating 
        $user_exit = auth()->user()->isRating($property);

        //get old rating from pivot table 
        $old_rating = $user_exit ? $property->oldRating() : false;

        //new rating from input star
        $new_rating = $rate;

        //if alredy give then check old and new rating is the same
        $is_same_rating = ($new_rating == $old_rating);

        //current user
        $curr_user = auth()->user()->id;

        if ($user_exit && $is_same_rating) {
            //same user, same rating so unplugged
            $property->ratedUsers()->detach($curr_user);
            $property->rating -= $old_rating;
        } else if ($user_exit) {
            //same user ,different rating ,so need to moderate rating
            $property->ratedUsers()->updateExistingPivot($curr_user, ['rate' => $new_rating]);
            $property->reduceAndAddRating($old_rating,$new_rating);
        } else { 
            //new user, so plug in and add rating
            $property->ratedUsers()->attach($curr_user);
            $property->ratedUsers()->updateExistingPivot($curr_user, ['rate' => $new_rating]);
            $property->addRating($new_rating);
        }
        $property->update();
        return back();
    }
}
