<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsitem;

class NewsitemController extends Controller
{
   public function addNewsitem()
   {
       return view('newsitem');
   }

   public function storeNewsitem(request $request)
   {
       $nameol = $request->name_lo;
       $nameen = $request->name_en;

       $newsitems = new Newsitem();
       $newsitems -> name_lo = $nameol;
       $newsitems -> name_en = $nameen;
       $newsitems ->save();

       return back()->with('add-student','Student saved successfully');

   }
}
