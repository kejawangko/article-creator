@extends('layouts.app')

@section('content')
<div id="wrapper">
    @include('includes.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('includes.navbar')
            <div class="container-fluid">
                @include('includes.alert')
                {{ Breadcrumbs::render('articles') }}
                <div class="row py-3 bg-white">
                    <div class="col-lg-12 mb-4">
                        <a class="btn btn-primary text-light" href="{{ route('articles.create') }}">
                            Create
                        </a>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="table-responsive">
                            <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="25%">Title</th>
                                        <th width="10%">Author</th>
                                        <th width="10%">Updated By</th>
                                        <th width="10%">Created At</th>
                                        <th width="10%">Updated At</th>
                                        <th width="10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $key => $item)
                                        <tr class="header">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ ucwords(strtolower($item->created_by_user->name)) }}</td>
                                            <td>{{ $item->updated_by_user ? ucwords(strtolower($item->updated_by_user->name)) : '-' }}</td>
                                            <td>{{ date('d F Y, H:i', strtotime($item->created_at)) }}</td>
                                            <td>{{ date('d F Y, H:i', strtotime($item->updated_at)) }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('articles.edit', ['id' => $item->id]) }}" class="btn btn-warning" style="color: white">
                                                    <span class="fas fa-edit" title="edit"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@endsection

@section('script')
<script>
    
</script>
@endsection