<?php
$title = 'الصفحة غير موجودة';
get_header($title);
?>

<section class="error-404">
    <div class="error-message">
        <h2>⚠️ عذراً، الصفحة غير موجودة ⚠️</h2>
        <p>عذراً، الصفحة التي تبحث عنها غير موجودة.</p>
        <a href="?page=home"><button>العودة للصفحة الرئيسية</button></a>
    </div>
</section>

<?php
get_footer();
?>