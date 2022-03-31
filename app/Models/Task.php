<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "task";

    // relation to user
    public function user()
    {
        return $this->belongsTo(User::class,"id");
    }

    public function user_grader()
    {
        return $this->belongsTo(User::class,"id");
    }
}
