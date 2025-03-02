<?php
$title = 'طلب صندوق هدايا رمضان';
get_header($title);
?>

<section class="order-form-container">
    <form id="orderForm" class="order-form">
        <div class="form-group">
            <label for="name">الاسم الكامل:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="phone">رقم الهاتف:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="address">العنوان:</label>
            <textarea id="address" name="address" required></textarea>
        </div>

        <div class="form-group">
            <label for="color">لون الصندوق:</label>
            <select id="color" name="color">
                <option value="gold">ذهبي</option>
                <option value="silver">فضي</option>
                <option value="blue">أزرق</option>
                <option value="red">أحمر</option>
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">الكمية:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1" required>
        </div>

        <button type="submit">تأكيد الطلب</button>
    </form>
</section>

<script>
document.getElementById('orderForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const formData = {
        name: document.getElementById('name').value,
        phone: document.getElementById('phone').value,
        email: document.getElementById('email').value,
        address: document.getElementById('address').value,
        color: document.getElementById('color').value,
        quantity: document.getElementById('quantity').value
    };

    try {
        const response = await fetch('/api/orders', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        });

        const result = await response.json();

        if (response.ok) {
            window.location.href = '?page=success';
        } else {
            alert('حدث خطأ أثناء تقديم الطلب. يرجى المحاولة مرة أخرى.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('حدث خطأ أثناء تقديم الطلب. يرجى المحاولة مرة أخرى.');
    }
});
</script>

<?php
$show_whatsapp = true;
get_footer();
?>