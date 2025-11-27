// ==========================================================================
//   INFORMATION PAGE JS - Future Work
// ==========================================================================

class InformationPage {
    constructor() {
        this.init();
    }

    init() {
        this.initializeAccordion();
        this.initializeSearch();
        this.initializeAnimations();
    }

    initializeAccordion() {
        const accordionHeaders = document.querySelectorAll('.accordion-header');
        
        accordionHeaders.forEach(header => {
            header.addEventListener('click', (e) => {
                this.toggleAccordion(e.target.closest('.accordion-header'));
            });
        });
    }

    toggleAccordion(header) {
        const content = header.nextElementSibling;
        const icon = header.querySelector('i');
        const isOpen = content.style.display === 'block';
        
        // Close all other accordions
        document.querySelectorAll('.accordion-content').forEach(item => {
            if (item !== content) {
                item.style.display = 'none';
                const otherIcon = item.previousElementSibling.querySelector('i');
                if (otherIcon) {
                    otherIcon.classList.remove('fa-chevron-up');
                    otherIcon.classList.add('fa-chevron-down');
                }
            }
        });
        
        // Toggle current accordion
        if (isOpen) {
            content.style.display = 'none';
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        } else {
            content.style.display = 'block';
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        }
    }

    initializeSearch() {
        const searchInput = document.getElementById('infoSearch');
        if (!searchInput) return;
        
        searchInput.addEventListener('input', (e) => {
            this.filterContent(e.target.value);
        });
    }

    filterContent(searchTerm) {
        const sections = document.querySelectorAll('.info-section');
        const term = searchTerm.toLowerCase();
        
        sections.forEach(section => {
            const text = section.textContent.toLowerCase();
            const shouldShow = !term || text.includes(term);
            
            section.style.display = shouldShow ? 'block' : 'none';
            
            if (shouldShow && term) {
                this.highlightText(section, term);
            } else {
                this.removeHighlight(section);
            }
        });
        
        // Show "no results" message if needed
        this.toggleNoResults(term);
    }

    highlightText(element, term) {
        this.removeHighlight(element);
        
        const walker = document.createTreeWalker(
            element,
            NodeFilter.SHOW_TEXT,
            null,
            false
        );
        
        const textNodes = [];
        let node;
        
        while (node = walker.nextNode()) {
            textNodes.push(node);
        }
        
        textNodes.forEach(textNode => {
            const text = textNode.textContent;
            const regex = new RegExp(`(${term})`, 'gi');
            
            if (regex.test(text)) {
                const highlightedText = text.replace(regex, '<mark>$1</mark>');
                const wrapper = document.createElement('span');
                wrapper.innerHTML = highlightedText;
                textNode.parentNode.replaceChild(wrapper, textNode);
            }
        });
    }

    removeHighlight(element) {
        const marks = element.querySelectorAll('mark');
        marks.forEach(mark => {
            mark.outerHTML = mark.innerHTML;
        });
        
        const spans = element.querySelectorAll('span');
        spans.forEach(span => {
            if (span.innerHTML.includes('<mark>')) {
                span.outerHTML = span.innerHTML;
            }
        });
    }

    toggleNoResults(term) {
        const visibleSections = document.querySelectorAll('.info-section[style*="block"], .info-section:not([style])');
        const noResultsEl = document.getElementById('noResults');
        
        if (term && visibleSections.length === 0) {
            if (!noResultsEl) {
                const noResults = document.createElement('div');
                noResults.id = 'noResults';
                noResults.className = 'text-center py-5';
                noResults.innerHTML = `
                    <i class="fas fa-search fa-3x text-muted mb-3"></i>
                    <h4 class="text-muted">No se encontraron resultados</h4>
                    <p class="text-muted">Intenta con otros términos de búsqueda</p>
                `;
                
                const container = document.querySelector('.info-content');
                container.appendChild(noResults);
            } else {
                noResultsEl.style.display = 'block';
            }
        } else if (noResultsEl) {
            noResultsEl.style.display = 'none';
        }
    }

    initializeAnimations() {
        const cards = document.querySelectorAll('.info-card');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -20px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 150);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(card);
        });
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new InformationPage();
});