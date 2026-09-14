"use strict";


/* =========================================================
   ELEMENTS
========================================================= */

const html =
    document.documentElement;

const layout =
    document.getElementById(
        "portfolioLayout"
    );

const desktopSidebarToggle =
    document.getElementById(
        "desktopSidebarToggle"
    );

const themeToggle =
    document.getElementById(
        "themeToggle"
    );

const mobileThemeToggle =
    document.getElementById(
        "mobileThemeToggle"
    );

const year =
    document.getElementById(
        "year"
    );


/* =========================================================
   CURRENT YEAR
========================================================= */

if (year) {

    year.textContent =
        new Date().getFullYear();

}


/* =========================================================
   DESKTOP SIDEBAR
========================================================= */

const SIDEBAR_KEY =
    "portfolio-sidebar-collapsed";


function updateSidebarIcon() {

    if (!desktopSidebarToggle) {
        return;
    }


    const collapsed =
        layout.classList.contains(
            "sidebar-collapsed"
        );


    desktopSidebarToggle.innerHTML =
        collapsed

            ? '<i class="bi bi-layout-sidebar-inset"></i>'

            : '<i class="bi bi-layout-sidebar"></i>';

}


function setSidebarState(
    collapsed
) {

    if (!layout) {
        return;
    }


    layout.classList.toggle(
        "sidebar-collapsed",
        collapsed
    );


    localStorage.setItem(
        SIDEBAR_KEY,
        collapsed
            ? "1"
            : "0"
    );


    updateSidebarIcon();

}


/*
 * Desktop sidebar is expanded by default.
 */

const savedSidebarState =
    localStorage.getItem(
        SIDEBAR_KEY
    );


setSidebarState(
    savedSidebarState === "1"
);


if (desktopSidebarToggle) {

    desktopSidebarToggle.addEventListener(
        "click",
        function () {

            const collapsed =
                layout.classList.contains(
                    "sidebar-collapsed"
                );


            setSidebarState(
                !collapsed
            );

        }
    );

}


/* =========================================================
   THEME
========================================================= */

const THEME_KEY =
    "portfolio-theme";


function getTheme() {

    return localStorage.getItem(
        THEME_KEY
    ) || "light";

}


function updateThemeIcon() {

    const theme =
        html.getAttribute(
            "data-bs-theme"
        );


    const icon =
        theme === "dark"

            ? "bi bi-sun"

            : "bi bi-moon-stars";


    if (themeToggle) {

        themeToggle.innerHTML =
            `<i class="${icon}"></i>`;

    }


    if (mobileThemeToggle) {

        mobileThemeToggle.innerHTML =
            `<i class="${icon}"></i>`;

    }

}


function setTheme(theme) {

    html.setAttribute(
        "data-bs-theme",
        theme
    );


    localStorage.setItem(
        THEME_KEY,
        theme
    );


    updateThemeIcon();

}


function toggleTheme() {

    const currentTheme =
        html.getAttribute(
            "data-bs-theme"
        );


    setTheme(

        currentTheme === "dark"

            ? "light"

            : "dark"

    );

}


setTheme(
    getTheme()
);


if (themeToggle) {

    themeToggle.addEventListener(
        "click",
        toggleTheme
    );

}


if (mobileThemeToggle) {

    mobileThemeToggle.addEventListener(
        "click",
        toggleTheme
    );

}

