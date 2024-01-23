<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard/create')" :active="request()->routeIs('dashboard/create')">
                {{ __('New project') }}
            </x-nav-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Projecten overzicht!") }}
                    <br>
                    @if (session('alert'))
                        <div class="p-2 bg-yellow border-2 rounded">
                            {{ session('alert') }}
                        </div>
                    @endif
                    @foreach($projects as $project)
                        <a href="">{{ $project->titel }}</a>
                        <a href="{{route('dashboard/edit', $project)}}"
                        class="bg-yellow me-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        Wijzig
                        </a>
                        <button type="verwijder" class="rounded-md bg-orange">
                            Verwijder
                        </button>
                        <br>
                    @endforeach
                    {{$projects->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
