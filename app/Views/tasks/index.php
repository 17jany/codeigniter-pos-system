<section class="table-section">
    <p class="eyebrow">COMPLETE SCHEDULE</p>

    <h1>Task List</h1>

    <p class="subtitle">
        A complete list of all tasks arranged by date.
    </p>

    <p class="record-count">
        <?= count($tasks) ?> tasks found
    </p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Task</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>

        <tbody>
            <?php if (! empty($tasks)): ?>
                <?php foreach ($tasks as $index => $task): ?>
                    <tr>
                        <td class="number"><?= $index + 1 ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td>
                            <span class="role">
                                <?= esc(ucwords($task['status'])) ?>
                            </span>
                        </td>
                        <td><?= esc($task['task_date']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td class="empty-message" colspan="4">
                        No tasks are available.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>