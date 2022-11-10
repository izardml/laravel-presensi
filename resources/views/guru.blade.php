@extends('master')

@section('body')
    @include('sidebar')

    <h1>Main</h1>

    <h2>Form Buat Presensi</h2>
    <form action="/guru" method="post">
        @csrf
        <select name="subject_id" id="subject_id">
            <option value="">Pilih Mapel</option>
            @foreach ($subjects as $subject)
            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>
        <select name="kelas_id" id="kelas_id">
            <option value="">Pilih Kelas</option>
            @foreach ($kelass as $kelas)
            <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
            @endforeach
        </select>
        <input type="text" name="topic" id="topic" placeholder="Masukkan topik...">
        <input type="submit" value="Submit">
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
@endsection