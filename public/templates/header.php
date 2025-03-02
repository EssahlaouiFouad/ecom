<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ? $title . ' - صناديق هدايا رمضان' : 'صناديق هدايا رمضان'; ?></title>
    <link rel="icon" type="image/png" href="/assets/img/logo.png">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <img src="/assets/img/logo.png" alt="Site Logo" class="site-logo">
        <h1><?php echo $title ?: '✨ صناديق هدايا رمضان – فخامة وروحانية ✨'; ?></h1>
        <?php if (!$title): ?>
        <p>مع اقتراب شهر رمضان المبارك، قدّموا هدية تجمع بين الإيمان والأناقة مع صناديقنا الفاخرة والمميزة. 🌙💖</p>
        <?php endif; ?>
    </header>