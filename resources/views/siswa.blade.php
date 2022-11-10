@extends('master')

@section('body')
    @include('sidebar')

    <h1>Main</h1>

    <h2>Presensi Hari Ini</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Mapel</th>
                <th>Kelas</th>
                <th>Tanggal</th>
                <th>Topik</th>
                <th>Nama Siswa</th>
                <th>Kehadiran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($atttodays as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->attendance->teacher->name }}</td>
                <td>{{ $attendance->attendance->subject->name }}</td>
                <td>{{ $attendance->attendance->kelas->name }}</td>
                <td>{{ $attendance->attendance->date }}</td>
                <td>{{ $attendance->attendance->topic }}</td>
                <td>{{ $attendance->student->name }}</td>
                {{-- <td>{{ if($attendance->attstatus == 'tanpaKeterangan') ? echo 'Belum Presensi' : $attendance->attstatus }}</td> --}}
                <td>@if ($attendance->attstatus == 'tanpaKeterangan')
                    Belum Presensi
                @else
                    {{$attendance->attstatus}}
                @endif</td>
                <td>
                    <a href="{{ route('siswa.edit', $attendance->id) }}"><button>Submit</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

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
                <th>Nama Siswa</th>
                <th>Kehadiran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->attendance->teacher->name }}</td>
                <td>{{ $attendance->attendance->subject->name }}</td>
                <td>{{ $attendance->attendance->kelas->name }}</td>
                <td>{{ $attendance->attendance->date }}</td>
                <td>{{ $attendance->attendance->topic }}</td>
                <td>{{ $attendance->student->name }}</td>
                {{-- <td>{{ $attendance->attstatus }}</td> --}}
                <td>@if ($attendance->attstatus == 'tanpaKeterangan')
                    Belum Presensi
                @else
                    {{$attendance->attstatus}}
                @endif</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection