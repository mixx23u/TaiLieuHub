<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khám Phá - TaiLieuHub</title>
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
                @if (auth()->check())
                    <div class="flex items-center gap-4">
                        <a href="{{ route('home.upload-document') }}" class="text-sm hover:text-gray-300">Tải lên</a>
                        <div class="flex items-center gap-3">
                            <img src="{{ auth()->user()->avatar ?? 'https://www.gravatar.com/avatar/' . md5(strtolower(trim(auth()->user()->email))) . '?s=40&d=identicon' }}"
                                alt="avatar" class="w-8 h-8 rounded-full">
                            <div class="text-sm text-white">
                                <div class="font-semibold">{{ auth()->user()->name }}</div>
                                <form action="{{ route('web.logout') }}" method="POST" class="mt-0">
                                    @csrf
                                    <button type="submit" class="text-xs hover:underline">Đăng xuất</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('home.login') }}"
                        class="px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition">Đăng
                        nhập</a>
                    <a href="{{ route('home.register') }}"
                        class="px-4 py-2 bg-white text-black rounded font-semibold hover:bg-gray-200 transition">Đăng
                        ký</a>
                @endif
            </div>
        </nav>
    </header>

    <!-- Explore Section -->
    <section class="py-12 px-6 max-w-6xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">Tất Cả Chủ Đề</h1>

        <!-- Search and Filter -->
        <div class="flex gap-4 mb-8">
            <input type="text" placeholder="Tìm kiếm tài liệu..."
                class="flex-1 px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
            <select class="px-4 py-3 border-2 border-black rounded focus:outline-none">
                <option value="">Tất cả chủ đề</option>
                <option value="lap-trinh">Lập Trình</option>
                <option value="thiet-ke">Thiết Kế</option>
                <option value="marketing">Marketing</option>
                <option value="kinh-te">Kinh Tế</option>
                <option value="khoa-hoc">Khoa Học</option>
                <option value="lich-su">Lịch Sử</option>
                <option value="van-hoc">Văn Học</option>
                <option value="suc-khoe">Sức Khỏe</option>
            </select>
        </div>

        <!-- Category Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Lập Trình -->
            <a href="{{ route('documents.category', 'lap-trinh') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Lập Trình</h3>
                <p class="text-sm mb-4">{{ $counts['lap-trinh'] }} tài liệu</p>
                <p class="text-xs">Python, JavaScript, Java, C++, Web Development...</p>
            </a>

            <!-- Thiết Kế -->
            <a href="{{ route('documents.category', 'thiet-ke') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Thiết Kế</h3>
                <p class="text-sm mb-4">{{ $counts['thiet-ke'] }} tài liệu</p>
                <p class="text-xs">UI/UX, Graphic Design, Web Design, Animation...</p>
            </a>

            <!-- Marketing -->
            <a href="{{ route('documents.category', 'marketing') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Marketing</h3>
                <p class="text-sm mb-4">{{ $counts['marketing'] }} tài liệu</p>
                <p class="text-xs">Digital Marketing, SEO, Content Strategy, Branding...</p>
            </a>

            <!-- Kinh Tế -->
            <a href="{{ route('documents.category', 'kinh-te') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Kinh Tế</h3>
                <p class="text-sm mb-4">{{ $counts['kinh-te'] }} tài liệu</p>
                <p class="text-xs">Kinh doanh, Tài chính, Đầu tư, Kế toán...</p>
            </a>

            <!-- Khoa Học -->
            <a href="{{ route('documents.category', 'khoa-hoc') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Khoa Học</h3>
                <p class="text-sm mb-4">{{ $counts['khoa-hoc'] }} tài liệu</p>
                <p class="text-xs">Vật lý, Hóa học, Sinh học, Toán học...</p>
            </a>

            <!-- Lịch Sử -->
            <a href="{{ route('documents.category', 'lich-su') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Lịch Sử</h3>
                <p class="text-sm mb-4">{{ $counts['lich-su'] }} tài liệu</p>
                <p class="text-xs">Lịch sử thế giới, Lịch sử Việt Nam, Sử liệu...</p>
            </a>

            <!-- Văn Học -->
            <a href="{{ route('documents.category', 'van-hoc') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Văn Học</h3>
                <p class="text-sm mb-4">{{ $counts['van-hoc'] }} tài liệu</p>
                <p class="text-xs">Thơ, Tiểu thuyết, Truyện ngắn, Phê bình văn học...</p>
            </a>

            <!-- Sức Khỏe -->
            <a href="{{ route('documents.category', 'suc-khoe') }}"
                class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Sức Khỏe</h3>
                <p class="text-sm mb-4">{{ $counts['suc-khoe'] }} tài liệu</p>
                <p class="text-xs">Y học, Dinh dưỡng, Tập luyện, Sức khỏe tâm thần...</p>
            </a>
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
