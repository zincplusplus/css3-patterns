<?php if(!isset($issingle)) { ?>
<div id="footer" class="fbox">
    <div id="content-holder" class="fbox mar20t">
        <div class="fbox first-row">
            <div class="w50 fleft">
                <div id="about" class="column">
                    <h3>About</h3>
                    <div class="content">
                        <div class="text">
                            <p>What I've learned from <a href="http://www.ecsspert.com/play/css3-logos/" targe="_blank">CSS3 Logos</a> is that having fun is the key to succes.</p>
                            <p><strong>Why create something useless?</strong><br />Well, they aren't actually useless! When I've started creating the patterns I've told myself: enjoy what you do and create things that might be useless if that's what it takes to make something beautiful.</p>
                            <p><strong>Easy to adapt</strong><br />If you visit the page for each pattern you'll see that they are incredibly easy to scale! But what if you want to change the colours? Just do a simple find-and-replace for 2-3 solid colors. 30 seconds tops!</p></p>
                            <p><strong>Learning is fun</strong><br />Another thing is that while creating some complex looking patterns I had to learn a lot about CSS3 and I've used some cool new stuff that I think will hellp you start learning CSS3.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w50 fleft">
                <div class="w25 fleft">
                    <div class="column">
                        <h3>Inspiration</h3>
                        <div class="content">
                            <p>Here are some people, apps and websites that helped and inspired me when creating this page: </p>
                            <ul>
                                <li><a href="http://leaverou.github.com/prefixfree/" target="_blank">-prefix-free</a></li>
                                <li><a href="http://dabblet.com" target="_blank">Dabblet</a></li>
                                <li><a href="http://dribbble.com/shots/148018-Virtual-Agent-Pattern" target="_blank">Virtual Agent Pattern</a></li>
                                <li><a href="http://dribbble.com/shots/186761-Clothing-shop-menu" target="_blank">Clothing shop menu</a></li>
                                <li><a href="http://www.behance.net/gallery/Russian-vodka/332083" target="_blank">Russian vodka</a></li>
                                <li><a href="http://phaedralonghurst.tumblr.com/post/15093048871" target="_blank">The fruitful field</a></li>
                                <li><a href="http://www.behance.net/gallery/Museo-El-Centenario/1611673" target="_blank">Museo El Centenario</a></li>
                                <li><a href="http://lea.verou.me/css3patterns/" target="_blank">Lea Verou</a></li>
                            </ul>
                        </div> 
                    </div>
                </div>

                <div class="social w25 fleft">
                    <div class="column">
                        <h3>Follow me</h3>
                        <div class="content">
                            <ul class="fbox">
                                <li id="twitter" class="fleft">
                                    <a class="smallicon" href="http://twitter.com/ecsspert" target="_blank">
                                        <span class="canvas">
                                            <span class="icon">
                                                <span class="twitter1 draw"></span>
                                                <span class="twitter2 mask"></span>
                                                <span class="twitter3 draw"></span>
                                                <span class="twitter4 mask"></span>
                                                <span class="twitter5 draw"></span>
                                                <span class="twitter6 draw"></span>
                                                <span class="twitter7 draw"></span>
                                                <span class="twitter8 mask"></span>
                                                <span class="twitter9 draw"></span>
                                                <span class="twitter10 draw"></span>
                                                <span class="twitter11 mask"></span>
                                                <span class="twitter12 draw"></span>
                                                <span class="twitter13 draw"></span>
                                                <span class="twitter14 draw"></span>
                                                <span class="twitter15 draw"></span>
                                                <span class="twitter16 draw"></span>
                                                <span class="twitter17 draw"></span>
                                                <span class="twitter18 draw"></span>
                                                <span class="twitter19 draw"></span>
                                                <span class="twitter20 draw"></span>
                                                <span class="twitter21 draw"></span>
                                                <span class="twitter22 draw"></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li id="dribbble" class="fleft">
                                    <a href="http://dribbble.com/ecsspert" target="_blank">
                                        <span class="canvas smallicon">
                                            <span class="icon">
                                                <span class="dribbble1"></span>
                                                <span class="dribbble2"></span>
                                                <span class="dribbble3"></span>
                                                <span class="dribbble4"></span>
                                                <span class="dribbble5"></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="subscribe">
                            <h3 class="mar40t">Subscribe</h3>
                            <div class="content">
                                <p>Get the latest news about other interesting stuff I do on <a class="fake" href="/">eCSSpert.com</a></p>
                                <a href="http://eepurl.com/hyLWk" target="_blank" class="button3">Subscribe Now!</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="fbox second-row">
            <div class="">
                <div id="submit-yours" class="column">
                    <h3>Submit your CSS3 Patterns</h3>
                    <div class="content">
                        <div class="text">
                        <p>If you want to submit a pattern to the gallery, create it in <a href="http://dabblet.com/" target="_blank">Dabblet</a> and share the link via Twitter <a href="https://twitter.com/ecsspert" target="_blank">@ecsspert</a></p>
                        <p>For a submited pattern to feature in the gallery it must be:
                        <ul>
                            <li>beautiful,</li>
                            <li>scalable - on UCP, all the patterns are scalable by changing the font-size,</li>
                            <li>adaptable - the color scheme has to be easy to change (be careful if you use gradients).</li>
                        </ul>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php } ?>
<div id="disclaimer" class="fbox">
    <div class="fleft">
        &copy; <?php echo date("Y"); ?> <a class="fake" href="/">eCSSpert.com</a>
    </div>
    <div class="fright">
        <?php if(isset($issingle)) { ?>
            Submit your CSS3 pattern via Twitter <a href="https://twitter.com/ecsspert" target="_blank">@ecsspert</a>
        <?php }else {?>
        Thank you for visiting <a class="fake" href="/">eCSSpert.com</a>. Got questions or sugestions? Contact: <a href="mailto:ecsspert@gmail.com">ecsspert@gmail.com</a>
        <?php } ?>
    </div>
</div>
</div>
<!-- end of edit -->
<!-- facebook share button -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=143184445784558";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end facebook share button -->
<script>
//google analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-16398396-1']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
</body>
</html>