<?php

namespace App\Models;

use CodeIgniter\Model;

class QrModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'qr';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['rekening', 'user_id'];
    protected $validationRules = [
        'rekening' => 'required',
        'user_id' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\UserModel', 'user_id');
    }
}
