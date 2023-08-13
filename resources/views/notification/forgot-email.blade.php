<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Email</title>
</head>

<body>
    <table style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <tr>
            <td align="center" style="padding-bottom: 20px;">
                <img src="{{ asset('path-to-your-logo.png') }}" alt="Klinik Logo" style="max-width: 150px;">
            </td>
        </tr>
        <tr>
            <td>
                <p>Selamat datang di Klinik kami!</p>
                <p>Ini adalah contoh email template untuk Klinik kami. Kami sangat senang dapat melayani Anda.</p>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding-top: 20px; border-top: 1px solid #ccc;">
                <p>&copy; {{ date('Y') }} Klinik - Joyonurdiansyah</p>
            </td>
        </tr>
    </table>
</body>

</html>
