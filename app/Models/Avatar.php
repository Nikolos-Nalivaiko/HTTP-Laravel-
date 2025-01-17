<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'path',
        'filename',
        'mime_type',
        'size'
    ];

    public function user() {

        return $this->belongsTo(User::class);

    }


}
