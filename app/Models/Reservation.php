<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $casts = [
        'res_date' => 'datetime',
    ];

    protected $fillable = ['first_name', 'last_name', 'phone', 'email', 'table_id', 'res_date', 'guest_number'];

    use HasFactory;

    protected $dates = [
        'res_dates',
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
