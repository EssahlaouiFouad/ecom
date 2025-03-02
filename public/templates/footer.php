<footer>
        <p>جميع الحقوق محفوظة</p>
        <?php if (isset($show_whatsapp) && $show_whatsapp): ?>
        <section class="whatsapp-contact">
            <h2>تواصل معنا عبر واتساب</h2>
            <div class="whatsapp-options">
                <a href="https://wa.me/qr/S3WWMCDXTAK4O1" class="whatsapp-link" target="_blank">
                    <img src="/assets/img/logo_whatsapp.svg" alt="WhatsApp Icon" class="whatsapp-icon">
                    تواصل معنا على واتساب
                </a>
                <div class="qr-code">
                    <img src="/assets/img/qr_whatsapp.png" alt="WhatsApp QR Code" class="qr-image">
                    <p>امسح رمز QR للتواصل</p>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </footer>
</body>
</html>