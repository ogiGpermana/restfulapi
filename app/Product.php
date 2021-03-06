<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	const 	AVAILABLE_PRODUCT = 'available';
	const 	UNAVAILABLE_PRODUCT = 'unavailable';

    protected $fillsble = [
    	'name',
    	'desciption',
    	'quantity',
    	'status',
    	'image',
    	'seller_id'
    ];

    public function isAvailable()
    {
    	return $this->status = Product::AVAILABLE_PRODUCT;
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
