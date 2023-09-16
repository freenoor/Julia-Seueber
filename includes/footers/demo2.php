<?php
/**
 * @package Standard
 */
?>

<footer id="colophon" class="site-footer">
    <div class="cols">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 footer-1">
                    <ul>
                    <?php dynamic_sidebar('footer-1');?>
                    </ul>
                </div>
                <div class="col-lg-3 footer-2">
                    <ul>
                    <?php dynamic_sidebar('footer-2');?>
                    </ul>
                </div>
                <div class="col-lg-3 footer-3">
                    <ul>
                    <?php dynamic_sidebar('footer-3');?>
                    </ul>
                </div>
                <div class="col-lg-3 footer-4">
                    <ul>
                    <?php dynamic_sidebar('footer-4');?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="copyr">
        <p>&copy;<?php echo date(' Y  ') ;?>Alle Rechte vorbehalten. <a href="https://solution25.com/">solution25</a> </p>
    </div>
</div>
</footer><!-- #colophon -->


</div><!-- #page -->


<?php wp_footer(); ?>
</body>

</html>