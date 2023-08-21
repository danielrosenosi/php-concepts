<?php
    global $posts, $BASE_URL, $categories;
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost = null;

        foreach ($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post_container">
        <div id="content_container">
            <h1 id="main_title">
                <?= $currentPost['title'] ?>
            </h1>

            <p id="post_description">
                <?= $currentPost['description'] ?>
            </p>

            <div class="img-container">
                <img src="<?= $BASE_URL ?>/assets/images/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>

            <p class="post-content">
                lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
                Quisquam, voluptatum. Quisquam, voluptatum. Quisquam, voluptatum.
            </p>
        </div>

        <aside id="nav_container">
            <h2 id="tags_title">Tags</h2>

            <ul id="tag_list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li>
                        <a href="#"><?= $tag ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h3 id="categories_title">Categorias</h3>

            <ul id="categories_list">
                <?php foreach($categories as $category): ?>
                    <li>
                        <a href="#"><?= $category ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>