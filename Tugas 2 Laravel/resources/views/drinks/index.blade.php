<!DOCTYPE html>
<html>
<head>
    <title>Daftar Minuman</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .logout {
            position: absolute;
            top: 20px;
            right: 30px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px 15px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="logout">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <h1>Daftar Minuman</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Minuman</th>
                <th>Harga (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinks as $drink)
                <tr>
                    <td>{{ $drink->name }}</td>
                    <td>{{ number_format($drink->price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
