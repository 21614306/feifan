<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Controllers\AuthenticationController;
use App\Models\Authentication;
use App\Models\Article;
use App\Models\Basis;
use App\Models\Company;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Pagination\Paginator;




class ArticleController extends Controller
{
    public function index()
    {
    	$auths = Authentication::all();
    	$cases = Article::all()->where('type','case_news')->take(4);
    	$news = Article::all()->where('type','industry_news')->take(4);
    	$base = Basis::find(1);
    	$companys = Company::all();

    	// dd($base);`
    	return view('index',[
    		'auths' => $auths,
    		'cases' => $cases,
    		'news' =>$news,
    		'base' => $base,
    		'companys'=>$companys
    	]);
    }

    public function solutions()
    {
        $sysAuths = Authentication::all()->where('type','1');
        $cusAuths = Authentication::all()->where('type','0');
        $base = Basis::find(1);
        $companys = Company::all();
        return view('solutions',[
            'sysAuths'=>$sysAuths,
            'cusAuths'=>$cusAuths,
            'base'=>$base,
        'companys'=>$companys

        ]);
    }


      //    public function authDetail(Request $req)
   //  {
   //   $id = $req->id;
   //   $auth = Authentication::find($id);
   //   $auths = Authentication::all()->where('type','体系验厂');
   //   $base = Basis::find(1);
   //   $companys = Company::all();
   //   $articles = Article::where('title','like','%'.$auth->name.'%')->get();
   //   // dd($articles);

   //   // dd($base);`
   //   return view('authDetail',[
   //     'auth' => $auth,
   //     'auths' => $auths,
   //     'base' => $base,
   //     'companys'=>$companys,
   //     'articles' =>$articles
   //   ]);
   //  }

    public function solutionsInform(Request $req)
    {
     $id = $req->id;
     $auth = Authentication::find($id);
     $base = Basis::find(1);
      $companys = Company::all();

     return view('solutionsInform',[
      'auth'=>$auth,
      'base'=>$base,
        'companys'=>$companys

     ]);


    }


    //GRS认证
       public function productShow()
    {
        // $auths = Authentication::where('name','like','%'.$keyword.'%')->get();
        $base = Basis::find(1);
        $companys = Company::all();
        $grsArticles = Article::where('title','like','%GRS%')->orderBy('updated_at','desc')->take(5)->get();
      $companys = Company::all();

        return view('productShow',[
            'base'=>$base,
            'grsArticles'=>$grsArticles,
        'companys'=>$companys

        ]);
    }


       public function customerCase()
    {
        $base = Basis::find(1);
        $cases = Article::where('type','case_news')->orderBy('updated_at','desc')->take(8)->get();
        // dd($cases);
      $companys = Company::all();

        return view('customerCase',[
            'base'=>$base,
            'cases'=>$cases,
        'companys'=>$companys

        ]);
    }

    public function caseInform(Request $req)
    {
        $id = $req->id;
        $article = Article::find($id);
        $base = Basis::find(1);
      $companys = Company::all();

     return view('caseInform',[
      'article'=>$article,
      'base'=>$base,
        'companys'=>$companys

     ]);

    }


       public function serviceCenter()
    {
        $base = Basis::find(1);
      $companys = Company::all();

        return view('serviceCenter',[
            'base'=>$base,
        'companys'=>$companys

        ]);
    }




       //       public function success()
   //  {
      
   //   $base = Basis::find(1);
   //   $companys = Company::all();
   //      $articles = Article::where('type','case_news')->paginate(5);
   //      $industry_news = Article::where('type','industry_news')->paginate(5);
   //      $cases = Article::where('type','case_news')->paginate(5);
   //      $auths = Authentication::all();
   //      $args = [
   //          'lastPage'=>$articles->lastPage(),
   //          'currentPage'=>$articles->currentPage(),
   //      ];
   //   return view('success',[
   //          'articles'=>$articles,
   //          'case'=>$articles,
   //          'args' =>$args,
   //     'base' => $base,
   //     'industry_news'=>$industry_news,
   //          'cases'=>$cases,
   //          'companys'=>$companys,
   //          'auths'=>$auths
   //   ]);
   //  }



       public function news()
    {
        $base = Basis::find(1);
      $companys = Company::all();

        $cases = Article::where('type','industry_news')->paginate(6);
               $args = [
            'lastPage'=>$cases->lastPage(),
            'currentPage'=>$cases->currentPage(),
        ];

        return view('news',[
            'base'=>$base,
            'news'=>$cases,
            'args' =>$args,
        'companys'=>$companys

        ]);
    }


    public function newsInform(Request $req)
    {
        $base = Basis::find(1);
        $id = $req->id;
        $article = Article::find($id);
      $companys = Company::all();

      return view('newsInform',[
        'base'=>$base,
        'article'=>$article,
        'companys'=>$companys

      ]);
    }

    public function about()
    {
        $base = Basis::find(1);
      $companys = Company::all();

        return view('about',[
            'base'=>$base,
        'companys'=>$companys
            
            
        ]);
    }

 


   //  public function authSearch(Request $req)
   //  {
   //      $keyword = $req->keyword;
   //      $auths = Authentication::where('name','like','%'.$keyword.'%')->get();
   //      $base = Basis::find(1);
   //      $companys = Company::all();

   //      return view('authSearch',[
   //          'auths' => $auths,
   //          'base' => $base,
   //          'companys'=>$companys
   //      ]);
   //  }

   // public function articleDetail (Request $req)
   //  {
   //      $id = $req->id;
   //      $article = Article::find($id);
   //      $article_next =Article::find($id+1);
   //      $article_pre =Article::find($id-1); 
   //      $articles = Article::all()->where('type','case_news');
   //      $base = Basis::find(1);
   //      $companys = Company::all();
   //     $b =  Markdown::convertToHtml($article->content); 
   //      return view('articleDetail',[
   //          'base' => $base,
   //          'articles'=>$articles,
   //          'companys'=>$companys,
   //          'article'=>$article,
   //          'article_pre'=>$article_pre,
   //          'article_next'=>$article_next
   //      ]);
   //  }


   //   public function yanchang()
   //  {
    	
   //  	$base = Basis::find(1);
   //  	$companys = Company::all();
   //  	$auths = Authentication::all()->where('type','客户验厂');
   //  	return view('yanchang',[
   //  		'auths' => $auths,
   //  		'base' => $base,
   //  		'companys'=>$companys
   //  	]);
   //  }


   //   public function solutions()
   //  {
        
   //      $base = Basis::find(1);
   //      $companys = Company::all();
   //      $auths = Authentication::all()->where('type','客户验厂');
   //      return view('solutions',[
   //          'auths' => $auths,
   //          'base' => $base,
   //          'companys'=>$companys
   //      ]);
   //  }



   //  public function tixi()
   //  {
   //  	$auths = Authentication::all()->where('type','体系验厂');
   //  	$base = Basis::find(1);
   //  	$companys = Company::all();
   //  	return view('tixi',[
   //  		'auths' => $auths,
   //  		'base' => $base,
   //  		'companys'=>$companys
   //  	]);
   //  }

   //    public function grs(Request $req)
   //  {
   //  	$page = $req->page?($req->page):1;
   //  	$base = Basis::find(1);
   //  	$companys = Company::all();
   //      $articles = Article::where('title','like','%grs%')->paginate(5);
   //      // dd($articles);
   //      $args = [
   //          'lastPage'=>$articles->lastPage(),
   //          'currentPage'=>$articles->currentPage(),
   //      ];



   //          return view('grs',[
   //          'articles' => $articles,
   //          'base' => $base,
   //          'companys'=>$companys,
   //          'args'=>$args
   //      ]);

   //  }

   //       public function abouts()
   //  {
    	
   //  	$base = Basis::find(1);
   //  	$companys = Company::all();
   //  	return view('about',[
    	
   //  		'base' => $base,
   //  		'companys'=>$companys
   //  	]);
   //  }

   //       public function success()
   //  {
    	
   //  	$base = Basis::find(1);
   //  	$companys = Company::all();
   //      $articles = Article::where('type','case_news')->paginate(5);
   //      $industry_news = Article::where('type','industry_news')->paginate(5);
   //      $cases = Article::where('type','case_news')->paginate(5);
   //      $auths = Authentication::all();
   //      $args = [
   //          'lastPage'=>$articles->lastPage(),
   //          'currentPage'=>$articles->currentPage(),
   //      ];
   //  	return view('success',[
   //          'articles'=>$articles,
   //          'case'=>$articles,
   //          'args' =>$args,
   //  		'base' => $base,
   //  		'industry_news'=>$industry_news,
   //          'cases'=>$cases,
   //          'companys'=>$companys,
   //          'auths'=>$auths
   //  	]);
   //  }

   //       public function news()
   //  {
    	
   //  	$base = Basis::find(1);
   //  	$companys = Company::all();
   //  	return view('news',[
    	
   //  		'base' => $base,
   //  		'companys'=>$companys
   //  	]);
   //  }


   //  public function liucheng()
   //  {
   //      $auths = Authentication::all();
   //      $cases = Article::all()->where('type','case_news');
   //      $news = Article::all()->where('type','company_news');
   //      $base = Basis::find(1);
   //      $companys = Company::all();

   //      // dd($base);`
   //      return view('liucheng',[
   //          'auths' => $auths,
   //          'cases' => $cases,
   //          'news' =>$news,
   //          'base' => $base,
   //          'companys'=>$companys
   //      ]);
   //  }

}
