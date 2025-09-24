<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 ">

<x-head></x-head>

<body class="h-full scrollbar-custom">
    <div class="min-h-full">

        <x-navbar.visitor />
        <main class="pt-10 bg-white dark:bg-gray-900">
            <div class="mx-auto pt-6">

                <x-ui.alert></x-ui.alert>

                {{ $slot }}
            </div>
        </main>

        <x-footer></x-footer>

</body>

{{-- @vite('resources/js/app.js') --}}


</html>
