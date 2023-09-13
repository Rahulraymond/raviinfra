<script>
    @if (session('error'))
        iziToast.error({
            title: 'Error!',
            message: "{{ session('error') }}",
            position: 'topRight'
        });
    @endif

    @if (session('message'))
        iziToast.success({
            title: 'Great',
            message: '{{ session('message') }}',
            position: 'topRight'
        });
    @endif
</script>
