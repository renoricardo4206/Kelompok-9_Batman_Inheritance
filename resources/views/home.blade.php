@extends('layout.app')

@section('title', 'Batman Page')

@section('content')
<section aria-labelledby="hero-split-title" class="relative isolate overflow-hidden bg-white px-4 py-16 md:px-8 md:py-24 dark:bg-neutral-950">
   <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-2 lg:gap-16">
      <div class="max-w-2xl">
         
         <h1 id="hero-split-title" class="mt-4 text-4xl leading-[1.05] font-semibold tracking-tighter text-balance text-neutral-950 sm:text-5xl xl:text-6xl dark:text-neutral-50">Bruce Wayne: The Dark Knight</h1>
         <p class="mt-6 text-lg/7 text-pretty text-neutral-600 dark:text-neutral-400">Bruce Wayne A.K.A Batman merupakan seorang pahlawan super yang sangat populer dikalangan anak-anak sampai dewasa. Bruce Wayne (Batman) seorang triliuner yang memiliki perusahaan Wayne Entreprise yang merupakan salah satu perusahaan teknologi terbesar di Gotham City.</p>
         <div class="mt-10 flex flex-col gap-3 sm:flex-row sm:flex-wrap sm:items-center">
         </div>
         
      </div>

      <figure class="relative">
         <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-neutral-100 dark:bg-neutral-800">
            <img src="img\543180.jpg" alt="A woman working on a laptop at a garden table on a sunny terrace, a cup of coffee beside her" class="size-full object-cover">
         </div>
         
      </figure>
   </div>
</section>
@endsection