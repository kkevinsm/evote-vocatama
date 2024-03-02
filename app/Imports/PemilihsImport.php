<?php

namespace App\Imports;

use App\Models\Pemilih;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class PemilihsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        function generateRandomString($length = 8) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $username = generateRandomString(4);
        $password = generateRandomString(4);

        User::create([
            'name' => $row[0],
            'asal' => $row[1],
            'role_id' => 2,
            'username' => $username,
            'pass' => $password,
            'password' => Hash::make($password),
            'status' => 1,
        ]);

        return new Pemilih([
            'nama' => $row[0],
            'asal' => $row[1],
            'username' => $username,
            'pass' => $password,
            'status' => 1,
        ]);
    }
}
