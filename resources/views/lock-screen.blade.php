@extends('layouts.master-without-nav')
@section('title')
    {{ __('Lock Screen') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3 relative z-50">
                    <div class="w-full bg-white xl:p-12 p-10 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                            <div class=" mx-auto">
                                <a href="{{ url('index') }}" class="">
                                    <img src="{{ URL::asset('build/images/logo-sm.svg') }}" alt="" class="h-8 inline"> <span
                                        class="text-xl align-middle font-medium ltr:ml-2 rtl:mr-2 dark:text-white">Minia</span>
                                </a>
                            </div>

                            <div class="my-auto">
                                <div class="text-center mb-8">
                                    <h5 class="text-gray-600 dark:text-gray-100">Lock Screen</h5>
                                    <p class="text-gray-500 dark:text-zinc-100/60 mt-1">Enter your password to unlock the
                                        screen!</p>
                                </div>

                                <div class=" my-5 pt-2 text-center">
                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                        class="h-16 w-16 mx-auto rounded-full border p-1 dark:border-zinc-600"
                                        alt="thumbnail">
                                    <h5 class="text-15 text-gray-600 dark:text-gray-100 mt-3">Shawn</h5>
                                </div>

                                <form class="mt-4 pt-2" action="index.html">
                                    <div class="mb-6">
                                        <label
                                            class="text-gray-600 dark:text-zinc-100 font-medium mb-2 block">Password</label>
                                        <input type="password"
                                            class="w-full rounded placeholder:text-sm py-2 placeholder:text-gray-400 border-gray-100 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100"
                                            id="password" placeholder="Enter password">
                                    </div>

                                    <div class="mb-4">
                                        <button
                                            class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600"
                                            type="submit">Unlock</button>
                                    </div>
                                </form>

                                <div class="mt-12 text-center">
                                    <p class="text-gray-500 dark:text-zinc-100">Not you ? return <a href="{{ url('login') }}"
                                            class="text-violet-500 font-semibold"> Sign In </a> </p>
                                </div>
                            </div>


                            <div class=" text-center">
                                <p class="text-gray-500 dark:text-gray-100  relative mb-5">©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Minia . Crafted with <i class="mdi mdi-heart text-red-400"></i>
                                    by Themesbrand
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="bg-bubbles absolute top-0 left-0 w-full h-full overflow-hidden animate-square">
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                            <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                            <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                            <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                            <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                            <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                            <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                        </ul>

                        <div class="grid grid-cols-12 content-center h-screen">
                            <div class="col-span-8 col-start-3">
                                <div class="swiper login-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself.
                                                It's a lot more progressing fun than looking back. That's why I ultricies
                                                enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex mt-6 mb-10 pt-4">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="h-12 w-12 rounded-full"
                                                    alt="...">
                                                <div class="flex-1 ltr:ml-3 rtl:mr-3 mb-4">
                                                    <h5 class="font-size-18 text-white">Ilse R. Eaton</h5>
                                                    <p class="mb-0 text-white/50">Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself.
                                                It's a lot more progressing fun than looking back. That's why I ultricies
                                                enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex mt-6 mb-10 pt-4">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="h-12 w-12 rounded-full"
                                                    alt="...">
                                                <div class="flex-1 ltr:ml-3 rtl:mr-3 mb-4">
                                                    <h5 class="font-size-18 text-white">Mariya Willam</h5>
                                                    <p class="mb-0 text-white/50">Designer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="bx bxs-quote-alt-left text-green-600 text-5xl"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself.
                                                It's a lot more progressing fun than looking back. That's why I ultricies
                                                enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex mt-6 mb-10 pt-4">
                                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" class="h-12 w-12 rounded-full"
                                                    alt="...">
                                                <div class="flex-1 ltr:ml-3 rtl:mr-3 mb-4">
                                                    <h5 class="font-size-18 text-white">Jiya Jons</h5>
                                                    <p class="mb-0 text-white/50">Developer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/login.init.js') }}"></script>
@endsection