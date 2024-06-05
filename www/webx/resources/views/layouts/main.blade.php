<!doctype html>
<html lang="en">

@include('partials.head')

<body>

    @include('partials.header')
    @include('partials.sidebar')


    <main id="main" class="main">
        <section class="section dashboard">
            @yield('container')
        </section>
    </main>
    @include('partials.footer')

</body>

</html>
