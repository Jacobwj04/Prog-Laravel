<nav class="flex gap-4">
        <a href="">
            Logo
            <img src="" alt="">
        </a>
        <ul class="flex gap-4">
            <li class="text-3xl mr-3 px-4 py-2 {{ (Route::currentRouteName() == 'homepage') ? 'text-red-500' : 'text-black' }}">
            <a href="{{route ('homepage')}}">Home</a>
            </li>
            <li class="text-3xl mr-3 px-4 py-2 {{ (Route::currentRouteName() == 'project.index') ? 'text-red-500' : 'text-black' }}">
            <a href="{{route ('project.index')}}">Projecten</a>
            </li>
        </ul>
    </nav>