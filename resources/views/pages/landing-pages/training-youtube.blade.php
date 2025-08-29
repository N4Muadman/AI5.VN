<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube AI Mastery Pro Max - Xây Cỗ Máy YouTube Tự Động Bằng AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-hot {
            background: linear-gradient(135deg, #FF416C 0%, #FF4B2B 100%);
        }

        .gradient-cool {
            background: linear-gradient(135deg, #8A2387 0%, #0072FF 100%);
        }

        .gradient-gold {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
        }

        .breathing-glow {
            animation: breathingGlow 3s ease-in-out infinite;
            box-shadow: 0 0 30px rgba(255, 65, 108, 0.5);
        }

        @keyframes breathingGlow {

            0%,
            100% {
                box-shadow: 0 0 30px rgba(255, 65, 108, 0.5);
                transform: scale(1);
            }

            50% {
                box-shadow: 0 0 50px rgba(255, 65, 108, 0.8);
                transform: scale(1.02);
            }
        }

        .stardust {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #FFD700;
            border-radius: 50%;
            pointer-events: none;
        }

        .canva-halo {
            position: relative;
        }

        .canva-halo::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            background: conic-gradient(from 0deg, #FFD700, #FFA500, #FFD700);
            border-radius: 50%;
            animation: rotate 3s linear infinite;
            z-index: -1;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .ai-brain {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        .ai-brain::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .slide-in-left {
            animation: slideInLeft 1s ease-out;
        }

        .slide-in-right {
            animation: slideInRight 1s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .countdown-timer {
            background: linear-gradient(45deg, #FF416C, #FF4B2B);
            background-size: 400% 400%;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .tool-logo {
            transition: all 0.3s ease;
            filter: grayscale(100%);
        }

        .tool-logo:hover {
            filter: grayscale(0%);
            transform: scale(1.1);
        }

        .thumbnail-comparison {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .before-after-slider {
            position: absolute;
            top: 0;
            left: 50%;
            width: 2px;
            height: 100%;
            background: #FFD700;
            cursor: ew-resize;
            z-index: 10;
        }

        .popup-form {
            background: rgba(17, 24, 39, 0.95);
            backdrop-filter: blur(20px);
            border: 2px solid;
            border-image: linear-gradient(45deg, #FF416C, #FF4B2B) 1;
        }

        .input-glow:focus {
            box-shadow: 0 0 20px rgba(255, 65, 108, 0.3);
            border-color: #FF416C;
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

<body class="bg-gray-900 text-white overflow-x-hidden">
    <!-- Hero Section -->
    <section
        class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900">
        <!-- Background Video Effect -->
        <div class="absolute inset-0 opacity-20">
            <div class="w-full h-full bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 animate-pulse"></div>
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="floating">
                <h1
                    class="text-4xl leading-[1.5] md:text-6xl md:leading-[1.5] lg:text-7xl lg:leading-[1.5] font-black mb-6 ">
                    <span class="gradient-hot bg-clip-text">XÂY CỖ MÁY YOUTUBE</span><br>
                    <span class="text-yellow-400">TỰ ĐỘNG BẰNG AI</span><br>
                    <span class="gradient-cool bg-clip-text">KIẾM 1000$ ĐẦU TIÊN</span><br>
                    <span class="text-white">KHÔNG CẦN LỘ MẶT</span>
                </h1>
            </div>

            <p class="text-xl md:text-2xl mb-8 text-gray-300 max-w-4xl mx-auto">
                Phiên bản Pro Max - Không chỉ tạo video, mà xây dựng một "cỗ máy" YouTube
                vận hành hoàn toàn bằng AI, tự động tạo nội dung và thu nhập 24/7
            </p>

            <div class="mb-12">
                <button id="mainCTA"
                    class="breathing-glow gradient-hot text-white font-bold py-6 px-12 rounded-full text-xl transform hover:scale-105 transition-all duration-300">
                    🚀 NHẬN ƯU ĐÃI QUỐC KHÁNH 02/09 NGAY!
                </button>
            </div>

            <!-- Stats Counter -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="animate-counter">
                    <div class="text-4xl font-bold text-yellow-400" id="counter1">0</div>
                    <div class="text-gray-300">Cỗ máy AI đã tạo</div>
                </div>
                <div class="animate-counter">
                    <div class="text-4xl font-bold text-yellow-400" id="counter2">0</div>
                    <div class="text-gray-300">Video tự động/tháng</div>
                </div>
                <div class="animate-counter">
                    <div class="text-4xl font-bold text-yellow-400" id="counter3">0</div>
                    <div class="text-gray-300">$ Thu nhập trung bình</div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI Demo Video Section -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-8 gradient-hot bg-clip-text text-transparent">
                🎬 CHỨNG KIẾN PHÉP MÀU AI 1-CLICK
            </h2>
            <p class="text-xl text-gray-300 mb-12">Xem AI tạo tiêu đề triệu view chỉ trong 10 giây</p>

            <div class="max-w-4xl mx-auto bg-gray-900 p-8 rounded-2xl">
                <div
                    class="aspect-video bg-gradient-to-br from-purple-600 to-pink-600 rounded-lg flex items-center justify-center mb-6">
                    <div class="text-center">
                        <div class="text-6xl mb-4">▶️</div>
                        <div class="text-2xl font-bold">Demo Video: AI 1-Click Magic</div>
                        <div class="text-lg opacity-90">Copy → Paste → Triệu View Title Ready!</div>
                    </div>
                </div>
                <p class="text-gray-300">
                    Không gì thuyết phục hơn bằng chứng sống! Xem cách AI tạo ra tiêu đề chuẩn SEO,
                    mô tả video và ý tưởng kịch bản chỉ với 1 câu lệnh.
                </p>
            </div>
        </div>
    </section>

    <!-- Course Content Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-16 gradient-cool bg-clip-text text-transparent leading-[1.5]">
                🎓 CHƯƠNG TRÌNH ĐÀO TẠO PRO MAX
            </h2>

            <!-- Module 1 -->
            <div class="mb-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left">
                    <div class="gradient-hot p-1 rounded-2xl">
                        <div class="bg-gray-900 p-8 rounded-2xl">
                            <h3 class="text-3xl font-bold mb-4 text-yellow-400">Module 1: Tư Duy 'Cá Mập' & Giải Mã
                                Thuật Toán YouTube</h3>
                            <p class="text-gray-300 text-lg mb-6">
                                Khám phá bí mật tư duy triệu phú từ YouTube, hiểu sâu thuật toán và các nguồn thu nhập
                                vàng
                                mà 99% YouTuber không biết. Xây dựng mindset thành công từ ngày đầu tiên.
                            </p>
                            <ul class="text-gray-300 space-y-2">
                                <li>✅ 7 nguồn thu nhập từ YouTube (không chỉ AdSense)</li>
                                <li>✅ Bí mật thuật toán YouTube 2024</li>
                                <li>✅ Tư duy scale kênh triệu view</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slide-in-right">
                    <div class="bg-gradient-to-br from-red-500 to-pink-500 p-8 rounded-2xl text-center">
                        <div class="text-6xl mb-4">🧠</div>
                        <div class="text-2xl font-bold">Tư Duy Triệu Phú</div>
                        <div class="text-lg opacity-90">Mindset Transformation</div>
                    </div>
                </div>
            </div>

            <!-- Module 2 -->
            <div class="mb-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left lg:order-2">
                    <div class="gradient-cool p-1 rounded-2xl">
                        <div class="bg-gray-900 p-8 rounded-2xl">
                            <h3 class="text-3xl font-bold mb-4 text-yellow-400">Module 2: Kỹ Thuật Sử Dụng AI Xây Kênh
                                Tự Động Triệu View</h3>
                            <p class="text-gray-300 text-lg mb-6">
                                Làm chủ hoàn toàn các công cụ AI để tự động hóa từ ý tưởng đến video hoàn chỉnh.
                                Tạo ra hàng trăm video chất lượng cao mà không cần lộ mặt.
                            </p>
                            <ul class="text-gray-300 space-y-2">
                                <li>✅ 20+ công cụ AI tạo video tự động</li>
                                <li>✅ Kỹ thuật clone giọng nói chuyên nghiệp</li>
                                <li>✅ AI Script writing cho triệu view</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slide-in-right lg:order-1">
                    <div class="bg-gradient-to-br from-purple-500 to-blue-500 p-8 rounded-2xl text-center">
                        <div class="text-6xl mb-4">🤖</div>
                        <div class="text-2xl font-bold">AI Automation</div>
                        <div class="text-lg opacity-90">Tự động hóa hoàn toàn</div>
                    </div>
                </div>
            </div>

            <!-- Module 3 -->
            <div class="mb-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left">
                    <div class="gradient-hot p-1 rounded-2xl">
                        <div class="bg-gray-900 p-8 rounded-2xl">
                            <h3 class="text-3xl font-bold mb-4 text-yellow-400">Module 3: Thực Chiến Sản Xuất Video
                                Short Viral & Video Dài Bán Hàng</h3>
                            <p class="text-gray-300 text-lg mb-6">
                                Thực hành trực tiếp tạo ra video Short viral triệu view và video dài bán hàng hiệu quả.
                                Từ ý tưởng đến thành phẩm trong 15 phút.
                            </p>
                            <ul class="text-gray-300 space-y-2">
                                <li>✅ 100 template Short viral có sẵn</li>
                                <li>✅ Kỹ thuật hook viewer trong 3 giây đầu</li>
                                <li>✅ Video bán hàng không cần lộ mặt</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slide-in-right">
                    <div class="bg-gradient-to-br from-green-500 to-teal-500 p-8 rounded-2xl text-center">
                        <div class="text-6xl mb-4">🎬</div>
                        <div class="text-2xl font-bold">Video Production</div>
                        <div class="text-lg opacity-90">Sản xuất chuyên nghiệp</div>
                    </div>
                </div>
            </div>

            <!-- Module 4 - AI Assistant Highlight -->
            <div class="mb-20">
                <div class="ai-brain p-1 rounded-3xl">
                    <div class="bg-gray-900 p-12 rounded-3xl text-center">
                        <div class="text-8xl mb-6">🧠⚡</div>
                        <h3 class="text-4xl font-bold mb-6 gradient-gold bg-clip-text text-transparent">
                            Module 4: Huấn Luyện "AI Trợ Lý Sáng Tạo 24/7"
                        </h3>
                        <div class="max-w-4xl mx-auto">
                            <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                                <strong class="text-yellow-400">Quên đi việc bí ý tưởng hay mất hàng giờ tối ưu
                                    video!</strong>
                                Chúng tôi sẽ trao cho bạn 'công tắc' điều khiển AI, biến nó thành trợ lý cá nhân.
                                <strong class="text-white">Chỉ với 1 Enter</strong>, AI sẽ tự động viết Tiêu Đề Chuẩn
                                SEO thôi miên người xem,
                                Mô Tả Video chứa từ khóa vàng, và lên ý tưởng kịch bản cho video tiếp theo.
                                <strong class="text-yellow-400">Bạn chỉ việc Copy, Paste và Sáng tạo!</strong>
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="bg-gray-800 p-6 rounded-xl">
                                    <div class="text-3xl mb-3">📝</div>
                                    <div class="font-bold text-yellow-400">Auto Title Generator</div>
                                    <div class="text-sm text-gray-300">Tiêu đề chuẩn SEO tự động</div>
                                </div>
                                <div class="bg-gray-800 p-6 rounded-xl">
                                    <div class="text-3xl mb-3">🎯</div>
                                    <div class="font-bold text-yellow-400">Smart Description</div>
                                    <div class="text-sm text-gray-300">Mô tả chứa từ khóa vàng</div>
                                </div>
                                <div class="bg-gray-800 p-6 rounded-xl">
                                    <div class="text-3xl mb-3">💡</div>
                                    <div class="font-bold text-yellow-400">Idea Machine</div>
                                    <div class="text-sm text-gray-300">Ý tưởng kịch bản không giới hạn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 5 -->
            <div class="mb-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="slide-in-left lg:order-2">
                    <div class="gradient-cool p-1 rounded-2xl">
                        <div class="bg-gray-900 p-8 rounded-2xl">
                            <h3 class="text-3xl font-bold mb-4 text-yellow-400">Module 5: YouTube SEO & Monetization
                                Đỉnh Cao</h3>
                            <p class="text-gray-300 text-lg mb-6">
                                Làm chủ YouTube SEO với AI, tự động hóa quy trình editing và tối ưu hóa để video
                                luôn xuất hiện top đầu kết quả tìm kiếm. Bật kiếm tiền từ ngày đầu tiên.
                            </p>
                            <ul class="text-gray-300 space-y-2">
                                <li>✅ AI SEO tools cho YouTube</li>
                                <li>✅ 12 cách kiếm tiền từ YouTube</li>
                                <li>✅ Chiến lược monetize không lộ mặt</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slide-in-right lg:order-1">
                    <div class="bg-gradient-to-br from-yellow-500 to-orange-500 p-8 rounded-2xl text-center">
                        <div class="text-6xl mb-4">💰</div>
                        <div class="text-2xl font-bold">SEO & Monetization</div>
                        <div class="text-lg opacity-90">Kiếm tiền tự động</div>
                    </div>
                </div>
            </div>

            <!-- Module 6 - Tools Section -->
            <div class="mb-20">
                <div class="gradient-hot p-1 rounded-3xl">
                    <div class="bg-gray-900 p-12 rounded-3xl text-center">
                        <h3 class="text-4xl font-bold mb-8 text-yellow-400">
                            Module 6: "Hộp Đồ Nghề" Kiếm Tiền & Tăng Trưởng
                        </h3>
                        <p class="text-xl text-gray-300 mb-12 max-w-4xl mx-auto">
                            Các công cụ kiếm tiền đỉnh cao mà các Pro YouTuber đang sử dụng để scale kênh lên triệu view
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                            <div class="tool-logo bg-gray-800 p-6 rounded-xl">
                                <div class="text-4xl mb-3">📊</div>
                                <div class="font-bold">VidIQ</div>
                                <div class="text-sm text-gray-400">Analytics Pro</div>
                            </div>
                            <div class="tool-logo bg-gray-800 p-6 rounded-xl">
                                <div class="text-4xl mb-3">🔧</div>
                                <div class="font-bold">TubeBuddy</div>
                                <div class="text-sm text-gray-400">Optimization</div>
                            </div>
                            <div class="tool-logo bg-gray-800 p-6 rounded-xl">
                                <div class="text-4xl mb-3">💎</div>
                                <div class="font-bold">Affiliate Tools</div>
                                <div class="text-sm text-gray-400">Revenue Boost</div>
                            </div>
                            <div class="tool-logo bg-gray-800 p-6 rounded-xl">
                                <div class="text-4xl mb-3">🚀</div>
                                <div class="font-bold">Growth Hacks</div>
                                <div class="text-sm text-gray-400">Scale Fast</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Canva AI Gift Section -->
    <section class="py-20 bg-gradient-to-br from-yellow-900 via-orange-900 to-red-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-5xl font-bold mb-8 leading-[1.5] gradient-gold bg-clip-text text-transparent">
                🎁 QUÀ TẶNG ĐỘC QUYỀN: KÍCH HOẠT NĂNG LỰC THIẾT KẾ ĐỈNH CAO!
            </h2>

            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="text-left">
                        <div
                            class="canva-halo w-32 h-32 mx-auto lg:mx-0 mb-8 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center">
                            <div class="text-5xl">🎨</div>
                        </div>

                        <h3 class="text-3xl font-bold mb-6 text-yellow-400">
                            6 THÁNG SỬ DỤNG CANVA AI PRO MIỄN PHÍ
                        </h3>

                        <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                            Tự tay tạo ra những chiếc <strong class="text-yellow-400">thumbnail triệu view</strong>,
                            banner chuyên nghiệp và video short viral mà không cần kỹ năng thiết kế phức tạp.
                            <strong class="text-white">Đây là vũ khí bí mật</strong> để kênh của bạn nổi bật giữa hàng
                            triệu đối thủ.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-center">
                                <span class="text-yellow-400 mr-4 text-2xl">✨</span>
                                <span class="text-lg">AI Magic Resize - Tự động resize cho mọi platform</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-400 mr-4 text-2xl">🎯</span>
                                <span class="text-lg">Background Remover - Xóa phông chuyên nghiệp</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-yellow-400 mr-4 text-2xl">🚀</span>
                                <span class="text-lg">Brand Kit - Thống nhất thương hiệu kênh</span>
                            </div>
                        </div>
                    </div>

                    <div class="thumbnail-comparison relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="bg-gray-600 p-4 rounded-lg mb-3">
                                    <div class="text-2xl mb-2">😴</div>
                                    <div class="text-sm">Thumbnail Tự Làm</div>
                                </div>
                                <div class="text-red-400 text-sm">Nhạt nhẽo, không thu hút</div>
                            </div>
                            <div class="text-center">
                                <div class="bg-gradient-to-br from-purple-500 to-pink-500 p-4 rounded-lg mb-3">
                                    <div class="text-2xl mb-2">🔥</div>
                                    <div class="text-sm font-bold">Canva AI Pro</div>
                                </div>
                                <div class="text-green-400 text-sm">Chuyên nghiệp, bắt mắt</div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="gradient-gold text-black font-bold py-3 px-6 rounded-full inline-block">
                                💎 GIÁ TRỊ: 1.500.000đ - MIỄN PHÍ CHO BẠN!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bonus AI Prompts -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-12 gradient-cool bg-clip-text text-transparent  leading-[1.5]">
                🎯 TẶNG KÈM: BỘ 10 PROMPT HUẤN LUYỆN AI
            </h2>

            <div class="max-w-4xl mx-auto bg-gray-900 p-8 rounded-2xl">
                <div class="text-6xl mb-6">📜</div>
                <h3 class="text-2xl font-bold mb-6 text-yellow-400">
                    "Thần Chú" Ra Lệnh Cho AI Trợ Lý YouTube
                </h3>
                <p class="text-lg text-gray-300 mb-8">
                    10 câu lệnh được chế tác tỉ mỉ để bạn có thể bắt đầu "ra lệnh" cho AI trợ lý YouTube
                    của mình ngay lập tức. Từ tạo tiêu đề viral đến kịch bản video triệu view.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-800 p-4 rounded-lg text-left">
                        <div class="text-yellow-400 font-bold mb-2">Prompt #1: Viral Title Generator</div>
                        <div class="text-sm text-gray-400">"Tạo 10 tiêu đề viral cho video về [chủ đề]..."</div>
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg text-left">
                        <div class="text-yellow-400 font-bold mb-2">Prompt #2: Hook Master</div>
                        <div class="text-sm text-gray-400">"Viết 5 câu mở đầu thu hút trong 3 giây đầu..."</div>
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg text-left">
                        <div class="text-yellow-400 font-bold mb-2">Prompt #3: SEO Description</div>
                        <div class="text-sm text-gray-400">"Tạo mô tả video SEO với từ khóa [keyword]..."</div>
                    </div>
                    <div class="bg-gray-800 p-4 rounded-lg text-left">
                        <div class="text-yellow-400 font-bold mb-2">Prompt #4: Script Writer</div>
                        <div class="text-sm text-gray-400">"Viết kịch bản video 10 phút về [topic]..."</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 bg-gradient-to-br from-gray-800 via-purple-900 to-gray-800">
        <div class="container mx-auto px-6 text-center">
            <div class="mb-8">
                <h2 class="text-5xl font-bold mb-4 gradient-hot bg-clip-text text-transparent leading-[1.5]">
                    🇻🇳 MỪNG ĐẠI LỄ 02/09 - ƯU ĐÃI PRO MAX ĐỘC QUYỀN!
                </h2>
                <p class="text-xl text-gray-300">Cơ hội vàng để sở hữu cỗ máy YouTube AI với mức giá không thể tin nổi
                </p>
            </div>

            <!-- Countdown Timer -->
            <div class="countdown-timer p-6 rounded-2xl mb-12 max-w-2xl mx-auto">
                <div class="text-2xl font-bold mb-4">⏰ ƯU ĐÃI KẾT THÚC TRONG:</div>
                <div class="grid grid-cols-4 gap-4 text-center">
                    <div class="bg-black bg-opacity-30 p-4 rounded-lg">
                        <div class="text-3xl font-bold" id="days">00</div>
                        <div class="text-sm">NGÀY</div>
                    </div>
                    <div class="bg-black bg-opacity-30 p-4 rounded-lg">
                        <div class="text-3xl font-bold" id="hours">00</div>
                        <div class="text-sm">GIỜ</div>
                    </div>
                    <div class="bg-black bg-opacity-30 p-4 rounded-lg">
                        <div class="text-3xl font-bold" id="minutes">00</div>
                        <div class="text-sm">PHÚT</div>
                    </div>
                    <div class="bg-black bg-opacity-30 p-4 rounded-lg">
                        <div class="text-3xl font-bold" id="seconds">00</div>
                        <div class="text-sm">GIÂY</div>
                    </div>
                </div>
            </div>

            <!-- Value Breakdown -->
            <div class="max-w-4xl mx-auto mb-12">
                <div class="bg-gray-900 p-8 rounded-2xl mb-8">
                    <h3 class="text-3xl font-bold mb-6 text-yellow-400">TỔNG GIÁ TRỊ BẠN NHẬN ĐƯỢC:</h3>
                    <div class="space-y-4 text-left max-w-2xl mx-auto">
                        <div class="flex justify-between items-center">
                            <span>Khóa học YouTube AI Mastery Pro Max (Trọn đời)</span>
                            <span class="text-yellow-400 font-bold">7.000.000đ</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Tài khoản Canva AI Pro (6 tháng)</span>
                            <span class="text-yellow-400 font-bold">1.500.000đ</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Bộ 10 Prompt AI độc quyền</span>
                            <span class="text-yellow-400 font-bold">500.000đ</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Hỗ trợ 1-1 trong 6 tháng</span>
                            <span class="text-yellow-400 font-bold">2.000.000đ</span>
                        </div>
                        <hr class="border-gray-600">
                        <div class="flex justify-between items-center text-2xl font-bold">
                            <span>TỔNG GIÁ TRỊ:</span>
                            <span class="text-yellow-400">11.000.000đ</span>
                        </div>
                    </div>
                </div>

                <div class="text-4xl font-bold mb-4 text-red-400">
                    KHOẢN ĐẦU TƯ CỦA BẠN HÔM NAY CHỈ CÒN:
                </div>
            </div>

            <!-- Pricing Card -->
            <div class="max-w-lg mx-auto">
                <div class="gradient-hot p-1 rounded-3xl breathing-glow">
                    <div class="bg-gray-900 p-8 rounded-3xl">
                        <div class="text-6xl mb-4">🚀</div>
                        <h3 class="text-3xl font-bold mb-6 text-yellow-400">YOUTUBE AI MASTERY PRO MAX</h3>

                        <div class="mb-6">
                            <div class="text-2xl text-gray-400 line-through mb-2">Giá gốc: 11.000.000đ</div>
                            <div class="text-6xl font-bold text-yellow-400 mb-2">3.800.000đ</div>
                            <div class="text-lg text-green-400 font-semibold">Tiết kiệm 7.200.000đ (65%)</div>
                        </div>

                        <div class="text-left mb-8 space-y-3">
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>6 Module đào tạo chuyên sâu Pro Max</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>AI Trợ Lý 24/7 độc quyền</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>100+ Template video viral</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>20+ AI Tools độc quyền</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>Canva AI Pro 6 tháng (1.5M đ)</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>Bộ 10 Prompt AI thần thánh</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>Hỗ trợ 1-1 trong 6 tháng</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-400 mr-3">✅</span>
                                <span>Đảm bảo hoàn tiền 100%</span>
                            </div>
                        </div>

                        <button id="pricingCTA"
                            class="w-full breathing-glow gradient-hot text-white font-bold py-6 px-8 rounded-2xl text-xl transform hover:scale-105 transition-all duration-300">
                            🎯 ĐĂNG KÝ NGAY - CHỈ CÒN 24H!
                        </button>

                        <div class="mt-4 text-sm text-gray-400">
                            💳 Hỗ trợ trả góp 0% | 🔒 Thanh toán an toàn 100%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16 gradient-cool bg-clip-text text-transparent leading-[1.5]">
                ❓ CÂU HỎI THƯỜNG GẶP
            </h2>

            <div class="max-w-4xl mx-auto space-y-6">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-3 text-yellow-400">Tôi không biết gì về AI có học được không?</h3>
                    <p class="text-gray-300">Hoàn toàn được! Khóa học Pro Max được thiết kế từ cơ bản đến nâng cao,
                        hướng dẫn từng bước chi tiết. Bạn chỉ cần biết sử dụng máy tính cơ bản là có thể tạo ra cỗ máy
                        YouTube AI của riêng mình.</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-3 text-yellow-400">AI Trợ Lý 24/7 hoạt động như thế nào?</h3>
                    <p class="text-gray-300">AI Trợ Lý sẽ được huấn luyện riêng cho kênh của bạn, tự động tạo tiêu đề,
                        mô tả, ý tưởng video và thậm chí cả kịch bản. Bạn chỉ cần nhập chủ đề, AI sẽ làm phần còn lại
                        trong vài giây.</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-3 text-yellow-400">Canva AI Pro có thực sự miễn phí 6 tháng?</h3>
                    <p class="text-gray-300">Có! Đây là quà tặng độc quyền trị giá 1.500.000đ. Bạn sẽ nhận được tài
                        khoản Canva AI Pro đầy đủ tính năng trong 6 tháng để tạo thumbnail, banner và video chuyên
                        nghiệp.</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-3 text-yellow-400">Tôi có thể kiếm được bao nhiều với cỗ máy AI
                        này?</h3>
                    <p class="text-gray-300">Với cỗ máy AI tự động, học viên trung bình kiếm được $800-3000/tháng sau
                        2-4 tháng. Một số học viên xuất sắc đã đạt $8000+/tháng nhờ tự động hóa hoàn toàn quy trình tạo
                        nội dung.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-gradient-to-r from-purple-900 via-pink-900 to-red-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                🚀 ĐỪNG ĐỂ CƠ HỘI VÀNG TRÔI QUA!
            </h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                Hàng nghìn người đã xây dựng cỗ máy YouTube AI và thay đổi cuộc sống.
                Bạn sẽ là người tiếp theo hay sẽ tiếc nuối khi nhìn người khác thành công?
            </p>

            <button id="finalCTA"
                class="breathing-glow gradient-hot text-white font-bold py-6 px-12 rounded-full text-2xl transform hover:scale-105 transition-all duration-300 mb-6">
                🎯 XÂY CỖ MÁY AI NGAY - ƯU ĐÃI 02/09!
            </button>

            <div class="text-lg text-gray-300">
                ⚡ Chỉ còn <span class="text-yellow-400 font-bold">24 giờ</span> để nhận ưu đãi Pro Max này!
            </div>
        </div>
    </section>

    <!-- Registration Popup -->
    <div id="registrationPopup"
        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-50 hidden items-center justify-center">
        <div class="popup-form max-w-md w-full mx-4 p-8 rounded-3xl">
            <div class="text-center mb-6">
                <div class="text-6xl mb-4">🚀</div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-2">ĐĂNG KÝ NHẬN ƯU ĐÃI</h3>
                <p class="text-gray-300">Chỉ còn vài bước để sở hữu cỗ máy YouTube AI!</p>
            </div>

            <form id="registrationForm" class="space-y-4" action="{{ route('course-register', $landingPage->id) }}"
                method="POST">
                @csrf
                <div>
                    <input type="text" id="fullName" placeholder="Họ và tên *" required name="name"
                        class="w-full p-4 bg-gray-800 border border-gray-600 rounded-lg text-white input-glow focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <input type="tel" id="phone" placeholder="Số điện thoại *" required name="phone"
                        class="w-full p-4 bg-gray-800 border border-gray-600 rounded-lg text-white input-glow focus:outline-none transition-all duration-300">
                </div>
                <div>
                    <input type="email" id="email" placeholder="Email *" required name="email"
                        class="w-full p-4 bg-gray-800 border border-gray-600 rounded-lg text-white input-glow focus:outline-none transition-all duration-300">
                </div>

                <button type="submit"
                    class="w-full breathing-glow gradient-hot text-white font-bold py-4 px-6 rounded-lg text-lg">
                    🎯 HOÀN TẤT ĐĂNG KÝ
                </button>
            </form>

            <button id="closePopup" class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl">×</button>
        </div>
    </div>


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
        // Stardust effect
        function createStardust(x, y) {
            for (let i = 0; i < 12; i++) {
                const star = document.createElement('div');
                star.className = 'stardust';
                star.style.left = x + 'px';
                star.style.top = y + 'px';
                document.body.appendChild(star);

                anime({
                    targets: star,
                    translateX: anime.random(-100, 100),
                    translateY: anime.random(-100, 100),
                    scale: [1, 0],
                    opacity: [1, 0],
                    duration: 1000,
                    easing: 'easeOutQuart',
                    complete: () => star.remove()
                });
            }
        }

        // Popup functionality
        function showRegistrationPopup(e) {
            createStardust(e.clientX, e.clientY);

            setTimeout(() => {
                const popup = document.getElementById('registrationPopup');
                popup.classList.remove('hidden');
                popup.classList.add('flex');

                anime({
                    targets: '.popup-form',
                    scale: [0.8, 1],
                    opacity: [0, 1],
                    duration: 500,
                    easing: 'easeOutBack'
                });
            }, 300);
        }

        // Event listeners for CTA buttons
        document.getElementById('mainCTA').addEventListener('click', showRegistrationPopup);
        document.getElementById('pricingCTA').addEventListener('click', showRegistrationPopup);
        document.getElementById('finalCTA').addEventListener('click', showRegistrationPopup);

        // Close popup
        document.getElementById('closePopup').addEventListener('click', () => {
            const popup = document.getElementById('registrationPopup');
            anime({
                targets: '.popup-form',
                scale: [1, 0.8],
                opacity: [1, 0],
                duration: 300,
                easing: 'easeInBack',
                complete: () => {
                    popup.classList.add('hidden');
                    popup.classList.remove('flex');
                }
            });
        });

        // Counter Animation
        function animateCounter(id, target, duration = 2000) {
            const element = document.getElementById(id);
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString();
            }, 16);
        }

        // Start counters when page loads
        window.addEventListener('load', () => {
            setTimeout(() => {
                animateCounter('counter1', 3247);
                animateCounter('counter2', 1500);
                animateCounter('counter3', 4200);
            }, 500);
        });

        // Countdown Timer
        function updateCountdown() {
            const targetDate = new Date('2024-09-02T23:59:59').getTime();
            const now = new Date().getTime();
            const difference = targetDate - now;

            if (difference > 0) {
                const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((difference % (1000 * 60)) / 1000);

                document.getElementById('days').textContent = days.toString().padStart(2, '0');
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            }
        }

        // Update countdown every second
        setInterval(updateCountdown, 1000);
        updateCountdown();

        // Smooth scrolling for anchor links
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

        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.slide-in-left, .slide-in-right').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.8s ease-out';
            observer.observe(el);
        });

        // Close popup when clicking outside
        document.getElementById('registrationPopup').addEventListener('click', (e) => {
            if (e.target.id === 'registrationPopup') {
                document.getElementById('closePopup').click();
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
                        "window.__CF$cv$params={r:'976951bc660c09e0',t:'MTc1NjQ0MTg5MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
