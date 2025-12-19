 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Azan - @yield('title', 'website')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Azan</h1>
        </header>
        <nav>
            <a href="/">Home</a>
            <a href="/about-us">About</a>
            <a href="/post">Post</a>
        </nav>
        <main>
            <article>
                @hasSection ('content')
                    @yield('content')
                @else
                    <h2>NO contant found. </h2>
                @endif
            </article>
            <aside>
                @section('sidebar')
                   <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-us">About</a></li>
                    <li><a href="/post">Post</a></li>
                </ul>
               @show
            </aside>
        </main>
        <footer>Azan@copyright 2025.</footer>
    </div>

    @stack('scripts')


</body>
</html> 