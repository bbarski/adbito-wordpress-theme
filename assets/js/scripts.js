document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section");

    sections.forEach(section => {
        // Dodaj trigger na górze sekcji
        const trigger = document.createElement("div");
        trigger.className = "section-trigger";
        trigger.style.position = "absolute";
        trigger.style.top = "20%";
        trigger.style.width = "100%";
        trigger.style.height = "1px";
        section.appendChild(trigger);
    });

    const triggers = document.querySelectorAll(".section-trigger");

    const options = {
        root: null,
        rootMargin: "-100px 0px -100px 0px",
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const section = entry.target.closest("section");
                section.classList.add("in-view");
                console.log("Sekcja widoczna:", section);
            }
        });
    }, options);

    triggers.forEach(trigger => {
        observer.observe(trigger);
    });
});