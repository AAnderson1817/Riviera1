<?php include 'header.php'; ?>
<?php include 'modals.php'; ?>
  <div class="agileits-banner jarallax">
    <?php include 'navigation.php' ?>
      <div class="container pub-container">
        <div class="banner-cont">
          <img src="/images/banners/oc-kids-banner-1.png" alt="" class="banner-image">
          <img src="/images/banners/oc-kids-banner-2.png" alt="" class="banner-image">
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
    if(pages.children().first().offsetLeft == 0){
      console.log('page 1 is showing');
      return true;
    } else {
      return false;
    }
  }
  var originalFlipBookMarginLeft = $('#flipbook').css('margin-left');
  var flipBookContainer = $('#flipbook');
  // setInterval(function(){
  //   if(isPage1Showing()){
  //     // console.log('page 1');
  //     flipBookContainer.css('margin-left', 0);
  //     //flipBookContainer.css('width', '83%');
  //   } else {
  //     console.log('not page 1');
  //     flipBookContainer.css('margin-left', originalFlipBookMarginLeft);
  //     //flipBookContainer.css('width', '100%');
  //   }
  // })
</script>