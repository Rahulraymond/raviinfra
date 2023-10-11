<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('public/assets/img/Kshipra-Icon-Logo.png') }}" rel="icon">
    <title>@yield('title')</title>

    {{-- chart google js --}}
    @include('include.css')
</head>

<body>
    <div id="app" class="main-wrapper">

        @include('include.sidebar')
        
        <div class="page-wrapper">
        
            @include('include.header')
        
            <div class="page-content">
        
                
        
                @yield("content")
        
            </div>
        
            @include('include.footer')
        
        </div>
    
    </div>
    
    @include('include.js')
    @include('include.error')   
</body>

</html>
