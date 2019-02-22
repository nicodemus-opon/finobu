<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="500">
    <div class="container">


        <div class="navbar-translate">
            <a class="navbar-brand" href="index.php" rel="tooltip" title="GariMax Motors Ltd Home Page" data-placement="bottom" >
                <img class="img " src="./assets/img/favicon.png">  Finobu
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" data-nav-imagei="assets/img/blurred-image-1.jpg" data-color="orange">
            <ul class="navbar-nav ml-auto">

                <?php
                $ki= "$_SERVER[REQUEST_URI]";

                if ($ki!=="/" or $ki!=="/index.php"){
                    echo '<li class="nav-item dropdown">
                    <a href="index.php" class="nav-link dropdown-togglev" id="navbarDropdownMenuLink1" >
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                        <p>HOME</p>
                            
                    </a>

                </li>';
                }
                ?>


                <li class="nav-item dropdown">
                    <a href="browse.php" class="nav-link dropdown-togglev" id="navbarDropdownMenuLink">
                        <i class="now-ui-icons files_single-copy-04" aria-hidden="true"></i>
                        <p>BROWSE ALL CARS</p>
                    </a>

                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <i class="now-ui-icons ui-1_zoom-bold" aria-hidden="true"></i>
                        <p>VIEW CARS BY</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" href="index.php#manufacturers">
                            <i class="now-ui-icons shopping_delivery-fast"></i>
                            MANUFACTURERS
                        </a>
                        <a class="dropdown-item" href="categories.php">
                            <i class="now-ui-icons shopping_delivery-fast"></i>
                            CATEGORIES
                        </a>


                    </div>
                </li>



                <li class="nav-item dropdown">
                    <a href="index.php#contactx" class="nav-link dropdown-togglev" id="navbarDropdownMenuLink1" >
                        <i class="now-ui-icons ui-1_email-85"></i>
                        <p>CONTACT US</p>
                    </a>

                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-neutral btn-round ccc" href="tel:0733626262" target="_blank">
                        <p><i class="now-ui-icons tech_mobile"></i> CALL US +(254) 733 626 262</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
