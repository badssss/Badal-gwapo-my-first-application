<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

function up(): void
{
    Schema::create('job_listings', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('salary');
        $table->unsignedBigInteger('employer_id')->nullable();
        $table->timestamps();
    });
}

