<?php

namespace App\Http\Controllers;

use App\Models\key_doc_category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;

class KeyDocCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $key_doc_categories = DB::table('key_doc_categories')
        ->join('language_lines', 'key_doc_categories.title_lao', '=', 'language_lines.key')
        ->select(
            'key_doc_categories.id','key_doc_categories.title_lao','key_doc_categories.title_en',
            'language_lines.group','language_lines.key'
            )
        ->where('language_lines.group', '=', 'key_doc_category')->orderBy('id', 'asc')
        ->get();

        return view('backend.key_document.key_category.create', compact('key_doc_categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.key_document.key_category.create');
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
            'title_lao' => 'required|unique:key_doc_categories',
            'title_en' => 'required',
        ]);
    
        key_doc_category::create($request->all());

        LanguageLine::create([
            'group' => 'key_doc_category',
            'key' => $request->get('title_lao'),
            'text' => ['en' => $request->get('title_en'), 'lo' => $request->get('title_lao')],
         ]);
    
        return redirect()->route('manage_key_categories.store')
                        ->with('success','ສ້າງຂໍ້ມູນ ປະເພດສິນຄ້າສຳເລັດ.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\key_doc_category  $key_doc_category
     * @return \Illuminate\Http\Response
     */
    public function show(key_doc_category $key_doc_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\key_doc_category  $key_doc_category
     * @return \Illuminate\Http\Response
     */
    public function edit($key_doc_category)
    {
        $key_doc_categories = DB::table('key_doc_categories')
        ->where('title_lao', '=', $key_doc_category)->get();
        return view('backend.key_document.key_category.edit',compact('key_doc_categories','key_doc_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\key_doc_category  $key_doc_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $key_doc_category)
    {

        $key_doc_categories = DB::table('key_doc_categories')
        ->where('title_lao', '=', $key_doc_category)
        ->update(['title_lao' => $request->get('title_lao'),'title_en' => $request->get('title_en')
        ]);


        $LanguageLine = DB::table('language_lines')
        ->where('key', '=', $key_doc_category)
        ->update(['key' => $request->get('title_lao'),
                  'text' => ['en' => $request->get('title_en'), 'lo' => $request->get('title_lao')],
        ]);

        return redirect()->route('manage_key_categories.index')
                        ->with('success','Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\key_doc_category  $key_doc_category
     * @return \Illuminate\Http\Response
     */
    public function destroy($key_doc_category)
    {

        $key_doc_categories = DB::table('key_doc_categories')
        ->where('title_lao', '=', $key_doc_category)->delete();


        $LanguageLine = DB::table('language_lines')
        ->where('key', '=', $key_doc_category)->delete();


        return redirect()->route('manage_key_categories.index')
                        ->with('success','Delete Success');

    }
}
