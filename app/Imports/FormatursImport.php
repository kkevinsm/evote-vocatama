<?php

namespace App\Imports;

use App\Models\Formatur;
use Maatwebsite\Excel\Concerns\ToModel;

class FormatursImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Formatur([
            'nama' => $row[0],
            'asal' => $row[1],
            'visi' => $row[2],
            'misi' => $row[3],
            'image' => 'avatar-4.png',
        ]);
    }
}
