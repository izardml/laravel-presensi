@extends('master')

@section('body')
<div class="lg:flex">
    @include('sidebar')

    {{-- <h1>Main</h1> --}}
    <div class="lg:w-5/6">
        @include('stickybar')

        <div class="px-3 py-10 lg:px-6" id="main">
            <div class="mb-10">
                {{-- <h2 class="text-2xl font-normal mb-4 text-zinc-800">Detail</h2> --}}
                    {{-- <p>Nama Siswa: {{ $data->student->name }}</p>
                    <p>Nama Siswa: {{ $data->attendance->kelas->name }}</p> --}}

                <h2 class="text-2xl font-normal mb-4 text-zinc-800 w-full  border-b py-3">Form Presensi</h2>
                <p class="text-sm">Tanggal: {{ date("d M Y", strtotime($data->attendance->date)) }}</p>

                <form action="{{ route('siswa.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="text-sm py-3 ml-6">
                        <input type="radio" name="attstatus" id="alpha" value="tanpaKeterangan" {{ $data->attstatus == 'tanpaKeterangan' ? 'checked' : '' }}>
                        <label for="alpha">Belum Presensi</label><br>

                        <input type="radio" name="attstatus" id="hadir" value="hadir" {{ $data->attstatus == 'hadir' ? 'checked' : '' }}>
                        <label for="hadir">Hadir</label><br>

                        <input type="radio" name="attstatus" id="sakit" value="sakit" {{ $data->attstatus == 'sakit' ? 'checked' : '' }}>
                        <label for="sakit">Sakit</label><br>

                        <input type="radio" name="attstatus" id="izin" value="izin" {{ $data->attstatus == 'izin' ? 'checked' : '' }}>
                        <label for="izin">Izin</label><br>
                    </div>

                    <input type="submit" value="Submit" class="cursor-pointer text-xs bg-blue-500 text-slate-100 px-2 py-1 rounded-md hover:opacity-80">
                </form>
            </div>
        </div>
    </div>
</div>

    @include('script')
@endsection