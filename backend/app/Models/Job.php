<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_offers'; // Specify the custom table name

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
        'category',       // Include the category field
        'recruiter_id',   // Link the job offer to a recruiter
    ];

    /**
     * Define a relationship to the User model (Recruiter).
     */
    public function recruiter()
    {
        return $this->belongsTo(User::class, 'recruiter_id');
    }

    /*
     * Define a relationship to the applications (if you implement a job applications table).
    
    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }*/
} 
