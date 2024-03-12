<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{

    public function index(){
        return view('akun', [
            "title" => "akun",
            "akuns" => auth()->user()
        ]);
    }

    public function index2(){
        return view('sandi', [
            "title" => "sandi",
            "akuns" => auth()->user()
        ]);
    }

    public function toSandi(Request $request, User $user){

        // $request->session()->flush();
        if (Hash::check($request['current-password'], $user->password)) {
            $validateData = $request->validate([
                'new-password' => 'min:5|max:255'
            ]);
            
            if($request['new-password'] != $request['confirm-password']){
                return redirect()->back()->withInput()->with('different', 'Konfirmasi Sandi Baru Anda dengan benar');
                // return view('sandi');
            } else {
                // $user->password = Hash::make($request['new-password']);
                // $user->save();
                $user->update([
                    'email' => 'APHH',
                    'password' => Hash::make($request['new-password'])
                ]);
                
                if(Auth::check()){
                    // $request->session()->flush();
                    return view('sandi', [
                        "title" => "sandi",
                        "akuns" => auth()->user()
                    ]);
                }else{
                    dd($user);
                }
                
                
                // // dd($user);
                // return view('sandi', [
                //     "title" => "sandi",
                //     "akuns" => auth()->user()
                // ]);
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Sandi Lama salah!');

            // return view('sandi');
        }
    }

    public function store(Request $request, User $user){
        // dd($user);
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
            'name' => 'max:255',
            // 'email' => 'email:dns|unique:users',
            'email' => 'sometimes|required|email:dns|unique:users,email,'.$user->id,
            'password' => 'min:5|max:255',
            'nik' => 'max:16|min:16|unique:users,nik',
            'alamat' => 'max:200',
            'notelp' => ['min:10', 'max:13', 'regex:/^08\d+$/'],
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
            'email' => $requestemail,
            'address' => $requestalamat,
            'picture' => $requestImageAkun
        ]);

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
