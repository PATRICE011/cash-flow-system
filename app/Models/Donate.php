<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;

    protected $table = 'donations'; 

    // Define which attributes are mass assignable
    protected $fillable = [
        'contributor_name', // Add this line
        'amount',
        'date',
        'description',
        'mode_used',
    ];
}
