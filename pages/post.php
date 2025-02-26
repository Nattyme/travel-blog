<?php 
    require("../config.php");
    $title = "Post - Travel Blog";
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

            <!-- Content -->
            <div class="content">
                <article class="post">
                    <div class="post-content">
                        <div class="post__title">Single post page</div>
                        <div class="post__text">
                            <p>Ted fermentum sed felis ut eleifend. Integer
                                laoreet massa sed leo rhoncus, non posuere eros
                                varius. Sed congue ligula leo, in molestie
                                mauris viverra quis. Ut a dui a lectus molestie
                                pulvinar id non magna. Nam blandit dictum ante
                                id venenatis.</p>

					<div class="post-img" style=" background-image: url(./img/post/post-2.jpg); "></div>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, labore iusto sit,
                                eligendi numquam at ex voluptates cumque ducimus sapiente reprehenderit, nihil adipisci
                                nesciunt vitae mollitia illo animi modi explicabo.</p>
                            <p>Quasi quisquam accusamus ullam impedit animi, autem exercitationem laboriosam maxime
                                praesentium quidem assumenda numquam aspernatur hic incidunt rerum architecto. Est ad
                                ratione non impedit autem, quas culpa quasi facere reiciendis.</p>

                    <div class="post-img" style=" background-image: url(./img/post/post-1.jpg); "></div>

                            <p>Beatae rem eligendi est aspernatur blanditiis ad nobis saepe voluptas reiciendis laborum
                                tempora perspiciatis, suscipit ipsam soluta debitis sint provident amet dolorum
                                voluptatibus hic dignissimos illo unde nihil odit. Dolore.</p>

					<div class="post-img" style=" background-image: url(./img/post/post-3.jpg); "></div>

                            <p>Ullam modi excepturi earum placeat beatae ad nostrum eius quia omnis, blanditiis quisquam
                                voluptatum. Porro quisquam perspiciatis temporibus incidunt, vitae illo repellat quod
                                dolorum? Esse aliquid nesciunt iure unde minus.</p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- //Content -->

            <!-- Sidebar -->
            <div class="sidebar">
                <aside class="aside author">
                    <div class="author__photo">
                        <img src="img/avatar/img.png" alt="" />
                    </div>
                    <div class="author__name">Luis Faulkner</div>
                    <div class="author__text">
                        Ted fermentum sed felis ut eleifend. Integer laoreet
                        massa sed leo rhoncus, non posuere eros varius.
                    </div>
                    <img src="img/sign.png" class="author__sign" alt="" />
                </aside>

                <aside class="aside">
                    <div class="aside__header">Categories</div>
                    <ul class="aside-list">
                        <li class="aside-list__item">Travel</li>
                        <li class="aside-list__item">Food</li>
                        <li class="aside-list__item">Lifestyle</li>
                        <li class="aside-list__item">Health & Fintness</li>
                        <li class="aside-list__item">Minimalizam</li>
                        <li class="aside-list__item">Recipes</li>
                        <li class="aside-list__item">Review</li>
                    </ul>
                </aside>

                <aside class="aside">
                    <div class="aside__header">Popular Posts</div>

                    <div class="popular-post popular-post--margin-top">
                        <div class="popular-post__img">
                            <img src="img/popular/popular-1.jpg" alt="" />
                        </div>
                        <div class="popular-post-content">
                            <div class="popular-post__title">
                                Sand Castle on the Beach
                            </div>
                            <div class="popular-post__author">
                                by John Doe
                            </div>
                        </div>
                    </div>

                    <div class="popular-post">
                        <div class="popular-post__img">
                            <img src="img/popular/popular-2.jpg" alt="" />
                        </div>
                        <div class="popular-post-content">
                            <div class="popular-post__title">
                                How To Visit Neuschwan Castle By Train
                            </div>
                            <div class="popular-post__author">
                                by Adam Rose
                            </div>
                        </div>
                    </div>
                </aside>

                <aside class="aside">
                    <div class="aside__header aside__header--insta">
                        Follow @Luisgarica
                    </div>
                    <div class="instagram">
                        <div class="instagram__img" style="
                                    background-image: url(img/insta/insta-1.jpg);
                                "></div>
                        <div class="instagram__img" style="
                                    background-image: url(img/insta/insta-2.jpg);
                                "></div>
                        <div class="instagram__img" style="
                                    background-image: url(img/insta/insta-3.jpg);
                                "></div>
                        <div class="instagram__img" style="
                                    background-image: url(img/insta/insta-4.jpg);
                                "></div>
                        <div class="instagram__img" style="
                                    background-image: url(img/insta/insta-5.jpg);
                                "></div>
                        <div class="instagram__img" style="
                                    background-image: url(img/insta/insta-6.jpg);
                                "></div>
                    </div>
                </aside>
            </div>
            <!-- //Sidebar -->
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