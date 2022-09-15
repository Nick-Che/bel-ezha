<?php

namespace App\Models;

use CodeIgniter\Model;

class WordModel extends Model
{
    protected $table = 'dictionary';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'word',
        'translation',
        'letter',        
        'alias'
    ];
}
