<section class="table-section">
    <p class="eyebrow">STAFF DIRECTORY</p>

    <h1>User Accounts</h1>

    <p class="subtitle">
        A list of staff members and their assigned responsibilities
        within the POS system.
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
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            <?php if (! empty($users)): ?>
                <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td class="number"><?= $index + 1 ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td>
                            <span class="role">
                                <?= esc($user['role']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td class="empty-message" colspan="4">
                        No staff accounts are available.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>

