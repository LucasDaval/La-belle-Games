<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. * 
 * This default template must not be removed. It is used whenever Kirby cannot find a template with the name of the content file.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Belle Games</title>
  <?= css('/assets/css/index.css') ?>
</head>
<body>
<?php snippet('header') ?>


<main>
  <?php snippet('intro') ?>

  <section>
    <article> 
      <a href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(0)->crop(500)->url() ?>" alt=""></a>      
      <div>
        <p>Slogan</p>
        <p id="presEnt">Présentation de l'entreprise</p>
      </div>
    </article>
  </section>

  <section>
    <hr>
    <h2>GAMES</h2>
    <hr>
    <article>
      <a href=""><img src="<?= $page->images()->nth(1)->crop(500)->url() ?>" alt=""></a>      
      <a href=""><img src="<?= $page->images()->nth(2)->crop(500)->url() ?>" alt=""></a>      
    </article>
  </section>

  <section>
    <hr>
    <h2>EVENTS</h2>
    <hr>
    <article>
      <a href=""><img src="<?= $page->images()->nth(3)->crop(500)->url() ?>" alt=""></a>      
      <a href=""><img src="<?= $page->images()->nth(4)->crop(500)->url() ?>" alt=""></a>  
    </article>
  </section>
</main>

<?php snippet('footer') ?>
</body>
</html>

