<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - BudgetApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 0;
        }

        .dashboard-container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            padding: 32px 40px;
        }

        h1 {
            color: #2d3748;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #4a5568;
            margin-bottom: 24px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 32px;
        }

        .card {
            background: #edf2f7;
            border-radius: 8px;
            padding: 24px;
            text-align: center;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        }

        .card h2 {
            margin: 0 0 12px 0;
            font-size: 1.2em;
            color: #2b6cb0;
        }

        .card p {
            color: #4a5568;
            font-size: 0.98em;
        }

        .quick-links {
            margin-top: 24px;
        }

        .quick-links ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 18px;
        }

        .quick-links a {
            text-decoration: none;
            color: #3182ce;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .quick-links a:hover {
            background: #bee3f8;
        }

        @media (max-width: 700px) {
            .dashboard-container {
                padding: 16px 8px;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard-container">
        <h1>Welcome to the Admin Dashboard</h1>
        <div class="subtitle">Manage your BudgetApp backend efficiently and securely.</div>
        <div class="dashboard-grid">
            <div class="card">
                <h2>User Management</h2>
                <p>View, add, edit, or remove users. Assign roles and monitor user activity.</p>
            </div>
            <div class="card">
                <h2>Transactions</h2>
                <p>Review all financial transactions, filter by date, and export reports.</p>
            </div>
            <div class="card">
                <h2>Settings</h2>
                <p>Configure application preferences, security options, and notifications.</p>
            </div>
        </div>
        <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Manage Users</a></li>
                <li><a href="#">View Transactions</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <footer style="margin-top:40px; color:#a0aec0; font-size:0.95em; text-align:center;">
            &copy; <?php echo date('Y'); ?> BudgetApp Admin Panel. All rights reserved.
        </footer>
    </div>
</body>

</html>
<?php
