<html>
    <head>
        <title>Restaurant</title>
        @include('layouts.links')
    </head>
    <body>
        <div class="grid-container">
            <div class="navbar">
                @include('layouts.navbar')
            </div>
    
            <div class="content">
                @yield('content')
            </div>
    
            <div class="footer">
                @include('layouts.footer')
            </div>
        </div>
    </body>
</html>