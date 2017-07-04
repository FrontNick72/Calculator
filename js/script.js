$( function() {
    $( "#slider" ).slider({
      range: "min",
      value: 1000000,
      min: 1000,
      max: 3000000,
      slide: function( event, ui ) {
        $( "#range" ).val(ui.value);
      }
    });
    $( "#range" ).val($( "#slider" ).slider( "value" ) );
  } );

$( function() {
    $( "#slider1" ).slider({
      range: "min",
      value: 1000000,
      min: 1000,
      max: 3000000,
      slide: function( event, ui ) {
        $( "#range1" ).val(ui.value);
      }
    });
    $( "#range1" ).val($( "#slider1" ).slider( "value" ) );
  } );

$( function() {
	$("#datepicker").datepicker();
    $("#datepicker").datepicker("getDate");
  } );
