<div class="box box-primary">
    <div class="box-header with-border">
        <div class="box-title">Transaksi Pinjaman</div>
    </div>

    <div class="box-body">
        <form role="form">
            <div class="form-group">
                <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
                <input type="text" name="jumlah_pinjaman" id="jumlah_pinjaman" class="form-control" placeholder="Masukan jumlah pinjaman tanpa pemisah ribuan"/>
            </div>

            <div class="form-group">
                <label for="lama_pinjaman">Lama Pinjaman</label>
                <select class="form-control" id="lama_pinjaman" name="lama_pinjaman">
                    <option>3 Bulan</option>
                    <option>6 Bulan</option>
                    <option>12 Bulan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="bank_tujuan">Bank Tujuan Transfer</label>
                <select class="form-control" id="bank_tujuan" name="bank_tujuan">
                    <option>BCA</option>
                    <option>Mandiri</option>
                    <option>Kuda</option>
                </select>
            </div>
    </div>

    <div class="box-footer">
        <button type="simpan" class="btn btn-primary">Pinjam</button>
    </div>
    </form>
</div>
<div class="box box-info">
    <div class="box-header with-border">
        <div class="box-title">Riwayat Transaksi Pinjaman</div>
    </div>

    <div class="box-body">
        <div class="table-responsive">
            <table id="riwayat_transaksi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Tanggal transaksi</th>
                    <th>No transaksi</th>
                    <th>Kode pinjaman</th>
                    <th>Lama pinjam</th>
                    <th>Jumlah pinjaman</th>
                    <th>Angsuran perbulan</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php for($x = 1; $x <= 100; $x++): ?>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>SM100</td>
                        <td>3 bulan</td>
                        <td>500.000</td>
                        <td>50.000</td>
                        <td><span class="label label-warning">Pending</span></td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>SM200</td>
                        <td>6 bulan</td>
                        <td>1.000.000</td>
                        <td>100.000</td>
                        <td><span class="label label-danger">Gagal</span></td>
                    </tr>
                    <tr>
                        <td>02/02/2018 - 16:00</td>
                        <td><a href="#">SPN123456</a></td>
                        <td>SM300</td>
                        <td>12 bulan</td>
                        <td>20.000</td>
                        <td>2.000</td>
                        <td><span class="label label-success">Sukses</span></td>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>