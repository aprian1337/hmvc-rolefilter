    <div class="container mt-4">
        <div class="notification is-primary">
            Selamat datang <?= $username ?>, role anda : <?= $role ?>
        </div>

        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Data Akun
                </p>
                <a href="#" class="card-header-icon" aria-label="more options">
                    <span class="icon">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                </a>
            </header>
            <div class="card-content">
                <table class="table is-striped is-narrow is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th><abbr title="#">#</abbr></th>
                            <th><abbr title="Nama">Nama</abbr></th>
                            <th><abbr title="Username">Username</abbr></th>
                            <th><abbr title="Password">Password (Hash)</abbr></th>
                            <th><abbr title="Role">Role</abbr></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><abbr title="#">#</abbr></th>
                            <th><abbr title="Nama">Nama</abbr></th>
                            <th><abbr title="Username">Username</abbr></th>
                            <th><abbr title="Password">Password (Hash)</abbr></th>
                            <th><abbr title="Role">Role</abbr></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($accounts as $data) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['username'] ?></td>
                                <td><?= $data['password'] ?></td>
                                <td><?= $data['role'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <footer class="card-footer">
                <p class="card-footer-item">
                    <span>
                        Normaliana Safitri
                    </span>
                </p>
            </footer>
        </div>

    </div>


    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
</body>

</html>