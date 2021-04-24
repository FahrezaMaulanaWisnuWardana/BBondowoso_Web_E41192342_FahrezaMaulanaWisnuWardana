<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProfileModel extends Model
{
    public function allData()
    {
        return [
                    [
                        'nim'=>'E41192342',
                        'nama'=>'Fahreza Maulana Wisnu Wardana',
                        'golongan'=>'B Bondowoso'
                    ]
                ];
    }
}
