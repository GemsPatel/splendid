<?php

use App\Models\Admin\Blogs;
use App\Models\Admin\Categories;
use App\Models\Admin\Configuration;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Request as FacadesRequest;
use App\Models\Admin\AdminMenu;
use App\Models\Admin\Permission;
use App\Models\SiteConfig;
use Illuminate\Support\Facades\Auth;

/**
 * Undocumented function
 *
 * @param [type] $key
 * @return void
 */
function getConfigurationfield($key) {
     $client = Configuration::where('config_key', $key)->first();
     if($client) {
         return $client['config_value'];
     } else {
         return false;
     }
}

/**
 *
 */
function getFrontEndMenu(){

    $menuArr = [];
    $parentArr = Categories::where( ['parent_id' => 0, 'status' => 1 ] )->get();

    foreach( $parentArr as $k=>$ar ){
        $menuArr[$k] = $ar;
        $menuArr[$k]['child'] = Categories::where( ['parent_id' =>$ar->id, 'status' => 1 ] )->get();
    }

    return $menuArr;
}

/**
 *
 */
function es_GenerateBladeFile( $fileName="test")
{
    $file = "../resources/views/blog-html/".$fileName.".blade.php";
    $content = '<div class="post-contents">
    <div class="single-post-content_text_media fl-wrap">
        <div class="row">
            <div class="col-md-12">
                <p class="has-drop-cap">In this tutorial, .</p>
            </div>
        </div>
    </div>
    <p>You.</p>
    <p><strong class="step">Create Component File</strong></p>
    <p></p>
    <p>In:</p>

    <h4 class="mb_head">resources/views/components/card.blade.php</h4>
    <blockquote class="w-100">
            <div class="row">
                <div class="col-md-12">
                        <div class="line">
                            <span style="">&lt;div class=&quot;card </span>
                        </div>
                </div>
            </div>
    </blockquote>

    <p></p>
    <p><strong class="step">Reuse Component</strong></p>
    <p></p>

    <p>Now we will create one route with blade file. on that blade file we will reuse our created component on that file with different classes as like bellow:</p>';
    $fp = fopen($file, 'w');
    fwrite($fp, $content);
    fclose($fp);
    chmod($file, 0777);  //changed to add the zero
}

/**
 *
 */
function getHostStories(){
    return Blogs::select( "slug", "title" )->where( [ 'status' => 1 ] )->inRandomOrder()->limit(12)->get();
}

/**
 *
 */
function getCurrentLocationDetails( $res='cityName' ){
    $ip = FacadesRequest::ip();
    if( $ip == "127.0.0.1" || strlen( $ip ) < 7 ){
        $ip = "150.107.232.217";
    }

    $locationPosition = Location::get( $ip );
    // echo "<pre>";
    // print_r($locationPosition);die;
    return $locationPosition->$res;
}

/**
 * @Function:        <getAdminSideMenu>
 * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
 * @Created On:      <24-11-2021>
 * @Last Modified By:Gautam Kakadiya
 * @Last Modified:   Gautam Kakadiya
 * @Description:     <This function work for get admin panel side bar menu.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
function getAdminSideMenu(){
    $parentArr = AdminMenu::where( ['parent_id' => 0, 'status' => 1 ] )->orderBy( 'sort_order', 'ASC' )->get();
    if( COUNT( $parentArr ) >0 ){
        foreach( $parentArr as $k=>$parent ){
            $parentArr[$k]['childArr'] = AdminMenu::where( [ 'parent_id' => $parent->id, 'status' => 1 ] )->orderBy( 'sort_order', 'ASC' )->get();
        }
    }

    return $parentArr;
}


/**
 * @Function:        <getAdminSideMenuPerimission>
 * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
 * @Created On:      <24-11-2021>
 * @Last Modified By:Gautam Kakadiya
 * @Last Modified:   Gautam Kakadiya
 * @Description:     <This function work for get admin panel side bar menu.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
function getAdminSideMenuPerimission(){
    $user = Auth::guard('admin')->user();
    $permissionArr = Permission::where( 'role_id', $user->role_id )->get()->pluck('menu_id');
    $result = [];
    if( !$permissionArr->isEmpty() ){
        foreach( $permissionArr as $id ){
            $result[] = $id;
        }
    }

    return $result;
}


/**
 *
 */
function getHeaderInformation( $id = 1 ){
    return SiteConfig::where( 'id', $id )->first();
}

/**
 *
 */
function createTinyUrl(){
	if( isset( $_GET['create'] ) && $_GET['create'] == 1 ){
		$blogArr = Blogs::select('id')->get();
		foreach( $blogArr as $ar ){
			$short_url = _en( time().$ar->id );
			Blogs::where( [ "id" => $ar->id ] )->update( [ "short_url" => $short_url ] );
		}
	}
}