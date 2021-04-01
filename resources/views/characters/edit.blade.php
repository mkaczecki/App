@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Edit Character Details
                </header>

                <form class="w-full px-6 pb-10 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="/characters/{{ $character->id }}">
                    @csrf
                    @method('PATCH')
                    
                    <div class="flex flex-wrap">
                        <label for="name" class="block text-cool-gray-600 text-sm font-bold uppercase mb-2 sm:mb-4">
                            Name
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ @old('name') ?? $character->name }}" required autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="gender" class="block text-cool-gray-600 text-sm font-bold uppercase mb-2 sm:mb-4">
                            Gender
                        </label>

                        <input id="gender" type="text" class="form-input w-full @error('gender')  border-red-500 @enderror"
                            name="gender" value="{{ @old('gender') ?? $character->gender }}" autofocus>

                        @error('gender')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="culture" class="block text-cool-gray-600 text-sm font-bold uppercase mb-2 sm:mb-4">
                            Culture
                        </label>

                        <input id="culture" type="text" class="form-input w-full @error('culture')  border-red-500 @enderror"
                            name="culture" value="{{ @old('culture') ?? $character->culture }}" autofocus>

                        @error('culture')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="born" class="block text-cool-gray-600 text-sm font-bold uppercase mb-2 sm:mb-4">
                            Born
                        </label>

                        <input id="born" type="text" class="form-input w-full @error('born')  border-red-500 @enderror"
                            name="born" value="{{ @old('born') ?? $character->born }}" autofocus>

                        @error('born')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="died" class="block text-cool-gray-600 text-sm font-bold uppercase mb-2 sm:mb-4">
                            Died
                        </label>

                        <input id="died" type="text" class="form-input w-full @error('died')  border-red-500 @enderror"
                            name="died" value="{{ @old('died') ?? $character->died }}" autofocus>

                        @error('died')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                

                    <div class="flex flex-wrap pt-5 pb-3">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded text-base leading-normal no-underline text-white bg-cool-gray-600 sm:py-4">
                            Save Details
                        </button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
