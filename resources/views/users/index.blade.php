<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Accounts | Simple POS</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customer Accounts</a>
        <a href="/users">User Accounts</a>
    </nav>

    <main>
        <h1>User Accounts</h1>

        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['full_name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>