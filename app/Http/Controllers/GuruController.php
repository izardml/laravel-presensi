<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Subject;
use App\Models\Attdetail;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = Subject::all();
        $kelas = Kelas::whereNot('id', 1)->get();
        $teacher_id = Auth::user()->id;
        // $attendance = Attendance::all();
        $attendances = Attendance::where('teacher_id', $teacher_id)
            ->orderBy('id', 'desc')
            ->get();
        $attendances = Attendance::paginate(5);

        return view('guru')->with([
            'no' => 1,
            'subjects' => $subject,
            'kelass' => $kelas,
            'attendances' => $attendances,
        ]);
        // return response([
        //     'attendances' => $attendance,
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher_id = Auth::user()->id;

        $data = [
            'teacher_id' => $teacher_id,
            'subject_id' => $request->subject_id,
            'kelas_id' => $request->kelas_id,
            'date' => date('Y-m-d'),
            'topic' => $request->topic,
        ];

        Attendance::create($data);
        $attendance = Attendance::latest()->first();

        $users = User::where([
            ['kelas_id', '=', $request->kelas_id],
        ])->get();

        $jumlah_siswa = User::where([
            ['kelas_id', '=', $request->kelas_id],
        ])->count();

        foreach($users as $user){
            Attdetail::create([
                'attendance_id' => $attendance->id,
                'student_id' => $user->id,
                'attstatus' => 'tanpaKeterangan',
            ]);
        }

        return redirect('/guru');
        // return response([
        //     'first' => $users,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = [
            'id' => 1,
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
        ];
        $attendance = Attendance::find($id);
        $attdetail = Attdetail::where('attendance_id', $id)->get();

        return view('detail')->with([
            'no' => 1,
            'user' => $user,
            'attendance' => $attendance,
            'attdetails' => $attdetail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attdetail::where('attendance_id', $id)->delete();

        Attendance::destroy($id);

        return redirect()->route('guru.index');
    }
}
