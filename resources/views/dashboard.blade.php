<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-wrap">
                @foreach ($users as $user)
                <div class="my-5 bg-white py-8 px-10 text-center rounded-md shadow-lg max-w-xs mx-auto">
                    <h2 class="font-semibold text-2xl mb-6">{{$user->name}}</h2>
                    <img class="w-40 h-40 object-cover rounded-full mx-auto shadow-lg"
                        src={{asset($user->avatar->name)}} alt="User avatar">
                    <p class="capitalize text-xl mt-1 ">{{$user->age}} ans</p>
                    <span class="flex items-center border rounded-full w-24 pr-2 justify-center mx-auto mt-2 mb-12">
                        <div class="bg-green-400 rounded-full w-2.5 h-2.5 block mr-2"></div>{{$user->role->name}}
                    </span>
                    <div class="flex">
                        @admin
                        <button
                            class="rounded-md bg-gradient-to-r from-blue-400 to-indigo-500 text-xl text-white pt-3 pb-4 px-4 inline">Modifier
                        </button>
                        @if (Auth::user()->id == $user->id)
                        <button
                            class="rounded-md bg-gradient-to-r from-green-400 to-green-500 text-xl text-white pt-3 pb-4 px-4 inline">Actif
                        </button>
                        @else
                        <button
                            class="rounded-md bg-gradient-to-r from-red-400 to-red-500 text-xl text-white pt-3 pb-4 px-4 inline">supprimer
                        </button>
                        @endif
                        @endadmin
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
