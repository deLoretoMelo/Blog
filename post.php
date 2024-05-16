<?php
    include_once("templates/header.php");
    include_once("helpers/url.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="tags-container">
            <img src="<?= $BASE_URL ?>/imgs/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium molestias nulla accusamus quo, vero omnis doloremque excepturi debitis asperiores quas dolores doloribus minus dignissimos quisquam deleniti quod minima, similique eveniet.
        Rem quasi explicabo quas est tempora molestias. Earum modi sint assumenda aperiam ut consequuntur ipsum corporis ipsa alias magnam eius, quia provident debitis minus voluptatem dolores iste cupiditate, possimus accusantium?
        Aliquam porro soluta animi reiciendis, mollitia qui a, esse et, tempora consequatur ab. Sunt molestias eaque dolorum veniam beatae laudantium aperiam quasi voluptas, eum accusamus, quibusdam odit earum possimus ab!
        Dignissimos optio culpa libero eos odio perspiciatis mollitia temporibus quia? Ipsa quod hic nostrum, voluptatibus, fuga consequatur perferendis quidem saepe nesciunt eligendi culpa illo recusandae quis excepturi dolore atque. Harum.
        Provident officia accusantium perspiciatis ipsam facilis, nobis minus earum qui? Amet deleniti mollitia officia fugiat, eius animi minima illo quam voluptas explicabo saepe et accusantium at, iusto similique molestias. Pariatur?</p>
    </div>
</main>
<aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
        <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
        <?php endforeach; ?>
    </ul>
</aside>

<?php

include_once("templates/footer.php");

?>