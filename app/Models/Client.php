<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'manage_scope',
        'contact_name',
        'contact_email',
        'contact_phone'
    ];

    // Relasi satu ke banyak dengan Issue
    public function issues()
    {
        return $this->hasMany(Issue::class);
    }
}

