<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        return $value ? Carbon::parse($value) : null;
    }

    // Convert date_end_tshoot to DateTime object
    public function getDateEndTshootAttribute($value)
    {
        return $value ? Carbon::parse($value) : null;
    }

    // Define relationship to Client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Accessor to determine the CSS class for the status
    public function getStatusClassAttribute()
    {
        switch ($this->status) {
            case 'Open':
                return 'bg-info text-white';
            case 'In Progress':
                return 'bg-warning text-white';
            case 'Pending':
                return 'bg-danger text-white';
            case 'Closed':
                return 'bg-success text-white';
            default:
                return 'bg-light text-dark';
        }
    }
}
