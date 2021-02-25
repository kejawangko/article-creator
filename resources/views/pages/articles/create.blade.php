@extends('layouts.app')

@section('content')
<style>
    #imgpreview {
        margin-top: 20px;
        display: none;
    }
</style>
<div id="wrapper">
    @include('includes.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('includes.navbar')
            <div class="container-fluid">
                @include('includes.alert')
                {{ Breadcrumbs::render('add-articles') }}
                <div class="row py-3">
                    <div class="col-lg-12 py-3 bg-white">
                        <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="content">Description</label>
                                    <textarea rows="10" name="content" id="content_desc" class="form-control">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <button class="btn btn-block btn-primary">
                                        Submit
                                    </button>
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <a href="{{ route('articles') }}" class="btn btn-block btn-secondary">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
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
    CKEDITOR.replace( 'content_desc' );
</script>
@endsection