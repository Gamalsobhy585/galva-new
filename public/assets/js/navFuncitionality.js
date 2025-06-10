  function isArabic() {
            // Method 1: Check HTML lang attribute
            const htmlLang = document.documentElement.lang;
            if (htmlLang === 'ar') return true;
            
            // Method 2: Check URL parameter
            const urlParams = new URLSearchParams(window.location.search);
            const langParam = urlParams.get('lang');
            if (langParam === 'ar') return true;
            
            // Method 3: Check if RTL class exists on body or html
            if (document.body.classList.contains('rtl') || 
                document.documentElement.classList.contains('rtl')) {
                return true;
            }
            
            // Method 4: Check Laravel's current locale (if available)
            if (typeof window.currentLocale !== 'undefined' && window.currentLocale === 'ar') {
                return true;
            }
            
            return false;
        }

        // Function to apply RTL class based on language
        function applyRTL() {
            if (isArabic()) {
                document.body.classList.add('rtl');
            } else {
                document.body.classList.remove('rtl');
            }
        }

        // Navbar functionality script - Updated for RTL support
        function openNav() {
            const isRTL = isArabic();
            
            // Hide the navbar with opacity and transform
            if (typeof $ !== 'undefined') {
                $(".navbar-container").css("opacity", "0").css("transform", "translate(0px, 0px)");
            }
            
            // Open side menus with RTL consideration
            document.getElementById("my-side-menu").style.width = "405px";
            document.getElementById("my-right-side-menu").style.width = "180px";
            
            const mainElement = document.getElementById("main");
            if (isRTL) {
                // For Arabic (RTL), push content to the left
                mainElement.style.marginRight = "405px";
                mainElement.style.marginLeft = "180px";
            } else {
                // For English (LTR), push content to the right
                mainElement.style.marginLeft = "405px";
                mainElement.style.marginRight = "180px";
            }
        }

        function closeNav() {
            // Show the navbar back with transition
            if (typeof $ !== 'undefined') {
                $(".navbar-container").css("opacity", "1").css("transition", "opacity 1s linear");
            }
            
            // Close side menus
            document.getElementById("my-side-menu").style.width = "0";
            document.getElementById("my-right-side-menu").style.width = "0";
            
            const mainElement = document.getElementById("main");
            mainElement.style.marginLeft = "0";
            mainElement.style.marginRight = "0";
        }

        // Handle navbar opacity based on scroll position
        function handleNavbarOpacity() {
            const navbar = document.getElementById('navbar');
            if (!navbar) return;
            
            const scrollY = window.scrollY;
            const viewportHeight = window.innerHeight;
            
            if (scrollY > viewportHeight) {
                navbar.classList.remove('opacity-10');
                navbar.classList.add('opacity-50');
            } else {
                navbar.classList.remove('opacity-50');
                navbar.classList.add('opacity-10');
            }
        }

        // Event listeners
        window.addEventListener('scroll', handleNavbarOpacity);

        // Language dropdown hover and click functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Apply RTL on page load
            applyRTL();
            
            // Dropdown hover functionality
            const dropdowns = document.querySelectorAll('.dropdown');
            
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('mouseenter', function() {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    if (dropdownMenu) dropdownMenu.classList.add('show');
                });
                
                dropdown.addEventListener('mouseleave', function() {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    if (dropdownMenu) dropdownMenu.classList.remove('show');
                });
            });

            // Language switching functionality
            const langLinks = document.querySelectorAll('.dropdown-menu .dropdown-item');
            
            langLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const selectedLocale = this.textContent.trim() === 'عربي' ? 'ar' : 'en';
                    
                    const currentUrl = new URL(window.location.href);
                    currentUrl.searchParams.set('lang', selectedLocale);
                    window.location.href = currentUrl.toString();
                });
            });
        });