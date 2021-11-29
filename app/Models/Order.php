<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'total_price',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function shopUser()
    {
        return $this->belongsTo(ShopUser::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product__order_relation', 'product_id', 'order_id');
    }
}
