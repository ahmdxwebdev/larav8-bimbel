<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Validator;



class EdulevelController extends Controller
{
    public function data() {
        $edulevels = DB::table('edulevels')->get();
        return view('edulevel/data', ['edulevels' => $edulevels]);

    }

    public function add() {
        return view('edulevel/add');
    }

    public function addProcess(Request $request) {

        $request->validate([
            'name' => 'required | min: 2',
            'desc' => 'required | min: 2'
        ]);

        DB::table('edulevels')->insert(
            [
                 'name' => $request->name,
                 'desc' => $request->desc
            ]
        );
        return redirect('edulevels')->with('status', 'Jenjang berhasil di tambah!');
    }

    public function edit($id) {
        $edulevels = DB::table('edulevels')->where('id', $id)->first();
        return view('edulevel/edit', ['edulevels'=>$edulevels]);
    }

    public function editProcess(Request $request, $id) {

        $request->validate([
            'name' => 'required | min: 2',
            'desc' => 'required | min: 2'
        ]);

        DB::table('edulevels')->where('id', $id)->update([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil diupdate!');
    }

    public function delete($id) {
        DB::table('edulevels')->where('id', $id)->delete();
        return redirect('edulevels')->with('status', 'Data berhasil di delete!');
    }
}
