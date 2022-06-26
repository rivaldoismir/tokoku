<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class Transaksi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $id = $this->session->get('id');
        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->where('id_pembeli', $id)->findAll();
        return view('transaksi/index', [
            'transaksis' => $transaksi,
        ]);
    }

    public function buy()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'transaksi');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $transaksiModel = new \App\Models\TransaksiModel();
                $transaksi = new \App\Entities\Transaksi();

                $barangModel = new \App\Models\BarangModel();
                $id_barang = $this->request->getPost('id_barang');
                $jumlah_pembelian = $this->request->getPost('jumlah');

                $barang = $barangModel->find($id_barang);
                $entityBarang = new \App\Entities\Barang();

                $entityBarang->id = $id_barang;

                $entityBarang->stok = $barang->stok - $jumlah_pembelian;
                $barangModel->save($entityBarang);

                $transaksi->fill($data);
                $transaksi->status = 0;
                $transaksi->created_by = $this->session->get('id');
                $transaksi->created_date = date("Y-m-d H:i:s");

                $transaksiModel->save($transaksi);

                $id = $transaksiModel->insertID();

                return redirect()->to('transaction');
            }
        }
    }

    public function invoice()
    {
        $id = $this->request->uri->getSegment(2);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->find($id);

        $userModel = new \App\Models\UserModel();
        $pembeli = $userModel->find($transaksi->id_pembeli);

        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($transaksi->id_barang);

        $html = view('transaksi/invoice', [
            'transaksi' => $transaksi,
            'pembeli' => $pembeli,
            'barang' => $barang,
        ]);

        $filename = date('y-m-d-H-i-s') . '-invoice';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
