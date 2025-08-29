<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\LandingPage;
use App\Models\TrainingProgram;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $banners = Banner::orderByDesc('id')->get();
        $landingPages = LandingPage::orderByDesc('id')->get();
        return view('pages.home', compact('banners', 'landingPages'));
    }

    public function landingPages($slug){
        $landingPage = LandingPage::where('slug', $slug)->first();

        if (!$landingPage){
            return abort(404);
        }

        $landingPage->increment('views');

        return view('pages.landing-pages.' .$landingPage->html, compact('landingPage'));
    }

    // public function news($id)
    // {
    //     $news = News::where('category_id', $id)->get();

    //     return view('pages.news.index', compact('news'));
    // }

    // public function newsDetail($id)
    // {
    //     $news = News::with('category')->findOrFail($id);

    //     $relatedNews = News::where('id', '!=', $id)
    //         ->where('status', 1)
    //         ->when($news->category_id, function ($query) use ($news) {
    //             return $query->where('category_id', $news->category_id);
    //         })
    //         ->latest()
    //         ->limit(5)
    //         ->get();

    //     $prevNews = News::where('id', '<', $news->id)
    //         ->where('status', 1)
    //         ->orderBy('id', 'desc')
    //         ->first();

    //     $nextNews = News::where('id', '>', $news->id)
    //         ->where('status', 1)
    //         ->orderBy('id', 'asc')
    //         ->first();

    //     $categories = Category::withCount(['news' => function ($query) {
    //         $query->where('status', 1);
    //     }])->whereNotNull('parent_id')->get();

    //     return view('pages.news.detail', compact('news', 'relatedNews', 'prevNews', 'nextNews', 'categories'));
    // }
}
