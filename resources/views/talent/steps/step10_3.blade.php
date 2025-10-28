<div class="video_panl" id="video_panl">
    <div class="singl_socil singl_socil_vido" bis_skin_checked="1">
        <label class="ckb-option"><input type="checkbox" class="ckb-main" value="models"> 
         All (<span id="allCount">0</span>  Video)
        </label>
        <!-- <label class="ckb-option"><input type="checkbox" class="ckb-main" value="models">  Uploaded (0/5 Video)</label> -->
        <!-- <label class="ckb-option"><input type="checkbox" class="ckb-main" value="models">  Embedded (0/5 Video)</label> -->
        <label class="ckb-option"><input type="checkbox" class="ckb-main" value="models">  Website Available </label>
    </div>
    <div class="clear"></div>
    <div class="tab_img_galry tab_video_galry">
        <div class="upload_img_galy">
            <div class="upload_img_icn">
                <i class="ti ti-cloud-upload"></i>
            </div>
            <a class="video_emb" data-bs-toggle="modal" data-bs-target="#embed_video" >Embed Video</a>
            <div class="clear"></div>
        </div>
        @foreach($videos as $video)
            @php
                // Extract YouTube video ID for thumbnail
                preg_match('/(?:youtube\.com\/embed\/|youtu\.be\/)([A-Za-z0-9_-]+)/', $video->embed_code, $match);
                $thumb = isset($match[1]) 
                    ? "https://img.youtube.com/vi/{$match[1]}/hqdefault.jpg" 
                    : asset('assets/images/default-video-thumb.jpg');
            @endphp

            <div class="singl_img_view" data-id="{{ $video->id }}">
                <img src="{{ $thumb }}" class="singl_img_view_img" alt="{{ $video->title }}">
                
                <div class="ply_btn_vid">
                    <a class="playVideoBtn" data-embed='{{ $video->embed_code }}'>
                        <i class="ph-duotone ph-play"></i>
                    </a>
                </div>

                <div class="clear"></div>

                <div class="img_filter">
                    <a href="#" class="editVideoBtn"
                    data-id="{{ $video->id }}"
                    data-title="{{ $video->title }}"
                    data-embed="{{ $video->embed_code }}"
                    data-download="{{ $video->download_link }}"
                    data-description="{{ $video->description }}">
                        <i class="ti ti-edit"></i>
                    </a>
                    <a href="#" class="deleteVideo" data-id="{{ $video->id }}">
                        <i class="ph-duotone ph-x-circle"></i>
                    </a>
                </div>
            </div>
        @endforeach
        
        
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>

<div class="modal fade login-modal upload_doc" id="embed_video" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content card mb-0 user-card">
         <div class="modal-body">
            <div class="d-flex mb-4">
               <div class="flex-grow-1 me-3">
                  <h4 class="f-w-500 mb-1">Embed Video</h4>
               </div>
               <div class="flex-shrink-0"><a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal"><i class="ti ti-x f-20"></i></a></div>
            </div>
            <div class="">
                <form class="wrap_form" id="videoForm">
                    @csrf
                    <div id="videoError" class="text-danger mt-2" style="display:none;"></div>
                    <input type="hidden" name="id" id="video_id">
                    <input type="hidden" name="t_general_id" class="general_id" value="{{ old('t_general_id', $general->id ?? '') }}">

                    <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                        <label class="form-label">Video title</label>
                        <input type="text" class="form-control" name="title" id="video_title" placeholder="Enter Video title">
                    </div>
                    <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                        <label class="form-label">Embed Code</label>
                        <input type="text" class="form-control" name="embed_code" id="video_embed" placeholder="Enter Embed Code">
                    </div>
                    <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                        <label class="form-label">Video Download Link</label>
                        <input type="text" class="form-control" name="download_link" id="video_download" placeholder="Enter Video Download Link">
                    </div>
                    <div class="mb-6 col-md-6 video_emb1" bis_skin_checked="1">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="video_description" placeholder="Enter Description" rows="3"></textarea>
                    </div>

                    <div class="clear"></div>
                    <button type="submit" class="submit_btn flot_right flot_right_pop">Submit</button>
                    </form>
            
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
         </div>
      </div>
   </div>
</div>