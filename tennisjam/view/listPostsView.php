<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
    <h1>Tennis Jam !</h1>
    <p>Dernières balles à la volée :</p>


<?php
while ($data = $posts->fetch())
{
    ?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="post.php?id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
    <?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>