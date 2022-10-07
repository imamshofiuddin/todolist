<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TodoList::getTodoList()->get();

        return view('index')->with([
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::orderBy('nama', 'asc')->get();
        return view('add')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mhs' => 'required',
            'todo' => 'required',
        ]);

        $todolist = new TodoList();
        $todolist->id_mahasiswa = $request->input('mhs');
        $todolist->todo = $request->input('todo');
        $todolist->is_aktif = true;
        $todolist->is_done = false;

        if($request->input('keterangan') == NULL){
            $todolist->keterangan = "-";
        } else {
            $todolist->keterangan = $request->input('keterangan');
        }

        $todolist->save();

        return redirect('/');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::orderBy('nama','asc')->get();
        $data = TodoList::findOrFail($id);

        $mhs_active = Mahasiswa::where('id','=', $data->id_mahasiswa)->get();
        
        foreach ($mhs_active as $mhs) {
            $current_mhs = $mhs;
        }
        return view('show')->with([
            'data' => $data,
            'mahasiswa' => $mahasiswa,
            'mhs_active' => $current_mhs
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
        $item = TodoList::findOrFail($id);
        if(isset($_POST['done'])){
            $is_done = $request->input('is_done');
        }
        
        $item->id_mahasiswa = $request->input('mhs');
        $item->todo = $request->input('todo');
        $item->keterangan = $request->input('keterangan');
        if(isset($_POST['is_done'])){
            $item->is_done = 1;
            $item->is_aktif = 0;
        } else {
            $item->is_done = 0;
            $item->is_aktif = 1;
        }

        $item->update();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TodoList::findOrFail($id);
        $item->delete();
        return redirect('/');
    }
}
