<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

<?php foreach ($linksScript as $value) : ?>
    <script src="<?= $value ?>"></script>
<?php endforeach; ?>
</body>

</html>