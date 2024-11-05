<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'stores';
    protected $fillable = [
        'name',
        'image',
        'country_id',
        'governorate_id',
        'place',
    ];
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    public function scopeByGovernorateId($query, $governorateId)
    {
        return $query->where('governorate_id', $governorateId);
    }
    public function storeOffersCount()
    {
        return $this->offers()->count();
    }
    public function getStoreOffers()
    {
        return $this->offers()->get();
    }
}
