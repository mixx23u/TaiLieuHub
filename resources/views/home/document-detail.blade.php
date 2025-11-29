<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Tài Liệu - TaiLieuHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-black text-white">
        <nav class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="{{ route('home.index') }}">TaiLieuHub</a>
            </div>
            <div class="flex gap-6 items-center">
                <a href="{{ route('home.explore') }}" class="hover:text-gray-300">Khám phá</a>
                <a href="{{ route('home.login') }}" class="px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition">Đăng nhập</a>
            </div>
        </nav>
    </header>

    <!-- Document Details -->
    <section class="py-12 px-6 max-w-6xl mx-auto">
        <a href="{{ "documents.show" }}" class="font-semibold hover:underline">← Quay lại</a>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Document Preview -->
                <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank">
                    <div class="border-2 border-black rounded mb-8 p-8 bg-gray-100 min-h-96 flex items-center justify-center">
                        <div class="text-center">
                            <div class="text-6xl font-bold mb-4">📄</div>
                            <p class="text-lg font-semibold">{{ $document->title }}</p>
                            <p class="text-sm text-gray-600 mt-2">Xem trước tài liệu</p>
                        </div>
                    </div>
                </a>

                <!-- Document Info -->
                <div class="mb-8">
                    <h1 class="text-4xl font-bold mb-4">{{ $document->title }}</h1>
                    
                    <div class="flex gap-6 mb-6 pb-6 border-b border-black">
                        <div>
                            <p class="text-sm text-gray-600">Tác giả</p>
                            <p class="font-semibold">{{ $document->user->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Ngày đăng</p>
                            <p class="font-semibold">{{ $document->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold mb-4">Mô tả</h2>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            {{ $document->description }}
                        </p>
                    </div>

                    <!-- Extra Info -->
                    <div class="border-2 border-black rounded p-6 mb-8">
                        <h3 class="text-xl font-bold mb-4">Thông tin thêm</h3>
                        <ul class="space-y-2 text-sm">
                            <li class="flex items-center">
                                <span class="mr-3">✓</span>
                                Định dạng: {{ strtoupper(pathinfo($document->file_path, PATHINFO_EXTENSION)) }}
                            </li>
                            <li class="flex items-center"><span class="mr-3">✓</span> Người đăng: {{ $document->user->name }}</li>
                            <li class="flex items-center"><span class="mr-3">✓</span> Đường dẫn file: Truy cập file tại <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" style="color: blue;">&nbsp; đây</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar - Purchase/Download -->
            <div class="lg:col-span-1">
                <div class="border-2 border-black rounded p-6 sticky top-6">
                    <div class="mb-6">
                        <p class="text-4xl font-bold">Miễn phí</p>
                        <p class="text-sm text-gray-600 mt-2">Hoặc tùy chọn thanh toán nếu muốn hỗ trợ tác giả</p>
                    </div>

                    <!-- QR Code Payment (Shown when accessing as non-premium user) -->
                    <div id="payment-section" class="mb-6 p-4 border-2 border-black rounded bg-gray-50">
                        <p class="text-sm font-semibold mb-3">Hỗ trợ tác giả với thanh toán</p>
                        <div class="bg-white border-2 border-black p-4 flex justify-center mb-3">
                            <div style="width: 150px; height: 150px; background: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect fill=%22white%22 width=%22100%22 height=%22100%22/><rect fill=%22black%22 x=%225%22 y=%225%22 width=%2210%22 height=%2210%22/><rect fill=%22black%22 x=%225%22 y=%2240%22 width=%2210%22 height=%2210%22/><rect fill=%22black%22 x=%225%22 y=%2275%22 width=%2210%22 height=%2210%22/><rect fill=%22black%22 x=%2240%22 y=%225%22 width=%2210%22 height=%2210%22/><rect fill=%22black%22 x=%2275%22 y=%225%22 width=%2210%22 height=%2210%22/><rect fill=%22black%22 x=%2240%22 y=%2275%22 width=%2210%22 height=%2210%22/><rect fill=%22black%22 x=%2275%22 y=%2240%22 width=%2210%22 height=%2210%22/><rect fill=%22black%22 x=%2275%22 y=%2275%22 width=%2210%22 height=%2210%22/></svg>') center/contain no-repeat; width: 100%; height: 100%;"></div>
                        </div>
                        <p class="text-xs text-center text-gray-600">Quét mã QR để thanh toán</p>
                    </div>

                    <button class="w-full py-3 bg-black text-white font-bold rounded mb-3 hover:bg-gray-800 transition">
                        Tải Xuống Miễn Phí
                    </button>

                    <button class="w-full py-3 border-2 border-black font-semibold rounded hover:bg-black hover:text-white transition mb-6">
                        Thêm vào yêu thích
                    </button>

                    <!-- Document Stats -->
                    <div class="space-y-4 pt-6 border-t border-black">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Kích thước:</span>
                            <span class="font-semibold">12.5 MB</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Định dạng:</span>
                            <span class="font-semibold">{{ strtoupper(pathinfo($document->file_path, PATHINFO_EXTENSION)) }}</span>
                        </div>
                        {{-- <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Ngôn ngữ:</span>
                            <span class="font-semibold">Tiếng Việt</span>
                        </div> --}}
                    </div>

                    <!-- Contact Author -->
                    <button class="w-full mt-6 py-2 border-2 border-black rounded text-sm hover:bg-black hover:text-white transition">
                        Liên hệ tác giả
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-black mt-12 py-12 px-6">
        <div class="max-w-6xl mx-auto text-center text-sm">
            <p>&copy; 2025 TaiLieuHub. Bản quyền được bảo vệ.</p>
        </div>
    </footer>
</body>
</html>