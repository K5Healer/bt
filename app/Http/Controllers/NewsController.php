<?php

namespace App\Http\Controllers;

use App\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=NewsModel::paginate(4);
        // return view('admin.layout.ListNews',['news'=>$news]);
        return view('admin.layout.ListNews',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.layout.AddNews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $list=new NewsModel();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $this->imagename($file->getClientOriginalName());
            $avatar = time() . "_banner_" . $name;
            while (file_exists('images/banner/' . $avatar)) {
                $avatar = time() . "_banner_" . $name;
            }
            $file->move('images/banner/', $avatar);
            $image = $avatar;
        }
        else{
            $image= 'no-img.jpg';
        }
        $list->image=$image;
        $list->Detail=$request->detail;
        $list->content=$request->content;
        $list->title=$request->title;
       // dd($list->title);
        $list->save();
        return redirect()->route('News');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $model=NewsModel::get();
        $news=NewsModel::paginate(6);
        // dd($news);
        return view('pages.tintuc',['news'=>$news,'model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data=NewsModel::find($id);
        return view('admin.layout.EditNews',['data'=>$data]);
       // dd($data->id);
    }
  public function post_edit($id,Request $request){
      $data=NewsModel::find($id);
      if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $this->imagename($file->getClientOriginalName());
            $avatar = time() . "_banner_" . $name;
            while (file_exists('images/banner/' . $avatar)) {
                $avatar = time() . "_banner_" . $name;
            }
            $file->move('images/banner/', $avatar);
            $image = $avatar;
        }
        else{
            $image= 'no-img.jpg';
        }
        $data->image=$image;
        $data->Detail=$request->detail;
        $data->content=$request->content;
        $data->title=$request->title;
       // dd($list->title);
        $data->save();
        return redirect()->route('News');

  }
    public function delete($id){
          NewsModel::find($id)->delete();
       return redirect()->back();
   }
   public function Showchitiet($id){
     $model=NewsModel::get();
        $news=NewsModel::paginate(3);
       $news_detail=NewsModel::find($id);
       return view('pages.chitiet',['news'=>$news,'news_detail'=>$news_detail,'model'=>$model]);

   }
   public function search_new(Request $request){
    
        $model=NewsModel::get();
         $search=$request->get('search');
         $post= NewsModel::where('title','like','%'.$search.'%')->paginate(6);
         return view('pages.Search',['post'=>$post,'model'=>$model]);
   }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsModel $newsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsModel  $newsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsModel $newsModel)
    {
        //
    }
}
