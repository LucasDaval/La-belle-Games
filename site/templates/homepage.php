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
<div class="imgTitre">
    <a href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(3)->crop(500)->url() ?>" alt=""></a>
      <div class="titre">
        <h3>TITRE</h3>
        <p>
          Thibaut de Corday. A documentary films and video games producer dealing with social issues – and
          a TV and games writer. Cédric Bache. After more than 15 years, as a head of business developpment
          at Neko Entertainment, Cedric is a veteran of the indie scene. Laurent Checola. After a first career,
          employed at Le Monde, he became “indie journalist” working on webdocumentaries and game
          projects.
        </p>
      </div>   
      </div>  

      <div class="labellegames">
        <div class="test">
        <h3>LaBelleGames</h3>
        <p>
          La Belle Games is an Independent game studio created in 2019. This new indie label is destined to
          promote videogames with content. Beware : we're not making “serious games” ! La Belle was
          founded by 3 people, eager to push the video game medium forward. 
        </p>
        </div>
        <a class="secondimagelabelle" href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(1)->crop(500)->url() ?>" alt=""></a>
      </div>
    </article>
  </section>

  <section>
    <p class="desc-text">
      At La Belle Games, we want to create games that are not just about entertainment. With Arte, we
      worked on The Wanderer: Frankenstein's Creature, a free adaptation of Mary Shelley’s gothic
      classic. The game received several distinctions and had a lot of international press coverage. We also
      imagine original gamejams where developers join forces with artists or journalists.
    </p>

    <article class="cards">
      <section>
      <a class="leftimage" href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(3)->crop(500)->url() ?>" alt=""></a>
        <p>
          We create original gamejams where developpers, artists and reporter team up and work together to
          create . Our game jams are supported by important media partners as Arte, Mediapart, Le Mouv’
          and others.
        </p>
      </section>

      <section>
      <a class="middleimage" href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(2)->crop(500)->url() ?>" alt=""></a>
        <p>
          URBAN JAM :
          Urban Jam is a game jam based on urban cultures. La Belle Games organized this event to reunite 8
          teams of developers and street artists who worked toether to create original gameplays. This event
          has created diverse creations like graffiti made with spray paint on smarphones, rap in virtual reality,
          or even interactive clips... All the games made during this gamejam are available on Itchio. 
        </p>
      </section>

      <section>
      <a class="rightimage" href="<?= $site->children()->listed()->nth(2)->url() ?>"><img src="<?= $page->images()->nth(1)->crop(500)->url() ?>" alt=""></a>
        <p>
          MEDIA JAM :
          La Belle coorganized a game creation event, in partnership with Mediapart. The main steps of the
          event have been broadcasted live during the week-end, in order to make the creation process
          intelligible for all the followers of the event. teams composed of journalists, game developers and
          students created games inspired by the french presidential campain.
        </p>
      </section>
    </article>
      
      
  </section>
</main>
<?php snippet('footer') ?>
</body>
</html>

