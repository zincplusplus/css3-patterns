<?php require("layout/pattern-list.php"); ?>

<?php
$id=$_GET["id"];

if(!isset($stack[$id])){
     require("404.php");
} else {


/* -----------------------------------------------------------------------------
 * if we are on the single pattern page
 * -------------------------------------------------------------------------- */
$issingle = true;

$row = $stack[$id];
/* -----------------------------------------------------------------------------
 * get prev and next links
 * -------------------------------------------------------------------------- */
$iterator = new ArrayIterator($stack);
$cursor = 0;
while ($iterator->valid()) {
    if ($iterator->key() == $id) {
        break;
    }
    $cursor++;
    $iterator->next();
}
if ($cursor == count($stack)) {             //if not found in array
    header("Location: ./404.php"); 
}
elseif (!$cursor) {                         //if first element then prev should be the last in the stack
    $iterator->seek(count($stack) - 1);
    $prev = $iterator->current();
    $iterator->seek(1);
    $next = $iterator->current();
}
elseif ($cursor == count($stack) - 1) {     //if last element then next should be the first in the stack
    $iterator->seek(--$cursor);
    $prev = $iterator->current();
    $iterator->seek(0);
    $next = $iterator->current();
}
else {                                      //it's somewhere in the middle of the stack
    $iterator->seek(--$cursor);
    $prev = $iterator->current();
    $iterator->seek($cursor + 2);
    $next = $iterator->current();
}
/* -----------------------------------------------------------------------------
 * -------------------------------------------------------------------------- */

?>
<?php 
/* -----------------------------------------------------------------------------
 * get the css code
 * -------------------------------------------------------------------------- */
    $haystack = file_get_contents('./css/style.css');       //the css file
    $needle = "#".$row['id']." {";                          //"#id {" - the begining of the 
    $cursor1 = strpos($haystack, $needle);                  //find the position where it begins
    $cursor1 += strlen($needle);                            //add the length of the selector
    $cursor2 = strpos($haystack, "}", $cursor1);            //find the end
    $css = trim(substr($haystack, $cursor1, $cursor2-$cursor1), " \t\n");    //remove tabs and line ends from begining or end only
/* -----------------------------------------------------------------------------
 * -------------------------------------------------------------------------- */
?>
<?php include('layout/header.php'); ?>
<div id="editor">
    <div class="fbox">
        <a id="hide" class="editor-control" href="#">Show CSS3 Editor</a>
    </div>
    <div id="single-content">
        <form id="form-editor" action="#" style="display:none">
            <textarea id="code" ></textarea>
            <textarea id="original" style="display:none"><?php echo $css; ?></textarea>
            <textarea id="temp" style="display:none"><?php echo $css; ?></textarea>
            <div class="fbox mar5b">
                <a id="reset" class="fright editor-control" href="#">Reset</a>
            </div>
        </form>
        <div class="fbox">
            <h1 class="fleft">
                <span class="xtitle"><?php echo $row['title']; ?></span>
            </h1>
            <div class="social fleft mar10b">
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $row['short']; ?>" counturl="http://www.ecsspert.com/play/useless-css3-patterns/<?php echo $row['id']; ?>.html" data-text="<?php echo $row['title']; ?>, an useless #CSS3 pattern that I love!" data-via="ecsspert">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <iframe src="//www.facebook.com/plugins/like.php?href=http://www.ecsspert.com/play/useless-css3-patterns/<?php echo $row['id']; ?>.html&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=143184445784558" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
            </div>
            <div class="fright">
                <a class="prev" href="<?php echo $prev['id'];?>.html"><?php echo $prev['id'];?></a>
                <a class="home" href="./">Useless CSS3 Patterns</a>
                <a class="next" href="<?php echo $next['id'];?>.html"><?php echo $next['id'];?></a>
            </div>            
        </div>
    </div>
</div>
<script type="text/javascript">
    /* -----------------------------------------------------------------------------
     * button to show/hide editor
     * -------------------------------------------------------------------------- */
    var firsttime = true;
    $("#hide").click(function(e){
        e.preventDefault();

        //if it's the first time

        if($.cookie('show-editor') == "hide"){      //show the editor
            $(this).text("Hide CSS3 Editor");
            $.cookie('show-editor', "show", 30);
            $("#form-editor").slideDown(function(){
                $("#temp ").val($("#code").val());
                $("#code").val("");
                $("#code").keyup();
                $("#code").val($("#temp ").val());
                $("#code").keyup();
            });
        } else {                                    //hide the editor
            $("#form-editor").slideUp();
            $(this).text("Show CSS3 Editor");
            $.cookie('show-editor', "hide", 30);
        }
    });

    /* -----------------------------------------------------------------------------
     * apply the code from the editor live to the HTML element
     * -------------------------------------------------------------------------- */
    $("#code").autoResize({
        extraSpace: 16,
        maxHeight: $(window).height()*0.4,
        animate: false
    }).keyup(function(){
        $("body").attr("style",PrefixFree.prefixCSS($(this).val()));
    });

    //call it once to apply the initial style
    $("#code").keyup();
    /* -----------------------------------------------------------------------------
     * the reset button
     * -------------------------------------------------------------------------- */
    $('#reset').click(function(e){
        e.preventDefault();
        var info = "";
       if($("#original").val().indexOf("font-size")>=0) {
            info = " //change the scale of the pattern by modifying the font size (ex: font-size: 1.5px will increase it by 50%)";
       }
       $("#code").val($("#original").val()+info).keyup();
    });
    /* -----------------------------------------------------------------------------
     * check if the editor shoud be seen
     * -------------------------------------------------------------------------- */
    if($.cookie('show-editor'))
    {
        if($.cookie('show-editor') == 'show'){
            $("#hide").text("Hide CSS3 Editor");
            $("#code").val("");
            $("#code").keyup();
            $("#form-editor").slideDown(function(){
                $('#reset').click();
            });
        }else if($.cookie('show-editor') == 'hide'){
            $("#hide").text("Show CSS3 Editor");
            $('#reset').click();
        } 
    } else {
        $('#reset').click();
        $.cookie('show-editor', null);
    }

    
</script>
    <?php 
?>
<?php include('layout/footer.php'); ?>
<?php } ?>