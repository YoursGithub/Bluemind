@extends('layout.app')

@section('main-section')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Update Gallery</h4>

                                <form action="{{ route('admin.update-gallery', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="horizontal-name-input" class="col-sm-3 col-form-label">
                                            Heading
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="horizontal-name-input"
                                                placeholder="Enter Heading" name="heading" value="{{ $gallery->heading }}">
                                        </div>
                                    </div>

                                    <!-- Current Images -->
                                    <div class="mb-4">
                                        <label class="form-label">Current Images</label>
                                        <div class="row" id="existing-images">


                                                @foreach($gallery->images as $image)

                                                    @php
                                                         $index = $image['id'] ;
                                                    @endphp

                                                    <div class="col-md-3 mb-3">
                                                        <div class="card">
                                                            <img src="{{  $image['image_path'] }}" class="card-img-top" style="height:150px; object-fit:cover;">
                                                            <div class="card-body p-2 text-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="remove_images[]" value="{{ $index }}" id="remove-{{ $index }}">
                                                                    <label class="form-check-label" for="remove-{{ $index }}">
                                                                        Remove
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                        </div>
                                    </div>

                                    <!-- Add New Images -->
                                    <div class="mb-3">
                                        <label for="new_images" class="form-label">Add New Images</label>
                                        <input type="file" name="new_images[]" id="new_images" class="form-control" multiple accept="image/*">
                                    </div>

                                    <div class="row" id="preview-container"></div>

                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Update Gallery</button>
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
@endsection

@section('script-section')
<script>
    const input = document.getElementById('new_images');
    const previewContainer = document.getElementById('preview-container');
    let fileList = new DataTransfer();

    input.addEventListener('change', (e) => {
        Array.from(input.files).forEach(file => {
            // Prevent duplicates by checking name + size
            if (![...fileList.files].some(f => f.name === file.name && f.size === file.size)) {
                fileList.items.add(file);

                const reader = new FileReader();
                reader.onload = (event) => {
                    const col = document.createElement('div');
                    col.className = 'col-md-3 mb-3';
                    col.innerHTML = `
                        <div class="card">
                            <img src="${event.target.result}" class="card-img-top" style="height:150px; object-fit:cover;">
                            <div class="card-body p-2 text-center">
                                <p class="small mb-1">${file.name}</p>
                                <button type="button" class="btn btn-sm btn-danger remove-image" data-name="${file.name}" data-size="${file.size}">Remove</button>
                            </div>
                        </div>
                    `;
                    previewContainer.appendChild(col);
                };
                reader.readAsDataURL(file);
            }
        });

        // Set the updated file list back to the input
        input.files = fileList.files;
    });

    // Remove button logic for new images
    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-image')) {
            const name = e.target.getAttribute('data-name');
            const size = e.target.getAttribute('data-size');
            const newFileList = new DataTransfer();

            Array.from(fileList.files).forEach(file => {
                if (!(file.name === name && file.size == size)) {
                    newFileList.items.add(file);
                }
            });

            fileList = newFileList;
            input.files = fileList.files;

            e.target.closest('.col-md-3').remove();
        }
    });
</script>
@endsection