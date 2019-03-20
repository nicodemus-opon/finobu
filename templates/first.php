<div class="page-header header-filterm" data-parallax="true" style="background-image: url('assets/duot.png');background-position: center;background-size:cover">
    <div class="page-header-imageb" style="background-image: url('assets/img/bg14.jpg');"></div>
    <div class="container ">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto text-left">
                <div class="jumbotron bg-transparent " style="padding-top: 100px">
                    <h1>Tools to grow your business 3x faster</h1>
                    <h4> Finobu offers a range of software tools for small and medium enterprises <br>
                    to help them grow</h4>
                    <h4></h4>
                    <p> Don't just take our word for it...</p>
                    <p><a class="btn btn-primaryi btn-neutral" role="button" href="beta">Get Started</a> or <a class="btn-linkm text-white"
                                                                                                  href="beta"> sign
                            in</a></p>

                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scroll-down" address="true"></a>
</div>

<style>

    .scroll-down {
        opacity: 1;
        -webkit-transition: all .5s ease-in 3s;
        transition: all .5s ease-in 3s;
    }

    .scroll-down {
        position: absolute;
        bottom: 30px;
        left: 50%;
        margin-left: -16px;
        display: block;
        width: 32px;
        height: 32px;
        border: 2px solid #FFF;
        background-size: 14px auto;
        border-radius: 50%;
        z-index: 2;
        -webkit-animation: bounce 2s infinite 2s;
        animation: bounce 2s infinite 2s;
        -webkit-transition: all .2s ease-in;
        transition: all .2s ease-in;
    }

    .scroll-down:before {
        position: absolute;
        top: calc(50% - 8px);
        left: calc(50% - 6px);
        transform: rotate(-45deg);
        display: block;
        width: 12px;
        height: 12px;
        content: "";
        border: 2px solid white;
        border-width: 0px 0 2px 2px;
    }

    @keyframes bounce {
        0%,
        100%,
        20%,
        50%,
        80% {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
        40% {
            -webkit-transform: translateY(-10px);
            -ms-transform: translateY(-10px);
            transform: translateY(-10px);
        }
        60% {
            -webkit-transform: translateY(-5px);
            -ms-transform: translateY(-5px);
            transform: translateY(-5px);
        }
    }
</style>
<script>
    $(function() {
        $('.scroll-down').click (function() {
            $('html, body').animate({scrollTop: $('section.ok').offset().top }, 'slow');
            return false;
        });
    });
</script>