//! Función para manejar la aparición de los elementos
document.addEventListener('DOMContentLoaded', () => {
    const infobar = document.getElementById('infobar');
    const navbar = document.getElementById('navbar');
    const hero = document.getElementById('hero');
    const about_me = document.getElementById('about_me');
    const services = document.getElementById('services');
    const contact = document.getElementById('contact');
    const cabecera = document.getElementById('cabecera');
    const footer = document.getElementById('footer');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('opacity-0', 'translate-y-4');
                entry.target.classList.add('opacity-100', 'translate-y-0');
                observer.unobserve(entry.target);
            }
        });
    });

    observer.observe(infobar);
    observer.observe(navbar);
    observer.observe(hero);
    observer.observe(about_me);
    observer.observe(services);
    observer.observe(contact);
    observer.observe(cabecera);
    observer.observe(footer);
});

function toggleExtraServices() {
    const extraServices = document.getElementById('extra-services');
    const toggleButton = document.getElementById('toggleButton');

    if (extraServices.classList.contains('hidden')) {
        extraServices.classList.remove('hidden');
        extraServices.classList.add('animate__animated', 'animate__fadeInUp');
        toggleButton.innerText = 'Ver menos';
    } else {
        extraServices.classList.add('hidden');
        toggleButton.innerText = 'Ver más';
    }
}

//! Toggle sidebar menu visibility and animate hamburger button
document.getElementById('hamburger-btn').addEventListener('click', function() {
    const sidebarMenu = document.getElementById('sidebar-menu');
    const topBar = document.querySelector('.bar-top');
    const bottomBar = document.querySelector('.bar-bottom');

    sidebarMenu.classList.toggle('translate-x-[-100%]');
    sidebarMenu.classList.toggle('translate-x-0');

    // Toggle open classes for hamburger animation
    topBar.classList.toggle('rotate-45');
    topBar.classList.toggle('translate-y-1.5');
    bottomBar.classList.toggle('-rotate-45');
    bottomBar.classList.toggle('-translate-y-1.5');
});

//! Funcion para que cuando scrolle, haga una animacion la barra de navegacion
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const isMediumScreen = window.matchMedia('(min-width: 768px)').matches;

    if (isMediumScreen && window.scrollY > 10) {
        navbar.classList.add('shadow-lg', 'py-1', 'md:py-2', 'duration-100');
        navbar.classList.remove('py-4', 'md:py-6');
    } else if (isMediumScreen) {
        navbar.classList.remove('shadow-lg', 'py-1', 'md:py-2', 'duration-100');
        navbar.classList.add('py-4', 'md:py-6');
    }
});

//! Funcion para que cuando se haga click en el boton de enviar en el formulario de contacto, se muestre un mensaje de exito
$(document).ready(function() {
    // Cuando se envíe el formulario
    $('#contact-form').submit(function(e) {
        e.preventDefault(); // Evita la recarga de la página

        // Recolectar los datos del formulario
        let formData = $(this).serialize();

        // Enviar el formulario usando AJAX
        $.ajax({
            url: $(this).attr('action'), // URL del controlador
            method: 'POST',
            data: formData, // Datos del formulario
            success: function(response) {
                // Si el correo se envía correctamente, mostrar el mensaje de éxito
                $('#success-text').text(response.success); // El mensaje de éxito que vino del servidor
                $('#success-message').removeClass('hidden').fadeIn();

                // Limpiar el formulario después de un envío exitoso
                $('#contact-form')[0].reset();

                // Ocultar el mensaje después de 5 segundos
                setTimeout(function() {
                    $('#success-message').fadeOut();
                }, 5000);
            },
            error: function() {
                // Si hubo un error, mostrar el mensaje de error
                alert('Hubo un error enviando el mensaje. Intenta nuevamente.');
            }
        });
    });

    // Cerrar el mensaje de éxito cuando se hace clic en la cruz
    $('#close-message').click(function() {
        $('#success-message').fadeOut();
    });
});
