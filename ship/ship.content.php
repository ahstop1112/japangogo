<section id="services-limition-section">
    <div class="container-fluid">
        <!-- <h3><i class="fas fa-plus"></i>Limitions</h3>
        <h4 class="marginLeft-15px">Prohibited Items</h4> -->
        <div class="row">
            <div class="col-md-6">
                <h5>What is “Buy for You” service?</h5>
                <p>Many people in HK wish to buy their favourite products overseas. However, most foreign online sellers will only accept local credit cards for the payment settlement. Also, some foreign online sellers will only ship locally, or they offer expensive shipping rates for international shipping. Our “Buy for You” service will fix these problems. We will help buy your desired products online, and then we will ship your item from our overseas warehouse back to our HK warehouse for collection.</p>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 txt-center">
            <?php if(isset($smsg)){ ?>
                <div class="alert alert-success" role="alert"> <?php echo $smsg; ?></div>
            <?php } ?>
            <?php if(isset($fmsg)){ ?>
                <div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?></div>
            <?php } ?><br></br>
          </div>  
        </div> 
        <div class="row">
          <div class="col-md-6">
              <input type="radio" name="buy_request" value="request_product" checked>&nbsp;&nbsp;&nbsp;&nbsp;Request Product with Full Information
              <form id="form_request_product" class="bg-light-grey" action="" method="post">
                <input type="hidden" name="buyrequest_type" value="request_product">
                <h4>1. Create an "Buy For You" Order Draft</h4>
                <h5>#Item 1</h5>
                <div class="row">
                       <div class="col-md-3 col-sm-3 marginBottom-15px">
                            <label>Link:</label>
                            <input type="text" class="input-field input-s" name="link" placeholder="Link">
                       </div>     
                       <div class="col-md-3 col-sm-3 marginBottom-15px">
                            <label>Product Title:</label>
                            <input type="text" class="input-field input-s" name="title" placeholder="Product">
                       </div> 
                       <div class="col-md-3 col-sm-3 marginBottom-15px">
                            <label>Brands: </label>
                            <select class="selectpicker" id="duration">
                                <option value="gap" selected>Gap</option>
                                <option value="ape">Ape</option>
                                <option value="tommy">Tommy Hilfiger</option>
                            </select>
                       </div> 
                       <div class="col-md-3 col-sm-3 marginBottom-15px">
                            <label>Item Types: </label>
                            <select class="selectpicker" id="duration">
                                <option value="sport_nutrition">Sport Nutrition</option>
                                <option value="sanrio_japan_character">Sanrio Japan Character</option>
                                <option value="consumer_electrionics">Consumer Electronics</option>
                            </select>
                       </div>
                       <div class="col-md-3 col-sm-3 marginBottom-15px">
                            <label>Unit Price:</label>
                            HKD <input type="text" class="input-field input-s" name="price" placeholder="Unit Price">
                       </div> 
                       <div class="col-md-3 col-sm-3 marginBottom-15px">
                            <label>Qty:</label>
                            <input type="number" class="input-field input-s" name="qty" placeholder="Qty" value="1">
                       </div>
                       <div class="col-md-3 col-sm-3 marginBottom-15px">
                            <label>Repack:</label><br>
                            <input type="checkbox" name="repack" value="true">
                       </div>
                       <div class="col-md-12 marginBottom-15px">
                            <textarea class="input-field input-s" name="remarks"></textarea>
                       </div> 
                    </div>    
                    <p class="desc">** The Unit Price should input the Discounted Price for Correct Calcuation</p>
                    <a>+ Add More</a>
                    <hr>
                    <button class="btn btn-s" id="submit_request" type="submit">Send Request</button><button class="btn btn-s grey">Reset</button>
                
              </form>  
          </div>
          <div class="col-md-6">
              <input type="radio" name="buy_request" value="upload_product">&nbsp;&nbsp;&nbsp;&nbsp;Please upload an product image which you want to search for:<br><br>
              <form id="form_upload_product" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="buyrequest_type" value="upload_product">
                <input type="file" id="input-file-now-custom-1" name="fileToUpload" id="fileToUpload"class="dropify" data-default-file="images/dummy-image.jpg" />
                <hr>
                    <button class="btn btn-s" id="submit_upload" type="submit">Send Request</button><button class="btn btn-s grey">Reset</button>
              </form>
                    
          </div>
        </div> 
         
    </div>
</section>