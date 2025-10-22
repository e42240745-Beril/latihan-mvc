<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fef9f9;
            color: #333;
            padding: 30px;
        }

        h2 {
            color: #4a148c;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            margin: auto;
            background-color: #fff0f6;
            border: 2px solid #e91e63;
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
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
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #c2185b;
        }
    </style>
</head>
<body>
    <h2>Form Edit Produk</h2>

    <form action="/produk/update" method="POST">
        @csrf
        @method('PUT')

        <table>
            <tr>
                <td><label>Nama Produk:</label></td>
                <td><input type="text" name="nama" value="Laptop Lama" required></td>
            </tr>
            <tr>
                <td><label>Harga Produk:</label></td>
                <td><input type="number" name="harga" value="5000000" required></td>
            </tr>
            <tr>
                <td><label>Kategori:</label></td>
                <td>
                    <select name="kategori">
                        <option value="Elektronik" selected>Elektronik</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit">💾 Perbarui Data</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
