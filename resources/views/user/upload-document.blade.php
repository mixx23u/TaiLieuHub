<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tải Lên Tài Liệu - TaiLieuHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <!-- Loading Popup -->
    <div id="loading-popup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 max-w-sm text-center">
            <div class="animate-spin rounded-full h-16 w-16 border-b-4 border-black mx-auto mb-4"></div>
            <p class="text-xl font-bold">Đang phân tích tài liệu...</p>
            <p class="text-gray-600 mt-2">Vui lòng đợi trong giây lát</p>
        </div>
    </div>
    <!-- Header -->
    <header class="bg-black text-white">
        <nav class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="index.html">TaiLieuHub</a>
            </div>
            <div class="flex gap-6 items-center">
                <a href="explore.html" class="hover:text-gray-300">Khám phá</a>
                <a href="login.html" class="px-4 py-2 border border-white rounded hover:bg-white hover:text-black transition">Đăng nhập</a>
            </div>
        </nav>
    </header>

    <!-- Upload Form -->
    <section class="py-12 px-6 max-w-3xl mx-auto">
        <div class="mb-8">
            <a href="index.html" class="font-semibold hover:underline">← Quay lại</a>
            <h1 class="text-4xl font-bold mt-4">Tải Lên Tài Liệu Của Bạn</h1>
            <p class="text-gray-600 mt-2">Chia sẻ kiến thức của bạn với cộng đồng</p>
        </div>

        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <!-- Document Title -->
            <div>
                <label class="block font-semibold mb-2">Tiêu Đề Tài Liệu *</label>
                <input type="text" name="title" required 
                    placeholder="Nhập tiêu đề tài liệu của bạn"
                    class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
            </div>

            <!-- Description -->
            <div>
                <label class="block font-semibold mb-2">Mô Tả *</label>
                <textarea id="description-field" name="description" required rows="5" disabled
                    placeholder="Vui lòng chọn file trước để tự động phân tích..."
                    class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition disabled:bg-gray-200 disabled:cursor-not-allowed"></textarea>
            </div>

            <!-- Category -->
            <div>
                <label class="block font-semibold mb-2">Chủ Đề *</label>
                <select id="category-field" name="category" required disabled
                    class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none disabled:bg-gray-200 disabled:cursor-not-allowed">
                    <option value="">Vui lòng chọn file trước...</option>
                    <option value="lap-trinh">Lập Trình</option>
                    <option value="thiet-ke">Thiết Kế</option>
                    <option value="marketing">Marketing</option>
                    <option value="kinh-te">Kinh Tế</option>
                    <option value="khoa-hoc">Khoa Học</option>
                    <option value="lich-su">Lịch Sử</option>
                    <option value="van-hoc">Văn Học</option>
                    <option value="suc-khoe">Sức Khỏe</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Price Type -->
            <div>
                <label class="block font-semibold mb-2">Loại Giá *</label>
                <div class="space-y-3">
                    <label class="flex items-center">
                        <input type="radio" name="price_type" value="free" checked class="mr-3">
                        <span>Miễn phí</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="price_type" value="paid" class="mr-3">
                        <span>Có thể thanh toán</span>
                    </label>
                </div>
            </div>

            <!-- Price (if paid) -->
            <div id="price-field" style="display: none;">
                <label class="block font-semibold mb-2">Giá (VNĐ)</label>
                <input type="number" name="price" min="0" placeholder="Nhập giá tài liệu"
                    class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
            </div>

            <!-- File Upload -->
            <div>
                <label class="block font-semibold mb-2">Tải Lên File *</label>
                <div id="drop-zone"
                    class="border-2 border-dashed border-black rounded p-8 text-center cursor-pointer hover:bg-gray-50 transition">
                    <input type="file" name="file" id="file-input" required accept=".pdf,.doc,.docx,.txt,.pptx"
                        class="hidden" onchange="handleFile(this.files)">
                    <div onclick="document.getElementById('file-input').click()">
                        <p class="text-3xl mb-2">📁</p>
                        <p class="font-semibold mb-1">Kéo thả file tại đây</p>
                        <p class="text-sm text-gray-600">hoặc click để chọn</p>
                        <p class="text-xs text-gray-500 mt-3">Định dạng hỗ trợ: PDF, DOC, DOCX, TXT, PPTX (Max 100MB)
                        </p>
                    </div>
                </div>
                <p id="file-name" class="text-sm mt-2 text-gray-600"></p>
            </div>

            <!-- Tags -->
            <div>
                <label class="block font-semibold mb-2">Thẻ (Tags)</label>
                <input type="text" name="tags"
                    placeholder="Nhập các thẻ, cách nhau bằng dấu phẩy (ví dụ: Python, Beginner, Tutorial)"
                    class="w-full px-4 py-3 border-2 border-black rounded focus:outline-none focus:bg-black focus:text-white transition">
            </div>

            <!-- Agreement -->
            <div class="border-2 border-black rounded p-4 bg-gray-50">
                <label class="flex items-start">
                    <input type="checkbox" name="agreement" required class="mr-3 mt-1">
                    <span class="text-sm">
                        Tôi xác nhận rằng tài liệu này là tác phẩm của tôi hoặc tôi có quyền chia sẻ nó.
                        Tôi đồng ý với <a href="#" class="font-bold hover:underline">Điều khoản sử dụng</a> của
                        TaiLieuHub.
                    </span>
                </label>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button type="submit"  class="flex-1 py-3 bg-black text-white font-bold rounded hover:bg-gray-800 transition">
                    Tải Lên Tài Liệu
                </button>
                <a href="index.html" class="flex-1 py-3 border-2 border-black font-bold rounded text-center hover:bg-black hover:text-white transition">
                    Hủy
                </a>
            </div>
        </form>
    </section>

    <script>
        // Show/hide price field based on price type
        document.querySelectorAll('input[name="price_type"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                document.getElementById('price-field').style.display = 
                    e.target.value === 'paid' ? 'block' : 'none';
            });
        });

        // Update file name display
        function updateFileName(input) {
            const fileName = input.files[0] ? input.files[0].name : '';
            document.getElementById('file-name').textContent = 
                fileName ? `Đã chọn: ${fileName}` : '';
        }
    </script>

    <!-- Footer -->
    <footer class="bg-white border-t border-black mt-12 py-12 px-6">
        <div class="max-w-6xl mx-auto text-center text-sm">
            <p>&copy; 2025 TaiLieuHub. Bản quyền được bảo vệ.</p>
        </div>
    </footer>
</body>

</html>

<script>
    const dropZone = document.getElementById("drop-zone");
    const fileNameDisplay = document.getElementById("file-name");

    // Drag & drop events
    dropZone.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZone.classList.add("bg-gray-100");
    });
    dropZone.addEventListener("dragleave", () => {
        dropZone.classList.remove("bg-gray-100");
    });
    dropZone.addEventListener("drop", (e) => {
        e.preventDefault();
        dropZone.classList.remove("bg-gray-100");
        handleFile(e.dataTransfer.files);
    });

    async function handleFile(files) {
        if (!files || files.length === 0) return;

        const file = files[0];

        // Optional: check size (100MB max)
        const maxBytes = 100 * 1024 * 1024;
        if (file.size > maxBytes) {
            fileNameDisplay.textContent = "File quá lớn (tối đa 100MB).";
            return;
        }

        fileNameDisplay.textContent = "Đã chọn: " + file.name;

        // Hiện loading popup
        const loadingPopup = document.getElementById('loading-popup');
        loadingPopup.classList.remove('hidden');

        const formData = new FormData();
        formData.append("file", file, file.name);

        // Sử dụng localhost vì browser gọi từ phía client
        const n8nWebhookURL = "http://localhost:5678/webhook-test/file-upload";

        try {
            const resp = await fetch(n8nWebhookURL, {
                method: "POST",
                body: formData,
            });

            // Kiểm tra status trước khi parse JSON
            if (!resp.ok) {
                const text = await resp.text();
                console.error("HTTP error", resp.status, text);
                loadingPopup.classList.add('hidden');
                alert("Gửi file thất bại: " + resp.status);
                return;
            }

            // Nếu n8n trả JSON
            let result;
            try {
                result = await resp.json();
                console.log("Phản hồi từ n8n:", result);

                // Enable fields
                const categorySelect = document.getElementById('category-field');
                const descriptionField = document.getElementById('description-field');
                categorySelect.disabled = false;
                descriptionField.disabled = false;

                // Set category
                if (result.category && result.category.value) {
                    categorySelect.value = result.category.value;

                    // Highlight
                    categorySelect.classList.add('bg-yellow-100');
                    setTimeout(() => {
                        categorySelect.classList.remove('bg-yellow-100');
                    }, 2000);

                    console.log("✓ Đã set category:", result.category.label);
                }

                // Set description
                if (result.description) {
                    descriptionField.value = result.description;
                    descriptionField.classList.add('bg-yellow-100');
                    setTimeout(() => {
                        descriptionField.classList.remove('bg-yellow-100');
                    }, 2000);
                }

                // Ẩn loading popup
                loadingPopup.classList.add('hidden');

            } catch (err) {
                // nếu không phải JSON thì log text
                const text = await resp.text();
                console.log("Phản hồi (text):", text);
                loadingPopup.classList.add('hidden');
            }

            alert("File đã gửi đi phân tích! Thông tin đã được tự động điền.");
        } catch (err) {
            console.error("Lỗi khi gửi request:", err);
            loadingPopup.classList.add('hidden');
            alert("Lỗi khi gửi file (xem console). Kiểm tra CORS / URL / mạng.");
        }
    }
</script>
