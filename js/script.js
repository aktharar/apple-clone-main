
document.addEventListener("DOMContentLoaded", function () {
    const searchToggle = document.getElementById("search-toggle");
    const searchPanel = document.getElementById("search-panel");
    const searchInput = document.getElementById("product-search");
    const searchClose = document.getElementById("search-close");
    const navMenus = document.querySelectorAll(".nav-store-menu, .nav-mega-item");
    function closeNavMenus(exceptMenu) {
        navMenus.forEach(function (menu) {
            if (menu === exceptMenu) {
                return;
            }

            menu.classList.remove("is-open");
            const toggle = menu.querySelector(".nav-menu-toggle");
            if (toggle) {
                toggle.setAttribute("aria-expanded", "false");
            }
        });
    }

    navMenus.forEach(function (menu) {
        const toggle = menu.querySelector(".nav-menu-toggle");
        if (!toggle) {
            return;
        }

        toggle.addEventListener("click", function () {
            const isOpen = menu.classList.toggle("is-open");
            toggle.setAttribute("aria-expanded", String(isOpen));
            if (isOpen) {
                closeNavMenus(menu);
            }
        });

        menu.querySelectorAll(".store-dropdown a, .mega-dropdown a").forEach(function (link) {
            link.addEventListener("click", function () {
                menu.classList.remove("is-open");
                toggle.setAttribute("aria-expanded", "false");
            });
        });
    });

    const macFilters = document.querySelectorAll("[data-mac-filter]");
    const macProducts = document.querySelectorAll("[data-mac-type]");

    macFilters.forEach(function (filterButton) {
        filterButton.addEventListener("click", function () {
            const selectedType = filterButton.dataset.macFilter;

            macFilters.forEach(function (button) {
                const isSelected = button === filterButton;
                button.classList.toggle("is-active", isSelected);
                button.setAttribute("aria-pressed", String(isSelected));
            });

            macProducts.forEach(function (product) {
                product.hidden = selectedType !== "all" && product.dataset.macType !== selectedType;
            });
        });
    });

    document.addEventListener("click", function (event) {
        if (!event.target.closest(".nav-store-menu, .nav-mega-item")) {
            closeNavMenus();
        }
    });

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
            const openMenu = document.querySelector(".nav-store-menu.is-open, .nav-mega-item.is-open");
            closeNavMenus();
            if (openMenu) {
                openMenu.querySelector(".nav-menu-toggle").focus();
            }
        }
    });

    if (searchToggle && searchPanel && searchInput && searchClose) {
        searchToggle.addEventListener("click", function () {
            searchPanel.hidden = !searchPanel.hidden;
            searchToggle.setAttribute("aria-expanded", String(!searchPanel.hidden));

            if (!searchPanel.hidden) {
                searchInput.focus();
            } else {
                searchInput.value = "";
                filterProducts("");
            }
        });

        searchClose.addEventListener("click", function () {
            searchPanel.hidden = true;
            searchToggle.setAttribute("aria-expanded", "false");
            searchInput.value = "";
            filterProducts("");
            searchToggle.focus();
        });

        searchInput.addEventListener("input", function () {
            filterProducts(searchInput.value);
        });
    }

    document.querySelectorAll(".latest-carousel, .story-carousel").forEach(function (carousel) {
        const track = carousel.querySelector("#latest-products, [data-story-carousel-track]");
        const buttons = carousel.querySelectorAll("[data-carousel-direction]");

        if (!track || !buttons.length) {
            return;
        }

        function updateCarouselArrows() {
            const atStart = track.scrollLeft <= 4;
            const atEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 1;

            buttons.forEach(function (button) {
                const direction = Number(button.dataset.carouselDirection);
                button.disabled = direction < 0 ? atStart : atEnd;
            });
        }

        function resetCarousel() {
            track.scrollLeft = 0;
            updateCarouselArrows();
        }

        buttons.forEach(function (button) {
            button.addEventListener("click", function () {
                const firstCard = track.firstElementChild;
                if (!firstCard) {
                    return;
                }

                const gap = parseFloat(window.getComputedStyle(track).columnGap) || 0;
                const direction = Number(button.dataset.carouselDirection);
                const scrollDistance = track.dataset.carouselStep === "page"
                    ? track.clientWidth
                    : firstCard.getBoundingClientRect().width + gap;
                track.scrollBy({
                    left: direction * scrollDistance,
                    behavior: "smooth"
                });
            });
        });

        track.addEventListener("scroll", updateCarouselArrows, { passive: true });
        window.addEventListener("resize", updateCarouselArrows);
        window.addEventListener("pageshow", resetCarousel);
        resetCarousel();
    });

});

function filterProducts(query) {
    const cards = document.querySelectorAll(".product-card, .category-product-card");
    const searchTerm = query.toLowerCase().trim();

    cards.forEach(function (card) {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(searchTerm) ? "" : "none";
    });
}
