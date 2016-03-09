$('#wormAnimate').on('click', function () {
  for (var i = 0; i < 20; i++) {
    $('#wormBody').animate({
          left:'-=60px',
          width:'400px',
        }).animate({
          width:'300px',
          left: '-=100px',
        });
  };

  $('#wormText').html('My worm is now gone-_-');
});
