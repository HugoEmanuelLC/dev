<?php $descriptitle = 'Acceuil, mon profil v3'; ?>

<?php ob_start(); ?>

<header>
    <div class="header_head">
        <ul class="social_network">
            <!-- <li><a href=""><i class="fab fa-facebook-f"></i></a></li> -->
        </ul>

        <ul class="menu">
            <li><a href=""><i class="fas fa-bars"></i> &nbsp Menu</a>

                <ul>
                    <li></li>
                    <li><a href="">lien</a></li>
                    <li><a href="">lien</a></li>
                    <li><a href="">lien</a></li>
                    <li><a href="">lien</a></li>
                </ul>

            </li>

        </ul>
    </div>

    <div class="header_body">
        <h1>WAWMOMO</h1>
        <h4>Lorem ipsum dolor sit amet.</h4>
    </div>

    <i class="fleche fas fa-long-arrow-alt-down"></i>
</header>

<?php $content = ob_get_clean(); ?>

<?php require('./views/main.php'); ?>