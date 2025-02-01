<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Festival</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap4.0.0.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    @livewireStyles
</head>

<body>

@livewire('test-festival')

<script src="{{ asset('assets/js/jquery.js') }}"></script>

<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}",
            }
        })
        $('[data-bs-toggle="tooltip"]').tooltip();

    })

</script>
@livewireScripts
</body>

</html>
