<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;
use App\Models\CabangModel;
use Illuminate\Support\Str;

class KaryawanController extends Controller
{
    //
    function getAll($inputSuccess = '')
    {
        $karyawan = new KaryawanModel();
        $rows = $karyawan->getAll();
        return view('tabel/v_tabelkaryawan', [
            'rows' => $rows->toArray(),
            'inputSuccess' => $inputSuccess]);
    }

    function formData($alert = [])
    {
        $kategori = new CabangModel();
        $rows = $kategori->getCabangNama();
        return view('form/vf_karyawan', [
            'alert' => $alert,
            'cabang' => $rows
        ]);
    }

    function insertData(Request $request)
    {
        $karyawan = new KaryawanModel;
        $inputSuccess = '';

        //form validation
        $validated = $request->validate([
            'ktp' => 'required|min:16|max:16',
            'username' => 'required',
            'email' => 'required',
            'cabang' => 'required',
            'nama' => 'required',
            'telp' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $data = [
            'username' => $request->input('username'),
            'ktp' => $request->input('ktp'),
            'email' => $request->input('email'),
            'cabang' => $request->input('cabang'),
            'nama' => $request->input('nama'),
            'telp' => $request->input('telp'),
            'alamat' => $request->input('alamat'),
            'password' => Str::random(10)
        ];

        $cekUsername = $karyawan->usernameExist($data['username']);
        $cekEmail = $karyawan->emailExist($data['email']);
        $cekKtp = $karyawan->ktpExist($data['ktp']);
    
        //cek keunikan username dan email
        if ($cekUsername || $cekEmail || $cekKtp) 
        {
            $alert = [
                'username' => 0,
                'email' => 0
            ];
            if ($cekUsername) $alert['username'] = 1;
            if ($cekEmail) $alert['email'] = 1;
            if ($cekKtp) $alert['ktp'] = 1;
            return $this->formData($alert);
        }
        else
        {   
            $process = $karyawan->insert($data);
            if ($process[0] && $process[1])
            {
                $inputSuccess = 'success';
            }
            else
            {
                $inputSuccess = 'failed';
            }

        }
        return $this->getAll($inputSuccess);
    }
}
