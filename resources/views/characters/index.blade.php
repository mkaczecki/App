@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 ">
    <div class="w-full sm:px-6">
        <section class="flex flex-col break-words bg-white pb-5 sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Characters Table
            </header>

            <div class="w-full p-6 justify-content-center">
                <table class="table-fixed min-w-4xl w-full">
                    <tr  class=" border-cool-gray-300 border-b uppercase text-sm text-gray-600">
                      <th class="text-left pb-6">Name</th>
                      <th class="text-left pb-6">Gender</th>
                      <th class="text-left pb-6">Culture</th>
                      <th class="text-center pb-6">Details</th>
                    </tr>
                  @forelse($characters as $character)
                    <tr class=" border-cool-gray-300 border-b">
                      <td class="py-4">{{ $character->name == '' ? 'n/d' : $character->name}}</td>
                      <td>{{ $character->gender == '' ? 'n/d' : $character->gender}}</td>
                      <td>{{ $character->culture == '' ? 'n/d' : $character->culture}}</td>
                      <td class="text-center uppercase text-gray-600 text-sm hover:bg-cool-gray-600 hover:text-white"><a href="/characters/{{ $character->id }}">Show Character</a></td>
                    </tr>
                  @empty
                    <tr>
                      <td class="py-4">No available characters.</td>
                    </tr>
                  @endforelse
                </table>                
                <br><br>
                {{ $characters->links() }}
            </div>
        </section>
    </div>
</main>

@endsection
