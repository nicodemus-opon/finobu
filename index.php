<?php
include('includes/head.php');
include('includes/navbar.php');
?>

<?php
//include('includes/footer.php');

?>
<div class="main">
    <div class="section">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <div class="jumbotron bg-transparent">
                    <h1>Finance tools to grow your business</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-primary" role="button" href="#">Get Started</a></p>
                </div>
            </div>
            <div class="col-md-6"><img class="img" srci="assets/marginalia-productive-work.png" src="assets/img/bgk.png"></div>
        </div>
        </div>
        </div>
    <?php
    include('templates/tools.php');

    ?>
        <div class="pricing-2">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h2 class="title">Pick the best plan for you</h2>
                        <ul class="nav nav-pills nav-pills-primary justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#pill1" role="tablist">
                                    Legal Entity
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pill2" role="tablist">
                                    Individual
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="card card-pricing card-plaini">
                            <div class="card-body">
                                <h6 class="category">Enterprise</h6>
                                <h1 class="card-title">
                                    <small>kes</small>
                                    59
                                </h1>
                                <ul>
                                    <li><b>10GB</b> Disk Space</li>
                                    <li><b>100GB</b> Monthly Bandwidth</li>
                                    <li><b>20</b> Email Accounts</li>
                                    <li><b>Unlimited</b> subdomains</li>
                                </ul>
                                <a href="#pablo" class="btn btn-primary btn-round">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-pricing card-backgroundi card-raised"
                             style="background-imagei: url('../assets/img/pricing2.jpg')">
                            <div class="card-body">
                                <h6 class="category text-info">Professional</h6>
                                <h1 class="card-title">
                                    <small>kes</small>
                                    29
                                </h1>

                                <ul>
                                    <li><b>5GB</b> Disk Space</li>
                                    <li><b>50GB</b> Monthly Bandwidth</li>
                                    <li><b>10</b> Email Accounts</li>
                                    <li><b>Unlimited</b> subdomains</li>
                                </ul>
                                <a href="#pablo" class="btn btn-neutral btn-round">
                                    Sign Up
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-pricing card-plaini">
                            <div class="card-body">
                                <h6 class="category">Standard</h6>
                                <h1 class="card-title">
                                    <small>kes</small>
                                    17
                                </h1>

                                <ul>
                                    <li><b>2GB</b> Disk Space</li>
                                    <li><b>25GB</b> Monthly Bandwidth</li>
                                    <li><b>5</b> Email Accounts</li>
                                    <li><b>Unlimited</b> subdomains</li>
                                </ul>
                                <a href="#pablo" class="btn btn-primary btn-round">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <?php
    include('includes/end.php');

    ?>
<script>
    $(document).ready(function () {
        $("nav").removeClass("navbar-transparent ");
        $("nav").removeAttr("color-on-scroll")
        $(".ccc").removeClass("btn-neutral ");
        $(".ccc").addClass("btn-primary");
    });
</script>