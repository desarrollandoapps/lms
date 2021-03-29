<div class="wrapper">
    @include('layouts.navbars.sidebar')
    <div class="mail-panel">
        @include('layouts.navbars.navs.auth')
        @yield('content')
        @include('layouts.footers.auth')
    </div>
</div>