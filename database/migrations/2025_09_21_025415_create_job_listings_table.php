<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    /**
     * Employer relationship
     * A job belongs to an employer
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
