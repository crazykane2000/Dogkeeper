<?php if (check_dogOwner($pdo_auth)) {
    ?>

<div class="features card-deck">
    <div class="card rounded-0 border-0 bg-transparent mb-6">
        <a href="view_dogs.php"><div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-primary lh-1" ><?php echo get_count_items('my_dog', 'uploaded_by_id', $pdo_auth['id']) ?></span>
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">All <br> Dogs</span>
        </div></a>
    </div>
    <div class="card rounded-0 border-0 bg-transparent mb-6">
       <a href="active_dogs.php"> <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-darker-light lh-1"><?php echo get_count_items_andd2('my_dog', 'uploaded_by_id', $pdo_auth['id'], "status", "Active"); ?></span>
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Active <br> Dogs</span>
        </div></a>
    </div>
    <div class="card rounded-0 border-0 bg-transparent mb-6">
       <a href="inactive_dogs.php"> <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published"><?php echo get_count_items_andd2('my_dog', 'uploaded_by_id', $pdo_auth['id'], "status", "Pending"); ?></span>
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Inactive<br> Dogs</span>
        </div></a>
    </div>
   
</div>
<?php
}else{  ?>

<div class="features card-deck">
    <div class="card rounded-0 border-0 bg-transparent mb-6">
        <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-primary lh-1" >15</span>
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">All <br> Dogs</span>
        </div>
    </div>
    <div class="card rounded-0 border-0 bg-transparent mb-6">
        <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-darker-light lh-1">0</span>
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Active <br> Dogs</span>
        </div>
    </div>
    <div class="card rounded-0 border-0 bg-transparent mb-6">
        <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published">12</span>
            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Services<br> Used</span>
        </div>
    </div>
   
</div>

<?php  } ?>