<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        .btn {
            @apply font-bold py-2 px-4 rounded m-2 cursor-pointer;
        }
        .btn-blue {
            @apply bg-blue-500 text-white;
        }
        .btn-blue:hover {
            @apply bg-blue-700;
        }

        .btn-red {
            @apply bg-red-500 text-white;
        }
        .btn-red:hover {
            @apply bg-red-700;
        }

        .btn-yellow {
            @apply bg-yellow-500 text-white;
        }
        .btn-yellow:hover {
            @apply bg-yellow-700;
        }
        table{
            @apply min-w-full bg-white border border-gray-300;
        }
        th,td {
            @apply py-1 px-1 text-center border border-gray-300;
        }
        thead tr{
            @apply bg-gray-200 text-gray-600 uppercase text-sm leading-normal;
        }
    </style>
</head>
<body>
    @include('includes.navbar')
    <section class="max-w-screen-xl mx-auto p-4">
    @yield('content')
    </section>
    @include('includes.footer')
</body>
</html>
