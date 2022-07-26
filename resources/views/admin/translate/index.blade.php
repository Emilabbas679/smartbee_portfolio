@extends('admin.layout')
@section('title', _('admin.translations'))
@section('content')
    <style type="text/css">
        textarea {
            padding: 10px;
            width: 100%;
            border-color: #e4e4e4;
            resize: vertical;
        }

        textarea[readonly=readonly] {
            padding: 10px;
            border-color: #fff;
            resize: none;
        }



        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: .85rem;
            color: #858796;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e3e6f0;
            border-radius: .35rem
        }

        .dropdown-menu-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-right {
            right: 0;
            left: auto
        }

        @media (min-width:576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0
            }
            .dropdown-menu-sm-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0
            }
            .dropdown-menu-md-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0
            }
            .dropdown-menu-lg-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0
            }
            .dropdown-menu-xl-right {
                right: 0;
                left: auto
            }
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: .125rem
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: 0;
            border-right: .3em solid transparent;
            border-bottom: .3em solid;
            border-left: .3em solid transparent
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: .125rem
        }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid
        }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropright .dropdown-toggle::after {
            vertical-align: 0
        }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: .125rem
        }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: ""
        }

        .dropleft .dropdown-toggle::after {
            display: none
        }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: .3em solid;
            border-bottom: .3em solid transparent
        }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0
        }

        .dropdown-menu[x-placement^=bottom],
        .dropdown-menu[x-placement^=left],
        .dropdown-menu[x-placement^=right],
        .dropdown-menu[x-placement^=top] {
            right: auto;
            bottom: auto
        }

        .dropdown-divider {
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #eaecf4
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #3a3b45;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #2e2f37;
            text-decoration: none;
            background-color: #f8f9fc
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #4e73df
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #858796;
            pointer-events: none;
            background-color: transparent
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            display: block;
            padding: .5rem 1.5rem;
            margin-bottom: 0;
            font-size: .875rem;
            color: #858796;
            white-space: nowrap
        }

        .dropdown-item-text {
            display: block;
            padding: .25rem 1.5rem;
            color: #3a3b45
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            position: relative;
            flex: 1 1 auto
        }

        .btn-group-vertical>.btn:hover,
        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus {
            z-index: 1
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group>.btn-group:not(:first-child),
        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .dropdown-toggle-split {
            padding-right: .5625rem;
            padding-left: .5625rem
        }

        .dropdown-toggle-split::after,
        .dropright .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle-split::before {
            margin-right: 0
        }

        .btn-group-sm>.btn+.dropdown-toggle-split,
        .btn-sm+.dropdown-toggle-split {
            padding-right: .375rem;
            padding-left: .375rem
        }

        .btn-group-lg>.btn+.dropdown-toggle-split,
        .btn-lg+.dropdown-toggle-split {
            padding-right: .75rem;
            padding-left: .75rem
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%
        }

        .btn-group-vertical>.btn-group:not(:first-child),
        .btn-group-vertical>.btn:not(:first-child) {
            margin-top: -1px
        }

        .btn-group-vertical>.btn-group:not(:last-child)>.btn,
        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child)>.btn,
        .btn-group-vertical>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group-toggle>.btn,
        .btn-group-toggle>.btn-group>.btn {
            margin-bottom: 0
        }

        .btn-group-toggle>.btn input[type=checkbox],
        .btn-group-toggle>.btn input[type=radio],
        .btn-group-toggle>.btn-group>.btn input[type=checkbox],
        .btn-group-toggle>.btn-group>.btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%
        }





    </style>
    @csrf


    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="air__utils__heading">
                <h5>
                    <span class="mr-3">Translate</span>

                    <div class="dropdown d-inline-block mb-2 mr-2">
                        <button type="button"
                                class="btn btn-sm btn-light dropdown-toggle"
                                data-toggle="dropdown"
                                aria-expanded="false">
                            {{$file}}
                        </button>
                        <div class="dropdown-menu"
                             role="menu"
                             x-placement="bottom-start"
                             style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                            @foreach($files as $f)
                                <?php if ($f == $file) continue; ?>
                                <a class="dropdown-item"
                                   href="{{url('/admin/translate?file='.$f)}}"><div style="font-size: 15px">{{$f}}</div></a>
                            @endforeach
                        </div>
                    </div>


                    <button type="button"
                            class="btn btn-sm btn-primary ml-2"
                            onclick="cloneRow()"><i class="fe fe-plus"></i> Add Row</button>
                    <button type="button"
                            class="btn btn-sm btn-secondary ml-2"
                            data-toggle="modal"
                            data-target="#fileCreateModal"><i class="fe fe-plus"></i> Add File</button>
                    <div class="modal fade"
                         id="fileCreateModal"
                         tabindex="-1"
                         role="dialog"
                         aria-labelledby="exampleModalLabel"
                         style="display: none;"
                         aria-hidden="true">
                        <div class="modal-dialog"
                             role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"
                                        id="exampleModalLabel">Create Translation File</h5>
                                    <button type="button"
                                            class="close"
                                            data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <strong>Please use only file name not extension (ex. use general not general.php)</strong>
                                    <form id="formInput"
                                          method="post"
                                          action="/admin/translate/create">
                                        @csrf
                                        <input type="text"
                                               name="filename"
                                               class="form-control"
                                               id="filename"
                                               required />
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                            class="btn btn-light"
                                            data-dismiss="modal">Close</button>
                                    <button type="button"
                                            class="btn btn-primary"
                                            onClick="return sendModalCreateFile();">Create File</button>
                                </div>

                                <script>
                                    function sendModalCreateFile(e) {
                                        if(document.getElementById('filename').value !== '') {
                                            document.getElementById('formInput').submit();
                                            return true;
                                        } else {
                                            $('#filename').focus()
                                            alert("Filename needed");
                                            return false;

                                        }
                                    }
                                </script>

                            </div>
                        </div>
                    </div>

                    <button type="button"
                            class="btn btn-success float-right"
                            onclick="$('#form').submit()"><i class="fe fe-save"></i> Save</button>
                </h5>

                @if(session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-5">
                                <form action
                                      method="post"
                                      id="form">
                                    @csrf
                                    <table class="table table-hover nowrap"
                                           id="items">
                                        <thead>
                                        <tr>
                                            <th>key</th>
                                            <th>Azərbaycanca</th>
                                            <th>English</th>
                                            <th>Русский</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php unset($languages[config('app.fallback_locale')]); ?>

                                        @foreach($lang[config('app.fallback_locale')] as $key => $value)
                                            <tr>
                                                <td><textarea
                                                              name="key[]">{{$key}}</textarea></td>
                                                <td><textarea name="{{config('app.fallback_locale')}}[]">{{$value}}</textarea></td>
                                                @foreach ($languages as $k => $v)
                                                    <td><textarea name="{{$k}}[]">{{$lang[$k][$key]}}</textarea></td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //var DataTable = $('#items').DataTable({paging: false});
        function cloneRow() {
            var row = $('tbody tr:first').clone();

            row.find("textarea").val("");
            row.find("textarea").removeAttr("readonly");
            $("tbody").prepend(row);
        }
    </script>

@endsection
