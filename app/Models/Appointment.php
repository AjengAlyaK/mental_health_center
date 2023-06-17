<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'user_id', 'email', 'tanggal', 'dokter', 'phone', 'pesan', 'status'
    ];

    public function user()
    {
                            // nama model reference
        return $this->belongsTo(User::class);
        // return $this->belongsTo(classRoom::class, 'foreign_key', 'other_key');
    }
}
