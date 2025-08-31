<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Affiliate Architect's Blueprint - Affiliate Marketing Mastery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .network-bg {
            background: linear-gradient(135deg, #1E1B4B 0%, #312E81 50%, #1E1B4B 100%);
            position: relative;
            overflow: hidden;
        }

        .network-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.3;
        }

        .node {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #FBBF24;
            border-radius: 50%;
            box-shadow: 0 0 10px #FBBF24;
            animation: pulse 2s infinite;
        }

        .connection {
            position: absolute;
            height: 1px;
            background: linear-gradient(90deg, transparent, #F97316, transparent);
            animation: flow 3s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.5); }
        }

        @keyframes flow {
            0% { opacity: 0; transform: translateX(-100%); }
            50% { opacity: 1; }
            100% { opacity: 0; transform: translateX(100%); }
        }

        .gradient-text {
            background: linear-gradient(135deg, #F97316, #FBBF24);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glow-button {
            background: linear-gradient(135deg, #F97316, #FBBF24);
            box-shadow: 0 0 30px rgba(249, 115, 22, 0.5);
            transition: all 0.3s ease;
        }

        .glow-button:hover {
            box-shadow: 0 0 40px rgba(249, 115, 22, 0.8);
            transform: translateY(-2px);
        }

        .module-card {
            background: rgba(30, 27, 75, 0.8);
            border: 1px solid rgba(249, 115, 22, 0.3);
            backdrop-filter: blur(10px);
            transition: all 0.5s ease;
            opacity: 0;
            transform: translateY(50px);
        }

        .module-card.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .module-card:hover {
            border-color: #F97316;
            box-shadow: 0 10px 40px rgba(249, 115, 22, 0.2);
            transform: translateY(-5px);
        }

        .treasure-box {
            background: linear-gradient(135deg, #1E1B4B, #312E81);
            border: 2px solid #F97316;
            box-shadow: 0 0 50px rgba(249, 115, 22, 0.3);
            animation: treasureGlow 3s infinite;
        }

        @keyframes treasureGlow {
            0%, 100% { box-shadow: 0 0 50px rgba(249, 115, 22, 0.3); }
            50% { box-shadow: 0 0 80px rgba(249, 115, 22, 0.6); }
        }

        .price-highlight {
            background: linear-gradient(135deg, #F97316, #FBBF24);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(249, 115, 22, 0.5);
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .calculator-card {
            background: rgba(30, 27, 75, 0.9);
            border: 2px solid rgba(249, 115, 22, 0.5);
            backdrop-filter: blur(15px);
        }

        .slider {
            -webkit-appearance: none;
            appearance: none;
            height: 8px;
            border-radius: 5px;
            background: linear-gradient(90deg, #1E1B4B, #F97316);
            outline: none;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: linear-gradient(135deg, #F97316, #FBBF24);
            cursor: pointer;
            box-shadow: 0 0 10px rgba(249, 115, 22, 0.5);
        }

        .demo-image {
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .demo-image:hover {
            border-color: #F97316;
            box-shadow: 0 0 30px rgba(249, 115, 22, 0.5);
            transform: scale(1.02);
        }

        .roadmap-step {
            position: relative;
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s ease;
        }

        .roadmap-step.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .roadmap-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, #F97316, #FBBF24);
            transform: translateX(-50%);
        }

        .step-circle {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #F97316, #FBBF24);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: black;
            position: relative;
            z-index: 10;
        }

        .niche-card {
            background: rgba(30, 27, 75, 0.8);
            border: 1px solid rgba(249, 115, 22, 0.3);
            transition: all 0.3s ease;
        }

        .niche-card:hover {
            border-color: #F97316;
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(249, 115, 22, 0.2);
        }

        .glass {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* Parallax Layers */
        .parallax-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Particle Explosion */
        /* @keyframes particle-explode {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(0) rotate(180deg);
                opacity: 0;
            }
        }

        .exploding {
            animation: particle-explode 0.5s ease-out forwards;
        } */

        /* Form Animation */
        .form-appear {
            animation: form-materialize 1s ease-out forwards;
        }

        @keyframes form-materialize {
            0% {
                transform: scale(0) rotate(180deg);
                opacity: 0;
            }
            50% {
                transform: scale(1.1) rotate(0deg);
                opacity: 0.8;
            }
            100% {
                transform: scale(1) rotate(0deg);
                opacity: 1;
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
<body class="bg-slate-900 text-white">
    <!-- Network Animation Background -->
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
    <div class="network-animation" id="networkAnimation"></div>

    <!-- Hero Section -->
    <section class="network-bg min-h-screen flex items-center justify-center relative">
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                <span class="gradient-text">XÂY DỰNG CỖ MÁY</span><br>
                <span class="text-white">KIẾM TIỀN THỤ ĐỘNG</span><br>
                <span class="gradient-text">24/7</span>
            </h1>
            <h2 class="text-xl md:text-2xl mb-8 text-cyan-300 font-light max-w-4xl mx-auto">
                Ngừng Spam Link Vô Vọng. Bắt Đầu Xây Dựng <span class="gradient-text font-semibold">'Đế Chế Nội Dung'</span> Bất Bại & Làm Chủ Kỹ Thuật <span class="gradient-text font-semibold">'Link Vô Hình'</span>
            </h2>
            <button onclick="showRegistrationForm()" class="glow-button text-white px-12 py-4 rounded-full text-xl font-bold hover:scale-105 transition-all duration-300">
                🚀 BẮT ĐẦU XÂY DỰNG ĐẾ CHẾ CỦA BẠN
            </button>
        </div>
    </section>

    <!-- Commission Calculator Section -->
    <section class="py-20 bg-gradient-to-b from-slate-900 to-slate-800">
        <div class="container mx-auto px-6">
            <div class="calculator-card rounded-3xl p-12 max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 gradient-text">
                    💰 MÁY TÍNH HOA HỒNG THỤ ĐỘNG
                </h2>
                <p class="text-xl text-center mb-12 text-cyan-300">
                    Khám phá tiềm năng thu nhập của bạn với hệ thống affiliate chuyên nghiệp
                </p>

                <div class="grid md:grid-cols-2 gap-12">
                    <div class="space-y-8">
                        <div>
                            <label class="block text-lg font-semibold mb-4 text-yellow-300">
                                Traffic hàng tháng: <span id="trafficValue">10,000</span> lượt truy cập
                            </label>
                            <input type="range" min="1000" max="100000" value="10000" class="slider w-full" id="trafficSlider">
                        </div>

                        <div>
                            <label class="block text-lg font-semibold mb-4 text-yellow-300">
                                Tỷ lệ chuyển đổi: <span id="conversionValue">3</span>%
                            </label>
                            <input type="range" min="1" max="10" value="3" step="0.5" class="slider w-full" id="conversionSlider">
                        </div>

                        <div>
                            <label class="block text-lg font-semibold mb-4 text-yellow-300">
                                Hoa hồng trung bình: <span id="commissionValue">500,000</span> VNĐ
                            </label>
                            <input type="range" min="100000" max="2000000" value="500000" step="50000" class="slider w-full" id="commissionSlider">
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-orange-500/20 to-yellow-400/20 rounded-2xl p-8 text-center">
                        <h3 class="text-2xl font-bold mb-6 gradient-text">THU NHẬP THỤ ĐỘNG DỰ KIẾN</h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-gray-300">Hàng tháng:</p>
                                <p class="text-3xl font-bold gradient-text" id="monthlyIncome">15,000,000 VNĐ</p>
                            </div>
                            <div>
                                <p class="text-gray-300">Hàng năm:</p>
                                <p class="text-4xl font-bold gradient-text" id="yearlyIncome">180,000,000 VNĐ</p>
                            </div>
                        </div>
                        <div class="mt-8 p-4 bg-green-500/20 rounded-lg">
                            <p class="text-green-300 font-semibold">🎯 Với hệ thống của chúng tôi, con số này hoàn toàn khả thi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pain Point Section -->
    <section class="py-20 bg-gradient-to-b from-slate-800 to-slate-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 gradient-text">
                BẠN CÓ ĐANG LÃNG PHÍ THỜI GIAN?
            </h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-red-900/20 border border-red-500/30 rounded-xl p-8">
                    <div class="text-6xl mb-4">😤</div>
                    <h3 class="text-xl font-bold mb-4 text-red-400">Link Bị Bóp Tương Tác?</h3>
                    <p class="text-gray-300">Đăng link mãi mà reach thấp, engagement tệ?</p>
                </div>
                <div class="bg-red-900/20 border border-red-500/30 rounded-xl p-8">
                    <div class="text-6xl mb-4">💸</div>
                    <h3 class="text-xl font-bold mb-4 text-red-400">Không Ra Hoa Hồng?</h3>
                    <p class="text-gray-300">Bán được vài đơn lẻ tẻ, không ổn định?</p>
                </div>
                <div class="bg-red-900/20 border border-red-500/30 rounded-xl p-8">
                    <div class="text-6xl mb-4">😫</div>
                    <h3 class="text-xl font-bold mb-4 text-red-400">Công Sức Đổ Sông Đổ Bể?</h3>
                    <p class="text-gray-300">Làm nhiều mà thu nhập không xứng đáng?</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Demo Section -->
    <section class="py-20 bg-slate-900">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 gradient-text">
                🎥 DEMO "LINK VÔ HÌNH" THỰC TẾ
            </h2>
            <p class="text-xl text-center mb-12 text-cyan-300 max-w-3xl mx-auto">
                Xem cách chúng tôi ẩn link affiliate vào một bức ảnh bình thường. Click vào ảnh để trải nghiệm!
            </p>

            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-purple-900/30 to-blue-900/30 rounded-2xl p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-4 text-yellow-300">⚡ TRƯỚC KHI HỌC:</h3>
                        <p class="text-gray-300 mb-6">Link thô, dễ bị phát hiện và chặn</p>
                        <div class="bg-red-900/30 border border-red-500/50 rounded-lg p-4 inline-block">
                            <code class="text-red-300">https://affiliate.com/ref=12345?product=abc</code>
                        </div>
                    </div>

                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold mb-4 text-green-300">✨ SAU KHI HỌC:</h3>
                        <p class="text-gray-300 mb-6">Link ẩn hoàn toàn trong ảnh, không ai phát hiện được!</p>

                        <div class="demo-image inline-block rounded-xl overflow-hidden">
                            <img src="/assets/images/banner-affiliate.jpg" />
                        </div>

                        <p class="text-sm text-gray-400 mt-4">
                            * Đây chỉ là demo. Link thực tế sẽ hoàn toàn vô hình và tự nhiên
                        </p>
                    </div>

                    <div class="bg-yellow-400/10 border border-yellow-400/30 rounded-lg p-6 text-center">
                        <p class="text-yellow-300 font-semibold text-lg">
                            🔥 Kỹ thuật này giúp tăng tỷ lệ click lên 300% và tránh bị thuật toán chặn!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Modules Section -->
    <section class="py-20 bg-slate-900 relative">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text">
                5 MODULE "KIẾN TẠO" ĐẾ CHẾ
            </h2>

            <div class="space-y-8 max-w-5xl mx-auto">
                <!-- Module 1 -->
                <div class="module-card rounded-2xl p-8 border-l-4 border-l-orange-500">
                    <div class="flex items-start gap-6">
                        <div class="bg-gradient-to-r from-orange-500 to-yellow-400 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-black">1</div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 gradient-text">Tư Duy "Kiềng 3 Chân" Bất Bại</h3>
                            <p class="text-gray-300 text-lg">Khám phá chiến lược nền tảng <span class="text-cyan-400 font-semibold">(Traffic → Funnel → Conversion)</span> giúp bạn xây dựng hệ thống bền vững, không phụ thuộc vào bất kỳ nền tảng nào.</p>
                        </div>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="module-card rounded-2xl p-8 border-l-4 border-l-orange-500">
                    <div class="flex items-start gap-6">
                        <div class="bg-gradient-to-r from-orange-500 to-yellow-400 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-black">2</div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 gradient-text">Xây Dựng "Đế Chế Nội Dung" Đa Kênh</h3>
                            <p class="text-gray-300 text-lg">Biến Facebook, TikTok, YouTube thành những <span class="text-cyan-400 font-semibold">cỗ máy kéo traffic vô tận</span>. Bí quyết tạo content viral tự nhiên lồng ghép sản phẩm.</p>
                        </div>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="module-card rounded-2xl p-8 border-l-4 border-l-orange-500 bg-gradient-to-r from-purple-900/20 to-blue-900/20">
                    <div class="flex items-start gap-6">
                        <div class="bg-gradient-to-r from-orange-500 to-yellow-400 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-black">3</div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 gradient-text">🔥 Kỹ Thuật "Link Vô Hình" & Bẫy Chuyển Đổi</h3>
                            <div class="bg-yellow-400/10 border border-yellow-400/30 rounded-lg p-4 mb-4">
                                <p class="text-yellow-300 font-semibold">⚡ MODULE LÀM NÊN SỰ KHÁC BIỆT GIỮA NGHIỆP DƯ VÀ CHUYÊN GIA</p>
                            </div>
                            <p class="text-gray-300 text-lg">Nắm vững bí thuật che giấu link trong code, trong ảnh, kỹ thuật <span class="text-cyan-400 font-semibold">'Link Trap'</span> chuyên nghiệp và <span class="text-cyan-400 font-semibold">'Anti-Scan'</span> để qua mặt mọi thuật toán quét link, đảm bảo hoa hồng về túi 100%.</p>
                        </div>
                    </div>
                </div>

                <!-- Module 4 -->
                <div class="module-card rounded-2xl p-8 border-l-4 border-l-orange-500">
                    <div class="flex items-start gap-6">
                        <div class="bg-gradient-to-r from-orange-500 to-yellow-400 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-black">4</div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 gradient-text">Tối Ưu Hóa & Tự Động Hóa</h3>
                            <p class="text-gray-300 text-lg">Học cách theo dõi, phân tích và tối ưu từng click. Thiết lập các quy trình tự động để <span class="text-cyan-400 font-semibold">'cỗ máy' của bạn hoạt động ngay cả khi bạn ngủ</span>.</p>
                        </div>
                    </div>
                </div>

                <!-- Module 5 -->
                <div class="module-card rounded-2xl p-8 border-l-4 border-l-orange-500">
                    <div class="flex items-start gap-6">
                        <div class="bg-gradient-to-r from-orange-500 to-yellow-400 rounded-full w-16 h-16 flex items-center justify-center text-2xl font-bold text-black">5</div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4 gradient-text">Case Studies & "Chiến Dịch Ngách" Thực Tế</h3>
                            <p class="text-gray-300 text-lg">Mổ xẻ các chiến dịch affiliate thành công trong các thị trường khó, từ đó rút ra <span class="text-cyan-400 font-semibold">công thức để bạn áp dụng ngay lập tức</span>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section class="py-20 bg-gradient-to-b from-slate-900 to-slate-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 gradient-text">
                🗺️ LỘ TRÌNH "TỪ ZERO ĐẾN 100$ ĐẦU TIÊN"
            </h2>

            <div class="max-w-4xl mx-auto relative">
                <div class="roadmap-line"></div>

                <div class="space-y-16">
                    <!-- Step 1 -->
                    <div class="roadmap-step flex items-center gap-8">
                        <div class="step-circle">1</div>
                        <div class="flex-1 bg-gradient-to-r from-slate-800/80 to-slate-700/80 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-2 gradient-text">Tuần 1-2: Nền Tảng & Mindset</h3>
                            <p class="text-gray-300">Xây dựng tư duy đúng, chọn niche phù hợp, thiết lập công cụ cơ bản</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="roadmap-step flex items-center gap-8 flex-row-reverse">
                        <div class="step-circle">2</div>
                        <div class="flex-1 bg-gradient-to-l from-slate-800/80 to-slate-700/80 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-2 gradient-text">Tuần 3-4: Xây Dựng Hệ Thống</h3>
                            <p class="text-gray-300">Tạo website, thiết lập funnel, chuẩn bị content template</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="roadmap-step flex items-center gap-8">
                        <div class="step-circle">3</div>
                        <div class="flex-1 bg-gradient-to-r from-slate-800/80 to-slate-700/80 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-2 gradient-text">Tuần 5-6: Triển Khai & Tối Ưu</h3>
                            <p class="text-gray-300">Áp dụng kỹ thuật "Link Vô Hình", chạy traffic đầu tiên</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="roadmap-step flex items-center gap-8 flex-row-reverse">
                        <div class="step-circle">4</div>
                        <div class="flex-1 bg-gradient-to-l from-slate-800/80 to-slate-700/80 rounded-xl p-6">
                            <h3 class="text-xl font-bold mb-2 gradient-text">Tuần 7-8: Scale & Tự Động Hóa</h3>
                            <p class="text-gray-300">Nhân rộng những gì hiệu quả, tự động hóa quy trình</p>
                        </div>
                    </div>

                    <!-- Final Goal -->
                    <div class="roadmap-step flex items-center gap-8">
                        <div class="step-circle bg-gradient-to-r from-green-500 to-emerald-400 text-white">🎯</div>
                        <div class="flex-1 bg-gradient-to-r from-green-900/30 to-emerald-900/30 border border-green-500/50 rounded-xl p-6">
                            <h3 class="text-2xl font-bold mb-2 text-green-400">MỤC TIÊU: 100$ ĐẦU TIÊN!</h3>
                            <p class="text-gray-300">Với hệ thống hoàn chỉnh, bạn sẽ đạt được mốc này trong 2 tháng đầu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10 Golden Niches Section -->
    <section class="py-20 bg-slate-900">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-12 gradient-text">
                📋 CHECKLIST 10 NICHE VÀNG
            </h2>
            <p class="text-xl text-center mb-12 text-cyan-300 max-w-3xl mx-auto">
                Danh sách 10 thị trường ngách tiềm năng nhất cho người mới bắt đầu làm affiliate
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto mb-12">
                <div class="niche-card rounded-xl p-6">
                    <div class="text-4xl mb-4">💪</div>
                    <h3 class="text-lg font-bold mb-2 gradient-text">Sức Khỏe & Fitness</h3>
                    <p class="text-gray-300 text-sm">Thực phẩm chức năng, thiết bị tập luyện</p>
                </div>

                <div class="niche-card rounded-xl p-6">
                    <div class="text-4xl mb-4">💰</div>
                    <h3 class="text-lg font-bold mb-2 gradient-text">Tài Chính Cá Nhân</h3>
                    <p class="text-gray-300 text-sm">Khóa học đầu tư, công cụ quản lý tài chính</p>
                </div>

                <div class="niche-card rounded-xl p-6">
                    <div class="text-4xl mb-4">🎓</div>
                    <h3 class="text-lg font-bold mb-2 gradient-text">Giáo Dục Online</h3>
                    <p class="text-gray-300 text-sm">Khóa học kỹ năng, chứng chỉ nghề nghiệp</p>
                </div>

                <div class="niche-card rounded-xl p-6">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-lg font-bold mb-2 gradient-text">Công Nghệ & Gadgets</h3>
                    <p class="text-gray-300 text-sm">Phụ kiện điện tử, phần mềm, apps</p>
                </div>

                <div class="niche-card rounded-xl p-6">
                    <div class="text-4xl mb-4">🏠</div>
                    <h3 class="text-lg font-bold mb-2 gradient-text">Nhà Cửa & Nội Thất</h3>
                    <p class="text-gray-300 text-sm">Đồ gia dụng thông minh, trang trí</p>
                </div>

                <div class="niche-card rounded-xl p-6">
                    <div class="text-4xl mb-4">👶</div>
                    <h3 class="text-lg font-bold mb-2 gradient-text">Mẹ & Bé</h3>
                    <p class="text-gray-300 text-sm">Sản phẩm chăm sóc, đồ chơi giáo dục</p>
                </div>
            </div>

            <div class="text-center">
                <div class="bg-gradient-to-r from-yellow-400/20 to-orange-500/20 border border-yellow-400/50 rounded-2xl p-8 max-w-2xl mx-auto">
                    <h3 class="text-2xl font-bold mb-4 gradient-text">🎁 NHẬN NGAY FILE PDF HOÀN CHỈNH</h3>
                    <p class="text-gray-300 mb-6">Bao gồm phân tích chi tiết từng niche, mức hoa hồng trung bình, và chiến lược tiếp cận</p>
                    <a href="https://zalo.me/g/otoevm317" class="glow-button text-white px-8 py-3 rounded-full font-bold">
                        📥 TẢI NGAY CHECKLIST 10 NICHE VÀNG
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Treasure Box Section -->
    <section class="py-20 bg-gradient-to-b from-slate-800 to-slate-900">
        <div class="container mx-auto px-6">
            <div class="treasure-box rounded-3xl p-12 max-w-6xl mx-auto text-center">
                <div class="floating mb-8">
                    <div class="text-8xl mb-4">💎</div>
                </div>
                <h2 class="text-4xl md:text-6xl font-black mb-8 gradient-text">
                    KHO BÁU KHỞI NGHIỆP
                </h2>
                <h3 class="text-2xl md:text-3xl font-bold mb-8 text-yellow-300">
                    QUÀ TẶNG KHÔNG TƯỞNG: NHẬN NGAY BỘ WEBSITE AFFILIATE HOÀN CHỈNH<br>
                    <span class="gradient-text">TRỊ GIÁ 3.000.000Đ!</span>
                </h3>

                <!-- Website Mockup -->
                <div class="bg-slate-700 rounded-2xl p-8 mb-8 max-w-4xl mx-auto">
                    <div class="bg-white rounded-lg mb-4">
                        <img class="rounded-lg" src="/assets/images/banner-affiliate-2.png" />
                    </div>
                    <div class="text-center">
                        <span class="bg-gradient-to-r from-orange-500 to-yellow-400 text-black px-4 py-2  rounded-full font-bold">WEBSITE AFFILIATE CHUYÊN NGHIỆP</span>
                    </div>
                </div>

                <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Chúng tôi không chỉ dạy bạn lý thuyết, chúng tôi trao cho bạn <span class="gradient-text font-bold">CÔNG CỤ</span>. Nhận ngay bộ source code website affiliate chuyên nghiệp, đã tối ưu SEO và chuyển đổi. Bạn chỉ cần thay thông tin là có ngay <span class="text-cyan-400 font-semibold">'ngôi nhà'</span> cho đế chế của mình, tiết kiệm hàng tháng trời và hàng triệu đồng.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 bg-slate-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 gradient-text">
                MỘT KHOẢN ĐẦU TƯ KHÔNG THỂ TIN NỔI
            </h2>

            <div class="max-w-4xl mx-auto bg-gradient-to-b from-slate-800 to-slate-900 rounded-3xl p-12 border-2 border-orange-500/50">
                <h3 class="text-3xl font-bold mb-8 text-cyan-300">VALUE STACK - GIÁ TRỊ BẠN NHẬN ĐƯỢC:</h3>

                <div class="space-y-6 mb-12 text-left">
                    <div class="flex items-center gap-4">
                        <div class="text-green-400 text-2xl">✅</div>
                        <span class="text-xl">Khóa Học Affiliate Mastery Trọn Đời</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-green-400 text-2xl">✅</div>
                        <span class="text-xl"><span class="gradient-text font-bold">(QUÀ TẶNG)</span> Bộ Website Affiliate Chuyên Nghiệp <span class="text-yellow-400 font-bold">(Trị giá 3.000.000 VNĐ)</span></span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-green-400 text-2xl">✅</div>
                        <span class="text-xl"><span class="gradient-text font-bold">(QUÀ TẶNG)</span> Checklist 10 Niche Vàng PDF</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-green-400 text-2xl">✅</div>
                        <span class="text-xl">Cộng Đồng Hỗ Trợ Trọn Đời</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-green-400 text-2xl">✅</div>
                        <span class="text-xl">Lộ Trình "Zero đến 100$ Đầu Tiên"</span>
                    </div>
                </div>

                <div class="text-center mb-8">
                    <p class="text-2xl mb-4 text-gray-300">TỔNG GIÁ TRỊ BẠN NHẬN ĐƯỢC:</p>
                    <p class="text-4xl font-bold gradient-text mb-8">VƯỢT XA MONG ĐỢI!</p>

                    <p class="text-xl mb-6 text-yellow-300">(Bạn nhận được quà tặng trị giá 3.000.000Đ khi đầu tư chỉ...)</p>

                    <div class="price-highlight text-4xl md:text-8xl font-black mb-8">
                        2.800.000 VNĐ
                    </div>
                </div>

                <button onclick="showRegistrationForm()" class="glow-button text-white px-10 py-3 md:px-16 md:py-6 rounded-full text-1xl md:text-2xl font-bold hover:scale-105 transition-all duration-300 w-full md:w-auto">
                    🚀 SỞ HỮU CỖ MÁY KIẾM TIỀN NGAY HÔM NAY
                </button>
            </div>
        </div>
    </section>

    <div id="registrationModal" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div id="registrationForm" class="glass neon-box rounded-2xl p-8 max-w-md w-full">
            <h3 class="font-orbitron text-2xl font-bold text-center mb-6 gradient-text">ĐĂNG KÝ NGAY</h3>

            <form class="space-y-4" action="{{route('course-register', $landingPage->id)}}" method="POST">
                @csrf
                <div>
                    <input type="text" placeholder="Họ và tên *" required name="name"
                           class="w-full bg-black/50 border border-cyan-500/50 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-cyan-400 focus:outline-none">
                </div>

                <div>
                    <input type="tel" placeholder="Số điện thoại *" required name="phone"
                           class="w-full bg-black/50 border border-cyan-500/50 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-cyan-400 focus:outline-none">
                </div>

                <div>
                    <input type="email" placeholder="Email *" required name="email"
                           class="w-full bg-black/50 border border-cyan-500/50 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:border-cyan-400 focus:outline-none">
                </div>

                <button type="submit" class="w-full scan-line pulse-btn bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-black font-bold py-3 rounded-lg transition-all duration-300">
                    GỬI ĐĂNG KÝ
                </button>
            </form>

            <button onclick="closeRegistrationForm()" class="absolute top-4 right-4 text-gray-400 hover:text-white text-2xl">
                ×
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
        function showRegistrationForm() {
            const button = event.target;
            const modal = document.getElementById('registrationModal');
            const form = document.getElementById('registrationForm');

            // Create explosion effect
            button.classList.add('exploding');

            setTimeout(() => {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                form.classList.add('form-appear');
            }, 500);
        }

        function closeRegistrationForm() {
            const modal = document.getElementById('registrationModal');
            const form = document.getElementById('registrationForm');

            form.classList.remove('form-appear');
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }
        // Network Animation
        function createNetworkAnimation() {
            const container = document.getElementById('networkAnimation');
            const nodes = [];
            const connections = [];

            // Create nodes
            for (let i = 0; i < 20; i++) {
                const node = document.createElement('div');
                node.className = 'node';
                node.style.left = Math.random() * 100 + '%';
                node.style.top = Math.random() * 100 + '%';
                node.style.animationDelay = Math.random() * 2 + 's';
                container.appendChild(node);
                nodes.push(node);
            }

            // Create connections
            for (let i = 0; i < 15; i++) {
                const connection = document.createElement('div');
                connection.className = 'connection';
                connection.style.left = Math.random() * 100 + '%';
                connection.style.top = Math.random() * 100 + '%';
                connection.style.width = Math.random() * 200 + 100 + 'px';
                connection.style.transform = 'rotate(' + Math.random() * 360 + 'deg)';
                connection.style.animationDelay = Math.random() * 3 + 's';
                container.appendChild(connection);
            }
        }

        // Commission Calculator
        function updateCalculator() {
            const traffic = document.getElementById('trafficSlider').value;
            const conversion = document.getElementById('conversionSlider').value;
            const commission = document.getElementById('commissionSlider').value;

            document.getElementById('trafficValue').textContent = parseInt(traffic).toLocaleString();
            document.getElementById('conversionValue').textContent = conversion;
            document.getElementById('commissionValue').textContent = parseInt(commission).toLocaleString();

            const monthlyIncome = (traffic * (conversion / 100) * commission);
            const yearlyIncome = monthlyIncome * 12;

            document.getElementById('monthlyIncome').textContent = Math.round(monthlyIncome).toLocaleString() + ' VNĐ';
            document.getElementById('yearlyIncome').textContent = Math.round(yearlyIncome).toLocaleString() + ' VNĐ';
        }

        // Demo Link Click
        function demoLinkClick() {
            // Create popup effect
            const popup = document.createElement('div');
            popup.className = 'fixed inset-0 bg-black/80 flex items-center justify-center z-50';
            popup.innerHTML = `
                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-8 max-w-md mx-4 text-center">
                    <div class="text-6xl mb-4">🎉</div>
                    <h3 class="text-2xl font-bold mb-4 text-white">MAGIC HAPPENED!</h3>
                    <p class="text-white mb-6">Bạn vừa được chuyển hướng thông qua link ẩn! Trong thực tế, đây sẽ là trang affiliate của bạn.</p>
                    <button onclick="this.parentElement.parentElement.remove()" class="bg-white text-green-600 px-6 py-2 rounded-full font-bold">
                        Hiểu rồi! 🚀
                    </button>
                </div>
            `;
            document.body.appendChild(popup);

            setTimeout(() => {
                if (popup.parentElement) {
                    popup.remove();
                }
            }, 5000);
        }

        // Module Animation on Scroll
        function animateModules() {
            const modules = document.querySelectorAll('.module-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('animate');
                        }, index * 200);
                    }
                });
            }, { threshold: 0.1 });

            modules.forEach(module => observer.observe(module));
        }

        // Roadmap Animation
        function animateRoadmap() {
            const steps = document.querySelectorAll('.roadmap-step');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.classList.add('animate');
                        }, index * 300);
                    }
                });
            }, { threshold: 0.1 });

            steps.forEach(step => observer.observe(step));
        }

        // Initialize animations
        document.addEventListener('DOMContentLoaded', () => {
            // createNetworkAnimation();
            animateModules();
            animateRoadmap();

            // Calculator event listeners
            document.getElementById('trafficSlider').addEventListener('input', updateCalculator);
            document.getElementById('conversionSlider').addEventListener('input', updateCalculator);
            document.getElementById('commissionSlider').addEventListener('input', updateCalculator);

            // Initial calculator update
            updateCalculator();
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9769c529c358ddc9',t:'MTc1NjQ0NjYxOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
