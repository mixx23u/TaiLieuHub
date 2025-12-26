<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaiLieuHub - Chia Sẻ Tài Liệu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ffffff;
            color: #000000;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="bg-black text-white">
        <nav class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="{{ route('home.index') }}">TaiLieuHub</a>
            </div>
            <div class="flex gap-6 items-center">
                <a href="{{ route('home.explore') }}" class="hover:text-gray-300 transition">Khám phá</a>
                <a href="{{ route('home.upload-document') }}" class="hover:text-gray-300 transition">Tải lên</a>
                <a href="{{ route('home.payment') }}" class="hover:text-gray-300 transition">Nạp tiền</a>

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

    {{-- Flash messages --}}
    @if (session('success'))
        <div class="max-w-6xl mx-auto mt-4 px-6">
            <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="max-w-6xl mx-auto mt-4 px-6">
            <div class="bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded">
                {{ session('error') }}
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="max-w-6xl mx-auto mt-4 px-6">
            <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <!-- Hero Section -->
    <section class="bg-white py-20 px-6 border-b border-black">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-5xl font-bold mb-6">Chia Sẻ & Tìm Kiếm Tài Liệu</h1>
            <p class="text-xl text-gray-600 mb-8">Nền tảng hàng đầu để chia sẻ tài liệu học tập và tài liệu chuyên môn
            </p>
            <div class="flex gap-4 justify-center">
                <a href="{{ route('home.explore') }}" class="px-8 py-3 bg-black text-white rounded font-semibold hover:bg-gray-800 transition">Khám phá ngay</a>
                <a href="{{ route('home.register') }}" class="px-8 py-3 border-2 border-black rounded font-semibold hover:bg-black hover:text-white transition">Đăng ký miễn phí</a>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-16 px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-12">Các Chủ Đề Phổ Biến</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <a href="{{ route('documents.category', 'lap-trinh') }}" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                    <h3 class="text-xl font-bold mb-2">Lập Trình</h3>
                    <p class="text-sm">{{ $counts['lap-trinh'] }} tài liệu</p>
                </a>
                <!-- Category 2 -->
                <a href="{{ route('documents.category', 'thiet-ke') }}" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                    <h3 class="text-xl font-bold mb-2">Marketing</h3>
                    <p class="text-sm">{{ $counts['marketing'] }} tài liệu</p>
                </a>
                <!-- Category 4 -->
                <a href="{{ route('documents.category', 'kinh-te') }}" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                    <h3 class="text-xl font-bold mb-2">Kinh Tế</h3>
                    <p class="text-sm">{{ $counts['kinh-te'] }} tài liệu</p>
                </a>
                <!-- Category 5 -->
                <a href="{{ route('documents.category', 'khoa-hoc') }}" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                    <h3 class="text-xl font-bold mb-2">Khoa Học</h3>
                    <p class="text-sm">{{ $counts['khoa-hoc'] }} tài liệu</p>
                </a>
                <!-- Category 6 -->
                <a href="{{ route('documents.category', 'lich-su') }}" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                    <h3 class="text-xl font-bold mb-2">Văn Học</h3>
                    <p class="text-sm">{{ $counts['van-hoc'] }} tài liệu</p>
                </a>
                <!-- Category 8 -->
                <a href="{{ route('documents.category', 'suc-khoe') }}" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                    <h3 class="text-xl font-bold mb-2">Sức Khỏe</h3>
                    <p class="text-sm">{{ $counts['suc-khoe'] }} tài liệu</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="bg-black text-white py-16 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">10K+</div>
                    <p>Tài liệu</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">5K+</div>
                    <p>Người dùng</p>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <p>Người chia sẻ</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-black py-12 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="font-bold mb-4">Về TaiLieuHub</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">Giới thiệu</a></li>
                        <li><a href="#" class="hover:underline">Blog</a></li>
                        <li><a href="#" class="hover:underline">Liên hệ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Pháp Lý</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">Điều khoản sử dụng</a></li>
                        <li><a href="#" class="hover:underline">Chính sách riêng tư</a></li>
                        <li><a href="#" class="hover:underline">Chính sách cookie</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Hỗ Trợ</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">Trung tâm trợ giúp</a></li>
                        <li><a href="#" class="hover:underline">Báo cáo vấn đề</a></li>
                        <li><a href="#" class="hover:underline">Hỗ trợ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Kết Nối</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">Facebook</a></li>
                        <li><a href="#" class="hover:underline">Twitter</a></li>
                        <li><a href="#" class="hover:underline">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-black pt-8 text-center text-sm">
                <p>&copy; 2025 TaiLieuHub. Bản quyền được bảo vệ.</p>
            </div>
        </div>
    </footer>
</body>

</html>
@include('home.chatbot')
