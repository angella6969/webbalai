<!-- Vendor JS Files -->
<script src="{{ 'assets/vendor/aos/aos.js '}}"></script>

<script src="{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js '}}"></script>
<script src="{{ 'assets/vendor/glightbox/js/glightbox.min.js '}}"></script>
<script src="{{ 'assets/vendor/isotope-layout/isotope.pkgd.min.js '}}"></script>
<script src="{{ 'assets/vendor/swiper/swiper-bundle.min.js '}}"></script>
<script src="{{ 'assets/vendor/php-email-form/validate.js '}}"></script>

<!-- Template Main JS File -->
<script src="{{ 'assets/js/main.js '}}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
{{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
<script>
    feather.replace();
</script>
{{-- togle --}}

{{-- Them Setting --}}
<script>
    (() => {
        'use strict';

        const getStoredTheme = () => localStorage.getItem('theme');
        const setStoredTheme = theme => localStorage.setItem('theme', theme);

        const getPreferredTheme = () => {
            const storedTheme = getStoredTheme();
            if (storedTheme && (storedTheme === 'light' || storedTheme === 'dark')) {
                return storedTheme;
            }

            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }

        const setTheme = theme => {
            const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

            document.documentElement.setAttribute('data-bs-theme', theme === 'auto' && isDarkMode ? 'dark' :
                theme);
        }


        const showActiveTheme = (theme, focus = false) => {
            const activeThemeIcon = document.querySelector('.theme-icon-active');
            const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);

            if (btnToActive) {
                const iconOfActiveBtn = btnToActive.querySelector('i').dataset.themeIcon;

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active');
                    element.setAttribute('aria-pressed', 'false');
                });

                btnToActive.classList.add('active');
                btnToActive.setAttribute('aria-pressed', 'true');

                const themeSwitcherLabel = `${btnToActive.textContent} (${btnToActive.dataset.bsThemeValue})`;
                document.querySelector('.dropdown-toggle').setAttribute('aria-label', themeSwitcherLabel);

                // Perbarui ikon aktif
                activeThemeIcon.classList.remove(activeThemeIcon.dataset.themeIconActive);
                activeThemeIcon.classList.add(iconOfActiveBtn);
                activeThemeIcon.dataset.themeIconActive = iconOfActiveBtn;

                setStoredTheme(theme);
                setTheme(theme);

                if (focus) {
                    activeThemeIcon.focus();
                }
            }
        }

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            const storedTheme = getStoredTheme();
            if (storedTheme !== 'light' && storedTheme !== 'dark') {
                setTheme(getPreferredTheme());
            }
        });

        window.addEventListener('DOMContentLoaded', () => {
            const storedTheme = getStoredTheme();
            const initialTheme = storedTheme || getPreferredTheme();
            showActiveTheme(initialTheme);

            document.querySelectorAll('[data-bs-theme-value]').forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value');
                    showActiveTheme(theme, true);
                });
            });
        });
    })();
</script>
{{-- End Them Setting --}}



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    // ============================ JS Logo Terkait ============================ \\
    document.addEventListener('DOMContentLoaded', function() {
        $('.multiple-items1').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            infinite: true,
            autoplaySpeed: 1000,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 6,
                    }
                },
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 5,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });


    // ============================ JS Pengumuman ============================ \\
    $(document).ready(function() {
        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>