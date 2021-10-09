<footer class="footer">
    <div class="container-fluid">
        <div class="copyright ml-auto">
            Copyright &copy; <?= Date('Y'); ?>
        </div>
    </div>
</footer>
</div>
<!-- End Custom template -->
</div>


<?php foreach ($linksScript as $value) : ?>
    <script src="<?= $value ?>"></script>
<?php endforeach; ?>

<script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: ['../public/backAtlaintis/assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>
</body>

</html>