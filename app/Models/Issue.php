<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'issue',
        'status',
        'date_start_tshoot',
        'date_end_tshoot',
    ];

    // Convert date_start_tshoot to DateTime object
    public function getDateStartTshootAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value) : null;
    }

    // Convert date_end_tshoot to DateTime object
    public function getDateEndTshootAttribute($value)
    {
        return $value ? \Carbon\Carbon::parse($value) : null;
    }

    // Define relationship to Client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

