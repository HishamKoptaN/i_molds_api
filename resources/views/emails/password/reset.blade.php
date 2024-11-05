<!-- resources/views/emails/password/reset.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إعادة تعيين كلمة المرور</title>
</head>
<body>
    <h2>مرحبًا {{ $user->name }},</h2>
    <p>لقد طلبت إعادة تعيين كلمة المرور الخاصة بحسابك. اضغط على الرابط أدناه لإعادة تعيين كلمة المرور:</p>
    <a href="{{ $resetUrl }}">إعادة تعيين كلمة المرور</a>
    <p>إذا لم تطلب إعادة تعيين كلمة المرور، فلا داعي لاتخاذ أي إجراء.</p>
    <p>شكرًا لك،<br>فريق الدعم</p>
</body>
</html>
