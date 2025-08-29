<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMO 5A - Cyber Grid Matrix Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
            background: #000;
        }

        .font-orbitron { font-family: 'Orbitron', monospace; }
        .font-inter { font-family: 'Inter', sans-serif; }

        /* Cyber Grid Matrix Background */
        .cyber-grid {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                linear-gradient(rgba(0,255,255,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,255,255,0.03) 1px, transparent 1px),
                linear-gradient(rgba(255,0,255,0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,0,255,0.02) 1px, transparent 1px),
                radial-gradient(circle at 20% 50%, rgba(0,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,0,255,0.1) 0%, transparent 50%),
                linear-gradient(135deg, #000428 0%, #004e92 100%);
            background-size: 50px 50px, 50px 50px, 100px 100px, 100px 100px, 100% 100%, 100% 100%, 100% 100%;
            animation: grid-flow 20s linear infinite;
            z-index: -2;
        }

        @keyframes grid-flow {
            0% { background-position: 0 0, 0 0, 0 0, 0 0, 0 0, 0 0, 0 0; }
            100% { background-position: 50px 50px, 50px 50px, 100px 100px, 100px 100px, 0 0, 0 0, 0 0; }
        }

        /* Data Particles */
        .data-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #00ffff;
            border-radius: 50%;
            animation: float-particle 15s linear infinite;
            box-shadow: 0 0 10px #00ffff;
        }

        @keyframes float-particle {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) translateX(100px);
                opacity: 0;
            }
        }

        /* Neon Glow Effects */
        .neon-box {
            border: 1px solid rgba(0,255,255,0.5);
            background: rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
            box-shadow:
                0 0 20px rgba(0,255,255,0.2),
                inset 0 0 20px rgba(0,255,255,0.1);
            animation: neon-pulse 3s ease-in-out infinite alternate;
        }

        @keyframes neon-pulse {
            0% {
                border-color: rgba(0,255,255,0.5);
                box-shadow:
                    0 0 20px rgba(0,255,255,0.2),
                    inset 0 0 20px rgba(0,255,255,0.1);
            }
            100% {
                border-color: rgba(255,0,255,0.8);
                box-shadow:
                    0 0 40px rgba(255,0,255,0.4),
                    inset 0 0 30px rgba(255,0,255,0.2);
            }
        }

        /* Sparkle Effects */
        .sparkle {
            position: relative;
            overflow: hidden;
        }

        .sparkle::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            animation: sparkle-sweep 3s linear infinite;
        }

        @keyframes sparkle-sweep {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        /* 3D Formula Animation */
        .formula-3d {
            perspective: 1000px;
            transform-style: preserve-3d;
        }

        .formula-item {
            display: inline-block;
            animation: formula-float 4s ease-in-out infinite;
            transform-origin: center;
        }

        .formula-item:nth-child(1) { animation-delay: 0s; }
        .formula-item:nth-child(2) { animation-delay: 0.5s; }
        .formula-item:nth-child(3) { animation-delay: 1s; }
        .formula-item:nth-child(4) { animation-delay: 1.5s; }
        .formula-item:nth-child(5) { animation-delay: 2s; }
        .formula-item:nth-child(6) { animation-delay: 2.5s; }
        .formula-item:nth-child(7) { animation-delay: 3s; }

        @keyframes formula-float {
            0%, 100% {
                transform: translateY(0) rotateX(0) rotateY(0);
                text-shadow: 0 0 20px currentColor;
            }
            25% {
                transform: translateY(-20px) rotateX(10deg) rotateY(5deg);
                text-shadow: 0 0 30px currentColor;
            }
            50% {
                transform: translateY(-10px) rotateX(-5deg) rotateY(-10deg);
                text-shadow: 0 0 40px currentColor;
            }
            75% {
                transform: translateY(-15px) rotateX(5deg) rotateY(15deg);
                text-shadow: 0 0 35px currentColor;
            }
        }

        /* Interactive Curriculum */
        .curriculum-station {
            position: relative;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .curriculum-station:hover {
            transform: translateY(-10px) scale(1.05);
            z-index: 10;
        }

        .curriculum-popup {
            position: absolute;
            top: -150px;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            background: rgba(0,0,0,0.9);
            border: 1px solid #00ffff;
            border-radius: 10px;
            padding: 15px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 20;
            box-shadow: 0 0 30px rgba(0,255,255,0.5);
        }

        .curriculum-station:hover .curriculum-popup {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(-10px);
        }

        /* Pulse Button */
        .pulse-btn {
            animation: pulse-glow 2s ease-in-out infinite;
            position: relative;
            overflow: hidden;
        }

        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(255,215,0,0.5);
            }
            50% {
                box-shadow: 0 0 40px rgba(255,215,0,0.8), 0 0 60px rgba(255,215,0,0.4);
            }
        }

        /* Scan Line Effect */
        .scan-line {
            position: relative;
            overflow: hidden;
        }

        .scan-line::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,255,255,0.4), transparent);
            animation: scan 2s linear infinite;
        }

        @keyframes scan {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Glassmorphism */
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
        @keyframes particle-explode {
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
        }

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

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #00ffff, #ff00ff, #ffff00, #00ffff);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient-shift 3s ease infinite;
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
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
<body class="text-white font-inter">
    <!-- Cyber Grid Background -->
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
    <div class="cyber-grid"></div>

    <!-- Data Particles -->
    <div class="data-particles" id="particles"></div>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center relative px-4 py-20">
        <div class="container mx-auto text-center relative z-10">
            <!-- Pain Point Headline -->
            <h1 class="font-orbitron text-3xl md:text-5xl lg:text-6xl font-black mb-8 leading-tight">
                <span class="text-red-400">CÓ KIẾN THỨC</span><br>
                <span class="gradient-text">CÔNG NGHỆ THÔNG TIN</span><br>
                <span class="text-red-400">NHƯNG VẪN THẤT NGHIỆP,</span><br>
                <span class="text-yellow-400">THIẾU ĐỊNH HƯỚNG & LƯƠNG THẤP?</span>
            </h1>

            <!-- 3D Formula Animation -->
            <div class="formula-3d neon-box rounded-3xl p-8 mb-12 max-w-6xl mx-auto sparkle">
                <div class="flex flex-wrap justify-center items-center gap-4 text-xl md:text-3xl font-orbitron font-bold">
                    <span class="formula-item text-blue-400">CODE</span>
                    <span class="formula-item text-purple-400">+</span>
                    <span class="formula-item text-green-400">AI</span>
                    <span class="formula-item text-purple-400">+</span>
                    <span class="formula-item text-yellow-400">AUTOMATION</span>
                    <span class="formula-item text-purple-400">+</span>
                    <span class="formula-item text-pink-400">AFFILIATE</span>
                    <span class="formula-item text-purple-400">+</span>
                    <span class="formula-item text-orange-400">ADS</span>
                    <span class="formula-item text-purple-400">+</span>
                    <span class="formula-item text-cyan-400">APPLICATION</span>
                    <span class="formula-item text-purple-400">=</span>
                    <span class="formula-item gradient-text text-2xl md:text-4xl">PASSIVE INCOME</span>
                </div>
            </div>

            <!-- CTA Button -->
            <button onclick="showRegistrationForm()" class="pulse-btn bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-black font-orbitron font-black text-xl py-4 px-12 rounded-full transition-all duration-300 transform hover:scale-105">
                ĐĂNG KÝ NGAY - THAY ĐỔI CUỘC ĐỜI!
            </button>
        </div>
    </section>

    <!-- Developer Story Video Section -->
    <section class="py-20 px-4 bg-gradient-to-r from-purple-900/20 to-blue-900/20">
        <div class="container mx-auto">
            <h2 class="font-orbitron text-4xl md:text-5xl font-black text-center mb-8 gradient-text">
                CÂU CHUYỆN CỦA MỘT DEVELOPER
            </h2>
            <p class="text-center text-xl text-gray-300 mb-12">Từ "Giỏi Code Nhưng Loay Hoay" Đến "Bậc Thầy Thu Nhập Thụ Động"</p>

            <div class="max-w-4xl mx-auto">
                <div class="neon-box rounded-3xl p-8 sparkle relative overflow-hidden">
                    <!-- Video Player Mockup -->
                    <div class="aspect-video bg-gradient-to-br from-gray-900 to-black rounded-2xl relative mb-6 cursor-pointer group" onclick="playStoryVideo()">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 bg-gradient-to-r from-red-500 to-pink-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300 pulse-btn">
                                <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Video Thumbnail -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-purple-600/20 rounded-2xl">
                            <div class="absolute bottom-4 left-4 right-4">
                                <h3 class="font-orbitron text-xl font-bold text-white mb-2">
                                    "Từ Developer Thất Nghiệp Đến Thu Nhập $5000/Tháng"
                                </h3>
                                <p class="text-gray-300 text-sm">
                                    Câu chuyện thật của Nguyễn Minh Tuấn - Cựu sinh viên CNTT
                                </p>
                            </div>
                        </div>

                        <!-- Play Button Glow -->
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
                    </div>

                    <!-- Story Timeline -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center glass rounded-xl p-4">
                            <div class="text-3xl mb-2">😰</div>
                            <h4 class="font-bold text-red-400 mb-2">TRƯỚC KHI HỌC</h4>
                            <p class="text-sm text-gray-300">
                                Tốt nghiệp CNTT loại Giỏi nhưng thất nghiệp 8 tháng.
                                Chỉ biết code nhưng không biết kiếm tiền.
                            </p>
                        </div>

                        <div class="text-center glass rounded-xl p-4">
                            <div class="text-3xl mb-2">🚀</div>
                            <h4 class="font-bold text-yellow-400 mb-2">TRONG QUÁ TRÌNH</h4>
                            <p class="text-sm text-gray-300">
                                3 tháng học MMO 5A, áp dụng ngay kiến thức.
                                Tháng đầu đã kiếm được $300 từ freelance.
                            </p>
                        </div>

                        <div class="text-center glass rounded-xl p-4">
                            <div class="text-3xl mb-2">💰</div>
                            <h4 class="font-bold text-green-400 mb-2">SAU 6 THÁNG</h4>
                            <p class="text-sm text-gray-300">
                                Thu nhập ổn định $5000/tháng từ nhiều nguồn:
                                Freelance, Affiliate, và sản phẩm riêng.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Career Path Tool -->
    <section class="py-20 px-4">
        <div class="container mx-auto">
            <h2 class="font-orbitron text-4xl md:text-5xl font-black text-center mb-8 gradient-text">
                LỘ TRÌNH SỰ NGHIỆP TƯƠNG TÁC
            </h2>
            <p class="text-center text-xl text-gray-300 mb-12">Chọn tình trạng hiện tại để xem lộ trình phù hợp</p>

            <div class="max-w-4xl mx-auto">
                <!-- Career Status Selector -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button onclick="showCareerPath('student')" class="career-btn neon-box px-6 py-3 rounded-full font-bold transition-all duration-300 hover:scale-105" data-status="student">
                        🎓 Sinh viên IT năm 2-3
                    </button>
                    <button onclick="showCareerPath('graduate')" class="career-btn neon-box px-6 py-3 rounded-full font-bold transition-all duration-300 hover:scale-105" data-status="graduate">
                        👨‍🎓 Mới tốt nghiệp
                    </button>
                    <button onclick="showCareerPath('junior')" class="career-btn neon-box px-6 py-3 rounded-full font-bold transition-all duration-300 hover:scale-105" data-status="junior">
                        💻 Junior Dev (1-2 năm)
                    </button>
                    <button onclick="showCareerPath('senior')" class="career-btn neon-box px-6 py-3 rounded-full font-bold transition-all duration-300 hover:scale-105" data-status="senior">
                        🚀 Senior Dev
                    </button>
                </div>

                <!-- Career Path Display -->
                <div id="careerPathDisplay" class="neon-box rounded-3xl p-8 sparkle hidden">
                    <div id="careerPathContent"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost Comparison Section -->
    <section class="py-20 px-4 bg-gradient-to-r from-red-900/20 to-orange-900/20">
        <div class="container mx-auto">
            <h2 class="font-orbitron text-4xl md:text-5xl font-black text-center mb-8">
                <span class="text-red-400">SO SÁNH CHI PHÍ</span><br>
                <span class="gradient-text">TỰ HỌC vs HỌC TẠI MMO 5A</span>
            </h2>

            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Self Learning Path -->
                    <div class="neon-box rounded-3xl p-8 border-red-500/50 relative overflow-hidden">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                            CÁCH CŨ
                        </div>

                        <h3 class="font-orbitron text-2xl font-bold text-red-400 mb-6 text-center">
                            TỰ MÀY MÒ HỌC HỎI
                        </h3>

                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>📚 Khóa học online rời rạc</span>
                                <span class="text-red-400 font-bold">~15.000.000đ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>🛠️ Tools & Software licenses</span>
                                <span class="text-red-400 font-bold">~20.000.000đ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>📖 Sách, tài liệu, tutorials</span>
                                <span class="text-red-400 font-bold">~5.000.000đ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>💸 Chi phí thử nghiệm, sai lầm</span>
                                <span class="text-red-400 font-bold">~30.000.000đ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>⏰ Cơ hội bỏ lỡ (3 năm tuổi trẻ)</span>
                                <span class="text-red-400 font-bold">VÔ GIÁ</span>
                            </div>
                        </div>

                        <div class="border-t border-red-500/50 pt-6 text-center">
                            <p class="text-xl text-gray-300 mb-2">Tổng chi phí:</p>
                            <div class="font-orbitron text-3xl font-black text-red-400 mb-4">
                                70.000.000đ+ & 3 NĂM
                            </div>
                            <div class="bg-red-500/20 p-4 rounded-xl">
                                <p class="text-red-300 font-bold">⚠️ Không đảm bảo thành công</p>
                                <p class="text-sm text-gray-400">Thiếu định hướng, dễ bỏ cuộc giữa chừng</p>
                            </div>
                        </div>
                    </div>

                    <!-- MMO 5A Path -->
                    <div class="neon-box rounded-3xl p-8 border-green-500/50 relative overflow-hidden sparkle">
                        <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                            CÁCH MỚI
                        </div>

                        <h3 class="font-orbitron text-2xl font-bold text-green-400 mb-6 text-center">
                            HỌC TẠI MMO 5A
                        </h3>

                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>🎯 Khóa học tổng lực 20 buổi</span>
                                <span class="text-green-400 font-bold">12.000.000đ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>🎁 Gói hỗ trợ toàn diện</span>
                                <span class="text-green-400 font-bold">MIỄN PHÍ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>👨‍🏫 Mentor 1-1 trọn đời</span>
                                <span class="text-green-400 font-bold">MIỄN PHÍ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>🚀 Cộng đồng & networking</span>
                                <span class="text-green-400 font-bold">MIỄN PHÍ</span>
                            </div>
                            <div class="flex justify-between items-center glass p-4 rounded-lg">
                                <span>⚡ Thời gian học tập trung</span>
                                <span class="text-green-400 font-bold">CHỈ 3 THÁNG</span>
                            </div>
                        </div>

                        <div class="border-t border-green-500/50 pt-6 text-center">
                            <p class="text-xl text-gray-300 mb-2">Tổng đầu tư:</p>
                            <div class="font-orbitron text-3xl font-black text-green-400 mb-4">
                                12.000.000đ & 3 THÁNG
                            </div>
                            <div class="bg-green-500/20 p-4 rounded-xl">
                                <p class="text-green-300 font-bold">✅ Đảm bảo thành công 100%</p>
                                <p class="text-sm text-gray-400">Lộ trình rõ ràng, mentor hỗ trợ 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Savings Highlight -->
                <div class="text-center mt-12">
                    <div class="neon-box rounded-2xl p-8 max-w-2xl mx-auto sparkle">
                        <h3 class="font-orbitron text-2xl font-bold gradient-text mb-4">
                            BẠN TIẾT KIỆM ĐƯỢC
                        </h3>
                        <div class="font-orbitron text-4xl md:text-5xl font-black text-yellow-400 mb-4">
                            58.000.000đ + 2.75 NĂM
                        </div>
                        <p class="text-gray-300 text-lg">
                            Đầu tư thông minh = Thành công nhanh chóng!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 20-Session Interactive Curriculum -->
    <section class="py-20 px-4 relative">
        <div class="container mx-auto">
            <h2 class="font-orbitron text-4xl md:text-5xl font-black text-center mb-8 gradient-text">
                LỘ TRÌNH CHUYỂN ĐỔI: 20 BUỔI HỌC
            </h2>
            <p class="text-center text-xl text-gray-300 mb-16">TỪ CON SỐ 0 ĐẾN BẬC THẦY - HOVER ĐỂ XEM CHI TIẾT</p>

            <!-- Interactive Curriculum Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 max-w-7xl mx-auto">
                <!-- Session 1 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-cyan-400 mb-2">01</div>
                    <h4 class="font-semibold text-sm">Tư Duy Doanh Nhân</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-cyan-400 mb-2">Tư Duy Doanh Nhân & Money Mindset</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Chuyển đổi từ Employee sang Entrepreneur</li>
                            <li>• Xây dựng Money Mindset cho Developer</li>
                            <li>• Phân tích cơ hội kinh doanh online</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 2 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-cyan-400 mb-2">02</div>
                    <h4 class="font-semibold text-sm">Phân Tích Thị Trường</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-cyan-400 mb-2">Lựa Chọn Ngách "Kim Cương"</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Nghiên cứu thị trường và đối thủ</li>
                            <li>• Xác định niche có tiềm năng cao</li>
                            <li>• Chiến lược định vị thương hiệu</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 3 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-green-400 mb-2">03</div>
                    <h4 class="font-semibold text-sm">Sales Funnel</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-green-400 mb-2">Xây Dựng Sales Funnel & Conversion</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Thiết kế customer journey hoàn chỉnh</li>
                            <li>• Tối ưu conversion rate từng bước</li>
                            <li>• A/B test và phân tích hiệu quả</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 4 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-red-400 mb-2">04</div>
                    <h4 class="font-semibold text-sm">Bảo Mật Web</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-red-400 mb-2">Kỹ Thuật Bảo Mật & Chống DDOS</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Cấu hình firewall và CDN</li>
                            <li>• Phòng chống tấn công DDOS</li>
                            <li>• SSL và bảo mật dữ liệu</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 5 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-purple-400 mb-2">05</div>
                    <h4 class="font-semibold text-sm">SEO AI Revolution</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-purple-400 mb-2">Chiến Lược Content "One-Man-Army"</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Sử dụng AI để tạo content hàng loạt</li>
                            <li>• Keyword research với AI tools</li>
                            <li>• Content automation workflow</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 6 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-blue-400 mb-2">06</div>
                    <h4 class="font-semibold text-sm">Technical SEO</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-blue-400 mb-2">Master Internal Link & Sitemap</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Cấu trúc internal linking tối ưu</li>
                            <li>• XML sitemap và schema markup</li>
                            <li>• Core Web Vitals optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 7 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-indigo-400 mb-2">07</div>
                    <h4 class="font-semibold text-sm">SEO Analytics</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-indigo-400 mb-2">Google Console & Indexing Chuyên Sâu</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Phân tích dữ liệu Search Console</li>
                            <li>• Tăng tốc indexing và crawling</li>
                            <li>• Troubleshooting SEO issues</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 8 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-pink-400 mb-2">08</div>
                    <h4 class="font-semibold text-sm">Affiliate Mastery</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-pink-400 mb-2">Kỹ Thuật Cloaking & Anti-Scan</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Link cloaking và redirect 301</li>
                            <li>• Chống scan link affiliate</li>
                            <li>• Tracking và attribution modeling</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 9 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-400 mb-2">09</div>
                    <h4 class="font-semibold text-sm">Google Ads</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-yellow-400 mb-2">Chiến Lược Bidding & Từ Khóa</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Smart bidding strategies</li>
                            <li>• Keyword grouping và match types</li>
                            <li>• Quality Score optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 10 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-red-500 mb-2">10</div>
                    <h4 class="font-semibold text-sm">YouTube Ads</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-red-500 mb-2">Target & Retarget Khán Giả</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Video ads creative strategy</li>
                            <li>• Audience targeting và lookalike</li>
                            <li>• Retargeting funnel optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 11 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-blue-500 mb-2">11</div>
                    <h4 class="font-semibold text-sm">Meta Ads</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-blue-500 mb-2">Tối Ưu Chi Phí & Retargeting</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Facebook Pixel và conversion API</li>
                            <li>• Custom audiences và lookalike</li>
                            <li>• Budget optimization strategies</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 12 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-purple-500 mb-2">12</div>
                    <h4 class="font-semibold text-sm">TikTok Ads</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-purple-500 mb-2">Livestream & Video Viral</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• TikTok algorithm và viral content</li>
                            <li>• Livestream shopping integration</li>
                            <li>• Spark Ads và branded content</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 13 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-green-500 mb-2">13</div>
                    <h4 class="font-semibold text-sm">YouTube Automation</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-green-500 mb-2">Xây Dựng Kênh Tự Động A-Z</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Content automation với AI</li>
                            <li>• Thumbnail và title optimization</li>
                            <li>• Monetization và brand deals</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 14 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-orange-400 mb-2">14</div>
                    <h4 class="font-semibold text-sm">Short-form Empire</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-orange-400 mb-2">TikTok, Shorts & Reels</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Cross-platform content strategy</li>
                            <li>• Viral hooks và storytelling</li>
                            <li>• Automation tools và scheduling</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 15 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-cyan-500 mb-2">15</div>
                    <h4 class="font-semibold text-sm">AI 1-Click</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-cyan-500 mb-2">Huấn Luyện AI Cho Content & Code</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Custom GPT và prompt engineering</li>
                            <li>• Code generation và debugging</li>
                            <li>• Content creation workflows</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 16 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-teal-400 mb-2">16</div>
                    <h4 class="font-semibold text-sm">Monetize Code</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-teal-400 mb-2">Đưa Sản Phẩm Lên Sàn Thương Mại</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Marketplace strategy (GitHub, CodeCanyon)</li>
                            <li>• Product packaging và pricing</li>
                            <li>• Customer support automation</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 17 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-lime-400 mb-2">17</div>
                    <h4 class="font-semibold text-sm">Project Thực Chiến</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-lime-400 mb-2">Tích Hợp Vào Hệ Thống AI7.VN</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Xây dựng project end-to-end</li>
                            <li>• Integration với AI7.VN platform</li>
                            <li>• Testing và deployment</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 18 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-amber-400 mb-2">18</div>
                    <h4 class="font-semibold text-sm">Nghệ Thuật Freelance</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-amber-400 mb-2">Tìm Job, Báo Giá & Quản Lý KH</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Profile optimization và portfolio</li>
                            <li>• Pricing strategy và negotiation</li>
                            <li>• Client relationship management</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 19 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-rose-400 mb-2">19</div>
                    <h4 class="font-semibold text-sm">Tư Vấn 1-1</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-rose-400 mb-2">Xây Dựng Lộ Trình Sự Nghiệp</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Personal career roadmap</li>
                            <li>• Goal setting và milestone tracking</li>
                            <li>• Mentor guidance và feedback</li>
                        </ul>
                    </div>
                </div>

                <!-- Session 20 -->
                <div class="curriculum-station neon-box rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-violet-400 mb-2">20</div>
                    <h4 class="font-semibold text-sm">Final Project</h4>
                    <div class="curriculum-popup">
                        <h5 class="font-bold text-violet-400 mb-2">Final Project & Lễ Tốt Nghiệp</h5>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Project presentation và defense</li>
                            <li>• Peer review và feedback</li>
                            <li>• Graduation ceremony & certification</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Schedule Section -->
    <section class="py-20 px-4 bg-gradient-to-r from-gray-900/30 to-purple-900/20">
        <div class="container mx-auto">
            <h2 class="font-orbitron text-4xl md:text-5xl font-black text-center mb-16 gradient-text">
                LỊCH TRÌNH & PHƯƠNG THỨC HỌC TẬP
            </h2>

            <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="neon-box rounded-2xl p-8 text-center sparkle">
                    <div class="text-6xl mb-6">📅</div>
                    <h3 class="font-orbitron text-xl font-bold mb-4 text-cyan-400">LINH HOẠT</h3>
                    <p class="text-gray-300 text-lg">
                        Học online qua Zoom vào buổi tối và cuối tuần.
                        Phù hợp với lịch làm việc của bạn.
                    </p>
                </div>

                <div class="neon-box rounded-2xl p-8 text-center sparkle">
                    <div class="text-6xl mb-6">🎥</div>
                    <h3 class="font-orbitron text-xl font-bold mb-4 text-pink-400">KHÔNG BỎ LỠ</h3>
                    <p class="text-gray-300 text-lg">
                        Toàn bộ buổi học được ghi hình để bạn
                        xem lại trọn đời, không giới hạn.
                    </p>
                </div>

                <div class="neon-box rounded-2xl p-8 text-center sparkle">
                    <div class="text-6xl mb-6">👥</div>
                    <h3 class="font-orbitron text-xl font-bold mb-4 text-yellow-400">TƯƠNG TÁC CAO</h3>
                    <p class="text-gray-300 text-lg">
                        Lớp học siêu nhỏ (10-15 người),
                        hỗ trợ trực tiếp từ mentor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Support Package -->
    <section class="py-20 px-4">
        <div class="container mx-auto">
            <h2 class="font-orbitron text-4xl md:text-5xl font-black text-center mb-8">
                <span class="gradient-text">GÓI HỖ TRỢ SỰ NGHIỆP TOÀN DIỆN</span><br>
                <span class="text-yellow-400">TRỊ GIÁ HƠN 30.000.000Đ</span>
            </h2>

            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-cyan-400">🎨 (MỚI) Tài Khoản Canva AI Pro 6 Tháng</h4>
                        <p class="text-right text-yellow-400 font-bold">1.500.000đ</p>
                    </div>

                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-blue-400">🎯 Buổi tư vấn 1-1 cùng Mentor</h4>
                        <p class="text-right text-yellow-400 font-bold">3.000.000đ</p>
                    </div>

                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-green-400">💻 Source code web & funnel độc quyền</h4>
                        <p class="text-right text-yellow-400 font-bold">7.000.000đ</p>
                    </div>

                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-yellow-400">📚 Tài liệu & Case study thực chiến</h4>
                        <p class="text-right text-yellow-400 font-bold">3.500.000đ</p>
                    </div>

                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-purple-400">🤖 AI Tools & Automation Scripts</h4>
                        <p class="text-right text-yellow-400 font-bold">5.000.000đ</p>
                    </div>

                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-pink-400">🎥 Video tutorials độc quyền</h4>
                        <p class="text-right text-yellow-400 font-bold">2.500.000đ</p>
                    </div>

                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-indigo-400">🌐 Quyền truy cập AI7.VN Platform</h4>
                        <p class="text-right text-yellow-400 font-bold">4.000.000đ</p>
                    </div>

                    <div class="neon-box rounded-xl p-6 sparkle">
                        <h4 class="font-bold text-lg mb-2 text-teal-400">💼 Hỗ trợ tìm việc & Freelance trọn đời</h4>
                        <p class="text-right text-yellow-400 font-bold">4.500.000đ</p>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <div class="pulse-btn bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-orbitron font-black text-3xl md:text-4xl py-6 px-12 rounded-2xl inline-block">
                        TỔNG GIÁ TRỊ: 31.000.000đ+
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 px-4 bg-gradient-to-r from-gray-900/50 to-black/50">
        <div class="container mx-auto text-center">
            <h2 class="font-orbitron text-4xl md:text-5xl font-black mb-8 gradient-text">
                LỜI ĐỀ NGHỊ KHÔNG THỂ CHỐI TỪ
            </h2>

            <div class="max-w-3xl mx-auto neon-box rounded-3xl p-8 mb-12 sparkle">
                <h3 class="font-orbitron text-2xl font-bold mb-8 text-yellow-400">PACKAGE HOÀN CHỈNH</h3>

                <div class="space-y-4 mb-8">
                    <div class="flex justify-between items-center glass p-4 rounded-lg">
                        <span class="text-lg">✅ Khóa Học Tổng Lực 20 Buổi</span>
                        <span class="text-yellow-400 font-bold">12.000.000đ</span>
                    </div>
                    <div class="flex justify-between items-center glass p-4 rounded-lg">
                        <span class="text-lg">✅ Gói Hỗ Trợ Sự Nghiệp Toàn Diện</span>
                        <span class="text-yellow-400 font-bold">31.000.000đ+</span>
                    </div>
                    <div class="flex justify-between items-center glass p-4 rounded-lg">
                        <span class="text-lg">✅ Quyền Gia Nhập Sàn Việc Làm AI7.VN</span>
                        <span class="text-yellow-400 font-bold">VÔ GIÁ</span>
                    </div>
                </div>

                <div class="border-t border-cyan-500/50 pt-6">
                    <p class="text-xl mb-4 text-gray-300">Tổng giá trị thực: <span class="line-through text-red-400">43.000.000đ+</span></p>
                    <p class="text-2xl mb-6 text-gray-300">Đầu tư hôm nay chỉ:</p>
                    <div class="font-orbitron text-5xl md:text-6xl font-black gradient-text mb-8">
                        12.000.000 VNĐ
                    </div>

                    <div class="bg-gradient-to-r from-green-500/20 to-blue-500/20 p-6 rounded-xl mb-8">
                        <p class="text-green-400 font-bold text-xl mb-2">🎁 BONUS ĐặC BIỆT</p>
                        <p class="text-gray-300">Đăng ký trong 48h tới nhận thêm: <span class="text-yellow-400 font-bold">1 năm hosting miễn phí + Domain .com</span></p>
                    </div>

                    <button onclick="showRegistrationForm()" class="pulse-btn scan-line bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-black font-orbitron font-black text-xl py-4 px-12 rounded-full transition-all duration-300 transform hover:scale-105">
                        ĐĂNG KÝ NGAY - TIẾT KIỆM 31.000.000Đ!
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form Modal -->
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

    <!-- Footer -->
    <footer class="py-12 px-4 border-t border-gray-800">
        <div class="container mx-auto text-center">
            <div class="font-orbitron text-2xl font-bold gradient-text mb-4">MMO 5A - CYBER GRID MATRIX EXPERIENCE</div>
            <p class="text-gray-400">Biến kỹ năng code thành cỗ máy tạo thu nhập thụ động</p>
        </div>
    </footer>

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
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');

            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Parallax effect
        function handleParallax() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-layer');

            parallaxElements.forEach((element, index) => {
                const speed = (index + 1) * 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        }

        // Video story function
        function playStoryVideo() {
            alert('🎬 Video đang được chuẩn bị! Đây là câu chuyện thật của Nguyễn Minh Tuấn - từ thất nghiệp 8 tháng đến thu nhập $5000/tháng chỉ sau 6 tháng học MMO 5A. Đăng ký ngay để xem video đầy đủ!');
        }

        // Career path interactive tool
        function showCareerPath(status) {
            const display = document.getElementById('careerPathDisplay');
            const content = document.getElementById('careerPathContent');

            // Update button states
            document.querySelectorAll('.career-btn').forEach(btn => {
                btn.classList.remove('bg-gradient-to-r', 'from-cyan-500', 'to-blue-500', 'text-black');
                btn.classList.add('text-white');
            });

            event.target.classList.add('bg-gradient-to-r', 'from-cyan-500', 'to-blue-500', 'text-black');
            event.target.classList.remove('text-white');

            const careerPaths = {
                student: {
                    title: '🎓 LỘ TRÌNH CHO SINH VIÊN IT NĂM 2-3',
                    timeline: [
                        { time: 'Tháng 1-3', title: 'Học MMO 5A', desc: 'Nắm vững kiến thức từ cơ bản đến nâng cao', color: 'text-blue-400' },
                        { time: 'Tháng 4', title: 'Freelance đầu tiên', desc: 'Kiếm $300-500 từ các project nhỏ', color: 'text-green-400' },
                        { time: 'Năm 3', title: 'Thu nhập ổn định', desc: 'Đạt $800-1200/tháng từ freelance + affiliate', color: 'text-yellow-400' },
                        { time: 'Tốt nghiệp', title: 'Tự tin đàm phán', desc: 'Deal lương $2000+ hoặc tự vận hành dự án riêng', color: 'text-purple-400' }
                    ]
                },
                graduate: {
                    title: '👨‍🎓 LỘ TRÌNH CHO FRESH GRADUATE',
                    timeline: [
                        { time: 'Tháng 1-3', title: 'Học MMO 5A', desc: 'Bổ sung kỹ năng kiếm tiền thực tế', color: 'text-blue-400' },
                        { time: 'Tháng 4-6', title: 'Xây dựng portfolio', desc: 'Tạo các project thực tế + kiếm $500-800/tháng', color: 'text-green-400' },
                        { time: 'Tháng 7-12', title: 'Phát triển sự nghiệp', desc: 'Lựa chọn: Làm việc với lương cao hoặc tự kinh doanh', color: 'text-yellow-400' },
                        { time: 'Năm 2', title: 'Thành công vượt trội', desc: 'Thu nhập $3000-5000/tháng từ nhiều nguồn', color: 'text-purple-400' }
                    ]
                },
                junior: {
                    title: '💻 LỘ TRÌNH CHO JUNIOR DEVELOPER',
                    timeline: [
                        { time: 'Tháng 1-3', title: 'Học MMO 5A', desc: 'Mở rộng kỹ năng kinh doanh và marketing', color: 'text-blue-400' },
                        { time: 'Tháng 4-6', title: 'Thu nhập phụ', desc: 'Tạo thêm $1000-1500/tháng từ side projects', color: 'text-green-400' },
                        { time: 'Tháng 7-12', title: 'Chuyển đổi nghề nghiệp', desc: 'Lựa chọn: Senior role hoặc full-time entrepreneur', color: 'text-yellow-400' },
                        { time: 'Năm 2', title: 'Tự do tài chính', desc: 'Thu nhập $5000-8000/tháng, làm chủ thời gian', color: 'text-purple-400' }
                    ]
                },
                senior: {
                    title: '🚀 LỘ TRÌNH CHO SENIOR DEVELOPER',
                    timeline: [
                        { time: 'Tháng 1-3', title: 'Học MMO 5A', desc: 'Chuyển đổi từ technical sang business mindset', color: 'text-blue-400' },
                        { time: 'Tháng 4-6', title: 'Xây dựng hệ thống', desc: 'Tạo passive income $2000-3000/tháng', color: 'text-green-400' },
                        { time: 'Tháng 7-12', title: 'Scale up business', desc: 'Phát triển team, outsource, tự động hóa', color: 'text-yellow-400' },
                        { time: 'Năm 2', title: 'Doanh nhân thành công', desc: 'Thu nhập $10000+/tháng, tự do hoàn toàn', color: 'text-purple-400' }
                    ]
                }
            };

            const path = careerPaths[status];

            content.innerHTML = `
                <h3 class="font-orbitron text-2xl font-bold gradient-text mb-8 text-center">
                    ${path.title}
                </h3>

                <div class="space-y-6">
                    ${path.timeline.map((step, index) => `
                        <div class="flex items-start gap-6 glass rounded-xl p-6 transform hover:scale-105 transition-all duration-300">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center font-bold text-black">
                                    ${index + 1}
                                </div>
                            </div>
                            <div class="flex-grow">
                                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                    <h4 class="font-bold text-lg ${step.color}">${step.title}</h4>
                                    <span class="text-sm text-gray-400 font-mono">${step.time}</span>
                                </div>
                                <p class="text-gray-300">${step.desc}</p>
                            </div>
                        </div>
                    `).join('')}
                </div>

                <div class="mt-8 text-center">
                    <div class="bg-gradient-to-r from-green-500/20 to-blue-500/20 p-6 rounded-xl">
                        <p class="text-green-400 font-bold text-lg mb-2">🎯 KẾT QUẢ CAM KẾT</p>
                        <p class="text-gray-300">
                            Sau khi hoàn thành MMO 5A, bạn sẽ có đủ kỹ năng và kiến thức để
                            <span class="text-yellow-400 font-bold">tự tin kiếm tiền online</span>
                            và xây dựng sự nghiệp theo cách riêng của mình.
                        </p>
                    </div>
                </div>
            `;

            display.classList.remove('hidden');
            display.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

        // Registration form functions
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

        // Smooth scrolling and animations
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

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();

            // Observe elements for animation
            document.querySelectorAll('.neon-box, .curriculum-station').forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'all 0.6s ease';
                observer.observe(element);
            });

            // Add parallax effect
            window.addEventListener('scroll', handleParallax);

            // Close modal when clicking outside
            document.getElementById('registrationModal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeRegistrationForm();
                }
            });
        });

        // Add ripple effect to buttons
        document.addEventListener('click', function(e) {
            if (e.target.tagName === 'BUTTON' && !e.target.closest('#registrationForm')) {
                const button = e.target;
                const ripple = document.createElement('span');
                const rect = button.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');

                button.style.position = 'relative';
                button.style.overflow = 'hidden';
                button.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            }
        });

        // Add CSS for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255,255,255,0.3);
                transform: scale(0);
                animation: ripple-effect 0.6s linear;
                pointer-events: none;
            }

            @keyframes ripple-effect {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9769faad07a81fca',t:'MTc1NjQ0ODgxMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
