<style>
.button {
    background-color: #dc3545;
    border: 1px solid transparent;
    color: white;
    padding: 8px 175px;
    text-align: center;
    font-size: 16px;
    margin: 30px 2px;
    opacity: 0.9;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    display: inline-block;
    text-decoration: none;
    cursor: pointer;
    border-radius: 6px;
}

.button:hover {opacity: 1}
</style>
<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.jpg" ?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control" onClick="location.href='checkout.php'">Proceed to Buy</button>
                    </div>
                    <div class="col">
                    <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit""disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control"> Add to Cart</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">8,534 ratings | 100+ answered questions</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>₹20,000</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">₹<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">₹5000</span></td>
                    </tr>
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a class="font-rale font-size-12">Sneakpick<br>Deliverd</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a class="font-rale font-size-12">Brand <br>Guarantee</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Nov 10 </small>
                    <small>Sold by <a href="index.php">Sneakpick </a>(4.5 out of 5 | 8,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 400602</small>
                </div>
                <!-- !order-details -->
                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <!-- <h6 class="font-baloo">Color:</h6> -->
                                <!-- <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div> -->
                                <!-- <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div> -->
                                <!-- <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div> -->
                            </div>
                        </div>
                
                    
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!-- size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                    <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14"> 6 </button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14"> 7 </button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14"> 8 </button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14"> 9 </button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14"> 10 </button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14"> 11 </button>
                        </div>
                    </div>
                </div>
                <!-- !size -->
                <button title="button title" class="button" onclick=" window.open('http://localhost:8501', '_blank'); return false;">View similar</button>
            </div>

            

            <div class="col-12">
               <br> 
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">A pair of round-toe white sneakers, has regular styling, lace-up detail
                <br>Canvas upper
                <br>Cushioned footbed
                <br>Textured and patterned outsole
                <br>Warranty: 3 months
                <br>Warranty provided by brand/manufacturer
                <br>
                <br>Material & Care
                <br>Canvas
                <br>Wipe with a clean, dry cloth to remove dust</p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
        endif;
        endforeach;
?>