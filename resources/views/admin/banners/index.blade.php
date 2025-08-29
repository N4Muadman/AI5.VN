@extends('admin.layout')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Quản lý banner</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h2 class="mb-2">Danh sách banner</h2>
                        <button data-bs-toggle="modal" data-bs-target="#add-banners"
                            class="btn btn-light-primary d-flex align-items-center gap-2"><i class="ti ti-plus"></i> Thêm
                            banner</button>
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
                                    <th>Ảnh</th>
                                    <th>Link</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($banners as $banner)
                                    <tr>
                                        <td>{{ $banner->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' .$banner->image_path) }}" width="60px" height="40px" alt="Banner" style="object-fit: cover;">
                                        </td>
                                        <td>
                                            @if($banner->link)
                                                <a href="{{ $banner->link }}" target="_blank" class="text-primary">
                                                    {{ Str::limit($banner->link, 30) }}
                                                </a>
                                            @else
                                                <span class="text-muted">Không có link</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="avtar avtar-edit avtar-xs btn-link-secondary"
                                                data-id="{{ $banner->id }}" title="CẬP NHẬT">
                                                <i class="ti ti-edit f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-delete avtar-xs btn-link-secondary"
                                                data-id="{{ $banner->id }}" title="XÓA banner">
                                                <i class="ti ti-trash f-20"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <p class="text-center">Không có banner nào</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="ps-5 pe-5">
                            {{ $banners->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Thêm banner -->
    <div class="modal fade" id="add-banners" tabindex="-1" aria-labelledby="addbannersModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addbannersModalLabel">Thêm mới banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="add-banners-form" action="{{ route('banners.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-xl-12">
                                                <div class="section-card">
                                                    <div class="section-title">
                                                        <i class="fas fa-images"></i>
                                                        Hình ảnh banner
                                                    </div>
                                                    <div class="upload-area" id="upload-area">
                                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                                        <h5>Kéo thả ảnh vào đây hoặc click để chọn</h5>
                                                        <p class="text-muted">Hỗ trợ định dạng: JPG, PNG, GIF</p>
                                                        <input type="file" id="file-upload" name="image"
                                                            accept="image/*" style="display: none;" required>
                                                        <button type="button" class="custom-file-upload">
                                                            <i class="fas fa-plus me-2"></i>Chọn ảnh
                                                        </button>
                                                    </div>
                                                    <div class="d-flex flex-wrap mt-3" id="image-preview-container">
                                                        <!-- Preview images will be inserted here -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3 mb-0">
                                                    <label class="form-label">Link (URL)</label>
                                                    <input type="text" class="form-control" name="link"
                                                        placeholder="https://example.com">
                                                    <small class="form-text text-muted">Để trống nếu không cần link</small>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row align-items-end justify-content-end g-3">
                                                    <div class="col-sm-auto btn-page">
                                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
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

    <!-- Modal Sửa banner -->
    <div class="modal fade" id="edit-banners" tabindex="-1" aria-labelledby="editbannersModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editbannersModalLabel">Cập nhật banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="edit-banners-form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row g-3">
                                            <div class="col-xl-12">
                                                <div class="section-card">
                                                    <div class="section-title">
                                                        <i class="fas fa-images"></i>
                                                        Hình ảnh banner
                                                    </div>
                                                    <div class="upload-area" id="edit-upload-area">
                                                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                                                        <h5>Kéo thả ảnh vào đây hoặc click để chọn</h5>
                                                        <p class="text-muted">Hỗ trợ định dạng: JPG, PNG, GIF</p>
                                                        <input type="file" id="edit-file-upload" name="image"
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
                                                <div class="mb-3 mb-0">
                                                    <label class="form-label">Link (URL)</label>
                                                    <input type="text" class="form-control" name="link" id="edit-link"
                                                        placeholder="https://example.com">
                                                    <small class="form-text text-muted">Để trống nếu không cần link</small>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row align-items-end justify-content-end g-3">
                                                    <div class="col-sm-auto btn-page">
                                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
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

    <!-- Modal Xác nhận xóa -->
    <div class="modal fade" id="delete-banners" tabindex="-1" aria-labelledby="deletebannersModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletebannersModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xóa banner này không?</p>
                    <p class="text-danger"><small>Hành động này không thể hoàn tác!</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <form id="delete-banners-form" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
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
                <button type="button" class="btn btn-danger remove-image" style="position: absolute;top: -12px;right: -12px; padding: 1px 5px" onclick="removeImagePreview(this)">×</button>
            `;
            previewDiv.dataset.file = file.name;
            container.appendChild(previewDiv);
        }

        function removeImagePreview(button) {
            const container = button.closest('.image-preview').parentElement;
            button.parentElement.remove();

            // Clear file input when removing image
            const isEditMode = container.id === 'edit-image-preview-container';
            const fileInput = document.getElementById(isEditMode ? 'edit-file-upload' : 'file-upload');
            fileInput.value = '';
        }

        // Initialize image upload areas
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                initImageUpload('upload-area', 'file-upload', 'image-preview-container');
                initImageUpload('edit-upload-area', 'edit-file-upload', 'edit-image-preview-container', 'edit-file-btn');
            }, 100);
        });

        // Event handlers
        document.addEventListener('click', function(e) {
            if (e.target.closest('.avtar-edit')) {
                e.preventDefault();
                const bannersId = e.target.closest('.avtar-edit').getAttribute('data-id');
                editbanners(bannersId);
            }
        });

        document.addEventListener('click', function(e) {
            if (e.target.closest('.avtar-delete')) {
                e.preventDefault();
                const bannersId = e.target.closest('.avtar-delete').getAttribute('data-id');
                deletebanners(bannersId);
            }
        });

        function editbanners(id) {
            Swal.fire({
                title: 'Đang tải dữ liệu...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch(`{{ route('banners.edit', ':id') }}`.replace(':id', id))
                .then(response => response.json())
                .then(data => {
                    Swal.close();

                    document.getElementById('edit-link').value = data.link || '';
                    document.getElementById('edit-banners-form').action = `{{ route('banners.update', ':id') }}`.replace(':id', id);
                    document.getElementById('edit-image-preview-container').innerHTML = '';

                    if (data.image_path) {
                        const previewContainer = document.getElementById('edit-image-preview-container');
                        const previewDiv = document.createElement('div');
                        previewDiv.className = 'image-preview';
                        previewDiv.innerHTML = `
                            <img src="{{ asset('storage') }}/${data.image_path}" alt="Current image">
                            <button type="button" class="btn btn-danger remove-image" style="position: absolute;top: -12px;right: -12px; padding: 1px 5px" onclick="removeImagePreview(this)">×</button>
                        `;
                        previewContainer.appendChild(previewDiv);
                    }

                    const editModal = new bootstrap.Modal(document.getElementById('edit-banners'));
                    editModal.show();
                })
                .catch(error => {
                    Swal.close();
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi!',
                        text: 'Không thể tải dữ liệu banner.'
                    });
                });
        }

        function deletebanners(id) {
            document.getElementById('delete-banners-form').action = `{{ route('banners.destroy', ':id') }}`.replace(':id', id);
            const deleteModal = new bootstrap.Modal(document.getElementById('delete-banners'));
            deleteModal.show();
        }

        // Form submission handlers
        document.getElementById('add-banners-form').addEventListener('submit', function(e) {
            const fileInput = document.getElementById('file-upload');
            if (!fileInput.files.length) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Thiếu hình ảnh!',
                    text: 'Vui lòng chọn hình ảnh cho banner.'
                });
                return false;
            }
        });
    </script>
@endsection
