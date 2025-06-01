@php
    $imageUrl = isset($getImageUrl) ? $getImageUrl($getRecord()) : null;
@endphp

@if($imageUrl)
    <div class="fi-fo-field-wrp">
        <div class="flex items-center gap-x-3">
            <img 
                src="{{ $imageUrl }}" 
                alt="Current Logo" 
                class="h-32 w-32 object-contain rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900"
            >
        </div>
    </div>
@endif