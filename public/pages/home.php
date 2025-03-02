<?php
$title = '✨ صناديق هدايا رمضان – فخامة وروحانية ✨';
get_header($title);
?>

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
        <img src="/assets/img/Qurane/img (1).jpg" alt="صندوق هدايا رمضان">
    </div>
    <div class="slide fade">
        <img src="/assets/img/Qurane/img (2).jpg" alt="صندوق هدايا رمضان">
    </div>
    <div class="slide fade">
        <img src="/assets/img/Qurane/img (3).jpg" alt="صندوق هدايا رمضان">
    </div>

    <a class="prev" onclick="changeSlide(-1)">❮</a>
    <a class="next" onclick="changeSlide(1)">❯</a>

    <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>

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
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");

        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    // Auto advance slides
    setInterval(() => changeSlide(1), 5000);
</script>

<section class="call-to-action">
    <p>🎁 <strong>اجعل رمضان هذا العام أكثر روحانية وتألقًا مع هدية مميزة!</strong></p>
    <p>📩 <strong>اطلب الآن واستعد لشهر رمضان المبارك!</strong> 🌙💙</p>
    <a href="?page=order" class="order-button">اطلب الآن</a>
</section>

<?php
$show_whatsapp = true;
get_footer();
?>