<header id="header" class="main-header header-sticky header-sticky-smart header-style-10 text-uppercase bg-white">
    <div class="header-wrapper sticky-area border-bottom" style="z-index: 99 !important">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl">
                <div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
                    <div class="navbar-toggler toggle-icon" data-toggle="collapse" data-target="#navbar-main-menu"> <span></span></div>
                    <a class="navbar-brand navbar-brand-mobile" href="dashboard.php"> <img src="../images/dog_logo.png" style="width: 120px;" alt="Dog Keeper"> </a> <a class="mobile-button-search" href="#search-popup" data-gtf-mfp="true" data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'><i class="far fa-search"></i></a></div>
                <div class="collapse navbar-collapse" id="navbar-main-menu">
                    <a class="navbar-brand d-none d-xl-block" href="dashboard.php"> <img src="../images/dog_logo.png" style="width: 120px;" alt="Dog Keeper"> </a>
                    <div class="form-search form-search-style-04 d-flex mr-auto">
                    <form action="search_handle.php" method="POST">
                        <div class="d-flex align-items-center">
                            <div class="form-search-items d-flex">
                                <div class="form-search-item d-flex align-items-center what border-right"><label for="key-word">What</label>
                                    <div class="input-group dropdown show bg-transparent"><input list="hgy" name="searcher" type="text" autocomplete="off" id="key-word" class="form-control bg-transparent border-0" placeholder="Ex: Dog Walking, Bog Grooming" data-toggle="dropdown" aria-haspopup="true">
                                    </div>
                                    <datalist id="hgy">
                                        <option>Dog Bathing</option>
                                        <option> Dog Walking</option>
                                        <option>Dog Keeping</option>
                                        <option>Dog Consultancy</option>
                                        <option>Dog Health Planning</option>
                                        <option>Dog Services</option>
                                        <option>Dog Grooming</option>
                                       <option> Other</option>
                                    </datalist>
                                </div>
                                <div class="form-search-item d-flex align-items-center where"><label for="region">Where</label>
                                    <select class="form-control bg-transparent border-0" required="" name="location">
                                         <datalist id="browsers">
                                            <option value="">Select by County</option>
                                                <option value="" selected="">All Places</option>
                                                  <optgroup label="Connecticut">
                                                    <option>Fairfield</option>
                                                    <option>Hartford</option>
                                                    <option>Litchfield</option>
                                                    <option>Middlesex</option>
                                                    <option>New Haven</option>
                                                    <option>New London</option>
                                                    <option>Tolland</option>
                                                    <option>Windham</option>
                                                  </optgroup>
                                                  <optgroup label="New York">
                                                    <option>Albany</option>
                                                    <option>Allegany</option>
                                                    <option>Bronx</option>
                                                    <option>Broome</option>
                                                    <option>Cattaraugus</option>
                                                    <option>Cayuga</option>
                                                    <option>Chautauqua</option>
                                                    <option>Chemung</option>
                                                    <option>Chenango</option>
                                                    <option>Clinton</option>
                                                    <option>Columbia</option>
                                                    <option>Cortland</option>
                                                    <option>Delaware</option>
                                                    <option>Dutchess</option>
                                                    <option>Erie</option>
                                                    <option>Essex</option>
                                                    <option>Franklin</option>
                                                    <option>Fulton</option>
                                                    <option>Genesee</option>
                                                    <option>Greene</option>
                                                    <option>Hamilton</option>
                                                    <option>Herkimer</option>
                                                    <option>Jefferson</option>
                                                    <option>Kings</option>
                                                    <option>Lewis</option>
                                                    <option>Livingston</option>
                                                    <option>Madison</option>
                                                    <option>Monroe</option>
                                                    <option>Montgomery</option>
                                                    <option>Nassau</option>
                                                    <option>New York</option>
                                                    <option>Niagara</option>
                                                    <option>Oneida</option>
                                                    <option>Onondaga</option>
                                                    <option>Ontario</option>
                                                    <option>Orange</option>
                                                    <option>Orleans</option>
                                                    <option>Oswego</option>
                                                    <option>Otsego</option>
                                                    <option>Putnam</option>
                                                    <option>Queens</option>
                                                    <option>Rensselaer</option>
                                                    <option>Richmond</option>
                                                    <option>Rockland</option>
                                                    <option>Saint Lawrence</option>
                                                    <option>Saratoga</option>
                                                    <option>Schenectady</option>
                                                    <option>Schoharie</option>
                                                    <option>Schuyler</option>
                                                    <option>Seneca</option>
                                                    <option>Steuben</option>
                                                    <option>Suffolk</option>
                                                    <option>Sullivan</option>
                                                    <option>Tioga</option>
                                                    <option>Tompkins</option>
                                                    <option>Ulster</option>
                                                    <option>Warren</option>
                                                    <option>Washington</option>
                                                    <option>Wayne</option>
                                                    <option>Westchester</option>
                                                    <option>Wyoming</option>
                                                    <option>Yates</option>
                                                  </optgroup>
                                                  <optgroup label="New Jersey">
                                                    <option>Atlantic</option>
                                                    <option>Bergen</option>
                                                    <option>Burlington</option>
                                                    <option>Camden</option>
                                                    <option>Cape May</option>
                                                    <option>Cumberland</option>
                                                    <option>Essex</option>
                                                    <option>Gloucester</option>
                                                    <option>Hudson</option>
                                                    <option>Hunterdon</option>
                                                    <option>Mercer</option>
                                                    <option>Middlesex</option>
                                                    <option>Monmouth</option>
                                                    <option>Morris</option>
                                                    <option>Ocean</option>
                                                    <option>Passaic</option>
                                                    <option>Salem</option>
                                                    <option>Somerset</option>
                                                    <option>Sussex</option>
                                                    <option>Union</option>
                                                    <option>Warren</option>
                                                  </optgroup>
                                                </datalist>
                                    </select>
                                </div>
                            </div><button type="submit" class="btn btn-primary"><i class="fal fa-search"></i></button></div>
                    </form>
                </div>
                    
                    <div class="header-customize justify-content-end align-items-center d-none d-xl-flex">
                        <?php 
                            if($pdo_auth['user_type']=="Administrator"){
                                echo '';
                            }
                            elseif($pdo_auth['user_type']=="Dog Owner"){
                                 echo '<div class="header-customize-item">
                                        <a href="add_dog.php" class="btn btn-primary btn-icon-right">Add
                                        Dog <i class="far fa-angle-right"></i></a>
                                    </div>';
                            }
                            else{
                                echo '<div class="header-customize-item">
                                        <a href="add_stuff.php" class="btn btn-primary btn-icon-right">Add
                                        Listing <i class="far fa-angle-right"></i></a>
                                    </div>';
                                }
                        ?>
                        

                        <div class="header-customize-item">
                            <a href="logout.php" class="link">
                            <svg class="icon icon-user-circle-o">
                                <use xlink:href="#icon-user-circle-o"></use>
                            </svg> Log Out</a>
                        </div>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>