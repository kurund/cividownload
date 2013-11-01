<?php if (isset($content['listing'])) { ?>
  <div class="crm-title">CiviCRM Downloads</div>
  <div class='crm-support'>
    <div class='introduction'>
      Below is the list of available downloads:
    </div>

    <ul name="download-links">
      <?php foreach ($content['download_urls'] as $key => $values) { ?>
        <li><a href="<?php echo url('cividownload/' .$key); ?>"><?php echo $values['title']; ?></a></li>
      <?php } ?>
    </ul>
  </div>
<?php } elseif (isset($content['download'])) { ?>
  <div class="crm-title">Just a moment...</div>
  <div class='crm-support'>
    <div class="crm-download-info crm-hidden">
      <div>Thanks for downloading</div>
      <div class="down-link">If you were not able to download <a
          href="<?php echo $content['downloadURL']; ?>" id="download-link" target="_blank">click here</a> to start
        download.
      </div>
    </div>
    <div class="crm-download-content">
      <div class="crm-download-intro">
        CiviCRM - Members Supported Open Source Software. Please consider to donate and support it's continuous growth.
      </div>
      <p>
        <label for="display_amount">Donation amount: ($10 increments)</label>
        <input type="text" id="display_amount" class="crm-amount" readonly/>
      </p>

      <div id="slider"></div>

      <div class="crm-donate-option">
        <input type="checkbox" class="" id="is_donate" value="1"> No, I don't want to donate and support the project.
      </div>
      <div class="crm-buttons">
      <span class="donate-download">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_donations">
          <input type="hidden" name="business" value="dave@civicrm.org">
          <input type="hidden" name="lc" value="US">
          <input type="hidden" name="amount" value="10" id="amount">
          <input type="hidden" name="currency_code" value="USD">
          <input type="hidden" name="no_note" value="0">
          <!--<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">-->
          <input type="submit" class="crm-input" name="download-donate" value="Download & Donate">
        </form>
        <!--<input type="submit" class="crm-input" name="download-donate" value="Download & Donate">-->
      </span>
      <span class="download-only crm-hidden">
        <input type="submit" class="crm-input" name="download-only" value="Download Only">
      </span>
      </div>
      <br/>
    </div>
  </div>
<?php } ?>