<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="500">
    <div class="container">


        <div class="navbar-translate">
            <a class="navbar-brand" href="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/" rel="tooltip"
               title="Finobu Software Ltd Home Page"
               data-placement="bottom">
                <img class="img " src="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/assets/img/favicon.png"
                     style="height: 25px"> <b class="text-primary" style="font-family: Charcoal, sans-serif"> Finobu</b>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" data-nav-imagei="assets/img/blurred-image-1.jpg" data-color="orange">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-expanded="false">
                        <i class="now-ui-icons files_box"></i>
                        <p>Products</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/solo">
                            <i class="now-ui-icons objects_diamond"></i>
                            Solo for freelancers
                        </a>
                        <a class="dropdown-item" href="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/jibu">
                            <i class="now-ui-icons ui-1_send"></i>
                            Jibu Form Endpoints
                        </a>

                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a href="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/pricing"
                       class="nav-link dropdown-togglev" id="navbarDropdownMenuLink">
                        <i class="now-ui-icons shopping_credit-card" aria-hidden="true"></i>
                        <p>Pricing</p>
                    </a>

                </li>


                <li class="nav-item">
                    <a class="nav-link btn btn-neutral btn-roundi ccc" href="<?php echo '//' . $_SERVER['SERVER_NAME'] . '' ?>/beta" target="_blank">
                        <i class="now-ui-icons business_briefcase-24"></i>
                        <p> Sign Up</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
