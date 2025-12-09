document.addEventListener("DOMContentLoaded", function () {
    // Reveal Animations on Scroll
    const revealElements = document.querySelectorAll(".animate-reveal");

    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    revealElements.forEach((el) => revealObserver.observe(el));

    // Interactive Algorithm Cards
    const featureCards = document.querySelectorAll(".feature-card");

    featureCards.forEach((card) => {
        card.addEventListener("mouseenter", () => {
            // Remove active class from others
            featureCards.forEach((c) => c.classList.remove("active"));
            // Add to current
            card.classList.add("active");
        });
    });

    // Add scroll animation for sections
    const sections = document.querySelectorAll("section");
    const sectionObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        },
        { threshold: 0.1 }
    );

    sections.forEach((section) => {
        section.style.transition = "opacity 0.8s ease, transform 0.8s ease";
        // Only hide if it's not the hero (hero has its own logic)
        if (!section.classList.contains("hero-section")) {
            // checking if already visible to avoid double animation on reload
            const rect = section.getBoundingClientRect();
            if (rect.top > window.innerHeight) {
                section.style.opacity = "0";
                section.style.transform = "translateY(20px)";
                sectionObserver.observe(section);
            }
        }
    });
});
