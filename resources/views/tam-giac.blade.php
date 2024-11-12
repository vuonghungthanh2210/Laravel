<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện Tích Hình Tam Giác</title>
</head>
<body>
<h1>Diện tích hình tam giác</h1>

<form action="{{ route('tam-giac.tinh-dien-tich') }}" method="POST">
    @csrf

    <div>
        <label for="tam_giac_day">Cạnh đáy:</label>
        <input type="number" id="tam_giac_day" name="tam_giac_day" required>
    </div>

    <div>
        <label for="tam_giac_chieu_cao">Chiều cao:</label>
        <input type="number" id="tam_giac_chieu_cao" name="tam_giac_chieu_cao" required>
    </div>

    <button type="submit">Tính diện tích</button>
</form>

@if (session('dien_tich'))
    <p>Kết quả: {{ session('dien_tich') }}</p>
@endif
</body>
</html>