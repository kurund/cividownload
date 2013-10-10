<?php if (isset($content['listing'])) { ?>
  <div class='introduction'>
    This is an introductory text for listing
  </div>

  <ul name="download-links">
    <?php foreach ($content['download_urls'] as $key => $values) { ?>
      <li><a href="/cividownload/download/<?php echo $key; ?>"><?php echo $values['title']; ?></a></li>
    <?php } ?>
  </ul>
<?php } elseif (isset($content['download'])) { ?>

  <div class='introduction'>
  </div>
  <div class="down-link">If the download doesn't start in a few seconds, please <a href="<?php echo $content['downloadURL'];?>" id="download-link" target="_blank">click here</a> to start download.</div>

  <p>
    <label for="amount">Donation amount: ($10 increments)</label>
    <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
  </p>

  <div id="slider"></div>
<?php } ?>