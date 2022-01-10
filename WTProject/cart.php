<?php 
	include_once('header.php');
?>
    <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-2">
                <h4>Shopping cart</h4>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                <div class="mr-1"><img class="rounded" src="https://i0.wp.com/www.wonderslist.com/wp-content/uploads/2012/09/the-godfatherpart-1front.jpg?resize=640%2C430&ssl=1" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Haven't seen the movie in a while</span>
                    <div class="d-flex flex-row product-desc">
                        <div class="size mr-1"><span class="text-grey">For Movie:</span><span class="font-weight-bold">The Godfather</span></div>
                    </div>
                </div>
                <div>
                    <h5 class="text-grey">3 movie coins</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                <div class="mr-1"><img class="rounded" src="https://th.bing.com/th/id/R.d4221ee6bf7c0329cb693ac3316c6206?rik=OQPSMZGtm0okyg&pid=ImgRaw&r=0" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Big boy watcher</span>
                    <div class="d-flex flex-row product-desc">
                        <div class="size mr-1"><span class="text-grey">For Movie:</span><span class="font-weight-bold">Mr. and Mrs. Smith</span></div>

                    </div>
                </div>
                <div>
                    <h5 class="text-grey">9 movie coins</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
            </div>


            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" class="form-control border-0 gift-card" placeholder="discount code/gift card"><button class="btn btn-outline-warning btn-sm ml-2" type="button">Apply</button></div>
            <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><button class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="button">Remove coins from wallet and buy movies</button></div>
        </div>
    </div>
</div>
  </body>
</html>
