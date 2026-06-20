<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singapore extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'day',
        'is_toto',
        'first_prize',
        'second_prize',
        'third_prize',
        'starter_1',
        'starter_2',
        'starter_3',
        'starter_4',
        'starter_5',
        'starter_6',
        'starter_7',
        'starter_8',
        'starter_9',
        'starter_10',
        'consolation_1',
        'consolation_2',
        'consolation_3',
        'consolation_4',
        'consolation_5',
        'consolation_6',
        'consolation_7',
        'consolation_8',
        'consolation_9',
        'consolation_10',
'winning_number_1',
'winning_number_2',
'winning_number_3',
'winning_number_4',
'winning_number_5',
'winning_number_6',
'additional_number',
'result_toto',
    ];
}
