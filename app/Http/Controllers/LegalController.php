<?php

namespace App\Http\Controllers;

use App\Models\Legal;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Spatie\TranslationLoader\LanguageLine;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $legals = DB::table('legals')
        ->join('language_lines', 'legals.title_lao', '=', 'language_lines.key')
        ->select(
            'legals.id','legals.title_lao','legals.title_en','legals.file','legals.legal_cate',
            'language_lines.group','language_lines.key')
        ->where('language_lines.group', '=', 'legal')
        ->get();

        return view('legal.legal', compact('legals'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index()
    {
        $legals = DB::table('legals')
        ->join('language_lines', 'legals.title_lao', '=', 'language_lines.key')
        ->select(
            'legals.id','legals.title_lao','legals.title_en','legals.file','legals.legal_cate',
            'language_lines.group','language_lines.key')
        ->where('language_lines.group', '=', 'legal')
        ->get();

        return view('backend.legal.index', compact('legals'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.legal.create');
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
            'legal_cate' => 'required',
            'title_lao' => 'required|unique:legals,title_lao',
            'title_en' => 'required',
            'file' => 'required|mimes:pdf,xlx,csv,doc,docx,xlsx',
        ]);
        
        $fileName = time().'.'.$request->file->getClientOriginalName();  
   
        $request->file->move(public_path('storage'), $fileName);
    
        Legal::create([
            'title_lao'=> $request->get('title_lao'),
            'title_en' => $request->get('title_en'),
            'file' => $fileName,
            'legal_cate' => $request->get('legal_cate'),
         ]);

        LanguageLine::create([
            'group' => 'legal',
            'key' => $request->get('title_lao'),
            'text' => ['en' => $request->get('title_en'), 'lo' => $request->get('title_lao')],
         ]);
    
        return redirect()->route('manage_legal.store')
                        ->with('success','ສ້າງຂໍ້ມູນ ປະເພດສິນຄ້າສຳເລັດ.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function show(Legal $legal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function edit($legal)
    {
        $legals = DB::table('legals')
        ->where('title_lao', '=', $legal)->get();
        
        return view('backend.legal.edit',compact('legals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $legal)
    {
        request()->validate([
            'legal_cate' => 'required',
            'title_lao' => 'required',
            'title_en' => 'required',
            // 'file' => 'required|mimes:pdf,xlx,csv,doc,docx,xlsx',
        ]);

        $legals = DB::table('legals')
        ->where('title_lao', '=', $legal)
        ->update(['title_lao' => $request->get('title_lao'),
                'title_en' => $request->get('title_en'),
                'legal_cate' => $request->get('legal_cate'),
        ]);


        $LanguageLine = DB::table('language_lines')
        ->where('group', '=', 'legal')
        ->where('key', '=', $legal)
        ->update(['key' => $request->get('title_lao'),
                  'text' => ['en' => $request->get('title_en'), 'lo' => $request->get('title_lao')],
        ]);

        return redirect()->route('manage_legal.index')
                        ->with('success','Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Legal  $legal
     * @return \Illuminate\Http\Response
     */
    public function destroy($legal)
    {
        $files = DB::table('legals')
        ->select('file')
        ->where('title_lao', '=', $legal)->get();

        foreach ($files as $file) {
            Storage::delete('public/'.$file->file);
        }

        $LanguageLine = DB::table('language_lines')
        ->where('group', '=', 'legal')
        ->where('key', '=', $legal)->delete();

        $legals = DB::table('legals')
        ->where('title_lao', '=', $legal)->delete();

        return redirect()->route('manage_legal.index')
                        ->with('success','Delete Success');
    }
}
