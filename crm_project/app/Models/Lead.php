<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    
    protected $table = 'leads'; 

    protected $primaryKey = 'lead_id'; // Define the custom primary key name if needed

    protected $fillable = [
        'cl_name',
        'called_at',
        'sell_rate',
        'company_name',
        'd_date',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
