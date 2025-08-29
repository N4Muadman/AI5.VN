<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ads Mastery: The AI Revolution - Digital War Room</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap');

        .font-orbitron { font-family: 'Orbitron', monospace; }
        .font-inter { font-family: 'Inter', sans-serif; }

        body {
            overflow-x: hidden;
        }

        .matrix-bg {
            background: linear-gradient(135deg, #1F2937 0%, #111827 50%, #0F172A 100%);
            position: relative;
        }

        .matrix-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(6, 182, 212, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(249, 115, 22, 0.05) 0%, transparent 50%);
            animation: pulse 4s ease-in-out infinite alternate;
        }

        @keyframes pulse {
            0% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        .data-stream {
            position: absolute;
            font-family: 'Orbitron', monospace;
            font-size: 10px;
            color: #10B981;
            opacity: 0.3;
            animation: stream 15s linear infinite;
        }

        @keyframes stream {
            0% { transform: translateY(100vh); opacity: 0; }
            10% { opacity: 0.3; }
            90% { opacity: 0.3; }
            100% { transform: translateY(-100px); opacity: 0; }
        }

        .glow-button {
            background: linear-gradient(45deg, #F97316, #EA580C);
            box-shadow: 0 0 20px rgba(249, 115, 22, 0.5);
            transition: all 0.3s ease;
        }

        .glow-button:hover {
            box-shadow: 0 0 30px rgba(249, 115, 22, 0.8);
            transform: translateY(-2px);
        }

        .module-card {
            background: linear-gradient(135deg, rgba(31, 41, 55, 0.8) 0%, rgba(17, 24, 39, 0.9) 100%);
            border: 1px solid rgba(16, 185, 129, 0.2);
            transition: all 0.3s ease;
        }

        .module-card:hover {
            border-color: rgba(16, 185, 129, 0.5);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.1);
            transform: translateY(-5px);
        }

        .stats-counter {
            font-family: 'Orbitron', monospace;
            color: #10B981;
            text-shadow: 0 0 10px rgba(16, 185, 129, 0.5);
        }

        .heatmap-grid {
            display: grid;
            grid-template-columns: repeat(20, 1fr);
            gap: 2px;
            opacity: 0.3;
        }

        .heatmap-cell {
            aspect-ratio: 1;
            background: linear-gradient(45deg, #10B981, #06B6D4);
            animation: heatmap-pulse 3s ease-in-out infinite;
        }

        @keyframes heatmap-pulse {
            0%, 100% { opacity: 0.2; }
            50% { opacity: 0.8; }
        }

        .typing-effect {
            border-right: 2px solid #10B981;
            animation: typing 3s steps(40) infinite, blink 1s infinite;
        }

        @keyframes typing {
            0% { width: 0; }
            50% { width: 100%; }
            100% { width: 0; }
        }

        @keyframes blink {
            0%, 50% { border-color: #10B981; }
            51%, 100% { border-color: transparent; }
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
<body class="matrix-bg text-white font-inter">
    <!-- Data Streams -->
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
    <div class="data-stream" style="left: 5%; animation-delay: 0s;">ROI: +347% | CTR: 12.4% | CPC: $0.23</div>
    <div class="data-stream" style="left: 15%; animation-delay: 2s;">CONV: 8.9% | ROAS: 4.2x | CPM: $1.87</div>
    <div class="data-stream" style="left: 25%; animation-delay: 4s;">REACH: 2.3M | ENG: 15.6% | CPA: $12.45</div>
    <div class="data-stream" style="left: 35%; animation-delay: 6s;">IMP: 45.2K | CLICKS: 3.8K | SPEND: $892</div>
    <div class="data-stream" style="left: 45%; animation-delay: 8s;">LTV: $156 | AOV: $89 | FREQ: 2.1</div>
    <div class="data-stream" style="left: 55%; animation-delay: 10s;">QS: 9/10 | SR: 94% | BOUNCE: 23%</div>
    <div class="data-stream" style="left: 65%; animation-delay: 12s;">LEADS: 1.2K | SQL: 340 | CLOSE: 28%</div>
    <div class="data-stream" style="left: 75%; animation-delay: 14s;">BUDGET: $50K | PROFIT: $210K | MARGIN: 76%</div>
    <div class="data-stream" style="left: 85%; animation-delay: 1s;">SCALE: 300% | GROWTH: +89% | TARGET: HIT</div>
    <div class="data-stream" style="left: 95%; animation-delay: 3s;">STATUS: ACTIVE | PERF: OPTIMAL | AI: ENGAGED</div>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center px-4 py-20">
        <!-- Heatmap Background -->
        <div class="absolute top-20 right-10 heatmap-grid w-32 h-32">
            <div class="heatmap-cell" style="animation-delay: 0s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.1s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.2s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.3s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.4s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.5s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.6s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.7s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.8s;"></div>
            <div class="heatmap-cell" style="animation-delay: 0.9s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.1s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.2s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.3s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.4s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.5s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.6s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.7s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.8s;"></div>
            <div class="heatmap-cell" style="animation-delay: 1.9s;"></div>
        </div>

        <div class="max-w-6xl mx-auto text-center relative z-10">
            <div class="mb-8">
                <div class="inline-block px-4 py-2 bg-gradient-to-r from-emerald-500/20 to-cyan-500/20 border border-emerald-500/30 rounded-full mb-6">
                    <span class="font-orbitron text-sm text-emerald-400">⚡ DIGITAL WAR ROOM ACTIVATED ⚡</span>
                </div>
            </div>

            <h1 class="font-orbitron font-black text-4xl md:text-6xl lg:text-7xl mb-6 leading-tight">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 via-cyan-400 to-orange-400">
                    ĐỐT CHÁY 2 NĂM
                </span><br>
                <span class="text-white">KINH NGHIỆM QUẢNG CÁO</span><br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">
                    CHỈ TRONG 1 KHÓA HỌC
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-4xl mx-auto leading-relaxed">
                Làm chủ <span class="text-emerald-400 font-semibold">Google, Meta, TikTok & YouTube Ads</span> -
                Biến AI thành <span class="text-cyan-400 font-semibold">'Cánh Tay Phải'</span> và
                tự tin chinh phục mức lương <span class="text-orange-400 font-bold text-3xl">2000$</span>
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                <button onclick="openRegistrationForm()" class="glow-button px-8 py-4 rounded-lg font-bold text-lg text-white font-orbitron tracking-wider">
                    🚀 KÍCH HOẠT CHIẾN DỊCH
                </button>
                <div class="flex items-center gap-4 text-emerald-400">
                    <div class="stats-counter text-2xl font-bold">347%</div>
                    <div class="text-sm">ROI Trung Bình<br>Học Viên</div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="bg-gray-800/50 border border-emerald-500/30 rounded-lg p-4">
                    <div class="stats-counter text-3xl font-bold mb-2">1,247+</div>
                    <div class="text-gray-300">Học Viên Thành Công</div>
                </div>
                <div class="bg-gray-800/50 border border-cyan-500/30 rounded-lg p-4">
                    <div class="stats-counter text-3xl font-bold mb-2">$2.3M+</div>
                    <div class="text-gray-300">Tổng Ad Spend Quản Lý</div>
                </div>
                <div class="bg-gray-800/50 border border-orange-500/30 rounded-lg p-4">
                    <div class="stats-counter text-3xl font-bold mb-2">89%</div>
                    <div class="text-gray-300">Tăng Lương Sau Khóa</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pain Points Section -->
    <section class="py-20 px-4 relative">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-orbitron font-bold text-3xl md:text-5xl mb-6 text-red-400">
                    BẠN CÓ ĐANG...
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-red-900/20 border border-red-500/30 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">💸</div>
                    <h3 class="font-bold text-xl mb-3 text-red-400">Đốt Tiền Mỗi Ngày</h3>
                    <p class="text-gray-300">Mà không thấy đơn hàng? Chi phí quảng cáo tăng vọt nhưng doanh thu đứng im?</p>
                </div>
                <div class="bg-yellow-900/20 border border-yellow-500/30 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">🤯</div>
                    <h3 class="font-bold text-xl mb-3 text-yellow-400">Choáng Ngợp</h3>
                    <p class="text-gray-300">Vì phải quản lý hàng chục tài khoản? Mỗi nền tảng một kiểu, không biết tập trung vào đâu?</p>
                </div>
                <div class="bg-orange-900/20 border border-orange-500/30 rounded-lg p-6 text-center">
                    <div class="text-4xl mb-4">😤</div>
                    <h3 class="font-bold text-xl mb-3 text-orange-400">Mắc Kẹt</h3>
                    <p class="text-gray-300">Với mức lương không tương xứng? Làm việc nhiều nhưng thu nhập vẫn "đậm đà"?</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Modules Section -->
    <section class="py-20 px-4 relative">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-orbitron font-bold text-3xl md:text-5xl mb-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">
                        6 MODULE "ĐẶC NHIỆM"
                    </span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Từ tư duy chiến lược đến thực hành chuyên sâu - Mỗi module là một "vũ khí" trong kho tàng của bạn
                </p>
            </div>

            <div class="space-y-8">
                <!-- Module 1 -->
                <div class="module-card rounded-xl p-8 cursor-pointer" onclick="toggleModule(1)">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-cyan-500 rounded-lg flex items-center justify-center font-orbitron font-bold text-xl">01</div>
                            <h3 class="font-orbitron font-bold text-2xl text-emerald-400">TỪ DUY KIẾN TRÚC SƯ QUẢNG CÁO</h3>
                        </div>
                        <div class="text-emerald-400 text-2xl" id="arrow-1">▼</div>
                    </div>
                    <div class="hidden" id="content-1">
                        <p class="text-gray-300 text-lg leading-relaxed mb-4">
                            Hiểu sâu về hành trình khách hàng, cách doanh nghiệp thực tế vận hành và phân bổ ngân sách.
                            Không chỉ chạy ads, mà thiết kế cả một hệ sinh thái marketing hoàn chỉnh.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div class="bg-gray-800/50 p-3 rounded">✓ Customer Journey Mapping</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Budget Allocation Strategy</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Funnel Architecture Design</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ KPI & Metrics Framework</div>
                        </div>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="module-card rounded-xl p-8 cursor-pointer" onclick="toggleModule(2)">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center font-orbitron font-bold text-xl">02</div>
                            <h3 class="font-orbitron font-bold text-2xl text-cyan-400">CHINH PHỤC GOOGLE & YOUTUBE ADS</h3>
                        </div>
                        <div class="text-cyan-400 text-2xl" id="arrow-2">▼</div>
                    </div>
                    <div class="hidden" id="content-2">
                        <p class="text-gray-300 text-lg leading-relaxed mb-4">
                            Từ chiến lược giá thầu, nhóm từ khóa thông minh đến các kỹ thuật quảng cáo video ăn sâu vào tâm trí khách hàng.
                            Làm chủ hoàn toàn hệ sinh thái Google.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div class="bg-gray-800/50 p-3 rounded">✓ Advanced Bidding Strategies</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Smart Keyword Research</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ YouTube Video Ad Mastery</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Shopping Ads Optimization</div>
                        </div>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="module-card rounded-xl p-8 cursor-pointer" onclick="toggleModule(3)">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg flex items-center justify-center font-orbitron font-bold text-xl">03</div>
                            <h3 class="font-orbitron font-bold text-2xl text-blue-400">THỐNG TRỊ META & TIKTOK ADS</h3>
                        </div>
                        <div class="text-blue-400 text-2xl" id="arrow-3">▼</div>
                    </div>
                    <div class="hidden" id="content-3">
                        <p class="text-gray-300 text-lg leading-relaxed mb-4">
                            Làm chủ thuật toán, tối ưu chi phí, và bí mật chạy quảng cáo livestream bùng nổ doanh số.
                            Khai thác tối đa sức mạnh của social media advertising.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div class="bg-gray-800/50 p-3 rounded">✓ Algorithm Mastery</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Creative Testing Framework</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Livestream Ads Strategy</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ TikTok Viral Techniques</div>
                        </div>
                    </div>
                </div>

                <!-- Module 4 - AI Module -->
                <div class="module-card rounded-xl p-8 cursor-pointer border-2 border-orange-500/50" onclick="toggleModule(4)">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center font-orbitron font-bold text-xl">04</div>
                            <h3 class="font-orbitron font-bold text-2xl text-orange-400">HUẤN LUYỆN AI "TỔNG TƯ LỆNH"</h3>
                            <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold">🔥 HOT</span>
                        </div>
                        <div class="text-orange-400 text-2xl" id="arrow-4">▼</div>
                    </div>
                    <div class="hidden" id="content-4">
                        <div class="bg-gradient-to-r from-orange-900/30 to-red-900/30 p-6 rounded-lg mb-4">
                            <p class="text-orange-200 text-lg leading-relaxed font-medium">
                                🤖 <strong>Đây không phải là dùng AI, đây là 'thuần hóa' AI!</strong>
                            </p>
                            <p class="text-gray-300 text-lg leading-relaxed mt-3">
                                Học cách biến AI thành một trợ lý không bao giờ ngủ: tự động viết hàng trăm mẫu bài quảng cáo chuẩn SEO,
                                phân tích đối thủ, và đề xuất chiến dịch chỉ với 1 Enter.
                                <span class="text-orange-400 font-bold">Quản lý cả trăm page chưa bao giờ nhàn đến thế!</span>
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div class="bg-gray-800/50 p-3 rounded">✓ AI Prompt Engineering</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Automated Content Creation</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Competitor Analysis AI</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Campaign Optimization Bot</div>
                        </div>
                    </div>
                </div>

                <!-- Module 5 -->
                <div class="module-card rounded-xl p-8 cursor-pointer" onclick="toggleModule(5)">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center font-orbitron font-bold text-xl">05</div>
                            <h3 class="font-orbitron font-bold text-2xl text-purple-400">TỐI ƯU & PHÒNG THỦ CHUYÊN SÂU</h3>
                        </div>
                        <div class="text-purple-400 text-2xl" id="arrow-5">▼</div>
                    </div>
                    <div class="hidden" id="content-5">
                        <p class="text-gray-300 text-lg leading-relaxed mb-4">
                            Các kỹ thuật đọc chỉ số chuyên nghiệp, A/B testing, và bí mật chặn click tặc (link tặc),
                            bảo vệ từng đồng ngân sách của bạn như một pháo đài bất khả xâm phạm.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div class="bg-gray-800/50 p-3 rounded">✓ Advanced Analytics</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ A/B Testing Mastery</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Click Fraud Protection</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Budget Defense Strategies</div>
                        </div>
                    </div>
                </div>

                <!-- Module 6 -->
                <div class="module-card rounded-xl p-8 cursor-pointer border-2 border-emerald-500/50" onclick="toggleModule(6)">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-emerald-500 to-green-500 rounded-lg flex items-center justify-center font-orbitron font-bold text-xl">06</div>
                            <h3 class="font-orbitron font-bold text-2xl text-emerald-400">BỆ PHÓNG SỰ NGHIỆP & FREELANCE</h3>
                            <span class="bg-emerald-500 text-white px-3 py-1 rounded-full text-xs font-bold">💰 CAREER</span>
                        </div>
                        <div class="text-emerald-400 text-2xl" id="arrow-6">▼</div>
                    </div>
                    <div class="hidden" id="content-6">
                        <div class="bg-gradient-to-r from-emerald-900/30 to-green-900/30 p-6 rounded-lg mb-4">
                            <p class="text-emerald-200 text-lg leading-relaxed font-medium">
                                🗺️ <strong>Chúng tôi sẽ cho bạn xem 'bản đồ kho báu':</strong>
                            </p>
                            <p class="text-gray-300 text-lg leading-relaxed mt-3">
                                Thị trường ngoài kia đang cần gì, các job freelance đang trả bao nhiêu.
                                <span class="text-emerald-400 font-bold">Tự tin ứng tuyển vào các vị trí với mức lương vượt mong đợi,
                                tương đương 2 năm kinh nghiệm.</span>
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div class="bg-gray-800/50 p-3 rounded">✓ Job Market Analysis</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Freelance Platform Mastery</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Portfolio Building</div>
                            <div class="bg-gray-800/50 p-3 rounded">✓ Salary Negotiation</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Salary & Job Market Section -->
    <section class="py-20 px-4 relative">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-orbitron font-bold text-3xl md:text-5xl mb-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-400">
                        THỊ TRƯỜNG ĐANG "KHÁT" NHÂN TÀI
                    </span>
                </h2>
                <p class="text-xl text-gray-300">Mức lương thực tế đang chờ đón bạn</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-green-500/30 rounded-lg p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-lg text-green-400">Digital Marketing Specialist</h3>
                            <p class="text-gray-400 text-sm">Công ty TNHH ████████</p>
                        </div>
                        <span class="bg-green-500/20 text-green-400 px-2 py-1 rounded text-xs">HOT</span>
                    </div>
                    <div class="text-2xl font-orbitron font-bold text-green-400 mb-2">$1,800 - $2,500</div>
                    <p class="text-gray-300 text-sm">Yêu cầu: Google Ads, Facebook Ads, 1-2 năm kinh nghiệm</p>
                </div>

                <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-cyan-500/30 rounded-lg p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-lg text-cyan-400">Performance Marketing Manager</h3>
                            <p class="text-gray-400 text-sm">████████ Technology</p>
                        </div>
                        <span class="bg-cyan-500/20 text-cyan-400 px-2 py-1 rounded text-xs">URGENT</span>
                    </div>
                    <div class="text-2xl font-orbitron font-bold text-cyan-400 mb-2">$2,200 - $3,000</div>
                    <p class="text-gray-300 text-sm">Yêu cầu: Multi-platform ads, Analytics, AI tools</p>
                </div>

                <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-orange-500/30 rounded-lg p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="font-bold text-lg text-orange-400">Freelance Ads Consultant</h3>
                            <p class="text-gray-400 text-sm">Multiple Clients</p>
                        </div>
                        <span class="bg-orange-500/20 text-orange-400 px-2 py-1 rounded text-xs">FLEXIBLE</span>
                    </div>
                    <div class="text-2xl font-orbitron font-bold text-orange-400 mb-2">$50 - $150/h</div>
                    <p class="text-gray-300 text-sm">Thu nhập: $3,000 - $8,000/tháng (part-time)</p>
                </div>
            </div>

            <!-- Salary Progression -->
            <div class="bg-gradient-to-r from-gray-800/50 to-gray-900/50 border border-emerald-500/30 rounded-xl p-8">
                <h3 class="font-orbitron font-bold text-2xl text-center mb-8 text-emerald-400">
                    LỘ TRÌNH TĂNG LƯƠNG SAU KHÓA HỌC
                </h3>
                <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-red-500/20 border-2 border-red-500 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <span class="font-orbitron font-bold text-red-400">HIỆN TẠI</span>
                        </div>
                        <div class="text-2xl font-bold text-red-400 mb-2">$500 - $800</div>
                        <p class="text-gray-400">Mức lương hiện tại</p>
                    </div>

                    <div class="flex-1 flex items-center justify-center">
                        <div class="w-full h-2 bg-gradient-to-r from-red-500 via-yellow-500 to-emerald-500 rounded-full relative">
                            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-emerald-400 text-2xl">→</div>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 bg-emerald-500/20 border-2 border-emerald-500 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <span class="font-orbitron font-bold text-emerald-400">MỤC TIÊU</span>
                        </div>
                        <div class="text-2xl font-bold text-emerald-400 mb-2">$1,800 - $2,500</div>
                        <p class="text-gray-400">Sau 3-6 tháng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Arsenal Section -->
    <section class="py-20 px-4 relative">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-orbitron font-bold text-3xl md:text-5xl mb-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-orange-400 to-red-500">
                        SỞ HỮU BỘ VŨ KHÍ BẤT BẠI
                    </span><br>
                    <span class="text-white">GIÚP BẠN ĐI TRƯỚC MỌI ĐỐI THỦ</span>
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-yellow-500 to-red-500 mx-auto"></div>
            </div>

            <div class="bg-gradient-to-r from-yellow-900/20 via-orange-900/20 to-red-900/20 border-2 border-orange-500/50 rounded-2xl p-8 relative overflow-hidden">
                <!-- Neon glow effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-orange-500/10 to-red-500/10 rounded-2xl blur-xl"></div>

                <div class="relative z-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Card 1: Tài liệu -->
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-yellow-500/50 rounded-xl p-6 text-center transform hover:scale-105 transition-all duration-300">
                        <div class="text-6xl mb-4">💎</div>
                        <h3 class="font-orbitron font-bold text-xl text-yellow-400 mb-4">
                            THƯ VIỆN SEO & ADS ĐỘC QUYỀN
                        </h3>
                        <div class="bg-yellow-500/20 text-yellow-300 px-3 py-1 rounded-full text-sm font-bold mb-4 inline-block">
                            Trị giá 3.000.000 VNĐ
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Sở hữu trọn bộ template, checklist và các tài liệu chiến lược được đúc kết từ hàng trăm chiến dịch thực tế.
                            <span class="text-yellow-400 font-semibold">Đây là bản đồ tư duy của những người dẫn đầu.</span>
                        </p>
                    </div>

                    <!-- Card 2: Bộ Prompt -->
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-orange-500/50 rounded-xl p-6 text-center transform hover:scale-105 transition-all duration-300">
                        <div class="text-6xl mb-4">🧠⚡</div>
                        <h3 class="font-orbitron font-bold text-xl text-orange-400 mb-4">
                            BỘ PROMPT AI "BÁ CHỦ"
                        </h3>
                        <div class="bg-orange-500/20 text-orange-300 px-3 py-1 rounded-full text-sm font-bold mb-4 inline-block">
                            Tăng 10x hiệu suất
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Bộ sưu tập các câu lệnh 'thần chú' mạnh mẽ nhất để bạn thuần hóa bất kỳ AI nào,
                            <span class="text-orange-400 font-semibold">biến nó thành cỗ máy sản xuất content và ý tưởng quảng cáo vô tận.</span>
                        </p>
                    </div>

                    <!-- Card 3: Cộng đồng -->
                    <div class="bg-gradient-to-br from-gray-800/80 to-gray-900/80 border border-red-500/50 rounded-xl p-6 text-center transform hover:scale-105 transition-all duration-300">
                        <div class="text-6xl mb-4">∞👥</div>
                        <h3 class="font-orbitron font-bold text-xl text-red-400 mb-4">
                            CỘNG ĐỒNG HỖ TRỢ TRỌN ĐỜI
                        </h3>
                        <div class="bg-red-500/20 text-red-300 px-3 py-1 rounded-full text-sm font-bold mb-4 inline-block">
                            Vô giá
                        </div>
                        <p class="text-gray-300 leading-relaxed">
                            Bạn không bao giờ phải chiến đấu một mình. Gia nhập mạng lưới các chuyên gia thiện chiến,
                            <span class="text-red-400 font-semibold">cùng nhau cập nhật thuật toán và hỗ trợ nhau phát triển mãi mãi.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 px-4 relative">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-orbitron font-bold text-3xl md:text-5xl mb-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400">
                        KHOẢN ĐẦU TƯ XỨNG ĐÁNG NHẤT
                    </span><br>
                    <span class="text-white">CHO SỰ NGHIỆP CỦA BẠN</span>
                </h2>
            </div>

            <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/90 border-2 border-emerald-500/50 rounded-2xl p-8 relative overflow-hidden">
                <!-- Premium glow effect -->
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-cyan-500/10 rounded-2xl blur-xl"></div>

                <div class="relative z-10">
                    <!-- Value Stack -->
                    <div class="mb-8">
                        <h3 class="font-orbitron font-bold text-2xl text-center text-emerald-400 mb-8">
                            TỔNG GIÁ TRỊ BẠN NHẬN ĐƯỢC:
                        </h3>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between bg-gray-800/50 border border-emerald-500/30 rounded-lg p-4">
                                <div class="flex items-center gap-4">
                                    <div class="text-emerald-400 text-2xl">✅</div>
                                    <span class="text-lg text-gray-200">Khóa Học Ads Mastery Trọn Đời</span>
                                </div>
                                <span class="text-emerald-400 font-bold">(Tương đương 2 năm kinh nghiệm)</span>
                            </div>

                            <div class="flex items-center justify-between bg-gray-800/50 border border-yellow-500/30 rounded-lg p-4">
                                <div class="flex items-center gap-4">
                                    <div class="text-yellow-400 text-2xl">✅</div>
                                    <span class="text-lg text-gray-200">Thư Viện SEO & Ads Độc Quyền</span>
                                </div>
                                <span class="text-yellow-400 font-bold">(Trị giá 3.000.000 VNĐ)</span>
                            </div>

                            <div class="flex items-center justify-between bg-gray-800/50 border border-orange-500/30 rounded-lg p-4">
                                <div class="flex items-center gap-4">
                                    <div class="text-orange-400 text-2xl">✅</div>
                                    <span class="text-lg text-gray-200">Bộ Prompt AI "Bá Chủ"</span>
                                </div>
                                <span class="text-orange-400 font-bold">(Tăng 10x hiệu suất)</span>
                            </div>

                            <div class="flex items-center justify-between bg-gray-800/50 border border-red-500/30 rounded-lg p-4">
                                <div class="flex items-center gap-4">
                                    <div class="text-red-400 text-2xl">✅</div>
                                    <span class="text-lg text-gray-200">Vé Gia Nhập Cộng Đồng Vĩnh Viễn</span>
                                </div>
                                <span class="text-red-400 font-bold">(Vô giá)</span>
                            </div>
                        </div>

                        <div class="text-center mt-8 p-6 bg-gradient-to-r from-emerald-900/30 to-cyan-900/30 border border-emerald-500/50 rounded-xl">
                            <div class="font-orbitron font-bold text-3xl text-emerald-400 mb-2">
                                TỔNG GIÁ TRỊ BẠN NHẬN ĐƯỢC: CỰC LỚN!
                            </div>
                        </div>
                    </div>

                    <!-- Pricing -->
                    <div class="text-center mb-8">
                        <p class="text-gray-400 text-lg mb-4">Chi phí đầu tư để trở thành chuyên gia:</p>
                        <div class="font-orbitron font-black text-6xl md:text-7xl text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400 mb-4">
                            4.500.000 VNĐ
                        </div>
                        <p class="text-gray-300 text-lg">
                            Chỉ bằng <span class="text-emerald-400 font-bold">1.5 tháng lương</span> hiện tại để có thu nhập
                            <span class="text-cyan-400 font-bold">gấp 3-4 lần</span> suốt đời
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="text-center">
                        <button onclick="openRegistrationForm()" class="glow-button px-12 py-6 rounded-lg font-bold text-xl text-white font-orbitron tracking-wider mb-4 transform hover:scale-105 transition-all duration-300">
                            💎 ĐĂNG KÝ VÀ NÂNG TẦM SỰ NGHIỆP NGAY
                        </button>
                        <p class="text-gray-400 text-sm">
                            ⚡ Cam kết hoàn tiền 100% nếu không hài lòng trong 30 ngày đầu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 px-4 relative">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-orbitron font-bold text-3xl md:text-5xl mb-6">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">
                    CHUẨN BỊ KÍCH HOẠT?
                </span>
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Chỉ còn <span class="text-orange-400 font-bold">47 suất</span> cuối cùng cho batch này
            </p>

            <div class="bg-gradient-to-r from-gray-800/80 to-gray-900/80 border border-orange-500/50 rounded-xl p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="text-center">
                        <div class="text-3xl mb-2">🎯</div>
                        <h3 class="font-bold text-lg text-orange-400 mb-2">Bộ Công Cụ Tác Chiến</h3>
                        <p class="text-gray-300 text-sm">Template quản lý chiến dịch đa kênh + Blacklist traffic bẩn</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl mb-2">🤖</div>
                        <h3 class="font-bold text-lg text-cyan-400 mb-2">Live Demo AI</h3>
                        <p class="text-gray-300 text-sm">Xem cách tạo 5 mẫu quảng cáo khác nhau trong 1 phút</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl mb-2">💼</div>
                        <h3 class="font-bold text-lg text-emerald-400 mb-2">Job Placement Support</h3>
                        <p class="text-gray-300 text-sm">Hỗ trợ tìm việc và kết nối với nhà tuyển dụng</p>
                    </div>
                </div>

                <button onclick="openRegistrationForm()" class="glow-button px-12 py-6 rounded-lg font-bold text-xl text-white font-orbitron tracking-wider mb-4">
                    🚀 ĐĂNG KÝ NGAY - CHỈ CÒN 47 SUẤT
                </button>

                <p class="text-gray-400 text-sm">
                    ⚡ Cam kết hoàn tiền 100% nếu không hài lòng trong 30 ngày đầu
                </p>
            </div>
        </div>
    </section>

    <!-- Registration Form Modal -->
    <div id="registrationModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 border-2 border-emerald-500/50 rounded-2xl p-8 max-w-md w-full relative">
            <!-- Close button -->
            <button onclick="closeRegistrationForm()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl">×</button>

            <!-- Form header -->
            <div class="text-center mb-8">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="font-orbitron font-bold text-2xl text-emerald-400 mb-2">KÍCH HOẠT CHIẾN DỊCH</h3>
                <p class="text-gray-300">Điền thông tin để nhận tư vấn miễn phí</p>
            </div>

            <!-- Registration form -->
            <form id="registrationForm" class="space-y-6"
                action="{{ route('course-register', $landingPage->id) }}" method="POST">
                @csrf
                <div>
                    <label class="block text-gray-300 font-medium mb-2">Họ và Tên *</label>
                    <input type="text" name="name" required
                           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20"
                           placeholder="Nhập họ và tên của bạn">
                </div>

                <div>
                    <label class="block text-gray-300 font-medium mb-2">Số Điện Thoại *</label>
                    <input type="tel" name="phone" required
                           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20"
                           placeholder="Nhập số điện thoại">
                </div>

                <div>
                    <label class="block text-gray-300 font-medium mb-2">Email</label>
                    <input type="email" name="email"
                           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-500/20"
                           placeholder="Nhập email (không bắt buộc)">
                </div>

                <button type="submit" class="w-full glow-button px-6 py-4 rounded-lg font-bold text-lg text-white font-orbitron tracking-wider">
                    💎 ĐĂNG KÝ NGAY
                </button>

                <p class="text-gray-400 text-xs text-center">
                    Bằng cách đăng ký, bạn đồng ý nhận thông tin tư vấn từ chúng tôi
                </p>
            </form>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-gradient-to-br from-emerald-800 to-emerald-900 border-2 border-emerald-500/50 rounded-2xl p-8 max-w-md w-full text-center">
            <div class="text-6xl mb-4">✅</div>
            <h3 class="font-orbitron font-bold text-2xl text-emerald-400 mb-4">ĐĂNG KÝ THÀNH CÔNG!</h3>
            <p class="text-gray-300 mb-6">
                Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn trong vòng 24h để tư vấn chi tiết về khóa học.
            </p>
            <button onclick="closeSuccessModal()" class="glow-button px-6 py-3 rounded-lg font-bold text-white">
                ĐÓNG
            </button>
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
        // Registration form functions
        function openRegistrationForm() {
            document.getElementById('registrationModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeRegistrationForm() {
            document.getElementById('registrationModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function closeSuccessModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function submitRegistration(event) {
            event.preventDefault();

            const formData = new FormData(event.target);
            const data = {
                fullName: formData.get('fullName'),
                phone: formData.get('phone'),
                email: formData.get('email') || 'Không cung cấp'
            };

            // Simulate form submission
            console.log('Thông tin đăng ký:', data);

            // Close registration modal and show success modal
            closeRegistrationForm();
            document.getElementById('successModal').classList.remove('hidden');

            // Reset form
            event.target.reset();
        }

        function toggleModule(moduleNumber) {
            const content = document.getElementById(`content-${moduleNumber}`);
            const arrow = document.getElementById(`arrow-${moduleNumber}`);

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                arrow.textContent = '▲';
            } else {
                content.classList.add('hidden');
                arrow.textContent = '▼';
            }
        }

        // Animate counters
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString();
            }, 20);
        }

        // Initialize counters when page loads
        window.addEventListener('load', () => {
            const counters = document.querySelectorAll('.stats-counter');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                if (target) {
                    animateCounter(counter, target);
                }
            });
        });

        // Add some interactive effects
        document.querySelectorAll('.module-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-5px) scale(1.02)';
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97699082433a8b81',t:'MTc1NjQ0NDQ2Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
