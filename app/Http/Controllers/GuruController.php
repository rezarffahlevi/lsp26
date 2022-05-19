<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->Guru = new Guru();
    }

    public function index()
    {
        $data = [
            'guru' => $this->Guru->allData(),
        ];
        return view('guru.index', $data);
    }

    public function create()
    {
        return view('guru.create');
    }

    public function insert()
    {
        Request()->validate([
            'nama' => 'required',
            'nip' => 'required|int|min:7',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'photo' => ''
        ]);
        $data = [
            'nama' => Request()->nama,
            'nip' => Request()->nip,
            'jabatan' => Request()->jabatan,
            'pendidikan' => Request()->pendidikan,
            'tempat_lahir' =>  Request()->tempat_lahir,
            'tanggal_lahir' =>  Request()->tanggal_lahir,
            'agama' =>  Request()->agama,
            'telp' =>  Request()->telp,
            'alamat' =>  Request()->alamat,
            'photo' => 'imageuser.jpg'
        ];
        $this->Guru->add($data);
        return redirect('/guru')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        $data = [
            'guru' => $this->Guru->detailData($id),
        ];
        return view('guru.edit', ['guru' => $guru, 'data' => $data]);
    }

    public function update($id)
    {
        Request()->validate([
            'nama' => 'required',
            'nip' => 'required|int|min:7',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'photo' => ''
        ]);
        $data = [
            'nama' => Request()->nama,
            'nip' => Request()->nip,
            'jabatan' => Request()->jabatan,
            'pendidikan' => Request()->pendidikan,
            'tempat_lahir' =>  Request()->tempat_lahir,
            'tanggal_lahir' =>  Request()->tanggal_lahir,
            'agama' =>  Request()->agama,
            'telp' =>  Request()->telp,
            'alamat' =>  Request()->alamat,
            'photo' => 'imageuser.jpg'
        ];
        $this->Guru->updateData($id, $data);
        return redirect('/guru')->with('pesan', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $guru = Guru::findOrfail($id);
        $guru->delete();
        return redirect('/guru')->with('pesan', 'Data berhasil dihapus');
    }

    public function profile($id)
    {
        $guru = Guru::find($id);
        $data = [
            'guru' => $this->Guru->detailData($id),
        ];
        return view('guru.profile', ['guru' => $guru, 'data' => $data]);
    }
}
