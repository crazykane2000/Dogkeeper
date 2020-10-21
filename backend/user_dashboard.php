<?php if(check_dogOwner($pdo_auth)){ ?>
<div class="new_module">
    <div class="row">
        <div class="col-lg-3 equal">
            <div class="card rounded-0 border-0 contact py-6 px-3 equal">
                <a href="view_dogs.php"><div class="card-body text-center p-0" style="text-align: left !important;">
                    <img src="dog1.jpg" style="width: 100%">
                    <div style="padding: 4px;"></div>
                    <a href="view_dogs.php" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                        <span class="letter-spacing-25">My Dogs</span>
                    </a>
                    <p style="line-height: 1.1em">See All Your Dogs Here</p>
                </div></a>
            </div>
        </div>

        <div class="col-lg-3 equal">
            <div class="card rounded-0 border-0 contact py-6 px-3 equal">
                <a href="mesages.php"><div class="card-body text-center p-0" style="text-align: left !important;">
                    <img src="dog2.jpg" style="width: 100%">
                    <div style="padding: 4px;"></div>
                    <a href="mesages.php" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                        <span class="letter-spacing-25">My Messages</span>
                    </a>
                    <p style="line-height: 1.1em">Your all messages are here</p>
                </div></a>
            </div>
        </div>

        <div class="col-lg-3 equal">
            <div class="card rounded-0 border-0 contact py-6 px-3 equal">
                <div class="card-body text-center p-0" style="text-align: left !important;">
                    <img src="dog3.jpg" style="width: 100%">
                    <div style="padding: 4px;"></div>
                    <a href="my_orders.php" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                        <span class="letter-spacing-25">My Orders/Payments</span>
                    </a>
                    <p style="line-height: 1.1em">List of your past orders</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 equal">
            <div class="card rounded-0 border-0 contact py-6 px-3 equal">
                <div class="card-body text-center p-0" style="text-align: left !important;">
                    <img src="../images/dog4.png" style="width: 100%">
                    <div style="padding: 4px;"></div>
                    <a href="my_reviews.php" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                        <span class="letter-spacing-25">My Reviews</span>
                    </a>
                    <p style="line-height: 1.1em">List of your past Reviews</p>
                </div>
            </div>
        </div>


       
    </div>
</div>
<?php }else{ ?>
<div class="new_module">
    <div class="row">
        <div class="col-lg-4 equal">
            <div class="card rounded-0 border-0 contact py-6 px-3 equal">
                <div class="card-body text-center p-0" style="text-align: left !important;">
                    <img src="dog1.jpg" style="width: 100%">
                    <div style="padding: 4px;"></div>
                    <a href="view_stuffs.php" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                        <span class="letter-spacing-25">My Listings</span>
                    </a>
                    <p style="line-height: 1.1em">Sell your Services Here</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 equal">
            <div class="card rounded-0 border-0 contact py-6 px-3 equal">
                <div class="card-body text-center p-0" style="text-align: left !important;">
                    <img src="dog2.jpg" style="width: 100%">
                    <div style="padding: 4px;"></div>
                    <a href="mesages.php" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                        <span class="letter-spacing-25">My Messages</span>
                    </a>
                    <p style="line-height: 1.1em">Your all messages are here</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 equal">
            <div class="card rounded-0 border-0 contact py-6 px-3 equal">
                <div class="card-body text-center p-0" style="text-align: left !important;">
                    <img src="../images/dog4.png" style="width: 100%">
                    <div style="padding: 4px;"></div>
                    <a href="coming_soon.php" class="card-title h5 text-dark d-inline-block mb-2" tabindex="0">
                        <span class="letter-spacing-25">My Orders</span>
                    </a>
                    <p style="line-height: 1.1em">List of your past orders</p>
                </div>
            </div>
        </div>

       
    </div>
</div>
<?php } ?>
