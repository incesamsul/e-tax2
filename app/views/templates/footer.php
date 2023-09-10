<footer class="main-footer border-0">
    <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> made By <a href="https://samtam.tech">samtam tech</a>
    </div>
    <div class="footer-right">
        2.3.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= BASEURL ?>/public/template/stisla/assets/js/stisla.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- JS Libraies -->

<script src="<?= BASEURL ?>/public/template/stisla/assets/js/scripts.js"></script>
<script src="<?= BASEURL ?>/public/template/stisla/assets/js/custom.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

<script>
    $('#' + '<?= $data["liClassActive"] ?>').addClass('active');
    let dataTable = $('.data-table').DataTable({
        searching: true,
    });


    $('.search-data-table').on('keyup', function() {
        dataTable.search(this.value).draw();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" integrity="sha512-HCG6Vbdg4S+6MkKlMJAm5EHJDeTZskUdUMTb8zNcUKoYNDteUQ0Zig30fvD9IXnRv7Y0X4/grKCnNoQ21nF2Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?= isset($data['script']) ? $data['script'] : '' ?>

<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>


</body>

</html>