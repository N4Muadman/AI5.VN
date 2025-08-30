<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Khóa Học MMO 5A - 5 Kỹ Năng Kiếm Tiền Online 2025') | AI5.VN</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="🚀 Mở khóa thu nhập thụ động với MMO 5A! Lộ trình DUY NHẤT dạy 5 kỹ năng: Ads, Affiliate, Automation, AI & Application. Bắt đầu sự nghiệp của bạn!" />
    <meta name="keywords" content="MMO, MMO 5A, kiếm tiền online, khóa học MMO, Affiliate, Automation, AI, Application, Ads" />
    <meta name="author" content="AI5.VN" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="vi" />
    <meta name="revisit-after" content="7 days" />

    <!-- Open Graph for Facebook & Social Media -->
    <meta property="og:title" content="Khóa Học MMO 5A - 5 Kỹ Năng Kiếm Tiền Online 2025 | AI5.VN" />
    <meta property="og:description" content="🚀 Mở khóa thu nhập thụ động với MMO 5A! Lộ trình DUY NHẤT dạy 5 kỹ năng: Ads, Affiliate, Automation, AI & Application. Bắt đầu sự nghiệp của bạn!" />
    <meta property="og:image" content="https://ai5.vn/assets/images/mmo5a-banner.jpg" />
    <meta property="og:url" content="https://ai5.vn/" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Khóa Học MMO 5A - 5 Kỹ Năng Kiếm Tiền Online 2025" />
    <meta name="twitter:description" content="🚀 Mở khóa thu nhập thụ động với MMO 5A! Lộ trình DUY NHẤT dạy 5 kỹ năng: Ads, Affiliate, Automation, AI & Application. Bắt đầu sự nghiệp của bạn!" />
    <meta name="twitter:image" content="https://ai5.vn/assets/images/mmo5a-banner.jpg" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tech-dark': '#0A192F',
                        'neon-cyan': '#00F6FF',
                        'neon-magenta': '#C039FF',
                        'diamond-gold': '#FFD700',
                        'text-light': '#E6F1FF'
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>


<body class="bg-white">
    <!-- Animated Background -->
    <div class="space-bg"></div>
    <div class="stars" id="stars"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white bg-opacity-90 backdrop-blur-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-black">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">AI5</span>.VN
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#" class="nav-link text-gray-800 hover:text-black px-3 py-2"
                            onclick="showPage('home')">Trang Chủ</a>
                        <a href="#" class="nav-link text-gray-800 hover:text-black px-3 py-2"
                            onclick="showPage('nontech')">Non-tech Track</a>
                        <a href="#" class="nav-link text-gray-800 hover:text-black px-3 py-2"
                            onclick="showPage('tech')">Tech Track</a>
                        <a href="#" class="nav-link text-gray-800 hover:text-black px-3 py-2"
                            onclick="showPage('compare')">So Sánh</a>
                        <a href="#" class="nav-link text-gray-800 hover:text-black px-3 py-2"
                            onclick="showPage('mentors')">Mentors</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Home Page -->

    @yield('content')

    <!-- Non-tech Track Page -->
    <div id="nontech" class="page">
        <section class="min-h-screen px-4 pt-24">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <div
                        class="inline-block bg-gradient-to-r from-cyan-400 to-yellow-400 text-black px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        NON-TECH TRACK
                    </div>
                    <h1 class="text-5xl font-bold text-black mb-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-yellow-400">
                            Bắt Đầu Từ Con Số 0
                        </span>
                    </h1>
                    <p class="text-xl text-gray-800 max-w-3xl mx-auto">
                        Học cách kiếm tiền online bằng các công cụ no-code mạnh mẽ. Không cần biết lập trình, chỉ cần
                        sáng tạo và chiến lược đúng đắn.
                    </p>
                </div>

                <!-- Course Modules -->
                <div class="grid md:grid-cols-2 gap-8 mb-16">
                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-cyan-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">🎨</div>
                            <h3 class="text-2xl font-bold text-black">Module 1: No-Code Mastery</h3>
                        </div>
                        <div class="progress-bar mb-4"></div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• Webflow, Bubble, Zapier automation</li>
                            <li>• Tạo landing page chuyển đổi cao</li>
                            <li>• Xây dựng funnel bán hàng tự động</li>
                            <li>• Tích hợp thanh toán và CRM</li>
                        </ul>
                    </div>

                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-yellow-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">📊</div>
                            <h3 class="text-2xl font-bold text-black">Module 2: Digital Marketing</h3>
                        </div>
                        <div class="progress-bar mb-4"></div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• Facebook Ads & Google Ads mastery</li>
                            <li>• Content marketing & SEO</li>
                            <li>• Email marketing automation</li>
                            <li>• Affiliate marketing strategies</li>
                        </ul>
                    </div>

                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-cyan-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">💰</div>
                            <h3 class="text-2xl font-bold text-black">Module 3: Passive Income</h3>
                        </div>
                        <div class="progress-bar mb-4"></div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• Dropshipping & Print-on-demand</li>
                            <li>• Digital product creation</li>
                            <li>• Course & membership sites</li>
                            <li>• Investment & portfolio building</li>
                        </ul>
                    </div>

                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-yellow-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">🤖</div>
                            <h3 class="text-2xl font-bold text-black">Module 4: AI Tools Mastery</h3>
                        </div>
                        <div class="progress-bar mb-4"></div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• ChatGPT for business automation</li>
                            <li>• Midjourney & AI design tools</li>
                            <li>• AI copywriting & content creation</li>
                            <li>• Voice AI & video generation</li>
                        </ul>
                    </div>
                </div>

                <!-- Success Stories -->
                <div class="bg-gradient-to-r from-cyan-900 to-yellow-900 bg-opacity-20 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-black mb-6 text-center">🏆 Thành Tựu Học Viên Non-tech</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cyan-600">$50K+</div>
                            <div class="text-gray-800">Doanh thu trung bình sau 6 tháng</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-yellow-600">95%</div>
                            <div class="text-gray-800">Học viên tạo thu nhập đầu tiên</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cyan-600">24/7</div>
                            <div class="text-gray-800">Hệ thống tự động hoạt động</div>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="text-center mt-12">
                    <button
                        class="bg-gradient-to-r from-cyan-500 to-yellow-500 text-black px-12 py-4 rounded-xl text-xl font-bold hover:scale-105 transition-transform">
                        Đăng Ký Non-tech Track 🚀
                    </button>
                </div>
            </div>
        </section>
    </div>

    <!-- Tech Track Page -->
    <div id="tech" class="page">
        <section class="min-h-screen px-4 pt-24">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <div
                        class="inline-block bg-gradient-to-r from-purple-500 to-cyan-400 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 tech-font">
                        TECH TRACK
                    </div>
                    <h1 class="text-5xl font-bold text-black mb-6 tech-font">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-cyan-400">
                            Nâng Tầm Kỹ Năng Code
                        </span>
                    </h1>
                    <p class="text-xl text-gray-800 max-w-3xl mx-auto">
                        Xây dựng sản phẩm công nghệ đột phá với AI, Blockchain và Full-stack Development. Từ ý tưởng đến
                        triển khai thực tế.
                    </p>
                </div>

                <!-- Tech Modules -->
                <div class="grid md:grid-cols-2 gap-8 mb-16">
                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-purple-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">🤖</div>
                            <h3 class="text-2xl font-bold text-black tech-font">AI Development</h3>
                        </div>
                        <div class="progress-bar-tech mb-4"></div>
                        <div class="code-snippet p-4 rounded mb-4 bg-gray-900">
                            <code class="text-cyan-400 text-sm">
                                import openai<br>
                                model = GPT4("gpt-4-turbo")<br>
                                response = model.generate()
                            </code>
                        </div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• Machine Learning & Deep Learning</li>
                            <li>• OpenAI API & Custom GPT models</li>
                            <li>• Computer Vision & NLP</li>
                            <li>• AI-powered SaaS development</li>
                        </ul>
                    </div>

                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-cyan-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">🌐</div>
                            <h3 class="text-2xl font-bold text-black tech-font">Full-Stack Mastery</h3>
                        </div>
                        <div class="progress-bar-tech mb-4"></div>
                        <div class="code-snippet p-4 rounded mb-4 bg-gray-900">
                            <code class="text-cyan-400 text-sm">
                                const app = express()<br>
                                app.use('/api', routes)<br>
                                app.listen(3000)
                            </code>
                        </div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• React, Next.js, Node.js</li>
                            <li>• Database design & optimization</li>
                            <li>• Cloud deployment (AWS, Vercel)</li>
                            <li>• Microservices architecture</li>
                        </ul>
                    </div>

                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-purple-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">⛓️</div>
                            <h3 class="text-2xl font-bold text-black tech-font">Blockchain & Web3</h3>
                        </div>
                        <div class="progress-bar-tech mb-4"></div>
                        <div class="code-snippet p-4 rounded mb-4 bg-gray-900">
                            <code class="text-cyan-400 text-sm">
                                contract Token {<br>
                                &nbsp;&nbsp;mapping(address => uint) balances;<br>
                                }
                            </code>
                        </div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• Smart Contract development</li>
                            <li>• DeFi protocols & NFT platforms</li>
                            <li>• Web3 integration & MetaMask</li>
                            <li>• Cryptocurrency trading bots</li>
                        </ul>
                    </div>

                    <div class="bg-gray-100 bg-opacity-80 p-8 rounded-xl border border-cyan-500 border-opacity-30">
                        <div class="flex items-center mb-4">
                            <div class="text-3xl mr-4">🚀</div>
                            <h3 class="text-2xl font-bold text-black tech-font">DevOps & Scale</h3>
                        </div>
                        <div class="progress-bar-tech mb-4"></div>
                        <div class="code-snippet p-4 rounded mb-4 bg-gray-900">
                            <code class="text-cyan-400 text-sm">
                                docker build -t app .<br>
                                kubectl apply -f deploy.yaml<br>
                                terraform plan
                            </code>
                        </div>
                        <ul class="text-gray-800 space-y-2">
                            <li>• Docker & Kubernetes</li>
                            <li>• CI/CD pipelines</li>
                            <li>• Infrastructure as Code</li>
                            <li>• Performance optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Tech Success Metrics -->
                <div class="bg-gradient-to-r from-purple-900 to-cyan-900 bg-opacity-20 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-black mb-6 text-center tech-font">⚡ Thành Tựu Học Viên Tech</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600 tech-font">$100K+</div>
                            <div class="text-gray-800">Mức lương trung bình</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cyan-600 tech-font">50+</div>
                            <div class="text-gray-800">Dự án thực tế hoàn thành</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-600 tech-font">98%</div>
                            <div class="text-gray-800">Tỷ lệ có việc làm</div>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="text-center mt-12">
                    <button
                        class="bg-gradient-to-r from-purple-500 to-cyan-400 text-white px-12 py-4 rounded-xl text-xl font-bold hover:scale-105 transition-transform tech-font">
                        Đăng Ký Tech Track ⚡
                    </button>
                </div>
            </div>
        </section>
    </div>

    <!-- Compare Page -->
    <div id="compare" class="page">
        <section class="min-h-screen px-4 pt-24">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-5xl font-bold text-black mb-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">
                            So Sánh Chi Tiết
                        </span>
                    </h1>
                    <p class="text-xl text-gray-800">Tìm lộ trình phù hợp nhất với mục tiêu và kỹ năng của bạn</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Non-tech Column -->
                    <div
                        class="bg-gradient-to-b from-cyan-900 to-yellow-900 bg-opacity-10 p-8 rounded-xl border border-cyan-500 border-opacity-30">
                        <div class="text-center mb-8">
                            <div class="text-4xl mb-4">🧠⚙️</div>
                            <h2 class="text-3xl font-bold text-black mb-2">Non-tech Track</h2>
                            <div
                                class="bg-gradient-to-r from-cyan-400 to-yellow-400 text-black px-4 py-2 rounded-full text-sm font-semibold inline-block">
                                Bắt Đầu Từ Con Số 0
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <h4 class="text-lg font-semibold text-cyan-600 mb-2">🎯 Đối Tượng Phù Hợp</h4>
                                <p class="text-gray-800">Người mới bắt đầu, không có kinh nghiệm lập trình, muốn kiếm
                                    tiền online nhanh chóng</p>
                            </div>

                            <div>
                                <h4 class="text-lg font-semibold text-cyan-600 mb-2">⏱️ Thời Gian Học</h4>
                                <p class="text-gray-800">3-6 tháng để có thu nhập đầu tiên</p>
                            </div>

                            <div>
                                <h4 class="text-lg font-semibold text-cyan-600 mb-2">🛠️ Công Cụ Chính</h4>
                                <ul class="text-gray-800 space-y-1 tech-font">
                                    <li>• React, Node.js, Python</li>
                                    <li>• TensorFlow, PyTorch</li>
                                    <li>• Solidity, Web3.js</li>
                                    <li>• Docker, Kubernetes, AWS</li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="text-lg font-semibold text-purple-600 mb-2">💰 Tiềm Năng Thu Nhập</h4>
                                <p class="text-gray-800">$5K-$20K/tháng từ lương và freelance</p>
                            </div>

                            <div>
                                <h4 class="text-lg font-semibold text-purple-600 mb-2">🚀 Dự Án Cuối Khóa</h4>
                                <p class="text-gray-800">Ứng dụng AI hoặc DeFi platform hoàn chỉnh</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decision Helper -->
                <div class="mt-16 bg-gray-100 bg-opacity-80 p-8 rounded-xl text-center">
                    <h3 class="text-2xl font-bold text-black mb-6">🤔 Vẫn chưa quyết định?</h3>
                    <p class="text-gray-800 mb-6">Làm bài quiz nhanh để nhận gợi ý lộ trình phù hợp</p>
                    <button onclick="startQuiz()"
                        class="bg-gradient-to-r from-pink-500 to-violet-500 text-white px-8 py-4 rounded-xl font-semibold hover:scale-105 transition-transform">
                        Bắt Đầu Quiz ⚡
                    </button>
                </div>
            </div>
        </section>
    </div>

    <!-- Mentors Page -->
    <div id="mentors" class="page">
        <section class="min-h-screen px-4 pt-24">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h1 class="text-5xl font-bold text-black mb-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">
                            Đội Ngũ Mentor
                        </span>
                    </h1>
                    <p class="text-xl text-gray-800">Học từ những chuyên gia hàng đầu trong lĩnh vực MMO và công nghệ
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Non-tech Mentors -->
                    <div
                        class="bg-gray-100 bg-opacity-80 p-6 rounded-xl border border-cyan-500 border-opacity-30 tilt-card">
                        <div class="text-center mb-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-cyan-400 to-yellow-400 rounded-full mx-auto mb-4 flex items-center justify-center text-2xl">
                                👨‍💼
                            </div>
                            <h3 class="text-xl font-bold text-black">Nguyễn Minh Tuấn</h3>
                            <div
                                class="bg-gradient-to-r from-cyan-400 to-yellow-400 text-black px-3 py-1 rounded-full text-xs font-semibold inline-block mt-2">
                                Non-tech Expert
                            </div>
                        </div>
                        <p class="text-gray-800 text-sm mb-4">7+ năm kinh nghiệm MMO, thu nhập $500K+/năm từ hệ thống
                            tự động</p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <div>• Chuyên gia Dropshipping & Affiliate</div>
                            <div>• Founder 3 startup thành công</div>
                            <div>• Mentor 1000+ học viên</div>
                        </div>
                    </div>

                    <div
                        class="bg-gray-100 bg-opacity-80 p-6 rounded-xl border border-purple-500 border-opacity-30 tilt-card">
                        <div class="text-center mb-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-purple-500 to-cyan-400 rounded-full mx-auto mb-4 flex items-center justify-center text-2xl">
                                👩‍💻
                            </div>
                            <h3 class="text-xl font-bold text-black tech-font">Sarah Chen</h3>
                            <div
                                class="bg-gradient-to-r from-purple-500 to-cyan-400 text-white px-3 py-1 rounded-full text-xs font-semibold inline-block mt-2">
                                AI & Code Master
                            </div>
                        </div>
                        <p class="text-gray-800 text-sm mb-4">Ex-Google AI Engineer, 10+ năm phát triển ML/AI systems
                        </p>
                        <div class="space-y-2 text-sm text-gray-600 tech-font">
                            <div>• Lead AI tại Google & Meta</div>
                            <div>• 50+ AI projects deployed</div>
                            <div>• PhD Computer Science MIT</div>
                        </div>
                    </div>

                    <div
                        class="bg-gray-100 bg-opacity-80 p-6 rounded-xl border border-cyan-500 border-opacity-30 tilt-card">
                        <div class="text-center mb-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-cyan-400 to-yellow-400 rounded-full mx-auto mb-4 flex items-center justify-center text-2xl">
                                👨‍🎨
                            </div>
                            <h3 class="text-xl font-bold text-black">Lê Hoàng Nam</h3>
                            <div
                                class="bg-gradient-to-r from-cyan-400 to-yellow-400 text-black px-3 py-1 rounded-full text-xs font-semibold inline-block mt-2">
                                Non-tech Expert
                            </div>
                        </div>
                        <p class="text-gray-800 text-sm mb-4">Digital Marketing Guru, $2M+ ad spend quản lý thành công
                        </p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <div>• Facebook Marketing Partner</div>
                            <div>• 500+ campaigns thành công</div>
                            <div>• Chuyên gia Growth Hacking</div>
                        </div>
                    </div>

                    <div
                        class="bg-gray-100 bg-opacity-80 p-6 rounded-xl border border-purple-500 border-opacity-30 tilt-card">
                        <div class="text-center mb-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-purple-500 to-cyan-400 rounded-full mx-auto mb-4 flex items-center justify-center text-2xl">
                                👨‍🔬
                            </div>
                            <h3 class="text-xl font-bold text-black tech-font">David Kim</h3>
                            <div
                                class="bg-gradient-to-r from-purple-500 to-cyan-400 text-white px-3 py-1 rounded-full text-xs font-semibold inline-block mt-2">
                                Blockchain Master
                            </div>
                        </div>
                        <p class="text-gray-800 text-sm mb-4">Blockchain Architect, xây dựng 20+ DeFi protocols</p>
                        <div class="space-y-2 text-sm text-gray-600 tech-font">
                            <div>• CTO tại Binance Labs</div>
                            <div>• $100M+ TVL protocols</div>
                            <div>• Smart Contract Auditor</div>
                        </div>
                    </div>

                    <div
                        class="bg-gray-100 bg-opacity-80 p-6 rounded-xl border border-cyan-500 border-opacity-30 tilt-card">
                        <div class="text-center mb-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-cyan-400 to-yellow-400 rounded-full mx-auto mb-4 flex items-center justify-center text-2xl">
                                👩‍💼
                            </div>
                            <h3 class="text-xl font-bold text-black">Trần Thị Mai</h3>
                            <div
                                class="bg-gradient-to-r from-cyan-400 to-yellow-400 text-black px-3 py-1 rounded-full text-xs font-semibold inline-block mt-2">
                                Business Expert
                            </div>
                        </div>
                        <p class="text-gray-800 text-sm mb-4">Serial Entrepreneur, 5 exits thành công, tổng giá trị
                            $50M+</p>
                        <div class="space-y-2 text-sm text-gray-600">
                            <div>• Forbes 30 Under 30</div>
                            <div>• Venture Capital Partner</div>
                            <div>• Business Strategy Consultant</div>
                        </div>
                    </div>

                    <div
                        class="bg-gray-100 bg-opacity-80 p-6 rounded-xl border border-purple-500 border-opacity-30 tilt-card">
                        <div class="text-center mb-4">
                            <div
                                class="w-20 h-20 bg-gradient-to-r from-purple-500 to-cyan-400 rounded-full mx-auto mb-4 flex items-center justify-center text-2xl">
                                👨‍🚀
                            </div>
                            <h3 class="text-xl font-bold text-black tech-font">Alex Rodriguez</h3>
                            <div
                                class="bg-gradient-to-r from-purple-500 to-cyan-400 text-white px-3 py-1 rounded-full text-xs font-semibold inline-block mt-2">
                                Full-Stack Master
                            </div>
                        </div>
                        <p class="text-gray-800 text-sm mb-4">Senior Engineer Netflix, xây dựng systems phục vụ 200M+
                            users</p>
                        <div class="space-y-2 text-sm text-gray-600 tech-font">
                            <div>• Netflix Senior SWE</div>
                            <div>• Microservices Architect</div>
                            <div>• Open Source Contributor</div>
                        </div>
                    </div>
                </div>

                <!-- Mentorship Benefits -->
                <div class="mt-16 bg-gradient-to-r from-gray-100 to-gray-200 bg-opacity-80 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-black mb-6 text-center">🎯 Lợi Ích Mentorship</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl mb-2">🎯</div>
                            <h4 class="text-lg font-semibold text-black mb-2">1-on-1 Coaching</h4>
                            <p class="text-gray-800 text-sm">Hướng dẫn cá nhân hóa theo mục tiêu riêng</p>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl mb-2">🚀</div>
                            <h4 class="text-lg font-semibold text-black mb-2">Project Review</h4>
                            <p class="text-gray-800 text-sm">Feedback chi tiết cho mọi dự án thực tế</p>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl mb-2">🌐</div>
                            <h4 class="text-lg font-semibold text-black mb-2">Network Access</h4>
                            <p class="text-gray-800 text-sm">Kết nối với cộng đồng chuyên gia</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Quiz Modal -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.banner-swiper', {
            // Swiper parameters
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            effect: 'slide',
            speed: 800,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },

            // Responsive breakpoints
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                }
            },

            // Lazy loading
            lazy: {
                loadPrevNext: true,
            },
        });

        // Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                swiper.slidePrev();
            } else if (e.key === 'ArrowRight') {
                swiper.slideNext();
            }
        });

        // Preload images for better performance
        const images = document.querySelectorAll('.swiper-slide img');
        images.forEach(img => {
            img.addEventListener('load', function() {
                this.style.animationDelay = Math.random() * 0.3 + 's';
            });
        });
    </script>

    <script>
        // Create animated stars
        function createStars() {
            const starsContainer = document.getElementById('stars');
            const numStars = 100;

            for (let i = 0; i < numStars; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.animationDelay = Math.random() * 3 + 's';
                starsContainer.appendChild(star);
            }
        }

        // Page navigation
        function showPage(pageId) {
            // Hide all pages
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });

            // Show selected page
            document.getElementById(pageId).classList.add('active');

            // Scroll to top
            window.scrollTo(0, 0);
        }

        // Quiz functionality
        let currentQuestion = 0;
        let quizAnswers = [];
        const questions = [{
                question: "Kinh nghiệm lập trình của bạn như thế nào?",
                options: [{
                        text: "Hoàn toàn mới, chưa từng code",
                        subtext: "Tôi muốn bắt đầu từ con số 0",
                        value: "nontech"
                    },
                    {
                        text: "Có kiến thức cơ bản về lập trình",
                        subtext: "Tôi biết HTML/CSS hoặc một ngôn ngữ nào đó",
                        value: "tech"
                    },
                    {
                        text: "Đã có kinh nghiệm lập trình",
                        subtext: "Tôi muốn nâng cao kỹ năng và học công nghệ mới",
                        value: "tech"
                    }
                ]
            },
            {
                question: "Mục tiêu chính của bạn là gì?",
                options: [{
                        text: "Kiếm tiền online nhanh chóng",
                        subtext: "Tôi muốn có thu nhập thụ động sớm nhất",
                        value: "nontech"
                    },
                    {
                        text: "Xây dựng sản phẩm công nghệ",
                        subtext: "Tôi muốn tạo ra ứng dụng/website chuyên nghiệp",
                        value: "tech"
                    },
                    {
                        text: "Phát triển sự nghiệp IT",
                        subtext: "Tôi muốn làm việc tại các công ty công nghệ",
                        value: "tech"
                    }
                ]
            },
            {
                question: "Bạn thích làm việc với điều gì nhất?",
                options: [{
                        text: "Marketing và bán hàng",
                        subtext: "Tôi thích tương tác với khách hàng và phân tích thị trường",
                        value: "nontech"
                    },
                    {
                        text: "Giải quyết vấn đề kỹ thuật",
                        subtext: "Tôi thích debug, tối ưu hóa và xây dựng hệ thống",
                        value: "tech"
                    },
                    {
                        text: "Sáng tạo nội dung",
                        subtext: "Tôi thích viết, thiết kế và tạo ra những thứ mới",
                        value: "nontech"
                    }
                ]
            }
        ];

        function startQuiz() {
            currentQuestion = 0;
            quizAnswers = [];
            document.getElementById('quizModal').classList.remove('hidden');
            document.getElementById('quizModal').classList.add('flex');
            showQuestion();
        }

        function showQuestion() {
            const question = questions[currentQuestion];
            const questionElement = document.getElementById('quizQuestion');

            questionElement.innerHTML = `
                <p class="text-lg text-gray-800 mb-4">Câu hỏi ${currentQuestion + 1}/3: ${question.question}</p>
                <div class="space-y-3">
                    ${question.options.map(option => `
                                <div class="quiz-option border border-gray-400 p-4 rounded-lg" data-value="${option.value}">
                                    <div class="font-semibold text-black">${option.text}</div>
                                    <div class="text-sm text-gray-600">${option.subtext}</div>
                                </div>
                            `).join('')}
                </div>
            `;

            // Add click handlers
            document.querySelectorAll('.quiz-option').forEach(option => {
                option.addEventListener('click', function() {
                    // Remove previous selection
                    document.querySelectorAll('.quiz-option').forEach(opt => opt.classList.remove(
                        'selected'));
                    // Add selection to clicked option
                    this.classList.add('selected');
                    // Enable next button
                    const nextBtn = document.getElementById('nextBtn');
                    nextBtn.disabled = false;
                    nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                });
            });
        }

        function nextQuestion() {
            const selected = document.querySelector('.quiz-option.selected');
            if (!selected) return;

            quizAnswers.push(selected.dataset.value);
            currentQuestion++;

            if (currentQuestion < questions.length) {
                showQuestion();
                // Reset next button
                const nextBtn = document.getElementById('nextBtn');
                nextBtn.disabled = true;
                nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
            } else {
                showQuizResult();
            }
        }

        function showQuizResult() {
            const nontechCount = quizAnswers.filter(answer => answer === 'nontech').length;
            const techCount = quizAnswers.filter(answer => answer === 'tech').length;

            const recommendedTrack = nontechCount > techCount ? 'nontech' : 'tech';
            const trackName = recommendedTrack === 'nontech' ? 'Non-tech Track' : 'Tech Track';
            const trackDescription = recommendedTrack === 'nontech' ?
                'Bắt đầu từ con số 0 với các công cụ no-code và marketing online' :
                'Nâng tầm kỹ năng code với AI, Blockchain và Full-stack Development';

            document.getElementById('quizContent').innerHTML = `
                <div class="text-center">
                    <div class="text-6xl mb-4">${recommendedTrack === 'nontech' ? '🧠⚙️' : '🔮💻'}</div>
                    <h3 class="text-3xl font-bold text-black mb-4">Kết Quả Quiz</h3>
                    <div class="bg-gradient-to-r ${recommendedTrack === 'nontech' ? 'from-cyan-400 to-yellow-400 text-black' : 'from-purple-500 to-cyan-400 text-white'} px-6 py-3 rounded-xl font-semibold inline-block mb-4">
                        Phù Hợp: ${trackName}
                    </div>
                    <p class="text-gray-800 mb-8">${trackDescription}</p>
                    <div class="space-y-4">
                        <button onclick="showPage('${recommendedTrack}'); closeQuiz();" class="w-full bg-gradient-to-r ${recommendedTrack === 'nontech' ? 'from-cyan-500 to-yellow-500 text-black' : 'from-purple-500 to-cyan-400 text-white'} px-8 py-4 rounded-xl font-semibold hover:scale-105 transition-transform">
                            Khám Phá ${trackName} 🚀
                        </button>
                        <button onclick="closeQuiz()" class="w-full border border-gray-400 text-gray-800 px-8 py-4 rounded-xl hover:bg-gray-100">
                            Đóng
                        </button>
                    </div>
                </div>
            `;
        }

        function closeQuiz() {
            document.getElementById('quizModal').classList.add('hidden');
            document.getElementById('quizModal').classList.remove('flex');
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createStars();
        });

        // Close modal when clicking outside
        document.getElementById('quizModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeQuiz();
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
                        "window.__CF$cv$params={r:'9751bd57e0ccdda0',t:'MTc1NjE5NDY0MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
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