<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // List of categories
        $categories = [
            'lap-trinh', 'thiet-ke', 'marketing', 'kinh-te',
            'khoa-hoc', 'lich-su', 'van-hoc', 'suc-khoe'
        ];

        // Count documents per category
        $counts = [];
        foreach ($categories as $cat) {
            $counts[$cat] = Document::where('category', $cat)->count(); // Count each category
        }

        return view('home.index', compact('counts'));
    }

    public function explore()
    {
        // List of categories
        $categories = [
            'lap-trinh', 'thiet-ke', 'marketing', 'kinh-te',
            'khoa-hoc', 'lich-su', 'van-hoc', 'suc-khoe'
        ];

        // Count documents per category
        $counts = [];
        foreach ($categories as $cat) {
            $counts[$cat] = Document::where('category', $cat)->count(); // Count each category
        }

        return view('home.explore', compact('counts'));
    }

    
    public function uploadDocument()
    {
        return view('user.upload-document');
    }

    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function payment()
    {
        return view('user.payment');
    }

}
