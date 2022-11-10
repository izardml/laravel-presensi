@extends('master')

@section('body')
    <div class="bg-blue-50 flex justify-center items-center h-screen ">
        <form action="/login" method="post" class="w-4/5 ">
            <h1 class="text-center text-2xl mb-6">Login Dulu</h1>
            @csrf
            <label for="email" class="hidden">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email..." value="{{ Session::get('email') }}" required class="bg-transparent border-b border-slate-300 mb-2 p-1 w-full"><br>
            {{-- <select name="email" id="email">
                <option value="">Pilih email</option>
                @foreach ($users as $user)
                <option value="{{ $user->email }}">{{ $user->name . " | " . $user->kelas->name }}</option>
                @endforeach
            </select><br> --}}

            <label for="password" class="hidden">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password..." required class="bg-transparent border-b border-slate-300 mb-2 p-1 w-full"><br>

            <input type="submit" value="Login" class="bg-blue-500 text-slate-100 text-sm p-2 rounded-md w-full hover:opacity-80">
        </form>
    </div>
@endsection