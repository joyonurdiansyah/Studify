<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\dataKaryawan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class controllerUsers extends Controller
{
    // tambah table hobi
    // tambah table pendaftaran
    // bikin session hapus

    public function indexuser()
    {
        // compact semua data User
        // user::all tidak bisa di satukan dengan paginate
        // $data = User::all();
        $data = User::paginate(6);
        return view('pages.users', compact('data'));
    }

    // search by no_hp, alamat, email
    public function search_users(Request $request)
    {
        $keyword = $request->input('keyword');
        $data = User::where('name', 'LIKE', "%$keyword%")
            ->orWhere('no_hp', 'LIKE', "%$keyword%")
            ->orWhere('alamat', 'LIKE', "%$keyword%")
            ->orWhere('email', 'LIKE', "%$keyword%")
            ->paginate(10);

        return view('pages.users', compact('data'));
    }

    public function get_tambah_users()
    {
        return view('pages.add');
    }

    public function tambah_users(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|max:150',
            'email' => 'required|email',
        ]);

        $simpan = new User();
        $simpan->name = $request->name;
        $simpan->no_hp = $request->no_hp;
        $simpan->alamat = $request->alamat;
        $simpan->email = $request->email;
        $simpan->password = Hash::make($request->password);

        $simpan->save();
        return redirect()->back()->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    public function get_edit_users($id)
    {
        $user = User::find($id);
        return view('pages.edit', compact('user', 'id'));
    }

    public function update_data_users(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'no_hp' => 'required|numeric',
            'alamat' => 'required|max:150',
            'email' => 'required|email',
        ]);

        $simpan = User::find($request->id);
        $simpan->name = $request->name;
        $simpan->no_hp = $request->no_hp;
        $simpan->alamat = $request->alamat;
        $simpan->email = $request->email;

        $simpan->update();

        if ($simpan) {
            return redirect()->back()->with('success', 'User updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update user');
        }

        // dd($simpan);
    }


    public function hapus_user($id)
    {
        $dataUser = User::find($id);
        $dataUser->delete();
        return redirect()->back()->with('success', 'data telah terhapus');
    }

    // break point untuk data tables dan jquery

    public function getDataKaryawan()
    {
        $users = User::all();
        return view('karyawan.index', compact('users'));
    }

    // response get with jquery
    public function dataKaryawan()
    {
        $karyawan = dataKaryawan::all();
        $response = ['data' => $karyawan, 'status' => 'success', 'code' => 200];
        return response()->json($response);
    }

    public function tambahPegawai(Request $request)
    {
        // jquery code disini
    }



    // 


    // template mazer
    public function indexKaryawan()
    {
        $karyawan = dataKaryawan::all();
        return view('karyawan.data-karyawan', compact('karyawan'));
    }
}
