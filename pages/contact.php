<?php 
    require("../config.php"); 
    $title = "Contact - Travel Blog";
?>

<!DOCTYPE html>
<html lang="en">

<?php include (ROOT . "templates/head.php"); ?>

<body>
    <?php
        include(ROOT . "templates/navigation.php");
        include(ROOT . "templates/header.php");
    ?>

    <main class="container">
        <div class="content-wrapper">
            <div class="content content--full">
                <article class="post">
                    <div class="post-content">
                        <div class="post__title text-center">Contact information</div>
                        <div class="post__text">
                            <p>Beatae rem eligendi est aspernatur blanditiis ad nobis saepe voluptas reiciendis laborum
                                tempora perspiciatis, suscipit ipsam soluta debitis sint provident amet dolorum
                                voluptatibus hic dignissimos illo unde nihil odit. Dolore.</p>
                            <p>Ullam modi excepturi earum placeat beatae ad nostrum eius quia omnis, blanditiis quisquam
                                voluptatum. Porro quisquam perspiciatis temporibus incidunt, vitae illo repellat quod
                                dolorum? Esse aliquid nesciunt iure unde minus.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-nav-wrapper">
                <div class="footer-nav">
                    <a href="#" class="footer-nav__link footer-nav__link--active">HOME</a>
                    <a href="#" class="footer-nav__link">ABOUT ME</a>
                    <a href="#" class="footer-nav__link">POST</a>
                    <a href="#" class="footer-nav__link">CONTACT</a>
                </div>
                <form class="footer-form" action="">
                    <input class="footer-form__input" type="text" />
                    <input class="footer-form__submit" type="submit" value="" />
                </form>
            </div>

            <div class="footer-contacts">
                <p>travel@gmail.com</p>
                <p>(123) 456 789</p>
            </div>

            <div class="footer-line"></div>
            <div class="footer-copyright">
                <p>
                    <i class="far fa-copyright"></i> Copyrights 2017.
                    Travelblog By VictorThemes
                </p>

                <div class="social">
                    <div class="social__icon">
                        <a href="#" class="fab fa-facebook-f"></a>
                    </div>
                    <div class="social__icon">
                        <a href="#" class="fab fa-twitter"></a>
                    </div>
                    <div class="social__icon">
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>