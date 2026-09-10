<section class="page-heading">
    <p class="eyebrow">Records</p>
    <h1>Customer Accounts</h1>
</section>

<div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($customers !== []): ?>
                <?php foreach ($customers as $index => $customer): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" class="empty-state">No customer records found.</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>
