<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;

class NewsController extends Controller
{
    public function addNews()
    {
        return view('add-news');
    }


    public function storeNews(request $request)
    {
        $newsitems_id = $request->newsitems_id;
        $title = $request->title;
        $content = $request->content;
        $content2 = $request->content2;
        $date = $request->date;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);

        $news = new News();
        $news->newsitems_id = $newsitems_id;
        $news->title = $title;
        $news->content = $content;
        $news->content2 = $content2;
        $news->date = $date;
        $news->image = $imageName;
        $news->save();

        return back()->with('add-student','Student saved successfully');

    }

    public function News_list()
    {
       //$data = News::orderBy('id','dese')->paginate(10);
       $data = News::paginate(10);
       //return $data;
       return view('news_list',['news' => $data]);
    }
}
