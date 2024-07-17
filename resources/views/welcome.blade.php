@extends('layout')

@section('content')
    <main class="mt-6">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
            <a
                href="/products"
                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
            >
                <div class="flex size-8 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-10">
                <svg class="size-4 sm:size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <!-- Ikon keranjang -->
                        <path fill="#FF2D20" d="M7 4h10l1 2h4v2h-1l-1 9H4L3 8H2V6h4l1-2Zm0 2-1 2h12l-1-2H7Zm-1 4v7h12v-7H6Zm2 2h2v3H8v-3Zm4 0h2v3h-2v-3Z"/>
                    </svg>
                </div>

                <div class="pt-3 sm:pt-5">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Products</h2>
                    <p class="mt-4 text-sm/relaxed">
                        Explore our wide range of products designed to meet all your needs. From software solutions to hardware, we have everything you need to succeed.
                    </p>
                </div>

                <svg class="size-5 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </a>
        </div>
    </main>
@endsection