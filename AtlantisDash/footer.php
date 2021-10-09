<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; <?= Date('Y'); ?> </strong>
</footer>

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php foreach ($linksScript as $value) : ?>
    <script src="<?= $value ?>"></script>
<?php endforeach; ?>
</body>

</html>