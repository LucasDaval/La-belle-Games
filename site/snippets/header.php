<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * This header snippet is reused in all templates. 
 * It fetches information from the `site.txt` content file and contains the site navigation.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- The title tag we show the title of our site and the title of the current page -->
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <!-- Stylesheets can be included using the `css()` helper. Kirby also provides the `js()` helper to include script file. 
        More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers -->
  <?= css(['assets/css/index.css', '@auto']) ?>

</head>
<body>
  <header class="header">
    <ul id="rs">
      <li>Twitter</li>
      <li>Fb</li>
      <li>Insta</li>
      <li>Ytb</li>
      <li>Discord</li>
    </ul>
    <!-- In this link we call `$site->url()` to create a link back to the homepage -->
    <a class="logo" href="<?= $site->children()->listed()->nth(0)->url() ?>"><img src="assets/img/Logo.png" alt="La Belle Games logo"></a>
  </header>
  <nav>
    <ul>
      <?php foreach($site->children()->listed() as $item): ?>
          <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
      <?php endforeach ?>
    </ul>
  </nav>
  
