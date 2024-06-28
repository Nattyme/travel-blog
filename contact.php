<?php 
    require("./config.php"); 
    $title = "Contact - Travel Blog";
?>

<!DOCTYPE html>
<html lang="en">
<?php include (ROOT . "templates/head.tpl"); ?>
<body>
    <?php
        include(ROOT . "templates/navigation.tpl");
        include(ROOT . "templates/header.tpl");
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
            <?php include (ROOT . "templates/footer.tpl"); ?>
        </div>
    </footer>
</body>

</html>