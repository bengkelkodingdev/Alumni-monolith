<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpan(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'nama_pengguna' => 'required',
            'email' => 'required|email|unique:users,email',
            'role'=>'required',
            'password' => 'required|min:6',
        ]);

        // Mengecek email validasi
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return back()->with('error', 'Harap masukkan alamat email yang benar!');
        }

        // Jika email sudah terdaftar
        $emailExist = User::where('email', $request->email)->first();
        if ($emailExist) {
            return back()->with('error', 'Alamat email sudah terdaftar!');
        }

        // Proses menyimpan data ke database
        $encpass = Hash::make($request->password);
        $code = rand(100000, 999999); // Generate kode OTP
        $status = 'notverified';

        $data = [
            'nama_pengguna' => $request->nama_pengguna,
            'email' => $request->email,
            'role'=> $request->role,
            'password' =>  Hash::make($request->password),
            'code' => $code,
            'status' => 'notverified',
            
        ];

        $user = User::create($data);

        // Mengirimkan email verifikasi
        $subject = "Kode Verifikasi Email";
        $message = "Kode verifikasi Anda adalah: $code";
        $sender = "From: 111202113255@mhs.dinus.ac.id"; // Sesuaikan dengan email SMTP Anda

        try {
            Mail::raw($message, function ($msg) use ($request, $subject, $sender) {
                $msg->to($request->email)
                    ->subject($subject)
                    ->from('111202113255@mhs.dinus.ac.id');
            });

            Session::put('info', 'Kami telah mengirimkan kode verifikasi ke email Anda.');
            Session::put('email', $request->email);
            Session::put('password', $request->password);

            return redirect()->route('otp.verify');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat mengirim kode OTP!');
        }
    }

    // Menampilkan halaman verifikasi OTP
    public function showOtpForm()
    {
        return view('verify-email');
    }

    // Verifikasi OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $user = User::where('email', Session::get('email'))->where('code', $request->otp)->first();

        if ($user) {
            $user->status = 'verified'; // Jika OTP sesuai, update status menjadi verified
            $user->save();

            Session::forget('info');
            return redirect()->route('login')->with('success', 'Verifikasi berhasil, silakan login.');
        } else {
            return back()->with('error', 'Kode OTP salah atau sudah kedaluwarsa.');
        }
    }
}
