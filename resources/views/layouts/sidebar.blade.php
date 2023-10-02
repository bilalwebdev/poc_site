<!-- ========== Left Sidebar Start ========== -->
<div
    class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

    <div data-simplebar class="h-full">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">
                    Menu</li>

                <li>
                    <a href="{{ url('index') }}"
                        class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="users"></i>
                        <span data-key="t-auth">Authentication</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('login') }}"
                                class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Login</a>
                        </li>
                        <li>
                            <a href="{{ url('register') }}"
                                class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Register</a>
                        </li>

                        <li>
                            <a href="{{ url('logout') }}"
                                class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Log
                                Out</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="briefcase"></i><span data-key="t-pages">Pages</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('starter') }}"
                                class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Starter
                                Page</a>
                        </li>

                    </ul>
                </li>

                <li class="menu-heading px-4 py-3 text-xs font-medium text-gray-500 cursor-default"
                    data-key="t-elements">Elements</li>





                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <span
                            class="badge bg-red-50 text-danger ltr:float-right rtl:float-left z-50 px-1.5 rounded-full text-11 text-red-500"
                            data-toggle="collapse">7</span>
                        <i data-feather="box"></i>
                        <span data-key="t-forms">Forms</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('form-elements') }}"
                                class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Basic
                                Elements</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="sliders"></i>
                        <span data-key="t-charts">Tables</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('tables-datatable') }}"
                                class="pl-14 pr-4  py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">DataTables</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="pie-chart"></i>
                        <span data-key="t-charts">Charts</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('charts-apex') }}"
                                class="pl-14 pr-4 py-2 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">Apexcharts</a>
                        </li>

                    </ul>

                </li>



            </ul>

            <div class="sidebar-alert text-center mx-5 my-12">
                <div class="card-body bg-primary rounded bg-violet-50/50 dark:bg-zinc-700/60">
                    <img src="{{ URL::asset('build/images/giftbox.png') }}" alt="" class="block mx-auto">
                    <div class="mt-4">
                        <h5 class="text-violet-500 mb-3 font-medium">Unlimited Access</h5>
                        <p class="text-slate-600 text-13 dark:text-gray-50">Upgrade your plan from a Free trial, to
                            select ‘Business Plan’.</p>
                        <a href="#!" class="btn bg-violet-500 text-white border-transparent mt-6">Upgrade Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
