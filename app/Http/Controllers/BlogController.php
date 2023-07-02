<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blogs;
use App\Models\Admin\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     *
     */
    function index( Request $request ){
		
        // $topSliderArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
        //             ->where( [ 'status' => 1 ] )
        //             ->orderBy( 'id', 'desc' )
        //             ->paginate(5);

        $topSliderArr = Categories::where( [ 'status' => 1 ] )
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();
                    // ->paginate(5);

        $topStories = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'view', 'desc' )
                    // ->offset(5)
                    ->limit(18)
                    ->get()
                    ->toArray();
        $topStories = array_chunk( $topStories, 6 );

        $recentArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'id', 'desc' )
                    ->offset(5)
                    ->limit(6)
                    ->get();

        $bestCategories = Categories::with('blog_best_single_view')
                    ->where( [ 'status' => 1 ] )
                    //->where( 'id', '!=', 13 )
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();

        return view('front.index', compact('topStories', 'topSliderArr', 'recentArr', 'bestCategories' ));
    }

	/**
	 *
	 */
	function redirectOrigionalUrl( Request $request, $short_url="" ){
		if( $short_url ){
			$blog = Blogs::select('slug')->where( [ 'short_url' => $short_url ] )->first();
			if( $blog ){
				return Redirect::to( url( '/view/'.$blog->slug ) );
			}
		}
		
		return Redirect::to( url( '/' ) );
	}
	
    /**
     *
     */
    function getCategoryWiseBlogs( Request $request, $slug="" ){
        $search = $request->q;
        $category = Categories::where( 'slug', $slug )->first();
        $blogArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'category_id' => $category->id, 'status' => 1 ] )
                    ->when( $search, function ($query, $search) {
                        return $query->where( 'title',  'LIKE', '%'.$search.'%' )
                        ->where( 'short_description', 'LIKE', '%'.$search.'%' );
                    })
                    ->paginate(15);

        $recentArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'id', 'desc' )
                    ->limit(6)
                    ->get();

        $action = url('category/'.$slug );

        $custom_page_title = $category->title;
        $meta_description = $category->title;
        $meta_keyword = $category->slug;
        // $meta_image = $category->slug;

        return view('front.blog-listing', compact('blogArr', 'recentArr', 'slug', 'action', 'request', 'custom_page_title', 'meta_description', 'meta_keyword' ));
    }

    /**
     *
     */
    function getBlogDetails( Request $request, $slug="" ){
        $data = Blogs::with('blog_tag_map', 'category', 'author')
                ->where( [ 'slug' => $slug ] )
                ->first();//, 'sub_category'

        $categories = [];//Categories::where( [ 'status' => 1 ] )
                    //->inRandomOrder()
                    //->limit(12)
                    //->get();

        $recentArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] )
                    ->orderBy( 'id', 'desc' )
                    // ->offset(5)
                    ->limit(6)
                    ->get();

        $prevBlog = Blogs::select('id', 'slug', 'title', 'image')->where( 'id', '<', $data->id )->where( 'status', 1 )->limit(1)->orderBy( 'id', 'DESC' )->get();
        $nextBlog = Blogs::select('id', 'slug', 'title', 'image')->where( 'id', '>', $data->id )->where( 'status', 1 )->limit(1)->orderBy( 'id', 'ASC' )->get();

        Blogs::increment( 'view', 1 ); // count + 5

        $custom_page_title = $data->title;
        $meta_description = $data->short_description;
        $meta_keyword = $data->short_description;
        $meta_image = url( 'storage/app/'.$data->image );

        return view('front.blog-details', compact( 'data', 'categories', 'recentArr', 'prevBlog', 'nextBlog', 'custom_page_title', 'meta_description', 'meta_keyword', 'meta_image' ) );
    }

    /**
     *
     */
    function getBlogLists( Request $request, $search='' ){

        $blogArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( [ 'status' => 1 ] );
                    if( $request->q ){
                        $search = $request->q;
                        $blogArr = $blogArr->where( 'title',  'LIKE', '%'.$search.'%' )
                        ->orWhere( 'short_description', 'LIKE', '%'.$search.'%' );
                    }
        $blogArr = $blogArr->orderBy( 'id', 'desc' )
                ->paginate(15);

        $bestCategories = Categories::with('blog_best_single_view')
                    ->where( [ 'status' => 1 ] )
                    ->inRandomOrder()
                    ->get();

        $recentArr = Blogs::with('blog_tag_map', 'category', 'author')//, 'sub_category'
                    ->where( 'status', 1 )
                    ->orderBy( 'id', 'desc' )
                    ->offset(5)
                    ->limit(6)
                    ->get();

        $slug = '';
        $action = route('readAll');
        return view('front.blog-listing', compact('blogArr', 'bestCategories', 'recentArr', 'slug', 'action', 'request' ));
    }
}
