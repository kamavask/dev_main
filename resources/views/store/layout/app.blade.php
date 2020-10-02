<!DOCTYPE html>
<html lang="en">
@include('store.layout.head')
<body>

    @include('store.layout.icon_bar')
   @include('store.layout.category_model')
    @include('store.layout.search_model')
    @include('store.layout.cart_sidebar')
    @include('store.layout.header')
    
   

    @yield('content')

    @include('store.layout.footer')
    @include('store.layout.scripts')
</body>
