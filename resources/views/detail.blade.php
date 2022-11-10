@extends('master')

@section('body')
    @include('sidebar')

    <h1>Main</h1>

    <a href="/guru">Back</a>

    <h2>Attendance Detail</h2>
    <table>
        <tbody>
            <tr>
                <td>Nama Guru</td>
                <td>: {{ $attendance->teacher->name }}</td>
            </tr>
            <tr>
                <td>Mapel</td>
                <td>: {{ $attendance->subject->name }}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>: {{ $attendance->kelas->name }}</td>
            </tr>
            <tr>
                <td>Date</td>
                <td>: {{ $attendance->date }}</td>
            </tr>
            <tr>
                <td>Topik</td>
                <td>: {{ $attendance->topic }}</td>
            </tr>
        </tbody>
    </table>

    <h2>Yang Sudah Hadir</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Siswa</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attdetails as $attdetail)
            <tr>
                <td>{{ $attdetail->id }}</td>
                <td>{{ $attdetail->attendance->date }}</td>
                <td>{{ $attdetail->student->name }}</td>
                <td>{{ $attdetail->attstatus }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection