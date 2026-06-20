document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section');

    if (!('IntersectionObserver' in window)) {
        sections.forEach((el) => el.classList.add('in-view'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
    );

    sections.forEach((el) => observer.observe(el));
});