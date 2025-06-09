// Navbar functionality script
function openNav() {
    // Hide the navbar with opacity and transform
    $(".navbar-container").css("opacity", "0").css("transform", "translate(0px, 0px)");
    
    // Open side menus
    document.getElementById("my-side-menu").style.width = "405px";
    document.getElementById("my-right-side-menu").style.width = "180px";
    document.getElementById("main").style.marginLeft = "405px";
}

function closeNav() {
    // Show the navbar back with transition
    $(".navbar-container").css("opacity", "1").css("transition", "opacity 1s linear");
    
    // Close side menus
    document.getElementById("my-side-menu").style.width = "0";
    document.getElementById("my-right-side-menu").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

// Handle navbar opacity based on scroll position
function handleNavbarOpacity() {
    const navbar = document.getElementById('navbar');
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
    // Dropdown hover functionality
    const dropdowns = document.querySelectorAll('.dropdown');
    
    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('mouseenter', function() {
            const dropdownMenu = this.querySelector('.dropdown-menu');
            dropdownMenu.classList.add('show');
        });
        
        dropdown.addEventListener('mouseleave', function() {
            const dropdownMenu = this.querySelector('.dropdown-menu');
            dropdownMenu.classList.remove('show');
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