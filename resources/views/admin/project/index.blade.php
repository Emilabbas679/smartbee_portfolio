@extends('admin.layout')
@section('title',__('titles.categories'))
@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary"> {{__('titles.categories')}}</h6>
            <a href="{{ route('project-category.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus text-white-50"></i> {{__('admin.add')}}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @include('admin.flash')
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{__('admin.title')}}</th>
                        <th>{{__('admin.slug')}}</th>
                        <th>{{__('admin.status')}}</th>
                        <th>{{__('admin.created')}}</th>
                        <th>{{__('admin.updated')}}</th>
                        <th>{{__('admin.operations')}}</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>{{__('admin.title')}}</th>
                        <th>{{__('admin.slug')}}</th>
                        <th>{{__('admin.status')}}</th>
                        <th>{{__('admin.created')}}</th>
                        <th>{{__('admin.updated')}}</th>
                        <th>{{__('admin.operations')}}</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{__('admin.status_id_'.$item->status_id)}}</td>
                            <td>{{date('d.m.Y', strtotime($item->created_at))}}</td>
                            <td>{{date('d.m.Y', strtotime($item->updated_at))}}</td>
                            <td>

                                <form id="delete-form" action="{{ route('project-category.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary btn-circle btn-sm" href="{{ route('project-category.edit', $item->id) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
