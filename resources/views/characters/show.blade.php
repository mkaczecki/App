@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg md:max-w-3xl sm:mt-10">
    <div class="sm:px-6">
        <section class="flex flex-col break-words bg-white pb-5 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md grid grid-cols-2">
                <p class="px-2">Character Details</p>
                <div class="text-left uppercase">
                    <a class="py-2 px-6 text-gray-600 border-cool-gray-500 border font-semibold text-sm rounded tracking-wide hover:bg-cool-gray-600 hover:text-white hover:border-transparent" href="/characters/{{ $character->id }}/edit">Edit Details</a>
                </div>
            </header>

            <div class="p-10 grid grid-cols-2 py-4 justify-around">
                <ul>
                    <li class="py-2">
                        <p class="text-gray-600"><strong>Name </strong></p> 
                        <p class="pt-3">{{ $character->name == '' ? 'n/d' : $character->name}}</p> 
                    </li class="py-2">
                    
                    <li class="py-2">
                        <p class="text-gray-600"><strong>Gender </strong></p> 
                        <p class="pt-3">{{ $character->gender == '' ? 'n/d' : $character->gender}}</p> 
                    </li class="py-2">
                    
                    <li class="py-2">
                        <p class="text-gray-600"><strong>Culture </strong></p> 
                        <p class="pt-3">{{ $character->culture == '' ? 'n/d' : $character->culture}}</p> 
                    </li class="py-2">
                    
                    <li class="py-2">
                        <p class="text-gray-600"><strong>Born </strong></p> 
                        <p class="pt-3">{{ $character->born == '' ? 'n/d' : $character->born}}</p> 
                    </li class="py-2">
                    
                    <li class="py-2">
                        <p class="text-gray-600"><strong>Died </strong></p> 
                        <p class="pt-3">{{ $character->died == '' ? 'n/d' : $character->died}}</p> 
                    </li class="py-2">
                    
                </ul>
                <ul class="text-left"> 
                    <p class="py-2 text-gray-600"><strong>Titles</strong></p>
                    @forelse($titles as $title)
                        <li class="py-1">{{ $title }}</li>
                    @empty
                        <li class="py-2">no titles</li>
                    @endforelse
                </ul>
            </div>
            
        </section>
    </div>
</main>
@endsection
