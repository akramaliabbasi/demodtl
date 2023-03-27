<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
   use HasFactory;
   use \OwenIt\Auditing\Auditable;
	protected $table = 'products';


	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'name',
		'price',
		'status',
		'user_id',
		'type'
	];



	//To add a search function to filter products by user and name
	public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%'.$search.'%')
            ->orWhereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%');
            });
    }


   

   public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
