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
                <a href="{{ $page->discord }}" class="inline-block rounded-full bg-blue-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
                    <i class="far fa-gamepad fa-fw"></i>
                    Discord
                </a>

                <a href="mailto:goswimmy@gmail.com" class="inline-block rounded-full bg-blue-700 uppercase px-2 py-1 text-xs font-bold text-red-100 font-bold">
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
                    <a href="https://mcfriendly.us/">
                        <img src="assets/img/mcfriendly.png" alt="hero" class="m-auto h-auto shadow-lg rounded" />
                    </a>
                </div>

                <div class="w-full lg:w-1/3 p-3 h-full flex flex-col">

                    <div class="max-w-sm overflow-hidden text-left">
                        <div class="px-6 py-4">
                            <a href="https://mcfriendly.us/" class="text-2xl text-indigo-600 font-bold">MCFriendly</a>
                            <p class="text-gray-400 text-sm font-light mb-4">Technical Manager</p>
                            <p class="leading-normal text-gray-200 text-base mb-4">
                                MCFriendly is one of the oldest Minecraft SMP servers out there. I was in charge of making sure the server ran smoothly and efficiently while keeping custom and public plugins up to date.
                            </p>
                        </div>

                        <div class="px-6 py-4">
                            <span class="inline-block rounded-full bg-red-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-red-100 font-bold">Java</span>
                            <span class="inline-block rounded-full bg-green-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-green-100 font-bold">JavaScript</span>
                            <span class="inline-block rounded-full bg-blue-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-blue-100 font-bold">MySQL</span>
                            <span class="inline-block rounded-full bg-blue-600 uppercase px-2 py-1 text-xs font-bold mr-3 text-blue-100 font-bold">PHP</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-12 border-gray-700">
        </div>
    </div>


@endsection
