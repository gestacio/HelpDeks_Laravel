<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'department_id',
        'priority_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
        
    public function department()
    {
        // return $this->hasMany(Post::class);
        return $this->belongsTo(Department::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
}
