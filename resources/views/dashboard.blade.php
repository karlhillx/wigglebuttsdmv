<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wiggle Butts, LLC</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-white">
        <div class="">

            <div class="bg-white">
                <!--
                  Mobile menu

                  Off-canvas menu for mobile, show/hide based on off-canvas menu state.
                -->
                <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                    <!--
                      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

                      Entering: "transition-opacity ease-linear duration-300"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "transition-opacity ease-linear duration-300"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                    <div class="fixed inset-0 bg-black bg-opacity-25"></div>

                    <div class="fixed inset-0 z-40 flex">
                        <!--
                          Off-canvas menu, show/hide based on off-canvas menu state.

                          Entering: "transition ease-in-out duration-300 transform"
                            From: "-translate-x-full"
                            To: "translate-x-0"
                          Leaving: "transition ease-in-out duration-300 transform"
                            From: "translate-x-0"
                            To: "-translate-x-full"
                        -->
                        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                            <div class="flex px-4 pt-5 pb-2">
                                <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x-mark -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Links -->
                            <div class="mt-2">
                                <div class="border-b border-gray-200">
                                    <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                                        <button id="tabs-1-tab-1" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>

                                        <!-- Selected: "text-indigo-600 border-indigo-600", Not Selected: "text-gray-900 border-transparent" -->
                                        <button id="tabs-1-tab-2" class="text-gray-900 border-transparent flex-1 whitespace-nowrap border-b-2 py-4 px-1 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                                    </div>
                                </div>

                            </div>

                            <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                                <div class="flow-root">
                                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                                </div>

                                <div class="flow-root">
                                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                                </div>
                            </div>

                            <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                                <div class="flow-root">
                                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
                                </div>
                                <div class="flow-root">
                                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                                </div>
                            </div>

                            <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                                <!-- Currency selector -->
                                <form>
                                    <div class="inline-block">
                                        <label for="mobile-currency" class="sr-only">Currency</label>
                                        <div class="group relative -ml-2 rounded-md border-transparent focus-within:ring-2 focus-within:ring-white">
                                            <select id="mobile-currency" name="currency" class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                                                <option>CAD</option>

                                                <option>USD</option>

                                                <option>AUD</option>

                                                <option>EUR</option>

                                                <option>GBP</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center">
                                                <!-- Heroicon name: mini/chevron-down -->
                                                <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <header class="relative z-10">
                    <nav aria-label="Top">
                        <!-- Top navigation -->
                        <div class="bg-gray-900">
                            <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

                                <p class="flex-1 text-center text-sm font-medium text-white lg:flex-none">Want to join our team? We’re hiring. <a href="#">Apply now.</a></p>

                                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                    <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
                                    <span class="h-6 w-px bg-gray-600" aria-hidden="true"></span>
                                    <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
                                </div>
                            </div>
                        </div>

                        <!-- Secondary navigation -->
                        <div class="bg-white">
                            <div class="border-b border-gray-200">
                                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                                    <div class="flex h-16 items-center justify-between">
                                        <!-- Logo (lg+) -->
                                        <div class="hidden lg:flex lg:items-center">
                                            <a href="#">
                                                <span class="sr-only">Your Company</span>
                                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                                            </a>
                                        </div>

                                        <div class="hidden h-full lg:flex">
                                            <!-- Mega menus -->
                                            <div class="ml-8">
                                                <div class="flex h-full justify-center space-x-8">
                                                    <div class="flex">
                                                        <div class="relative flex">
                                                            <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                            <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">About</button>
                                                        </div>
                                                    </div>

                                                    <div class="flex">
                                                        <div class="relative flex">
                                                            <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                                            <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">Services</button>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Staff</a>

                                                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Contact</a>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Logo (lg-) -->
                                        <a href="#" class="lg:hidden">
                                            <span class="sr-only">Your Company</span>
                                            <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
                                        </a>

                                        <div class="flex flex-1 items-center justify-end">
                                            <div class="flex items-center lg:ml-8">
                                                <div class="flex space-x-8">
                                                    <div class="hidden lg:flex">
                                                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                            <span class="sr-only">Search</span>
                                                            <!-- Heroicon name: outline/magnifying-glass -->
                                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                                            </svg>
                                                        </a>
                                                    </div>

                                                    <div class="flex">
                                                        <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                            <span class="sr-only">Account</span>
                                                            <!-- Heroicon name: outline/user -->
                                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>

                                                <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

                <main>
                    <!-- Hero -->
                    <div class="flex flex-col border-b border-gray-200 lg:border-0">
                        <nav aria-label="Offers" class="order-last lg:order-first">
                            <div class="mx-auto max-w-7xl lg:px-8">
                                <ul role="list" class="grid grid-cols-1 divide-y divide-gray-200 lg:grid-cols-3 lg:divide-y-0 lg:divide-x">
                                    <li class="flex flex-col">
                                        <a href="#" class="relative flex flex-1 flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                                            <p class="text-sm text-gray-500">Download the app</p>
                                            <p class="font-semibold text-gray-900">Get an exclusive $5 off code</p>
                                        </a>
                                    </li>

                                    <li class="flex flex-col">
                                        <a href="#" class="relative flex flex-1 flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                                            <p class="text-sm text-gray-500">Return when you&#039;re ready</p>
                                            <p class="font-semibold text-gray-900">60 days of free returns</p>
                                        </a>
                                    </li>

                                    <li class="flex flex-col">
                                        <a href="#" class="relative flex flex-1 flex-col justify-center bg-white py-6 px-4 text-center focus:z-10">
                                            <p class="text-sm text-gray-500">Sign up for your pet's first walk</p>
                                            <p class="font-semibold text-gray-900">15% off your first order</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                        <div class="relative">
                            <div aria-hidden="true" class="absolute hidden h-full w-1/2 bg-gray-100 lg:block"></div>
                            <div class="relative bg-gray-100 lg:bg-transparent">
                                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:grid lg:grid-cols-2 lg:px-8">
                                    <div class="mx-auto max-w-2xl py-24 lg:max-w-none lg:py-64">
                                        <div class="lg:pr-16">
                                            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl xl:text-6xl">
                                                Dog walking and pet sitting
                                            </h1>
                                            <p class="mt-4 text-xl text-gray-600">Trusted dog walking and pet sitting in the Washington, DC area, available on short notice and with flexible scheduling options.</p>
                                            <div class="mt-6">
                                                <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 font-medium text-white hover:bg-indigo-700">Shop Productivity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="h-48 w-full sm:h-64 lg:absolute lg:top-0 lg:right-0 lg:h-full lg:w-1/2">
                                <img src="/images/woman-with-dog-walk-in-autumn-park.jpg" alt="" class="h-full w-full object-cover object-center">
                            </div>
                        </div>
                    </div>

                    <!-- Trending products -->
                    <section aria-labelledby="trending-heading" class="bg-white">
                        <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:py-32 lg:px-8">

                            <!--
       This example requires Tailwind CSS v2.0+

       This example requires some changes to your config:

       ```
       // tailwind.config.js
       module.exports = {
         // ...
         plugins: [
           // ...
           require('@tailwindcss/aspect-ratio'),
         ],
       }
       ```
     -->
                            <div class="bg-white">
                                <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
                                    <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
                                        <div class="space-y-5 sm:space-y-4">
                                            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Staff</h2>
                                            <p class="text-xl text-gray-500">Nulla quam felis, enim faucibus proin velit, ornare id pretium. Augue ultrices sed arcu condimentum vestibulum suspendisse. Volutpat eu faucibus vivamus eget bibendum cras.</p>
                                        </div>
                                        <div class="lg:col-span-2">
                                            <ul role="list" class="space-y-12 sm:-mt-8 sm:space-y-0 sm:divide-y sm:divide-gray-200 lg:gap-x-8 lg:space-y-0">
                                                <li class="sm:py-8">
                                                    <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
                                                        <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                                            <img class="rounded-lg object-cover shadow-lg" src="/images/staff-brophy.jpg" alt="">
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <div class="space-y-4">
                                                                <div class="space-y-1 text-lg font-medium leading-6">
                                                                    <h3>Stacy Brophy</h3>
                                                                    <p class="text-indigo-600">Founder / Owner</p>
                                                                </div>
                                                                <div class="text-lg">
                                                                    <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                                                </div>
                                                                <ul role="list" class="flex space-x-5">
                                                                    <li>
                                                                        <a href="#" class="text-gray-400 hover:text-gray-500">
                                                                            <span class="sr-only">Twitter</span>
                                                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="text-gray-400 hover:text-gray-500">
                                                                            <span class="sr-only">LinkedIn</span>
                                                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="sm:py-8">
                                                    <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
                                                        <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                                                            <img class="rounded-lg object-cover shadow-lg" src="/images/staff-hill.jpg" alt="">
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <div class="space-y-4">
                                                                <div class="space-y-1 text-lg font-medium leading-6">
                                                                    <h3>Karl Hill</h3>
                                                                    <p class="text-indigo-600">Co-Owner / CTO</p>
                                                                </div>
                                                                <div class="text-lg">
                                                                    <p class="text-gray-500">Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.</p>
                                                                </div>
                                                                <ul role="list" class="flex space-x-5">
                                                                    <li>
                                                                        <a href="#" class="text-gray-400 hover:text-gray-500">
                                                                            <span class="sr-only">Twitter</span>
                                                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="text-gray-400 hover:text-gray-500">
                                                                            <span class="sr-only">LinkedIn</span>
                                                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <!-- More people... -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- Collections -->
                    <section aria-labelledby="collections-heading" class="bg-gray-100">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                                <h2 id="collections-heading" class="text-2xl font-bold text-gray-900">Collections</h2>

                                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                                    <div class="group relative">
                                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
                                        </div>
                                        <h3 class="mt-6 text-sm text-gray-500">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Desk and Office
                                            </a>
                                        </h3>
                                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                                    </div>

                                    <div class="group relative">
                                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                                        </div>
                                        <h3 class="mt-6 text-sm text-gray-500">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Self-Improvement
                                            </a>
                                        </h3>
                                        <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                                    </div>

                                    <div class="group relative">
                                        <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
                                        </div>
                                        <h3 class="mt-6 text-sm text-gray-500">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Travel
                                            </a>
                                        </h3>
                                        <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Sale and testimonials -->
                    <div class="relative overflow-hidden">
                        <!-- Decorative background image and gradient -->
                        <div aria-hidden="true" class="absolute inset-0">
                            <div class="absolute inset-0 mx-auto max-w-7xl overflow-hidden xl:px-8">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-sale-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
                            </div>
                            <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                        </div>

                        <!-- Sale -->
                        <section aria-labelledby="sale-heading" class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
                            <div class="mx-auto max-w-2xl lg:max-w-none">
                                <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Get 25% off during our one-time sale</h2>
                                <p class="mx-auto mt-4 max-w-xl text-xl text-gray-600">Most of our products are limited releases that won't come back. Get your favorite items while they're in stock.</p>
                                <a href="#" class="mt-6 inline-block w-full rounded-md border border-transparent bg-gray-900 py-3 px-8 font-medium text-white hover:bg-gray-800 sm:w-auto">Get access to our one-time sale</a>
                            </div>
                        </section>

                        <!-- Testimonials -->
                        <section aria-labelledby="testimonial-heading" class="relative mx-auto max-w-7xl py-24 px-4 sm:px-6 lg:py-32 lg:px-8">
                            <div class="mx-auto max-w-2xl lg:max-w-none">
                                <h2 id="testimonial-heading" class="text-2xl font-bold tracking-tight text-gray-900">What are people saying?</h2>

                                <div class="mt-16 space-y-16 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                                    <blockquote class="sm:flex lg:block">
                                        <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                            <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
                                        </svg>
                                        <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                            <p class="text-lg text-gray-600">My order arrived super quickly. The product is even better than I hoped it would be. Very happy customer over here!</p>
                                            <cite class="mt-4 block font-semibold not-italic text-gray-900">Sarah Peters, New Orleans</cite>
                                        </div>
                                    </blockquote>

                                    <blockquote class="sm:flex lg:block">
                                        <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                            <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
                                        </svg>
                                        <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                            <p class="text-lg text-gray-600">I had to return a purchase that didn’t fit. The whole process was so simple that I ended up ordering two new items!</p>
                                            <cite class="mt-4 block font-semibold not-italic text-gray-900">Kelly McPherson, Chicago</cite>
                                        </div>
                                    </blockquote>

                                    <blockquote class="sm:flex lg:block">
                                        <svg width="24" height="18" viewBox="0 0 24 18" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                            <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
                                        </svg>
                                        <div class="mt-8 sm:mt-0 sm:ml-6 lg:mt-10 lg:ml-0">
                                            <p class="text-lg text-gray-600">Now that I’m on holiday for the summer, I’ll probably order a few more shirts. It’s just so convenient, and I know the quality will always be there.</p>
                                            <cite class="mt-4 block font-semibold not-italic text-gray-900">Chris Paul, Phoenix</cite>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </section>

                    </div>
                </main>

                <footer aria-labelledby="footer-heading" class="bg-white">
                    <h2 id="footer-heading" class="sr-only">Footer</h2>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="border-t border-gray-200">
                            <div class="pt-16 pb-20">
                                <div class="md:flex md:justify-center">
                                    <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
                                </div>
                                <div class="mx-auto mt-16 max-w-5xl xl:grid xl:grid-cols-2 xl:gap-8">
                                    <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                                        <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">Products</h3>
                                                <ul role="list" class="mt-6 space-y-6">
                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Walks</a>
                                                    </li>

                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Sitting</a>
                                                    </li>

                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Boarding</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                                                <ul role="list" class="mt-6 space-y-6">
                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                                                    </li>

                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                                                    </li>


                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">Company</h3>
                                                <ul role="list" class="mt-6 space-y-6">
                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                                                    </li>

                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                                                    </li>

                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <h3 class="text-sm font-medium text-gray-900">Legal</h3>
                                                <ul role="list" class="mt-6 space-y-6">
                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Terms of Service</a>
                                                    </li>


                                                    <li class="text-sm">
                                                        <a href="#" class="text-gray-500 hover:text-gray-600">Privacy Policy</a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:grid lg:grid-cols-2 lg:gap-x-6 xl:gap-x-8">
                                <div class="flex items-center rounded-lg bg-gray-100 p-6 sm:p-10">
                                    <div class="mx-auto max-w-sm">
                                        <h3 class="font-semibold text-gray-900">Sign up for our newsletter</h3>
                                        <p class="mt-2 text-sm text-gray-500">The latest news, articles, and resources, sent to your inbox weekly.</p>
                                        <form class="mt-4 sm:mt-6 sm:flex">
                                            <label for="email-address" class="sr-only">Email address</label>
                                            <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white py-2 px-4 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                                            <div class="mt-3 sm:mt-0 sm:ml-4 sm:flex-shrink-0">
                                                <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-white">Sign up</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="relative mt-6 flex items-center py-12 px-6 sm:py-16 sm:px-10 lg:mt-0">
                                    <div class="absolute inset-0 overflow-hidden rounded-lg">
                                        <img src="https://tailwindui.com/img/ecommerce-images/footer-02-exclusive-sale.jpg" alt="" class="h-full w-full object-cover object-center saturate-0 filter">
                                        <div class="absolute inset-0 bg-indigo-600 bg-opacity-90"></div>
                                    </div>
                                    <div class="relative mx-auto max-w-sm text-center">
                                        <h3 class="text-2xl font-bold tracking-tight text-white">Get early access</h3>
                                        <p class="mt-2 text-gray-200">
                                            Did you sign up to the newsletter? If so, use the keyword we sent you to get access. <a href="#" class="whitespace-nowrap font-bold text-white hover:text-gray-200">Go now<span aria-hidden="true"> &rarr;</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-10 md:flex md:items-center md:justify-between">
                            <div class="text-center md:text-left">
                                <p class="text-sm text-gray-500">&copy; 2022 All Rights Reserved</p>
                            </div>

                            <div class="mt-4 flex items-center justify-center md:mt-0">
                                <div class="flex space-x-8">
                                    <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Privacy</a>


                                </div>

                                <div class="ml-6 border-l border-gray-200 pl-6">
                                    <a href="#" class="text-sm text-gray-500 hover:text-gray-600">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>


        </div>
    </body>
</html>
