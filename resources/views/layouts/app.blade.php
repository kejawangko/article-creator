<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Article Creator</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <style>
        .dataTables_filter, .dataTables_paginate {
            float: right;
        }

        .dataTables_filter input {
            margin-left: 10px;
        }

        .dataTables_length label, .dataTables_filter label {
            display: inline-flex;
        }

        .dataTables_length select.custom-select {
            margin-left: 10px;
            margin-right: 10px;
        }

        th, td, button, a, input, .page-link, .breadcrumb-item {
            font-size: 10pt !important
        }
    </style>

</head>

<body class="@guest bg-gradient-primary @else page-top @endguest">
    @yield('content')
</body>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

<script>
    function spinnerOnClick(obj,dbFunction,duration){
        obj.addClass('loading');
        setTimeout(function() {
            dbFunction(obj);
            obj.removeClass('loading');
        }, duration);  
    }

    $('body').on('keypress', '.modal-input-search',function(e) {
        if(e.which == 13) {
            $('.modal-btn-search').click();
        }
    });

    $('body').on('click', '.modal-btn-search', function () {
        spinnerOnClick($(this),searchNameModal,1000);
    });

    function searchNameModal(obj){
        // do db work here
        var username = $('.modal-input-search').val();
        var type = $('.modal-type-search').val();
        
        $.ajax({
            url: "{{ url('admin-panel/search?name=') }}"+username+"&type="+type,
            method: 'get',
            success: function(result) {
                console.log(result);
                // show table
                $('.search-result-table tbody').html(result.users)
                $('.search-result-table').removeClass('d-none');

                // refocus on input
                $('.search-by-username-modal-input').focus();      
            },
            complete: function (data) {
                obj.removeClass('loading');
            }
        })
    }
</script>

<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('.dataTable').DataTable();
    });
</script>

@yield('script')

</html>