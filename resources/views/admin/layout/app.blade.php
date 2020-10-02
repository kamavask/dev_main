<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body>

    @include('admin.layout.navbar')
    @include('admin.layout.right_sidebar')
    @yield('content')
    

    @include('admin.layout.footer')

   @include('admin.layout.scripts')
</body>
</html>