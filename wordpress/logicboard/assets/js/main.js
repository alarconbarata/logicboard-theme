/**
 * ==========================================
 * LogicBoard Theme
 * main.js
 * Version 1.1
 * ==========================================
 */

document.addEventListener("DOMContentLoaded", () => {

    initFAQ();
    initMobileMenu();
    initHeaderScroll();
    initSmoothScroll();
    initReveal();

});

/*==========================================
FAQ
==========================================*/

function initFAQ() {

    const buttons = document.querySelectorAll(".faq-question");

    if (!buttons.length) return;

    buttons.forEach(button => {

        button.addEventListener("click", () => {

            const item = button.parentElement;

            document.querySelectorAll(".faq-item").forEach(faq => {

                if (faq !== item) {
                    faq.classList.remove("active");
                }

            });

            item.classList.toggle("active");

        });

    });

}

/*==========================================
MENU MOBILE
==========================================*/

function initMobileMenu() {

    const toggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".lb-menu");

    if (!toggle || !menu) return;

    toggle.addEventListener("click", () => {

        menu.classList.toggle("active");
        toggle.classList.toggle("active");

        const expanded = toggle.getAttribute("aria-expanded") === "true";
        toggle.setAttribute("aria-expanded", !expanded);

    });

}

/*==========================================
HEADER AO ROLAR
==========================================*/

function initHeaderScroll() {

    const header = document.querySelector(".lb-header");

    if (!header) return;

    window.addEventListener("scroll", () => {

        if (window.scrollY > 40) {

            header.classList.add("scrolled");

        } else {

            header.classList.remove("scrolled");

        }

    });

}

/*==========================================
SCROLL SUAVE
==========================================*/

function initSmoothScroll() {

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {

        anchor.addEventListener("click", function (e) {

            const target = document.querySelector(this.getAttribute("href"));

            if (!target) return;

            e.preventDefault();

            target.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

        });

    });

}

/*==========================================
ANIMAÇÃO DAS SEÇÕES
==========================================*/

function initReveal() {

    const sections = document.querySelectorAll("section");

    if (!sections.length) return;

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add("show");

            }

        });

    }, {
        threshold: 0.15
    });

    sections.forEach(section => {

        section.classList.add("hidden");
        observer.observe(section);

    });

}
/* ==========================
MENU MOBILE
========================== */

const menuToggle = document.querySelector(".menu-toggle");
const menu = document.querySelector(".lb-menu");

if(menuToggle && menu){

    menuToggle.addEventListener("click",function(){

        menu.classList.toggle("active");

    });

    document.querySelectorAll(".lb-menu a").forEach(function(link){

        link.addEventListener("click",function(){

            menu.classList.remove("active");

        });

    });

}
/* ==========================
HEADER SCROLL
========================== */

const header = document.querySelector(".lb-header");

if (header) {

    window.addEventListener("scroll", function () {

        if (window.scrollY > 60) {

            header.classList.add("scrolled");

        } else {

            header.classList.remove("scrolled");

        }

    });

}