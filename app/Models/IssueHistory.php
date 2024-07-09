<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_id',
        'description'
    ];

    // Relasi banyak ke satu dengan Issue
    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
}
