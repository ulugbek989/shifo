<!doctype html>
<html lang="en">

    @include('admin.classes.head')

@livewireStyles
    <body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    @include('admin.classes.header')
    <div class="main-container">
        @include('admin.classes.sidebar')

        @yield('content')

    </div>
</div>

@include('admin.classes.script')
</body>
</html>
