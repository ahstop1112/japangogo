<section id="home-calculator-section">
    <div class="container-fluid">
        <div class="main-logo-container">
            <h3><i class="fas fa-plus"></i>Delivery Fee</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="filter-container">
                    <div class="weight-container">
                        <label>總重量*</label>
                        <input type="text" class="input-s" placeholder="請輸入數字">&nbsp;公斤
                    </div>
                    <div class="volume-container">
                        <label>體積*</label>
                        <input type="text" class="input-s" placeholder="請輸入數字">&nbsp;厘米&nbsp;
                        <input type="text" class="input-s" placeholder="請輸入數字">&nbsp;厘米&nbsp;
                        <input type="text" class="input-s" placeholder="請輸入數字">&nbsp;厘米
                    </div>
                    <div class="method-container">
                        <label>提取方法</label>
                        <select class="selectpicker" id="duration">
                            <option selected="">可選擇提取方法</option>
                            <option>自取</option>
                            <option>郵寄</option>
                        </select>
                    </div>
                    <div class="delivery-container">
                        <label>派送商</label>
                        <select class="selectpicker" id="duration">
                            <option selected="">可選擇派送商</option>
                            <option>順豐</option>
                            <option>DHL</option>
                        </select>
                    </div>
                    <div class="district-container">
                        <label>地區</label>
                        <select class="selectpicker" id="duration">
                            <option selected="">可選擇提貨地區</option>
                            <option>香港</option>
                            <option>九龍</option>
                            <option>新界</option>
                        </select>
                    </div>
                    
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-md-offset-3 col-sm-offset-2 col-sm-4 col-xs-offset-0 col-xs-6 txt-right">
                    <button class="search-btn btn btn-lg grey">重置</button>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                    <button class="search-btn btn btn-lg" id="getResult">立即計算</button>
            </div>      
        </div> 
        <div class="row">
            <div class="col-md-12 txt-center">
                <p class="paddingTop-15px">* 必須填寫</p>
                <p class="remark">預購積分支付轉運費用, 最高可獲額外15%回贈。詳情請參考「積分奬賞 > 折扣價購買積分方法暴」。</p>
            </div>      
        </div>     
    </div>
</section>
