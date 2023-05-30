@include('front.elements.header')
<div class="breadcrumbs-header fl-wrap">
    <div class="container">
        <div class="breadcrumbs-header_url">
            <a href="#">Home</a><a href="#">Our Shop</a><span>Your Cart</span>
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
                <h4 class="cart-title">Your Cart: </h4>
                <table class="table table-border checkout-table">
                    <tbody>
                        <tr>
                            <th class="hidden-xs">Item</th>
                            <th>Description</th>
                            <th class="hidden-xs">Price</th>
                            <th>Count</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td class="hidden-xs">
                                <a href="#"><img src="{{url('public/img/shop/5.jpg')}}" alt="" class="respimg"></a>
                            </td>
                            <td>
                                <h5 class="product-name">Merch Tea Cup</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="order-money">$239 </h5>
                            </td>
                            <td>
                                <input type="number" name="cartin1" value="1" max="50" min="1" class="order-count">
                            </td>
                            <td>
                                <h5 class="order-money">$239 </h5>
                            </td>
                            <td class="pr-remove">
                                <a href="#" title="Remove"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="hidden-xs">
                                <a href="#"><img src="{{url('public/img/shop/2.jpg')}}" alt="" class="respimg"></a>
                            </td>
                            <td>
                                <h5 class="product-name">Gmag Merch Wallet</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title order-money">$112</h5>
                            </td>
                            <td>
                                <input type="number" name="cartin2" value="1" max="50" min="1" class="order-count">
                            </td>
                            <td>
                                <h5 class="order-money">$112</h5>
                            </td>
                            <td class="pr-remove">
                                <a href="#" title="Remove"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="hidden-xs">
                                <a href="#"><img src="{{url('public/img/shop/1.jpg')}}" alt="" class="respimg"></a>
                            </td>
                            <td>
                                <h5 class="product-name">Awesome Merch Wallet</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title order-money">$51</h5>
                            </td>
                            <td>
                                <input type="number" name="cartin3" value="2" max="50" min="1" class="order-count">
                            </td>
                            <td>
                                <h5 class="order-money">$344</h5>
                            </td>
                            <td class="pr-remove">
                                <a href="#" title="Remove"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- COUPON -->
                <div class="coupon-holder fl-wrap">
                    <input type="text" name="cartcoupon" placeholder="Coupon code">
                    <button type="submit" class="btn-a">Apply</button>
                    <button type="submit" class="pull-right btn-uc">Update Cart</button>
                </div>
                <!-- /COUPON -->
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
                    <button type="submit" class="cart-totals_btn color-bg">Proceed to Checkout</button>
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
