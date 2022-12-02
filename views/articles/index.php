<?php foreach($articles as $article): ?>

<h2><a href="/articles/lire/<?= $article['slug'] ?>"><?= $article['titre'] ?></a></h2>

<p><?= $article['contenu'] ?></p>

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title"><?= $article['titre'] ?></h5>
        <p class="card-text"><?= $article['contenu'] ?></p>
        <a href="/articles/lire/<?= $article['slug'] ?>" class="btn btn-primary">Lire plus</a>
    </div>
</div>

<?php endforeach ?>