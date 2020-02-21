<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
        require 'require.php';
        $id = $_REQUEST['id'];
        $sql ="SELECT * FROM tbl_product WHERE _id = '".$id."'";
        $result= mysqli_query($conn, $sql);
        $row =  mysqli_fetch_array($result);
	?>
   <div class="row mt_10 ">
            <div class="col-md-6">
              <div><a class="thumbnails"> <img data-name="product_image" src="images/product/product1.jpg" alt="" /></a></div>
              <div id="product-thumbnail" class="owl-carousel">
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product1.jpg" data-fancybox="group1"> 
                    <img src="images/product/product1.jpg" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product2.jpg" data-fancybox="group1"> 
                    <img src="images/product/product2.jpg" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product3.jpg" data-fancybox="group1"> 
                    <img src="images/product/product3.jpg" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product4.jpg" data-fancybox="group1"> 
                    <img src="images/product/product4.jpg" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product5.jpg" data-fancybox="group1"> 
                    <img src="images/product/product5.jpg" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product6.jpg" data-fancybox="group1"> 
                    <img src="images/product/product6.jpg" alt="" /></a></div>
                </div>
                <div class="item">
                  <div class="image-additional"><a class="thumbnail" href="images/product/product7.jpg" data-fancybox="group1"> 
                    <img src="images/product/product7.jpg" alt="" /></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 prodetail caption product-thumb">
              <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">
              	<?=$row["_name"]?></a></h4>
              <div class="rating">
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
              </div>
              <span class="price mb_20"><span class="amount"><span class="currencySymbol">$</span><?=$row["_price"]?></span>
              </span>
              <hr>
              <ul class="list-unstyled product_info mtb_20">
                <li>
                  <label>Brand:</label>
                  <span> <a href="#">Apple</a></span></li>
                <li>
                  <label>Product Code:</label>
                  <span> product 20</span></li>
                <li>
                  <label>Availability:</label>
                  <span> In Stock</span></li>
              </ul>
              <hr>
              <p class="product-desc mtb_30"> <?=$row["_description"]?></p>
              <div id="product">
                <div class="form-group">
                  <div class="row">
                    <div class="Sort-by col-md-6">
                      <label>Sort by</label>
                      <select name="product_size" id="select-by-size" class="selectpicker form-control">
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                      </select>
                    </div>
                    <div class="Color col-md-6">
                      <label>Color</label>
                      <select name="product_color" id="select-by-color" class="selectpicker form-control">
                        <option>Blue</option>
                        <option>Green</option>
                        <option>Orange</option>
                        <option>White</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="qty mt_30 form-group2">
                  <label>Qty</label>
                  <input name="product_quantity" min="1" value="1" type="number">
                </div>
                <div class="button-group mt_30">
                  <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                  <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                  <div class="compare"><a href="#"><span>Compare</span></a></div>
                </div>
              </div>
            </div>
          </div>

</html>