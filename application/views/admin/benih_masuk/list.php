<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?php echo $judul ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard / <?php echo $judul ?></li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <p class="float-right"><a href="<?php echo site_url('benih_masuk/add') ?>" class="btn btn-sm btn-success">Tambah +</a></p>
            </div>            
        </div>        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                <?php echo $judul ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Benih</th>
                            <th>Varietas</th>
                            <th>Penangkar</th>
                            <th>Jumlah Masuk</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Benih</th>
                            <th>Varietas</th>
                            <th>Penangkar</th>
                            <th>Jumlah Masuk</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($benih_masuk as $benih_masuk_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $benih_masuk_item['tgl'] ?></td>
                                <td><?php echo $benih_masuk_item['nama_komoditi'] ?></td>
                                <td><?php echo $benih_masuk_item['nama_varietas'] ?></td>
                                <td><?php echo $benih_masuk_item['nama_produsen'] ?></td>
                                <td>
                                    <?php echo $benih_masuk_item['jumlah_masuk'] ?>
                                </td>
                                <td><?php echo $benih_masuk_item['satuan'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('benih_masuk/edit/'. $benih_masuk_item['id_benih_masuk']) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo site_url('benih_masuk/delete/'. $benih_masuk_item['id_benih_masuk']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php $no++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</main>