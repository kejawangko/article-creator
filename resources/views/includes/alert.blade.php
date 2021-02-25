@if( session('success') || session('failed'))
    <div class="alert
        @if (session('success')) alert-success
        @elseif (session('failed')) alert-danger @endif
        alert-dismissible fade show">
        @if (session('success')) {{ session('success') }}
        @elseif (session('failed')) {{ session('failed') }} @endif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif