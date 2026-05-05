<footer>
    <p>جميع الحقوق محفوظة &copy; <?= date('Y') ?> — <span dir="ltr">eatSmartly</span></p>
</footer>

<script>
    // Smooth scroll — only for same-page anchor links (href starts with #)
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var href = this.getAttribute('href');
            if (href.length > 1) {
                e.preventDefault();
                var target = document.querySelector(href);
                if (target) target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>
</body>
</html>
