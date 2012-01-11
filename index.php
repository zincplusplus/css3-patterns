<?php include('layout/pattern-list.php'); ?>
<?php include('layout/header.php'); ?>
<hgroup>

    <div class="xribbon">
        <h1 class="xheader">
            <span class="xtitle">Useless CSS3 Patterns</span>
        </h1>
        <h2 class="xtagline">That will make you fall in love with CSS3</h2>
    </div>
</hgroup>

<?php

/*
 * echo "<pre>";
 * 
 * social sorting
  foreach ($stack as $key => $row) {
  $social = 0;
  $face = "http://graph.facebook.com/?ids=".$row['url'];
  $twit = "http://urls.api.twitter.com/1/urls/count.json?url=".$row['url'];
  $json = file_get_contents($face,0,null,null);
  $json_output = json_decode($json, true);
  $social+= $json_output["http://www.ecsspert.com"]["shares"];
  $json = file_get_contents($twit,0,null,null);
  $json_output = json_decode($json, true);
  $social+= $json_output["count"];
  $row['score'] = $social;
  } */


/*
 * sort by social descending and id ascending

  // Obtain a list of columns
  foreach ($stack as $key => $row) {
  $id[$key]  = $row['id'];
  $score[$key]  = $row['score'];
  }


  // Sort the data with volume descending, edition ascending
  // Add $data as the last parameter, to sort by the common key
  array_multisort($score, SORT_DESC, $id, SORT_ASC, $stack);

  print_r($stack);
 *
 */

?>
<ul id="pattern-list" class="fbox">
    <?php
    //afisarea listei
    foreach ($stack as $key => $row) {
        ?>
        <li class="fleft">
            <a class="pattern" href="/play/useless-css3-patterns/<?php echo $row['id']; ?>.html" id="<?php echo $row['id']; ?>"></a>
            <div class="title"><?php echo $row['title']; ?></div>
            <div class="social">
                <div class="fb-like" data-href="http://www.ecsspert.com/play/useless-css3-patterns/<?php echo $row['id']; ?>.html" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $row['short']; ?>" counturl="http://www.ecsspert.com/play/useless-css3-patterns/<?php echo $row['id']; ?>.html" data-text="<?php echo $row['title']; ?>, an useless #CSS3 pattern that I love!" data-via="ecsspert">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </li>
    <?php } ?>
</ul>
<?php include('layout/footer.php'); ?>