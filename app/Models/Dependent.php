<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dependent extends Model
{
    use HasFactory;

    protected $primaryKey = 'dependent_id';
    public $incrementing = true; 
    protected $keyType = 'integer';
    public $timestamps = false; 

    protected $fillable = [
        'first_name',
        'last_name',
        'relationship',
        'employee_id',
    ];


    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}