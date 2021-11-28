<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Product';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
    ];

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class, 'product__product_category', 'product_category_id', 'product_id');
    }

    public function productProviderCompanies()
    {
        return $this->belongsToMany(ProductProviderCompany::class, 'product__product_provider_company', 'provider_company_id', 'product_id');
    }

    public function shops()
    {
        return $this->belongsToMany(Shop::class, 'product__shop', 'shop_id', 'product_id');
    }

    public function Orders()
    {
        return $this->belongsToMany(Order::class, 'product__order_relation', 'order_id', 'product_id');
    }
}
