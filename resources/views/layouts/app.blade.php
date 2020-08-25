@include('partials.headcontent')
<body>
    <div id="app">
    @include('partials.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
