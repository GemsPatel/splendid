@include('front.elements.header')
<div class="breadcrumbs-header fl-wrap">
    <div class="container">
        <div class="breadcrumbs-header_url">
            <a href="#">Home</a><a href="#">Our Shop</a><span>Checkout</span>
        </div>
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down To Discover</span>
        </div>
    </div>
    <div class="pwh_bg"></div>
</div>
<!--section   -->
<section>
    <div class="container">
        <!-- CHECKOUT TABLE -->
        <div class="row">
            <div class="col-md-8">
                <h4 class="cart-title">Your Information</h4>
                <form class="custom-form">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="Your Name *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="email" placeholder="Email Address *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="phone" placeholder="Phone *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="city" placeholder="City  *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="country" placeholder="Country  *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="code" placeholder="Postal code*" value="" />
                            </div>
                            <div class="col-sm-12">
                                <h4 class="cart-title">Payment method</h4>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="" value="Cardholder's Name" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Card Number" value="" />
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="MM" value="" />
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="YY" value="" />
                            </div>
                            <div class="col-sm-2">
                                <input type="password" placeholder="***" value="" />
                            </div>
                            <div class="col-sm-4">
                                <p style="padding-top:20px; text-align: left; font-size: 10px">*Three digits number on the back of your card</p>
                            </div>
                        </div>
                        <textarea name="comments" id="comments" cols="30" rows="3" placeholder="Addtional Notes"></textarea>
                        <div class="clearfix"></div>
                        <button class="btn   color-bg float-btn" onclick="location.href='{{url('shop')}}'" id="submit">Confirm and Pay <i class="fas fa-caret-right"></i></button>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-4">
                <!-- CART TOTALS  -->
                <div class="cart-totals  fl-wrap">
                    <h3>Cart Totals</h3>
                    <table class="total-table">
                        <tbody>
                            <tr>
                                <th>Cart Subtotal:</th>
                                <td>$695 </td>
                            </tr>
                            <tr>
                                <th>Shipping Total:</th>
                                <td>$52 </td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>$767 </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" onclick="location.href='{{url('shop')}}'" class="cart-totals_btn color-bg">Back to Shop</button>
                </div>
                <!-- /CART TOTALS  -->
            </div>
        </div>
        <!-- /CHECKOUT TABLE -->
    </div>
</section>
</div>
<!-- content  end-->
@include('front.elements.footer')