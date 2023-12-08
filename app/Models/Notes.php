<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'note',
        'isReminder'
    ];
    protected $guarded = [
        'id'
    ];
}
