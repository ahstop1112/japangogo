<script type="text/javascript">
    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    }


    var cart = getCookie("xxxx-shoppingCart");

    var totalCount = 0;

    var splitItem = cart.split(";");
    for (i=0;i<splitItem.length; i++) {
        var item = splitItem[i];
        if (item != null) {
            var itemDetail = item.split(":");
            if (itemDetail.length >1 ) {
                //addItemToBasket(parseInt(itemDetail[0]),parseInt(itemDetail[1]));
                totalCount += parseInt(itemDetail[1]);
            }
        }
    }
</script>
<section id="home-selected-cart-section">
    <i class="fa fa-close"></i>
    <div class="container">
        <form method="post" id="checkoutForm" action="paypal/process.php?paypal=checkout">

        <div class="col-md-9" id="basket">

            <div class="box">
                    <h1>Cart</h1>
                    <p class="text-muted"> <span id="ccCart" name="ccCart"> </span> items</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:60%" colspan="2">Products</th>
                                    <th style="width:10%">Qty</th>
                                    <th style="width:10%">Price</th>
                                    <th style="width:10%">Discount</th>
                                    <th colspan="2" style="width:10%">Total</th>
                                </tr>
                            </thead>
                            <tbody id="cartItem">
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4"><h4>Total</h4></th>
                                    <th colspan="3" class="txt-right">
                                        <h4>HKD$ <span id="totalPriceA"></span></h4>
                                        <input type="hidden" name="TotalPrice" id="TotalPrice" value="" /> 
                                        <input type="hidden" name="TotalQty" id="TotalQty" value="1" /> 
                                    </th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.table-responsive -->

                    <div class="row box-footer">
                        <div class="col-md-6 col-xs-12 marginBottom-15px">
                            <button type="button" class="btn btn-s" onclick="location.href='shareShipments.php';"><i class="fa fa-chevron-left"></i> Continue Shopping</button>
                        </div>
                        <div class="col-md-6 col-xs-12 txt-right marginBottom-15px">
                            <button type="button" class="btn btn-s" onclick="updateCart();"><i class="fa fa-refresh"></i> Update</button>
                            <button type="button" id="btn-checkout" class="btn btn-s" onclick="showCheckout();">Checkout <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
            </div>
            <!-- /.box -->


            <div class="row same-height-row">
                <div class="col-md-3 col-sm-6">
                </div>

                <div class="col-md-3 col-sm-6">
                    
                </div>

                <div class="col-md-3 col-sm-6">
                    
                </div>


                <div class="col-md-3 col-sm-6">
                    
                </div>
            </div>


        </div>
        <!-- /.col-md-9 -->
        <div class="col-md-9 hidden" id="checkout">

            <div class="row">
               <div class="col-12">
                    <h1>Checkout</h1>
                    <h3>Billing Address</h3>
                </div>
            </div>        
            <div class="row">
                <div class="col-md-6 marginBottom-15px">
                    <label for="fname">Full Name</label>
            <input type="text" id="fname" name="firstname" class="input-field input-s" placeholder="Please input your Name">

                </div>    
                <div class="col-md-6 marginBottom-15px">
                    <label for="email">Email</label>
            <input type="text" id="email" name="email"  class="input-field input-s" placeholder="Please input your Email">

                </div> 
            </div>
            <div class="row">    
                <div class="col-md-12">
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address"  class="input-field input-s" placeholder="Please input your Address">
                </div>
            </div>    
            <div class="row">
                <div class="col-md-4">
                    <h3>Payment</h3>
                    <img src="images/icons/paypal.png">
                </div>    
            </div> 
                    <!-- /.table-responsive -->
            <hr>
            <div class="row box-footer">
                <div class="col-md-6 col-xs-12 marginBottom-15px">
                    <button type="button" class="btn btn-s" id="btn-back-to-cart" onclick="showBasket();"><i class="fa fa-chevron-left"></i> Back to Cart</button>
                </div>
                <div class="col-md-6 col-xs-12 txt-right marginBottom-15px">
                    <button type="submit" class="btn btn-s">Payment <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-3">
            <div class="box" id="order-summary">
                <div class="box-header">
                    <h3>Total</h3>
                </div>
                <p class="text-muted">Additional Fees</p>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Price</td>
                                <th>HKD $ <span id="totalPriceB"></span></th>
                            </tr>
                            <tr>
                                <td>Delivery Fee</td>
                                <th>HKD $ <span id="shippingCost"></span></th>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <th>HKD $ <span id="taxCost"></span></th>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th>HKD $ <span id="totalCost"></span></th>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


            <div class="box">
                <div class="box-header">
                    <h4>Coupn</h4>
                </div>
                <p class="text-muted">Please input Coupon Code</p>
                <form>
                    <div class="input-group">

                        <input type="text" class="form-control">

                        <span class="input-group-btn">

                        <button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

            </span>
                    </div>
                    <!-- /input-group -->
                    
                </form>
            </div>

        </div>
        <!-- /.col-md-3 -->
        </form>
    </div>
</section>


<script type="text/javascript">
     document.getElementById("ccCart").innerHTML = "" + totalCount;

     var getJSON = function(url, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = 'json';
        xhr.onload = function() {
          var status = xhr.status;
          if (status === 200) {
            callback(null, xhr.response);
          } else {
            callback(status, xhr.response);
          }
        };
    xhr.send();
    };
    var totalQty = 0;
    var totalPrice = 0;
    var shippingCost = 0;
    var taxCost = 0;
    var totalCost = 0;

    function addItemToBasket(itemId,count) {
        getJSON('getProducts.php',
        function(err, data) {
          if (err !== null) {
            alert('Something went wrong: ' + err);
          } else {
            for (var i =0 ; i < data.length; i++) {
                if (data[i].id == itemId) {
                    var cartItem = document.getElementById("cartItem");
                    if (cartItem != null) {
                        cartItem.innerHTML += "<tr id=\"item-" + itemId + "\"><td style='width: 15%'><a href=\"#\"><img style=\"width:100px;\" src=\"images/product_image/" + data[i].image +"\" alt=\"" + data[i].name + " \"/><\/a><\/td><td style='width: 30%'><a href=\"#\">" + data[i].name + "<\/a><\/td><td><input id=\"number-" + itemId + "\" type=\"number\" value=\"" + count + "\" class=\"form-control\"><td style='width: 15%'>HKD $ " + data[i].price + "<\/td><td>$0.00<\/td><td style='width: 15%'>HKD $ " + (parseInt(data[i].price) * count)  + "<\/td><td><a href=\"#\"><i class=\"fa fa-times fa-2x\" onclick=\"removeFromBasket(" +  itemId + ",'item-" + itemId + "');\"><\/i><\/a><\/td><\/tr>"
                        totalQty += count;
                        totalPrice += (parseInt(data[i].price) * count);
                    }
                    //alert("add " + data[i].id + "," + count); 
                    // $products[0]['ItemName'] = _POST('itemname'); //Item Name
                    // $products[0]['ItemPrice'] = _POST('itemprice'); //Item Price
                    // $products[0]['ItemNumber'] = _POST('itemnumber'); //Item Number
                    // $products[0]['ItemDesc'] = _POST('itemdesc'); //Item Number
                    // $products[0]['ItemQty'] = _POST('itemQty'); // Item Quantity
                }
            }

            totalCost = totalPrice + shippingCost + taxCost;
          }
        });
    }

    function setCookie(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }

    function removeFromBasket(itemId,item) {
        document.getElementById(item).remove();
        removeItem(itemId);
    }

    function removeItem(itemNo) {
        var splitItem = cart.split(";");
        cart = "";
        for (i=0;i<splitItem.length; i++) {
            var item = splitItem[i];
            if (item != null) {
                var itemDetail = item.split(":");
                if (itemDetail.length >1 ) {
                    if (itemDetail[0] != itemNo) {
                        cart += itemDetail[0] + ":" + itemDetail[1] + ";";
                    } 
                }
            }
        }
        //alert(cart);
        setCookie("xxxx-shoppingCart", cart, 1);
        location.reload();
    }

    function updateCart() {
        cart = "";
        var itemInList = $('*[id^="number-"]');
        for (i=0; i < itemInList.length ; i++) {
            var itemId = itemInList[i].id.replace("number-","");
            cart += itemId + ":" + itemInList[i].value + ";";
        }
        setCookie("xxxx-shoppingCart", cart, 1);
        location.reload();
    }

    function updateTotal() { 
        document.getElementById("totalPriceA").innerHTML = totalPrice;
        document.getElementById("totalPriceB").innerHTML = totalPrice;
        document.getElementById("TotalPrice").value = totalPrice;
        // document.getElementById("TotalQty").value = totalQty;

        document.getElementById("shippingCost").innerHTML = shippingCost;
        document.getElementById("taxCost").innerHTML = taxCost;
        document.getElementById("totalCost").innerHTML = totalCost;

        setTimeout(updateTotal,500);
    }

    function showBasket(){

        var basket = document.getElementById("basket");
        basket.classList.remove("hidden");

        var checkout = document.getElementById("checkout");
        checkout.classList.add("hidden");
    }

    function showCheckout(){

        var basket = document.getElementById("basket");
        basket.classList.add("hidden");

        var checkout = document.getElementById("checkout");
        checkout.classList.remove("hidden");
    }

    setTimeout(updateTotal,500);

    var splitItem = cart.split(";");
    for (i=0;i<splitItem.length; i++) {
        var item = splitItem[i];
        if (item != null) {
            var itemDetail = item.split(":");
            if (itemDetail.length >1 ) {
                addItemToBasket(parseInt(itemDetail[0]),parseInt(itemDetail[1]));
                //totalCount += parseInt(itemDetail[1]);
            }
        }
    }
</script>