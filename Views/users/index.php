<section class="page-heading">
    <p class="eyebrow">Records</p>
    <h1>User Accounts</h1>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Username</th>
                <th scope="col">Full Name</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($users !== []): ?>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="empty-state">No user records found.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>

