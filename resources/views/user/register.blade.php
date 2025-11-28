<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - TaiLieuHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-black text-white">
        <nav class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="{{ route('home.index') }}">TaiLieuHub</a>
            </div>
            <a href="{{ route('home.index') }}" class="hover:text-gray-300">← Quay lại</a>
        </nav>
    </header>

    <!-- Register Form -->
    <section class="py-20 px-6 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <div class="border-2 border-black rounded p-8">
                <h1 class="text-3xl font-bold mb-8 text-center">Đăng Ký</h1>
                
                <form action="/api/register" method="POST" class="space-y-4">
                    <div>
                        <label class="block font-semibold mb-2">Họ và Tên</label>
                        <input type="text" name="name" required 
                            class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Email</label>
                        <input type="email" name="email" required 
                            class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Mật khẩu</label>
                        <input type="password" name="password" required 
                            class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Xác nhận Mật khẩu</label>
                        <input type="password" name="password_confirmation" required 
                            class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
                    </div>

                    <div>
                        <label class="block font-semibold mb-2">Loại Tài Khoản</label>
                        <select name="role" required class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none">
                            <option value="">Chọn loại tài khoản</option>
                            <option value="user">Người Dùng</option>
                            <option value="uploader">Người Chia Sẻ</option>
                        </select>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" required class="w-4 h-4 mr-2">
                        <label for="terms" class="text-sm">Tôi đồng ý với <a href="#" class="font-bold hover:underline">Điều khoản sử dụng</a></label>
                    </div>

                    <button type="submit" class="w-full py-3 bg-black text-white font-bold rounded hover:bg-gray-800 transition">
                        Đăng Ký
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm">Đã có tài khoản? <a href="{{ route('home.login') }}" class="font-bold hover:underline">Đăng nhập</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>