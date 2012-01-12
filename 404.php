<?php $is404 = true; ?>
<?php include('layout/pattern-list.php'); ?>
<?php include('layout/header.php'); ?>
<hgroup>

    <div class="xribbon">
        <h1 class="xheader">
            <span class="xtitle">Oups! This page seems to be missing</span>
        </h1>
        <h2 class="xtagline">Until we find it, you can start browsing through some existing patterns</h2>
    </div>
</hgroup>
<div id="p404">
	<ul id="pattern-list-404">
	    <?php
	    //afisarea listei
	    foreach ($stack as $key => $row) {
	        ?>
	        <li>
	            <a class="pattern" href="/play/useless-css3-patterns/<?php echo $row['id']; ?>.html" ><?php echo $row['title']; ?></a>
	        </li>
	    <?php } ?>
	</ul>
</div>
<?php include('layout/footer.php'); ?>