<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'visible',
    ];

    //converte qlqr tipo para boolean direto no banco.
    protected $casts = [
        'visible' => 'boolean'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}