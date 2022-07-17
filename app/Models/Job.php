<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['job_name', 'job_category', 'job_desc', 'job_location', 'more_info', 'job_pay'];
    protected $table = 'created_jobs';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
