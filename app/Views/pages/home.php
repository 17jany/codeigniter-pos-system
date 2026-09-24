<section class="table-section">
    <p class="eyebrow">TODAY'S SCHEDULE</p>

    <h1>Tasks for Today</h1>
    <p class="subtitle">
        Task scheduled for <?php echo esc(date('F j, Y')); ?>
    </p>

    <p class="record-count">
    <?= count($tasks) ?> tasks scheduled for today.
    </p>   

    <table>
    <thread>
        <tr>
            <th>No.</th>
            <th>Task</th>
            <th>Status</th>
            <th>Task Date</th>
        </tr>
    </thread>

    <tbody>
        <?php if (!empty($tasks)): ?>
            <?php foreach ($tasks as $index => $task): ?>
                <tr>
                    <td class="number"><?= $index + 1?></td>
                    <td><?= esc ($task['title']) ?></td>
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
                        No tasks are scheduled for today.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>
    </table>
