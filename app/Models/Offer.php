<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "status",
        "store_id",
        "category_id",
        "description",
        "image",
        "end_at"
    ];
    public function getDaysRemainingAttribute()
    {
        $endDate = Carbon::parse($this->end_at);
        $today = Carbon::today();
        return $endDate->isFuture() ? $today->diffInDays($endDate) : 0;
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function scopeByGovernorateId($query, $governorateId)
    {
        return $query->whereHas(
            'store',
            function ($query) use ($governorateId) {
                $query->where(
                    'governorate_id',
                    $governorateId,
                );
            },
        );
    }
}
