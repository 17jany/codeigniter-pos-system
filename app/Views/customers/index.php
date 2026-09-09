<section class="table-section">
    <p class="eyebrow">CUSTOMER DIRECTORY</p>

    <h1>Customer Accounts</h1>

    <p class="subtitle">
        A temporary directory of customer contact information stored
        through a static PHP array.
    </p>

    <p class="record-count">
        <?= count($customers) ?> customer records found
    </p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>
        </thead>

        <tbody>
            <?php if (! empty($customers)): ?>
                <?php foreach ($customers as $index => $customer): ?>
                    <tr>
                        <td class="number"><?= $index + 1 ?></td>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td class="empty-message" colspan="4">
                        No customer records are available.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

