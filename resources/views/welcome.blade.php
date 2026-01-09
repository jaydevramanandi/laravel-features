<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel Features') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50 text-gray-800 antialiased">

    <!-- Navigation -->
    <nav class="bg-white border-b shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-900">
                Laravel Features
            </a>

            <div class="flex items-center gap-4">
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="px-4 py-2 text-sm font-medium rounded-md border border-gray-300 hover:bg-gray-100 transition">
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="px-4 py-2 text-sm font-medium rounded-md border border-gray-300 hover:bg-gray-100 transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 transition">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col items-center justify-center text-center px-6 py-24">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
            Laravel Features Playground
        </h1>

        <p class="max-w-2xl text-lg text-gray-600 mb-10">
            A hands-on Laravel project demonstrating authentication, events, jobs,
            queues, notifications, scheduling, caching, and more —
            built step by step using best practices.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            @guest
                <a href="{{ route('register') }}"
                   class="px-8 py-3 text-base font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">
                    Get Started
                </a>

                <a href="{{ route('login') }}"
                   class="px-8 py-3 text-base font-semibold rounded-lg border border-gray-300 hover:bg-gray-100 transition">
                    Login
                </a>
            @else
                <a href="{{ route('dashboard') }}"
                   class="px-8 py-3 text-base font-semibold text-white bg-green-600 rounded-lg hover:bg-green-700 transition">
                    Go to Dashboard
                </a>
            @endguest
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">
                Features Covered
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 border rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-2">Authentication</h3>
                    <p class="text-gray-600">
                        Secure login and registration using Laravel Breeze.
                    </p>
                </div>

                <div class="p-6 border rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-2">Jobs & Queues</h3>
                    <p class="text-gray-600">
                        Background processing using database or Redis queues.
                    </p>
                </div>

                <div class="p-6 border rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-2">Events & Listeners</h3>
                    <p class="text-gray-600">
                        Decoupled, event-driven application architecture.
                    </p>
                </div>

                <div class="p-6 border rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-2">Notifications</h3>
                    <p class="text-gray-600">
                        Email and database notifications with queue support.
                    </p>
                </div>

                <div class="p-6 border rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-2">Task Scheduling</h3>
                    <p class="text-gray-600">
                        Automated background jobs using Laravel scheduler.
                    </p>
                </div>

                <div class="p-6 border rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-2">API & Security</h3>
                    <p class="text-gray-600">
                        API authentication, policies, and best practices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 py-6">
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
            © {{ date('Y') }} Laravel Features. Built with ❤️ using Laravel.
        </div>
    </footer>

</body>
</html>