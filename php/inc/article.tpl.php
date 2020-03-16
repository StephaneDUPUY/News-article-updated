<h2 class="right__title"><?=$article['title']?></h2>
    <div class="posts">
        <article class="post post--single">
        <a href="" class="post__category post__category--color-<?=$article['category']?>">
            <?=$article['category']?>
        </a>
        <div class="post__meta">
            <img class="post__author-icon" src="../images/avatars/<?=$article['author_img']?>" alt="">
            <strong class="post__author"><?=$article['author']?></strong>
            <time datetime="<?=$article['date']['computer']?>">
            <?=$article['date']['human']?>
            </time>
        </div>
        <p><?=$article['text']?></p>
        <a href="index.php" class="post__link">Back to home</a>
        </article>
    </div>