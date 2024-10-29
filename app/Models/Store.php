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
        'governorate_id',
    ];
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
    public function scopeByGovernorateId($query, $governorateId)
    {
        return $query->where('governorate_id', $governorateId);
    }
}
