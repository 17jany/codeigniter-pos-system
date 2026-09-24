<section class="profile-page">
    <div class="profile-intro">
        <p class="eyebrow">USER PROFILE</p>
        <h1>Meet the developer.</h1>
        <p>
            The person behind the Tasks for Today Management System.
        </p>
    </div>

    <?php if (! empty($user)): ?>
        <div class="profile-card">
            <div class="profile-identity">
                <div class="profile-avatar">JG</div>

                <div>
                    <span class="profile-label">DEMO USER</span>
                    <h2><?= esc($user['full_name']) ?></h2>
                    <p>@<?= esc($user['username']) ?></p>
                </div>
            </div>

            <div class="profile-details">
                <div class="detail-item">
                    <span>Email address</span>
                    <strong><?= esc($user['email']) ?></strong>
                </div>

                <div class="detail-item">
                    <span>Account created</span>
                    <strong><?= esc($user['created_at']) ?></strong>
                </div>

                <div class="detail-item">
                    <span>Account type</span>
                    <strong>Demo User</strong>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p class="empty-message">No user profile is available.</p>
    <?php endif; ?>
</section>