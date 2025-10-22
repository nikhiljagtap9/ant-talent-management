<div class="">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header">
            <h5>Stats</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="wrap_form" id="statsForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="t_general_id" value="{{ $general->id ?? '' }}">
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Last Measured Date </label>
                            <input type="date" name="last_measured_date" 
                            value="{{old('last_measured_date', optional($stats)->last_measured_date)}}"
                            class="form-control"  placeholder="Enter Last Measured Date">
                        </div>
                        <div class="clear"></div>
                        <div class="mesrmnt_date mesrmnt_date_1">
                            @php
                                $fields = [
                                    'height' => 'Height',
                                    'bust' => 'Bust',
                                    'waist' => 'Waist',
                                    'hips' => 'Hips',
                                    'cup' => 'Cup',
                                    'shoe' => 'Shoe',
                                    'dress_top' => 'Dress / Top',
                                    'bottom' => 'Bottom',
                                    'eye_color' => 'Eyes Color',
                                    'hair_color' => 'Hair Color',
                                    'hair_length' => 'Hair Length',
                                    'hair_type' => 'Hair Type',
                                    'body_type' => 'Body Type',
                                    'ethnic' => 'Ethnic',
                                    'head' => 'Head',
                                    'collar' => 'Collar',
                                    'gloves' => 'Gloves',
                                    'inseam' => 'Inseam',
                                    'outseam' => 'Outseam',
                                    'sleeve' => 'Sleeve',
                                    'custom_shoe_size' => 'Custom Shoe Size',
                                    'weight' => 'Weight',
                                ];
                            @endphp

                            @foreach ($fields as $name => $label)
                                <div class="singl_higt">
                                    <div class="mesrmnt_text">{{ $label }}</div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label">Official {{ $label }}</label>
                                        <input type="text" name="{{ $name }}" class="form-control" placeholder="Enter Official {{ $label }}" value="{{ old($name, $stats->$name ?? '') }}">
                                    </div>
                                </div>
                            @endforeach

                            <div class="singl_higt">
                                <div class="mesrmnt_text">Wrist Size</div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Wrist Size</label>
                                    <select name="wrist_size" class="form-control">
                                        <option value="">Select Size</option>
                                        @foreach(['5.5" / 14cm','6" / 15.2cm','6.5" / 16.5cm','7" / 17.8cm','7.5" / 19cm','8" / 20.3cm'] as $size)
                                            <option value="{{ $size }}" {{ old('wrist_size', $stats->wrist_size ?? '') == $size ? 'selected' : '' }}>
                                                {{ $size }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mesrmnt_date mesrmnt_date_2" id="question_wrapper">
                            <div class="mesrmnt_text">General Questionnaire</div>
                            
                            @forelse($questionnaires as $index => $q)
                                <div class="question_block">
                                    <input type="hidden" name="question[{{ $index }}][id]" value="{{ $question->id ?? '' }}">
                                    <div class="mb-3 col-md-3 question_1">
                                        <label class="form-label">Questionnaire</label>
                                        <select class="form-control" name="questionnaires[{{ $index }}][question]">
                                            <option value=""></option>
                                            <option value="Acting" {{ $q->question == 'Acting' ? 'selected' : '' }}>Acting</option>
                                            <option value="Alcohol" {{ $q->question == 'Alcohol' ? 'selected' : '' }}>Alcohol</option>
                                            <option value="Allergies" {{ $q->question == 'Allergies' ? 'selected' : '' }}>Allergies</option>
                                            <option value="Athletics" {{ $q->question == 'Athletics' ? 'selected' : '' }}>Athletics</option>
                                            <option value="Body Piercing" {{ $q->question == 'Body Piercing' ? 'selected' : '' }}>Body Piercing</option>
                                            <option value="Cigarettes" {{ $q->question == 'Cigarettes' ? 'selected' : '' }}>Cigarettes</option>
                                            <option value="Contact Lenses" {{ $q->question == 'Contact Lenses' ? 'selected' : '' }}>Contact Lenses</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_2">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" name="questionnaires[{{ $index }}][status]">
                                            <option value=""></option>
                                            <option value="Yes" {{ $q->status == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No" {{ $q->status == 'No' ? 'selected' : '' }}>No</option>
                                            <option value="?" {{ $q->status == '?' ? 'selected' : '' }}>?</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_3">
                                        <label class="form-label">Notes</label>
                                        <input type="text" name="questionnaires[{{ $index }}][notes]"
                                        value="{{q->notes ?? ''}}"
                                        class="form-control"  placeholder="Enter Notes">
                                    </div>
                                </div>  
                            @empty
                                <div class="question_block">
                                    <div class="mb-3 col-md-3 question_1">
                                        <label class="form-label">Questionnaire</label>
                                        <select class="form-control" name="questionnaires[0][question]">
                                            <option value=""></option>
                                            <option value="Acting">Acting</option>
                                            <option value="Alcohol">Alcohol</option>
                                            <option value="Allergies">Allergies</option>
                                            <option value="Athletics">Athletics</option>
                                            <option value="Body Piercing">Body Piercing</option>
                                            <option value="Cigarettes">Cigarettes</option>
                                            <option value="Contact Lenses">Contact Lenses</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_2">
                                        <label class="form-label">Status</label>
                                        <select class="form-control" name="questionnaires[0][status]">
                                            <option value=""></option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="?">?</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_3">
                                        <label class="form-label">Notes</label>
                                        <input type="text" name="questionnaires[0][notes]"
                                        class="form-control"  placeholder="Enter Notes">
                                    </div>
                                </div>    
                            @endforelse
                            <div class="clear"></div>
                            <button type="button" id="add_question" class="ad_more_btn ad_more_btn_2">Add More</button>
                            <div class="clear"></div>
                        </div>
                         <div class="mesrmnt_date mesrmnt_date_2 mesrmnt_date_3" id="skill_wrapper">
                            <div class="mesrmnt_text">Skills</div>
                            @forelse($skills as $index => $skill)
                                <div class="skill_block">
                                    <input type="hidden" name="skills[{{ $index }}][id]" value="{{ $skill->id ?? '' }}">
                                    <div class="mb-3 col-md-3 question_1">
                                        <label class="form-label">Skill Category</label>
                                        <select class="form-control" name="skills[${$index}][skill]">
                                            <option value=""></option>
                                            <option value="Category 1" {{ $skill->status == 'Category 1' ? 'selected' : '' }}>Category 1</option>
                                            <option value="Category 2" {{ $skill->status == 'Category 2' ? 'selected' : '' }}>Category 2</option>
                                            <option value="Category 3" {{ $skill->status == 'Category 3' ? 'selected' : '' }}>Category 3</option>
                                            <option value="Category 4" {{ $skill->status == 'Category 4' ? 'selected' : '' }}>Category 4</option>
                                            <option value="Category 5" {{ $skill->status == 'Category 5' ? 'selected' : '' }}>Category 5</option>
                                            <option value="Category 6" {{ $skill->status == 'Category 6' ? 'selected' : '' }}>Category 6</option>
                                            <option value="Category 7" {{ $skill->status == 'Category 7' ? 'selected' : '' }}>Category 7</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_2">
                                        <label class="form-label">Level</label>
                                        <select class="form-control" name="skills[${$index}][level]">
                                            <option value=""></option>
                                            <option value="Beginner" {{ $skill->level == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                            <option value="Intermediate" {{ $skill->level == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                            <option value="Expert" {{ $skill->level == 'Expert' ? 'selected' : '' }}>Expert</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_3">
                                        <label class="form-label">Notes</label>
                                        <input type="text" name="skills[${$index}][notes]"
                                        value="{{skill->notes ?? ''}}"
                                        class="form-control"  placeholder="Enter Notes">
                                    </div>
                                <div>
                            @empty
                                <div class="skill_block">
                                    <div class="mb-3 col-md-3 question_1">
                                        <label class="form-label">Skill Category</label>
                                        <select class="form-control" name="skills[0][skill]">
                                            <option value=""></option>
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 3</option>
                                            <option value="Category 4">Category 4</option>
                                            <option value="Category 5">Category 5</option>
                                            <option value="Category 6">Category 6</option>
                                            <option value="Category 7">Category 7</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_2">
                                        <label class="form-label">Level</label>
                                        <select class="form-control" name="skills[0][level]">
                                            <option value=""></option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Expert">Expert</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3 question_3">
                                        <label class="form-label">Notes</label>
                                        <input type="text" name="skills[0][notes]"
                                        class="form-control"  placeholder="Enter Notes">
                                    </div>
                                </div>   
                            @endforelse    
                            <div class="clear"></div>
                            <button type="button" id="add_skill" class="ad_more_btn ad_more_btn_2">Add More</button>
                            <div class="clear"></div>
                            <!-- <button type="submit" class="submit_btn flot_right">Submit</button> -->
                        </div>
                        
                        <div class="mesrmnt_date mesrmnt_date_1 finger_sizes">

                            {{-- Left Thumb --}}
                            <div class="singl_higt">
                                <div class="mesrmnt_text">Left Thumb</div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Thumb Size</label>
                                    <select name="left_thumb" class="form-control">
                                        <option value="">Select Size</option>
                                        @foreach([
                                            '14.1 MM/ US 3','14.5 MM/ US 3.5','14.9 MM/ US 4','15.3 MM/ US 4.5','15.7 MM/ US 5',
                                            '16.1 MM/ US 5.5','16.5 MM/ US 6','16.9 MM/ US 6.5','17.3 MM/ US 7','17.7 MM/ US 7.5',
                                            '18.1 MM/ US 8','18.5 MM/ US 8.5','19.0 MM/ US 9','19.4 MM/ US 9.5','19.8 MM/ US 10',
                                            '20.2 MM/ US 10.5','20.6 MM/ US 11','21.0 MM/ US 11.5','21.4 MM/ US 12','21.8 MM/ US 12.5',
                                            '22.2 MM/ US 13','22.6 MM/ US 13.5'
                                        ] as $size)
                                            <option value="{{ $size }}">{{ $size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Right Thumb --}}
                            <div class="singl_higt">
                                <div class="mesrmnt_text">Right Thumb</div>
                                <div class="mb-3 col-md-3">
                                    <label class="form-label">Thumb Size</label>
                                    <select name="right_thumb" class="form-control">
                                        <option value="">Select Size</option>
                                        @foreach([
                                            '14.1 MM/ US 3','14.5 MM/ US 3.5','14.9 MM/ US 4','15.3 MM/ US 4.5','15.7 MM/ US 5',
                                            '16.1 MM/ US 5.5','16.5 MM/ US 6','16.9 MM/ US 6.5','17.3 MM/ US 7','17.7 MM/ US 7.5',
                                            '18.1 MM/ US 8','18.5 MM/ US 8.5','19.0 MM/ US 9','19.4 MM/ US 9.5','19.8 MM/ US 10',
                                            '20.2 MM/ US 10.5','20.6 MM/ US 11','21.0 MM/ US 11.5','21.4 MM/ US 12','21.8 MM/ US 12.5',
                                            '22.2 MM/ US 13','22.6 MM/ US 13.5'
                                        ] as $size)
                                            <option value="{{ $size }}">{{ $size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Repeat for other fingers --}}
                            @php
                                $fingers = [
                                    'index' => 'Index finger',
                                    'middle' => 'Middle finger',
                                    'ring' => 'Ring finger',
                                    'little' => 'Little finger'
                                ];
                            @endphp

                            @foreach($fingers as $key => $label)
                                <div class="singl_higt">
                                    <div class="mesrmnt_text">Left {{ $label }}</div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label">{{ $label }} Size</label>
                                        <select name="left_{{ $key }}" class="form-control">
                                            <option value="">Select Size</option>
                                            @foreach([
                                                '14.1 MM/ US 3','14.5 MM/ US 3.5','14.9 MM/ US 4','15.3 MM/ US 4.5','15.7 MM/ US 5',
                                                '16.1 MM/ US 5.5','16.5 MM/ US 6','16.9 MM/ US 6.5','17.3 MM/ US 7','17.7 MM/ US 7.5',
                                                '18.1 MM/ US 8','18.5 MM/ US 8.5','19.0 MM/ US 9','19.4 MM/ US 9.5','19.8 MM/ US 10',
                                                '20.2 MM/ US 10.5','20.6 MM/ US 11','21.0 MM/ US 11.5','21.4 MM/ US 12','21.8 MM/ US 12.5',
                                                '22.2 MM/ US 13','22.6 MM/ US 13.5'
                                            ] as $size)
                                                <option value="{{ $size }}">{{ $size }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="singl_higt">
                                    <div class="mesrmnt_text">Right {{ $label }}</div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label">{{ $label }} Size</label>
                                        <select name="right_{{ $key }}" class="form-control">
                                            <option value="">Select Size</option>
                                            @foreach([
                                                '14.1 MM/ US 3','14.5 MM/ US 3.5','14.9 MM/ US 4','15.3 MM/ US 4.5','15.7 MM/ US 5',
                                                '16.1 MM/ US 5.5','16.5 MM/ US 6','16.9 MM/ US 6.5','17.3 MM/ US 7','17.7 MM/ US 7.5',
                                                '18.1 MM/ US 8','18.5 MM/ US 8.5','19.0 MM/ US 9','19.4 MM/ US 9.5','19.8 MM/ US 10',
                                                '20.2 MM/ US 10.5','20.6 MM/ US 11','21.0 MM/ US 11.5','21.4 MM/ US 12','21.8 MM/ US 12.5',
                                                '22.2 MM/ US 13','22.6 MM/ US 13.5'
                                            ] as $size)
                                                <option value="{{ $size }}">{{ $size }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endforeach

                            <button type="submit" class="submit_btn flot_right">Submit</button>

                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="clear"></div>