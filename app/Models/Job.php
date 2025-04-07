<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;

    protected $primaryKey = 'job_id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false; 

    protected $fillable = [
        'job_title',
        'min_salary',
        'max_salary',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}