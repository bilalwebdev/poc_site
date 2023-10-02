@extends('layouts.master-without-nav')
@section('title')
    {{ __('Login') }}
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-12 ">
                <div class="relative z-50 col-span-12 md:col-span-5 lg:col-span-4 xl:col-span-3">
                    <div class="w-full p-10 bg-white xl:p-12 dark:bg-zinc-800">
                        <div class="flex h-[90vh] flex-col">
                            <div class="mx-auto">
                                <a href="{{ url('index') }}" class="">
                                    <img src="{{ URL::asset('build/images/logo-sm.svg') }}" alt=""
                                        class="inline h-8"> <span
                                        class="text-xl font-medium align-middle ltr:ml-2 rtl:mr-2 dark:text-white">Minia</span>
                                </a>
                            </div>

                            <div class="my-auto">
                                <div class="text-center">
                                    <h5 class="text-gray-600 dark:text-gray-100">Welcome Back !</h5>
                                    <p class="mt-1 text-gray-500 dark:text-gray-100/60">Sign in to continue to Minia.</p>
                                </div>

                                <form class="pt-2 mt-4" action="index.html">
                                    <div class="mb-4">
                                        <label
                                            class="block mb-2 font-medium text-gray-600 dark:text-gray-100">Username</label>
                                        <input type="text"
                                            class="w-full py-2 border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60"
                                            id="username" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex">
                                            <div class="flex-grow-1">
                                                <label
                                                    class="block mb-2 font-medium text-gray-600 dark:text-gray-100">Password</label>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <a href="#" class="text-gray-500 dark:text-gray-100">Forgot
                                                    password?</a>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <input type="password"
                                                class="w-full py-2 border-gray-100 rounded ltr:rounded-r-none rtl:rounded-l-none placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60"
                                                placeholder="Enter password" aria-label="Password"
                                                aria-describedby="password-addon">
                                            <button
                                                class="px-4 border border-gray-100 rounded bg-gray-50 ltr:rounded-l-none rtl:rounded-r-none ltr:border-l-0 rtl:border-r-0 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100"
                                                type="button" id="password-addon"><i
                                                    class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="mb-6 row">
                                        <div class="col">
                                            <div>
                                                <input type="checkbox"
                                                    class="w-4 h-4 mt-1 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded cursor-pointer checked:bg-blue-600 checked:border-blue-600 focus:outline-none ltr:float-left rtl:float-right ltr:mr-2 rtl:ml-2 focus:ring-offset-0"
                                                    checked id="exampleCheck1">
                                                <label class="font-medium text-gray-600 align-middle dark:text-gray-100">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <button
                                            class="btn border-transparent bg-violet-500 w-full py-2.5 text-white w-100 waves-effect waves-light shadow-md shadow-violet-200 dark:shadow-zinc-600"
                                            type="submit">Log In</button>
                                    </div>
                                </form>

                                <div class="pt-2 mt-4 text-center">
                                    <div>
                                        <h6 class="mb-3 font-medium text-gray-500 text-14 dark:text-gray-100">- Sign in with
                                            -</h6>
                                    </div>

                                    <div class="flex justify-center gap-3">
                                        <a href="" class="h-9 w-9 bg-violet-500 leading-[2.9] rounded-full">
                                            <i class="text-lg text-white mdi mdi-facebook"></i>
                                        </a>
                                        <a href="" class="h-9 w-9 bg-sky-500 leading-[2.9] rounded-full">
                                            <i class="text-lg text-white mdi mdi-twitter"></i>
                                        </a>
                                        <a href="" class="h-9 w-9 bg-red-400 leading-[2.9] rounded-full">
                                            <i class="text-lg text-white mdi mdi-google"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="mt-12 text-center">
                                    <p class="text-gray-500 dark:text-gray-100">Don't have an account ? <a
                                            href="{{ url('register') }}" class="font-semibold text-violet-500"> Signup now
                                        </a> </p>
                                </div>
                            </div>


                            <div class="text-center ">
                                <p class="relative mb-5 text-gray-500 dark:text-gray-100">©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Minia . Crafted with <i class="text-red-400 mdi mdi-heart"></i>
                                    by Themesbrand
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-7 lg:col-span-8 xl:col-span-9">
                    <div class="h-screen bg-cover relative p-5 bg-[url('../images/auth-bg.jpg')]">
                        <div class="absolute inset-0 bg-violet-500/90"></div>

                        <ul class="absolute top-0 left-0 w-full h-full overflow-hidden bg-bubbles animate-square">
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

                        <div class="grid content-center h-screen grid-cols-12">
                            <div class="col-span-8 col-start-3">
                                <div class="swiper login-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-green-600 bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on myself.
                                                It's a lot more progressing fun than looking back. That's why I ultricies
                                                enim at malesuada nibh diam on tortor neaded to throw curve balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}"
                                                    class="w-12 h-12 rounded-full" alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-2">
                                                    <h5 class="text-white font-size-18">Ilse R. Eaton</h5>
                                                    <p class="mb-0 text-white/50">Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-green-600 bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on
                                                myself. It's a lot more progressing fun than looking back. That's why I
                                                ultricies enim at malesuada nibh diam on tortor neaded to throw curve
                                                balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                    class="w-12 h-12 rounded-full" alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-2">
                                                    <h5 class="text-white font-size-18">Mariya Willam</h5>
                                                    <p class="mb-0 text-white/50">Designer
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <i class="text-5xl text-green-600 bx bxs-quote-alt-left"></i>
                                            <h3 class="mt-4 text-white text-22">“I feel confident imposing change on
                                                myself. It's a lot more progressing fun than looking back. That's why I
                                                ultricies enim at malesuada nibh diam on tortor neaded to throw curve
                                                balls.”</h3>
                                            <div class="flex pt-4 mt-6 mb-10">
                                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}"
                                                    class="w-12 h-12 rounded-full" alt="...">
                                                <div class="flex-1 mb-4 ltr:ml-3 rtl:mr-2">
                                                    <h5 class="text-white font-size-18">Jiya Jons</h5>
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
