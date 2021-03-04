<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procument_method;

use Illuminate\Support\Facades\DB;
use Spatie\TranslationLoader\LanguageLine;

class ProcumentMethodController extends Controller
{
    public function index()
    {
        $proc_methods = DB::table('procument_methods')
        ->join('language_lines', 'procument_methods.description_lao', '=', 'language_lines.key')
        ->select(
            'procument_methods.id','procument_methods.description_lao','procument_methods.description_en',
            'language_lines.group','language_lines.key'
            )
        ->where('language_lines.group', '=', 'proc_method')->orderBy('id', 'asc')
        ->get();
        return view('backend.tenders.proc_method.index', compact('proc_methods'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function store(Request $request)
    {
        request()->validate([
            'description_lao' => 'required|unique:procument_methods',
            'description_en' => 'required',
        ]);

        LanguageLine::create([
            'group' => 'proc_method',
            'key' => $request->get('description_lao'),
            'text' => ['en' => $request->get('description_en'), 'lo' => $request->get('description_lao')],
         ]);
    
         Procument_method::create($request->all());

        return redirect()->route('proc_method.index')
                        ->with('success','ສ້າງຂໍ້ມູນ ປະເພດການຈັດຊື້-ຈັດຈ້າງສຳເລັດ.');
    }
}
