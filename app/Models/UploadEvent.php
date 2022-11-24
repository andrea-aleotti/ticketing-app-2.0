<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventName',
        'eventPrice',
        'eventDescription',
        'eventPlace',
        'eventTime',
        'eventDate'
    ];

    public $timestamps = false;
}
