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
                <a href="index.html">TaiLieuHub</a>
            </div>
            <div class="flex gap-6 items-center">
                <a href="explore.html" class="hover:text-gray-300">Khám phá</a>
                <a href="{{ route('user.upload') }}" class="hover:text-gray-300">Tải lên</a>
                <a href="payment.html" class="hover:text-gray-300">Nạp tiền</a>
                <a href="login.html" class="px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition">Đăng nhập</a>
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
            <a href="topic-documents.html?topic=lap-trinh" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Lập Trình</h3>
                <p class="text-sm mb-4">128 tài liệu</p>
                <p class="text-xs">Python, JavaScript, Java, C++, Web Development...</p>
            </a>

            <!-- Thiết Kế -->
            <a href="topic-documents.html?topic=thiet-ke" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Thiết Kế</h3>
                <p class="text-sm mb-4">85 tài liệu</p>
                <p class="text-xs">UI/UX, Graphic Design, Web Design, Animation...</p>
            </a>

            <!-- Marketing -->
            <a href="topic-documents.html?topic=marketing" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Marketing</h3>
                <p class="text-sm mb-4">92 tài liệu</p>
                <p class="text-xs">Digital Marketing, SEO, Content Strategy, Branding...</p>
            </a>

            <!-- Kinh Tế -->
            <a href="topic-documents.html?topic=kinh-te" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Kinh Tế</h3>
                <p class="text-sm mb-4">64 tài liệu</p>
                <p class="text-xs">Kinh doanh, Tài chính, Đầu tư, Kế toán...</p>
            </a>

            <!-- Khoa Học -->
            <a href="topic-documents.html?topic=khoa-hoc" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Khoa Học</h3>
                <p class="text-sm mb-4">156 tài liệu</p>
                <p class="text-xs">Vật lý, Hóa học, Sinh học, Toán học...</p>
            </a>

            <!-- Lịch Sử -->
            <a href="topic-documents.html?topic=lich-su" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Lịch Sử</h3>
                <p class="text-sm mb-4">78 tài liệu</p>
                <p class="text-xs">Lịch sử thế giới, Lịch sử Việt Nam, Sử liệu...</p>
            </a>

            <!-- Văn Học -->
            <a href="topic-documents.html?topic=van-hoc" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Văn Học</h3>
                <p class="text-sm mb-4">102 tài liệu</p>
                <p class="text-xs">Thơ, Tiểu thuyết, Truyện ngắn, Phê bình văn học...</p>
            </a>

            <!-- Sức Khỏe -->
            <a href="topic-documents.html?topic=suc-khoe" class="p-6 border-2 border-black rounded hover:bg-black hover:text-white transition">
                <h3 class="text-2xl font-bold mb-2">Sức Khỏe</h3>
                <p class="text-sm mb-4">45 tài liệu</p>
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