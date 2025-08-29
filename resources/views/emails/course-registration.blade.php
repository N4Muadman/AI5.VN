<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký khóa học</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }

        .info-section {
            background: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            border-left: 4px solid #007bff;
        }

        .info-row {
            display: flex;
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
            min-width: 120px;
            color: #555;
            margin-right: 10px;
        }

        .info-value {
            flex: 1;
            color: #333;
        }

        .attachments-section {
            background: white;
            padding: 15px;
            margin-top: 20px;
            border-radius: 6px;
            border-left: 4px solid #28a745;
        }

        .attachment-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .attachment-item:last-child {
            border-bottom: none;
        }

        .attachment-info {
            flex: 1;
        }

        .attachment-name {
            font-weight: bold;
            color: #333;
        }

        .attachment-details {
            font-size: 12px;
            color: #666;
        }

        .course-info {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .course-info a{
            padding: 10px 20px;
            border-radius: 15px;
            background: white;
            text-align: center;
            margin-top: 10px;
        }

        .course-title {
            font-size: 18px;
            font-weight: bold;
            color: #1976d2;
            margin-bottom: 10px;
        }

        .timestamp {
            text-align: center;
            color: #666;
            font-size: 12px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
        }

        @media (max-width: 600px) {
            .info-row {
                flex-direction: column;
            }
            .info-label {
                min-width: auto;
                margin-bottom: 3px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎓 Đăng Ký Khóa Học Mới</h1>
    </div>

    <div class="content">
        <!-- Thông tin khóa học -->
        <div class="course-info">
            <div class="course-title"><a href="{{route('landing-page', $landingPage->slug)}}">{{ $landingPage->title ?? 'Khóa học' }}</a></div>
            @if(isset($landingPage->description))
                <p>{{ $landingPage->description }}</p>
            @endif


        </div>

        <!-- Thông tin học viên -->
        <div class="info-section">
            <h3>📋 Thông Tin Học Viên</h3>

            <div class="info-row">
                <div class="info-label">Họ và tên: </div>
                <div class="info-value">{{ $info['name'] ?? 'Không có' }}</div>
            </div>

            <div class="info-row">
                <div class="info-label">Email: </div>
                <div class="info-value">{{ $info['email'] ?? 'Không có' }}</div>
            </div>

            <div class="info-row">
                <div class="info-label">Số điện thoại: </div>
                <div class="info-value">{{ $info['phone'] ?? 'Không có' }}</div>
            </div>

            @if(isset($info['more_information']) && !empty($info['more_information']))
                <div class="info-row">
                    <div class="info-label">Thông tin thêm: </div>
                    <div class="info-value">{{ $info['more_information'] }}</div>
                </div>
            @endif
        </div>

        <!-- Danh sách file đính kèm -->
        @if(!empty($attachmentFiles))
            <div class="attachments-section">
                <h3>📎 File Đính Kèm ({{ count($attachmentFiles) }} file)</h3>

                @foreach($attachmentFiles as $file)
                    <div class="attachment-item">
                        <div class="attachment-info">
                            <div class="attachment-name">{{ $file['name'] }}</div>
                            <div class="attachment-details">
                                Dung lượng: {{ number_format($file['size'] / 1024, 1) }} KB
                                | Loại: {{ strtoupper(pathinfo($file['name'], PATHINFO_EXTENSION)) }}
                            </div>
                        </div>
                    </div>
                @endforeach

                <p style="margin-top: 15px; font-size: 12px; color: #666;">
                    💡 <em>Tất cả file đính kèm đã được đính vào email này.</em>
                </p>
            </div>
        @endif

        <div class="timestamp">
            📅 Email được gửi lúc: {{ now()->format('H:i:s d/m/Y') }} (UTC+7)
        </div>
    </div>
</body>
</html>
