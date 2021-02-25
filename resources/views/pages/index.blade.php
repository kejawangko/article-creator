@extends('layouts.app')

@section('content')
<div id="wrapper">
    @include('includes.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('includes.navbar')
            <div class="container-fluid">
                {{ Breadcrumbs::render('articles') }}
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-uppercase text-gray-900">Events</h6>
                                <div class="dropdown no-arrow">
                                    <a href="{{ route('admin.events') }}">
                                        See All
                                    </a>
                                </div>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Upcoming
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Ongoing
                                </span>
                            </div>
                            <div class="card-body">
                                @if(count($events) < 1)
                                No event
                                @endif
                                @foreach ($events as $event)
                                    <div class="card @if($event->status === 'UPCOMING') border-left-primary @elseif($event->status === 'ONGOING') border-left-success @endif shadow mb-3">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a class="text-xs font-weight-bold text-primary text-uppercase mb-1" href="{{ route('admin.events.detail', ['id' => $event->id]) }}">{{ $event->location }}, {{ date('d F Y', strtotime($event->start_date)) }}</a>
                                                    <div class="text-xs mb-0 text-gray-800">Event {{ $event->playgrounds->name }}</div>
                                                </div>
                                                <div class="col-auto text-center">
                                                    <div class="text-xs font-weight-bold text-uppercase mb-1"><small>participants</small></div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $event->parents_count }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@endsection