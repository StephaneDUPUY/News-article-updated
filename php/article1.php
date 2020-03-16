<?php

    $article = [
    "title" => "Lorem ipsum article 1",
    "author" => "Darren Collison",
    "text" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, laudantium aliquid debitis vero porro saepe quia corporis! Adipisci eius non voluptatibus! Mollitia id voluptates quia recusandae accusamus molestias odit assumenda error vel, quo soluta itaque reiciendis repellat? Quasi iure, fugit blanditiis provident asperiores voluptatem adipisci! Molestias, deleniti? Autem a, libero, porro harum aliquam ipsum labore nam magnam, nesciunt ut fugiat deleniti placeat exercitationem. Perspiciatis, provident accusamus! Corrupti saepe vel iure nihil, corporis cumque dolore nemo asperiores sapiente dolorum atque ex accusamus sunt placeat dolores. Eos, ea, quis tempore itaque error quaerat eaque harum dolor perspiciatis perferendis accusamus quos reprehenderit. Reiciendis odio nemo modi eligendi a cum iusto cupiditate officiis recusandae veniam nostrum assumenda unde ipsa soluta minima, quo velit maiores explicabo sequi amet fugiat praesentium? Accusantium aut ipsa velit hic doloribus iste officiis, corrupti nesciunt. Nam ducimus nulla numquam molestias alias commodi porro ipsa natus nemo aliquid labore facere exercitationem, inventore qui architecto perferendis. Distinctio non ea esse neque aliquam. Quo adipisci distinctio id quas modi, facere repellendus optio similique iure, aliquam consectetur quasi illo magnam voluptatibus possimus earum commodi minus, error sapiente consequatur architecto molestiae voluptatem et! Expedita sit fugiat totam, repellendus dolores blanditiis cupiditate et corporis officia. Voluptates earum quae rerum enim temporibus incidunt, vero eveniet porro fuga eos libero! Iusto minus quae recusandae odit consectetur amet, qui architecto! Dolorem, perspiciatis in dolor, non voluptatum quod vitae nisi suscipit quidem nihil eligendi incidunt rerum? Recusandae architecto iusto totam vel, nihil deleniti velit dolore molestiae! Eius accusamus numquam est. Aspernatur voluptate exercitationem magni quod modi, quos aperiam eos eaque recusandae quaerat labore facilis, illo provident! Amet voluptatum nam cum sit iusto libero modi dolor, minima repellendus consequuntur corporis incidunt ullam veritatis aut temporibus ipsum ex! Praesentium, voluptatum exercitationem porro officiis, ratione omnis ex quasi est qui numquam perferendis repudiandae consectetur nobis! Quibusdam omnis, quis quo similique delectus blanditiis nobis laudantium odit, iste nam eveniet nostrum tempora minus explicabo temporibus, eos sapiente? Autem aliquam aperiam totam recusandae voluptatum officia officiis quas ipsam aspernatur ex explicabo atque accusantium error quidem hic voluptates numquam inventore sit tempore, neque eum deserunt dignissimos tenetur. Tenetur laudantium harum totam quasi. Quasi quos ducimus distinctio officia doloribus nihil enim! Reiciendis consequuntur atque natus repellendus ratione laborum veritatis dolores obcaecati ut animi quibusdam quod error, rerum ipsum incidunt sapiente facere reprehenderit temporibus doloremque iusto ipsam velit sunt magnam esse. Illum, asperiores veritatis tempore maiores provident cupiditate ratione?",
    "category" => "team",
    "author_img" => "icon-dar.png",
    "date" => [
        "human" => "le 9 août 2019",
        "computer" => "2019-08-09"
    ]
    ];

    require "inc/header.tpl.php"; ?>

        <h2 class="right<?="__"?>title"><?=$article['title']?></h2>        <div class="posts">
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
<?php require "inc/footer.tpl.php"; ?>