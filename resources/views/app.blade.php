<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.cdnfonts.com/css/jolly-lodger" rel="stylesheet">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

    </head>
    <body background="{{url('bg.jpg')}}" class="bg-repeat md:bg-no-repeat md:bg-cover   print:bg-transparent dark:bg-zinc-900 ">
    <nav class="w-full max-w-5xl mx-auto flex justify-end pt-4 pr-4 print:hidden mb-4" role="navigation" aria-label="Main">
        <ul class="space-x-4 bg-zinc-900 dark:bg-zinc-200 rounded-full px-3 py-1 flex items-center">
            <li>
                <a class="text-zinc-50 dark:text-zinc-900 transition hover:text-teal" href="/">
                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M21 20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.49a1 1 0 0 1 .386-.79l8-6.222a1 1 0 0 1 1.228 0l8 6.222a1 1 0 0 1 .386.79V20zm-2-1V9.978l-7-5.444-7 5.444V19h14z"></path>
                        </g>
                    </svg>                <span class="sr-only">Home</span>
                </a>
            </li>
            <li>
                <a class="text-zinc-50 dark:text-zinc-900 transition hover:text-pink-500" href="https://pinkary.com/@kennethsolomon">
                    <svg class="h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M13.06 8.11l1.415 1.415a7 7 0 0 1 0 9.9l-.354.353a7 7 0 0 1-9.9-9.9l1.415 1.415a5 5 0 1 0 7.071 7.071l.354-.354a5 5 0 0 0 0-7.07l-1.415-1.415 1.415-1.414zm6.718 6.011l-1.414-1.414a5 5 0 1 0-7.071-7.071l-.354.354a5 5 0 0 0 0 7.07l1.415 1.415-1.415 1.414-1.414-1.414a7 7 0 0 1 0-9.9l.354-.353a7 7 0 0 1 9.9 9.9z"></path>
                        </g>
                    </svg>                <span class="sr-only">Pinkary</span>
                </a>
            </li>
        </ul>
    </nav>
    @inertia
    <footer class="mt-12 mb-6 w-full max-w-5xl mx-auto flex flex-col items-center justify-center px-4 print:hidden">
        <ul class="flex items-baseline space-x-4">
            <li>
                <a class="text-zinc-50 dark:text-zinc-900 transition hover:text-teal" href="/">
                    <svg class="h-8 text-zinc-900 dark:text-zinc-300 transition hover:text-teal-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M21 20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.49a1 1 0 0 1 .386-.79l8-6.222a1 1 0 0 1 1.228 0l8 6.222a1 1 0 0 1 .386.79V20zm-2-1V9.978l-7-5.444-7 5.444V19h14z"></path>
                        </g>
                    </svg>                <span class="sr-only">Home</span>
                </a>
            </li>
            <li>
                <a class="text-zinc-50 dark:text-zinc-900 transition hover:text-teal" href="https://pinkary.com/@kennethsolomon">
                    <svg class="h-8 text-zinc-900 dark:text-zinc-300 transition hover:text-pink-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M13.06 8.11l1.415 1.415a7 7 0 0 1 0 9.9l-.354.353a7 7 0 0 1-9.9-9.9l1.415 1.415a5 5 0 1 0 7.071 7.071l.354-.354a5 5 0 0 0 0-7.07l-1.415-1.415 1.415-1.414zm6.718 6.011l-1.414-1.414a5 5 0 1 0-7.071-7.071l-.354.354a5 5 0 0 0 0 7.07l1.415 1.415-1.415 1.414-1.414-1.414a7 7 0 0 1 0-9.9l.354-.353a7 7 0 0 1 9.9 9.9z"></path>
                        </g>
                    </svg>                <span class="sr-only">Pinkary</span>
                </a>
            </li>
        </ul>
        <div class="flex justify-center my-8">
            <span class="h-2 w-2 bg-gray-300 rounded-full mr-2"></span>
            <span class="h-2 w-2 bg-gray-300 rounded-full mr-2"></span>
            <span class="h-2 w-2 bg-gray-300 rounded-full"></span>
        </div>
        <div class="mb-2 text-sm text-zinc-700 dark:text-zinc-400 flex flex-col space-y-2 items-center">
                <span class="block text-center text-[1.1rem] mb-2">
                    {!! \Illuminate\Foundation\Inspiring::quote() !!}
                </span>
            <span class="block text-center">© {{ date("Y") }} Kenneth Solomon</span>
        </div>
        {{--            <nav>--}}
        {{--                <ul class="mt-4 flex space-x-2 divide-x divide-zinc-400 text-sm text-zinc-500 dark:text-zinc-300">--}}
        {{--                    <li>--}}
        {{--                        <a href="https://kennethsolomon.com/feed" class="ml-2 hover:text-zinc-700 hover:dark:text-zinc-50">--}}
        {{--                            RSS Feed--}}
        {{--                        </a>--}}
        {{--                    </li>--}}
        {{--                </ul>--}}
        {{--            </nav>--}}
    </footer>
    </body>
</html>
