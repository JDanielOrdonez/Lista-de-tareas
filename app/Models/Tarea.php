<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarea',
        'user_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
