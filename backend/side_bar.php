
<?php if($pdo_auth['email']=="admin@dogkeeper.com"){ ?>
<div class="sidebar">
    <div class="container-fluid">
        <div class="user-profile media align-items-center mb-6">
                <div class="image mr-3"><a href="profile.php"><img src="profile/<?php echo $pdo_auth['file']; ?>" alt="User image" class="rounded-circle"></a></div>
                <div class="media-body lh-14">  <span class="mb-0 h6"><?php echo $pdo_auth['full_name']; ?></span>
                  <br/> <span style="font-size: 12px;"><?php echo $pdo_auth['user_type']; ?></span><br/>
                  <a href="edit_profile.php" style="font-size: 12px;"> <i class="far fa-pencil"></i> Edit Profile </a>
                </div>
            </div>
        <ul class="list-group list-group-flush list-group-borderless">
            <li class="list-group-item p-0 mb-2 lh-15">
                <a href="dashboard.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="fal fa-bars"></i></span> <span>Dashboard</span> </a>
            </li>
            <li class="list-group-item p-0 mb-2 lh-15">
                <a href="view_contact_data.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="fal fa-phone"></i></span> <span>Contact Data</span> </a>
            </li>
            <li class="list-group-item p-0 mb-2 lh-15">
                <a href="view_subscribers.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="fal fa-envelope"></i></span> <span>Subscribers </span> </a>
            </li>
            
            <li class="list-group-item p-0 mb-2 lh-15">
               <a href="#registered_members" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="false">
                  <span class="d-inline-block mr-3">
                     <i class="fal fa-user"></i>
                  </span>
                  <span>Registered Members</span>
                  <span class=" ml-auto"><i class="fal fa-chevron-down"></i></span>
               </a>
               <ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="registered_members">
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="view_registered_members.php" class="link-hover-dark-primary font-size-md">All Members</a>
                  </li>
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="view_dog_owners.php" class="link-hover-dark-primary font-size-md">Dog Owners</a>
                  </li>
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="view_service_providers.php" class="link-hover-dark-primary font-size-md">Service Providers</a>
                  </li>
               </ul>
            </li>
             

            <li class="list-group-item p-0 mb-2 lh-15">
               <a href="#invoice" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="false">
                  <span class="d-inline-block mr-3">
                     <svg class="icon icon-receipt">
                        <use xlink:href="#icon-receipt"></use>
                     </svg>
                  </span>
                  <span>FAQ</span>
                  <span class=" ml-auto"><i class="fal fa-chevron-down"></i></span>
               </a>
               <ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="invoice">
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="add_faq.php" class="link-hover-dark-primary font-size-md">Add FAQ</a>
                  </li>
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="faq.php" class="link-hover-dark-primary font-size-md">View FAQs</a>
                  </li>
               </ul>
            </li>

             <li class="list-group-item p-0 mb-2 lh-15">
               <a href="#gavab" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="false">
               <span class="d-inline-block mr-3"><i class="fal fa-star"></i></span>
               <span>Listings</span>
               <span class=" ml-auto"> <i class="fal fa-chevron-down"></i></span>
               </a>
               <ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="gavab">
                <li class="list-group-item p-0 mb-2 lh-15"><a href="all_listings.php" class="link-hover-dark-primary font-size-md">All Service Listings</a></li>
                   <li class="list-group-item p-0 mb-2 lh-15"><a href="all_listings.php" class="link-hover-dark-primary font-size-md">All Dog Listings</a></li>
                  </li><li class="list-group-item p-0 mb-2 lh-15"><hr/></li>
               </ul>
            </li>

            <li class="list-group-item p-0 mb-2 lh-15">
               <a href="#review" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="false">
               <span class="d-inline-block mr-3"><i class="fal fa-star"></i></span>
               <span>Blogs</span>
               <span class=" ml-auto"> <i class="fal fa-chevron-down"></i></span>
               </a>
               <ul class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="review">
                <li class="list-group-item p-0 mb-2 lh-15"><a href="add_blog_category.php" class="link-hover-dark-primary font-size-md">Add Blog Category</a></li>
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="view_blog_category.php" class="link-hover-dark-primary font-size-md">View Blog Category</a></li>
                  <li class="list-group-item p-0 mb-2 lh-15"><hr/></li>
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="add_blog.php" class="link-hover-dark-primary font-size-md">Add Blog</a></li>
                  <li class="list-group-item p-0 mb-2 lh-15"><a href="view_blog.php" class="link-hover-dark-primary font-size-md">View Blogs</a></li>
               </ul>
            </li>
        </ul>
    </div>
</div>
<?php  } else{ ?>

  <!-- This is sidebar of Users -->

    <div class="sidebar">
        <div class="container-fluid">
            <div class="user-profile media align-items-center mb-6">
                <div class="image mr-3"><a href="profile.php"><img src="profile/<?php echo $pdo_auth['file']; ?>" alt="User image" class="rounded-circle"></a></div>
                <div class="media-body lh-14">  <span class="mb-0 h6"><?php echo $pdo_auth['full_name']; ?></span>
                  <br/> <span style="font-size: 12px;"><?php echo $pdo_auth['user_type']; ?></span><br/>
                  <a href="edit_profile.php" style="font-size: 12px;"> <i class="far fa-pencil"></i> Edit Profile </a>
                </div>
            </div>
            <ul class="list-group list-group-flush list-group-borderless">
                <li class="list-group-item p-0 mb-2 lh-15">
                    <a href="dashboard.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="fal fa-cog"></i></span> <span>Dashboard</span> </a>
                </li>

                <li class="list-group-item p-0 mb-2 lh-15"> <a href="#wallet" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="false"> <span class="d-inline-block mr-3">  <i class="far fa-th"></i> </span> <span>My Wallet</span> <span class=" ml-auto"><i class="fal fa-chevron-down"></i></span> </a>
                        <ul
                            class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="wallet">
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="buy.php" class="link-hover-dark-primary font-size-md">Add Dog Tokens</a></li>
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="view_buy_and_balance.php" class="link-hover-dark-primary font-size-md">View My Balance</a></li>
                            <li class="list-group-item p-0 mb-2 lh-15"></li>
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="transactions.php" class="link-hover-dark-primary font-size-md">Transactions</a></li>
                            </ul>
                    </li>

                <?php if ($pdo_auth['user_type']=="Consumer") {
                    echo '<li class="list-group-item p-0 mb-2 lh-15"> <a href="#invoice" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="false"> <span class="d-inline-block mr-3"><svg class="icon icon-bag"><use xlink:href="#icon-bag"></use></svg></span> <span>My Services</span> <span class=" ml-auto"><i class="fal fa-chevron-down"></i></span> </a>
                        <ul
                            class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="invoice">
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="add_stuff.php" class="link-hover-dark-primary font-size-md">Add Services</a></li>
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="view_stuffs.php" class="link-hover-dark-primary font-size-md">View My Listings</a></li>
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="view_stuffs.php" class="link-hover-dark-primary font-size-md"></li>
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="stuff_available.php" class="link-hover-dark-primary font-size-md">Services Available</a></li>
                            </ul>
                    </li>';
                } else{
                  echo '<li class="list-group-item p-0 mb-2 lh-15"> <a href="#invoice" class="d-flex align-items-center link-hover-dark-primary font-size-md" data-toggle="collapse" aria-expanded="false"> <span class="d-inline-block mr-3"><svg class="icon icon-bag"><use xlink:href="#icon-bag"></use></svg></span> <span>My Dogs</span> <span class=" ml-auto"><i class="fal fa-chevron-down"></i></span> </a>
                        <ul
                            class="submenu collapse list-group list-group-flush list-group-borderless pt-2 mb-0 sidebar-menu" id="invoice">
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="add_dog.php" class="link-hover-dark-primary font-size-md">Add Dog</a></li>
                            <li class="list-group-item p-0 mb-2 lh-15"><a href="view_dogs.php" class="link-hover-dark-primary font-size-md">View My Dogs</a></li>
                            
                            </ul>
                    </li>
                     <li class="list-group-item p-0 mb-2 lh-15">
                          <a href="my_orders.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="far fa-ambulance"></i></span> <span>My Past Orders </span></a>
                      </li>

                      <li class="list-group-item p-0 mb-2 lh-15">
                          <a href="my_reviews.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="far fa-star"></i></span> <span>My Reviews </span></a>
                      </li>

                      <li class="list-group-item p-0 mb-2 lh-15">
                          <a href="kyc.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="far fa-key"></i></span> <span>My KYC </span></a>
                      </li>
                    ';
                }

                ?>

                

             

           
                <li class="list-group-item p-0 mb-2 lh-15">
                    <a href="profile.php" class="d-flex align-items-center link-hover-dark-primary font-size-md" > <span class="d-inline-block mr-3"><svg class="icon icon-user"><use xlink:href="#icon-user"></use></svg></span> <span>My Profile</span> </a>
                </li>
                
                 <li class="list-group-item p-0 mb-2 lh-15">
                    <hr/>
                </li>
                <li class="list-group-item p-0 mb-2 lh-15">
                    <a href="mesages.php" class="d-flex align-items-center link-hover-dark-primary font-size-md"> <span class="d-inline-block mr-3"><i class="far fa-comment"></i></span> <span>My Messages </span>
                        <?php  $count =  count_unread_message($pdo_auth['id']);
                       // print_r($count);
                    if ($count>0) { echo '<span style="padding: 5px 8px;background-color: #2bd0d0;color: #fff;display: inline-block;border-radius: 50%;width:30px;height:30px;text-align:center;zoom:70%;margin-left:10px;">'.$count.'</span>';
                    }
                     ?>
                      </a>
                </li>
            </ul>
            <div style="padding:20px"></div>
            <div class="contact-icon text-dark mb-3">
                <svg class="icon icon-headset">
                    <use xlink:href="#icon-headset"></use>
                </svg>
            </div>
             <div class="text-dark font-size-md mb-5">
                <p class="mb-2">Have any problem and
                    <br> need support? </p>
                <p class="font-weight-semibold h5 mb-2"><a target="_blank" href="../contact.php" style="color: orange">Contact Us</a></p>
                <!-- <p>Or chat with us</p> -->
            </div> <!-- <a href="contact_us.php" class="btn btn-primary font-size-md px-8 lh-15">Contact Us</a> -->
        </div>
    </div> <?php  }  ?>
