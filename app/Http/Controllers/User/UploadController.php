<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:100',
            'file' => 'required|file|mimes:pdf,doc,docx,txt,pptx|max:102400', // Max 100MB
        ]);

        $data = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
            'user_id' => '1', // Giả sử user_id là 1, thay thế bằng user hiện tại khi có hệ thống auth
        ];

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Lưu file với tên gốc hoặc custom
            $filePath = $file->store('documents', 'public');

            // Lấy tên file gốc
            $originalName = $file->getClientOriginalName();

            $data['file_path'] = $filePath;
            $data['original_name'] = $originalName;
            // Document::create($data);
        }

        Document::create($data);

        return redirect()->route('home.index')->with('success', 'Tài liệu đã được tải lên thành công!');
    }


    public function getDocuments()
    {
        $categoryMap = [
            'lap-trinh' => 'Lập Trình',
            'thiet-ke' => 'Thiết Kế',
            'marketing' => 'Marketing',
            'kinh-te' => 'Kinh Tế',
            'khoa-hoc' => 'Khoa Học',
            'lich-su' => 'Lịch Sử',
            'van-hoc' => 'Văn Học',
            'suc-khoe' => 'Sức Khỏe',
            'other' => 'Other'
        ];

        $documents = Document::all()->map(function ($doc) use ($categoryMap) {
            return [
                'id' => $doc->id,
                'title' => $doc->title,
                'description' => $doc->description,
                'category' => $doc->category,
                'category_label' => $categoryMap[$doc->category] ?? $doc->category,
                'file_path' => $doc->file_path,
                'original_name' => $doc->original_name,
                'user_id' => $doc->user_id,
                'created_at' => $doc->created_at,
                'updated_at' => $doc->updated_at,
            ];
        });

        return response()->json($documents);
    }
}
