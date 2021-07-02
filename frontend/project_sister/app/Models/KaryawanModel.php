<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class KaryawanModel extends Model
{
    use HasFactory;

    function getAll()
    {
        $data = DB::table('karyawan')
                ->join('users', 'users.id', '=', 'karyawan.user_id')
                ->join('cabang', 'cabang.id', '=', 'karyawan.cabang_id')
                ->select('karyawan.*', 'users.*', 'cabang.nama as cabang_nama', 'cabang.id as cabang_id')
                ->orderBy('karyawan.nama')
                ->get();
        return $data;
    }

    function insert($data)
    {
        $result = [];
    
        $result[1] = DB::insert('insert into users 
            (id, email, password, role_id, created_at, updated_at)
            values (?, ?, ?, ?, ?, ?)', [
            $data['username'],
            $data['email'], 
            $data['password'], 
            1, 
            date('Y-m-d'),
            date('Y-m-d')]);

        $result[0] = DB::insert('insert into karyawan 
            (ktp, user_id, cabang_id, nama, telp, alamat) 
            values (?, ?, ?, ?, ?, ?)', [
            $data['ktp'],
            $data['username'], 
            $data['cabang'],
            $data['nama'], 
            $data['telp'], 
            $data['alamat']]);


        return $result;
        /* CARA 2
        DB::table('produk')->insert([
            'kategori_id' => $data['kategori'],
            'nama' => $data['nama'],
            'stok' => $data['stok'],
            'harga' => $data['harga']
        ]);
        */
    }



    function usernameExist($username) 
    {
        $result = DB::table('users')
                ->select('*')
                ->where('id', '=', $username)
                ->first();
        return $result;
    }
    function emailExist($email) 
    {
        $result = DB::table('users')
                ->select('*')
                ->where('email', '=', $email)
                ->first();
        return $result;
    }
    function ktpExist($ktp)
    {
        
        $result = DB::table('karyawan')
                ->select('*')
                ->where('ktp', '=', $ktp)
                ->first();
        return $result;
    }
}
