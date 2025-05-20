window.addEventListener('DOMContentLoaded', () => {
    const flotantes = document.querySelectorAll('.flotando');

    flotantes.forEach((img) => {
        if (img.closest('.c-p-mision-vision')) {
            flotarVertical(img, 20, 0.02);
        } else {
            img.classList.add('brillo-nod');
        }
    });

    const valores = document.querySelectorAll('.c-p-valores');
    valores.forEach(val => {
        val.addEventListener('click', () => {
            val.classList.add('pulse');
            setTimeout(() => val.classList.remove('pulse'), 600);
        });
    });
});

function flotarVertical(elemento, amplitud = 20, velocidad = 0.02) {
    let angulo = Math.random() * Math.PI * 2;

    function animar() {
        const y = Math.sin(angulo) * amplitud;
        elemento.style.transform = `translateY(${y}px)`;
        angulo += velocidad;
        requestAnimationFrame(animar);
    }

    animar();
}