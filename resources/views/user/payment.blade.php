<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nạp Tiền - TaiLieuHub</title>
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

    <!-- Payment Section -->
    <section class="py-12 px-6 max-w-6xl mx-auto">
        <div class="mb-8">
            <h1 class="text-4xl font-bold mb-2">Nạp Tiền</h1>
            <p class="text-gray-600">Nạp tiền vào ví của bạn để mua và tải tài liệu</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Payment Form -->
            <div class="lg:col-span-2">
                <div class="border-2 border-black rounded p-8">
                    <h2 class="text-2xl font-bold mb-6">Chọn Gói Nạp Tiền</h2>

                    <!-- Payment Packages -->
                    <div class="space-y-4 mb-8">
                        <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="package" value="50000" checked class="mr-4">
                            <div class="flex-1">
                                <p class="font-bold">50.000 VNĐ</p>
                                <p class="text-sm text-gray-600">Gói nhỏ</p>
                            </div>
                            <p class="font-bold">50.000đ</p>
                        </label>

                        <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="package" value="100000" class="mr-4">
                            <div class="flex-1">
                                <p class="font-bold">100.000 VNĐ</p>
                                <p class="text-sm text-gray-600">Gói tiêu chuẩn</p>
                            </div>
                            <p class="font-bold">100.000đ</p>
                        </label>

                        <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="package" value="250000" class="mr-4">
                            <div class="flex-1">
                                <p class="font-bold">250.000 VNĐ</p>
                                <p class="text-sm text-gray-600">Gói vàng - Tiết kiệm 5%</p>
                            </div>
                            <p class="font-bold">250.000đ</p>
                        </label>

                        <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="package" value="500000" class="mr-4">
                            <div class="flex-1">
                                <p class="font-bold">500.000 VNĐ</p>
                                <p class="text-sm text-gray-600">Gói bạc - Tiết kiệm 10%</p>
                            </div>
                            <p class="font-bold">500.000đ</p>
                        </label>

                        <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                            <input type="radio" name="package" value="custom" class="mr-4">
                            <div class="flex-1">
                                <p class="font-bold">Tùy chỉnh</p>
                                <p class="text-sm text-gray-600">Nhập số tiền bạn muốn</p>
                            </div>
                        </label>
                    </div>

                    <!-- Custom Amount -->
                    <div id="custom-amount-field" style="display: none;" class="mb-8">
                        <label class="block font-semibold mb-2">Nhập Số Tiền (VNĐ)</label>
                        <input type="number" name="custom_amount" min="10000" step="1000"
                            placeholder="Tối thiểu 10.000 VNĐ"
                            class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
                    </div>

                    <!-- Payment Method -->
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-4">Chọn Phương Thức Thanh Toán</h3>
                        
                        <div class="space-y-4">
                            <!-- Momo -->
                            <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                                <input type="radio" name="payment_method" value="momo" checked class="mr-4">
                                <div class="flex-1">
                                    <p class="font-bold">MoMo</p>
                                    <p class="text-sm text-gray-600">Thanh toán qua ứng dụng MoMo</p>
                                </div>
                                <span class="text-lg">💳</span>
                            </label>

                            <!-- Bank Transfer -->
                            <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                                <input type="radio" name="payment_method" value="bank" class="mr-4">
                                <div class="flex-1">
                                    <p class="font-bold">Chuyển khoản Ngân Hàng</p>
                                    <p class="text-sm text-gray-600">Chuyển tiền trực tiếp từ tài khoản ngân hàng</p>
                                </div>
                                <span class="text-lg">🏦</span>
                            </label>

                            <!-- Card -->
                            <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                                <input type="radio" name="payment_method" value="card" class="mr-4">
                                <div class="flex-1">
                                    <p class="font-bold">Thẻ Tín Dụng / Ghi Nợ</p>
                                    <p class="text-sm text-gray-600">Visa, Mastercard, JCB</p>
                                </div>
                                <span class="text-lg">💰</span>
                            </label>

                            <!-- VNPAY -->
                            <label class="flex items-center p-4 border-2 border-black rounded cursor-pointer hover:bg-gray-50 transition">
                                <input type="radio" name="payment_method" value="vnpay" class="mr-4">
                                <div class="flex-1">
                                    <p class="font-bold">VNPAY</p>
                                    <p class="text-sm text-gray-600">Thanh toán qua cổng VNPAY</p>
                                </div>
                                <span class="text-lg">📱</span>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <form action="/api/payment/create" method="POST">
                        <input type="hidden" name="amount" id="amount-input" value="50000">
                        <input type="hidden" name="payment_method" id="method-input" value="momo">
                        
                        <button type="submit" class="w-full py-4 bg-black text-white font-bold text-lg rounded hover:bg-gray-800 transition mb-4">
                            Tiếp Tục Thanh Toán
                        </button>
                    </form>

                    <a href="{{ route('home.index') }}" class="block text-center py-2 border-2 border-black rounded font-semibold hover:bg-black hover:text-white transition">
                        Quay Lại
                    </a>
                </div>
            </div>

            <!-- Summary -->
            <div class="lg:col-span-1">
                <div class="border-2 border-black rounded p-6 sticky top-6">
                    <h3 class="text-xl font-bold mb-6">Tóm Tắt</h3>

                    <div class="space-y-4 pb-6 border-b border-black">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Số tiền:</span>
                            <span class="font-bold" id="summary-amount">50.000đ</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Phương thức:</span>
                            <span class="font-bold" id="summary-method">MoMo</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <p class="text-xs text-gray-600 mb-4">
                            Sau khi thanh toán thành công, tiền sẽ được cộng vào ví ngay lập tức. 
                            Bạn có thể sử dụng tiền để mua tài liệu hoặc hỗ trợ các tác giả.
                        </p>
                    </div>

                    <!-- Info Box -->
                    <div class="bg-gray-100 border-2 border-black rounded p-4 mt-6">
                        <p class="font-bold text-sm mb-2">💡 Mẹo</p>
                        <p class="text-xs">Mua gói lớn hơn để tiết kiệm hơn. Tiền không sử dụng sẽ được giữ trong ví của bạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Update summary when package changes
        document.querySelectorAll('input[name="package"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                const customField = document.getElementById('custom-amount-field');
                if (e.target.value === 'custom') {
                    customField.style.display = 'block';
                } else {
                    customField.style.display = 'none';
                    document.getElementById('amount-input').value = e.target.value;
                    updateSummary();
                }
            });
        });

        // Update summary when payment method changes
        document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                document.getElementById('method-input').value = e.target.value;
                updateSummary();
            });
        });

        function updateSummary() {
            const amount = document.getElementById('amount-input').value;
            const method = document.getElementById('method-input').value;
            
            document.getElementById('summary-amount').textContent = 
                new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' })
                    .format(amount);
            
            const methodNames = {
                'momo': 'MoMo',
                'bank': 'Chuyển khoản',
                'card': 'Thẻ',
                'vnpay': 'VNPAY'
            };
            document.getElementById('summary-method').textContent = methodNames[method] || method;
        }

        updateSummary();
    </script>

    <!-- Footer -->
    <footer class="bg-white border-t border-black mt-12 py-12 px-6">
        <div class="max-w-6xl mx-auto text-center text-sm">
            <p>&copy; 2025 TaiLieuHub. Bản quyền được bảo vệ.</p>
        </div>
    </footer>
</body>
</html>