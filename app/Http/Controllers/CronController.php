<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdminMenu;
use App\Models\Admin\Blogs;
use App\Models\Admin\Categories;
use App\Models\Admin\Configuration;
use App\Models\Admin\Country;
use App\Models\Admin\Language;
use App\Models\Admin\Permission;
use App\Models\Notification;
use DateTime;
use Twilio\Rest\Client;
use ZipArchive;
use Cion\TextToSpeech\Facades;
use Cion\TextToSpeech\Facades\TextToSpeech;

class CronController extends Controller
{
    /**
     *
     */
    public function getXMLMP3(){
        // $rss=simplexml_load_file('https://anchor.fm/s/e118b50/podcast/rss');
        $rss=simplexml_load_file('https://feeds.buzzsprout.com/1670911.rss');
        dd($rss);
        foreach ($rss->channel->item as $item) {
            if (isset($item->enclosure)) {
                pr($item);
                // echo $item->enclosure['url'].'<br>';
            }
        }
    }

    /**
     * test function
     */
    public function updateCountryFlag()
    {
        return TextToSpeech::source('website')
            ->convert('https://splendid.shreegurve.tech/view/5-ways-to-build-resilient-leadership-in-challenging-times');

        $countryArr = Country::all();

        foreach( $countryArr as $ar ){
            $ar->image = "public/country/".$ar->sortname.".png";
            $ar->save();
        }
    }

    /**
     * @Function:        <sendAndroidNotification>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <04-01-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Send Android notification in every 5 minutes>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function sendAndroidNotification()
    {
        $notification = Notification::where( ['status' => 1, 'is_android_send' => 0 ] )->first();
        if( !empty( $notification ) )
        {
            sendAndroidNotification( $notification->title, $notification->message );
            $notification->is_android_send = 1;
            $notification->save();
        }
    }

    /**
     * @Function:        <sendIOSNotification>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <04-01-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for Send IOS notification in every 5 minutes>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function sendIOSNotification()
    {
        $notification = Notification::where( ['status' => 1, 'is_ios_send' => 0 ] )->first();
        if( !empty( $notification ) )
        {
            sendIOSNotification( $notification->title, $notification->message );
            $notification->is_android_send = 1;
            $notification->save();
        }
    }

    /**
     * @Function:        <Generate Country Alias by name>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <26-01-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for generate country alias by its name>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function generateCountryAlias()
    {
        $countryArr = Country::all();
        foreach( $countryArr as $ar )
        {
            $ar->alias = convertStringToSlug( $ar->name );
            $ar->save();
        }
    }

    /**
     * @Function:        <Generate Country Alias by name>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <26-01-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for generate country alias by its name>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function generateLanguageAlias()
    {
        $languageArr = Language::all();
        foreach( $languageArr as $ar )
        {
            $ar->alias = convertStringToSlug( $ar->name );
            $ar->save();
        }
    }

    /**
     * @Function:        <generateAdminMenuSeeder>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <26-01-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for generate country alias by its name>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function generateAdminMenuSeeder()
    {
        $languageArr = AdminMenu::all();
        foreach( $languageArr as $ar )
        {
            echo "['id' => ".$ar->id.",  'class_name' => '".$ar->class_name."', 'parent_id' => ".$ar->parent_id.", 'name' => '".$ar->name."', 'slug' => '".$ar->slug."', 'icon' => '".$ar->icon."', 'status' => ".$ar->status.", 'sort_order' => ".$ar->sort_order.",  'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],<br>";
        }
    }

    /**
     * @Function:        <generateConfigurationSeeder>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <26-01-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for generate country alias by its name>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function generateConfigurationSeeder()
    {
        $languageArr = Configuration::all();
        foreach( $languageArr as $ar )
        {
            echo "['id' => ".$ar->id.", 'config_key' => '".$ar->config_key."', 'config_value'=> '".$ar->config_value."',  'status' => ".$ar->status.", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],<br>";
        }
    }

    /**
     * @Function:        <generateAdminPermissionSeeder>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <26-01-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for generate country alias by its name>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function generateAdminPemissionSeeder()
    {
        $languageArr = Permission::all();
        foreach( $languageArr as $ar )
        {
            echo "['id' => ".$ar->id.",  'menu_id' => '".$ar->menu_id."', 'user_id' => ".$ar->user_id.", 'role_id' => '".$ar->role_id."', 'add' => '".$ar->add."', 'edit' => '".$ar->edit."', 'delete' => ".$ar->delete.", 'view' => ".$ar->view.",  'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],<br>";
        }
    }

    /**
     * @Function:        <generateAdminMenuSeeder>
     * @Author:          Gautam Kakadiya( ShreeGurave Dev Team )
     * @Created On:      <11-02-2022>
     * @Last Modified By:Gautam Kakadiya
     * @Last Modified:   Gautam Kakadiya
     * @Description:     <This function work for generate country alias by its name>.
     * API: 2753
     * @return \Illuminate\Http\Response
     */
    function generateCategorySeeder()
    {
        $languageArr = Categories::all();
        foreach( $languageArr as $ar )
        {
            echo "['id' => ".$ar->id.",  'parent_id' => '".$ar->parent_id."', 'title' => '".$ar->title."', 'slug' => '".$ar->slug."', 'image' => '".$ar->image."', 'status' => ".$ar->status.", 'sort_order' => ".$ar->sort_order.",  'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],<br>";
        }
    }

    /**
     *
     */
    function generateBladeFile()
    {
        $file = "../resources/views/blog-html/test.blade.php";
        $content = '<div class="post-contents">
        <div class="single-post-content_text_media fl-wrap">
            <div class="row">
                <div class="col-md-12">
                    <p class="has-drop-cap">In this tutorial, .</p>
                </div>
            </div>
        </div>
        <p>You can easily create blade component in laravel 5, laravel 6, laravel 7, laravel 8 and laravel 9 using this example.</p>
        <p><strong class="step">Create Component File</strong></p>
        <p></p>
        <p>In this step, we will create new folder for components and create card blade file for our component as like bellow:</p>

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
    public function getSplenditTitle(){
        $titleArr = [
            ''
        ];

        foreach( $titleArr as $title ){
            $slug = convertStringToSlug( $title );

            if( Blogs::where( 'slug', $slug )->first() == null )
            {
                $blog = new Blogs();
                $blog->user_id = auth()->guard('admin')->user()->id;
                $blog->category_id = 18;
                $blog->sub_category_id = 0;
                $blog->title = $title;
                $blog->slug = $slug;
                $blog->short_description = $title;
                $blog->status = 0;
                $blog->save();
            }
        }
    }

    /**
     *
     */
    public function testTextToSpeech(){
        // convert website articles & blog posts to an audio file
        return TextToSpeech::source('website')
            ->convert('https://medium.com/cloud-academy-inc/an-introduction-to-aws-polly-s3-and-php-479490bffcbd');
    }
}
