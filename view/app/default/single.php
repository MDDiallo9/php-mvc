<article class=" p-6">
            <div class="flex justify-between">
                <a href="/public/delete?d=<?= $single->id ?>">Supprimer</a>
                <a href="">
                    <h3 class="underline capitalize"><?= $single->title ?></h3>
                </a>
                <h4>
                    <?= $authors->findById($single->author,"user_id")->first_name ?>
                </h4>
            </div>
            <p class="py-8">
                <?= $single->content ?>
            </p>
            
                
                <h4 class="text-right text-xs">
                    <?= $single->created_at ?>
                </h4>
           
        </article>