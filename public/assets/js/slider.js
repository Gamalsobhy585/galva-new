        $(document).ready(function() {
            function initHeroSection() {
                $(window).on('load resize', function() {
                    var hero = $('#hero-section');
                    var heroContent = hero.find('.hero-content');
                    var windowHeight = $(window).height();
                    var headerHeight = $('#site-header-wrap').length ? $('#site-header-wrap').height() : 0;
                    
                    // Adjust for sticky header
                    if ($('body').hasClass('header-sticky')) {
                        headerHeight = headerHeight / 2;
                    }
                    
                    // Set hero section height
                    hero.css('min-height', windowHeight + 'px');
                    
                    // Center content with proper spacing
                    var contentHeight = heroContent.outerHeight();
                    var availableSpace = windowHeight - headerHeight;
                    var topPadding = Math.max((availableSpace - contentHeight) / 2, 20);
                    
                    heroContent.css({
                        'padding-top': (headerHeight + topPadding) + 'px',
                        'padding-bottom': topPadding + 'px'
                    });
                });
                
                // Vegas plugin integration (if available)
                if (typeof $.fn.vegas !== 'undefined') {
                    $("#hero-section").each(function() {
                        var $this = $(this);
                        var number = parseInt($this.data('number')) || 1;
                        var effect = $this.data('effect') || 'fade';
                        var slides = [];
                        
                        for (var i = 1; i <= number; i++) {
                            var imageSrc = $this.data('image-' + i);
                            if (imageSrc) {
                                slides.push({src: imageSrc});
                            }
                        }
                        
                        if (slides.length > 0) {
                            $this.vegas({
                                slides: slides,
                                overlay: true,
                                transition: effect
                            });
                        }
                    });
                }
                
                // FitText plugin integration (if available)
                if (typeof $.fn.fitText !== 'undefined') {
                    $('#hero-section .hero-title h1').fitText(1.2, {
                        minFontSize: '24px',
                        maxFontSize: '60px'
                    });
                }
                
                // Scrolling text animation
                if ($('.hero-title').hasClass('scroll')) {
                    var current = 1;
                    var titleElement = $('.hero-title');
                    var height = titleElement.height();
                    var numberDivs = titleElement.children().length;
                    var firstElement = titleElement.find('h1:first-child');
                    
                    setInterval(function() {
                        var offset = current * -height;
                        firstElement.css('margin-top', offset + 'px');
                        
                        if (current === numberDivs) {
                            firstElement.css('margin-top', '0px');
                            current = 1;
                        } else {
                            current++;
                        }
                    }, 2500);
                }
                
                // Typing animation (if Typed.js is available)
                if (typeof $.fn.typed !== 'undefined' && $('.hero-title').hasClass('typing')) {
                    $('.hero-title span').typed({
                        strings: ["INNOVATIVE SOLUTIONS", "DIGITAL TRANSFORMATION", "FUTURE TECHNOLOGY"],
                        typeSpeed: 60,
                        loop: true,
                        backDelay: 2000,
                        backSpeed: 30
                    });
                }
                
                // Smooth scroll for arrow
                $('.scroll-target').on('click', function(e) {
                    e.preventDefault();
                    var target = $(this.getAttribute('href'));
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - (headerHeight || 80)
                        }, 1000);
                    }
                });
            }
            
            // Initialize hero section
            initHeroSection();
            
            // Trigger resize event after DOM is fully loaded
            $(window).trigger('resize');
        });
