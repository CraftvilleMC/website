@extends('layouts.app')

@section('content')
    <section class="text-gray-500 bg-gray-900 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
                <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Welkom op craftville</h1>
                <p class="mb-8 text-3xl leading-relaxed">Join nu op <span class="text-orange-500">play.craftville.nl</span></p>
            </div>
        </div>
    </section>

    <section class="text-gray-500 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4">Er is vast een hoop te beleven</h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat, justo sed efficitur vulputate, diam metus lobortis purus, egestas tempus justo eros vel massa. Mauris felis lorem, ullamcorper nec mollis non, sollicitudin a quam. Nulla cursus nunc quis consectetur dignissim.
                </p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/501x301">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/600x360">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://dummyimage.com/601x361">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/502x302">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-500 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-white">Wil je komen spelen? Join dan ook onze Discord!</h1>
                <a class="flex-shrink-0 text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg mt-10 sm:mt-0" href="https://discord.gg/8bGrXvz">Discord</a>
            </div>
        </div>
    </section>

    <section class="text-gray-500 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Resourcepack</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat, justo sed efficitur vulputate, diam metus lobortis purus, egestas tempus justo eros vel massa.
                </p>
            </div>
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">Type</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Versie</th>
                        <th class="w-10 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tr rounded-br"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-3">Optifine</td>
                            <td class="px-4 py-3">Minecraft 1.12.2</td>
                            <td class="px-4 py-3"><a class="text-orange-500" href="#">Download</a></td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">Resourcepack</td>
                            <td class="px-4 py-3">Minecraft 1.12.2</td>
                            <td class="px-4 py-3"><a class="text-orange-500" href="#">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                <a class="text-orange-500 inline-flex items-center md:mb-2 lg:mb-0" href="#">Tutorial video
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
