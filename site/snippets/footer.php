<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This footer snippet is reused in all templates. In fetches information from the `site.txt` content file
 * and from the `about` page.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

  </div>

  <footer class="footer">
    <div>
      <h3>CONTACT US</h3>
      <p>at labellegames.com</p>
    </div>

    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <div>
      <h3>FOLLOW US ON</h3>
      <ul id="rsFooter">
        <li>Twitter</li>
        <li>Fb</li>
        <li>Insta</li>
        <li>Ytb</li>
        <li>Discord</li>
      </ul>
    </div>


    <?php if ($about = page('about')): ?>
    
    <?php endif ?>
  </footer>

</body>
</html>
