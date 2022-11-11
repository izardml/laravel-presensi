@extends('master')

@section('body')
    <div class="bg-blue-50 flex justify-center items-center h-screen">
        <form action="/login" method="post" class="w-4/5 lg:w-2/12">
            <h1 class="text-center text-2xl mb-3">Login Dulu</h1>
            @if($errors->any())
                <div class="text-xs text-red-700 mb-3 bg-red-100 p-3 rounded-md flex justify-center">
                    <ul class="list-disc">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="mb-4 ">
                <label for="email" class="hidden">Email</label>
                <input type="email" name="email" id="email" placeholder="Masukkan email..." value="{{ Session::get('email') }}" 
                    class="bg-transparent border-b border-slate-300 p-1 w-full ">
                {{-- <select name="email" id="email">
                    @error('email') border-red-600 @enderror
                    <option value="">Pilih email</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->email }}">{{ $user->name . " | " . $user->kelas->name }}</option>
                    @endforeach
                </select><br> --}}
                {{-- @error('email')
                    <p class="text-xs text-red-600">{{ $message }}</p>
                @enderror --}}
            </div>
            <div class="mb-4 ">
                <label for="password" class="hidden">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password..." class="bg-transparent border-b border-slate-300 p-1 w-full">
                {{-- @error('password')
                    <p class="text-xs text-red-600">{{ $message }}</p>
                @enderror --}}
            </div>

            <input type="submit" value="Login" class="cursor-pointer bg-blue-500 text-slate-100 text-sm p-2 rounded-md w-full hover:opacity-80">
        </form>
    </div>
@endsection