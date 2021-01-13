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

 
  <section id="presentation">
    <article> 
    <a href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(0)->crop(500)->url() ?>" alt=""></a>
      <div class="titre">
        <h3>TITRE</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor totam eveniet sed deleniti, porro qui voluptate veniam neque earum incidunt facere ullam? Unde temporibus mollitia consequuntur repellendus voluptate, assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>     
      <div class="labellegames">
        <h3>LaBelleGames</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, odit cum quisquam at numquam, voluptatibus qui, aliquam delectus unde explicabo velit nobis voluptates fuga rem consequuntur quas dignissimos aspernatur. Earum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, odit cum quisquam at numquam, voluptatibus qui, aliquam delectus unde explicabo velit nobis voluptates fuga rem consequuntur quas dignissimos aspernatur. Earum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, odit cum quisquam at numquam, voluptatibus qui, aliquam delectus unde explicabo velit nobis voluptates fuga rem consequuntur quas dignissimos aspernatur. </p>
        <a class="secondimagelabelle" href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(0)->crop(500)->url() ?>" alt=""></a>
      </div>
    </article>
  </section>

  <section>
    <p class="desc-text">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia labore, 
      laboriosam beatae fuga quaerat eveniet maxime inventore doloribus, blanditiis nostrum soluta natus! 
      Delectus beatae maxime at odio, voluptate vero repellat.
      Illo vitae exercitationem dolore doloribus! Rerum ipsam consectetur dicta quos odit ipsum repellendus, 
      uo eaque ducimus ab assumenda, corporis expedita eligendi eius excepturi impedit ut ad quisquam sint obcaecati! Excepturi?
      Quos illum ea omnis fugit, consectetur exercitationem obcaecati iste rem consequatur perspiciatis 
      assumenda sint, sunt dolore quasi laudantium hic sapiente? Modi voluptas, facere vel mollitia a maiores dolorum temporibus impedit?
    </p>

    <article class="cards">
      <section>
        <img src="" alt="">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas reiciendis esse animi laborum, 
          omnis consequatur est a magni ipsam cupiditate similique assumenda vero neque quas delectus iure, iusto ut quo.
        </p>
      </section>

      <section>
        <img src="" alt="">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas reiciendis esse animi laborum, 
          omnis consequatur est a magni ipsam cupiditate similique assumenda vero neque quas delectus iure, iusto ut quo.
        </p>
      </section>

      <section>
        <img src="" alt="">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas reiciendis esse animi laborum, 
          omnis consequatur est a magni ipsam cupiditate similique assumenda vero neque quas delectus iure, iusto ut quo.
        </p>
      </section>
    </article>
      
      
  </section>
</main>
<?php snippet('footer') ?>
</body>
</html>

