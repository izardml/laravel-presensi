@extends('master')

@section('body')
    @include('sidebar')
    
    <h2>Detail</h2>
    <p>Nama Siswa: {{ $data->student->name }}</p>
    <p>Nama Siswa: {{ $data->attendance->kelas->name }}</p>

    <h2>Form Presensi Tgl. {{ $data->attendance->date }}</h2>

    <form action="{{ route('siswa.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="radio" name="attstatus" id="alpha" value="tanpaKeterangan" {{ $data->attstatus == 'tanpaKeterangan' ? 'checked' : '' }}>
        <label for="alpha">Belum Presensi</label><br>

        <input type="radio" name="attstatus" id="hadir" value="hadir" {{ $data->attstatus == 'hadir' ? 'checked' : '' }}>
        <label for="hadir">Hadir</label><br>

        <input type="radio" name="attstatus" id="sakit" value="sakit" {{ $data->attstatus == 'sakit' ? 'checked' : '' }}>
        <label for="sakit">Sakit</label><br>

        <input type="radio" name="attstatus" id="izin" value="izin" {{ $data->attstatus == 'izin' ? 'checked' : '' }}>
        <label for="izin">Izin</label><br>

        <input type="submit" value="Submit">
    </form>
@endsection