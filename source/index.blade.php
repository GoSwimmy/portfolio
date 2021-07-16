@extends('_layouts.master')

@section('content')

    <div class="container m-auto flex flex-col justify-center items-center py-16 min-h-screen">
        <div class="w-full text-center mb-20">
            <div class="relative mx-auto rounded-full h-48 w-48 border-gray-600 border-2 mb-4" style="padding: .375rem">
                <div class="rounded-full border-2 border-gray-600" style="padding: .375rem">
                    <img src="assets/img/icon.png" alt="hero" class="rounded-full block" />
                </div>
            </div>
            <div class="leading-tight text-3xl my-2 text-white font-bold">GoSwimmy</div>
            <div class="text-gray-400 leading-tight mb-2">Fullstack Developer</div>
            <p class="text-gray-400 leading-normal mb-2">
            My name is Sage, my online alias is GoSwimmy
            </p>
            <div class="flex justify-between max-w-sm mx-auto mt-5">
                <a href="{{ $page->github }}" class="inline-block rounded-full bg-gray-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="fab fa-github fa-fw"></i>
                    Github
                </a>
                <a href="{{ $page->twitter }}" class="inline-block rounded-full bg-blue-600 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="fab fa-twitter fa-fw"></i>
                    Twitter
                </a>
                <a href="{{ $page->gmodstore }}" class="inline-block rounded-full bg-blue-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="far fa-gamepad fa-fw"></i>
                    Gmodstore
                </a>

                <a href="mailto:robertdennispersonal@gmail.com" class="inline-block rounded-full bg-blue-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="far fa-mailbox fa-fw"></i>
                    Email
                </a>
            </div>
        </div>

        <div class="w-full text-center mt-8">
            <h1 class="text-3xl lg:text-6xl font-black text-white mb-10">Things I've Made</h1>

            <!-- ASAP -->
            <div class="flex flex-col lg:flex-row flex-1">
                <div class="w-full lg:w-2/3 p-3 h-full flex flex-col items-center justify-center">
                    <a href="https://asapgaming.co/">
                        <img src="assets/img/asapgaming.png" alt="hero" class="m-auto h-auto shadow-lg rounded" />
                    </a>
                </div>

                <div class="w-full lg:w-1/3 p-3 h-full flex flex-col">

                    <div class="max-w-sm overflow-hidden text-left">
                        <div class="px-6 py-4">
                            <a href="https://asapgaming.co/" class="text-2xl text-indigo-600 font-bold">Asapgaming</a>
                            <p class="text-gray-400 text-sm font-light mb-4">Web Developer & Manager</p>
                            <p class="leading-normal text-gray-200 text-base mb-4">
                                Asapgaming is a large game community. I managed the staff and community. Along with being a full-time developer. The entire website was a managed all-in-one application that used
                                Laravel, Vue, Mysql, and various API's.
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <span class="inline-block rounded-full bg-red-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-red-100 font-bold">Laravel</span>
                            <span class="inline-block rounded-full bg-green-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-green-100 font-bold">Vue</span>
                            <span class="inline-block rounded-full bg-blue-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-blue-100 font-bold">Mysql</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-12 border-gray-700">

            <!-- ICE -->
            <div class="flex flex-col lg:flex-row flex-1">
                <div class="w-full lg:w-1/3 p-3 h-full flex flex-col items-center justify-center">
                    <div class="max-w-sm overflow-hidden text-left">
                        <div class="px-6 py-4">
                            <a href="https://icefuse.net/" class="text-2xl text-red-600 font-bold">Icefuse</a>
                            <p class="text-gray-400 text-sm font-light mb-4">Web Developer</p>
                            <p class="leading-normal text-gray-200 text-base mb-4">
                                Icefuse is one of the largest game communities / companies out there. I was assigned with building a link application where users from their community can connect their Discord, Youtube, and Steam
                                accounts to gain rewards in their Rust and Garry's Mod servers.
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <span class="inline-block rounded-full bg-red-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-red-100 font-bold">Laravel</span>
                            <span class="inline-block rounded-full bg-yellow-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-yellow-100 font-bold">Jquery</span>
                            <span class="inline-block rounded-full bg-blue-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-blue-100 font-bold">Mysql</span>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 p-3 h-full flex flex-col">

                    <a href="https://icefuse.net/">
                        <img src="assets/img/icefuse.png" alt="hero" class="m-auto h-auto shadow-lg rounded" />
                    </a>
                </div>
            </div>

            <hr class="my-12 border-gray-700">

            <!-- TN -->
            <div class="flex flex-col lg:flex-row flex-1">
                <div class="w-full lg:w-2/3 p-3 h-full flex flex-col items-center justify-center">
                    <a href="https://titannodes.com/">
                        <img src="assets/img/titan_nodes.png" alt="hero" class="m-auto h-auto shadow-lg rounded" />
                    </a>
                </div>

                <div class="w-full lg:w-1/3 p-3 h-full flex flex-col">

                    <div class="max-w-sm overflow-hidden text-left">
                        <div class="px-6 py-4">
                            <a href="https://titannodes.com/" class="text-2xl text-purple-600 font-bold">Titan Nodes</a>
                            <p class="text-gray-400 text-sm font-light mb-4">Web Developer</p>
                            <p class="leading-normal text-gray-200 text-base mb-4">
                                Titan Nodes is a massive hosting company that mainly focuses on Minecraft. I was tasked with building a complex ticket system that allows staff & support members to easily view through
                                archived tickets. Along with allowing them to assign themselves to tickets for performance tracking that updates live.
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <span class="inline-block rounded-full bg-red-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-red-100 font-bold">Laravel</span>
                            <span class="inline-block rounded-full bg-green-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-green-100 font-bold">Vue</span>
                            <span class="inline-block rounded-full bg-blue-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-blue-100 font-bold">Mysql</span>
                        </div>
                    </div>

                </div>
            </div>

            <hr class="my-12 border-gray-700">

            <!-- GMS -->
            <div class="flex flex-col lg:flex-row flex-1">
                <div class="w-full lg:w-1/3 p-3 h-full flex flex-col items-center justify-center">

                    <div class="max-w-sm overflow-hidden text-left">
                        <div class="px-6 py-4">
                            <a href="https://www.gmodstore.com/users/atlas" class="text-2xl text-blue-600 font-bold">Gmodstore</a>
                            <p class="text-gray-400 text-sm font-light mb-4">Content Creator & Community Manager</p>
                            <p class="leading-normal text-gray-200 text-base mb-4">
                                Gmodstore is the biggest paid Garry's Mod content market to exist. Overtime I have built many products that have accumulated thousands of sales
                                while also collaborating with other developers on their products. I also have become the Community Manager, which I am assigned with directing Moderators, and Submission Curators.
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <span class="inline-block rounded-full bg-red-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-red-100 font-bold">Laravel</span>
                            <span class="inline-block rounded-full bg-orange-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-orange-100 font-bold">PHP</span>
                            <span class="inline-block rounded-full bg-yellow-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-yellow-100 font-bold">Jquery</span>
                            <span class="inline-block rounded-full bg-indigo-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-indigo-100 font-bold">Lua</span>
                        </div>
                    </div>

                </div>

                <div class="w-full lg:w-2/3 p-3 h-full flex flex-col">
                    <a href="https://www.gmodstore.com/users/atlas">
                        <img src="assets/img/gmodstore.png" alt="hero" class="m-auto h-auto shadow-lg rounded" />
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
