function animateProcent(element, target) {
    let current = 0;
    const duration = 1500;
    const steps = 50;
    const stepTime = duration / steps;
    const stepValue = target / steps;
    
    const timer = setInterval(() => {
        current += stepValue;
        if (current >= target) {
            current = target;
            clearInterval(timer);
            element.setAttribute('data-completed', 'true');
        }
        element.textContent = Math.floor(current) + "%";
    }, stepTime);
}

document.addEventListener('DOMContentLoaded', function() {
    const procentElements = document.querySelectorAll('.procent[data-target]');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const element = entry.target;
            const targetValue = parseInt(element.getAttribute('data-target'));
            
            if (entry.isIntersecting) {
                if (!element.hasAttribute('data-animated')) {
                    element.textContent = "0%";
                    animateProcent(element, targetValue);
                    element.setAttribute('data-animated', 'true');
                }
            } else {
                if (element.hasAttribute('data-completed')) {
                    element.textContent = "0%";
                    element.removeAttribute('data-animated');
                    element.removeAttribute('data-completed');
                }
            }
        });
    }, {
        threshold: 0.1
    });

    procentElements.forEach(element => {
        observer.observe(element);
    });

    const karusel = document.getElementById('karusel');
    if (karusel) {
        const scrollMultiplier = 4;
        
        karusel.addEventListener('wheel', function(e) {
            e.preventDefault();
            karusel.scrollLeft += scrollMultiplier * e.deltaY;
        });
    }

    const karusel2 = document.getElementById('karusel2');
    if (karusel2) {
        const scrollMultiplier = 8;
        
        karusel2.addEventListener('wheel', function(e) {
            e.preventDefault();
            karusel2.scrollLeft += scrollMultiplier * e.deltaY;
        });
    }

    const cases = document.querySelectorAll('.case');
    
    if (cases.length > 0) {
        cases.forEach(caseElement => {
            caseElement.addEventListener('click', function() {
                cases.forEach(c => c.classList.remove('active'));
                this.classList.add('active');
            });
        });
        
        cases[0].classList.add('active');
    }

    const images = document.querySelectorAll('.content-photo img');
    
    images.forEach(img => {
        const originalWidth = img.naturalWidth;

        img.style.width = (originalWidth * 0.9) + 'px';
    });
});