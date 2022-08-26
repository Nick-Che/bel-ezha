<?php

namespace App\Models;

use CodeIgniter\Model;

class WordModel extends Model
{
    protected $table = 'dictionary';

    protected $allowedFields = [
        'word',
        'translation',
        'letter',
        'meaning',
        'alias'
    ];
}
