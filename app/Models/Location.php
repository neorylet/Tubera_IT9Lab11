<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    protected $primaryKey = 'location_id';
    public $incrementing = true; 
    protected $keyType = 'integer';
    public $timestamps = false; 

    protected $fillable = [
        'street_address',
        'postal_code',
        'city',
        'state_province',
        'country_id',
    ];
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}