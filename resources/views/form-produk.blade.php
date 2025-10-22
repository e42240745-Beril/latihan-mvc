<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            color: #333;
            padding: 30px;
        }

        h2 {
            color: #ad1457;
            text-align: center;
        }

        table {
            margin: 30px auto;
            background-color: #fdeef3;
            border: 2px solid #f06292;
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        td {
            padding: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #ec407a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #d81b60;
        }
    </style>
</head>
<body>
    <h2>Form Input Produk</h2>

    <form action="/kirim-produk" method="POST">
        @csrf
        <table>
            <tr>
                <td><label>Nama Produk:</label></td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><label>Harga Produk:</label></td>
                <td><input type="number" name="harga" required></td>
            </tr>
            <tr>
                <td><label>Kategori:</label></td>
                <td>
                    <select name="kategori">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Elektronik">Elektronik</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit">💾 Kirim</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
