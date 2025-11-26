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
                <a href="index.html">TaiLieuHub</a>
            </div>
            <div class="flex gap-6 items-center">
                <a href="explore.html" class="hover:text-gray-300">Khám phá</a>
                <a href="{{ route('user.upload-document') }}" class="hover:text-gray-300">Tải lên</a>
                <a href="payment.html" class="hover:text-gray-300">Nạp tiền</a>
                <a href="login.html" class="px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition">Đăng nhập</a>
            </div>
        </nav>
    </header>

    <!-- Content -->
    <section class="py-12 px-6 max-w-6xl mx-auto">
        <div class="mb-8">
            <a href="explore.html" class="font-semibold hover:underline">← Quay lại</a>
            <h1 class="text-4xl font-bold mt-4 mb-2" id="topic-title">Lập Trình</h1>
            <p class="text-gray-600" id="topic-count">Có 128 tài liệu</p>
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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Document 1 -->
            <a href="document-detail.html?id=1" class="border-2 border-black rounded overflow-hidden hover:shadow-lg transition">
                <div class="h-40 bg-gray-300 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-bold">PDF</div>
                        <p class="text-sm mt-2">Tài liệu</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Hướng Dẫn Python Cơ Bản</h3>
                    <p class="text-sm text-gray-600 mb-3">Tác giả: Nguyễn Văn A</p>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">Miễn phí</span>
                        <span>⭐ 4.5 (120)</span>
                    </div>
                </div>
            </a>

            <!-- Document 2 -->
            <a href="document-detail.html?id=2" class="border-2 border-black rounded overflow-hidden hover:shadow-lg transition">
                <div class="h-40 bg-gray-300 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-bold">PDF</div>
                        <p class="text-sm mt-2">Tài liệu</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">JavaScript ES6+ Nâng Cao</h3>
                    <p class="text-sm text-gray-600 mb-3">Tác giả: Trần Thị B</p>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">50.000đ</span>
                        <span>⭐ 4.8 (95)</span>
                    </div>
                </div>
            </a>

            <!-- Document 3 -->
            <a href="document-detail.html?id=3" class="border-2 border-black rounded overflow-hidden hover:shadow-lg transition">
                <div class="h-40 bg-gray-300 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-bold">PDF</div>
                        <p class="text-sm mt-2">Tài liệu</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Lập Trình React.js Từ Đầu</h3>
                    <p class="text-sm text-gray-600 mb-3">Tác giả: Lê Văn C</p>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">75.000đ</span>
                        <span>⭐ 4.9 (210)</span>
                    </div>
                </div>
            </a>

            <!-- Document 4 -->
            <a href="document-detail.html?id=4" class="border-2 border-black rounded overflow-hidden hover:shadow-lg transition">
                <div class="h-40 bg-gray-300 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-bold">PDF</div>
                        <p class="text-sm mt-2">Tài liệu</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Java OOP Cho Người Mới</h3>
                    <p class="text-sm text-gray-600 mb-3">Tác giả: Phạm Thị D</p>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">60.000đ</span>
                        <span>⭐ 4.3 (85)</span>
                    </div>
                </div>
            </a>

            <!-- Document 5 -->
            <a href="document-detail.html?id=5" class="border-2 border-black rounded overflow-hidden hover:shadow-lg transition">
                <div class="h-40 bg-gray-300 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-bold">PDF</div>
                        <p class="text-sm mt-2">Tài liệu</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">C++ Lập Trình Game</h3>
                    <p class="text-sm text-gray-600 mb-3">Tác giả: Đỗ Văn E</p>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">100.000đ</span>
                        <span>⭐ 4.7 (150)</span>
                    </div>
                </div>
            </a>

            <!-- Document 6 -->
            <a href="document-detail.html?id=6" class="border-2 border-black rounded overflow-hidden hover:shadow-lg transition">
                <div class="h-40 bg-gray-300 flex items-center justify-center">
                    <div class="text-center">
                        <div class="text-4xl font-bold">PDF</div>
                        <p class="text-sm mt-2">Tài liệu</p>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Web Development Toàn Stack</h3>
                    <p class="text-sm text-gray-600 mb-3">Tác giả: Hoàng Văn F</p>
                    <div class="flex justify-between items-center text-sm">
                        <span class="font-semibold">80.000đ</span>
                        <span>⭐ 4.6 (175)</span>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center gap-2 mt-12">
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">Trang trước</button>
            <button class="px-4 py-2 bg-black text-white rounded">1</button>
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">2</button>
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">3</button>
            <button class="px-4 py-2 border-2 border-black rounded hover:bg-black hover:text-white transition">Trang sau</button>
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