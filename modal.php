<!-- Modal Tambah Barang Session -->
<div class="modal fade" id="tambah-barang-session">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">Tambah Barang</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form method="post" action="javascript:void(0)" id="form-tambah-barang-session">
                                    <div class="form-group">
                                        <label for="jml_coli">Jumlah Coli</label>
                                        <input type="number" class="form-control form-control-sm" name="jml_coli" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" class="form-control form-control-sm" name="nama_barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat">Berat</label>
                                        <input type="text" class="form-control form-control-sm" name="berat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ongkos">Ongkos</label>
                                        <input type="number" class="form-control form-control-sm" name="ongkos" required>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Tambah Barang -->
<div class="modal fade" id="tambah-barang">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">Tambah Barang</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form method="post" action="javascript:void(0)" id="form-tambah-barang">
                                    <div class="form-group">
                                        <label for="jml_coli">Jumlah Coli</label>
                                        <input type="number" class="form-control form-control-sm" name="jml_coli" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_barang">Nama Barang</label>
                                        <input type="text" class="form-control form-control-sm" name="nama_barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="berat">Berat</label>
                                        <input type="text" class="form-control form-control-sm" name="berat" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ongkos">Ongkos</label>
                                        <input type="number" class="form-control form-control-sm" name="ongkos" required>
                                    </div>
                                    <input type="hidden" name="id_transaksi" value="<?= $transaksi->id_transaksi?>" />
                                    <button type="submit" onclick="tambah_barang()" class="btn btn-sm btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Edit Barang -->
<div class="modal fade" id="edit-barang">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-center">Edit Barang</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="data" id="edit-ajax"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>