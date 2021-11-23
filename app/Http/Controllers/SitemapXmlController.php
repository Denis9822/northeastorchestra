<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Author;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Page;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {

        $sitemaps = [
            ['name' => url('/sitemap/sitemap-page.xml'), 'lastmod' => Carbon::today()->toAtomString()],
            ['name' => url('/sitemap/sitemap-category.xml'), 'lastmod' => Carbon::today()->toAtomString()],
            ['name' => url('/sitemap/sitemap-artists.xml'), 'lastmod' => Carbon::parse(Artist::orderBy('created_at','desc')->first()->created_at)->toAtomString()],
        ];

        $reviewsCountPage = (int) number_format(Review::count() / 5000,0) + 1;
        for ($i = 0 ; $i < $reviewsCountPage; $i++)
        {
            $lastmod = Review::orderBy('updated_at','desc')->skip($i*5000)->limit(5000)->orderBy('updated_at')->first();
            if ($lastmod != null)
            {
                $ind = $i+1;
                array_push($sitemaps,['name' => url("/sitemap/sitemap-reviews-$ind.xml"), 'lastmod' => Carbon::parse($lastmod->updated_at)->toAtomString()]);
            }
        }

        $brandsCountPage = (int) number_format(Brand::count() / 5000,0) + 1;

        for ($i = 0 ; $i < $brandsCountPage; $i++)
        {
            $lastmod = Brand::orderBy('updated_at','desc')->skip($i*5000)->limit(5000)->orderBy('updated_at')->first();
            if ($lastmod != null)
            {
                $ind = $i+1;
                array_push($sitemaps,['name' => url("/sitemap/sitemap-brand-$ind.xml"), 'lastmod' => Carbon::parse($lastmod->updated_at)->toAtomString()]);
            }
        }

        return response()->view('sitemaps.index', [
            'sitemaps' => $sitemaps
        ])->header('Content-Type', 'text/xml');
    }

    public function sitemap_page() {
        $pages = Page::all();
        $authors = Author::all();
        return response()->view('sitemaps.sitemap-page', [
            'pages' => $pages,
            'authors' => $authors
        ])->header('Content-Type', 'text/xml');
    }
    public function sitemap_category() {
        $categories = Category::all();
        return response()->view('sitemaps.sitemap-category', [
            'categories' => $categories
        ])->header('Content-Type', 'text/xml');
    }
    public function sitemap_artists() {
        $artists = Artist::orderBy('created_at','desc')->get();
        return response()->view('sitemaps.sitemap-artists', [
            'artists' => $artists
        ])->header('Content-Type', 'text/xml');
    }

    public function sitemap_reviews($id) {
        $offset = ($id-1) * 5000;
        $reviews = Review::orderBy('updated_at','desc')->skip($offset)->limit(5000)->get();
        if (count($reviews) != null)
            return response()->view('sitemaps.sitemap-reviews', [
                'reviews' => $reviews
            ])->header('Content-Type', 'text/xml');
        else
            return abort(404);
    }

    public function sitemap_brand($id) {
        $offset = ($id-1) * 5000;
        $brands = Brand::orderBy('updated_at','desc')->skip($offset)->limit(5000)->get();
        if (count($brands) != null)
            return response()->view('sitemaps.sitemap-brand', [
                'brands' => $brands
            ])->header('Content-Type', 'text/xml');
        else
            return abort(404);
    }

}
