@extends('master')

@section('body')
<div class="lg:flex">
    @include('sidebar')

    {{-- <h1>Main</h1> --}}
    <div class="lg:w-5/6">
        @include('stickybar')

        <div class="px-3 py-10 lg:px-6" id="main">
            <div class="mb-10 print:hidden">
                <h2 class="text-2xl font-normal mb-4 text-zinc-800">Form Buat Presensi</h2>
                <form action="/guru" method="post" class="mb-4">
                    @csrf
                    <div class="">
                        <select name="subject_id" id="subject_id" required class="cursor-pointer text-xs bg-blue-500 text-slate-100 px-2 py-1 rounded-md hover:opacity-80">
                            <option value="">Pilih Mapel</option>
                            @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                        <select name="kelas_id" id="kelas_id" required class="cursor-pointer text-xs bg-blue-500 text-slate-100 px-2 py-1 rounded-md hover:opacity-80">
                            <option value="">Pilih Kelas</option>
                            @foreach ($kelass as $kelas)
                            <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="text" name="topic" id="topic" placeholder="Masukkan topik..." required class="bg-transparent border-b border-slate-300 text-xs mt-3 mb-2 p-1 w-full">
                    <input type="submit" value="Submit" class="cursor-pointer text-xs bg-blue-500 text-slate-100 px-2 py-1 rounded-md hover:opacity-80">
                </form>
            </div>

            <div class="mb-10">
                <div class="flex justify-between print:justify-center">
                    <h2 class="text-2xl font-normal mb-2 text-zinc-800 print:mb-4">Daftar Presensi</h2>
                    <button onclick="print()" class="print:hidden text-sm bg-blue-500 text-slate-100 px-2 mb-2 rounded-md hover:opacity-80 lg:px-4 lg:py-1 lg:w-auto lg:mr-3">Print</button>
                </div>
                <div class="overflow-scroll lg:overflow-auto">
                    @if($attendances->count())
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th>No</th>
                                {{-- <th>Nama Guru</th> --}}
                                <th class="w-2/12 print:w-3/12">Mapel</th>
                                <th>Kelas</th>
                                <th>Tanggal</th>
                                <th class="w-4/12 print:w-3/12">Topik</th>
                                <th class="w-2/12 print:hidden">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendances as $attendance)
                            <tr>
                                {{-- <td class="text-center">{{ $attendance->id }}</td> --}}
                                <td class="text-center">{{ $no++ }}</td>
                                {{-- <td>{{ $attendance->teacher->name }}</td> --}}
                                <td>{{ $attendance->subject->name }}</td>
                                <td class="text-center">{{ $attendance->kelas->name }}</td>
                                <td class="text-center">{{ date("d M Y", strtotime($attendance->date)) }}</td>
                                <td>{{ $attendance->topic }}</td>
                                <td class="lg:flex lg:justify-center print:hidden">
                                    <a href="/guru/{{ $attendance->id }}"><button class="text-sm bg-blue-500 text-slate-100 px-2 rounded-md hover:opacity-80 w-full lg:px-4 lg:py-1 lg:w-auto lg:mr-3">Detail</button></a>
                                    <a href="/guru/{{ $attendance->id }}/delete"><button onclick="return confirm('Are you sure?')" class="text-sm bg-red-600 text-slate-100 px-2 rounded-md hover:opacity-80 w-full lg:px-4 lg:py-1 lg:w-auto lg:mr-3">Hapus</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        @include('pengalihan')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

    @include('script')
@endsection