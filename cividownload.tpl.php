<div class="crm-title">Download CiviCRM</div>
<div class='crm-support'>
  <div class='crm-introduction'>
    The current stable version of CiviCRM is <?php echo variable_get('civicrm_stable_version', '4.4.0'); ?>. You will
    need to know which host Content Management software (CMS) and which version you are using.
    CiviCRM <?php echo variable_get('civicrm_stable_version', '4.4.0'); ?> is compatible with Drupal version 7.x,
    Joomla! version 2.5.x / 3.x, and WordPress version 3.4.x. There is a separate download for Drupal
    version 6.x which is not officially supported. Click on your CMS below to begin.
  </div>

  <ul name="download-links">
    <?php foreach ($content['download_urls'] as $key => $values) { ?>
      <li><a class="download-link" href="<?php echo $values['url']; ?>"
             filename="<?php echo $values['filename']; ?>"><?php echo 'CiviCRM for ' . $values['title']; ?></a></li>
    <?php } ?>
  </ul>
</div>