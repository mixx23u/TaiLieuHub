<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        // Auth::login($user);

        // Send registration event to n8n webhook (best-effort, don't block user)
        $n8nUrl = 'http://tailieuhub-n8n:5678/webhook-test/mail-register-confirm';
        if ($n8nUrl) {
            try {
                $response = Http::timeout(5)->post($n8nUrl, [
                    'name' => $data['name'],
                    'email' => $data['email'],
                ]);

                Log::info('n8n webhook called', [
                    'url' => $n8nUrl,
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
            } catch (\Throwable $e) {
                Log::warning('n8n webhook call failed: ' . $e->getMessage(), ['url' => $n8nUrl]);
            }
        }

        //  return redirect()->route('home.index')->with('success', 'Đăng ký thành công!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home.index'))->with('success', 'Đăng nhập thành công!');
        }

        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không đúng.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home.login');
    }
}
