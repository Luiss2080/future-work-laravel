<footer class="footer-web">
    <div class="footer-bg-pattern"></div>
    <div class="container">
        <div class="footer-content">
            <div class="footer-main">
                <div class="footer-section">
                    <h3>Future Work</h3>
                    <p>La plataforma líder para conectar talento con oportunidades en América Latina.</p>
                    <div class="footer-stats">
                        <div class="stat-item">
                            <span class="stat-value">15K+</span>
                            <span class="stat-label">Empleos</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">50K+</span>
                            <span class="stat-label">Usuarios</span>
                        </div>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Para Candidatos</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('jobs.index') }}">Buscar Empleos</a></li>
                        <li><a href="{{ route('register') }}">Crear CV</a></li>
                        <li><a href="#">Consejos de Carrera</a></li>
                        <li><a href="#">Guías de Entrevista</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Para Empresas</h3>
                    <ul class="footer-links">
                        <li><a href="#">Publicar Empleos</a></li>
                        <li><a href="#">Buscar Candidatos</a></li>
                        <li><a href="#">Planes Empresariales</a></li>
                        <li><a href="#">Herramientas de Reclutamiento</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <ul class="contact-info-list">
                        <li class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <strong>Email</strong>
                                <span>info@futurework.com</span>
                            </div>
                        </li>
                        <li class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <strong>Teléfono</strong>
                                <span>+52 55 1234 5678</span>
                            </div>
                        </li>
                    </ul>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    <p>&copy; {{ date('Y') }} Future Work. Todos los derechos reservados.</p>
                </div>
                <ul class="footer-bottom-links">
                    <li><a href="#">Términos de Uso</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>