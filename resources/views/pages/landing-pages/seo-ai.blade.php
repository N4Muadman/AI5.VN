<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO Analytics Mastery - Cuộc Cách Mạng SEO AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #0F172A 0%, #1E293B 50%, #0F172A 100%);
        }

        .gradient-text-pink {
            background: linear-gradient(135deg, #EC4899 0%, #8B5CF6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-cyan {
            background: linear-gradient(135deg, #10B981 0%, #06B6D4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-red {
            background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glassmorphism {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glassmorphism-gold {
            background: rgba(255, 215, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 215, 0, 0.3);
        }

        .pre-hero {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 1s ease-out;
        }

        .pre-hero.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }

        @keyframes pulse-glow {
            from {
                box-shadow: 0 0 20px rgba(34, 211, 238, 0.3);
            }

            to {
                box-shadow: 0 0 40px rgba(34, 211, 238, 0.6);
            }
        }

        .gift-box {
            position: relative;
            overflow: hidden;
            transition: transform 0.5s ease;
        }

        .gift-box:hover {
            transform: scale(1.05);
        }

        .gift-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 215, 0, 0.1), transparent);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .timeline-item {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s ease;
        }

        .timeline-item.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .typing-cursor::after {
            content: '|';
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            50% {
                opacity: 1;
            }

            51%,
            100% {
                opacity: 0;
            }
        }

        .revolution-badge {
            background: linear-gradient(45deg, #EF4444, #DC2626);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
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

<body class="gradient-bg text-white overflow-x-hidden">
    <!-- Pre-Hero Section -->
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
    <div id="preHero" class="pre-hero">
        <div class="text-center">
            <div class="text-4xl md:text-6xl font-bold mb-8">
                <span id="oldSeo" class="text-gray-400"></span>
            </div>
            <div class="text-4xl md:text-6xl font-bold mb-8">
                <span id="deadSeo" class="gradient-text-red hidden"></span>
            </div>
            <div class="text-4xl md:text-6xl font-bold">
                <span id="newSeo" class="gradient-text-cyan hidden"></span>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center px-4 py-20">
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="revolution-badge inline-block px-6 py-2 rounded-full text-white font-bold mb-8">
                🚨 CUỘC CÁCH MẠNG BẮT BUỘC
            </div>

            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                <span class="gradient-text-pink">LÃNH ĐẠO CUỘC CÁCH MẠNG</span><br>
                <span class="gradient-text-cyan">SEO AI:</span><br>
                <span class="text-white">TÁI ĐỊNH NGHĨA CUỘC CHƠI</span><br>
                <span class="gradient-text-pink">& THỐNG TRỊ GOOGLE</span>
            </h1>

            <div class="w-32 h-1 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-8"></div>

            <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed mb-12">
                <span class="text-red-400 font-bold">Ngừng đốt tiền vào những chiến thuật lỗi thời.</span><br>
                Đã đến lúc biến AI thành đồng minh và xây dựng <span class="gradient-text-cyan font-bold">đế chế
                    SEO</span> của riêng bạn.
            </p>

            <!-- Revolution Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <div class="glassmorphism rounded-xl p-6 hover-scale">
                    <div class="text-3xl font-bold gradient-text-red mb-2">95%</div>
                    <div class="text-gray-300">SEO Cũ Thất Bại</div>
                </div>
                <div class="glassmorphism rounded-xl p-6 hover-scale">
                    <div class="text-3xl font-bold gradient-text-cyan mb-2">10x</div>
                    <div class="text-gray-300">Hiệu Suất AI</div>
                </div>
                <div class="glassmorphism rounded-xl p-6 hover-scale">
                    <div class="text-3xl font-bold gradient-text-pink mb-2">$5000+</div>
                    <div class="text-gray-300">Thu Nhập/Tháng</div>
                </div>
                <div class="glassmorphism rounded-xl p-6 hover-scale">
                    <div class="text-3xl font-bold text-green-400 mb-2">1-Click</div>
                    <div class="text-gray-300">Tự Động Hóa</div>
                </div>
            </div>

            <button
                class="bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-bold py-6 px-16 rounded-full text-2xl transition-all duration-300 transform hover:scale-105 pulse-glow mb-4">
                THAM GIA CUỘC CÁCH MẠNG
            </button>
            <div class="text-sm text-yellow-400 font-bold">
                ⚡ Chỉ còn 24 giờ - Ưu đãi đặc biệt kết thúc sớm
            </div>
        </div>
    </section>

    <!-- Timeline: Old vs New -->
    <section class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                <span class="gradient-text-red">SỰ SỤP ĐỔ</span> & <span class="gradient-text-cyan">TRỖI DẬY</span>
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Old Era -->
                <div class="timeline-item">
                    <div class="glassmorphism rounded-2xl p-8 border-2 border-red-500">
                        <h3 class="text-3xl font-bold gradient-text-red mb-6 text-center">
                            ⚰️ KỶ NGUYÊN CŨ - ĐÃ CHẾT
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center text-red-400">
                                <span class="text-2xl mr-4">❌</span>
                                <span>Viết content thủ công hàng giờ</span>
                            </div>
                            <div class="flex items-center text-red-400">
                                <span class="text-2xl mr-4">❌</span>
                                <span>Nghiên cứu từ khóa bằng cảm tính</span>
                            </div>
                            <div class="flex items-center text-red-400">
                                <span class="text-2xl mr-4">❌</span>
                                <span>Phân tích đối thủ thủ công</span>
                            </div>
                            <div class="flex items-center text-red-400">
                                <span class="text-2xl mr-4">❌</span>
                                <span>Báo cáo Excel phức tạp</span>
                            </div>
                            <div class="flex items-center text-red-400">
                                <span class="text-2xl mr-4">❌</span>
                                <span>Tốn 8-10 giờ/ngày cho 1 dự án</span>
                            </div>
                        </div>
                        <div class="mt-6 text-center">
                            <div class="text-2xl font-bold text-red-500">Kết quả: THẤT BẠI</div>
                        </div>
                    </div>
                </div>

                <!-- New Era -->
                <div class="timeline-item">
                    <div class="glassmorphism rounded-2xl p-8 border-2 border-cyan-500">
                        <h3 class="text-3xl font-bold gradient-text-cyan mb-6 text-center">
                            🚀 KỶ NGUYÊN MỚI - THỐNG TRỊ
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center text-cyan-400">
                                <span class="text-2xl mr-4">✅</span>
                                <span>AI tạo 100 bài viết chất lượng/ngày</span>
                            </div>
                            <div class="flex items-center text-cyan-400">
                                <span class="text-2xl mr-4">✅</span>
                                <span>Phân tích từ khóa tự động bằng AI</span>
                            </div>
                            <div class="flex items-center text-cyan-400">
                                <span class="text-2xl mr-4">✅</span>
                                <span>Spy đối thủ trong 30 giây</span>
                            </div>
                            <div class="flex items-center text-cyan-400">
                                <span class="text-2xl mr-4">✅</span>
                                <span>Báo cáo tự động 1-click</span>
                            </div>
                            <div class="flex items-center text-cyan-400">
                                <span class="text-2xl mr-4">✅</span>
                                <span>Quản lý 10 dự án cùng lúc</span>
                            </div>
                        </div>
                        <div class="mt-6 text-center">
                            <div class="text-2xl font-bold gradient-text-cyan">Kết quả: THỐNG TRỊ</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6 Modules Section -->
    <section class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                <span class="gradient-text-pink">6 BƯỚC CÁCH MẠNG</span><br>
                <span class="text-white">Từ Người Mới Đến Bậc Thầy</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Module 1 -->
                <div class="glassmorphism rounded-2xl p-8 hover-scale relative">
                    <div
                        class="absolute top-4 right-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        BƯỚC 1
                    </div>
                    <div class="text-4xl mb-4">🧠</div>
                    <h3 class="text-xl font-bold gradient-text-pink mb-4">Nền Tảng & Tư Duy Cách Mạng</h3>
                    <p class="text-gray-300 mb-4">
                        Tại sao SEO truyền thống thất bại? Giới thiệu kỷ nguyên SEO AI và tư duy "One-Man-Army".
                    </p>
                    <div class="space-y-2 text-sm">
                        <div class="text-green-400">✓ Phân tích thất bại của SEO cũ</div>
                        <div class="text-green-400">✓ Mindset chiến thắng AI</div>
                        <div class="text-green-400">✓ Roadmap thành công</div>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="glassmorphism rounded-2xl p-8 hover-scale relative">
                    <div
                        class="absolute top-4 right-4 bg-gradient-to-r from-cyan-500 to-blue-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        BƯỚC 2
                    </div>
                    <div class="text-4xl mb-4">🏗️</div>
                    <h3 class="text-xl font-bold gradient-text-cyan mb-4">Technical & On-page Mastery</h3>
                    <p class="text-gray-300 mb-4">
                        Làm chủ cấu trúc Sitemap, Internal Link để tạo nên một ma trận sức mạnh cho website.
                    </p>
                    <div class="space-y-2 text-sm">
                        <div class="text-green-400">✓ Sitemap Architecture</div>
                        <div class="text-green-400">✓ Internal Link Strategy</div>
                        <div class="text-green-400">✓ Technical SEO Audit</div>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="glassmorphism rounded-2xl p-8 hover-scale relative">
                    <div
                        class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        BƯỚC 3
                    </div>
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="text-xl font-bold gradient-text-cyan mb-4">SEO AI Content Revolution</h3>
                    <p class="text-gray-300 mb-4">
                        Nghệ thuật tạo hàng nghìn bài viết chất lượng bằng AI, chiếm lĩnh mọi từ khóa ngách.
                    </p>
                    <div class="space-y-2 text-sm">
                        <div class="text-green-400">✓ AI Content Generation</div>
                        <div class="text-green-400">✓ Keyword Domination</div>
                        <div class="text-green-400">✓ Content Scaling</div>
                    </div>
                </div>

                <!-- Module 4 -->
                <div class="glassmorphism rounded-2xl p-8 hover-scale relative">
                    <div
                        class="absolute top-4 right-4 bg-gradient-to-r from-purple-500 to-pink-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        BƯỚC 4
                    </div>
                    <div class="text-4xl mb-4">🔗</div>
                    <h3 class="text-xl font-bold gradient-text-pink mb-4">Off-page & Xây Dựng Uy Tín Số</h3>
                    <p class="text-gray-300 mb-4">
                        Nghệ thuật xây dựng Backlink chất lượng, chiến lược External Link để Google tin tưởng.
                    </p>
                    <div class="space-y-2 text-sm">
                        <div class="text-green-400">✓ High-Quality Backlinks</div>
                        <div class="text-green-400">✓ Authority Building</div>
                        <div class="text-green-400">✓ Link Building Automation</div>
                    </div>
                </div>

                <!-- Module 5 -->
                <div class="glassmorphism rounded-2xl p-8 hover-scale relative border-2 border-yellow-500">
                    <div
                        class="absolute top-4 right-4 bg-gradient-to-r from-yellow-500 to-orange-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        ĐỈNH CAO
                    </div>
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-yellow-400 mb-4">Analytics & Huấn Luyện AI "1-Click"</h3>
                    <p class="text-gray-300 mb-4">
                        Đọc vị mọi chỉ số của Google và biến AI thành trợ lý cá nhân chỉ cần Copy & Paste.
                    </p>
                    <div class="space-y-2 text-sm">
                        <div class="text-green-400">✓ Advanced Analytics</div>
                        <div class="text-green-400">✓ AI Personal Assistant</div>
                        <div class="text-green-400">✓ 1-Click Automation</div>
                    </div>
                </div>

                <!-- Module 6 -->
                <div class="glassmorphism rounded-2xl p-8 hover-scale relative">
                    <div
                        class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-teal-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                        KIẾM TIỀN
                    </div>
                    <div class="text-4xl mb-4">💰</div>
                    <h3 class="text-xl font-bold gradient-text-cyan mb-4">Freelance & Monetization Blueprint</h3>
                    <p class="text-gray-300 mb-4">
                        Từ kỹ năng đến cỗ máy kiếm tiền: Tìm việc freelance quốc tế, báo giá ngàn đô.
                    </p>
                    <div class="space-y-2 text-sm">
                        <div class="text-green-400">✓ Global Freelance Strategy</div>
                        <div class="text-green-400">✓ Premium Pricing</div>
                        <div class="text-green-400">✓ Client Acquisition</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="glassmorphism rounded-2xl p-12 text-center">
                <h2 class="text-4xl font-bold gradient-text-pink mb-8">
                    📈 CASE STUDY THỰC TẾ
                </h2>
                <h3 class="text-2xl font-bold text-white mb-6">
                    Tăng 300% Doanh Thu Cho Shop Thời Trang Sau 2 Tháng Áp Dụng SEO AI
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-red-400 mb-2">TRƯỚC</div>
                        <div class="text-gray-300">50 triệu/tháng</div>
                        <div class="text-sm text-gray-400">SEO truyền thống</div>
                    </div>
                    <div class="text-center">
                        <div class="text-6xl mb-4">➡️</div>
                        <div class="text-yellow-400 font-bold">SEO AI REVOLUTION</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold gradient-text-cyan mb-2">SAU</div>
                        <div class="text-green-400 font-bold">200 triệu/tháng</div>
                        <div class="text-sm text-gray-400">Chỉ sau 2 tháng</div>
                    </div>
                </div>
                <p class="text-gray-300 max-w-3xl mx-auto">
                    "Tôi đã thử mọi cách SEO truyền thống nhưng không hiệu quả. Sau khi học khóa này và áp dụng AI,
                    doanh thu tăng vọt 300% chỉ trong 2 tháng. Giờ tôi quản lý 5 website cùng lúc!" - <span
                        class="text-cyan-400">Anh Minh, CEO Fashion Store</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Gifts Section -->
    <section class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="text-yellow-400">🎁 "KHO BÁU" DÀNH CHO</span><br>
                    <span class="gradient-text-pink">NHÀ CÁCH MẠNG</span>
                </h2>
                <div class="text-3xl font-bold gradient-text-cyan mb-4">
                    QUÀ TẶNG KHỞI NGHIỆP TRỊ GIÁ 6.000.000Đ
                </div>
                <p class="text-xl text-gray-300">
                    Hoàn toàn MIỄN PHÍ khi tham gia khóa học ngay hôm nay!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Gift Box 1 -->
                <div class="gift-box glassmorphism-gold rounded-2xl p-8 text-center">
                    <div class="text-6xl mb-6">📦</div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">
                        Bộ Source Code Web & Funnel Bán Hàng
                    </h3>
                    <p class="text-gray-300 mb-6">
                        Sẵn sàng triển khai, tối ưu hóa chuyển đổi, giúp bạn tiết kiệm
                        hàng chục triệu đồng chi phí ban đầu.
                    </p>
                    <div class="glassmorphism rounded-lg p-4 mb-4">
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div class="text-green-400">✓ Landing Page Templates</div>
                            <div class="text-green-400">✓ E-commerce Themes</div>
                            <div class="text-green-400">✓ Sales Funnel Scripts</div>
                            <div class="text-green-400">✓ Payment Integration</div>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white px-6 py-2 rounded-full font-bold inline-block">
                        TRỊ GIÁ 3.000.000Đ
                    </div>
                </div>

                <!-- Gift Box 2 -->
                <div class="gift-box glassmorphism-gold rounded-2xl p-8 text-center">
                    <div class="text-6xl mb-6">📚</div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">
                        Thư Viện Tài Liệu SEO & Quảng Cáo Độc Quyền
                    </h3>
                    <p class="text-gray-300 mb-6">
                        Tổng hợp những template, checklist và tài liệu mật
                        giúp bạn đi trước đối thủ hàng năm.
                    </p>
                    <div class="glassmorphism rounded-lg p-4 mb-4">
                        <div class="grid grid-cols-2 gap-4 text-sm">
                            <div class="text-green-400">✓ SEO Audit Checklist</div>
                            <div class="text-green-400">✓ Content Templates</div>
                            <div class="text-green-400">✓ Ads Copy Library</div>
                            <div class="text-green-400">✓ Analytics Reports</div>
                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white px-6 py-2 rounded-full font-bold inline-block">
                        TRỊ GIÁ 3.000.000Đ
                    </div>
                </div>
            </div>

            <!-- Source Code Preview -->
            <div class="mt-12 glassmorphism rounded-2xl p-8">
                <h3 class="text-2xl font-bold gradient-text-cyan mb-6 text-center">
                    👀 PREVIEW BỘ SOURCE CODE
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-slate-900 rounded-lg p-4 border border-cyan-500">
                        <div class="text-cyan-400 text-sm mb-2">landing-page.html</div>
                        <div class="text-gray-300 text-xs font-mono">
                            &lt;!DOCTYPE html&gt;<br>
                            &lt;html lang="vi"&gt;<br>
                            &lt;head&gt;<br>
                            &nbsp;&nbsp;&lt;meta charset="UTF-8"&gt;<br>
                            &nbsp;&nbsp;&lt;title&gt;High Convert...
                        </div>
                    </div>
                    <div class="bg-slate-900 rounded-lg p-4 border border-pink-500">
                        <div class="text-pink-400 text-sm mb-2">funnel-script.js</div>
                        <div class="text-gray-300 text-xs font-mono">
                            function trackConversion() {<br>
                            &nbsp;&nbsp;gtag('event', 'purchase');<br>
                            &nbsp;&nbsp;fbq('track', 'Purchase');<br>
                            &nbsp;&nbsp;// Advanced tracking...
                        </div>
                    </div>
                    <div class="bg-slate-900 rounded-lg p-4 border border-green-500">
                        <div class="text-green-400 text-sm mb-2">payment-integration.php</div>
                        <div class="text-gray-300 text-xs font-mono">
                            &lt;?php<br>
                            require_once 'stripe/init.php';<br>
                            $stripe = new \Stripe\StripeClient(<br>
                            &nbsp;&nbsp;'sk_live_...'
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="gradient-text-pink">FAQ VỀ TƯƠNG LAI CỦA SEO</span>
            </h2>

            <div class="space-y-6">
                <div class="glassmorphism rounded-xl p-6">
                    <h3 class="text-xl font-bold text-cyan-400 mb-3">
                        ❓ Liệu AI có thay thế hoàn toàn SEO Specialist không?
                    </h3>
                    <p class="text-gray-300">
                        Không! AI sẽ thay thế những người KHÔNG biết sử dụng AI. Những chuyên gia biết cách "điều khiển"
                        AI
                        sẽ trở thành siêu nhân trong ngành SEO, có thể làm việc của cả một team.
                    </p>
                </div>

                <div class="glassmorphism rounded-xl p-6">
                    <h3 class="text-xl font-bold text-cyan-400 mb-3">
                        ❓ Học xong khóa này, tôi có lợi thế gì trong 5 năm tới?
                    </h3>
                    <p class="text-gray-300">
                        Bạn sẽ thuộc top 5% chuyên gia SEO AI đầu tiên trên thế giới. Trong khi 95% còn lại vẫn đang làm
                        SEO kiểu cũ,
                        bạn đã sẵn sàng thống trị thị trường với công nghệ tương lai.
                    </p>
                </div>

                <div class="glassmorphism rounded-xl p-6">
                    <h3 class="text-xl font-bold text-cyan-400 mb-3">
                        ❓ Tôi có thể kiếm được bao nhiêu tiền từ SEO AI?
                    </h3>
                    <p class="text-gray-300">
                        Học viên của chúng tôi đang kiếm từ $2000-5000/tháng làm freelance. Một số người đã xây dựng
                        agency
                        với doanh thu 6-7 con số. Giới hạn duy nhất là tham vọng của bạn.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 px-4 text-center">
        <div class="max-w-4xl mx-auto glassmorphism rounded-2xl p-12 border-2 border-pink-500">
            <div class="revolution-badge inline-block px-6 py-3 rounded-full text-white font-bold mb-8 text-lg">
                🚨 CUỘC CÁCH MẠNG KHÔNG CHỜ ĐỢI
            </div>

            <h2 class="text-4xl md:text-5xl font-bold mb-8">
                <span class="gradient-text-pink">THAM GIA NGAY</span><br>
                <span class="text-white">HOẶC BỊ BỎ LẠI PHÍA SAU</span>
            </h2>

            <p class="text-xl text-gray-300 mb-8">
                Trong khi bạn đang do dự, hàng nghìn người khác đã bắt đầu cuộc cách mạng SEO AI.
                <span class="text-red-400 font-bold">Đừng để bản thân trở thành nạn nhân của sự thay đổi!</span>
            </p>

            <div class="mb-8">
                <div class="text-6xl font-bold gradient-text-cyan mb-2">6.000.000Đ</div>
                <div class="text-gray-400 line-through text-2xl mb-2">Giá gốc: 15.000.000Đ</div>
                <div class="text-yellow-400 font-bold text-xl">Tiết kiệm 9.000.000Đ - Chỉ còn 18 giờ!</div>
            </div>

            <button
                class="bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-bold py-6 px-16 rounded-full text-2xl transition-all duration-300 transform hover:scale-105 pulse-glow mb-6">
                THAM GIA CUỘC CÁCH MẠNG NGAY
            </button>

            <div class="text-sm text-gray-400 mb-4">
                ✅ Bảo hành hoàn tiền 100% trong 30 ngày<br>
                ✅ Hỗ trợ 1-1 với mentor trong 6 tháng<br>
                ✅ Cập nhật miễn phí trọn đời
            </div>

            <div class="text-yellow-400 font-bold animate-pulse">
                ⏰ Chỉ còn <span id="countdown">18:23:45</span> để nhận ưu đãi!
            </div>
        </div>
    </section>

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
        // Pre-Hero Animation
        document.addEventListener('DOMContentLoaded', function() {
            const preHero = document.getElementById('preHero');
            const oldSeo = document.getElementById('oldSeo');
            const deadSeo = document.getElementById('deadSeo');
            const newSeo = document.getElementById('newSeo');

            // First typing animation
            const typed1 = new Typed('#oldSeo', {
                strings: ['SEO TRUYỀN THỐNG...'],
                typeSpeed: 100,
                showCursor: false,
                onComplete: function() {
                    setTimeout(() => {
                        deadSeo.classList.remove('hidden');
                        const typed2 = new Typed('#deadSeo', {
                            strings: ['...ĐÃ CHẾT.'],
                            typeSpeed: 100,
                            showCursor: false,
                            onComplete: function() {
                                setTimeout(() => {
                                    newSeo.classList.remove('hidden');
                                    const typed3 = new Typed('#newSeo', {
                                        strings: [
                                            'CHÀO MỪNG BẠN ĐẾN VỚI CUỘC CHƠI MỚI: SEO AI.'
                                        ],
                                        typeSpeed: 80,
                                        showCursor: false,
                                        onComplete: function() {
                                            setTimeout(() => {
                                                preHero
                                                    .classList
                                                    .add(
                                                        'hidden'
                                                        );
                                            }, 2000);
                                        }
                                    });
                                }, 2000);
                            }
                        });
                    }, 2000);
                }
            });
        });

        // Timeline Animation
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, {
            threshold: 0.3
        });

        document.querySelectorAll('.timeline-item').forEach(item => {
            timelineObserver.observe(item);
        });

        // Countdown Timer
        function updateCountdown() {
            const now = new Date().getTime();
            const deadline = now + (18 * 60 * 60 * 1000) + (23 * 60 * 1000) + (45 * 1000);

            setInterval(() => {
                const now = new Date().getTime();
                const distance = deadline - now;

                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('countdown').innerHTML =
                    String(hours).padStart(2, '0') + ':' +
                    String(minutes).padStart(2, '0') + ':' +
                    String(seconds).padStart(2, '0');
            }, 1000);
        }

        updateCountdown();

        // CTA Button Actions
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                alert(
                    '🚀 Chức năng đăng ký sẽ được kích hoạt khi tích hợp với hệ thống thanh toán! Cảm ơn bạn đã quan tâm đến cuộc cách mạng SEO AI!');
            });
        });

        // Smooth reveal animations
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.glassmorphism, .glassmorphism-gold').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            revealObserver.observe(el);
        });
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'9769632dd472045c',t:'MTc1NjQ0MjYwNi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
