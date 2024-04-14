<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kenneth Solomon</title>

        @vite(['resources/js/app.js'])

        <link href="https://fonts.cdnfonts.com/css/jolly-lodger" rel="stylesheet">
    </head>
    <body background="{{url('/storage/bg.jpg')}}" class="bg-repeat md:bg-no-repeat md:bg-cover   print:bg-transparent dark:bg-zinc-900 ">
        <nav class="w-full max-w-5xl mx-auto flex justify-end pt-4 pr-4 print:hidden mb-4" role="navigation" aria-label="Main">
            <ul class="space-x-4 bg-zinc-200 rounded-full px-3 py-1 flex items-center">
                <li>
                    <a class="text-zinc-900 transition hover:text-teal" href="/">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M21 20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.49a1 1 0 0 1 .386-.79l8-6.222a1 1 0 0 1 1.228 0l8 6.222a1 1 0 0 1 .386.79V20zm-2-1V9.978l-7-5.444-7 5.444V19h14z"></path>
                            </g>
                        </svg>                <span class="sr-only">Home</span>
                    </a>
                </li>
                <li>
                    <a class="text-zinc-900 transition hover:text-pink-500" href="https://pinkary.com/@kennethsolomon">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M13.06 8.11l1.415 1.415a7 7 0 0 1 0 9.9l-.354.353a7 7 0 0 1-9.9-9.9l1.415 1.415a5 5 0 1 0 7.071 7.071l.354-.354a5 5 0 0 0 0-7.07l-1.415-1.415 1.415-1.414zm6.718 6.011l-1.414-1.414a5 5 0 1 0-7.071-7.071l-.354.354a5 5 0 0 0 0 7.07l1.415 1.415-1.415 1.414-1.414-1.414a7 7 0 0 1 0-9.9l.354-.353a7 7 0 0 1 9.9 9.9z"></path>
                            </g>
                        </svg>                <span class="sr-only">Pinkary</span>
                    </a>
                </li>
            </ul>
        </nav>
        <main id="main" class="flex-grow leading-relaxed w-full max-w-5xl mx-auto">
            <div class="mt-4 mx-4">
                <h1 class="text-5xl md:text-6xl text-zinc-200 font-semibold mb-12 font-jolly">
                    Hi, I'm Kenneth!
                </h1>

                <div class="mb-4">
                    <nav class="mt-8">
                        <div class="flex justify-between items-baseline group">
                            <h2 class="text-xl md:text-2xl text-zinc-200 mb-2 font-serif">Latest blog posts</h2>
                            <a href="/posts" aria-label="Read some of my other blog posts." class="text-md md:text-lg text-teal-500 hover:text-teal-600 font-serif">Browse all blog posts</a>
                        </div>
                        <ul class="mt-4 grid md:grid-cols-3 gap-6">
                            @foreach($posts as $post)
                                <li class="group">
                                    <a href="/posts/{{$post['id']}}/{{$post['slug']}}" class="block w-full h-full">
                                        <h3 class="text-lg text-zinc-300 group-hover:text-zinc-400 leading-tight md:line-clamp-1 font-extrabold">{{$post['title']}}</h3>
                                        <span class="text-xs text-zinc-400 group-hover:text-zinc-500">{{$post['publish_date']}}</span>
                                        <p class="mt-1 text-xs text-zinc-400 group-hover:text-zinc-500 line-clamp-3">{{$post['excerpt']}}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="flex justify-center my-8">
                    <span class="h-2 w-2 bg-gray-300 rounded-full mr-2"></span>
                    <span class="h-2 w-2 bg-gray-300 rounded-full mr-2"></span>
                    <span class="h-2 w-2 bg-gray-300 rounded-full"></span>
                </div>

                <div class="max-w-5xl prose print:prose-sm dark:prose-invert prose-a:text-teal hover:prose-a:text-teal-dark">
                    <img id="banner" src="{{url('/storage/me.png')}}" alt="Kenneth Solomon Selfie">
                    <div class="mt-5 text-zinc-400">
                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">Hello there! I'm a web developer based in the Philippines, and I've been immersed in the world of coding since 2020. Over time,
                            I've gathered a toolkit that includes PHP, JavaScript, CSS, and HTML—essentials for my daily projects. While I'm no stranger to Django and Wordpress,
                            my true passion lies with Laravel, Alpine JS, Inertia, Tailwind CSS, Vue, and Nuxt. These technologies have become my trusted companions,
                            accompanying me on almost every coding journey.</p>
                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">One of the aspects of software development that excites me the most is the pursuit of the perfect architecture for a given task.
                            There's nothing quite like that "eureka" moment after multiple refactors and countless cups of tea. It's the culmination of creativity and problem-solving skills that
                            makes this field endlessly fascinating to me.</p>
                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">My favourite part of developing software is that feeling when, perhaps after several refactors and a few too many cups
                            of tea, you find the perfect architecture for the task at hand.</p>
                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">In addition to building web applications, I specialize in API integration.
                            I have experience working with APIs from platforms such as HubSpot, Cin7, Dropbox, Xero, and more. Integrating these APIs seamlessly into web applications
                            allows for enhanced functionality and streamlined workflows, providing users with a cohesive experience across multiple platforms.</p>

                        <h2 class="text-zinc-300 text-2xl font-serif mt-10">Why is your site so basic?</h2>

                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">This website serves as my digital playground—a canvas where I can share my thoughts, ideas, and tutorials with the world.
                            I've intentionally kept the design simple and minimalist for a specific reason: speed. By prioritizing simplicity,
                            I ensure that content loads swiftly on any device or connection. In fact, this site loads in less than a second, even on a 3G network. Simple doesn't mean lacking;
                            it means efficient and accessible.</p>
                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">I believe in the power of content over flashy visuals or unnecessary features. This website is all about delivering value to
                            visitors without any distractions. There are no tracking mechanisms or attempts to sell you something you don't need—just pure, unadulterated content. It's my way of saying,
                            "Here's what I have to offer; take it or leave it."</p>
                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">Feel free to check
                            them out (or don't, you have free will). If you want to reach out and chat code, I'm all ears! You can reach me at any
                            of my links listed <a class="text-teal-500 hover:text-teal-400 tracking-wider" href="https://pinkary.com/@kennethsolomon">here</a>.</p>

                        <h2 class="text-zinc-300 text-2xl font-serif mt-10">Fun facts about me ☕</h2>

                        <p class="text-zinc-300 mt-5 font-serif tracking-wider">Beyond coding, I have a few other interests that keep me busy. I love hosting podcasts, where I get to explore topics beyond
                            the realm of programming. Occasionally, I also dabble in video editing, adding another creative dimension to my skill set. And when it's time to unwind, you'll often find
                            me immersed in the world of mobile gaming, with Mobile Legends being a particular favorite.</p>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mt-12 mb-6 w-full max-w-5xl mx-auto flex flex-col items-center justify-center px-4 print:hidden">
            <ul class="flex items-baseline space-x-4">
                <li>
                    <a class="text-zinc-900 transition hover:text-teal" href="/">
                        <svg class="h-8 w-8 text-zinc-300 transition hover:text-teal-dark" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M21 20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.49a1 1 0 0 1 .386-.79l8-6.222a1 1 0 0 1 1.228 0l8 6.222a1 1 0 0 1 .386.79V20zm-2-1V9.978l-7-5.444-7 5.444V19h14z"></path>
                            </g>
                        </svg>                <span class="sr-only">Home</span>
                    </a>
                </li>
                <li>
                    <a class="text-zinc-900 transition hover:text-teal" href="https://pinkary.com/@kennethsolomon">
                        <svg class="h-8 w-8 text-zinc-300 transition hover:text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
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
            <div class="mb-2 text-sm text-zinc-400 flex flex-col space-y-2 items-center">
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


<script>
    const banner = document.querySelector('#banner');
</script>
