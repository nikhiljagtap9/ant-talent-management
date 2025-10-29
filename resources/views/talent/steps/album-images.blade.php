@foreach($images as $image)
    <div class="singl_img_view" draggable="true" data-id="{{ $image->id }}">
        <img src="{{ asset('storage/'.$image->path) }}" class="singl_img_view_img">
        <div class="clear"></div>
        <div class="img_filter">
            <a href="">
                <i class="ph-duotone ph-magnifying-glass-plus"></i>
            </a>
            <a href="">
                <i class="ph-duotone ph-x-circle"></i>
            </a>
        </div>
    </div>
@endforeach