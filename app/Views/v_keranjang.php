<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?> 
<!-- Table with stripped rows -->
<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Harga</th> 
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        if (!empty($items)) :
            foreach ($items as $index => $item) :
        ?>
                <tr>
                    <td><?= $item['name'] ?></td>
                    <td><img src="<?= base_url() . "img/" . $item['options']['foto'] ?>" width="100px"></td>
                    <td><?= number_to_currency($item['price'], 'IDR') ?></td> 
                </tr>
        <?php
            endforeach;
        endif;
        ?>
    </tbody>
</table> 
<?= $this->endSection() ?>