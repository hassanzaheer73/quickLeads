<!DOCTYPE html>
<html class="no-js" lang="en">
    @include('layouts.head')
    <body>
        @include('layouts.headers.simple')
        @include('layouts.aside')
            @yield('content')
        @include('layouts.footer')
        @include('layouts.scripts')
    </body>
    @yield('scripts')
</html>