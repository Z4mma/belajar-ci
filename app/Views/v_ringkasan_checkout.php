<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h3>
Checkout Berhasil
</h3>

</div>

<div class="card-body">

<div class="alert alert-success">

Pesanan berhasil dibuat.

Terima kasih telah berbelanja.

</div>

<h4>Data Pemesan</h4>

<table class="table table-bordered">

<tr>
<th width="220">ID Transaksi</th>
<td><?= $transaction['id'] ?></td>
</tr>

<tr>
<th>Username</th>
<td><?= esc($transaction['username']) ?></td>
</tr>

<tr>
<th>Alamat</th>
<td><?= esc($transaction['alamat']) ?></td>
</tr>

</table>

<h4>Produk Dibeli</h4>

<table class="table table-striped">

<thead>

<tr>

<th>No</th>

<th>Produk</th>

<th>Qty</th>

<th>Subtotal</th>

</tr>

</thead>

<tbody>

<?php $no=1; ?>

<?php foreach($details as $d): ?>

<tr>

<td><?= $no++ ?></td>

<td><?= $d['product_id'] ?></td>

<td><?= $d['jumlah'] ?></td>

<td>

<?= number_to_currency($d['subtotal_harga'],'IDR') ?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

<h4>Ringkasan Pembayaran</h4>

<table class="table table-bordered">

<tr>

<th>Biaya Admin</th>

<td>

<?= number_to_currency($transaction['biaya_admin'],'IDR') ?>

</td>

</tr>

<tr>

<th>Diskon Kupon</th>

<td class="text-danger">

- <?= number_to_currency($transaction['diskon_kupon'],'IDR') ?>

</td>

</tr>

<tr>

<th>Cashback</th>

<td class="text-success">

<?= number_to_currency($transaction['cashback'],'IDR') ?>

</td>

</tr>

<tr>

<th>Ongkir</th>

<td>

<?= number_to_currency($transaction['ongkir'],'IDR') ?>

</td>

</tr>

<tr class="table-success">

<th>TOTAL HARGA</th>

<td>

<strong>

<?= number_to_currency($transaction['total_harga'],'IDR') ?>

</strong>

</td>

</tr>

</table>

<div class="text-end">

<a href="<?= base_url() ?>" class="btn btn-primary">

Kembali ke Beranda

</a>

</div>

</div>

</div>

</div>

<?= $this->endSection() ?>