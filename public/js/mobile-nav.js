/**
 * Modern Mobile Navigation JavaScript
 * Handles mobile navigation functionality with smooth animations and interactions
 */

// Prevent duplicate class declaration and ensure global availability
if (typeof window.MobileNavigation !== 'undefined') {
  console.log('MobileNavigation class already exists, skipping...');
} else {
  window.MobileNavigation = class MobileNavigation {
  constructor() {
    this.isActive = false;
    this.container = null;
    this.toggleBtn = null;
    this.closeBtn = null;
    this.links = [];
    this.currentPage = this.getCurrentPage();
    
    this.init();
  }

  /**
   * Initialize mobile navigation
   */
  init() {
    this.createMobileNavHTML();
    this.bindEvents();
    this.setActivePage();
    this.addKeyboardSupport();
  }

  /**
   * Create mobile navigation HTML structure
   */
  createMobileNavHTML() {
    // Create mobile navigation container
    this.container = document.createElement('div');
    this.container.className = 'mobile-nav-container';
    this.container.innerHTML = `
      <div class="mobile-nav-menu">
        <div class="mobile-nav-header">
          <div class="mobile-nav-logo">
            <img src="/images/DimensionsLogo.png" alt="Dimensions Logo">
          </div>
          <button class="mobile-nav-close" aria-label="Close mobile navigation">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>
        
        <ul class="mobile-nav-list">
          <li class="mobile-nav-item">
            <a href="/" class="mobile-nav-link" data-page="home">
              <div class="mobile-nav-icon">
                <i class="bi bi-house-door"></i>
              </div>
              <span>Home</span>
              <i class="bi bi-chevron-right mobile-nav-arrow"></i>
            </a>
          </li>
          <li class="mobile-nav-item">
            <a href="/about" class="mobile-nav-link" data-page="about">
              <div class="mobile-nav-icon">
                <i class="bi bi-info-circle"></i>
              </div>
              <span>About Us</span>
              <i class="bi bi-chevron-right mobile-nav-arrow"></i>
            </a>
          </li>
          <li class="mobile-nav-item">
            <a href="/services" class="mobile-nav-link" data-page="services">
              <div class="mobile-nav-icon">
                <i class="bi bi-gear"></i>
              </div>
              <span>Our Services</span>
              <i class="bi bi-chevron-right mobile-nav-arrow"></i>
            </a>
          </li>
          <li class="mobile-nav-item">
            <a href="/projects" class="mobile-nav-link" data-page="projects">
              <div class="mobile-nav-icon">
                <i class="bi bi-briefcase"></i>
              </div>
              <span>Our Projects</span>
              <i class="bi bi-chevron-right mobile-nav-arrow"></i>
            </a>
          </li>
          <li class="mobile-nav-item">
            <a href="/contact" class="mobile-nav-link" data-page="contact">
              <div class="mobile-nav-icon">
                <i class="bi bi-envelope"></i>
              </div>
              <span>Contact Us</span>
              <i class="bi bi-chevron-right mobile-nav-arrow"></i>
            </a>
          </li>
        </ul>
        
        <div class="mobile-nav-footer">
          <div class="mobile-nav-contact">
            <div class="mobile-nav-contact-item">
              <i class="bi bi-telephone"></i>
              <span>+966 53 033 0398</span>
            </div>
            <div class="mobile-nav-contact-item">
              <i class="bi bi-envelope"></i>
              <a href="mailto:info@dimen.jobs" class="mobile-nav-contact-link" tabindex="0">info@dimen.jobs</a>
            </div>
          </div>
          
          <div class="mobile-nav-social">
            <a href="https://maps.app.goo.gl/LK2V14DhNsyyuKD77" target="_blank" class="mobile-nav-social-link" aria-label="Location">
              <i class="bi bi-geo-alt"></i>
            </a>
            <a href="https://www.instagram.com/dimen.hospitality?igsh=MXFycGY5bGEycndoaQ==" target="_blank" class="mobile-nav-social-link" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/dimensions_2/" target="_blank" class="mobile-nav-social-link" aria-label="LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
          </div>
        </div>
      </div>
    `;

    // Append to body
    document.body.appendChild(this.container);

    // Get references to elements
    this.closeBtn = this.container.querySelector('.mobile-nav-close');
    this.links = this.container.querySelectorAll('.mobile-nav-link');
  }

  /**
   * Bind event listeners
   */
  bindEvents() {
    // Find existing mobile nav toggle button
    this.toggleBtn = document.querySelector('.mobile-nav-toggle');
    
    if (this.toggleBtn) {
      // Replace existing toggle button with new one
      this.createNewToggleButton();
    } else {
      // Create new toggle button if none exists
      this.createNewToggleButton();
    }

    // Close button event
    if (this.closeBtn) {
      this.closeBtn.addEventListener('click', () => this.close());
    }

    // Navigation links events
    this.links.forEach(link => {
      link.addEventListener('click', (e) => {
        this.handleLinkClick(e);
      });
    });

    // Close on overlay click
    this.container.addEventListener('click', (e) => {
      if (e.target === this.container) {
        this.close();
      }
    });

    // Close on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.isActive) {
        this.close();
      }
    });

    // Handle window resize
    window.addEventListener('resize', () => {
      if (window.innerWidth > 1199 && this.isActive) {
        this.close();
      }
    });
  }

  /**
   * Create new mobile navigation toggle button
   */
  createNewToggleButton() {
    // Remove existing toggle button if it exists
    const existingToggle = document.querySelector('.mobile-nav-toggle');
    if (existingToggle) {
      existingToggle.remove();
    }

    // Create new toggle button
    this.toggleBtn = document.createElement('button');
    this.toggleBtn.className = 'mobile-nav-toggle d-xl-none';
    this.toggleBtn.setAttribute('aria-label', 'Toggle mobile navigation');
    this.toggleBtn.innerHTML = `
      <div class="hamburger-line"></div>
      <div class="hamburger-line"></div>
      <div class="hamburger-line"></div>
    `;

    // Insert toggle button into header
    const header = document.querySelector('#header .container-fluid');
    if (header) {
      header.appendChild(this.toggleBtn);
    }

    // Add click event
    this.toggleBtn.addEventListener('click', () => this.toggle());
  }

  /**
   * Toggle mobile navigation
   */
  toggle() {
    if (this.isActive) {
      this.close();
    } else {
      this.open();
    }
  }

  /**
   * Open mobile navigation
   */
  open() {
    if (this.isActive) return;

    this.isActive = true;
    this.container.classList.add('active');
    this.toggleBtn.classList.add('active');
    document.body.classList.add('mobile-nav-active');

    // Focus management
    setTimeout(() => {
      this.closeBtn.focus();
    }, 300);

    // Trigger custom event
    this.triggerEvent('mobileNavOpen');
  }

  /**
   * Close mobile navigation
   */
  close() {
    if (!this.isActive) return;

    this.isActive = false;
    this.container.classList.remove('active');
    this.toggleBtn.classList.remove('active');
    document.body.classList.remove('mobile-nav-active');

    // Focus management
    this.toggleBtn.focus();

    // Trigger custom event
    this.triggerEvent('mobileNavClose');
  }

  /**
   * Handle navigation link clicks
   */
  handleLinkClick(e) {
    const link = e.currentTarget;
    const href = link.getAttribute('href');
    
    // Mark as internal navigation for splash screen logic
    if (href && (href.startsWith('#') || 
                 href.startsWith('./') || 
                 href.startsWith('/') || 
                 href.includes(window.location.hostname) ||
                 href.endsWith('.html'))) {
      console.log('Mobile internal navigation detected:', href);
      sessionStorage.setItem('internal-navigation', 'true');
    }
    
    // Close mobile navigation
    this.close();

    // Handle anchor links on same page
    if (href.includes('#')) {
      e.preventDefault();
      const targetId = href.split('#')[1];
      const targetElement = document.getElementById(targetId);
      
      if (targetElement) {
        setTimeout(() => {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }, 300);
      }
    }
  }

  /**
   * Set active page in navigation
   */
  setActivePage() {
    this.links.forEach(link => {
      const page = link.getAttribute('data-page');
      if (page === this.currentPage) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  /**
   * Get current page identifier
   */
  getCurrentPage() {
    const path = window.location.pathname;
    // Normalize trailing slashes
    const cleanPath = path.replace(/\/$/, '');

    if (cleanPath === '' || cleanPath === '/') return 'home';
    if (cleanPath === '/about') return 'about';
    if (cleanPath === '/services') return 'services';
    if (cleanPath === '/projects') return 'projects';
    if (cleanPath === '/contact') return 'contact';

    // fallback: try to match partials
    if (cleanPath.includes('about')) return 'about';
    if (cleanPath.includes('service')) return 'services';
    if (cleanPath.includes('project')) return 'projects';
    if (cleanPath.includes('contact')) return 'contact';

    return 'home';
  }

  /**
   * Add keyboard navigation support
   */
  addKeyboardSupport() {
    this.container.addEventListener('keydown', (e) => {
      const focusableElements = this.container.querySelectorAll(
        'a[href], button, input, textarea, select, [tabindex]:not([tabindex="-1"])'
      );
      const firstElement = focusableElements[0];
      const lastElement = focusableElements[focusableElements.length - 1];

      // Trap focus within mobile navigation
      if (e.key === 'Tab') {
        if (e.shiftKey) {
          if (document.activeElement === firstElement) {
            e.preventDefault();
            lastElement.focus();
          }
        } else {
          if (document.activeElement === lastElement) {
            e.preventDefault();
            firstElement.focus();
          }
        }
      }
    });
  }

  /**
   * Trigger custom events
   */
  triggerEvent(eventName) {
    const event = new CustomEvent(eventName, {
      detail: { isActive: this.isActive }
    });
    document.dispatchEvent(event);
  }

  /**
   * Update navigation state (for dynamic content)
   */
  updateState() {
    this.currentPage = this.getCurrentPage();
    this.setActivePage();
  }

  /**
   * Destroy mobile navigation
   */
  destroy() {
    if (this.toggleBtn) {
      this.toggleBtn.remove();
    }
    if (this.container) {
      this.container.remove();
    }
    document.body.classList.remove('mobile-nav-active');
  }
} // End of MobileNavigation class

} // End of if (typeof MobileNavigation !== 'undefined') else block

// Prevent duplicate execution and initialize mobile navigation
if (!window.mobileNavLoaded) {
  window.mobileNavLoaded = true;
  
  // Initialize mobile navigation when DOM is loaded - only if not already initialized
  if (!window.mobileNav) {
    document.addEventListener('DOMContentLoaded', () => {
      // Create global instance using the global class
      window.mobileNav = new window.MobileNavigation();
      
      // Listen for page changes (for SPA-like behavior)
      window.addEventListener('popstate', () => {
        if (window.mobileNav) {
          window.mobileNav.updateState();
        }
      });
    });
  }
} else {
  console.log('mobile-nav.js already loaded, skipping...');
} 