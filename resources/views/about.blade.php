@extends('layout.app')
@section('content')
<section aria-labelledby="cards-content-title" class="mt-6 px-4 md:px-8">
   <div class="mx-auto max-w-7xl">
      <h2 id="cards-content-title" class="sr-only">Kestrel for every team</h2>
      <ul class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
         <li class="@container">
            <article class="flex h-full flex-col rounded-xl bg-white shadow-xs ring-1 ring-neutral-950/10 dark:bg-neutral-900 dark:ring-neutral-800">
               <div class="aspect-[3/2] overflow-hidden rounded-t-xl bg-neutral-100 dark:bg-neutral-800">
                  <img src="img\WIN_20261106_14_54_29_Pro.jpg" alt="Developer writing code on a laptop at a bright desk with plants" class="size-full object-cover">
               </div>
               <div class="flex flex-1 flex-col p-4 @3xs:p-5 @sm:p-6">
                  <h3 class="text-base font-semibold text-neutral-950 @sm:text-lg dark:text-neutral-50">Christiano Waliliong</h3>
                  <p class="mt-1.5 text-sm/6 text-neutral-600 @sm:text-[15px]/6 dark:text-neutral-400">Seorang developer yang sangat menguasai teknologi dan memiliki visi yang tajam dalam memecahkan masalah kompleks.</p>
                  <div class="mt-auto pt-5">
                     
                  </div>
               </div>
            </article>
         </li>
         <li class="@container">
            <article class="flex h-full flex-col rounded-xl bg-white shadow-xs ring-1 ring-neutral-950/10 dark:bg-neutral-900 dark:ring-neutral-800">
               <div class="aspect-[3/2] overflow-hidden rounded-t-xl bg-neutral-100 dark:bg-neutral-800">
                  <img src="img\WIN_20261106_14_54_29_Pro.jpg" alt="Smiling woman in a denim jacket at her desk in a busy open-plan office" class="size-full object-cover">
               </div>
               <div class="flex flex-1 flex-col p-4 @3xs:p-5 @sm:p-6">
                  <h3 class="text-base font-semibold text-neutral-950 @sm:text-lg dark:text-neutral-50">Reno Ricardo Siahaya </h3>
                  <p class="mt-1.5 text-sm/6 text-neutral-600 @sm:text-[15px]/6 dark:text-neutral-400">Seorang developer yang sangat menguasai teknologi dan memiliki visi yang tajam dalam memecahkan masalah kompleks.</p>
                  <div class="mt-auto pt-5">
                     
                  </div>
               </div>
            </article>
         </li>  
      </ul>
   </div>
</section>
@endsection