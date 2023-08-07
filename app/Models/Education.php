<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'resume_id',
        'school_name',
        'school_location',
        'start_date',
        'end_date',
        'degree',
    ];
    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

    protected $dates = ['start_date', 'end_date'];

}
