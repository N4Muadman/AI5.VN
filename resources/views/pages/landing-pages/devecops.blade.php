<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSecOps Mastery: Từ Zero đến Hero - The Digital Fortress Architect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }

        .scan-line {
            position: relative;
            overflow: hidden;
            border: 2px solid rgba(6, 182, 212, 0.3);
            box-shadow: 0 0 10px rgba(6, 182, 212, 0.2);
            transition: all 0.3s ease;
        }

        .scan-line:hover {
            border-color: rgba(6, 182, 212, 0.8);
            box-shadow: 0 0 20px rgba(6, 182, 212, 0.4), inset 0 0 20px rgba(6, 182, 212, 0.1);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .scan-line::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(6, 182, 212, 0.6), transparent);
            animation: scan 2s infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .scan-line:hover::before {
            opacity: 1;
        }

        @keyframes scan {
            0% {
                left: -100%;
            }

            100% {
                left: 100%;
            }
        }

        .pipeline-flow {
            background: linear-gradient(90deg, #3b82f6 0%, #06b6d4 50%, #10b981 100%);
            background-size: 200% 100%;
            animation: flow 3s ease-in-out infinite;
        }

        @keyframes flow {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .tech-grid {
            background-image:
                linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        .glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .module-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .module-card:hover {
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);
        }

        .pipeline-sidebar {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
            opacity: 0.7;
        }

        .pipeline-node {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.3s ease;
        }

        .pipeline-node::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background: linear-gradient(to bottom, currentColor, transparent);
        }

        .pipeline-node:last-child::after {
            display: none;
        }

        .pipeline-energy {
            position: absolute;
            right: 50px;
            top: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, #3b82f6, #06b6d4, #10b981);
            border-radius: 2px;
            opacity: 0;
            animation: pipelineFlow 4s ease-in-out infinite;
        }

        @keyframes pipelineFlow {

            0%,
            100% {
                opacity: 0;
                transform: translateY(-100%);
            }

            50% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .tooltip {
            position: absolute;
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 8px;
            padding: 12px;
            color: white;
            font-size: 14px;
            white-space: nowrap;
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .tooltip.show {
            opacity: 1;
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
    <!-- Pipeline Sidebar -->
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
    <div class="pipeline-sidebar hidden lg:block">
        <div class="pipeline-energy"></div>
        <div class="pipeline-node bg-blue-500 text-white" data-tooltip="Code Development">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M8 3a1 1 0 0 0 0 2v3.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5V6a1 1 0 0 0-2 0v2.5A2.5 2.5 0 0 0 7.5 11h.5v3.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5V14a1 1 0 0 0-2 0v1.5A2.5 2.5 0 0 0 7.5 18h.5v1a1 1 0 0 0 2 0v-1h.5a2.5 2.5 0 0 0 2.5-2.5V14a1 1 0 0 0-2 0v1.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5V11h.5A2.5 2.5 0 0 0 13 8.5V6a1 1 0 0 0-2 0v2.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5V5a1 1 0 0 0 0-2H8z" />
            </svg>
        </div>
        <div class="pipeline-node bg-cyan-500 text-white" data-tooltip="Docker Containerization">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M13.5 3H12v2.5h1.5V3zm-3 0H9v2.5h1.5V3zm3 3H12V8.5h1.5V6zm-3 0H9V8.5h1.5V6zm-3 0H6V8.5h1.5V6zm6 0h-1.5V8.5H15V6zm3 3H16.5v2.5H18V9zm-1.5 0H15v2.5h1.5V9zm-3 0H12v2.5h1.5V9zm-3 0H9v2.5h1.5V9zm-3 0H6v2.5h1.5V9zm-3 0H3v2.5h1.5V9z" />
            </svg>
        </div>
        <div class="pipeline-node bg-green-500 text-white" data-tooltip="Kubernetes Orchestration">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
            </svg>
        </div>
        <div class="pipeline-node bg-purple-500 text-white" data-tooltip="Security Scanning">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
            </svg>
        </div>
        <div class="pipeline-node bg-yellow-500 text-white" data-tooltip="Monitoring & Deployment">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z" />
            </svg>
        </div>
    </div>

    <!-- Tooltip -->
    <div id="tooltip" class="tooltip"></div>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center tech-grid overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-1 h-1 bg-cyan-400 rounded-full animate-ping"></div>
            <div class="absolute bottom-32 left-1/4 w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></div>
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <!-- Tech Icons -->
            <div class="flex justify-center space-x-8 mb-8 opacity-60">
                <svg class="w-8 h-8 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                </svg>
                <svg class="w-8 h-8 text-cyan-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
                </svg>
                <svg class="w-8 h-8 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z" />
                </svg>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                <span class="text-blue-400">TRỞ THÀNH KỸ SƯ</span><br>
                <span
                    class="bg-gradient-to-r from-blue-400 via-cyan-400 to-green-400 bg-clip-text text-transparent">DEVSECOPS</span><br>
                <span class="text-2xl md:text-4xl font-medium">TẤM HỘ CHIẾU QUYỀN LỰC CHINH PHỤC<br>MỌI 'ÔNG LỚN' CÔNG
                    NGHỆ</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-4xl mx-auto leading-relaxed">
                Lộ trình <span class="text-blue-400 font-semibold">3 tháng thực chiến</span> trên hệ thống thật,
                dẫn dắt bởi chuyên gia <span class="text-cyan-400 font-semibold">7+ năm kinh nghiệm</span> &
                <span class="text-green-400 font-semibold">100% cam kết giới thiệu việc làm</span>
            </p>

            <button onclick="openModal()"
                class="scan-line bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 text-white font-bold py-4 px-8 rounded-lg text-xl transition-all duration-300 glow">
                NHẬN TƯ VẤN LỘ TRÌNH 1-1
            </button>

            <!-- Pipeline Animation -->
            <div class="mt-12 flex justify-center">
                <div class="pipeline-flow h-1 w-64 rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Pain Points Section -->
    <section class="py-20 bg-slate-800/50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="text-red-400">[ERROR]</span> SỰ NGHIỆP CỦA BẠN ĐANG
                <span class="text-red-400">'TẮC NGHẼN'?</span>
            </h2>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div
                    class="bg-slate-800 p-8 rounded-lg border border-red-500/30 hover:border-red-500/60 transition-all duration-300">
                    <div class="text-red-400 text-2xl font-mono mb-4">[BUG #001]</div>
                    <p class="text-lg">Bạn là <span class="text-blue-400 font-semibold">Dev</span> nhưng <span
                            class="text-red-400">"sợ"</span> hạ tầng, deploy thủ công?</p>
                </div>

                <div
                    class="bg-slate-800 p-8 rounded-lg border border-red-500/30 hover:border-red-500/60 transition-all duration-300">
                    <div class="text-red-400 text-2xl font-mono mb-4">[BUG #002]</div>
                    <p class="text-lg">Bạn là <span class="text-cyan-400 font-semibold">Ops</span> nhưng <span
                            class="text-red-400">"mù mờ"</span> về code và security?</p>
                </div>

                <div
                    class="bg-slate-800 p-8 rounded-lg border border-red-500/30 hover:border-red-500/60 transition-all duration-300">
                    <div class="text-red-400 text-2xl font-mono mb-4">[BUG #003]</div>
                    <p class="text-lg">Cảm thấy sự nghiệp chững lại trong khi thị trường đang <span
                            class="text-green-400">"khát"</span> DevSecOps với mức lương <span
                            class="text-yellow-400 font-semibold">ngàn đô?</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Career Path -->
    <section class="py-20 bg-slate-800/30">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="text-blue-400">LỘ TRÌNH SỰ NGHIỆP</span> DEVSECOPS TƯƠNG TÁC
            </h2>

            <div class="max-w-6xl mx-auto">
                <div class="flex flex-wrap justify-center items-center gap-8 mb-12">
                    <div class="career-step cursor-pointer p-6 bg-slate-800 rounded-lg border border-gray-600 hover:border-blue-400 transition-all duration-300"
                        onclick="showCareerInfo('junior')">
                        <div class="text-center">
                            <div class="text-2xl mb-2">👨‍💻</div>
                            <h3 class="text-lg font-bold">Junior Dev</h3>
                            <p class="text-sm text-gray-400">8-15 triệu</p>
                        </div>
                    </div>

                    <div class="text-blue-400 text-2xl">→</div>

                    <div class="career-step cursor-pointer p-6 bg-slate-800 rounded-lg border border-gray-600 hover:border-blue-400 transition-all duration-300"
                        onclick="showCareerInfo('senior')">
                        <div class="text-center">
                            <div class="text-2xl mb-2">🚀</div>
                            <h3 class="text-lg font-bold">Senior Dev</h3>
                            <p class="text-sm text-gray-400">18-25 triệu</p>
                        </div>
                    </div>

                    <div class="text-blue-400 text-2xl">→</div>

                    <div class="career-step cursor-pointer p-6 bg-slate-800 rounded-lg border border-green-400 hover:border-green-500 transition-all duration-300 glow"
                        onclick="showCareerInfo('devsecops')">
                        <div class="text-center">
                            <div class="text-2xl mb-2">🛡️</div>
                            <h3 class="text-lg font-bold text-green-400">DevSecOps Engineer</h3>
                            <p class="text-sm text-green-300">25-40 triệu</p>
                        </div>
                    </div>

                    <div class="text-blue-400 text-2xl">→</div>

                    <div class="career-step cursor-pointer p-6 bg-slate-800 rounded-lg border border-gray-600 hover:border-blue-400 transition-all duration-300"
                        onclick="showCareerInfo('architect')">
                        <div class="text-center">
                            <div class="text-2xl mb-2">🏗️</div>
                            <h3 class="text-lg font-bold">Cloud Architect</h3>
                            <p class="text-sm text-gray-400">40-60 triệu</p>
                        </div>
                    </div>
                </div>

                <div id="careerInfo" class="bg-slate-800 p-8 rounded-lg border border-blue-400/30 min-h-[200px]">
                    <div class="text-center text-gray-400">
                        <p class="text-lg">Click vào các vai trò để xem chi tiết kỹ năng và mức lương</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mini Lab Challenge -->
    <section class="py-20 bg-gradient-to-r from-slate-900 to-slate-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-8">
                <span class="text-green-400">MINI-LAB CHALLENGE</span>
            </h2>
            <p class="text-xl text-center text-gray-300 mb-12">Trải nghiệm cảm giác "thực chiến" ngay bây giờ!</p>

            <div class="max-w-4xl mx-auto">
                <div class="bg-black p-6 rounded-lg font-mono text-green-400 mb-6">
                    <div class="flex items-center mb-4">
                        <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                        <span class="ml-4 text-gray-400">Terminal - DevSecOps Lab</span>
                    </div>
                    <div id="terminal-content">
                        <p>$ # Nhiệm vụ: Deploy một ứng dụng Hello World bằng Docker</p>
                        <p>$ # Gõ lệnh: docker run -d -p 8080:80 nginx:alpine</p>
                        <p class="flex items-center">
                            $ <input type="text" id="terminal-input"
                                class="bg-transparent border-none outline-none text-green-400 ml-2 flex-1"
                                placeholder="Nhập lệnh của bạn...">
                        </p>
                    </div>
                </div>

                <div id="challenge-result" class="hidden bg-green-900/30 border border-green-400 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <svg class="w-8 h-8 text-green-400 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-2xl font-bold text-green-400">Chúc mừng! Bạn đã hoàn thành thử thách!</h3>
                    </div>
                    <p class="text-lg mb-4">🎉 Ứng dụng đã được deploy thành công trên port 8080!</p>
                    <p class="text-gray-300 mb-4">Bạn vừa trải nghiệm một phần nhỏ của quy trình DevSecOps. Trong khóa
                        học, bạn sẽ học cách tự động hóa toàn bộ quy trình này!</p>
                    <button onclick="claimReward()"
                        class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg">
                        🏆 Nhận Mã Giảm Giá 5%
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Expert vs You Comparison -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">
                <span class="text-yellow-400">CHUYÊN GIA 7 NĂM KINH NGHIỆM</span> SẼ LÀM GÌ?
            </h2>

            <div class="max-w-6xl mx-auto">
                <div class="bg-red-900/30 border border-red-400 p-6 rounded-lg mb-8">
                    <h3 class="text-2xl font-bold text-red-400 mb-4">🚨 TÌNH HUỐNG KHẨN CẤP</h3>
                    <p class="text-xl">Hệ thống e-commerce của công ty đang bị tấn công DDoS, website down hoàn toàn.
                        Khách hàng không thể mua hàng, doanh thu đang mất hàng trăm triệu mỗi phút. Bạn làm gì?</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="comparison-tab bg-slate-800 p-8 rounded-lg border border-gray-600 cursor-pointer hover:border-red-400 transition-all duration-300"
                        onclick="showComparison('normal')">
                        <h4 class="text-2xl font-bold text-red-400 mb-4">❌ Cách Tiếp Cận Thông Thường</h4>
                        <div id="normal-approach" class="hidden">
                            <ul class="space-y-3 text-gray-300">
                                <li>• Panic, gọi điện cho team leader</li>
                                <li>• Thủ công restart server</li>
                                <li>• Tìm kiếm trên Google "how to stop DDoS"</li>
                                <li>• Chờ đợi ISP hỗ trợ</li>
                                <li>• Mất 2-4 giờ để khôi phục</li>
                                <li>• Không có backup plan</li>
                            </ul>
                            <div class="mt-4 p-4 bg-red-900/30 rounded">
                                <p class="text-red-300 font-bold">Kết quả: Mất hàng tỷ đồng doanh thu</p>
                            </div>
                        </div>
                        <p class="text-gray-400">Click để xem chi tiết</p>
                    </div>

                    <div class="comparison-tab bg-slate-800 p-8 rounded-lg border border-green-400 cursor-pointer hover:border-green-500 transition-all duration-300 glow"
                        onclick="showComparison('expert')">
                        <h4 class="text-2xl font-bold text-green-400 mb-4">✅ Quy Trình Chuẩn DevSecOps</h4>
                        <div id="expert-approach" class="hidden">
                            <ul class="space-y-3 text-gray-300">
                                <li>• Auto-scaling kicks in (Kubernetes HPA)</li>
                                <li>• CloudFlare DDoS protection activated</li>
                                <li>• Traffic rerouted to backup regions</li>
                                <li>• Monitoring alerts team via Slack</li>
                                <li>• Auto-rollback if needed</li>
                                <li>• Full recovery in under 5 minutes</li>
                            </ul>
                            <div class="mt-4 p-4 bg-green-900/30 rounded">
                                <p class="text-green-300 font-bold">Kết quả: Hệ thống tự phục hồi, zero downtime</p>
                            </div>
                        </div>
                        <p class="text-gray-400">Click để xem chi tiết</p>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <p class="text-2xl text-yellow-400 font-bold mb-4">Đây chính là sức mạnh của DevSecOps!</p>
                    <button onclick="openModal()"
                        class="scan-line bg-gradient-to-r from-yellow-600 to-orange-600 hover:from-yellow-700 hover:to-orange-700 text-white font-bold py-4 px-8 rounded-lg text-xl">
                        HỌC NGAY QUY TRÌNH CHUYÊN GIA
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Modules -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">
                LỘ TRÌNH <span class="text-blue-400">3 THÁNG</span> KIẾN TẠO
            </h2>
            <h3
                class="text-5xl font-bold text-center mb-16 bg-gradient-to-r from-blue-400 via-cyan-400 to-green-400 bg-clip-text text-transparent">
                "PHÁO ĐÀI SỐ"
            </h3>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Module 1 -->
                <div class="module-card bg-slate-800 p-8 rounded-lg">
                    <div class="text-blue-400 text-xl font-bold mb-4">MODULE 1</div>
                    <h4 class="text-2xl font-bold mb-4">Nền Tảng & Tư Duy DevSecOps</h4>
                    <p class="text-gray-300">Hiểu đúng về văn hóa, triết lý và dòng chảy công việc tự động.</p>
                </div>

                <!-- Module 2 -->
                <div class="module-card bg-slate-800 p-8 rounded-lg">
                    <div class="text-cyan-400 text-xl font-bold mb-4">MODULE 2</div>
                    <h4 class="text-2xl font-bold mb-4">Làm Chủ Hạ Tầng Đám Mây</h4>
                    <p class="text-gray-300">Thực chiến trên AWS: EC2, S3, VPC, IAM, RDS... Xây dựng hạ tầng linh hoạt
                        và mở rộng.</p>
                </div>

                <!-- Module 3 -->
                <div class="module-card bg-slate-800 p-8 rounded-lg">
                    <div class="text-green-400 text-xl font-bold mb-4">MODULE 3</div>
                    <h4 class="text-2xl font-bold mb-4">Xây Dựng "Nhà Máy" CI/CD</h4>
                    <p class="text-gray-300">Tự động hóa với Jenkins, GitLab CI. Docker và Kubernetes (K8s).</p>
                </div>

                <!-- Module 4 -->
                <div class="module-card bg-slate-800 p-8 rounded-lg">
                    <div class="text-purple-400 text-xl font-bold mb-4">MODULE 4</div>
                    <h4 class="text-2xl font-bold mb-4">Tích Hợp "Khiên Chắn" Bảo Mật</h4>
                    <p class="text-gray-300">SAST, DAST, bảo mật container, HashiCorp Vault secrets management.</p>
                </div>

                <!-- Module 5 -->
                <div class="module-card bg-slate-800 p-8 rounded-lg">
                    <div class="text-yellow-400 text-xl font-bold mb-4">MODULE 5</div>
                    <h4 class="text-2xl font-bold mb-4">Giám Sát & Vận Hành Thông Minh</h4>
                    <p class="text-gray-300">Prometheus, Grafana, và logging với ELK Stack toàn diện.</p>
                </div>

                <!-- Module 6 -->
                <div class="module-card bg-slate-800 p-8 rounded-lg">
                    <div class="text-red-400 text-xl font-bold mb-4">MODULE 6</div>
                    <h4 class="text-2xl font-bold mb-4">Đồ Án & Bệ Phóng Sự Nghiệp</h4>
                    <p class="text-gray-300">Pipeline DevSecOps hoàn chỉnh + cam kết giới thiệu việc làm.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Guarantee Section -->
    <section class="py-20 bg-gradient-to-r from-yellow-600/20 to-orange-600/20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-8">
                <span class="text-yellow-400">"CAM KẾT VÀNG"</span> TỪ CHÚNG TÔI
            </h2>
            <div class="bg-slate-800 p-8 rounded-lg max-w-4xl mx-auto border border-yellow-400/30">
                <p class="text-2xl mb-4">
                    <span class="text-yellow-400 font-bold">100%</span> giới thiệu việc làm cho học viên hoàn thành tốt
                    khóa học
                </p>
                <p class="text-xl text-gray-300">
                    Những học viên xuất sắc nhất sẽ được mời làm việc trực tiếp tại công ty
                </p>
            </div>
        </div>
    </section>

    <!-- Gifts Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-16">
                GÓI QUÀ TẶNG <span class="text-green-400">"TĂNG TỐC"</span> SỰ NGHIỆP
            </h2>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-slate-800 p-8 rounded-lg border border-green-400/30">
                    <div class="text-green-400 text-xl font-bold mb-4">QUÀ TẶNG 1</div>
                    <h4 class="text-xl font-bold mb-4">Bộ Template Infrastructure as Code</h4>
                    <p class="text-gray-300 mb-4">Terraform/CloudFormation tự động xây dựng hạ tầng</p>
                    <p class="text-green-400 font-bold">Trị giá: 5.000.000Đ</p>
                </div>

                <div class="bg-slate-800 p-8 rounded-lg border border-blue-400/30">
                    <div class="text-blue-400 text-xl font-bold mb-4">QUÀ TẶNG 2</div>
                    <h4 class="text-xl font-bold mb-4">Tài khoản Lab AWS</h4>
                    <p class="text-gray-300 mb-4">Thực hành không giới hạn trong suốt khóa học</p>
                    <p class="text-blue-400 font-bold">Miễn phí hoàn toàn</p>
                </div>

                <div class="bg-slate-800 p-8 rounded-lg border border-purple-400/30">
                    <div class="text-purple-400 text-xl font-bold mb-4">QUÀ TẶNG 3</div>
                    <h4 class="text-xl font-bold mb-4">Bộ CV & Profile LinkedIn</h4>
                    <p class="text-gray-300 mb-4">Chuẩn Kỹ sư DevSecOps nổi bật trước nhà tuyển dụng</p>
                    <p class="text-purple-400 font-bold">Độc quyền</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 bg-slate-800/50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-8">KHOẢN ĐẦU TƯ CHO TƯƠNG LAI</h2>

            <div class="bg-slate-800 p-12 rounded-lg max-w-2xl mx-auto border border-blue-400/30">
                <div class="text-gray-400 text-2xl line-through mb-4">9.000.000 VNĐ</div>
                <div class="text-5xl font-bold text-green-400 mb-6">6.700.000 VNĐ</div>
                <p class="text-xl text-gray-300 mb-8">
                    "Một khoản đầu tư nhỏ cho một sự nghiệp với mức lương khởi điểm từ
                    <span class="text-yellow-400 font-bold">25-30 triệu đồng</span>"
                </p>

                <button onclick="openModal()"
                    class="scan-line bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white font-bold py-4 px-12 rounded-lg text-xl transition-all duration-300 glow">
                    ĐĂNG KÝ NGAY
                </button>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="consultModal" class="modal">
        <div class="bg-slate-800 p-8 rounded-lg max-w-md w-full mx-4 border border-blue-400/30">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-blue-400">Đăng Ký Nhận Tư Vấn Lộ Trình DevSecOps 1-1</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-white text-2xl">&times;</button>
            </div>

            <form id="consultForm"
                action="{{ route('course-register', $landingPage->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-bold mb-2">Họ và Tên *</label>
                    <input type="text" required name="name"
                        class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-bold mb-2">Số Điện Thoại *</label>
                    <input type="tel" required name="phone"
                        class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-300 text-sm font-bold mb-2">Email *</label>
                    <input type="email" required name="email"
                        class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-400">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-300 text-sm font-bold mb-2">Kinh nghiệm hiện tại của bạn?</label>
                    <select name="more_information"
                        class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-400">
                        <option>Sinh viên</option>
                        <option>Junior Dev</option>
                        <option>SysAdmin</option>
                        <option>Khác</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full scan-line bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 text-white font-bold py-3 px-6 rounded-lg transition-all duration-300">
                    GỬI ĐĂNG KÝ CỦA TÔI
                </button>
            </form>
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
        function openModal() {
            document.getElementById('consultModal').classList.add('show');
        }

        function closeModal() {
            document.getElementById('consultModal').classList.remove('show');
        }

        function submitForm(event) {
            event.preventDefault();
            alert(
                'Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn trong vòng 24h để tư vấn lộ trình DevSecOps phù hợp nhất.');
            closeModal();
        }

        // Close modal when clicking outside
        document.getElementById('consultModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeModal();
            }
        });

        // Tooltip functionality
        document.querySelectorAll('[data-tooltip]').forEach(element => {
            element.addEventListener('mouseenter', function(e) {
                const tooltip = document.getElementById('tooltip');
                const tooltipText = this.getAttribute('data-tooltip');
                tooltip.textContent = tooltipText;
                tooltip.classList.add('show');

                const rect = this.getBoundingClientRect();
                tooltip.style.left = (rect.left - 100) + 'px';
                tooltip.style.top = (rect.top - 50) + 'px';
            });

            element.addEventListener('mouseleave', function() {
                document.getElementById('tooltip').classList.remove('show');
            });
        });

        // Career path functionality
        function showCareerInfo(role) {
            const careerInfo = document.getElementById('careerInfo');
            const roles = {
                junior: {
                    title: 'Junior Developer',
                    salary: '8-15 triệu VNĐ',
                    skills: ['HTML/CSS', 'JavaScript cơ bản', 'Git', 'Debugging'],
                    missing: ['DevOps', 'Cloud', 'Security', 'CI/CD', 'Monitoring']
                },
                senior: {
                    title: 'Senior Developer',
                    salary: '18-25 triệu VNĐ',
                    skills: ['Advanced Programming', 'System Design', 'Code Review', 'Mentoring'],
                    missing: ['Infrastructure', 'Security', 'Automation', 'Cloud Architecture']
                },
                devsecops: {
                    title: 'DevSecOps Engineer',
                    salary: '25-40 triệu VNĐ',
                    skills: ['CI/CD', 'Docker/K8s', 'AWS/Cloud', 'Security', 'Monitoring', 'IaC'],
                    missing: []
                },
                architect: {
                    title: 'Cloud Architect',
                    salary: '40-60 triệu VNĐ',
                    skills: ['System Architecture', 'Multi-cloud', 'Enterprise Security', 'Cost Optimization'],
                    missing: []
                }
            };

            const roleData = roles[role];
            careerInfo.innerHTML = `
                <h3 class="text-3xl font-bold text-blue-400 mb-4">${roleData.title}</h3>
                <p class="text-2xl text-green-400 font-bold mb-6">Mức lương: ${roleData.salary}</p>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-xl font-bold text-green-400 mb-4">✅ Kỹ năng có sẵn:</h4>
                        <ul class="space-y-2">
                            ${roleData.skills.map(skill => `<li class="text-green-300">• ${skill}</li>`).join('')}
                        </ul>
                    </div>
                    ${roleData.missing.length > 0 ? `
                        <div>
                            <h4 class="text-xl font-bold text-red-400 mb-4">❌ Kỹ năng cần bổ sung:</h4>
                            <ul class="space-y-2">
                                ${roleData.missing.map(skill => `<li class="text-red-300">• ${skill}</li>`).join('')}
                            </ul>
                        </div>
                        ` : '<div><h4 class="text-xl font-bold text-yellow-400">🎯 Bạn đã đạt được mục tiêu!</h4></div>'}
                </div>
                ${role === 'devsecops' ? '<p class="text-center text-yellow-400 font-bold text-lg mt-6">🎯 Đây chính là vai trò mà khóa học sẽ giúp bạn đạt được!</p>' : ''}
            `;
        }

        // Terminal challenge
        document.getElementById('terminal-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const command = this.value.trim();
                if (command === 'docker run -d -p 8080:80 nginx:alpine') {
                    document.getElementById('challenge-result').classList.remove('hidden');
                    this.parentElement.innerHTML =
                        '$ docker run -d -p 8080:80 nginx:alpine<br>✅ Container started successfully!<br>✅ Application deployed on http://localhost:8080';
                } else {
                    this.parentElement.innerHTML +=
                        '<br>❌ Lệnh không đúng. Thử lại: docker run -d -p 8080:80 nginx:alpine<br>$ <input type="text" id="terminal-input" class="bg-transparent border-none outline-none text-green-400 ml-2 flex-1" placeholder="Nhập lệnh của bạn...">';
                    document.getElementById('terminal-input').focus();
                }
            }
        });

        function claimReward() {
            alert(
                '🎉 Chúc mừng! Mã giảm giá 5% đã được gửi vào email của bạn: DEVSECOPS5\n\nSử dụng mã này khi đăng ký khóa học để được giảm giá!');
        }

        // Comparison functionality
        function showComparison(type) {
            document.getElementById('normal-approach').classList.add('hidden');
            document.getElementById('expert-approach').classList.add('hidden');

            if (type === 'normal') {
                document.getElementById('normal-approach').classList.remove('hidden');
            } else {
                document.getElementById('expert-approach').classList.remove('hidden');
            }
        }
    </script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'976a312b17016e4b',t:'MTc1NjQ1MTA0My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
