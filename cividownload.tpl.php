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
    this is introductory text for download
  </div>
<?php } ?>