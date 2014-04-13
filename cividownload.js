(function ($) {
  $(function () {
    if ($("#slider").length) {
      $("#slider").slider({
        value: 250,
        min: 10,
        max: 1000,
        step: 10,
        slide: function (event, ui) {
          $('.other_amount-content input').val(ui.value);
        }
      });

      $('.other_amount-content input').val($("#slider").slider("value"));

      $('.other_amount-section label').remove();
      $('#priceset-div').addClass('crm-other-amount');
      $('#_qf_Main_upload-bottom').val('Donate');
    }
  });
}(jQuery));

