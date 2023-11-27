<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script> --}}
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
{{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}
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
        if (storedTheme) {
            return storedTheme;
        }

        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    const setTheme = theme => {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme);
        }
    }

    const showActiveTheme = (theme, focus = false) => {
        const activeThemeIcon = document.querySelector('.theme-icon-active');
        const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`);
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

<script src="https://cdn.userway.org/widget.js" data-account="wAv6JLf3pD"></script>