<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table = 'notices'; 

    protected $primaryKey = 'notice_id'; // Define the custom primary key name if needed

    protected $fillable = [
        'text',
        'title',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
