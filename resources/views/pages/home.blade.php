@extends('layout')

@section('content')
    <div id="home" class="page active">
        <div class="p-4 md:p-10">
            <div class="swiper banner-swiper">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <a href="{{ $banner->link }}" target="_blank">
                                <img src="{{ asset('storage/' . $banner->image_path) }}" alt="Banner Image">
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <!-- Hero Section -->

        <section id="course" class="py-20 px-6">
    <h1 class="text-4xl leading-normal md:text-6xl md:leading-normal font-bold text-center gradient-text mb-16 fade-in visible">
        MMO 5A – 5 Kỹ Năng – 5 Bước Thành Công
    </h1>
    <div class="container mx-auto">
        <h2 class="text-4xl leading-normal md:text-6xl md:leading-normal font-bold text-center gradient-text mb-16 fade-in visible">
            5 Trụ Cột Thành Công
        </h2>

        <!-- Mobile Zigzag Layout -->
        <div class="block md:hidden space-y-6">
            <div class="flex justify-between">
                <div class="text-center">
                    <div class="w-20 m-auto h-20 mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">📢</div>
                    <h3 class="text-xl font-bold text-black">ADS</h3>
                    <p class="text-sm text-gray-800">Quảng cáo hiệu quả</p>
                </div>
                <div class="text-center">
                    <div class="w-20 m-auto h-20 mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">🤝</div>
                    <h3 class="text-xl font-bold text-black">AFFILIATE</h3>
                    <p class="text-sm text-gray-800">Kiếm tiền thụ động</p>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="text-center">
                    <div class="w-20 m-auto h-20 mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">⚙️</div>
                    <h3 class="text-xl font-bold text-black">AUTOMATION</h3>
                    <p class="text-sm text-gray-800">Tự động hóa</p>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="text-center">
                    <div class="w-20 m-auto h-20 mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">🤖</div>
                    <h3 class="text-xl font-bold text-black">AI</h3>
                    <p class="text-sm text-gray-800">Sức mạnh AI</p>
                </div>
                <div class="text-center">
                    <div class="w-20 m-auto h-20 mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">📱</div>
                    <h3 class="text-xl font-bold text-black">APPLICATION</h3>
                    <p class="text-sm text-gray-800">Ứng dụng thực tế</p>
                </div>
            </div>
        </div>

        <!-- Desktop Grid Layout -->
        <div class="hidden md:grid grid-cols-5 gap-8 text-black">
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">📢</div>
                <h3 class="text-xl font-bold text-black">ADS</h3>
                <p class="text-sm text-gray-800">Quảng cáo hiệu quả</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">🤝</div>
                <h3 class="text-xl font-bold text-black">AFFILIATE</h3>
                <p class="text-sm text-gray-800">Kiếm tiền thụ động</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">⚙️</div>
                <h3 class="text-xl font-bold text-black">AUTOMATION</h3>
                <p class="text-sm text-gray-800">Tự động hóa</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">🤖</div>
                <h3 class="text-xl font-bold text-black">AI</h3>
                <p class="text-sm text-gray-800">Sức mạnh AI</p>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-neon-cyan to-neon-magenta rounded-full flex items-center justify-center text-3xl">📱</div>
                <h3 class="text-xl font-bold text-black">APPLICATION</h3>
                <p class="text-sm text-gray-800">Ứng dụng thực tế</p>
            </div>
        </div>
    </div>
</section>



        <section class="container mx-auto flex flex-col items-center justify-center px-4 py-16">
            <div class="mx-auto text-center w-full">
                <p class="text-xl text-gray-800 mb-12 mx-auto text-start">
                    Chương trình đào tạo trực tuyến
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

                    @forelse ($landingPages as $it)
                        <a href="{{route('landing-page', $it->slug)}}"
                            class="bg-gray-100 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow cursor-pointer video-card">
                            <div class="relative">
                                <img src="{{asset('storage/' . $it->thambnail)}}"
                                    alt="{{$it->title}}" class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg" />
                            </div>

                            <div class="p-3">
                                <div class="flex items-start space-x-3">
                                    <div class="flex-1 min-w-0">
                                        <h3 class="font-semibold text-sm line-clamp-2 mb-1 leading-tight text-start">
                                            {{$it->title}}
                                        </h3>

                                        {{-- <div class="flex items-center text-xs text-gray-500 space-x-2">
                                            <span>Lượt xem: {{number_format($it->views)}}</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </a>

                    @empty
                        <p class="text-center text-black">Không có chương trình đào tạo nào</p>
                    @endforelse

                </div>
            </div>

            <!-- Quick Quiz -->
            <div class="mt-16 max-w-2xl mx-auto text-center">
                <h3 class="text-2xl font-bold text-black mb-6">🤔 Không chắc lộ trình nào phù hợp?</h3>
                <button onclick="startQuiz()"
                    class="bg-gradient-to-r from-pink-500 to-violet-500 text-white px-8 py-4 rounded-xl font-semibold hover:scale-105 transition-transform">
                    Làm Quiz 2 Phút ⚡
                </button>
            </div>
        </section>

        <!-- Features Section -->
        {{-- <section class="py-20 px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center text-black mb-16">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">
                        Khung Chương Trình MMO 5A
                    </span>
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-900 bg-opacity-50 p-6 rounded-xl border border-gray-700 tilt-card">
                        <div class="text-4xl mb-4">🎯</div>
                        <h3 class="text-xl font-bold text-black mb-3">Analyze - Phân Tích</h3>
                        <p class="text-gray-800">Nghiên cứu thị trường, đối thủ và cơ hội kinh doanh</p>
                    </div>
                    <div class="bg-gray-900 bg-opacity-50 p-6 rounded-xl border border-gray-700 tilt-card">
                        <div class="text-4xl mb-4">🏗️</div>
                        <h3 class="text-xl font-bold text-black mb-3">Architect - Kiến Trúc</h3>
                        <p class="text-gray-800">Thiết kế hệ thống và quy trình làm việc hiệu quả</p>
                    </div>
                    <div class="bg-gray-900 bg-opacity-50 p-6 rounded-xl border border-gray-700 tilt-card">
                        <div class="text-4xl mb-4">🚀</div>
                        <h3 class="text-xl font-bold text-black mb-3">Automate - Tự Động</h3>
                        <p class="text-gray-800">Xây dựng hệ thống tự động tạo thu nhập thụ động</p>
                    </div>
                </div>
            </div>
        </section> --}}
    </div>

    <div id="quizModal"
        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-50 hidden items-center justify-center">
        <div class="bg-white p-8 rounded-2xl max-w-2xl mx-4 border border-gray-300">
            <div id="quizContent">
                <h3 class="text-2xl font-bold text-black mb-6 text-center">🎯 Tìm Lộ Trình Phù Hợp</h3>
                <div id="quizQuestion" class="mb-6">
                    <p class="text-lg text-gray-800 mb-4">Câu hỏi 1/3: Kinh nghiệm lập trình của bạn như thế nào?</p>
                    <div class="space-y-3">
                        <div class="quiz-option border border-gray-400 p-4 rounded-lg" data-value="nontech">
                            <div class="font-semibold text-black">Hoàn toàn mới, chưa từng code</div>
                            <div class="text-sm text-gray-600">Tôi muốn bắt đầu từ con số 0</div>
                        </div>
                        <div class="quiz-option border border-gray-400 p-4 rounded-lg" data-value="tech">
                            <div class="font-semibold text-black">Có kiến thức cơ bản về lập trình</div>
                            <div class="text-sm text-gray-600">Tôi biết HTML/CSS hoặc một ngôn ngữ nào đó</div>
                        </div>
                        <div class="quiz-option border border-gray-400 p-4 rounded-lg" data-value="tech">
                            <div class="font-semibold text-black">Đã có kinh nghiệm lập trình</div>
                            <div class="text-sm text-gray-600">Tôi muốn nâng cao kỹ năng và học công nghệ mới</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between">
                    <button onclick="closeQuiz()"
                        class="px-6 py-2 border border-gray-400 text-gray-800 rounded-lg hover:bg-gray-100">
                        Đóng
                    </button>
                    <button id="nextBtn" onclick="nextQuestion()"
                        class="px-6 py-2 bg-gradient-to-r from-cyan-400 to-purple-500 text-white rounded-lg font-semibold opacity-50 cursor-not-allowed"
                        disabled>
                        Tiếp theo
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700&display=swap');

        /* Color Variables (Tailwind Config) */
        :root {
            --tech-dark: #0A192F;
            --neon-cyan: #00F6FF;
            --neon-magenta: #C039FF;
            --diamond-gold: #FFD700;
            --text-dark: #1A1A1A;
        }

        /* Font Classes */
        .orbitron {
            font-family: 'Orbitron', monospace;
        }

        /* Gradient Text Animation */
        .gradient-text {
            background: linear-gradient(45deg, #00F6FF, #C039FF, #FFD700);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease-in-out infinite;
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

        /* Floating Icons Animation */
        .floating-icon {
            animation: floatIcon 3s ease-in-out infinite;
            transition: all 0.3s ease;
        }

        .floating-icon:hover {
            transform: scale(1.2) rotateY(180deg);
            filter: drop-shadow(0 0 20px #00F6FF);
        }

        @keyframes floatIcon {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Scroll Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .gradient-text {
                font-size: 2rem;
            }
        }
    </style>
@endsection