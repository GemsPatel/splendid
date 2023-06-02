<?php

use App\Models\Admin\Blogs;
use App\Models\Admin\Categories;
use App\Models\Admin\Configuration;

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
