<div class="post-contents">
    <div class="single-post-content_text_media fl-wrap">
        <div class="row">
            <div class="col-md-12">
                <p class="has-drop-cap">Hi guys, in this post, we will learn how to add multiple file upload validation with array in laravel 5.7. we almost require for multiple images or file upload, so you also need to use validation like required, mimes, max etc. here you will see validation for multiple images in laravel 5, laravel 6, laravel 7, laravel 8 and laravel 9.</p>
            </div>
        </div>
    </div>
    <p>I can say you when you require to use multiple file validation like when you are doing multiple image upload and you have array of images or file object on post request then you can use this validation. so let's see bellow two way to validation in laravel.</p>
    {{-- <p><strong class="step">Create Component File</strong></p>
    <p></p>
    <p>In:</p> --}}

    <h4 class="mb_head">Way 1:</h4>
    <blockquote class="w-100">
            <div class="row">
                <div class="col-md-12">
                        <div class="line">
                            <p>public function store(Request $request)</p>
                            <p>{</p>
                                <p class="ml-10">$this->validate($request, [</p>
                                    <p class="ml-20">'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:2000'</p>
                                <p class="ml-10">],[</p>
                                    <p class="ml-20">'images.*.required' => 'Please upload an image only',</p>
                                    <p class="ml-20">'images.*.mimes' => 'Only jpeg, png, jpg and bmp images are allowed',</p>
                                    <p class="ml-20">'images.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',</p>
                                <p class="ml-10">]);</p>
                            <p>}</p>
                            <p>// Write your code</p>
                        </div>
                </div>
            </div>
    </blockquote>

    <h4 class="mb_head">Way 2:</h4>
    <blockquote class="w-100">
            <div class="row">
                <div class="col-md-12">
                        <div class="line">
                            <p>public function store(Request $request)</p>
                            <p>{</p>
                                <p class="ml-10">$input = $request->all();</p>
                                <p class="ml-10">$validator = Validator::make(</p>
                                    <p class="ml-20">$input,</p>
                                    <p class="ml-20">[</p>
                                        <p class="ml-30">'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000'</p>
                                    <p class="ml-20">],[</p>
                                        <p class="ml-30">'images.*.required' => 'Please upload an image only',</p>
                                        <p class="ml-30">'images.*.mimes' => 'Only jpeg, png, jpg and bmp images are allowed',</p>
                                        <p class="ml-30">'images.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',</p>
                                <p class="ml-20">]);</p>
                                
                                <p class="ml-20">if ($validator->fails()) {</p>
                                    <p class="ml-30">// If fails then return Validation error.. </p>
                                    <p class="ml-20">}</p>
                                <p class="ml-10">// Write your code</p>
                            <p>}</p>
                        </div>
                </div>
            </div>
    </blockquote>

    <p>I hope it can help you...</p>
</div>