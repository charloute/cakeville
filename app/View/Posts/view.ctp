<?= $this->Html->link("< Revenir aux articles",'/posts'); ?>

<h1><?= $post['Post']['name']; ?></h1>

<?= $post['Post']['content']; ?>


<?= $this->Comment->Form('Post',$post['Post']['id']); ?>

<?= debug($comments); ?>
