                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Zein 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
        <script data-require="jqueryui@*" data-semver="1.10.0" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets') ?>/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets') ?>/assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url('assets') ?>/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets') ?>/assets/demo/datatables-demo.js"></script>
        <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
        <script>
            var inp = document.querySelector('#file_name');
            inp.addEventListener('change', function(e){
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(){
                    document.getElementById('gambar').src = this.result;
                    };
                reader.readAsDataURL(file);
                },false);
        </script>
        <script>
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose : 'true',
                todayHighlight : 'true',
                orientation : 'bottom'
            });
        </script>
        <script>
            $(document).ready(function(){
               var base_url = window.location.origin + "/inventorybenih";

                $('#benih').change(function(){
                    var id= $('#benih').val();
                    $.ajax({
                        url : base_url+ "/benih/get_benih",
                        method : "POST",
                        data : {id: id},
                        async : false,
                        dataType : 'json',
                        success: function(data){
                            $('#benih_detail').attr('value',data.nama_komoditi);
                            $('#varietas').attr('value',data.nama_varietas);
                            $('#kelas_benih').attr('value',data.nama_kelas);
                            $('#stok').attr('value',data.stok_benih);
                            $('#gambar').attr('src',base_url+ '/assets/img/' + data.file_name);
                        }
                    });
                });
            });
        </script>
        <script>
                var oTable = $('#dataTable').DataTable();

                $("#tgl_mulai").change(function() {
                    minDateFilter = new Date(this.value).getTime();
                    alert(minDateFilter);
                    oTable.Draw();
                  });
        </script>
        <?php if(current_url() == base_url().'laporan_masuk/list'): ?>
        <script>
             
        </script>
        <?php endif ?>
    </body>
</html>