<div class="" id="digitalsAlbum">
    <div class="singl_socil" bis_skin_checked="1">
        <div class="mb-3 col-md-2 smal_5" bis_skin_checked="1">
            <label class="form-label">Creation Digital </label>
            <input type="hidden" name="t_general_id" class="general_id" value="{{ old('t_general_id', $general->id ?? '') }}">
            <input type="text" class="form-control" id="digitalName" placeholder="Enter Digital Name">
        </div>
        <a href="" id="createAlbumBtn" class="crt_port" > Create </a>
        <div class="mb-9 col-md-2 smal_5" bis_skin_checked="1">
            <label class="form-label">Select Album </label>
            <div class="clear"></div>
            <div id="albumList">
                @foreach($albums as $album)
                <a href="#" class="crt_port crt_port_1" data-album="{{ $album->id }}">
                    {{ $album->name }}
                </a>
                @endforeach
            </div>
            <!-- <a href="" class="crt_port crt_port_1 crt_port_1_actv" >
            Album 1
            </a>
            <a href="" class="crt_port crt_port_1" >
            Album 2
            </a> -->
        </div>
        <label class="ckb-option web_2"><input type="checkbox" class="ckb-main" value="models"> Website available</label>
        <label class="ckb-option web_2 web_3"><input type="checkbox" class="ckb-main" value="models"> Default</label>
    </div>
    <div class="clear"></div>
    <div class="tab_img_galry galry_2">
        <div class="upload_img_galy">
            <div class="upload_img_icn">
                <i class="ti ti-cloud-upload"></i>
            </div>
            <div class="upload_img_text">
                Upload/Drop Your Image
            </div>
        </div>
        <div id="leftGallery">
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
         </div>
        <div class="clear"></div>
    </div>
    <div class="tab_img_galry galry_2 galry_2_right" id="rightGallery" style="display:none;">
        <div class="clear"></div>
        <div class="top_br_port">
            <div class="art_titl_as" id="albumTitle">
                Artist
            </div>
            <div class="btn_arts_al">
                <a href="#" class="edit-album">Edit</a>
                <a href="#" class="copy-album">Copy</a>
                <a href="#" class="rename-album">Rename</a>
                <a href="#" class="delete-album">Delete</a>
                <a href="#" class="view-album">View</a>
                <a href="#" class="sort-album">Sort</a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="upload_img_galy">
            <div class="upload_img_icn">
                <i class="ti ti-cloud-upload"></i>
            </div>
            <div class="upload_img_text">
                Upload/Drop Your Image
            </div>
        </div>
        <div id="albumImages"  class="drop-zone">
            <p class="text-muted">Select an album to view or drag images here.</p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="clear"></div>