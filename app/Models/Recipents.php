<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipents extends Model
{
    use HasFactory;
     public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
     public function scopeFilter($query,array $filters)
    {
        
         if($filters['search'] ?? false) //if not false do this
        {
           $query->where('fname','like','%' .request('search').'%')
           ->orwhere('lname','like','%' .request('search').'%')
           ->orwhere('id_number','like','%' .request('search').'%')
            ->orwhere('job_position','like','%' .request('search').'%')
           ;
        }
    }
}
