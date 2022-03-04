<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qustion extends Model
{
    use HasFactory;
protected $table = 'qustions';
protected $fillable =[
            'qustion',
            'answer_id'
            ];
}
