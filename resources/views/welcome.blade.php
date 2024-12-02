<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Constructora Serrano</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
      
        .hero-section {
            background-image: url('photography/fondo2.jpg'); 
            background-size: cover;
            background-position: center;
            color: white;
            padding: 8rem 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .hero-section p {
            font-size: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .card-header {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
        }
        .table th {
            background-color: #343a40;
            color: #fff;
        }
        /* Ajustes para la sección de bienvenida */
        .welcome-container {
            padding: 3rem 0;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 2rem;
            text-align: center;
        }
        .card-body h5 {
            font-size: 1.5rem;
            color: #198754;
        }
        .card-body p {
            font-size: 1rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ConstructoraSerrano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Budgets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <span class="text-white me-3">Stuko</span>
                <span class="badge bg-success">Admin</span>
            </div>
        </div>
    </nav>

    <!-- Sección Hero con Imagen de Fondo -->
    <div class="hero-section">
        <h1>Bienvenidos a Constructora Serrano</h1>
        <p>Construyendo tu futuro con calidad y compromiso. Juntos, podemos hacer realidad tus proyectos más ambiciosos.</p>
    </div>

    <!-- Contenido Principal -->
    <div class="container welcome-container">
        <div class="row">
            <!-- Tarjetas de Bienvenida -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Quiénes Somos</div>
                    <div class="card-body">
                        <h5 class="card-title">Más de 20 años de experiencia</h5>
                        <p class="card-text">En Constructora Serrano nos especializamos en la construcción de proyectos residenciales, comerciales e industriales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Nuestros Proyectos</div>
                    <div class="card-body">
                        <h5 class="card-title">Innovación y Calidad</h5>
                        <p class="card-text">Nos enorgullece entregar proyectos que superan las expectativas de nuestros clientes, siempre con la mejor calidad y en los tiempos establecidos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Contáctanos</div>
                    <div class="card-body">
                        <h5 class="card-title">¿Listo para empezar?</h5>
                        <p class="card-text">Contáctanos y te ayudaremos a hacer realidad tu proyecto de construcción. ¡Estamos aquí para ayudarte!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Testimonios -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote text-center">
                            <p>"La experiencia con Constructora Serrano fue excelente. Superaron nuestras expectativas en tiempo, calidad y atención. ¡Altamente recomendados!"</p>
                            <footer class="blockquote-footer">María Fernández, Cliente de Proyecto Residencial</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
