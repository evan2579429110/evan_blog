<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{

	public function __construct()
    {

        $this->middleware('auth');

    }
    //article_list
	public function index()
	{
        $start=Input::get('start');
        if(isset($start) && !empty($start)){}else{
            $start=0;
        }

        $articleinfo= DB::table('articles')->skip($start)->take(5)->get();
        foreach($articleinfo as &$v){
            $v->author=DB::table('users')->where('id',$v->userid)->orderBy('id','desc')->lists('name')['0'];
        }
        return json_encode($articleinfo);
	}

	public function create(){
        return view('article.create');
	}


	//article create
	public function store(){
        $params['content']=Input::get('text');
        $params['title']=Input::get('title');
        $params['userid']=Auth::id();
        $ret=Article::create($params);

        if($ret){
            \Common::output('OK');
        }else{
           \Common::output('ERROR');
        }

	}

}
