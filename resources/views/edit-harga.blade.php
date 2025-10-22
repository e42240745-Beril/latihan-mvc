<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Harga Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8fb;
            padding: 30px;
            color: #333;
        }

        h2 {
            color: #880e4f;
            text-align: center;
        }

        table {
            margin: 30px auto;
            background-color: #fde7f0;
            border: 2px solid #ec407a;
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        td {
            padding: 10px;
        }

        input {
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

        .label {
            font-weight: bold;
            color: #444;
        }

        .highlight {
            color: #e91e63;
        }
    </style>
</head>
<body>
    <h2>Form Ubah Harga Produk</h2>

    <table>
        <tr>
            <td class="label">Nama Produk:</td>
            <td><b>Laptop ASUS</b></td>
        </tr>
        <tr>
            <td class="label">Kategori:</td>
            <td><b>Elektronik</b></td>
        </tr>
        <tr>
            <td class="label">Harga Saat Ini:</td>
            <td><b class="highlight">Rp5.000.000</b></td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="/produk/update-harga" method="POST">
                    @csrf
                    @method('PATCH')
                    <label>Harga Baru:</label><br>
                    <input type="number" name="harga" value="5000000" required><br><br>
                    <center><button type="submit">💾 Perbarui Harga</button></center>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
