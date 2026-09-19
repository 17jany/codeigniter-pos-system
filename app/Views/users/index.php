<section class="table-section">
    <p class="eyebrow">STAFF DIRECTORY</p>

    <h1>User Accounts</h1>

    <p class="subtitle">
        A list of staff accounts stored in the POS system database.
    </p>

    <p class="record-count">
        <?= count($users) ?> staff accounts found
    </p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>

        <tbody>
            <?php if (! empty($users)): ?>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td class="number"><?= $index + 1 ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td class="empty-message" colspan="3">
                        No staff accounts are available.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

