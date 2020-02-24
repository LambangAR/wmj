<?php

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('barang_model');
    }

    // Tambah Barang
    public function tambah_barang() {
        $data = array(
            'jml_coli' => $this->input->post('jml_coli'),
            'nama_barang' => $this->input->post('nama_barang'),
            'berat' => $this->input->post('berat'),
            'ongkos' => $this->input->post('ongkos'),
            'id_transaksi' => $this->input->post('id_transaksi')
        );

        $this->barang_model->add($data);
        echo json_encode(array("status" => true));
    }
    
    // Edit Barang
    public function edit_barang($id) {
        
        $data = array(
            'jml_coli' => $this->input->post('jml_coli'),
            'nama_barang' => $this->input->post('nama_barang'),
            'berat' => $this->input->post('berat'),
            'ongkos' => $this->input->post('ongkos'),
            'id_transaksi' => $this->input->post('id_transaksi')
        );

        $this->barang_model->edit($data, $id);
    }

    // Hapus Barang
    public function hapus_barang($id = null) {
        if (!isset($id)) show_404();
        $this->barang_model->delete($id);
        echo json_encode(array("status" => true));
    }

    public function ajax()
    {
        $id = $this->input->post('id');
        $result = '';
        $get = $this->barang_model->getById($id)->result_array();
        foreach($get as $det){
            $result .='
            <form method="post" action="'.base_url('barang/edit_barang/'. $id).'">
            
            <div class="form-group">
                <label for="jml_coli">Jumlah Coli</label>
                    <input type="number" class="form-control form-control-sm" required name="jml_coli" value="'.$det['jml_coli'].'" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control form-control-sm" required name="nama_barang" value="'.$det['nama_barang'].'" required>
            </div>
            <div class="form-group">
                <label for="berat">Berat</label>
                    <input type="text" class="form-control form-control-sm" required name="berat" value="'.$det['berat'].'" required>
            </div>
            <div class="form-group">
                <label for="ongkos">Ongkos</label>
                    <input type="number" class="form-control form-control-sm" required name="ongkos" value="'.$det['ongkos'].'" required>
            </div>
                <input type="hidden" name="id_transaksi" value="'.$det['id_transaksi'].'">
                <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Simpan" onclick="edit_barang()">

            </form>
            ';
        }
        echo $result;
    }
}