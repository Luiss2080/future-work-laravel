// ==========================================================================
//   ABOUT/LOCATION PAGE JS - Future Work
// ==========================================================================

class AboutPage {
    constructor() {
        this.init();
    }

    init() {
        this.initializeCounters();
        this.initializeMap();
        this.initializeAnimations();
    }

    initializeCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            observer.observe(counter);
        });
    }

    animateCounter(element) {
        const target = parseInt(element.dataset.count || element.textContent.replace(/\D/g, ''));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            
            element.textContent = Math.floor(current).toLocaleString();
            
            // Add suffix if it exists in original text
            const originalText = element.dataset.original || '';
            if (originalText.includes('+')) {
                element.textContent += '+';
            } else if (originalText.includes('%')) {
                element.textContent += '%';
            }
        }, 16);
    }

    initializeMap() {
        const mapContainer = document.getElementById('map');
        if (!mapContainer) return;

        // Store original text for counters
        document.querySelectorAll('.stat-number').forEach(counter => {
            counter.dataset.original = counter.textContent;
        });

        // Initialize Google Maps or alternative
        if (typeof google !== 'undefined' && google.maps) {
            this.initGoogleMap(mapContainer);
        } else {
            this.initFallbackMap(mapContainer);
        }
    }

    initGoogleMap(container) {
        const location = { lat: -34.6037, lng: -58.3816 }; // Buenos Aires example
        
        const map = new google.maps.Map(container, {
            zoom: 15,
            center: location,
            styles: this.getMapStyles()
        });

        new google.maps.Marker({
            position: location,
            map: map,
            title: 'Future Work - Oficina Principal'
        });
    }

    initFallbackMap(container) {
        // Fallback to OpenStreetMap or static image
        container.innerHTML = `
            <iframe 
                src="https://www.openstreetmap.org/export/embed.html?bbox=-58.4016%2C-34.6237%2C-58.3616%2C-34.5837&layer=mapnik&marker=-34.6037%2C-58.3816"
                width="100%" 
                height="400" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0">
            </iframe>
        `;
    }

    getMapStyles() {
        return [
            {
                "featureType": "all",
                "elementType": "geometry.fill",
                "stylers": [{"weight": "2.00"}]
            },
            {
                "featureType": "all",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#9c9c9c"}]
            },
            {
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [{"visibility": "on"}]
            }
        ];
    }

    initializeAnimations() {
        const cards = document.querySelectorAll('.about-card');
        
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
                    }, index * 100);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new AboutPage();
});