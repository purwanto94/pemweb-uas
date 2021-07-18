<div class="container pt-5">
    <a href="<?= base_url('warga/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Warga</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <?php 
                        foreach ($ambilLaporan as $row)
                        ?>
                            <tr>
                                <td>Jumlah</td>
                                <td><?php echo $row['total_jumlah'];?></td>
                            </tr>
                            
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>