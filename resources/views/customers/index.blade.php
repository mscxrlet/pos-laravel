<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Accounts | Simple POS</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customer Accounts</a>
        <a href="/users">User Accounts</a>
    </nav>

    <main>
        <h1>Customer Accounts</h1>

        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer['full_name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>