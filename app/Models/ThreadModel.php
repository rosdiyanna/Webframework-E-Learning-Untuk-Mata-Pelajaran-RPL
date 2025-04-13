<?php

namespace App\Models;

use CodeIgniter\Model;

class ThreadModel extends Model
{
    protected $table = 'threads';
    protected $primaryKey = 'id';
    protected $allowedFields = ['author_name', 'title', 'content'];
}
