<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan');
    }

    public function baru(Request $request){
        //dd($request->all(Request $request));
         $query = DB::table('pertanyaan')->insert([
    'exampleInputjudul' => Str::random(10),
    'exampleInputisi' => Str::random(10),
    'exampleInputprofilid' => Str::random(10),
  
    
]);    return redirect('/pertanyaan/create');
}
}
