<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

public function tags()
{
return $this->belongsToMany(\App\Models\Tag::class, foreignPivotKey:
"job_listing_id");
}

    use HasFactory;

    // Each job belongs to one employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
