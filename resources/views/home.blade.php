@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="min-h-[500px] bg-primary-100 px-4 sm:px-10">
        <div class="w-full py-16 mx-auto max-w-7xl">
            <div class="grid items-center justify-center gap-10 lg:grid-cols-2">
                <div>
                    <h1 class="md:text-5xl text-4xl font-extrabold mb-6 md:!leading-[55px]">Chrih Daba - Discover the Beauty
                        of Moroccan Elegance
                    </h1>
                    <p class="text-base leading-relaxed">Indulge in the essence of Moroccan opulence at Chrih Daba, your
                        premier destination for curated treasures that reflect the soul of Morocco. Immerse yourself in a
                        world where tradition intertwines seamlessly with modern luxury. Our collection spans from
                        handcrafted marvels to contemporary delights,</p>
                    <div class="flex flex-wrap mt-8 gap-y-4 gap-x-8">
                        <button
                            class='bg-[#333] hover:bg-[#111] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4'>Get
                            started
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                                viewBox="0 0 492.004 492.004">
                                <path
                                    d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                                    data-original="#000000" />
                            </svg>
                        </button>
                        <button
                            class='bg-transparent border-2 border-[#333] flex items-center transition-all font-semibold rounded-md px-5 py-2'>
                            API documentation
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                                viewBox="0 0 492.004 492.004">
                                <path
                                    d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                                    data-original="#000000" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="h-full max-lg:mt-12">
                    <img src="{{ URL::asset('assets/hero-01.png') }}" alt="banner img" class="object-cover w-full h-full" />
                </div>
            </div>
        </div>
    </div>

    <!---latest products--->

    <div class=" px-4 mt-8 sm:px-10">
        <div class="w-full  mx-auto max-w-7xl">
            <h2 class="mb-8 text-3xl text-dark-100 font-bold text-primary-300">Introducing Our Latest Product</h2>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                @foreach ($latesteProducts as $product)
                    <div class="p-8 bg-white rounded-lg shadow-lg">
                        <div class="relative overflow-hidden">
                            <img class="object-cover " src="{{ URL::asset("storage/$product->image") }}" alt="Product"
                                style="width: 300px; height: 250px;">
                            <div class="absolute inset-0 bg-black opacity-40"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <button
                                    class="px-6 py-2 font-bold text-gray-900 bg-white rounded-full hover:bg-gray-300">View
                                    Product</button>
                            </div>
                        </div>

                        <h3 class="mt-4 text-xl font-bold text-gray-900">{{ $product->name }}</h3>
                        <p class="mt-2 text-sm text-gray-500 min-w-24 max-h-28 min-h-28">{{ $product->description }}</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-lg font-bold text-gray-900">{{ $product->price }}$</span>
                            <button
                                class="px-4 py-2 font-bold text-white bg-primary-100 rounded-full hover:bg-primary-300">Add
                                to Cart</button>
                        </div>
                    </div>
                @endforeach



            </div>
            <button
                class='bg-primary-300 hover:bg-primary-400 text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8'>View
                All
                <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2" viewBox="0 0 492.004 492.004">
                    <path
                        d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                        data-original="#000000" />
                </svg>
        </div>
    </div>

    <!---categories--->
    <div class="p-4  bg-primary-100  mt-28 sm:px-10">
        <div class="w-full mx-auto max-w-7xl">
            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div class="">
                    <h2 class="mb-6 text-3xl font-extrabold md:text-4xl">Chrih Daba - Explore the Rich Tapestry of Chrih
                        Daba Categories</h2>
                    <p>Dive into the diverse world of Chrih Daba categories, the rich tapestry of Moroccan culture. Explore
                        with passion as you navigate through each category, discovering the unique stories and artistry
                        behind our meticulously chosen products. Immerse yourself in the essence of Morocco and elevate your
                        lifestyle with the finest offerings across our thoughtfully crafted sections. Start your journey of
                        exploration and discovery at Chrih Daba today</p>
                    <button
                        class='bg-[#333] hover:bg-[#111] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8'>Learn
                        more
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                            viewBox="0 0 492.004 492.004">
                            <path
                                d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                                data-original="#000000" />
                        </svg>
                    </button>
                </div>
                <div class="grid gap-8 sm:grid-cols-2">

                    @foreach ($latestCatgories as $latestCatgorie)
                        <div
                            class="text-center bg-white shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] transition-all rounded-xl p-6">
                            <img src="{{ url::asset("storage/$latestCatgorie->image") }}"
                                class="inline-block w-20 p-3 bg-blue-100 rounded-full fill-blue-600" />

                            <h3 class="mt-6 mb-2 text-base font-extrabold">{{ $latestCatgorie->name }}</h3>
                            <a href="javascript:void(0);" class="inline-block font-bold text-blue-600 hover:underline">Learn
                                more</a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!---populare product--->

    <div class="px-4 sm:px-10 mt-28">
        <div class="w-full mx-auto max-w-7xl">
            <div class="grid items-center gap-10 md:grid-cols-2">
                <div class="w-full h-full">
                    <img src="{{ URL::asset("storage/$topProduct->image") }}" alt="arghan"
                        class="object-cover w-full h-full" />
                </div>
                <div>
                    <h2 class="mb-6 text-3xl text-primary-300 font-extrabold md:text-4xl">{{ $topProduct->slug }}</h2>
                    <p>
                        {{ $topProduct->description }}
                    </p>

                    <div class="mt-8">
                        <div class="flex items-center">
                            <img src="{{ URL::asset("storage/$topProduct->image") }}" class="w-12 h-12 rounded-full" />
                            <div class="ml-4">
                                <h4 class="text-base font-extrabold">{{ $topProduct->name }}</h4>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p>Veniam proident aute magna anim excepteur et ex consectetur velit
                                ullamco veniam minim aute sit. Elit occaecat officia et laboris Lorem minim.</p>
                        </div>
                    </div>
                    <button
                        class='bg-[#333] hover:bg-[#111] text-white flex items-center transition-all font-semibold rounded-md px-5 py-4 mt-8'>Order
                        now
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-[14px] fill-current ml-2"
                            viewBox="0 0 492.004 492.004">
                            <path
                                d="M484.14 226.886 306.46 49.202c-5.072-5.072-11.832-7.856-19.04-7.856-7.216 0-13.972 2.788-19.044 7.856l-16.132 16.136c-5.068 5.064-7.86 11.828-7.86 19.04 0 7.208 2.792 14.2 7.86 19.264L355.9 207.526H26.58C11.732 207.526 0 219.15 0 234.002v22.812c0 14.852 11.732 27.648 26.58 27.648h330.496L252.248 388.926c-5.068 5.072-7.86 11.652-7.86 18.864 0 7.204 2.792 13.88 7.86 18.948l16.132 16.084c5.072 5.072 11.828 7.836 19.044 7.836 7.208 0 13.968-2.8 19.04-7.872l177.68-177.68c5.084-5.088 7.88-11.88 7.86-19.1.016-7.244-2.776-14.04-7.864-19.12z"
                                data-original="#000000" />
                        </svg>
                </div>

            </div>
        </div>
    </div>





    <div class="px-4 sm:px-10 mt-28">
        <div class="w-full mx-auto max-w-7xl">
            <div class="grid gap-4 md:grid-cols-3">
                <div class="col-span-2">
                    <h2 class="mb-6 text-3xl font-extrabold md:text-4xl">What our happy client say</h2>
                    <p>Veniam proident aute magna anim excepteur et ex consectetur velit ullamco veniam minim aute
                        sit. Elit
                        occaecat officia et laboris Lorem minim. Officia do aliqua adipisicing ullamco in.</p>
                </div>
                <div class="flex items-end justify-end space-x-4">
                    <div
                        class="grid items-center justify-center w-10 h-10 rotate-90 bg-white rounded-full cursor-pointer shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-[#333] inline" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                clip-rule="evenodd" data-original="#000000"></path>
                        </svg>
                    </div>
                    <div
                        class="bg-[#333] w-10 h-10 grid items-center justify-center rounded-full -rotate-90 shrink-0 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-[#fff] inline" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                                clip-rule="evenodd" data-original="#000000"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="grid gap-10 mt-16 md:grid-cols-3">
                <div>
                    <div class="flex items-center">
                        <img src="https://readymadeui.com/team-1.webp" class="w-12 h-12 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-extrabold">John Doe</h4>
                            <p class="mt-1 text-xs text-gray-400">Founder of Rubik</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p>The service was amazing. I never had to wait that long for my food. The staff was
                            friendly and
                            attentive, and the delivery was impressively prompt.</p>
                    </div>
                    <div class="flex mt-6 space-x-2">
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="flex items-center">
                        <img src="https://readymadeui.com/team-2.webp" class="w-12 h-12 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-extrabold">Mark Adair</h4>
                            <p class="mt-1 text-xs text-gray-400">Founder of Alpha</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p>The service was amazing. I never had to wait that long for my food. The staff was
                            friendly and
                            attentive, and the delivery was impressively prompt.</p>
                    </div>
                    <div class="flex mt-6 space-x-2">
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="flex items-center">
                        <img src="https://readymadeui.com/team-3.webp" class="w-12 h-12 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-extrabold">Simon Konecki</h4>
                            <p class="mt-1 text-xs text-gray-400">Founder of Labar</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p>The service was amazing. I never had to wait that long for my food. The staff was
                            friendly and
                            attentive, and the delivery was impressively prompt.</p>
                    </div>
                    <div class="flex mt-6 space-x-2">
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 mt-28 sm:px-10">
        <div class="mx-auto space-y-6 max-w-7xl">
            <div class="mb-10">
                <h2 class="mb-6 text-3xl font-extrabold md:text-4xl">Frequently Asked Questions</h2>
                <p>Explore common questions and find answers to help you make the most out of our services. If you
                    don't see
                    your question here, feel free to contact us for assistance.</p>
            </div>
            <div class="divide-y">
                <div>
                    <button type="button" class="flex items-center w-full py-6 text-base font-semibold text-left">
                        <span class="mr-4">Are there any special discounts or promotions available during the
                            event.</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current ml-auto shrink-0"
                            viewBox="0 0 124 124">
                            <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z"
                                data-original="#000000" />
                        </svg>
                    </button>
                    <div class="pb-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor
                            auctor arcu,
                            at fermentum dui. Maecenas
                            vestibulum a turpis in lacinia. Proin aliquam turpis at erat venenatis malesuada. Sed
                            semper, justo
                            vitae
                            consequat fermentum, felis diam posuere ante, sed fermentum quam justo in dui. Nulla
                            facilisi. Nulla
                            aliquam
                            auctor purus, vitae dictum dolor sollicitudin vitae. Sed bibendum purus in efficitur
                            consequat. Fusce et
                            tincidunt arcu. Curabitur ac lacus lectus. Morbi congue facilisis sapien, a semper orci
                            facilisis in.
                        </p>
                    </div>
                </div>
                <div>
                    <button type="button" class="flex items-center w-full py-6 text-base font-semibold text-left">
                        <span class="mr-4">What are the dates and locations for the product launch events?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current ml-auto shrink-0"
                            viewBox="0 0 42 42">
                            <path
                                d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"
                                data-original="#000000" />
                        </svg>
                    </button>
                    <div class="hidden py-4">
                        <p>Content</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="flex items-center w-full py-6 text-base font-semibold text-left">
                        <span class="mr-4">Can I bring a guest with me to the product launch event?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current ml-auto shrink-0"
                            viewBox="0 0 42 42">
                            <path
                                d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"
                                data-original="#000000" />
                        </svg>
                    </button>
                    <div class="hidden py-4">
                        <p>Content</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="flex items-center w-full py-6 text-base font-semibold text-left">
                        <span class="mr-4">How can I register for the event?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current ml-auto shrink-0"
                            viewBox="0 0 42 42">
                            <path
                                d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"
                                data-original="#000000" />
                        </svg>
                    </button>
                    <div class="hidden py-4">
                        <p>Content</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="flex items-center w-full py-6 text-base font-semibold text-left">
                        <span class="mr-4">Is there parking available at the venue?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current ml-auto shrink-0"
                            viewBox="0 0 42 42">
                            <path
                                d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"
                                data-original="#000000" />
                        </svg>
                    </button>
                    <div class="hidden py-4">
                        <p>Content</p>
                    </div>
                </div>
                <div>
                    <button type="button" class="flex items-center w-full py-6 text-base font-semibold text-left">
                        <span class="mr-4">How can I contact the event organizers?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 fill-current ml-auto shrink-0"
                            viewBox="0 0 42 42">
                            <path
                                d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z"
                                data-original="#000000" />
                        </svg>
                    </button>
                    <div class="hidden py-4">
                        <p>Content</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 mt-28 sm:px-10">
        <div class="relative px-6 py-16 mx-auto max-w-7xl bg-gradient-to-r from-primary-300 via-teal-600 to-primary-100">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="mb-6 text-3xl font-extrabold text-white md:text-4xl">Subscribe to Our Newsletter</h2>
                <div class="my-6">
                    <p class="text-white">Subscribe to our newsletter and stay up to date with the latest news,
                        updates, and
                        exclusive offers. Get
                        valuable insights. Join our community today!</p>
                </div>
                <div
                    class="absolute left-0 right-0 flex items-center w-full max-w-2xl p-5 mx-auto bg-white rounded-md shadow-lg -bottom-10">
                    <input type="email" placeholder="Enter your email"
                        class="w-full bg-gray-50 py-3.5 px-4 text-base focus:outline-none" />
                    <button
                        class="bg-[#333] hover:bg-[#111] text-white flex items-center transition-all font-semibold px-5 py-4">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
