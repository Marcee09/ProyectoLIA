<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .orange-logo {
            color: #f36e2c;
        }

        .bg-orange-logo {
            background-color: #f36e2c;
        }

        .welcome-section {
            position: relative;
            border-radius: 0.5rem;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        /* Estilos de botones */
        .btn {
            border: 2px solid transparent;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .btn-ingresar {
            background-color: #f36e2c;
            color: #fff;
        }

        .btn-registrar {
            background-color: transparent;
            border: 2px solid #f36e2c;
            color: #f36e2c;
        }

        .btn:hover {
            background-color: #FF7B01;
            border-color: #FF7B01;
            color: #fff;
        }

        a {
    position: relative;
    display: inline-block;
    text-decoration: none;
}

a span {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -30px; /* Ajusta según lo necesites */
    background-color: rgba(50, 50, 50, 0.8); /* Color del fondo del tooltip */
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px; /* Tamaño de la fuente del tooltip */
    opacity: 0;
    transition: opacity 0.3s ease;
    white-space: nowrap; /* Evita que el texto se divida en varias líneas */
}

a:hover span {
    opacity: 1; /* Muestra el tooltip al pasar el mouse */
}

a:hover i {
    transform: scale(1.2); /* Aumenta el tamaño del icono al pasar el mouse */
    transition: transform 0.3s ease; /* Suaviza la transición del tamaño */
}


    </style>
</head>

<body class="font-sans bg-gray-200 text-gray-900 min-h-screen flex flex-col">
    <!-- Navegación -->
    @if (Route::has('login')) 
    <nav class="flex items-center justify-between mx-4 ml-0 mr-0 bg-gray-900 text-gray-200">
        <!-- Imagen en la parte izquierda -->
        <div class="flex items-center">
            <img src="images/Kairos-EXACTAS-corel.svg" alt="Logo" class="h-16 w-auto mb-3 ml-8 mt-3">   
        </div>

        <!-- Enlaces de navegación a la derecha -->
        <div class="flex flex-1 justify-end mr-8">
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-ingresar">Panel</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-ingresar">Ingresar</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-registrar ml-4">Registrarse</a>
                @endif
            @endauth
        </div>
    </nav>
    @endif

    <main class="flex-grow flex items-center justify-between">
        <section class="text-left max-w-3xl px-4 absolute welcome-section ml-12">
            <h2 class="text-3xl font-semibold mb-4 orange-logo max-w-xxl relative z-10">Bienvenido a Kairos</h2>
            <h3 class="text-xl font-semibold mb-2 relative z-10">Sistema de control de inventario del LIA</h3>
            <div class="flex items-start mb-8">
                <div class="max-w-xxl text-left relative z-10">
                    <p class="mb-4">
                        Este sitio web ha sido desarrollado para facilitar la gestión y control de los recursos del departamento. 
                        Nuestro sistema te permitirá llevar un registro preciso de los equipos, materiales y suministros disponibles, 
                        asegurando que cada recurso esté adecuadamente contabilizado y accesible.
                    </p>
                    <p class="mb-4">
                        Con una interfaz amigable y herramientas eficaces, podrás monitorear la entrada y salida de artículos, 
                        así como generar informes que ayuden en la toma de decisiones informadas. Este sistema está diseñado 
                        para mejorar la organización y eficiencia en la administración de los recursos del departamento, 
                        contribuyendo al óptimo funcionamiento de nuestras actividades académicas y administrativas.
                    </p>
                </div>
            </div>
        </section>

        <aside class="mr-12 grid grid-cols-2 gap-4">
            <h4 class="col-span-2 text-xl text-center font-semibold mb-4">Algunas funcionalidades</h4>
            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <i class="fas fa-user-plus text-4xl"></i>
                <h4 class="mt-2 text-xl">ABM de Usuarios</h4>
                <p class="mt-1 text-sm">Gestiona usuarios del sistema.</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <i class="fas fa-boxes text-4xl"></i>
                <h4 class="mt-2 text-xl">Gestión de Inventario</h4>
                <p class="mt-1 text-sm">Monitorea el inventario.</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <i class="fas fa-chart-pie text-4xl"></i>
                <h4 class="mt-2 text-xl">Gestión de Informes</h4>
                <p class="mt-1 text-sm">Crea y visualiza informes.</p>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg text-center">
                <i class="fas fa-ticket-alt text-4xl"></i>
                <h4 class="mt-2 text-xl">Tickets</h4>
                <p class="mt-1 text-sm">Ver, comentar y gestionar tickets.</p>
            </div>
        </aside>
    </main>

    <footer class="bg-gray-900 text-white py-4 w-full">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <!-- Sección para contenido adicional en la izquierda -->
        <div class="flex-1"> 
        </div>
        <!-- Texto centrado -->
        <div class="text-center flex-1 text-sm text-white opacity-70">
    <p>&copy; 2024 Software para Personal de LIA autorizado.</p>
    <p>Universidad Nacional de San Juan | Facultad de Ciencias Exactas, Físicas y Naturales</p>
    </div>

       <!-- Sección de íconos de redes sociales en la derecha -->
<div class="flex space-x-4 flex-1 justify-end mr-8">
    <a href="https://wa.me/tu-numero-de-telefono" class="relative text-white transition">
        <i class="fab fa-whatsapp text-2xl"></i>
        <span>WhatsApp</span>
    </a>
    <a href="https://www.instagram.com/tu-perfil" class="relative text-white transition">
        <i class="fab fa-instagram text-2xl"></i>
        <span>Instagram</span>
    </a>
    <a href="mailto:tu-email@gmail.com" class="relative text-white transition">
        <i class="fas fa-envelope text-2xl"></i>
        <span>Gmail</span>
    </a>
    <a href="https://www.facebook.com/tu-perfil" class="relative text-white transition">
        <i class="fab fa-facebook text-2xl"></i>
        <span>Facebook</span>
    </a>
</div>
</div>
</footer>


</body>

</html>












