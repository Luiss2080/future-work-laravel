/* JavaScript para página Ubicación */

class UbicacionManager {
    constructor() {
        this.initEventListeners();
        this.initMapInteractions();
        this.initAnimations();
    }

    initEventListeners() {
        // Clicks en mapas para abrir en nueva ventana
        const mapas = document.querySelectorAll('.oficina-mapa iframe');
        mapas.forEach(mapa => {
            mapa.addEventListener('click', this.handleMapClick.bind(this));
        });

        // Clicks en información de contacto
        const telefonos = document.querySelectorAll('.info-item i.fa-phone, .contacto-item i.fa-phone-alt');
        telefonos.forEach(tel => {
            tel.closest('.info-item, .contacto-item').addEventListener('click', this.handlePhoneClick.bind(this));
        });

        // Click en WhatsApp
        const whatsapp = document.querySelector('.contacto-item i.fa-whatsapp');
        if (whatsapp) {
            whatsapp.closest('.contacto-item').addEventListener('click', this.handleWhatsAppClick.bind(this));
        }

        // Click en emails
        const emails = document.querySelectorAll('.info-item i.fa-envelope, .contacto-item i.fa-envelope');
        emails.forEach(email => {
            email.closest('.info-item, .contacto-item').addEventListener('click', this.handleEmailClick.bind(this));
        });

        // Botón agendar cita
        const agendarBtn = document.querySelector('.cta-content .btn');
        if (agendarBtn) {
            agendarBtn.addEventListener('click', this.handleAgendarCita.bind(this));
        }
    }

    initMapInteractions() {
        const oficinaCards = document.querySelectorAll('.oficina-card');
        oficinaCards.forEach(card => {
            card.addEventListener('mouseenter', this.handleCardHover.bind(this));
            card.addEventListener('mouseleave', this.handleCardLeave.bind(this));
        });
    }

    handleMapClick(e) {
        e.preventDefault();
        const oficinaCard = e.target.closest('.oficina-card');
        const oficinaNombre = oficinaCard.querySelector('h3').textContent;
        
        let mapsUrl = '';
        switch(oficinaNombre.toLowerCase()) {
            case 'oficina principal':
            case 'madrid':
                mapsUrl = 'https://www.google.com/maps/search/?api=1&query=Madrid,España';
                break;
            case 'barcelona':
                mapsUrl = 'https://www.google.com/maps/search/?api=1&query=Barcelona,España';
                break;
            case 'valencia':
                mapsUrl = 'https://www.google.com/maps/search/?api=1&query=Valencia,España';
                break;
        }
        
        if (mapsUrl) {
            window.open(mapsUrl, '_blank');
            this.trackEvent('ubicacion', 'map_click', oficinaNombre);
        }
    }

    handlePhoneClick(e) {
        const phoneElement = e.currentTarget.querySelector('p');
        const phoneNumber = phoneElement.textContent.trim();
        
        // Limpiar el número de teléfono
        const cleanPhone = phoneNumber.replace(/\s+/g, '').replace(/[^\d+]/g, '');
        
        if (cleanPhone) {
            window.location.href = `tel:${cleanPhone}`;
            this.trackEvent('ubicacion', 'phone_click', cleanPhone);
        }
    }

    handleWhatsAppClick(e) {
        const phoneElement = e.currentTarget.querySelector('p');
        const phoneNumber = phoneElement.textContent.trim();
        const cleanPhone = phoneNumber.replace(/\s+/g, '').replace(/[^\d+]/g, '');
        
        const message = encodeURIComponent('Hola, me gustaría obtener más información sobre Future Work.');
        const whatsappUrl = `https://wa.me/${cleanPhone}?text=${message}`;
        
        window.open(whatsappUrl, '_blank');
        this.trackEvent('ubicacion', 'whatsapp_click');
    }

    handleEmailClick(e) {
        const emailElement = e.currentTarget.querySelector('p');
        const email = emailElement.textContent.trim();
        
        const subject = encodeURIComponent('Consulta desde la página de ubicación');
        const body = encodeURIComponent('Hola, me gustaría obtener más información sobre sus servicios.');
        
        window.location.href = `mailto:${email}?subject=${subject}&body=${body}`;
        this.trackEvent('ubicacion', 'email_click', email);
    }

    handleAgendarCita(e) {
        this.trackEvent('ubicacion', 'agendar_cita_click');
        // El enlace ya redirige a contacto, solo trackear el evento
    }

    handleCardHover(e) {
        const card = e.currentTarget;
        card.style.transform = 'translateY(-5px)';
        card.style.boxShadow = '0 15px 30px rgba(0,0,0,0.15)';
    }

    handleCardLeave(e) {
        const card = e.currentTarget;
        card.style.transform = '';
        card.style.boxShadow = '';
    }

    initAnimations() {
        // Animaciones al scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 150);
                }
            });
        }, observerOptions);

        // Observar tarjetas de oficina
        const oficinaCards = document.querySelectorAll('.oficina-card');
        oficinaCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });

        // Observar items de contacto
        const contactoItems = document.querySelectorAll('.contacto-item');
        contactoItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'all 0.6s ease';
            observer.observe(item);
        });
    }

    trackEvent(category, action, label = '') {
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                event_category: category,
                event_label: label
            });
        }
        console.log(`Event: ${category} - ${action} - ${label}`);
    }
}

// Utilidades de ubicación
const UbicacionUtils = {
    // Obtener coordenadas de las oficinas
    getOficinaCoordinates(oficina) {
        const coordinates = {
            'madrid': { lat: 40.4168, lng: -3.7038 },
            'barcelona': { lat: 41.3851, lng: 2.1734 },
            'valencia': { lat: 39.4699, lng: -0.3763 }
        };
        
        return coordinates[oficina.toLowerCase()] || null;
    },

    // Calcular distancia entre dos puntos (aproximada)
    calculateDistance(lat1, lon1, lat2, lon2) {
        const R = 6371; // Radio de la Tierra en km
        const dLat = (lat2 - lat1) * Math.PI / 180;
        const dLon = (lon2 - lon1) * Math.PI / 180;
        
        const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                  Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
                  Math.sin(dLon/2) * Math.sin(dLon/2);
        
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
        return R * c;
    },

    // Formatear dirección para URL de Google Maps
    formatAddressForMaps(address) {
        return encodeURIComponent(address.replace(/\n/g, ', '));
    }
};

// Geolocalización (opcional)
const GeolocationManager = {
    init() {
        if ("geolocation" in navigator) {
            this.addLocationButton();
        }
    },

    addLocationButton() {
        const cta = document.querySelector('.cta-content');
        if (cta) {
            const locationBtn = document.createElement('button');
            locationBtn.className = 'btn btn-outline location-btn';
            locationBtn.innerHTML = '<i class="fas fa-location-arrow"></i> Oficina más cercana';
            locationBtn.addEventListener('click', this.findNearestOffice.bind(this));
            cta.appendChild(locationBtn);
        }
    },

    findNearestOffice() {
        navigator.geolocation.getCurrentPosition(
            this.onLocationSuccess.bind(this),
            this.onLocationError.bind(this),
            { enableHighAccuracy: true, timeout: 10000 }
        );
    },

    onLocationSuccess(position) {
        const userLat = position.coords.latitude;
        const userLng = position.coords.longitude;
        
        const offices = [
            { name: 'Madrid', ...UbicacionUtils.getOficinaCoordinates('madrid') },
            { name: 'Barcelona', ...UbicacionUtils.getOficinaCoordinates('barcelona') },
            { name: 'Valencia', ...UbicacionUtils.getOficinaCoordinates('valencia') }
        ];
        
        let nearest = null;
        let minDistance = Infinity;
        
        offices.forEach(office => {
            const distance = UbicacionUtils.calculateDistance(
                userLat, userLng, office.lat, office.lng
            );
            
            if (distance < minDistance) {
                minDistance = distance;
                nearest = office;
            }
        });
        
        if (nearest) {
            this.highlightNearestOffice(nearest.name, minDistance);
        }
    },

    onLocationError(error) {
        console.log('Error obteniendo ubicación:', error);
        // Mostrar mensaje discreto al usuario
        this.showLocationMessage('No se pudo obtener tu ubicación. Por favor, permite el acceso a la ubicación.');
    },

    highlightNearestOffice(officeName, distance) {
        const oficinaCards = document.querySelectorAll('.oficina-card');
        
        oficinaCards.forEach(card => {
            const cardTitle = card.querySelector('h3').textContent.toLowerCase();
            if (cardTitle.includes(officeName.toLowerCase())) {
                card.classList.add('nearest-office');
                
                // Agregar badge de cercanía
                const badge = document.createElement('span');
                badge.className = 'badge-cercana';
                badge.innerHTML = `<i class="fas fa-location-arrow"></i> ${distance.toFixed(1)}km`;
                card.querySelector('.oficina-header').appendChild(badge);
                
                // Scroll hacia la oficina más cercana
                card.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
        
        this.showLocationMessage(`La oficina más cercana es ${officeName} (${distance.toFixed(1)}km)`);
    },

    showLocationMessage(message) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'location-message';
        messageDiv.textContent = message;
        
        document.body.appendChild(messageDiv);
        
        setTimeout(() => {
            messageDiv.classList.add('show');
        }, 100);
        
        setTimeout(() => {
            messageDiv.classList.remove('show');
            setTimeout(() => messageDiv.remove(), 300);
        }, 3000);
    }
};

// Inicialización
document.addEventListener('DOMContentLoaded', () => {
    new UbicacionManager();
    GeolocationManager.init();
});

// CSS dinámico adicional
const UbicacionStyles = {
    init() {
        if (!document.getElementById('ubicacion-dynamic-styles')) {
            const styles = document.createElement('style');
            styles.id = 'ubicacion-dynamic-styles';
            styles.textContent = `
                .nearest-office {
                    border: 2px solid var(--color-success) !important;
                    background: linear-gradient(145deg, #f0fdf4, #ffffff);
                }
                
                .badge-cercana {
                    background: var(--color-success);
                    color: white;
                    padding: 0.25rem 0.75rem;
                    border-radius: 20px;
                    font-size: 0.8rem;
                    font-weight: 600;
                    margin-left: auto;
                }
                
                .location-message {
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background: var(--color-primary);
                    color: white;
                    padding: 1rem 1.5rem;
                    border-radius: 8px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                    z-index: 1000;
                    transform: translateX(100%);
                    transition: transform 0.3s ease;
                }
                
                .location-message.show {
                    transform: translateX(0);
                }
                
                .location-btn {
                    margin-top: 1rem;
                }
                
                @media (max-width: 768px) {
                    .location-message {
                        right: 10px;
                        left: 10px;
                        transform: translateY(-100%);
                    }
                    
                    .location-message.show {
                        transform: translateY(0);
                    }
                }
            `;
            document.head.appendChild(styles);
        }
    }
};

// Inicializar estilos
document.addEventListener('DOMContentLoaded', () => {
    UbicacionStyles.init();
});