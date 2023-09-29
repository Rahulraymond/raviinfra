<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="{{ asset(public/assets/img/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
    <link rel="stylesheet" href="{{asset("public/css/libraries.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/style.css")}}">
    @stack('css')
    @livewireStyles
</head>

<body>
    <div class="wrapper">
        {{-- include header --}}
        @include('frontend.header.index')

        @if (session()->has('message'))
            <div class="alert alert-success mb-0">
                {{ session('message') }}
            </div>
        @endif

        @yield('content')

        @include('frontend.footer.index')
    </div>

    {{-- include livewire grievances from livewire --}}
    <livewire:grievances />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('js')
    <script src="{{ asset(public/js/jquery-3.5.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
    <script src="{{ asset(public/js/plugins.js') }}"></script>
    <script src="{{ asset(public/js/main.js') }}"></script>
    <script>
        window.addEventListener('closeModal', event => {
            $("#formplay").modal('hide');
            $("#grievances").show();
        })
    </script>
     @stack('sliders')
    @livewireScripts
</body>

</html>
