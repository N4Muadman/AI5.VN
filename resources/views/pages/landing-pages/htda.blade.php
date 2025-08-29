<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa Training Chuyên Sâu: Tiểu Luận, NCKH & Đồ Án Tốt Nghiệp IT/ATTT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }

        .font-sans {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .code-block {
            background: #1e293b;
            border-left: 4px solid #10b981;
        }

        .error-line {
            background: #fef2f2;
            border-left: 4px solid #ef4444;
        }

        .success-line {
            background: #f0fdf4;
            border-left: 4px solid #10b981;
        }

        .hover-lift {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        #button-contact-vr {
            position: fixed;
            bottom: 10px;
            z-index: 99999
        }

        #button-contact-vr .button-contact {
            position: relative;
            margin-top: -5px
        }

        #button-contact-vr .button-contact .phone-vr {
            position: relative;
            visibility: visible;
            background-color: transparent;
            width: 90px;
            height: 90px;
            cursor: pointer;
            z-index: 11;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            transition: visibility .5s;
            left: 0;
            bottom: 0;
            display: block
        }

        .phone-vr-circle-fill {
            width: 65px;
            height: 65px;
            top: 12px;
            left: 12px;
            position: absolute;
            box-shadow: 0 0 0 0 #c31d1d;
            background-color: rgba(230, 8, 8, 0.7);
            border-radius: 50%;
            border: 2px solid transparent;
            -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-animuiion: zoom 1.3s infinite;
            animation: zoom 1.3s infinite
        }

        .phone-vr-img-circle {
            background-color: #e60808;
            width: 40px;
            height: 40px;
            line-height: 40px;
            top: 25px;
            left: 25px;
            position: absolute;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phone-vr-circle-fill 1s infinite ease-in-out
        }

        #telegram-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2c9fd8;
            background-color: rgb(44 159 216 / 74%)
        }

        .phone-bar a {
            position: absolute;
            margin-top: -65px;
            left: 30px;
            z-index: -1;
            color: #fff;
            font-size: 18px;
            padding: 7px 15px 7px 50px;
            border-radius: 100px;
            white-space: nowrap
        }

        .phone-bar a:hover {
            opacity: 0.8;
            color: #fff
        }

        @media(max-width: 736px) {
            .phone-bar {
                display: none
            }
        }

        #zalo-vr .phone-vr-circle-fill {
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7)
        }

        #zalo-vr .phone-vr-img-circle {
            background-color: #2196F3
        }

        #phone-vr .phone-vr-circle-fill {
            opacity: 0.7;
            box-shadow: 0 0 0 0 #0f7e77;
        }

        .phone-bar a,
        #phone-vr .phone-vr-circle-fill,
        #phone-vr .phone-vr-img-circle,
        #phone-vr .phone-bar a {
            background-color: #0f7e77;
        }

        @-webkit-keyframes phone-vr-circle-fill {
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg)
            }
        }

        @-webkit-keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        @keyframes zoom {
            0% {
                transform: scale(.9)
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent
            }

            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent
            }
        }

        .phone-vr-img-circle a {
            display: block;
            line-height: 37px
        }

        .phone-vr-img-circle img {
            max-height: 25px;
            max-width: 27px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%)
        }
    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-900">
    <!-- Header -->
    <div id="button-contact-vr" class="">
        <div id="gom-all-in-one">
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/0926397972">
                            <img alt="Zalo" src="/assets/images/zalo.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-mono font-bold text-lg">&lt;/&gt;</span>
                    </div>
                    <div>
                        <h1 class="font-mono font-bold text-xl text-gray-900">Tech Scholar</h1>
                        <p class="text-sm text-gray-600">Workbench</p>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#curriculum" class="text-gray-600 hover:text-emerald-600 transition-colors">Chương
                        trình</a>
                    <a href="#pricing" class="text-gray-600 hover:text-emerald-600 transition-colors">Học phí</a>
                    <a href="#register"
                        class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition-colors">Đăng
                        ký</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="gradient-bg py-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-block bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full text-sm font-mono mb-6">
                    // TRAINING CHUYÊN SÂU CHO NGÀNH IT & ATTT
                </div>
                <h1 class="font-mono font-bold text-4xl md:text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                    ĐỒ ÁN TỐT NGHIỆP IT & ATTT:<br>
                    <span class="text-emerald-600">BIẾN NỖI ÁM ẢNH</span><br>
                    THÀNH CÔNG TRÌNH ĐỂ ĐỜI
                </h1>
                <p class="text-xl text-gray-700 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Khóa training <strong>2 buổi DUY NHẤT</strong> cung cấp trọn bộ 'toolchain' và quy trình viết luận
                    văn, NCKH, KLTN đạt điểm A+ dành riêng cho dân Công nghệ.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="openRegistrationForm()"
                        class="bg-emerald-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-emerald-700 transition-all duration-300 hover-lift group hover:shadow-lg hover:shadow-emerald-500/25">
                        <span class="flex items-center justify-center">
                            ĐĂNG KÝ VỚI GIÁ SINH VIÊN
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300 opacity-0 group-hover:opacity-100"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </button>
                    <button onclick="scrollToCurriculum()"
                        class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-lg font-semibold text-lg hover:border-emerald-600 hover:text-emerald-600 transition-colors">
                        XEM CHƯƠNG TRÌNH
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Error Section -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-mono font-bold text-3xl md:text-4xl text-gray-900 mb-4">
                    BẠN CÓ ĐANG GẶP <span class="text-red-600">BUG</span>?
                </h2>
                <p class="text-xl text-gray-600">Những lỗi phổ biến mà sinh viên IT/ATTT thường gặp phải</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <div class="error-line p-6 rounded-lg">
                    <div class="flex items-start space-x-3">
                        <span class="font-mono text-red-600 font-bold">[ERROR]:</span>
                        <p class="text-gray-800 font-medium">Code thì nhanh, viết thì bí chữ?</p>
                    </div>
                </div>

                <div class="error-line p-6 rounded-lg">
                    <div class="flex items-start space-x-3">
                        <span class="font-mono text-red-600 font-bold">[ERROR]:</span>
                        <p class="text-gray-800 font-medium">Loay hoay với trích dẫn chuẩn IEEE?</p>
                    </div>
                </div>

                <div class="error-line p-6 rounded-lg">
                    <div class="flex items-start space-x-3">
                        <span class="font-mono text-red-600 font-bold">[ERROR]:</span>
                        <p class="text-gray-800 font-medium">Tìm paper trên IEEE Xplore, ACM như mò kim đáy bể?</p>
                    </div>
                </div>

                <div class="error-line p-6 rounded-lg">
                    <div class="flex items-start space-x-3">
                        <span class="font-mono text-red-600 font-bold">[ERROR]:</span>
                        <p class="text-gray-800 font-medium">Sợ "dính" Turnitin vì giải thích thuật toán và code?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum Section -->
    <section id="curriculum" class="py-20 gradient-bg">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-mono font-bold text-3xl md:text-4xl text-gray-900 mb-4">
                    LỘ TRÌNH "<span class="text-emerald-600">FIX BUG</span>" LUẬN VĂN TRONG 2 BUỔI HỌC
                </h2>
                <p class="text-xl text-gray-600">Quy trình chuẩn, logic và đậm chất kỹ thuật</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Buổi 1 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover-lift">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-mono font-bold text-xl">01</span>
                        </div>
                        <div>
                            <h3 class="font-mono font-bold text-xl text-gray-900">BUỔI 1</h3>
                            <p class="text-blue-600 font-semibold">XÂY DỰNG "ARCHITECTURE" & TỔNG QUAN TÀI LIỆU</p>
                            <p class="text-sm text-gray-600">(2-3 giờ)</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">🎯 Tìm và Phân tích Đề tài</h4>
                            <p class="text-gray-700 text-sm">Cách chọn đề tài hot trong ngành (ML, Blockchain, Cloud
                                Security, Phân tích mã độc...)</p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">🔍 Khai thác "API" tri thức</h4>
                            <p class="text-gray-700 text-sm">Làm chủ 9 kênh tìm tài liệu, đặc biệt IEEE Xplore, ACM
                                Digital Library, Springer</p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">📚 Quản lý "Repository" tài liệu</h4>
                            <p class="text-gray-700 text-sm">Sử dụng EndNote 20/21 để quản lý và review tài liệu tham
                                khảo hệ thống</p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">🏗️ Xây dựng "Blueprint" bài viết</h4>
                            <p class="text-gray-700 text-sm">Tư duy bố cục cho các dạng báo cáo kỹ thuật, NCKH, KLTN
                            </p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">✍️ Viết "Function" Mở đầu</h4>
                            <p class="text-gray-700 text-sm">Công thức 12 bước viết phần Mở đầu ấn tượng, đúng chuẩn
                                học thuật</p>
                        </div>
                    </div>
                </div>

                <!-- Buổi 2 -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover-lift">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-emerald-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-mono font-bold text-xl">02</span>
                        </div>
                        <div>
                            <h3 class="font-mono font-bold text-xl text-gray-900">BUỔI 2</h3>
                            <p class="text-emerald-600 font-semibold">"CODE" NỘI DUNG & "DEPLOY" BÀI VIẾT HOÀN CHỈNH
                            </p>
                            <p class="text-sm text-gray-600">(2-3 giờ)</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">📊 Thiết kế Bảng hỏi & Thu thập Data</h4>
                            <p class="text-gray-700 text-sm">Cách tạo khảo sát trên Google Forms cho đề tài UX/UI, an
                                toàn nhận thức...</p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">💻 Văn phong khoa học cho dân IT</h4>
                            <p class="text-gray-700 text-sm">Cách trình bày thuật toán, phân tích kết quả benchmark và
                                logic phản biện</p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">📝 Trích dẫn chuẩn IEEE/APA</h4>
                            <p class="text-gray-700 text-sm">Master kỹ thuật trích dẫn trực tiếp, gián tiếp, không còn
                                "lỗi dependency"</p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">📈 Trình bày & Phân tích Dữ liệu</h4>
                            <p class="text-gray-700 text-sm">Cách trực quan hóa kết quả bằng biểu đồ, bảng biểu chuyên
                                nghiệp</p>
                        </div>

                        <div class="success-line p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">🎯 Viết "Function" Kết luận</h4>
                            <p class="text-gray-700 text-sm">Cách viết phần Tiểu kết, Kết luận súc tích, đầy sức nặng
                            </p>
                        </div>

                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg mt-6">
                            <h4 class="font-semibold text-blue-900 mb-3 flex items-center">
                                🚀 (MỚI) "DEPLOY" & BẢO VỆ TRƯỚC HỘI ĐỒNG
                            </h4>
                            <div class="space-y-3">
                                <div class="flex items-start space-x-2">
                                    <span class="text-blue-600 font-bold text-sm">•</span>
                                    <div>
                                        <p class="font-medium text-blue-900 text-sm">Thiết kế Slide Deck chuyên nghiệp
                                        </p>
                                        <p class="text-blue-700 text-xs">Học tư duy "UI/UX cho bài trình bày", thiết kế
                                            slide súc tích và demo sản phẩm ấn tượng</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-2">
                                    <span class="text-blue-600 font-bold text-sm">•</span>
                                    <div>
                                        <p class="font-medium text-blue-900 text-sm">Chiến thuật "Handling Exceptions"
                                        </p>
                                        <p class="text-blue-700 text-xs">Mẹo và chiến lược trả lời câu hỏi phản biện từ
                                            hội đồng tự tin, logic</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-2">
                                    <span class="text-blue-600 font-bold text-sm">•</span>
                                    <div>
                                        <p class="font-medium text-blue-900 text-sm">Kỹ thuật "Pre-testing"</p>
                                        <p class="text-blue-700 text-xs">Cách làm việc với GVHD để nhận bộ câu hỏi "tủ"
                                            và chuẩn bị tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Debug Section -->
            <div class="mt-12 bg-white rounded-xl shadow-lg p-8">
                <h3 class="font-mono font-bold text-2xl text-gray-900 mb-6 text-center">
                    "<span class="text-red-600">DEBUG</span>" & TỐI ƯU HÓA
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">⚙️</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Setup MS Word/LaTeX như IDE</h4>
                        <p class="text-gray-600 text-sm">Mục lục, Bảng biểu tự động</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🤖</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Sử dụng AI hiệu quả</h4>
                        <p class="text-gray-600 text-sm">ChatGPT, Gemini để tìm kiếm, paraphrase giảm đạo văn</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl">🔍</span>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Check & sửa lỗi đạo văn</h4>
                        <p class="text-gray-600 text-sm">Cách sử dụng Turnitin hiệu quả</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate Section -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-mono font-bold text-3xl md:text-4xl text-gray-900 mb-4">
                    "<span class="text-emerald-600">COMMIT</span> THÀNH CÔNG VÀO CV CỦA BẠN"
                </h2>
                <p class="text-xl text-gray-600">Không chỉ là điểm số, đây còn là một chứng nhận đáng giá</p>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="bg-gradient-to-br from-emerald-50 to-blue-50 p-8 rounded-xl border-2 border-emerald-200">
                    <div class="text-center">
                        <div
                            class="w-20 h-20 bg-emerald-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <span class="text-white text-3xl">🏆</span>
                        </div>
                        <h3 class="font-mono font-bold text-2xl text-gray-900 mb-4">CHỨNG NHẬN HOÀN THÀNH</h3>
                        <p class="text-gray-700 mb-6">Khóa Training Chuyên Sâu: Tiểu Luận, NCKH & Đồ Án Tốt Nghiệp cho
                            ngành CNTT & ATTT</p>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <p class="font-mono text-sm text-gray-600">Certificate ID: #TSW-2024-XXXX</p>
                            <p class="text-sm text-gray-600 mt-2">Được cấp bởi Tech Scholar Workbench</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 gradient-bg">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-mono font-bold text-3xl md:text-4xl text-gray-900 mb-4">
                    KHOẢN ĐẦU TƯ NHỎ CHO MỘT <span class="text-emerald-600">CỘT MỐC LỚN</span>
                </h2>
                <p class="text-xl text-gray-600">Đừng để Đồ Án Tốt Nghiệp trở thành rào cản</p>
            </div>

            <div class="max-w-2xl mx-auto">
                <div class="bg-white rounded-xl shadow-xl p-8 border-2 border-emerald-200">
                    <div class="text-center mb-8">
                        <h3 class="font-mono font-bold text-2xl text-gray-900 mb-2">PACKAGE HOÀN CHỈNH</h3>
                        <div class="flex items-center justify-center space-x-2 mb-4">
                            <span class="text-4xl font-bold text-emerald-600">600.000</span>
                            <span class="text-xl text-gray-600">VNĐ</span>
                        </div>
                        <p class="text-gray-600">Giá đặc biệt dành cho sinh viên</p>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span class="text-gray-700">2 Buổi học chuyên sâu (4-6 giờ)</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span class="text-gray-700">Bộ tài liệu & template chuẩn</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span class="text-gray-700">Video ghi hình 2 buổi học</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span class="text-gray-700">Chứng nhận hoàn thành</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="text-emerald-600 font-bold">✓</span>
                            <span class="text-gray-700">Hỗ trợ Q&A trong 30 ngày</span>
                        </div>
                    </div>

                    <button id="registerBtn" onclick="openRegistrationForm()"
                        class="w-full bg-emerald-600 text-white py-4 rounded-lg font-bold text-lg hover:bg-emerald-700 transition-all duration-300 hover-lift group hover:shadow-lg hover:shadow-emerald-500/25">
                        <span class="flex items-center justify-center">
                            GIỮ SUẤT HỌC CỦA BẠN NGAY
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300 opacity-0 group-hover:opacity-100"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </button>
                    <p class="text-center text-sm text-gray-600 mt-4">
                        * Số lượng có hạn để đảm bảo chất lượng hỗ trợ
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-mono font-bold text-3xl md:text-4xl text-gray-900 mb-4">
                    FEEDBACK TỪ <span class="text-emerald-600">SINH VIÊN CŨ</span>
                </h2>
                <p class="text-xl text-gray-600">Những chia sẻ thật từ các bạn đã tham gia</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">MH</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Minh Hoàng</h4>
                            <p class="text-sm text-gray-600">CNTT - ĐH Bách Khoa</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Từ việc không biết bắt đầu từ đâu đến hoàn thành KLTN điểm A. Khóa
                        học này thực sự là game changer!"</p>
                    <div class="flex text-yellow-400 mt-3">
                        ⭐⭐⭐⭐⭐
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-emerald-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">TL</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Thu Linh</h4>
                            <p class="text-sm text-gray-600">ATTT - ĐH Công nghệ</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Cách tiếp cận rất logic và dễ hiểu. Đặc biệt phần trích dẫn IEEE
                        giúp mình tự tin hơn rất nhiều."</p>
                    <div class="flex text-yellow-400 mt-3">
                        ⭐⭐⭐⭐⭐
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                            <span class="text-white font-bold">DK</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Đức Khang</h4>
                            <p class="text-sm text-gray-600">CNTT - ĐH Quốc gia</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Template và quy trình rất chuẩn. Giờ viết báo cáo gì cũng áp dụng
                        được, không chỉ riêng KLTN."</p>
                    <div class="flex text-yellow-400 mt-3">
                        ⭐⭐⭐⭐⭐
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="register" class="py-20 bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="font-mono font-bold text-3xl md:text-4xl mb-6">
                ĐỪNG ĐỂ ĐỒ ÁN TỐT NGHIỆP THÀNH <span class="text-red-400">NIGHTMARE</span>
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Hãy biến nó thành một <span class="text-emerald-400 font-semibold">SUCCESS STORY</span> đáng tự hào
            </p>

            <div class="bg-gray-800 p-8 rounded-xl mb-8">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="text-left">
                        <h3 class="font-mono font-bold text-xl mb-4">ĐĂNG KÝ NGAY HÔM NAY</h3>
                        <ul class="space-y-2 text-gray-300">
                            <li>✓ Bắt đầu học ngay sau khi đăng ký</li>
                            <li>✓ Nhóm học nhỏ, tương tác cao</li>
                            <li>✓ Hỗ trợ 1-1 khi cần thiết</li>
                            <li>✓ Đảm bảo hoàn tiền 100% nếu không hài lòng</li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-emerald-400 mb-2">600.000 VNĐ</div>
                        <p class="text-gray-400 mb-6">Đầu tư một lần, thành công cả đời</p>
                        <button onclick="openRegistrationForm()"
                            class="bg-emerald-600 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-emerald-700 transition-all duration-300 hover-lift group hover:shadow-lg hover:shadow-emerald-500/25 w-full">
                            <span class="flex items-center justify-center">
                                ĐĂNG KÝ NGAY
                                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300 opacity-0 group-hover:opacity-100"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <p class="text-gray-400 text-sm">
                Có câu hỏi? Liên hệ: <a href="mailto:support@techscholar.vn"
                    class="text-emerald-400 hover:underline">support@techscholar.vn</a> |
                Hotline: <a href="tel:0123456789" class="text-emerald-400 hover:underline">0123 456 789</a>
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-12">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-mono font-bold text-lg">&lt;/&gt;</span>
                        </div>
                        <div>
                            <h3 class="font-mono font-bold text-xl text-white">Tech Scholar</h3>
                            <p class="text-sm">Workbench</p>
                        </div>
                    </div>
                    <p class="text-sm">Nâng tầm kỹ năng viết học thuật cho dân Công nghệ</p>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">Khóa học</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">Tiểu luận CNTT</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">NCKH ATTT</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">Đồ án tốt nghiệp</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">Hỗ trợ</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">Liên hệ</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">Chính sách</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-white mb-4">Kết nối</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">Facebook</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">Zalo</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors">Email</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm">
                <p>&copy; 2024 Tech Scholar Workbench. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Registration Form Popup -->
    <div id="registrationOverlay"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden opacity-0 transition-opacity duration-300">
        <div id="registrationForm"
            class="fixed right-0 top-0 h-full w-full max-w-md bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-out">
            <div class="h-full flex flex-col">
                <!-- Header -->
                <div class="bg-emerald-600 text-white p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-mono font-bold text-xl">GHI DANH KHÓA HỌC</h3>
                            <p class="text-emerald-100 text-sm mt-1">FIX BUG LUẬN VĂN</p>
                        </div>
                        <button onclick="closeRegistrationForm()"
                            class="text-white hover:text-emerald-200 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="flex-1 p-6 overflow-y-auto">
                    <form id="registrationFormData" class="space-y-6"
                        action="{{ route('course-register', $landingPage->id) }}" method="POST">
                        @csrf
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Họ và Tên <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="fullName" required name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                placeholder="Nhập họ và tên của bạn">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Số Điện Thoại <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="phone" required name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                placeholder="0123 456 789">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" required name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                placeholder="email@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Trường Đại Học
                            </label>
                            <input type="text" id="university" name="more_information"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                placeholder="Tên trường (không bắt buộc)">
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">Thông tin khóa học:</h4>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• 2 buổi học chuyên sâu (4-6 giờ)</li>
                                <li>• Bộ tài liệu & template chuẩn</li>
                                <li>• Video ghi hình + Chứng nhận</li>
                                <li class="font-semibold text-emerald-600">• Học phí: 600.000 VNĐ</li>
                            </ul>
                        </div>

                        <div class="p-6 border-t border-gray-200">
                            <button id="submitBtn" type="submit"
                                class="w-full bg-gray-400 text-white py-3 rounded-lg font-bold text-lg transition-all duration-300 cursor-not-allowed">
                                HOÀN TẤT GHI DANH
                            </button>
                            <p class="text-xs text-gray-500 mt-3 text-center">
                                Bằng việc đăng ký, bạn đồng ý với điều khoản sử dụng của chúng tôi
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    <div id="successMessage"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden opacity-0 transition-opacity duration-300">
        <div class="fixed right-0 top-0 h-full w-full max-w-md bg-white shadow-2xl flex items-center justify-center">
            <div class="text-center p-8">
                <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                </div>
                <h3 class="font-mono font-bold text-2xl text-gray-900 mb-4">Đăng ký thành công!</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Vui lòng kiểm tra email để nhận thông tin chi tiết về lịch học và hướng dẫn thanh toán.
                    <br><br>
                    <strong>Hẹn gặp bạn trong buổi học!</strong>
                </p>
                <button onclick="closeSuccessMessage()"
                    class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-emerald-700 transition-colors">
                    Đóng
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: '🎉 Đăng ký thành công!',
                text: 'Chúng tôi sẽ liên hệ với bạn trong vòng 15 phút để hướng dẫn thanh toán và kích hoạt khóa học.',
                icon: 'success',
                confirmButtonText: 'Tuyệt vời!',
                background: '#1f2937',
                color: '#fff',
                confirmButtonColor: '#FF416C'
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            Swal.fire({
                title: '🎉 Đăng ký không thành công!',
                text: 'Đang có lỗi hệ thống',
                icon: 'error',
                confirmButtonText: 'Thất bại!',
                background: '#1f2937',
                color: '#fff',
                confirmButtonColor: '#FF416C'
            });
        </script>
    @endif
    <script>
        function scrollToRegister() {
            document.getElementById('register').scrollIntoView({
                behavior: 'smooth'
            });
        }

        function scrollToCurriculum() {
            document.getElementById('curriculum').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Registration Form Functions
        function openRegistrationForm() {
            const overlay = document.getElementById('registrationOverlay');
            const form = document.getElementById('registrationForm');

            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';

            setTimeout(() => {
                overlay.classList.remove('opacity-0');
                form.classList.remove('translate-x-full');
            }, 10);
        }

        function closeRegistrationForm() {
            const overlay = document.getElementById('registrationOverlay');
            const form = document.getElementById('registrationForm');

            overlay.classList.add('opacity-0');
            form.classList.add('translate-x-full');

            setTimeout(() => {
                overlay.classList.add('hidden');
                document.body.style.overflow = 'auto';
                resetForm();
            }, 300);
        }

        function resetForm() {
            document.getElementById('registrationFormData').reset();
            updateSubmitButton();
        }

        function updateSubmitButton() {
            const fullName = document.getElementById('fullName').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const submitBtn = document.getElementById('submitBtn');

            const isValid = fullName && phone && email && validateEmail(email);

            if (isValid) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('bg-gray-400', 'cursor-not-allowed');
                submitBtn.classList.add('bg-emerald-600', 'hover:bg-emerald-700', 'cursor-pointer');
                submitBtn.textContent = 'HOÀN TẤT GHI DANH';
            } else {
                submitBtn.disabled = true;
                submitBtn.classList.add('bg-gray-400', 'cursor-not-allowed');
                submitBtn.classList.remove('bg-emerald-600', 'hover:bg-emerald-700', 'cursor-pointer');
                submitBtn.textContent = 'HOÀN TẤT GHI DANH';
            }
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function submitRegistration() {
            const fullName = document.getElementById('fullName').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const university = document.getElementById('university').value.trim();

            if (!fullName || !phone || !email) {
                alert('Vui lòng điền đầy đủ thông tin bắt buộc!');
                return;
            }

            if (!validateEmail(email)) {
                alert('Vui lòng nhập email hợp lệ!');
                return;
            }

            // Simulate form submission
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.textContent = 'ĐANG XỬ LÝ...';
            submitBtn.disabled = true;

            setTimeout(() => {
                closeRegistrationForm();
                showSuccessMessage();
            }, 1500);
        }

        function showSuccessMessage() {
            const successOverlay = document.getElementById('successMessage');

            successOverlay.classList.remove('hidden');
            setTimeout(() => {
                successOverlay.classList.remove('opacity-0');
            }, 10);
        }

        function closeSuccessMessage() {
            const successOverlay = document.getElementById('successMessage');

            successOverlay.classList.add('opacity-0');
            setTimeout(() => {
                successOverlay.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }, 300);
        }

        // Event listeners for form validation
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = ['fullName', 'phone', 'email'];
            inputs.forEach(id => {
                document.getElementById(id).addEventListener('input', updateSubmitButton);
            });
        });

        // Close form when clicking overlay
        document.getElementById('registrationOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeRegistrationForm();
            }
        });

        document.getElementById('successMessage').addEventListener('click', function(e) {
            if (e.target === this) {
                closeSuccessMessage();
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.classList.add('shadow-lg');
            } else {
                header.classList.remove('shadow-lg');
            }
        });

        // Escape key to close modals
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const registrationOverlay = document.getElementById('registrationOverlay');
                const successMessage = document.getElementById('successMessage');

                if (!registrationOverlay.classList.contains('hidden')) {
                    closeRegistrationForm();
                }
                if (!successMessage.classList.contains('hidden')) {
                    closeSuccessMessage();
                }
            }
        });
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'976a28ac121d6e4b',t:'MTc1NjQ1MDY5NS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>
