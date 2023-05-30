<div class="post-contents">
    <div class="single-post-content_text_media fl-wrap">
        <div class="row">
            <div class="col-md-12">
                <p class="has-drop-cap">Laravel 5 is the first version to include localization for Laravel applications. Localization is a really interesting issue that has been added to Laravel 5. We can manage several language messages using localization. You can manage different languages within your programme, in other words. For example, you may have a static title such as "Home Page," which is now in English, but you may also manage other languages, such as "Página de Inicio," if the site opens in pish.</p>
            </div>
        </div>
    </div>
    <p>As a result, Laravel 5 allows you to save multilingual messages in a file. It's simple to do with the "trans" helper. Because laravel provides a file in resources/lang, you can easily do it in your laravel application.</p>
    <p>There are different folders for different languages in the resources/lang directory; you can build a new folder for your own language. I'll show you a simple example of localization. Create resources/lang/en/messages.php and paste the code below into it.</p>
    {{-- <p><strong class="step">Create Component File</strong></p>
    <p></p>
    <p>In:</p> --}}

    <h4 class="mb_head">resources/lang/en/messages.php</h4>
    <blockquote class="w-100">
            <div class="row">
                <div class="col-md-12">
                        <div class="line">
                            <p class="">return [</p>
                            <p class="ml-10">'title' => 'Home Page Title - English',</p>
                            <p class="ml-10">'heading' => 'Home Page Heading - English',</p>
                            <p class="">];</p>
                        </div>
                </div>
            </div>
    </blockquote>

    <p>Now, for the English language, we created the messages.php file, which is used to fetch English language messages. We can now add our own language messages by creating a new folder. So I'm going to make a "es" folder for messages in pish. So, in resources/lang, make a new "es" folder. Create resources/lang/es/messages.php and paste the code below into it.</p>
    
    <h4 class="mb_head">resources/lang/es/messages.php</h4>
    <blockquote class="w-100">
        <div class="row">
            <div class="col-md-12">
                    <div class="line">
                        <p class="">return [</p>
                        <p class="ml-10">'title' => 'Home Page Title - pish',</p>
                        <p class="ml-10">'heading' => 'Home Page Heading - pish',</p>
                        <p class="">];</p>
                    </div>
            </div>
        </div>
    </blockquote>

    <p>Now we're ready to use trans helper anywhere in the view, route, or controller file. Now I'll show you an example in a view file.</p>
    <h4 class="mb_head">welcome.blade.php</h4>
    <blockquote class="w-100">
        <div class="row">
            <div class="col-md-12">
                    <div class="line">
                        <p class=""><span>@</span>('layouts.app')</p>
                        <p class=""><span>@</span>section('content')</p>
                            <p class="ml-10">&lt;div class="row"></p>
                                <p class="ml-20">&lt;div class="col-md-8"></p>
                                    <p class="ml-30">&lt;h1 class="text-primary" ><span>{</span><span>{</span> trans('messages.heading') }}&lt;/h1&gt;</p>
                                    <p class="ml-30">&lt;?php App::setLocale('es'); ?></p>
                                    <p class="ml-30">&lt;h1 class="text-primary" ><span>{</span><span>{</span> trans('messages.heading') }}&lt;/h1&gt;</p>
                                <p class="ml-20">&lt;/div&gt;</p>
                            <p class="ml-10">&lt;/div&gt;</p>
                        <p class=""><span>@</span>endsection</p>
                    </div>
            </div>
        </div>
    </blockquote>

    <p>In the above example, I used the facade function "App::setLocale" to declare the run-time language. As a result, the output shows an English message first, followed by a pish message.</p>
    <p>Change app.php to define "pish" as the default language. If you wish to make a change, open config/app.php and change locale to the name of the language folder. You can additionally specify a language message for "fallback locale." If you don't have a message for the current configured language, fallback locale will default to this language. The configuration is shown below.</p>

    <h4 class="mb_head">config/app.php</h4>
    <blockquote class="w-100">
        <div class="row">
            <div class="col-md-12">
                    <div class="line">
                        <p class="">[</p>
                            <p class="ml-10">......</p>
                            <p class="ml-10">'locale' => 'en',</p>
                            <p class="ml-10">......</p>
                            <p class="ml-10">'fallback_locale' => 'en',</p>
                            <p class="ml-10">......</p>
                        <p class="">]</p>
                    </div>
            </div>
        </div>
    </blockquote>
