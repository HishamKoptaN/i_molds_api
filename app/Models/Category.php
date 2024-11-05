<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];
    public static function withOffers()
    {
        return self::with('offers');
    }
    public function offers()
    {
        return $this->hasMany(
            Offer::class,
            'category_id',
        );
    }
    public function offersCount()
    {
        return $this->offers()->count();
    }
}
