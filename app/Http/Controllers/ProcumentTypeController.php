<?php

namespace App\Http\Controllers;

use App\Models\Procument_type;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Spatie\TranslationLoader\LanguageLine;

class ProcumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro_types = DB::table('procument_types')
        ->join('language_lines', 'procument_types.description_lao', '=', 'language_lines.key')
        ->select(
            'procument_types.id','procument_types.description_lao','procument_types.description_en',
            'language_lines.group','language_lines.key'
            )
        ->where('language_lines.group', '=', 'proc_type')->orderBy('id', 'asc')
        ->get();
        return view('backend.tenders.proc_type.index', compact('pro_types'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        request()->validate([
            'description_lao' => 'required|unique:procument_types',
            'description_en' => 'required',
        ]);

        LanguageLine::create([
            'group' => 'proc_type',
            'key' => $request->get('description_lao'),
            'text' => ['en' => $request->get('description_en'), 'lo' => $request->get('description_lao')],
         ]);
    
        Procument_type::create($request->all());

        return redirect()->route('manage_proc_type.index')
                        ->with('success','ສ້າງຂໍ້ມູນ ປະເພດການຈັດຊື້-ຈັດຈ້າງສຳເລັດ.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Procument_type  $procument_type
     * @return \Illuminate\Http\Response
     */
    public function show(Procument_type $procument_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Procument_type  $procument_type
     * @return \Illuminate\Http\Response
     */
    public function edit($procument_type)
    {
        $procument_type = DB::table('procument_types')
        ->where('description_lao', '=', $procument_type)->get();

        return view ('backend.tenders.proc_type.edit', compact('procument_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Procument_type  $procument_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $procument_type)
    {

        $procument_types = DB::table('procument_types')
        ->where('description_lao', '=', $procument_type)
        ->update(['description_lao' => $request->get('description_lao'),'description_en' => $request->get('description_en')
        ]);

        $LanguageLine = DB::table('language_lines')
        ->where('group', '=', 'proc_type')
        ->where('key', '=', $procument_type)
        ->update(['key' => $request->get('description_lao'),
                  'text' => ['en' => $request->get('description_en'), 'lo' => $request->get('description_lao')],
        ]);

        return redirect()->route('manage_proc_type.index')
                        ->with('success','Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Procument_type  $procument_type
     * @return \Illuminate\Http\Response
     */
    public function destroy($procument_type)
    {
        $procument_types = DB::table('procument_types')
        ->where('description_lao', '=', $procument_type)->delete();


        $LanguageLine = DB::table('language_lines')
        ->where('key', '=', $procument_type)->delete();


        return redirect()->route('manage_proc_type.index')
                        ->with('success','Delete Success');
    }
}
