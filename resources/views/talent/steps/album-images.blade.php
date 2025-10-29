@foreach($images as $image)
    <div class="singl_img_view" draggable="true" data-id="{{ $image->pivot->id }}">
        <img src="{{ asset('storage/'.$image->path) }}" class="singl_img_view_img">
        <div class="clear"></div>
        <div class="img_filter">
            <!-- Zoom -->
            <a href="{{ asset('storage/'.$image->path) }}" class="album-zoom-image" data-url="{{ asset('storage/'.$image->path) }}">
                <i class="ph-duotone ph-magnifying-glass-plus"></i>
            </a>
            <!-- Delete -->
            <a href="#" class="album-delete-image"  data-id="{{ $image->pivot->id }}">
                <i class="ph-duotone ph-x-circle"></i>
            </a>
        </div>
    </div>
@endforeach