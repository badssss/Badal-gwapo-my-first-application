<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    protected $fillable = ['title', 'salary', 'employer_id'];
    
    // Add this relationship
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
