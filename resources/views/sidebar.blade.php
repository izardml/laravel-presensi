<div id="sidebar" class="text-zinc-800 bg-white z-50 fixed w-3/4 h-full px-4 shadow-lg -left-full duration-300 lg:block lg:static lg:w-1/6 lg:h-screen">
    {{-- <h1>Sidebar</h1> --}}

    <div class="mt-10 flex pb-8 border-b">
        {{-- <h2>Profil</h2> --}}
        <img src="/assets/img/avatar.png" alt="avatar" class="w-10 h-10 rounded-full inline-block mr-3">
        <div class="">
            <p class="text-xl text-zinc-800">{{ Auth::user()->name }}</p>
            <p class="text-xs text-zinc-600">{{ Auth::user()->email }}</p>
        </div>
    </div>
    <div class="mt-10 flex pb-8">
        {{-- <h2>Menu</h2> --}}
        <ul>
            @if (auth()->user()->role == "guru")
                <li class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="inline " viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                    <a href="/guru">Beranda</a>
                </li>
            @else
                <li class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="inline " viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                    <a href="/siswa">Beranda</a>
                </li>
            @endif
            <li class="text-red-700 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="inline" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/><path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/></svg>
                <a href="/logout">Logout</a>
            </li>
        </ul>
    </div>
</div>