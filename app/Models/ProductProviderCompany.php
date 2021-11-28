<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProviderCompany extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_provider_company';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'cif',
    ];

    public function contactPersonProviders()
    {
        return $this->hasMany(ContactPersonProvider::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product__product_provider_company', 'product_id', 'provider_company_id');
    }
}
