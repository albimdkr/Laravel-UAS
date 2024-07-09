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
        'start_date',
        'end_date'
    ];

    // Relasi banyak ke satu dengan Client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // Relasi satu ke banyak dengan IssueHistory
    public function issueHistories()
    {
        return $this->hasMany(IssueHistory::class);
    }
}

