<?php

namespace App\Models;

class Model1
{
    public static $data = [
        [
            'nama' => 'iqbal'
            ,'id' => '001'
            ,'jk' => 'laki-laki'
            ,'fakultas' => 'ilmu komputer'
        ],
        [
            'nama' => 'agus'
            ,'id' => '002'
            ,'jk' => 'laki-laki'
            ,'fakultas' => 'ilmu komputer'
        ],
        [
            'nama' => 'raynaldi'
            ,'id' => '003'
            ,'jk' => 'laki-laki'
            ,'fakultas' => 'ilmu komputer'
        ],
        [
            'nama' => 'bagus'
            ,'id' => '004'
            ,'jk' => 'laki-laki'
            ,'fakultas' => 'ilmu komputer'
        ]
    ];
    public static function all()
    {
        return collect(self::$data);
    }

    public static function find($a)
    {
        return static::all()->firstWhere('id', $a);
    }

}
