@if (session()->has('success'))
    <script>
        Swal.fire(
        'Success!',
        "{{ session('success') }}",
        'success'
        )
    </script>

@elseif(session()->has('error'))
    <script>
        Swal.fire(
        'Error!',
        "{{ session('error') }}",
        'error'
        )
    </script>

@elseif(session()->has('warning'))
    <script>
        Swal.fire(
        'Warning!',
        "{{ session('warning') }}",
        'warning'
        )
    </script>

@elseif(session()->has('info'))
    <script>
        Swal.fire(
        'Info!',
        "{{ session('info') }}",
        'info'
        )
    </script>

@endif