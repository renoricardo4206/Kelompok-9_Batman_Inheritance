@extends('layout.app')
@section('content')
<section aria-labelledby="cards-content-title" class="mt-6 px-4 md:px-8">
   <div class="mx-auto max-w-7xl">
      <h2 id="cards-content-title" class="sr-only">Kestrel for every team</h2>
      <ul class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
         <li class="@container">
            <article class="flex h-full flex-col rounded-xl bg-white shadow-xs ring-1 ring-neutral-950/10 dark:bg-neutral-900 dark:ring-neutral-800">
               <div class="aspect-[3/2] overflow-hidden rounded-t-xl bg-neutral-100 dark:bg-neutral-800">
                  <img src="img\1165268.jpg" alt="Developer writing code on a laptop at a bright desk with plants" class="size-full object-cover">
               </div>
               <div class="flex flex-1 flex-col p-4 @3xs:p-5 @sm:p-6">
                  <h3 class="text-base font-semibold text-neutral-950 @sm:text-lg dark:text-neutral-50">Batmobil</h3>
                  <p class="mt-1.5 text-sm/6 text-neutral-600 @sm:text-[15px]/6 dark:text-neutral-400">Kendaraan andalannya dalam bertarung melawan kejahatan dan balap liar</p>
                  <div class="mt-auto pt-5">
                     
                  </div>
               </div>
            </article>
         </li>
         <li class="@container">
            <article class="flex h-full flex-col rounded-xl bg-white shadow-xs ring-1 ring-neutral-950/10 dark:bg-neutral-900 dark:ring-neutral-800">
               <div class="aspect-[3/2] overflow-hidden rounded-t-xl bg-neutral-100 dark:bg-neutral-800">
                  <img src="img\17057559.jpg" alt="Smiling woman in a denim jacket at her desk in a busy open-plan office" class="size-full object-cover">
               </div>
               <div class="flex flex-1 flex-col p-4 @3xs:p-5 @sm:p-6">
                  <h3 class="text-base font-semibold text-neutral-950 @sm:text-lg dark:text-neutral-50">Batarang</h3>
                  <p class="mt-1.5 text-sm/6 text-neutral-600 @sm:text-[15px]/6 dark:text-neutral-400">Batarang atau batman dan boomerang senjata favoritnya</p>
                  <div class="mt-auto pt-5">
                     
                  </div>
               </div>
            </article>
         </li>
         <li class="@container">
            <article class="flex h-full flex-col rounded-xl bg-white shadow-xs ring-1 ring-neutral-950/10 dark:bg-neutral-900 dark:ring-neutral-800">
               <div class="aspect-[3/2] overflow-hidden rounded-t-xl bg-neutral-100 dark:bg-neutral-800">
                  <img src="img\png-transparent-firearm-batman-arkham-origins-grappling-hook-grapple-hook-angle-heroes-weapon-thumbnail.png" alt="Woman presenting a quarterly chart to colleagues around a boardroom table" class="size-full object-cover">
               </div>
               <div class="flex flex-1 flex-col p-4 @3xs:p-5 @sm:p-6">
                  <h3 class="text-base font-semibold text-neutral-950 @sm:text-lg dark:text-neutral-50">Grappling Hook</h3>
                  <p class="mt-1.5 text-sm/6 text-neutral-600 @sm:text-[15px]/6 dark:text-neutral-400">Grappling hook yang digunakan Batman untuk bergerak di sekitar Gotham City.</p>
                  <div class="mt-auto pt-5">
                     
                  </div>
               </div>
            </article>
         </li>
      </ul>
   </div>
</section>
@endsection