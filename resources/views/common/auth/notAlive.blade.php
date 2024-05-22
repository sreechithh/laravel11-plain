@extends("admin.layouts.master")
@section("title")
    Not Alive
@endsection
@section("content")
    <script>
        let blockReason = "{{config('settings.shopBlockReason')}}";
        Swal.fire({
            title: 'Blocked! Contact Admin for more info.',
            text: blockReason,
            icon: 'error',
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
        })
    </script>
@endsection