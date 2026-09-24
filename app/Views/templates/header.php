<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> | Tasks Today</title>

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --black: #171717;
            --accent: #525252;
            --background: #f3f4f6;
            --white: #ffffff;
            --gray: #666666;
            --border: #dddddd;
        }

        body {
            margin: 0;
            color: var(--black);
            background-color: var(--background);
            font-family: Arial, Helvetica, sans-serif;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 14px 8%;
            background-color: var(--black);
        }

        .brand {
            margin-right: auto;
            color: var(--white);
            font-size: 17px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        nav a {
            padding: 9px 14px;
            color: #e5e5e5;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.2s ease;
        }

        nav a:hover,
        nav a.active {
            color: var(--black);
            background-color: #e5e5e5;
            transform: translateY(-2px);
        }

        nav .brand:hover {
            color: var(--white);
            background: transparent;
            transform: none;
        }

        main {
            width: min(1100px, 88%);
            min-height: calc(100vh - 190px);
            margin: 45px auto;
        }

        h1 {
            margin: 0 0 15px;
            color: var(--black);
            font-size: 38px;
        }

        h2 {
            color: #262626;
        }

        .eyebrow {
            margin-bottom: 12px;
            color: var(--accent);
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .subtitle {
            max-width: 750px;
            color: #525252;
            line-height: 1.7;
        }

        .table-section {
            padding: 32px;
            overflow-x: auto;
            background-color: var(--white);
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            box-shadow: 7px 7px 0 var(--black);
        }

        .record-count {
            display: inline-block;
            margin: 8px 0 0;
            padding: 7px 12px;
            color: #404040;
            background-color: #eeeeee;
            border-left: 4px solid var(--black);
            border-radius: 4px;
            font-size: 14px;
        }

        table {
            width: 100%;
            min-width: 650px;
            margin-top: 22px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid var(--border);
            text-align: left;
        }

        th {
            color: var(--white);
            background-color: var(--black);
        }

        tbody tr {
            transition: 0.2s ease;
        }

        tbody tr:hover {
            background-color: #f3f4f6;
        }

        .number {
            color: #525252;
            font-weight: bold;
        }

        .role {
            display: inline-block;
            padding: 5px 10px;
            color: #262626;
            background-color: #e5e5e5;
            border: 1px solid #c7c7c7;
            border-radius: 20px;
            font-size: 14px;
        }

        .empty-message {
            padding: 30px;
            color: var(--gray);
            text-align: center;
        }

        /* PROFILE PAGE */

        .profile-page {
            padding: 48px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 8px 8px 0 var(--black);
        }

        .profile-intro {
            max-width: 650px;
            margin-bottom: 32px;
        }

        .profile-intro h1 {
            font-size: clamp(38px, 5vw, 58px);
            line-height: 1.05;
            letter-spacing: -2px;
        }

        .profile-intro > p:last-child {
            color: var(--gray);
            font-size: 17px;
            line-height: 1.7;
        }

        .profile-card {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            overflow: hidden;
            border: 1px solid var(--black);
            border-radius: 12px;
        }

        .profile-identity {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 32px;
            color: var(--white);
            background: var(--black);
        }

        .profile-avatar {
            display: grid;
            width: 88px;
            height: 88px;
            flex-shrink: 0;
            place-items: center;
            color: var(--black);
            background: #d4d4d4;
            border-radius: 50%;
            font-size: 28px;
            font-weight: bold;
        }

        .profile-label,
        .about-card span {
            color: #bdbdbd;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .profile-identity h2 {
            margin: 8px 0;
            color: var(--white);
            font-size: 25px;
        }

        .profile-identity p {
            margin: 0;
            color: #bdbdbd;
        }

        .profile-details {
            padding: 15px 30px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid var(--border);
        }

        .detail-item:last-child {
            border-bottom: 0;
        }

        .detail-item span {
            color: #777777;
        }

        .detail-item strong {
            text-align: right;
        }

        /* ABOUT PAGE */

        .about-page {
            display: grid;
            grid-template-columns: 110px 1fr;
            gap: 35px;
            padding: 48px;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 8px 8px 0 var(--black);
        }

        .about-number {
            color: var(--accent);
            font-size: 72px;
            font-weight: bold;
            line-height: 1;
        }

        .about-content h1 {
            max-width: 850px;
            font-size: clamp(38px, 5vw, 58px);
            line-height: 1.05;
            letter-spacing: -2px;
        }

        .about-description {
            max-width: 700px;
            color: var(--gray);
            font-size: 17px;
            line-height: 1.7;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-top: 35px;
        }

        .about-card {
            min-height: 190px;
            padding: 24px;
            border: 1px solid var(--black);
            border-radius: 10px;
            transition: 0.2s ease;
        }

        .about-card:hover {
            box-shadow: 5px 5px 0 #a3a3a3;
            transform: translate(-3px, -3px);
        }

        .about-card h2 {
            margin: 35px 0 8px;
            font-size: 21px;
        }

        .about-card p {
            margin: 0;
            color: var(--gray);
            line-height: 1.5;
        }

        .accent-card {
            color: var(--white);
            background: var(--black);
        }

        .accent-card h2 {
            color: var(--white);
        }

        .accent-card p {
            color: #bdbdbd;
        }

        footer {
            padding: 22px;
            color: #737373;
            text-align: center;
            border-top: 1px solid var(--border);
        }

        @media (max-width: 750px) {
            nav {
                flex-wrap: wrap;
                padding: 14px 4%;
            }

            .brand {
                width: 100%;
                margin-bottom: 5px;
            }

            main {
                width: 92%;
                margin: 25px auto;
            }

            .table-section,
            .profile-page,
            .about-page {
                padding: 24px;
                box-shadow: 5px 5px 0 var(--black);
            }

            .profile-card,
            .about-page,
            .about-grid {
                grid-template-columns: 1fr;
            }

            .profile-identity {
                flex-direction: column;
                align-items: flex-start;
            }

            .about-number {
                font-size: 45px;
            }

            .detail-item {
                flex-direction: column;
            }

            .detail-item strong {
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a class="brand" href="<?= base_url('/') ?>">
            TASKS TODAY
        </a>

        <a
            href="<?= base_url('/') ?>"
            class="<?= uri_string() === '' ? 'active' : '' ?>"
        >
            Today
        </a>

        <a
            href="<?= base_url('tasks') ?>"
            class="<?= uri_string() === 'tasks' ? 'active' : '' ?>"
        >
            Task List
        </a>

        <a
            href="<?= base_url('profile') ?>"
            class="<?= uri_string() === 'profile' ? 'active' : '' ?>"
        >
            Profile
        </a>

        <a
            href="<?= base_url('about') ?>"
            class="<?= uri_string() === 'about' ? 'active' : '' ?>"
        >
            About
        </a>
    </nav>

    <main>
