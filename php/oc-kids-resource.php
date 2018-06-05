<?php include 'header.php'; ?>
<?php include 'modals.php'; ?>
  <div class="agileits-banner jarallax">
    <?php include 'navigation.php' ?>
      <div class="container pub-container">
        <div class="banner-cont">
          <img src="/images/banners/flight2.png" alt="" class="banner-image">
          <img src="/images/banners/flight2.png" alt="" class="banner-image">
        </div>
        <div id="flipbook">
          <?php 
            $dir = './pubs/oc-kids-2018/pages';
            $files = array_slice(scandir($dir), 2);
            natsort($files);
            $files = array_values($files);
            if($files[0] == '.DS_Store'){
              unset($files[0]);
              $files = array_values($files);
            }
            for($i=0;$i<count($files);$i++){
              echo '<div class="pub__page"><img class="pub__image" src="pubs/oc-kids-2018/pages/'. $files[$i] .'" alt=""></div>';
            }
          ?>
        </div>
      </div>
  </div>
  <? include 'footer.php' ?>
<script src="js/turn.min.js"></script>
<script>
  $("#flipbook").turn({
    width: '100%',
    height: '660px',
    autoCenter: true
  });
  function isPage1Showing(){
    var pages = $('.page-wrapper');
    if(pages[0].style.display = "block"){
      console.log('page 1 is showing');
      return true;
    }
  }
  var originalFlipBookMarginLeft = $('#flipbook').css('margin-left');
  setInterval(function(){
    if(isPage1Showing){
    $('#flipbook').css('margin-left', 0);
    } else {
      $('#flipbook').css('margin-left', originalFlipBookMarginLeft);
    }
  })

  var clickElement = $('#flipbook').children().not('.page-wrapper').not('.shadow');
  clickElement.on('click', function(){
    console.log($(this))
  })
</script>