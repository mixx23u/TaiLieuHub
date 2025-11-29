<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - TaiLieuHub</title>
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

    <!-- Login Form -->
    <section class="py-20 px-6 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <div class="border-2 border-black rounded p-8">
                <h1 class="text-3xl font-bold mb-8 text-center">Đăng Nhập</h1>
                
                <form action="/api/login" method="POST" class="space-y-6">
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

                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="w-4 h-4 mr-2">
                        <label for="remember" class="text-sm">Ghi nhớ tôi</label>
                    </div>

                    <button type="submit" class="w-full py-3 bg-black text-white font-bold rounded hover:bg-gray-800 transition">
                        Đăng Nhập
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm mb-4">Quên mật khẩu? <a href="#" class="font-bold hover:underline">Đặt lại</a></p>
                    <p class="text-sm">Chưa có tài khoản? <a href="{{ route('home.register') }}" class="font-bold hover:underline">Đăng ký ngay</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>