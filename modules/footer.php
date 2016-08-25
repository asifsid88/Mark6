<div id="mark6-footer">
    <div id="footer-text">
        <div class="follow float-right">
            <div class="keep-in-touch">Keep in touch</div>
            <div class="social facebook" data-attr-link="https://www.facebook.com/mark6clothing"></div>
            <div class="social instagram" data-attr-link="https://www.instagram.com/mark6clothing/"></div>
            <div class="social twitter" data-attr-link="https://twitter.com/mark6clothing"></div>
        </div>
        <div class="clear-both"></div>
        <div>
            <div class="float-left">Have issues? <a href="/contactus.php" class="footer-link">Contact Us</a></div>
            <div class="float-right">&copy; <?php echo date("Y"); ?> <a href="/index.php" class="footer-link">www.mark6.in</a>. All rights reserved.</div>
        </div>
    </div>
</div>

<script type="text/javascript">
$('.social').on('click', function() {
    var url = $(this).attr('data-attr-link');
    var win = window.open(url, '_blank');
    win.focus();
});
</script>