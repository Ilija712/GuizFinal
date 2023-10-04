<body>
    <div class="container pe-sm-0">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid pe-sm-0">
                <a href="index.html"><img class="navbar-brand img-fluid logo" src="../img/lastlogo.png" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#glavniNav"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="glavniNav">
                    <ul class="navbar-nav glavnaNavi">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><button class="btn btn-guiz mx-1 fs-4">Home</button></a>
                        </li>
                        <li class="nav-item dropD">
                            <a class="nav-link" href="quizzes.php"><button class="btn btn-guiz mx-1 fs-4">Quizzes</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="author.php"><button class="btn btn-guiz mx-1 fs-4">Author</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php"><button class="btn btn-guiz mx-1 fs-4">Contact</button></a>
                        </li>
                        <li class="nav-item">
                            <?php
                                if(isset($_SESSION['user'])){
                                    echo "<a class='nav-link' href='#'>
                                    <button class='btn btn-guiz mx-1 fs-4' data-toggle='modal' data-target='#logoutModal'>".$_SESSION['user']->UserName."</button>
                                </a>";
                                }
                                else{
                                    echo '<a class="nav-link" href="#">
                                    <button class="btn btn-guiz mx-1 fs-4" data-toggle="modal" data-target="#loginModal">Log in/Register</button>
                                </a>';
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>