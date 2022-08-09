@extends('admin.layout')
@section('title', __('titles.edit').' | '.__('titles.categories'))
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">{{__('admin.add')}}</h6>
        </div>
        <div class="card-body">
            <div class="col-md-6 offset-md-3">
                <form class="user" method="POST" action="{{ route('project-category.update', $item->id) }}" enctype="multipart/form-data">
                    @include('admin.flash')
                    @method('PUT')

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
                                               name="title[{{$locale['code']}}]" value="{{$item->getTranslation('title', $locale['code'])}}"
                                               placeholder="{{__('admin.title')}} ({{$locale['code']}})" >
                                        @error('title.'.$locale['code'])
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
                                <option value="1" {{selected($item->status_id,'1')}}>{{__('admin.status_id_1')}}</option>
                                <option value="0" {{selected($item->status_id,'0')}}>{{__('admin.status_id_0')}}</option>
                            </select>
                        </div>
                    </div>

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
