<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Hai Số</title>
</head>
<body>
    <h1>Hãy Nhập Giá Trị Cần Tính Vào Ô Bên Dưới</h1>
    <form action="{{ route('tinh-tong') }}" method="POST">
        @csrf
        <label for="soA">Số A:</label>
        <input type="number" id="soA" name="soA" required><br><br>
        <label for="soB">Số B:</label>
        <input type="number" id="soB" name="soB" required><br><br>
        <button type="submit">Tính Tổng</button>
    </form>

    @if(session('tong'))
        <p>Kết quả: Tổng của A và B là {{ session('tong') }}</p>
    @endif
</body>
</html>
