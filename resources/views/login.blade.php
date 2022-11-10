@extends('master')

@section('body')
    <div class="row d-flex justify-content-center">
        <form action="/login" method="post" class="border border-5 border-secondary p-5 col-3 rounded">
            @csrf
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Masukkan email..." value="{{ Session::get('email') }}" required class="form-control"><br>
            {{-- <select name="email" id="email">
                <option value="">Pilih email</option>
                @foreach ($users as $user)
                <option value="{{ $user->email }}">{{ $user->name . " | " . $user->kelas->name }}</option>
                @endforeach
            </select><br> --}}


            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" placeholder="Masukkan password..." required class="form-control"><br>

            <input type="submit" value="Login" class="btn btn-primary">
        </form>
    </div>
@endsection