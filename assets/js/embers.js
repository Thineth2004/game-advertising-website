document.addEventListener('DOMContentLoaded', () => {
    const embersContainer = document.getElementById('embers');
    
    if (!embersContainer) return; 

    function createEmber() {
        const ember = document.createElement('div');
        ember.classList.add('ember');
        
        
        ember.style.left = Math.random() * 100 + 'vw';
        ember.style.animationDuration = (Math.random() * 5 + 5) + 's'; 
        ember.style.opacity = Math.random();
        ember.style.width = (Math.random() * 5 + 2) + 'px';
        ember.style.height = ember.style.width;
        
        embersContainer.appendChild(ember);

        
        setTimeout(() => {
            ember.remove();
        }, 10000);
    }

    
    setInterval(createEmber, 100);
});