<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Unicorn Launchpad - Chương Trình Ươm Mầm Khởi Nghiệp Công Nghệ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .gradient-text {
            background: linear-gradient(135deg, #2563EB 0%, #1D4ED8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-bg {
            background: linear-gradient(135deg, #F8FAFC 0%, #F1F5F9 100%);
        }

        /* Animation Classes */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fade-in-up.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .stagger-1 {
            transition-delay: 0.1s;
        }

        .stagger-2 {
            transition-delay: 0.2s;
        }

        .stagger-3 {
            transition-delay: 0.3s;
        }

        /* Counter Styles */
        .counter {
            font-weight: 800;
            font-size: 3rem;
            color: #2563EB;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .counter.animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* Step Card Micro-interactions */
        .step-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .step-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #2563EB, #1D4ED8);
            transition: all 0.4s ease;
            transform: translateX(-50%);
        }

        .step-card:hover {
            border-color: #2563EB;
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(37, 99, 235, 0.25);
        }

        .step-card:hover::before {
            width: 80%;
        }

        .step-card:hover .step-icon {
            transform: rotate(15deg) scale(1.1);
        }

        .step-icon {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* CTA Button Effects */
        .cta-button {
            background: linear-gradient(135deg, #2563EB 0%, #1D4ED8 100%);
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.6s ease;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.4);
        }

        .cta-button.ripple::before {
            width: 300px;
            height: 300px;
        }

        /* Modal Styles */
        .modal-overlay {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(8px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            transform: translateY(-50px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .modal-overlay.show .modal-content {
            transform: translateY(0);
            opacity: 1;
        }

        /* File Upload Styles */
        .file-upload-area {
            border: 2px dashed #CBD5E1;
            transition: all 0.3s ease;
            position: relative;
        }

        .file-upload-area.dragover {
            border-color: #2563EB;
            background: rgba(37, 99, 235, 0.05);
            box-shadow: 0 0 20px rgba(37, 99, 235, 0.2);
        }

        .progress-bar {
            width: 0%;
            transition: width 0.3s ease;
            background: linear-gradient(90deg, #2563EB, #1D4ED8);
        }

        /* Floating Animation */
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

        /* Video Container */
        .video-container {
            position: relative;
            background: linear-gradient(135deg, #1E293B 0%, #334155 100%);
            border-radius: 16px;
            overflow: hidden;
        }

        .video-placeholder {
            aspect-ratio: 16/9;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1E293B 0%, #334155 100%);
            color: white;
            font-size: 4rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-placeholder:hover {
            transform: scale(1.02);
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

<body class="bg-white text-gray-900">
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
    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-sm border-b border-gray-100 fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold gradient-text">🦄 The Unicorn Launchpad</div>
                </div>
                <div class="hidden md:block">
                    <button class="cta-button text-white px-6 py-2 rounded-lg font-semibold" onclick="openModal()">
                        ĐẶT LỊCH TƯ VẤN 1-1
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg pt-24 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="floating mb-8 fade-in-up">
                    <div class="text-6xl mb-4">🚀</div>
                </div>
                <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight fade-in-up stagger-1">
                    BẠN CÓ MỘT Ý TƯỞNG CÔNG NGHỆ
                    <span class="gradient-text">TRIỆU ĐÔ?</span>
                </h1>
                <h2 class="text-2xl md:text-3xl font-bold mb-8 text-gray-700 fade-in-up stagger-2">
                    CHÚNG TÔI CÓ BỆ PHÓNG ĐỂ BIẾN NÓ THÀNH HIỆN THỰC.
                </h2>
                <p
                    class="text-xl md:text-2xl mb-12 text-gray-600 max-w-4xl mx-auto leading-relaxed fade-in-up stagger-3">
                    <strong>Chương trình Ươm Mầm Khởi Nghiệp Công Nghệ:</strong> Nơi chúng tôi rót vốn, cung cấp hệ sinh
                    thái triệu traffic và đồng hành cùng bạn xây dựng startup kỳ lân tiếp theo của Việt Nam.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in-up stagger-3">
                    <button class="cta-button text-white px-8 py-4 rounded-xl font-bold text-lg" onclick="openModal()">
                        🎯 TRÌNH BÀY Ý TƯỞNG CỦA BẠN
                    </button>
                    <button
                        class="bg-white border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-xl font-bold text-lg hover:bg-blue-50 transition-all"
                        onclick="openModal()">
                        📞 ĐẶT LỊCH TƯ VẤN 1-1
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Ecosystem Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-black mb-6">
                    HỆ SINH THÁI CỦA CHÚNG TÔI -
                    <span class="gradient-text">BỆ PHÓNG CỦA BẠN</span>
                </h2>
                <p class="text-2xl font-bold text-gray-700 mb-4">Bạn Không Cần Bắt Đầu Từ Con Số 0.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12" id="stats-container">
                <div class="text-center p-8 bg-gray-50 rounded-2xl fade-in-up stagger-1">
                    <div class="counter mb-4" id="traffic">3.7</div>
                    <div class="text-xl font-bold text-gray-600">TRIỆU+</div>
                    <div class="text-lg text-gray-500">Lượt truy cập mỗi tháng</div>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-2xl fade-in-up stagger-2">
                    <div class="counter mb-4" id="views">120</div>
                    <div class="text-xl font-bold text-gray-600">TRIỆU+</div>
                    <div class="text-lg text-gray-500">Views trên các nền tảng social</div>
                </div>
                <div class="text-center p-8 bg-gray-50 rounded-2xl fade-in-up stagger-3">
                    <div class="counter mb-4" id="experience">15</div>
                    <div class="text-xl font-bold text-gray-600">NĂM+</div>
                    <div class="text-lg text-gray-500">Kinh nghiệm thực chiến của đội ngũ cố vấn</div>
                </div>
            </div>

            <div class="text-center max-w-4xl mx-auto fade-in-up">
                <p class="text-xl leading-relaxed text-gray-700">
                    <strong>Ngay từ ngày đầu tiên</strong>, ý tưởng của bạn sẽ được đặt lên một hệ sinh thái đã có sẵn
                    người dùng, sẵn sàng bùng nổ. Chúng tôi trao cho bạn thứ mà không tiền bạc nào mua được: <span
                        class="gradient-text font-bold">sự khởi đầu trên vai người khổng lồ.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Success Story Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-black mb-6">
                    HÀNH TRÌNH TỪ ĐỒ ÁN TỐT NGHIỆP
                    <span class="gradient-text">ĐẾN STARTUP THỰC TẾ</span>
                </h2>
                <p class="text-2xl font-bold text-gray-700">MỖI KỲ LÂN ĐỀU BẮT ĐẦU TỪ MỘT Ý TƯỞNG.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in-up stagger-1">
                    <div class="video-container">
                        <div class="video-placeholder" onclick="playVideo()">
                            <div class="text-center">
                                <div class="text-6xl mb-4">▶️</div>
                                <div class="text-xl font-semibold">Xem Câu Chuyện Thành Công</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-2">
                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg leading-relaxed text-gray-700 mb-6">
                            Câu chuyện bắt đầu từ một đêm thức trắng trong ký túc xá... một ý tưởng lóe lên từ những
                            trang đồ án tốt nghiệp của một sinh viên IT tài năng nhưng đầy hoài nghi. Giống như bạn, cậu
                            ấy có kỹ năng, nhưng thiếu một bệ phóng, một người dẫn đường. Và rồi, cậu ấy tìm thấy chúng
                            tôi.
                        </p>

                        <p class="text-lg leading-relaxed text-gray-700 mb-6">
                            Video này sẽ đưa bạn theo chân hành trình đó: từ buổi tư vấn 1-1 đầu tiên đầy lo lắng, những
                            lần 'đập đi xây lại' mô hình kinh doanh cùng đội ngũ cố vấn, cho đến ngày nhận được dòng vốn
                            đầu tư đầu tiên, và khoảnh khắc sản phẩm chính thức 'chào sân' trên hệ sinh thái triệu
                            traffic của chúng tôi, có được những người dùng đầu tiên.
                        </p>

                        <p class="text-lg leading-relaxed text-gray-700 font-semibold">
                            Đây không phải là một câu chuyện cổ tích. Đây là một minh chứng cho thấy: một ý tưởng đúng
                            đắn, đặt vào một hệ sinh thái đúng đắn, sẽ tạo ra một kỳ lân. <span class="gradient-text">Ý
                                tưởng tiếp theo có thể là của bạn.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-black mb-6">
                    LỘ TRÌNH BIẾN Ý TƯỞNG THÀNH
                    <span class="gradient-text">ĐẾ CHẾ</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="step-card bg-white p-8 rounded-2xl text-center shadow-lg fade-in-up stagger-1">
                    <div class="step-icon text-4xl mb-4">💡</div>
                    <div class="text-2xl font-bold gradient-text mb-4">Bước 1</div>
                    <h3 class="text-xl font-bold mb-4">Pitching</h3>
                    <p class="text-gray-600">Đặt lịch tư vấn riêng, trình bày ý tưởng đột phá của bạn.</p>
                </div>

                <div class="step-card bg-white p-8 rounded-2xl text-center shadow-lg fade-in-up stagger-2">
                    <div class="step-icon text-4xl mb-4">🔬</div>
                    <div class="text-2xl font-bold gradient-text mb-4">Bước 2</div>
                    <h3 class="text-xl font-bold mb-4">Incubation</h3>
                    <p class="text-gray-600">Các chuyên gia sẽ cùng bạn "mài giũa" ý tưởng và xây dựng kế hoạch chi
                        tiết.</p>
                </div>

                <div class="step-card bg-white p-8 rounded-2xl text-center shadow-lg fade-in-up stagger-3">
                    <div class="step-icon text-4xl mb-4">🚀</div>
                    <div class="text-2xl font-bold gradient-text mb-4">Bước 3</div>
                    <h3 class="text-xl font-bold mb-4">Funding & Acceleration</h3>
                    <p class="text-gray-600">Nhận vốn đầu tư, nhân sự và tích hợp vào hệ sinh thái marketing.</p>
                </div>

                <div class="step-card bg-white p-8 rounded-2xl text-center shadow-lg fade-in-up stagger-3">
                    <div class="step-icon text-4xl mb-4">🏆</div>
                    <div class="text-2xl font-bold gradient-text mb-4">Bước 4</div>
                    <h3 class="text-xl font-bold mb-4">Launching</h3>
                    <p class="text-gray-600">Biến ý tưởng thành sản phẩm thương mại và chinh phục thị trường.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Investment Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-black mb-6">
                    MỘT CƠ HỘI VÔ GIÁ.
                    <span class="gradient-text">MỘT KHOẢN ĐẦU TƯ BẰNG 0</span>
                </h2>
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-2xl font-bold mb-6 text-gray-700">Chúng Tôi Không Bán Khóa Học. Chúng Tôi Tìm Kiếm
                        Đối Tác.</h3>
                    <p class="text-xl leading-relaxed text-gray-600">
                        Chương trình này hoàn toàn <span class="text-green-600 font-bold text-2xl">MIỄN PHÍ</span>.
                        Chúng tôi không tìm kiếm học viên, chúng tôi đang tìm kiếm những nhà sáng lập thế hệ tiếp theo
                        để cùng đồng hành. <strong>Lợi nhuận của chúng tôi đến từ thành công của bạn.</strong>
                    </p>
                </div>
            </div>

            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-12 rounded-3xl text-center fade-in-up">
                <div class="text-6xl mb-6">🤝</div>
                <h3 class="text-3xl font-bold mb-4">Đầu Tư Dựa Trên Thành Công</h3>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Chúng tôi chỉ thành công khi bạn thành công. Đó là cam kết và là động lực để chúng tôi đồng hành
                    cùng bạn đến cùng.
                </p>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center fade-in-up">
                <div class="mb-8">
                    <div class="flex justify-center space-x-4 mb-8">
                        <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center text-2xl">👨‍💼
                        </div>
                        <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center text-2xl">👩‍💼
                        </div>
                        <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center text-2xl">👨‍💻
                        </div>
                    </div>
                </div>

                <h2 class="text-4xl md:text-5xl font-black mb-8">
                    Tương Lai Của Bạn Bắt Đầu Bằng
                    <span class="text-blue-400">Một Cuộc Trò Chuyện.</span>
                </h2>

                <p class="text-xl mb-12 text-gray-300 max-w-3xl mx-auto">
                    Đừng để ý tưởng triệu đô của bạn chỉ là một giấc mơ. Hãy để chúng tôi giúp bạn biến nó thành hiện
                    thực.
                </p>

                <button class="cta-button text-white px-12 py-6 rounded-xl font-bold text-xl mb-8"
                    onclick="openModal()">
                    🚀 ĐẶT LỊCH TƯ VẤN 1-1 NGAY
                </button>

                <div class="text-sm text-gray-400">
                    ⏰ Chỉ mất 30 phút để thay đổi cả cuộc đời bạn
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="modal" class="modal-overlay fixed inset-0 z-50 flex items-center justify-center p-4">
        <div class="modal-content bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-3xl font-bold gradient-text">🔒 Cổng Nộp Ý Tưởng Bảo Mật</h2>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
                </div>

                <form id="ideaForm" class="space-y-6" action="{{ route('course-register', $landingPage->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Họ và Tên *</label>
                            <input type="text" id="fullName" required name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Số Điện Thoại *</label>
                            <input type="tel" id="phone" required name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                        <input type="email" id="email" required  name="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Trình Bày Ý Tưởng</label>
                        <div class="file-upload-area rounded-lg p-8 text-center cursor-pointer" id="fileUpload">
                            <div class="text-4xl mb-4">📄</div>
                            <p class="text-lg font-semibold text-gray-700 mb-2">Kéo thả file PDF/DOCX trình bày ý tưởng
                                của bạn vào đây</p>
                            <p class="text-sm text-gray-500 mb-4">hoặc bấm để chọn tệp</p>
                            <p class="text-xs text-gray-400">(Tối đa 25MB. Chúng tôi khuyến khích một bản trình bày
                                ngắn gọn, súc tích)</p>
                            <input type="file" id="fileInput" accept=".pdf,.docx,.doc" name="file[]" class="hidden">
                        </div>
                        <div id="fileInfo" class="mt-4 hidden">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <div class="flex items-center justify-between">
                                    <span id="fileName" class="text-sm font-medium text-blue-700"></span>
                                    <button type="button" onclick="removeFile()"
                                        class="text-red-500 hover:text-red-700">&times;</button>
                                </div>
                                <div class="mt-2">
                                    <div class="bg-blue-200 rounded-full h-2">
                                        <div id="progressBar" class="progress-bar h-2 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center text-sm text-gray-600">
                            <span class="text-lg mr-2">🔒</span>
                            Mọi thông tin và ý tưởng của bạn đều được mã hóa và bảo mật tuyệt đối theo thỏa thuận NDA.
                        </div>
                    </div>

                    <button type="submit" id="submitBtn" disabled
                        class="w-full bg-gray-300 text-gray-500 px-8 py-4 rounded-xl font-bold text-lg cursor-not-allowed transition-all">
                        Gửi Trình Bày
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="text-2xl font-bold gradient-text mb-4">🦄 The Unicorn Launchpad</div>
                <p class="text-gray-400 mb-4">Bệ Phóng Kỳ Lân - Nơi Ý Tưởng Trở Thành Đế Chế</p>
                <div class="text-sm text-gray-500">
                    © 2024 The Unicorn Launchpad. Tất cả quyền được bảo lưu.
                </div>
            </div>
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
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe all fade-in-up elements
        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });

        // Counter animation
        function animateCounter(id, target, isDecimal = false) {
            const element = document.getElementById(id);
            const start = 0;
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = start;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = isDecimal ? current.toFixed(1) : Math.floor(current);
            }, 16);
        }

        // Counter observer
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    document.querySelectorAll('.counter').forEach(counter => {
                        counter.classList.add('animate');
                    });

                    setTimeout(() => {
                        animateCounter('traffic', 3.7, true);
                        animateCounter('views', 120);
                        animateCounter('experience', 15);
                    }, 300);

                    counterObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsContainer = document.getElementById('stats-container');
        if (statsContainer) {
            counterObserver.observe(statsContainer);
        }

        // Modal functions
        function openModal() {
            const modal = document.getElementById('modal');
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('modal');
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        }

        // CTA button ripple effect
        document.querySelectorAll('.cta-button').forEach(button => {
            button.addEventListener('click', function(e) {
                this.classList.add('ripple');
                setTimeout(() => {
                    this.classList.remove('ripple');
                }, 600);
            });
        });

        // File upload functionality
        const fileUpload = document.getElementById('fileUpload');
        const fileInput = document.getElementById('fileInput');
        const fileInfo = document.getElementById('fileInfo');
        const fileName = document.getElementById('fileName');
        const progressBar = document.getElementById('progressBar');

        fileUpload.addEventListener('click', () => fileInput.click());

        fileUpload.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileUpload.classList.add('dragover');
        });

        fileUpload.addEventListener('dragleave', () => {
            fileUpload.classList.remove('dragover');
        });

        fileUpload.addEventListener('drop', (e) => {
            e.preventDefault();
            fileUpload.classList.remove('dragover');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                handleFile(files[0]);
            }
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                handleFile(e.target.files[0]);
            }
        });

        function handleFile(file) {
            if (file.size > 25 * 1024 * 1024) {
                alert('File quá lớn! Vui lòng chọn file nhỏ hơn 25MB.');
                return;
            }

            fileName.textContent = file.name;
            fileInfo.classList.remove('hidden');

            // Simulate upload progress
            let progress = 0;
            const interval = setInterval(() => {
                progress += Math.random() * 15;
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(interval);
                }
                progressBar.style.width = progress + '%';
            }, 100);

            checkFormValidity();
        }

        function removeFile() {
            fileInfo.classList.add('hidden');
            fileInput.value = '';
            progressBar.style.width = '0%';
            checkFormValidity();
        }

        // Form validation
        function checkFormValidity() {
            const fullName = document.getElementById('fullName').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const hasFile = !fileInfo.classList.contains('hidden');
            const submitBtn = document.getElementById('submitBtn');

            if (fullName && phone && email && hasFile) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
                submitBtn.classList.add('cta-button', 'text-white');
                submitBtn.textContent = 'Gửi Trình Bày';
            } else {
                submitBtn.disabled = true;
                submitBtn.classList.add('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
                submitBtn.classList.remove('cta-button', 'text-white');
            }
        }

        // Add event listeners for form inputs
        ['fullName', 'phone', 'email'].forEach(id => {
            document.getElementById(id).addEventListener('input', checkFormValidity);
        });


        // Video play function
        function playVideo() {
            alert(
                '🎬 Video demo sẽ được phát tại đây. Đây là một minh chứng cho thấy hành trình từ ý tưởng đến startup thành công!'
                );
        }

        // Close modal when clicking outside
        document.getElementById('modal').addEventListener('click', (e) => {
            if (e.target.id === 'modal') {
                closeModal();
            }
        });

        // Navigation scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-white/98');
            } else {
                nav.classList.remove('bg-white/98');
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
                        "window.__CF$cv$params={r:'976a129b00f2e2f7',t:'MTc1NjQ0OTc5MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
