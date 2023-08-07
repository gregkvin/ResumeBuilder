<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'resume_id',
        'company_name',
        'company_location',
        'start_date',
        'end_date',
        'job_title',
        'description',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
