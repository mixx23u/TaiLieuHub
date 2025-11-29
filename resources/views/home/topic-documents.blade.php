<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài Liệu - TaiLieuHub</title>
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
                <a href="{{ route('home.upload-document') }}" class="hover:text-gray-300">Tải lên</a>
                <a href="{{ route('home.payment') }}" class="hover:text-gray-300">Nạp tiền</a>
                <a href="{{ route('home.login') }}" class="px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition">Đăng nhập</a>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <section class="py-12 px-6 max-w-6xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('home.explore') }}" class="font-semibold hover:underline">← Quay lại</a>
            <h1 class="text-4xl font-bold mt-4 mb-2">
                <p style="text-transform: uppercase;">
                @switch($category)
                    @case("lap-trinh")
                        Lập trình
                        @break
                    @case("thiet-ke")
                        Thiết kế
                        @break
                    @case("marketing")
                        Marketing
                        @break
                    @case("kinh-te")
                        Kinh tế
                        @break
                    @case("khoa-hoc")
                        Khoa học
                        @break
                    @case("lich-su")
                        Lịch sử
                        @break
                    @case("van-hoc")
                        Văn học
                        @break
                    @case("suc-khoe")
                        Sức khỏe
                        @break
                    @default
                        Khác
                @endswitch
                </p>
            </h1>
            <p class="text-gray-600">
                Có {{ $documents->count() }} tài liệu
            </p>
        </div>

        <!-- Sort and Filter -->
        <div class="flex gap-4 mb-8">
            <select class="px-4 py-2 border-2 border-black rounded">
                <option value="">Sắp xếp theo</option>
                <option value="newest">Mới nhất</option>
                <option value="oldest">Cũ nhất</option>
                <option value="popular">Phổ biến</option>
                <option value="rating">Xếp hạng</option>
            </select>
        </div>

        <!-- Documents Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach ($documents as $doc)
                <a href="{{ route('documents.show', $doc->id) }}"
                class="border-2 border-black rounded overflow-hidden hover:shadow-lg transition">

                    <div class="h-40 bg-gray-300 flex items-center justify-center">
                        <div class="text-center">
                            <div class="text-4xl font-bold">PDF</div>
                            <p class="text-sm mt-2">Tài liệu</p>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">{{ $doc->title }}</h3>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination -->
        {{-- <div class="flex justify-center gap-2 mt-12">
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">Trang trước</button>
            <button class="px-4 py-2 bg-black text-white rounded">1</button>
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">2</button>
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">3</button>
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">Trang sau</button>
        </div> --}}
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-black mt-12 py-12 px-6">
        <div class="max-w-6xl mx-auto text-center text-sm">
            <p>&copy; 2025 TaiLieuHub. Bản quyền được bảo vệ.</p>
        </div>
    </footer>
</body>
</html>