<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    /**
     * Relasi: Satu Customer memiliki banyak Reservasi
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
