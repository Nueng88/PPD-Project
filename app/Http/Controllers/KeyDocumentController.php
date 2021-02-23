<?php

namespace App\Http\Controllers;

use App\Models\key_document;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class KeyDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $key_doc_categories = DB::table('key_doc_categories')->get();
        
        $key_documents = DB::table('key_documents')
        ->join('language_lines', 'key_documents.title_lao', '=', 'language_lines.key')
        ->select(
            'key_documents.id','key_documents.title_lao','key_documents.title_en','key_documents.file','key_documents.key_cate',
            'language_lines.group','language_lines.key'
            )
        ->get();
        return view('key_document.index', compact('key_documents','key_doc_categories'));
    }

    public function index()
    {
        $key_doc_categories = DB::table('key_doc_categories')->get();
        
        $key_documents = DB::table('key_documents')
        ->join('language_lines', 'key_documents.title_lao', '=', 'language_lines.key')
        ->select(
            'key_documents.id','key_documents.title_lao','key_documents.title_en','key_documents.file','key_documents.key_cate',
            'language_lines.group','language_lines.key'
            )
        ->get();
        return view('backend.key_document.create', compact('key_documents','key_doc_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.key_document.create');
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
            'key_cate' => 'required',
            'title_lao' => 'required|unique:key_documents,title_lao',
            'title_en' => 'required',
            'file' => 'required|mimes:pdf,xlx,csv,doc,',
        ]);
        
        $fileName = time().'.'.$request->file->getClientOriginalName();  
   
        $request->file->move(public_path('storage'), $fileName);
    
        key_document::create([
            'title_lao'=> $request->get('title_lao'),
            'title_en' => $request->get('title_en'),
            'file' => $fileName,
            'key_cate' => $request->get('key_cate'),
         ]);

        LanguageLine::create([
            'group' => 'key_doc',
            'key' => $request->get('title_lao'),
            'text' => ['en' => $request->get('title_en'), 'lo' => $request->get('title_lao')],
         ]);
    
        return redirect()->route('manage_key.store')
                        ->with('success','ສ້າງຂໍ້ມູນ ປະເພດສິນຄ້າສຳເລັດ.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\key_document  $key_document
     * @return \Illuminate\Http\Response
     */
    public function show(key_document $key_document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\key_document  $key_document
     * @return \Illuminate\Http\Response
     */
    public function edit(key_document $key_document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\key_document  $key_document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, key_document $key_document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\key_document  $key_document
     * @return \Illuminate\Http\Response
     */
    public function destroy($key_doc)
    {
        $key_doc = DB::table('key_doc_categories')
        ->where('title_lao', '=', $key_doc)->delete();


        $LanguageLine = DB::table('language_lines')
        ->where('key', '=', $key_doc)->delete();
        


        return redirect()->route('manage_key.index')
                        ->with('success','Delete Success');
    }
}
