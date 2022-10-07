<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TodoList extends Model
{
    use HasFactory;
    protected $table = 'todolist';
    protected $fillable = [
        'id_mahasiswa',
        'todo',
        'keterangan',
        'is_aktif',
        'is_done'
    ];

    static function getTodoList() {
        $result=DB::table('mahasiswa')->join('todolist','mahasiswa.id','=','todolist.id_mahasiswa');

        return $result;
    }
}
