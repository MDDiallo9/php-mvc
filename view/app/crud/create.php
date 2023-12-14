<form action="" method="post">
    <div>
        <?= $form->label("title") ?>
        <?= $form->input("title","text","title") ?>
    </div>
    <div>
        <?= $form->label("content") ?>
        <?= $form->textarea("content") ?>
    </div>
    <div>
        <?= $form->select("author",$authors,"first_name","","user_id") ?>
    </div>
    <div>
        <?= $form->submit() ?>
    </div>
</form>

<?php

