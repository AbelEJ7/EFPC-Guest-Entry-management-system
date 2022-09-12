<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interns extends Model
{
    use HasFactory;
    public function scopeFilter($query,array $filters)
    {
        
         if($filters['search'] ?? false) //if not false do this
        {
           $query->where('fname','like','%' .request('search').'%')
           ->orwhere('lname','like','%' .request('search').'%')
          
           ;
        }
    }
     public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
   
}
