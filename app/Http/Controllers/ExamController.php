<?php

namespace LabSys\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function index()
    {
        $exams = DB::select("SELECT * FROM exams");

        return view('exam.index')->with('exams', $exams);
    }

    public function show($id)
    {
        $exam = DB::select("SELECT * FROM exams WHERE id= ? ", [$id]);

        if(!empty($exam)){
            return view('exam.show')->with('exam',$exam);
        }else{
            return redirect()->action('ExamController@index');
        }
    }
    public function create()
    {
        return view('exam.create');
    }

    public function store(Request $request)
    {
        $data = [
            $request->name,
            $request->price
        ];
        DB::insert("INSERT INTO exams (name, price ) VALUES(?, ?)", $data);
        return redirect()->action('ExamController@index');
    }

    public function edit($id)
    {

        $exam = DB::select("SELECT * FROM exams WHERE id= ? LIMIT 1", [$id]);

        if(!empty($exam)){
            return view('exam.edit')->with(compact('exam'));
        }else{
            return redirect()->action('ExamController@index');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            $request->name,
            $request->price
        ];
        DB::update("UPDATE exams SET name = ?, price =  ? WHERE id= $id", $data);
        return redirect('/exames/'.$id);
    }

    public function destroy($id)
    {
        DB::delete("DELETE FROM exams WHERE id= {$id}");
        return redirect()->action('ExamController@index');
    }
}
