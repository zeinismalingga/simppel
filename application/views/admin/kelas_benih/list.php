<main>
    <div class="container-fluid">
        <h1 class="mt-4"><?php echo $judul ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard / <?php echo $judul ?></li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <p class="float-right"><a href="<?php echo site_url('kelas_benih/add') ?>" class="btn btn-sm btn-success">Tambah +</a></p>
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
                            <th>Kelas Benih</th>
                            <th>Ket</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kelas Benih</th>
                            <th>Ket</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($kelas_benih as $kelas_benih_item): ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $kelas_benih_item['nama_kelas'] ?></td>
                                <td><?php echo $kelas_benih_item['ket'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('kelas_benih/edit/'. $kelas_benih_item['id_kelas_benih']) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo site_url('kelas_benih/delete/'. $kelas_benih_item['id_kelas_benih']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i></a>
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