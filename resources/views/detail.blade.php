@extends('master')

@section('body')
<div class="lg:flex">
    @include('sidebar')

    {{-- <h1>Main</h1> --}}

    <div class="lg:w-5/6">
        <div class="w-full h-10 bg-blue-500 lg:hidden">
            <button id="hamburger" name="hamburger" type="button" class="block absolute left-4">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>
        </div>
        
        <div class="px-3 py-10 lg:px-6" id="main">
            {{-- <a href="/guru"><button class="text-xs bg-blue-500 text-slate-100 px-2 py-1 mb-3 rounded-md hover:opacity-80">Back</button></a> --}}
            <div class="mb-10">
                <h2 class="text-2xl font-normal mb-4 text-zinc-800">Detail</h2>
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
            </div>
            <div class="mb-10">
                <h2 class="text-2xl font-normal mb-4 text-zinc-800">Daftar Siswa</h2>
                <div class="overflow-scroll">
                    <table class="w-full">
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
                                <td class="text-center">{{ $attdetail->id }}</td>
                                <td class="text-center">{{ date("d M Y", strtotime($attdetail->attendance->date)) }}</td>
                                <td>{{ $attdetail->student->name }}</td>
                                <td class="text-center">
                                    @if($attdetail->attstatus == "tanpaKeterangan")
                                        Belum Presensi
                                    @else
                                        {{ $attdetail->attstatus }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('script')
@endsection