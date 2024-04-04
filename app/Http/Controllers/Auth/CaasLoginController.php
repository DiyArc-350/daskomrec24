<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Datacaas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CaasLoginController extends Controller
{
    public function landing()
    {
        return view('caas.landing');
    }

    public function loginForm()
    {
        return view('caas.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $this->validate($request, [
            'nim'      => 'required|string',
            'password'  => 'required|string'
        ]);

        if (Auth::guard('caas')->attempt([
            'nim' => $request->nim,
            'password' => $request->password
        ], true)) {
            Datacaas::where('nim', $request->nim)->update(['updated_at' => Carbon::now()]);
            return redirect()->route('caas.dashboard'); // disesuaikan sama nama route
        }
        return redirect()->back()->withErrors(['nim' => 'NIM atau Password Salah', 'password' => 'NIM atau Password Salah']); // disesuaikan sama nama routenye        
    }

    public function changePass()
    {
        return view('caas.changepass', ['title' => 'Change Password']);
    }

    public function changePassCheck(Request $request)
    {
        $id = Auth::guard('caas')->user()->id;
        $caas = Datacaas::find($id);

        // Validasi
        $messages = [
            'old_password' => 'Old password is incorrect.',
            'password' => 'Minimal 8 karakter dan maksimal 12 karakter.',
        ];
        $rules = [
            'old_password' => 'required|string',
            'password' => 'required|string|min:8|max:12',
        ];
        $this->validate($request, $rules, $messages);

        // Verifikasi password lama
        if (!Hash::check($request->old_password, $caas->password)) {
            return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect.']);
        }

        // Update password baru
        $caas->password = Hash::make($request->password);
        $caas->save();

        // Logout dengan aman
        Auth::guard('caas')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with(['changed' => 'Password successfully changed']);
    }

    public function logout()
    {
        Auth::guard('caas')->logout();
        return redirect(route('caas.login'));
    }
}
