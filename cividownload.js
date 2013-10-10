(function($){
  $(function() {
    $( "#slider" ).slider({
      value:50,
      min: 10,
      max: 500,
      step: 10,
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider" ).slider( "value" ) );

    var downloadURL = $('#download-link').attr('href');
    openwindow = window.open(downloadURL, 'pop-id','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=640,height=420,left = 202,top = 184');

    $(openwindow).load(function(){
      window.parent.opener.focus();
    });

  });
}(jQuery));

