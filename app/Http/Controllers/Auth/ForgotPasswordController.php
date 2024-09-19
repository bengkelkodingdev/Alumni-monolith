<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ForgotPasswordController extends Controller
{
    // Menampilkan form lupa password
    public function showForgotPasswordForm()
    {
        return view('lupapassword');
    }

    // Mengirim kode reset password
    public function sendResetCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $email = $request->email;
        $code = rand(999999, 111111);

        $user = User::where('email', $email)->first();
        $user->code = $code;
        $user->save();

        // Kirim email
        Mail::raw("Kode reset password Anda adalah $code", function ($message) use ($email) {
            $message->to($email)
                ->subject('Kode Reset Password');
        });

        Session::put('info', "Kami telah mengirimkan OTP reset kata sandi ke email Anda - $email");
        Session::put('email', $email);

        return redirect()->route('password.reset.code.form');
    }

    // Menampilkan form untuk memasukkan kode OTP
    public function showResetCodeForm()
    {
        return view('verifyresetcode');
    }

    // Verifikasi kode OTP
    public function verifyResetCode(Request $request)
{
    $request->validate([
        'otp' => 'required|numeric',
    ]);

    $otp = $request->otp;
    $user = User::where('code', $otp)->first();

    if ($user) {
        Session::put('email', $user->email);
        Session::put('info', 'Silakan buat kata sandi baru yang tidak Anda gunakan di situs lain.');

        return redirect()->route('password.reset.form');
    } else {
        return back()->withErrors(['otp' => 'Kode OTP yang Anda masukkan salah!']);
    }
}


    // Menampilkan form untuk mengubah password
    public function showNewPasswordForm()
    {
        return view('change-new-password');
    }

    // Mengubah password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);
    
        $email = Session::get('email');
        $user = User::where('email', $email)->first();
        $user->password = Hash::make($request->password);
        $user->code = null;
        $user->save();
    
        Session::flash('info', 'Kata sandi Anda berhasil diubah. Sekarang Anda dapat login dengan kata sandi yang baru.');
    
        return redirect()->route('password.changed');
    }
    
    // Menampilkan halaman sukses penggantian password
    public function passwordChanged()
    {
        return view('password-berhasil-update');
    }
}
