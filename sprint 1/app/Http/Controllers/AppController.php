<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function beranda() //controller beranda
    {
        $data = [
            'title' => 'Beranda',
            'id_page' => 1,
        ];
        return view('beranda', $data);
    }

    public function konsultasi() //controller konsultasi
    {
        $data = [
            'title' => 'Konsultasi',
            'id_page' => 2,
        ];

        return view('konsultasi', $data);
    }

    public function toko() //controller toko
    {
        $data = [
            'title' => 'Toko',
            'id_page' => 3,
        ];

        return view('toko', $data);
    }

    public function profile() //controller profile
    {
        $data = [
            'title' => 'Profile',
            'id_page' => 4,
        ];

        return view('profile', $data);
    }

    public function upgrade_role() //controller upgrade role
    {
        $data = [
            'title' => 'Upgrade Role',
            'id_page' => 5,
        ];

        return view('upgrade_role', $data);
    }

    public function edit_profile($id) //controller edit profile
    {
        $data = [
            'title' => 'Edit Profile',
            'id_page' => 6,
            'user' => User::find($id),
        ];

        return view('edit_profile', $data);
    }

    public function update_profile(Request $req, $id) //controller update profile
    {
        $user = User::find($id);

        if ($req->filled(['name', 'username', 'alamat', 'no_hp'])) {

            $user->name = $req->name;
            $user->username = $req->username;
            $user->alamat = $req->alamat;
            $user->no_hp = $req->no_hp;

            $user->save();

            return redirect()->route('profile')->with('success', 'Berhasil merubah data');
        } else {
            return redirect()->back()->with('warning', 'Pastikan kolom tidak kosong!');
        }
    }

    public function data_pelanggan() //controller data pelanggan
    {
        $data = [
            'title' => 'Data Pelanggan',
            'id_page' => 7,
            'users' => User::where('role', '=', 'pelanggan')->get(),
        ];

        return view('users', $data);
    }

    public function data_peternak() //controller data peternak
    {
        $data = [
            'title' => 'Data Peternak',
            'id_page' => 8,
            'users' => User::where('role', '=', 'peternak')->get(),
        ];

        return view('users', $data);
    }

    public function data_dokter() //controller data dokter
    {
        $data = [
            'title' => 'Data Dokter',
            'id_page' => 9,
            'users' => User::where('role', '=', 'dokter')->get(),
        ];

        return view('users', $data);
    }

    public function change_role() //controller change role
    {
        $data = [
            'title' => 'Change Role',
            'id_page' => 10,
            'users' => User::where('role', '!=', 'admin')->get()
        ];

        return view('changerole', $data);
    }


    public function update_role($id, Request $request) //controller update role
    {
        if ($request->filled('role')) {
            $user = User::find($id);
            $user->role = $request->role;

            $user->save();

            return redirect()->back()->with('success', 'Role user berhasil diupdate!');
        } else {
            return redirect()->back()->with('warning', 'Inputan tidak boleh kosong!');
        }
    }

    public function hapus_user($id) //controller hapus user
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back()->with('info', 'Satu user berhasil dihapus!');
    }
}
