<?php
$title = null; // For the header template
require_once __DIR__ . '/templates/header.php';
?>

<main class="container">
    <section class="product-details">
        <h2>🎁 محتويات الصندوق:</h2>
        <ul>
            <li>📖 <strong>مصحف كريم بغلاف مخملي فاخر</strong> مزين بنقوش ذهبية أنيقة.</li>
            <li>🕌 <strong>سجادة صلاة ناعمة وفاخرة</strong> بتصميم أنيق وألوان راقية.</li>
            <li>📿 <strong>سبحة راقية بأحجار مميزة</strong> تساعدك على الذكر والتأمل.</li>
        </ul>
        <div class="price-section">
            <p class="price">
                <span class="original-price">200 DH</span>
                <span class="discounted-price">170 DH</span>
            </p>
        </div>
    </section>

    <section class="slideshow-container">
        <div class="slide fade">
            <img src="/assets/img/Qurane/img1.jpg" alt="صندوق هدايا رمضان">
        </div>
        <div class="slide fade">
            <img src="/assets/img/Qurane/img2.jpg" alt="صندوق هدايا رمضان">
        </div>
        <div class="slide fade">
            <img src="/assets/img/Qurane/img3.jpg" alt="صندوق هدايا رمضان">
        </div>

        <a class="prev" onclick="changeSlide(-1)">❮</a>
        <a class="next" onclick="changeSlide(1)">❯</a>

        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <section class="cta-section">
        <a href="/pages/order.php" class="order-button">اطلب الآن</a>
    </section>
</main>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("dot");
    
    if (n > slides.length) slideIndex = 1;
    if (n < 1) slideIndex = slides.length;

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
</script>

<?php require_once __DIR__ . '/templates/footer.php'; ?>