<?php
    session_start();
    include ("head.php");
    include ("header.php");
    include ("loginmodal.php");
?>
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5">
                <p class="h3 text-center pb-2">Ilija Kostić 56/19</p>
                <img src="../img/about.JPG" alt="Ilija Kostic" class="mx-auto d-block rounded" />
            </div>
            <div class="col-12 col-lg-6 mb-5">
                <p class="h3 text-center pb-2">My portfolio website</p>
                <a target="_blank" href="https://ilija712.github.io/Portfolio/"><img src="../img/portfolio.png"
                        alt="portfolio site" class="img-fluid rounded" /></a>
            </div>
        </div>
    </div>
<?php
    include ("footer.php");
?>