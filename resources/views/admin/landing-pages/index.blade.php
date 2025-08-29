@extends('admin.layout')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Quản lý landing page</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h2 class="mb-2">Danh sách landing page</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card table-card">
                <div class="card-body pt-3">
                    <div class="table-responsive">
                        <table class="table table-hover text-center table-fixed" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Thumbnail</th>
                                    <th>Tiêu đề</th>
                                    <th>Slug</th>
                                    <th>Lượt xem</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($landingPages as $landingPage)
                                    <tr>
                                        <td>{{ $landingPage->id }}</td>
                                        <td>
                                            @if($landingPage->thambnail)
                                                <img src="{{ asset('storage/' . $landingPage->thambnail) }}"
                                                     width="60px" height="40px" alt="Thumbnail"
                                                     style="object-fit: cover;">
                                            @else
                                                <span class="text-muted">Chưa có ảnh</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="text-truncate" style="max-width: 200px;" title="{{ $landingPage->title }}">
                                                {{ $landingPage->title }}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">{{ $landingPage->slug }}</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">{{ number_format($landingPage->views ?? 0) }}</span>
                                        </td>
                                        <td>
                                            <a href="#" class="avtar avtar-edit avtar-xs btn-link-secondary"
                                                data-id="{{ $landingPage->id }}" title="CẬP NHẬT">
                                                <i class="ti ti-edit f-20"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
                                            <p class="text-center">Không có landing page nào</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="ps-5 pe-5">
                            {{ $landingPages->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sửa Landing Page -->
    <div class="modal fade" id="edit-landing-page" tabindex="-1" aria-labelledby="editLandingPageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLandingPageModalLabel">Cập nhật Landing Page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="edit-landing-page-form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Tiêu đề *</label>
                                                    <input type="text" class="form-control" name="title" id="edit-title"
                                                        placeholder="Nhập tiêu đề landing page" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="section-card">
                                                    <div class="section-title">
                                                        <i class="fas fa-images"></i>
                                                        Thumbnail
                                                    </div>
                                                    <div class="upload-area" id="edit-upload-area">
                                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                                        <h5>Kéo thả ảnh vào đây hoặc click để chọn</h5>
                                                        <p class="text-muted">Hỗ trợ định dạng: JPG, PNG, GIF (Tối đa 2MB)</p>
                                                        <input type="file" id="edit-file-upload" name="thambnail"
                                                            accept="image/*" style="display: none;">
                                                        <button type="button" class="custom-file-upload" id="edit-file-btn">
                                                            <i class="fas fa-plus me-2"></i>Chọn ảnh
                                                        </button>
                                                    </div>
                                                    <div class="d-flex flex-wrap mt-3" id="edit-image-preview-container">
                                                        <!-- Preview images will be inserted here -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row align-items-end justify-content-end g-3">
                                                    <div class="col-sm-auto btn-page">
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="ti ti-device-floppy me-2"></i>Cập nhật
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function initImageUpload(uploadAreaId, fileUploadId, previewContainerId, buttonId) {
            const uploadArea = document.getElementById(uploadAreaId);
            const fileUpload = document.getElementById(fileUploadId);
            const previewContainer = document.getElementById(previewContainerId);
            const uploadButton = buttonId ? document.getElementById(buttonId) : uploadArea?.querySelector('.custom-file-upload');

            if (!uploadArea || !fileUpload || !previewContainer) return;

            uploadArea.addEventListener('click', () => fileUpload.click());
            if (uploadButton) {
                uploadButton.addEventListener('click', (e) => {
                    e.stopPropagation();
                    fileUpload.click();
                });
            }

            fileUpload.addEventListener('change', function(e) {
                handleFiles(e.target.files, previewContainer);
            });

            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                uploadArea.classList.add('dragover');
            });

            uploadArea.addEventListener('dragleave', function(e) {
                e.preventDefault();
                uploadArea.classList.remove('dragover');
            });

            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                uploadArea.classList.remove('dragover');
                const files = e.dataTransfer.files;
                handleFiles(files, previewContainer);

                // Update file input
                const dt = new DataTransfer();
                Array.from(files).forEach(file => dt.items.add(file));
                fileUpload.files = dt.files;
            });
        }

        function handleFiles(files, previewContainer) {
            previewContainer.innerHTML = ''; // Clear previous previews
            Array.from(files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    // Check file size (2MB limit)
                    if (file.size > 2 * 1024 * 1024) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'File quá lớn!',
                            text: 'Vui lòng chọn file có kích thước nhỏ hơn 2MB.'
                        });
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        createImagePreview(e.target.result, previewContainer, file);
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        function createImagePreview(src, container, file) {
            const previewDiv = document.createElement('div');
            previewDiv.className = 'image-preview';
            previewDiv.innerHTML = `
                <img src="${src}" alt="Preview">
                <button type="button" class="btn btn-danger remove-image"
                        style="position: absolute;top: -12px;right: -12px; padding: 1px 5px"
                        onclick="removeImagePreview(this)">×</button>
            `;
            previewDiv.dataset.file = file.name;
            container.appendChild(previewDiv);
        }

        function removeImagePreview(button) {
            const container = button.closest('.image-preview').parentElement;
            button.parentElement.remove();

            // Clear file input when removing image
            const fileInput = document.getElementById('edit-file-upload');
            fileInput.value = '';
        }

        // Initialize image upload areas
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                initImageUpload('edit-upload-area', 'edit-file-upload', 'edit-image-preview-container', 'edit-file-btn');
            }, 100);
        });

        // Event handlers
        document.addEventListener('click', function(e) {
            if (e.target.closest('.avtar-edit')) {
                e.preventDefault();
                const landingPageId = e.target.closest('.avtar-edit').getAttribute('data-id');
                editLandingPage(landingPageId);
            }
        });

        function editLandingPage(id) {
            Swal.fire({
                title: 'Đang tải dữ liệu...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch(`{{ route('landing-pages.edit', ':id') }}`.replace(':id', id))
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    Swal.close();

                    // Fill form data
                    document.getElementById('edit-title').value = data.title || '';
                    document.getElementById('edit-landing-page-form').action =
                        `{{ route('landing-pages.update', ':id') }}`.replace(':id', id);

                    // Clear and setup image preview
                    document.getElementById('edit-image-preview-container').innerHTML = '';

                    if (data.thambnail) {
                        const previewContainer = document.getElementById('edit-image-preview-container');
                        const previewDiv = document.createElement('div');
                        previewDiv.className = 'image-preview';
                        previewDiv.innerHTML = `
                            <img src="{{ asset('storage') }}/${data.thambnail}" alt="Current thumbnail">
                            <button type="button" class="btn btn-danger remove-image"
                                    style="position: absolute;top: -12px;right: -12px; padding: 1px 5px"
                                    onclick="removeImagePreview(this)">×</button>
                        `;
                        previewContainer.appendChild(previewDiv);
                    }

                    // Show modal
                    const editModal = new bootstrap.Modal(document.getElementById('edit-landing-page'));
                    editModal.show();
                })
                .catch(error => {
                    Swal.close();
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi!',
                        text: 'Không thể tải dữ liệu landing page.'
                    });
                });
        }

        // Form validation
        document.getElementById('edit-landing-page-form').addEventListener('submit', function(e) {
            const title = document.getElementById('edit-title').value.trim();

            if (!title) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Thiếu thông tin!',
                    text: 'Vui lòng nhập tiêu đề landing page.'
                });
                return false;
            }

            // Show loading while submitting
            Swal.fire({
                title: 'Đang cập nhật...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        });
    </script>

@endsection
