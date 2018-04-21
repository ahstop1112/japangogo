<script type="text/javascript">
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

    // console.log(getJSON);

    var products;

    getJSON('getProducts.php',
    function(err, data) {
      if (err !== null) {
        alert('Something went wrong: ' + err);
      } else {
        //console.log(data);
       // alert('Your query : ' + data.length);
      // products = data;
        //alert(document.getElementById("product-data").value);
        for (var i =0 ; i < data.length; i++) {
            if (document.getElementById("cat_" + data[i].category) == null) {
                var catView = document.getElementById("category-view");
                catView.innerHTML += "<li class=\"list-item cat-wear\"><div class=\"list-content\" id=\"cat_" + data[i].category + "\"> <a  name=\"" + data[i].category + "\"  onclick=\"javascript:updateProductList(this.name);\">" + data[i].category + "</\a><\/div><\/li>";
            }
        }
        updateProductList(data[0].category);
      }
    });

    function updateProductList(category) {
        getJSON('getProducts.php',
        function(err, data) {
          if (err !== null) {
            alert('Something went wrong: ' + err);
          } else {
           // alert('Your query : ' + data.length);
          // products = data;
            //alert(document.getElementById("product-data").value);
            var productView = document.getElementById("masonry");
            productView.innerHTML = "";
            for (var i =0 ; i < data.length; i++) {
                if (data[i].category == category) {
                    productView.innerHTML += "<div  style=\"position:relative; float: left; height: 400px; \" class=\"content\"><div class=\"img\"><img style=\"height:auto;width:auto;max-width:200px;max-height:200px\" src=\"images/product_image\/" + data[i].image + "\"><\/div><h6 style='max-width: 96%'>" + data[i].name + "<\/h6><h5>HKD $" + data[i].price + "<\/h5> <div style=\"bottom:30px; \"><button id=\"item-" + data[i].id + "\" name=\"" + data[i].id + "\" class=\"btn btn-lg\" onclick=\"javascript:addItem(this.name);\">Add to Cart<\/button><\/div><\/div>";
                }
            }

          }
        });
    }

    function setCookie(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }

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

    function addItem(itemNo) {
        var cart = getCookie("xxxx-shoppingCart");
        
        if (cart == null) {
            cart = itemNo + ":" + 1 + ";";
        } else {
            var isModify = false;
            var splitItem = cart.split(";");
            cart = "";
            for (i=0;i<splitItem.length; i++) {
                var item = splitItem[i];
                if (item != null) {
                    var itemDetail = item.split(":");
                    if (itemDetail.length >1 ) {
                        if (itemDetail[0] == itemNo) {
                            itemDetail[1] = (parseInt(itemDetail[1]) + 1).toString();
                            isModify = true;
                        }
                        cart += itemDetail[0] + ":" + itemDetail[1] + ";";
                    }
                }
            }
            if (isModify == false) {
                cart += itemNo + ":" + 1 + ";";
            }
        }
        // alert(cart);
        setCookie("xxxx-shoppingCart", cart, 1);
    }


</script>
<section id="share-shipments-section">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <ul class="drag-list selected-cart" id="category-view">
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="masonry">
                </div>
            </div>    
        </div>
    </div>
</section>