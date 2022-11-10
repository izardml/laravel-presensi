@extends('master')

@section('body')
    {{-- @include('sidebar') --}}

    {{-- <h1>Main</h1> --}}
<div class="px-3 py-10">
    <h2 class="text-xl font-medium mb-2">Form Buat Presensi</h2>
    <form action="/guru" method="post">
        @csrf
        <select name="subject_id" id="subject_id" class="text-xs">
            <option value="">Pilih Mapel</option>
            @foreach ($subjects as $subject)
            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>
        <select name="kelas_id" id="kelas_id" class="text-xs">
            <option value="">Pilih Kelas</option>
            @foreach ($kelass as $kelas)
            <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
            @endforeach
        </select>
        <input type="text" name="topic" id="topic" placeholder="Masukkan topik..." class="bg-transparent border-b border-slate-300 text-xs mb-2 p-1">
        <input type="submit" value="Submit" class="bg-blue-500 text-slate-100 text-[10px] px-2 py-1 rounded-md hover:opacity-80">
    </form>

    <h2>Daftar Presensi</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Mapel</th>
                <th>Kelas</th>
                <th>Tanggal</th>
                <th>Topik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->teacher->name }}</td>
                <td>{{ $attendance->subject->name }}</td>
                <td>{{ $attendance->kelas->name }}</td>
                <td>{{ $attendance->date }}</td>
                <td>{{ $attendance->topic }}</td>
                <td>
                    <a href="/guru/{{ $attendance->id }}"><button>Detail</button></a>
                    |
                    <button onclick="return confiirm('Are you sure?')">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection