<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'applied_users';

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function jobs()
    {
        return $this->belongsTo(Job::class,'job_id');
    }
}
