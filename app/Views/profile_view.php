<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="pagetitle">
    <h1>User Profile </h1>
</div>

<section class="section">
    <div class="card">
        <div class="card-body pt-3">

            <table class="table">
                <tr>
                    <th>Username</th>
                    <td><?= $username ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td><?= $role ?></td>
                </tr>
                <tr>
                    <th>Waktu Login</th>
                    <td><?= $login_time ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><span class="badge bg-success">Login</span></td>
                </tr>
            </table>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>