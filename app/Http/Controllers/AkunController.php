<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AkunController extends Controller
{
    public function index(){
        return view('akun', [
            "title" => "akun",
            "akuns" => User::first()
        ]);
    }

    public function store(Request $request, User $user){
        // dd($request->file('imageAkun'));
        // dd(asset('storage/'. $user->picture))
        // dd(request('imageAkun'));
        if(!request('notelp')){
            $requestnotelp = $user->phoneNumber;
        }else{
            
            $requestnotelp = request('notelp');
        }

        if(!request('alamat')){
            $requestalamat = $user->address;
        }else{
            $requestalamat = request('alamat');
        }

        if(!request('email')){
            $requestemail = $user->email;
        }else{
            $requestemail = request('email');
        }

        // validasi dulu sebelum dimasukin ke $user
        $validateData = $request->validate([
            'imageAkun' => 'image|file|max:1024'
        ]);
        // segala yang ada di bawah validate data bakalan dijalanin kalo tervalidasi 

        if($request->file('imageAkun')){
            $requestImageAkun = $request->file('imageAkun')->store('akun-images');
        }else{
            $requestImageAkun = $user->picture;
        }

        $user->update([
            'phoneNumber' => $requestnotelp,
            'address' => $requestalamat,
            'email' => $requestemail,
            'picture' => $requestImageAkun
        ]);

        // dd($user->picture);

        return view('akun', [
            "title" => "akun",
            "akuns" => $user
        ]);

        // dd($request);
        // Buat nyimpen gambar yg udah ada di $request, tapi dia kesimpennya di storage, kita maunya dipublic,
        // jadi jangan lupa .env nya ditambahin FILESYSTEM_DISK=public (defaultnya local)
        // nama FILESYSTEMnya menyesuaikan yang ada di config filesystems.php 
        // abis itu jangan lupa php artisan storage:link -> ini supaya dia bisa diakses di folder public 
        // yg benerannya, awalnya kan di public yang app

        // return $request->file('imageAkun')->store('akun-images');
        // kalo udah berhasil, matiin, karena ->store() itu buat ngecreate folder akun-images
        
    }
}
