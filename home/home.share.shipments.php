<?php
    header('Content-type:application/json;charset=utf-8');
    include("_include/config.php");
    session_start();

    $sport_sql = "SELECT * FROM product where category = 'Sport Nutrition'";
    $result_sport = $bd->query($sport_sql);

    $sanrio_sql = "SELECT * FROM product where category = 'Sanrio Japan Character'";
    $result_sanrio = $bd->query($sanrio_sql);

    $elec_sql = "SELECT * FROM product where category = 'Consumer Electronics'";
    $result_elec = $bd->query($elec_sql);

    
    $bd->close();
?>
<section id="home-share-shipments-section">
    <div class="container-fluid">
        <div class="main-logo-container">
            <h3><i class="fas fa-plus"></i>Best Sellers</h3>
        </div>
        <div class="row keywords-area">
            <div class="col-md-6 col-sm-6 txt-center">
                <input type="text" class="input-s" placeholder="Please Input"><button class="search-btn btn btn-s" id="getResult">Search</button>
            </div> 
            <div class="col-md-6 col-sm-6">
                <a>Gap</a> <a>Dr Martens</a> <a>Duplo</a> <a>Loreal </a>
            </div>     
        </div> 
        <div class="row">
            <div class="col-md-12">
                <h3><div class="square red"></div>Sport Nutrition</h3>
                <div class="items-slick">
                    <?
                        if ($result_sport->num_rows > 0) {
                            // output data of each row
                            while($row = $result_sport->fetch_assoc()) {
                                echo "<div>";
                                    echo "<div class='overlay-square'>";
                                        echo "<img src='images/product_image/".$row["image"]."''></div>";
                                    echo "</div>";
                             }
                        } else {
                            echo "0 results";
                        }        
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3><div class="square grey"></div> Sanrio Japan Character</h3>
                <div class="items-slick">
                    <?
                        if ($result_sanrio->num_rows > 0) {
                            // output data of each row
                            while($row = $result_sanrio->fetch_assoc()) {
                                echo "<div>";
                                    echo "<div class='overlay-square'>";
                                        echo "<img src='images/product_image/".$row["image"]."''></div>";
                                    echo "</div>";
                             }
                        } else {
                            echo "0 results";
                        }        
                    ?>  
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-md-12">
                <h3><div class="square blue"></div> Consumer Electronics</h3>
                <div class="items-slick">
                    <?
                        if ($result_elec->num_rows > 0) {
                            // output data of each row
                            while($row = $result_elec->fetch_assoc()) {
                                echo "<div>";
                                    echo "<div class='overlay-square'>";
                                        echo "<img src='images/product_image/".$row["image"]."''></div>";
                                    echo "</div>";
                             }
                        } else {
                            echo "0 results";
                        }        
                    ?>   
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-offset-3 col-md-6 txt-center paddingTop-15px">
                <button class="btn btn-lg">More</button>
            </div>
        </div>
    </div>
</section>