<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Constructora Serrano</title>
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
        .card-header {
            background-color: #343a40;
            color: #fff;
            font-weight: bold;
        }
        .table th {
            background-color: #343a40;
            color: #fff;
        }
        .progress-bar {
            background-color: #198754;
        }
        /* Estilo para las tarjetas de indicadores */
        .indicator-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 1.5rem;
            text-align: center;
        }
        .indicator-card h3 {
            font-size: 2rem;
        }
        .indicator-card p {
            font-size: 1rem;
            color: #6c757d;
        }
        .indicator-container {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        /* Ajuste de las tablas */
        .table {
            margin-top: 2rem;
        }
        /* Estilo de las barras de progreso */
        .progress {
            height: 20px;
        }
        .progress-bar {
            background-color: #198754;
        }
        /* Tamaño de las tablas */
        .table th, .table td {
            padding: 1rem;
            text-align: center;
        }
        /* Barra de navegación ajustada */
        .navbar .navbar-nav {
            margin-left: auto;
        }
        /* Ajustes generales de las tablas */
        .table td {
            vertical-align: middle;
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

    <!-- Contenido Principal -->
    <div class="container my-4">
        <!-- Tarjetas de Indicadores -->
        <div class="indicator-container">
            <div class="card indicator-card" style="width: 18rem;">
                <div class="card-header">CONTRATOS ACTIVOS</div>
                <div class="card-body">
                    <h3>30</h3>
                    <p>970 meta de contratos</p>
                </div>
            </div>
            <div class="card indicator-card" style="width: 18rem;">
                <div class="card-header">CLIENTES REGISTRADOS</div>
                <div class="card-body">
                    <h3>239</h3>
                    <p>761 meta de clientes</p>
                </div>
            </div>
            <div class="card indicator-card" style="width: 18rem;">
                <div class="card-header">PERSONAL ACTIVO</div>
                <div class="card-body">
                    <h3>639</h3>
                    <p>361 máximo de personal</p>
                </div>
            </div>
            <div class="card indicator-card" style="width: 18rem;">
                <div class="card-header">GANANCIAS</div>
                <div class="card-body">
                    <h3>$4,300</h3>
                    <p>5700 meta de ganancias anual</p>
                </div>
            </div>
        </div>

        <!-- Sección de Tablas -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Obras Activas</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Obra</th>
                                    <th>Empleados</th>
                                    <th>Progreso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Boyuibe</td>
                                    <td>99</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 90%;"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chimoré</td>
                                    <td>96</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tarabuco</td>
                                    <td>90</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%;"></div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Más filas aquí -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Material</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Material</th>
                                    <th>Disponibilidad</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cemento</td>
                                    <td>200/700 bolsas</td>
                                    <td>Agosto 05, 2024</td>
                                </tr>
                                <tr>
                                    <td>Arena</td>
                                    <td>30/140 m³</td>
                                    <td>Enero 01, 2024</td>
                                </tr>
                                <tr>
                                    <td>Grava</td>
                                    <td>10/100 m³</td>
                                    <td>Diciembre 28, 2024</td>
                                </tr>
                                <!-- Más filas aquí -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Contratos -->
        <div class="card mt-4">
            <div class="card-header">Contratos</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Lugar del Proyecto</th>
                            <th>Cliente</th>
                            <th>Fecha de Inicio</th>
                            <th>Estado</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001401</td>
                            <td>Boyuibe</td>
                            <td>Emil Cunningham</td>
                            <td>15 Dic 2024</td>
                            <td><span class="badge bg-success">Pagado</span></td>
                            <td>$887</td>
                            <td><button class="btn btn-primary btn-sm">Ver</button></td>
                        </tr>
                        <tr>
                            <td>001402</td>
                            <td>Chimoré</td>
                            <td>Nita Tucker</td>
                            <td>12 Abr 2024</td>
                            <td><span class="badge bg-warning">Plazo en 2 días</span></td>
                            <td>$1200</td>
                            <td><button class="btn btn-primary btn-sm">Ver</button></td>
                        </tr>
                        <tr>
                            <td>001403</td>
                            <td>Tarabuco</td>
                            <td>Lucas Nixon</td>
                            <td>20 Mar 2024</td>
                            <td><span class="badge bg-danger">No Pagado</span></td>
                            <td>$765</td>
                            <td><button class="btn btn-primary btn-sm">Ver</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
