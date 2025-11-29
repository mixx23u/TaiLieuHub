<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function showByCategory($category)
    {
        // Validate allowed categories
        $validCategories = [
            'lap-trinh', 'thiet-ke', 'marketing', 'kinh-te',
            'khoa-hoc', 'lich-su', 'van-hoc', 'suc-khoe'
        ];

        if (!in_array($category, $validCategories)) {
            abort(404);
        }

        // Get documents by category
        $documents = Document::where('category', $category)->get();
        // $documents = Document::where('category', $category)->orderBy('created_at', 'desc')->paginate(12);

        return view('home.topic-documents', [
            'documents' => $documents,
            'category'  => $category,
        ]);
    }

    public function show($id)
    {
        // Find by id
        $document = Document::where('id', $id)->firstOrFail();

        return view('home.document-detail', compact('document'));
    }
}
