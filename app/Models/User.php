<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'company_name',
        'company_logo',
        'phone',
        'address'
    ];

    protected $guarded = [
        'id'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function propertySale(){
        return $this->hasMany(PropertySale::class,'agent_id');
    }

    public function propertyRent(){
        return $this->hasMany(PropertyRent::class,'agent_id');
    }
    public function newsComment(){
        return $this->hasMany(NewsComment::class);
    }

    public function enquries(){
        return $this->hasMany(Enquiry::class,'agent_id');
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class,'recipent_id');
    }

    public function savedSaleProperties(){
        return $this->belongsToMany(PropertySale::class);
    }

    public function likedNews(){
        return $this->belongsToMany(News::class);
    }

    public function isSavedProperties($property){
        return $this->savedSaleProperties->contains('id',$property->id);
    }

    public function isLike($new){
        return $this->likedNews->contains('id',$new->id);
    }

    public function creditTranscation(){
        return $this->hasMany(CreditTranscation::class);
    }

    public function bookings(){
        return $this->hasMany(booking::class);
    }

    public function ratedProducts()
    {
        return $this->belongsToMany(PropertyRent::class);
    }

    public function isRating($property)
    {
        return $this->ratedProducts->contains('id', $property->id);
    }
    public function userRatingOnProduct($id)
    {
        return $this->ratedProducts()->withPivot('rate')->where('property_rent_id', $id)->first()?->pivot->rate;
    }

    public function scopeFilter($propertyQuery,$request){
       
        if($search_input = $request ?? null)
        {
           
            $propertyQuery->where(function($query) use ($search_input){
                $query->where('company_name','LIKE','%'.$search_input."%")
                ->orWhere('name','LIKE','%'.$search_input."%");

            });
        } 
    }

    public function ownProperties(){
        return $this->hasMany(PropertySale::class,'owner_id');
    }
    
}

