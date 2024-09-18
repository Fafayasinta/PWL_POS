<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        // tambah data menggunakan Eloquent Model
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::insert($data);

        //update data dengan Eloquent
        // $data = [
        //     'nama' => 'Pelanggan pertama',
        // ];
        // UserModel::where('username', 'customer 1')->update($data); //update data user

        // ambil semua data dari model UserModel
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // jobsheet 4 prak 2.1
        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findor(1, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = UserModel::findor(20, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);


        // jobsheet 4 prak 2.2
        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);

        $user = UserModel::where('username', 'manager9')->firstOrFail();
        return view('user', ['data' => $user]);

    }
}