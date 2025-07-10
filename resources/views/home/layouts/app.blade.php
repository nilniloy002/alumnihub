<!DOCTYPE html>
<html lang="en">
    @include('home.layouts.head')
    
    <body class="font-sans bg-gray-50">
        @yield('content')
        
        @include('home.layouts.footer')
        
        @stack('scripts')
    </body>
</html>