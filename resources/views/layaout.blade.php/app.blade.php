<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'sewamotor')
    </title>

    @vite(['resources/css/app.css'])
</head>

<body>

    <!-- HEADER + NAVBAR -->
    <header class="header">
        <div class="container navbar">

            <a href="{{ route('home') }}" class="brand">
                <div class="brand-icon">
                    
                </div>

                <div>
                    <h1> Library</span>
                </div>
            </a>

            <nav class="nav-menu">

                <a
                    href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('sewa.index') }}"
                    class="{{ request()->routeIs('swa.*') ? 'active' : '' }}"
                >
                    Daftar sewa
                </a>

            </nav>

        </div>
    </header>


    <!-- KONTEN -->
    <main>
        @yield('content')
    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <div class="container footer-content">

            <div>
                <h3>sewa motor</h3>
                <p>
                    Temukan berbagai motor dan pengetahuan
                    dalam satu tempat.
                </p>
            </div>

            <div class="footer-right">
                <p>&copy; {{ date('Y') }}sewamotor</p>
                <p>Laravel 13 • uts</p>
            </div>

        </div>

    </footer>

</body>
</html>