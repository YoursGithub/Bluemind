<div class="col-sm-9">
    <!-- Hidden File Input -->
    <input 
        type="file" 
        class="form-control d-none" 
        id="horizontal-{{ $name }}-input" 
        name="{{ $name }}" 
        accept="image/*" 
        onchange="previewImage(event, '{{ $name }}')"
    >
    
    <!-- Upload or Change Button -->
    @if ($kycDetails)
        <div id="{{ $name }}-preview-container" class="mt-3">
            <img 
                id="{{ $name }}-preview" 
                src="{{ $kycDetails[$name] }}" 
                alt="{{ ucfirst($name) }} Preview" 
                style="max-width: 100%; max-height: 300px; border: 1px solid #ddd; padding: 5px;"
            >
            <button 
                type="button" 
                class="btn btn-secondary mt-2" 
                onclick="document.getElementById('horizontal-{{ $name }}-input').click();"
            >
                Change Image
            </button>
        </div>
    @else
        <button 
            type="button" 
            class="btn btn-primary" 
            id="upload-{{ $name }}-button" 
            onclick="document.getElementById('horizontal-{{ $name }}-input').click();"
        >
            Upload {{ Str::title(Str::replace("_"," ",$name)) }}
            

        </button>

        <div id="{{ $name }}-preview-container" class="mt-3" style="display: none;">
            <img 
                id="{{ $name }}-preview" 
                src="#" 
                alt="{{ ucfirst($name) }} Preview" 
                style="max-width: 100%; max-height: 300px; border: 1px solid #ddd; padding: 5px;"
            >
            <button 
                type="button" 
                class="btn btn-secondary mt-2" 
                onclick="document.getElementById('horizontal-{{ $name }}-input').click();"
            >
                Change Image
            </button>
        </div>
    @endif
</div>
