@extends('admin.layout')
@section('title', __('titles.add').' | '.__('titles.projects'))
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">{{__('admin.add')}}</h6>
        </div>
        <div class="card-body">
            <div class="col-md-6 offset-md-3">
                <form class="user form" method="POST" action="{{ route('project-category.store') }}" enctype="multipart/form-data">
                    @include('admin.flash')


                    @csrf

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @foreach (Config::get('global.langs') as $locale)
                            <li class="nav-item">
                                <a class="nav-link {{ ($locale['code'] == 'en') ? 'active': '' }}" id="pills-tab-{{ $locale['code'] }}"
                                   data-toggle="pill" href="#pills-{{ $locale['code'] }}" role="tab"
                                   aria-controls="pills-{{ $locale['code'] }}" aria-selected="true">{{ $locale['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                        @foreach (Config::get('global.langs') as $locale)
                            <div class="tab-pane fade show {{ ($locale['code'] == 'en') ? 'active': '' }}" id="pills-{{ $locale['code'] }}"
                                 role="tabpanel" aria-labelledby="pills-tab-{{ $locale['code'] }}">

                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="title">{{__('admin.title')}}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="title_{{$locale['code']}}" type="text" class="form-control @error('title.'.$locale['code']) is-invalid @enderror"
                                               name="title[{{$locale['code']}}]" value="{{ old('title.'.$locale['code'])}}"
                                               placeholder="{{__('admin.title')}} ({{$locale['code']}})" >
                                        @error('title.'.$locale['code'])
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="title">{{__('admin.description')}}</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea  placeholder="{{__('admin.description')}} ({{$locale['code']}})" id="description_{{$locale['code']}}" rows="5" class="form-control @error('description.'.$locale['code']) is-invalid @enderror" name="description[{{$locale['code']}}]">{{ old('description.'.$locale['code'])}}</textarea>

                                        @error('description.'.$locale['code'])
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>


                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="status_id">{{__('admin.status')}}</label>
                        </div>
                        <div class="col-md-10">
                            <select name="status_id" id="status_id" class="form-control">
                                <option value="1" {{selected(old('status_id'),'1')}}>{{__('admin.status_id_1')}}</option>
                                <option value="0" {{selected(old('status_id'),'0')}}>{{__('admin.status_id_0')}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="status_id">{{__('admin.category')}}</label>
                        </div>
                        <div class="col-md-10">
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="0" {{selected(old('category_id'),'0')}}>{{__('admin.not_selected')}}</option>
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}" {{selected(old('category_id'),$cat->id)}}>{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="domain">{{__('admin.domain')}}</label>
                        </div>
                        <div class="col-md-10">
                            <input id="domain" type="text" class="form-control @error('domain') is-invalid @enderror"
                                   name="domain" value="{{ old('domain')}}"
                                   placeholder="{{__('admin.domain')}}" >
                            @error('domain')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="background">{{__('admin.background')}}</label>
                        </div>
                        <div class="col-md-10">
                            <input id="background" type="text" class="form-control @error('background') is-invalid @enderror"
                                   name="background" value="{{ old('background')}}"
                                   placeholder="{{__('admin.background')}}" >
                            @error('background')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="delivery_date">{{__('admin.delivery_date')}}</label>
                        </div>
                        <div class="col-md-10">
                            <input id="delivery_date" type="date" class="form-control @error('delivery_date') is-invalid @enderror"
                                   name="delivery_date" value="{{ old('delivery_date')}}"
                                   placeholder="{{__('admin.delivery_date')}}" >
                            @error('delivery_date')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="image_index">{{__('admin.image_index_project')}}</label>
                        </div>
                        <div class="col-md-10">

                            <input class="m-image" type="hidden" name="image_index">
                            <div id="image_index" class="fallback dropzone"></div>



                            @error('image_index')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="image_main">{{__('admin.image_main_project')}}</label>
                        </div>
                        <div class="col-md-10">

                            <input class="m-image2" type="hidden" name="image_main">
                            <div id="image_main" class="fallback dropzone"></div>

                            @error('image_main')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="gallery">{{__('admin.gallery')}}</label>
                        </div>
                        <div class="col-md-10">

                            <input class="m-image3" type="hidden" name="gallery[]">
                            <div id="gallery" class="fallback dropzone"></div>

                            @error('gallery')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <input class="uid" name="uid" type="hidden" value="<?=rand(9999, 9999999); ?>">

                    <div class="d-flex justify-content-center">

                    <button type="submit" class="btn btn-primary " id="submit_btn">
                        {{ __('admin.save') }}
                    </button>
                    </div>
                </form>


            </div>

        </div>
    </div>


@endsection

@section('css')
    <link href="{{asset('/back/vendor/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css"/>

    @endsection


@section('js')

    <script src="{{asset('/back/vendor/dropzone/dist/dropzone.js')}}"></script>

    <script>
        var galleryitems = [];

        Dropzone.autoDiscover = false;

        var image_index = new Dropzone("#image_index", {

            url: "{{route('file.store')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            paramName: "image_index",
            timeout: 180000,
            addRemoveLinks: true,
            hiddenInputContainer: ".form",
            maxFiles: 1,
            dictRemoveFile: "Şəkli sil",
            dictCancelUpload: "Yükləməni dayandır",
            dictDefaultMessage: "Şəkli sürüşdürüb buraxın və ya Seçin",
            dictMaxFilesExceeded: "Əlavə şəkil yükləyə bilməzsiniz",

            removedfile: function(file) {
                file.previewElement.remove();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'POST',
                    url: '{{route('files.delete')}}',
                    data: {'add' : 'addform', 'uid' : $('.uid').val(), 'm_image' : $('.m-image').val()}
                });
                $('.m-image').val('');
            },

            success: function(response){
                $('.m-image').val(response.xhr.response)
            },

        });


        image_index.on('maxfilesreached', function() {
            image_index.removeEventListeners();
        });
        image_index.on('sending', function(file, xhr, formData){
            formData.append('uid', $('.uid').val());
        });
        image_index.on('removedfile', function (file) {
            image_index.setupEventListeners();
        });



        var image_main = new Dropzone("#image_main", {

            url: "{{route('file.store')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            paramName: "image_main",
            timeout: 180000,
            addRemoveLinks: true,
            hiddenInputContainer: ".form",
            maxFiles: 1,
            dictRemoveFile: "Şəkli sil",
            dictCancelUpload: "Yükləməni dayandır",
            dictDefaultMessage: "Şəkli sürüşdürüb buraxın və ya Seçin",
            dictMaxFilesExceeded: "Əlavə şəkil yükləyə bilməzsiniz",

            removedfile: function(file) {
                file.previewElement.remove();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'POST',
                    url: '{{route('files.delete')}}',
                    data: {'add' : 'addform', 'uid' : $('.uid').val(), 'm_image2' : $('.m-image2').val()}
                });
                $('.m-image2').val('');
            },

            success: function(response){
                $('.m-image2').val(response.xhr.response)
            },

        });

        image_main.on('maxfilesreached', function() {
            image_main.removeEventListeners();
        });
        image_main.on('sending', function(file, xhr, formData){
            formData.append('uid', $('.uid').val());
        });
        image_main.on('removedfile', function (file) {
            image_main.setupEventListeners();
        });

        var gallery = new Dropzone("div#gallery", {

            url: "{{route('file.store')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            paramName: "gallery[]",
            uploadMultiple: true,
            parallelUploads: 20,
            timeout: 180000,
            addRemoveLinks: true,
            hiddenInputContainer: ".form",
            dictRemoveFile: "Şəkli sil",
            dictCancelUpload: "Yükləməni dayandır",
            dictDefaultMessage: "Şəkli sürüşdürüb buraxın və ya Seçin",
            dictMaxFilesExceeded: "Əlavə şəkil yükləyə bilməzsiniz",

            removedfile: function(file) {
                file.previewElement.remove();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    type: 'POST',
                    url: '{{route('files.delete')}}',
                    data: {'add' : 'addform', 'uid' : $('.uid').val(), 'm_image3' : file.name}
                });
                galleryitems = jQuery.grep(galleryitems, function(value) {
                    return value != file.name;
                });
                $('.m-image3').val(galleryitems);
            },

            successmultiple: function(file){
                $.each(file, function(index){
                    galleryitems = galleryitems.concat(file[index].name);
                })
                $('.m-image3').val(galleryitems);
            },

        });

        gallery.on('sending', function(file, xhr, formData){
            formData.append('uid', $('.uid').val());
        });
        gallery.on('removedfile', function (file) {
            gallery.setupEventListeners();
        });

    </script>

@endsection
