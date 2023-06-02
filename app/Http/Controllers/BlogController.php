<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blogs;
use App\Models\Admin\Categories;
use Illuminate\Support\Facades\Request;
use Stevebauman\Location\Facades\Location;

class BlogController extends Controller
{
    /**
     *
     */
    function index( Request $request ){
        $topSliderArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'id', 'desc' )
                    ->paginate(5);

        $topStories = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'view', 'desc' )
                    // ->offset(5)
                    ->limit(12)
                    ->get()
                    ->toArray();
        $topStories = array_chunk( $topStories, 4 );

        $recentArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'id', 'desc' )
                    ->offset(5)
                    ->limit(6)
                    ->get();

        $bestCategories = Categories::with('blog_best_single_view')
                    ->where( [ 'status' => 1 ] )
                    ->inRandomOrder()
                    ->get();

        //$ip = Request::ip();
        //if( $ip == "127.0.0.1" || $ip == "1" )
            $ip = "150.107.232.217";
        //}
        $locationPosition = Location::get( $ip );

        return view('front.index', compact('topStories', 'topSliderArr', 'locationPosition', 'recentArr', 'bestCategories' ));
    }

    /**
     *
     */
    function getCategoryWiseBlogs( Request $request, $slug="" ){
        $category = Categories::where( 'slug', $slug )->first();
        $blogArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'category_id' => $category->id, 'status' => 1 ] )
                    ->paginate(15);

        $recentArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'id', 'desc' )
                    // ->offset(5)
                    ->limit(6)
                    ->get();


        return view('front.blog-listing', compact('blogArr', 'recentArr'));
    }

    /**
     *
     */
    function getBlogDetails( Request $request, $slug="" ){
        $data = Blogs::with('blog_tag_map', 'category', 'author')
                ->where( [ 'slug' => $slug ] )
                ->first();//, 'sub_category'

        $categories = Categories::where( [ 'status' => 1 ] )
                    ->inRandomOrder()
                    ->limit(10)
                    ->get();

        $recentArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'id', 'desc' )
                    // ->offset(5)
                    ->limit(6)
                    ->get();

        $prevBlog = Blogs::select('id', 'slug', 'title', 'image')->where( 'id', '<', $data->id )->where( 'status', 1 )->limit(1)->orderBy( 'id', 'DESC' )->get();
        $nextBlog = Blogs::select('id', 'slug', 'title', 'image')->where( 'id', '>', $data->id )->where( 'status', 1 )->limit(1)->orderBy( 'id', 'ASC' )->get();

        Blogs::increment( 'view', 1 ); // count + 5

        return view('front.blog-details', compact( 'data', 'categories', 'recentArr', 'prevBlog', 'nextBlog' ) );
    }
}
