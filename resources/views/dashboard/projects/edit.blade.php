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
                    {{ __($project->titel) }}
                    <form method="post" action="{{route('dashboard/store')}}" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                    @if ($errors->any())
                    <div class="p-2 bg-yellow border-2 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p class="text-gray-700 text-sm font-bold mb-2">{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                        @csrf 
                        <div class="mb-4">
                          <label class="block text-gray-700 text-sm font-bold mb-2" for="titel">
                            Titel
                          </label>
                          <input id="titel" name="titel" type="text" value="{{old('titel', $project->titel)}}" class="block w-full rounded-md border-0">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                              Beschrijving
                            </label>
                            <input id="description" name="description" type="text" value="{{old('description', $project->description)}}" class="block w-full rounded-md border-0">
                          </div>
                          <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>