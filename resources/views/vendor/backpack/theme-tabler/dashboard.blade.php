@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type' => 'jumbotron',
    ];
    Widget::add()
        ->to('before_content')
        ->type('div')
        ->class('row mt-3')
        ->content([
            Widget::make()
                ->type('progress')
                ->class('card mb-3')
                ->statusBorder('start')
                ->accentColor('primary')
                ->ribbon(['top', 'la-file-alt'])
                ->progressClass('progress-bar')
                ->value(30)
                ->description('Contratos Activos')
                ->progress((100 * 30) / 100)
                ->hint(1000 - 30 . ' meta de contratos'),
            Widget::make()
                ->type('progress')
                ->class('card mb-3')
                ->statusBorder('start')
                ->accentColor('success')
                ->ribbon(['top', 'la-male'])
                ->progressClass('progress-bar')
                ->value(239)
                ->description('Clientes Registrados')
                ->progress((100 * 239) / 100)
                ->hint(1000 - 239 . ' meta de clientes'),
            Widget::make()
                ->type('progress')
                ->class('card mb-3')
                ->statusBorder('start')
                ->accentColor('warning')
                ->ribbon(['top', 'la-users'])
                ->progressClass('progress-bar')
                ->value(639)
                ->description('Personal Activo')
                ->progress((100 * 639) / 100)
                ->hint(1000 - 639 . ' maximo de personal'),
            Widget::make()
                ->type('progress')
                ->class('card mb-3')
                ->statusBorder('start')
                ->accentColor('danger')
                ->ribbon(['top', 'la-coins'])
                ->progressClass('progress-bar')
                ->value("4,300$")
                ->description('Ganancias')
                ->progress((100 * 4300) / 10000)
                ->hint(10000 - 4300 . 'meta de ganancias anual'),
        ]);
@endphp

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Obras Activas</h3>
                </div>
                <table class="table card-table table-vcenter">
                    <thead>
                        <tr>
                            <th>Obra</th>
                            <th colspan="2">Empleados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Boyuibe</td>
                            <td>99</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 15.49%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Chimore</td>
                            <td>96</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 15.02%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Tarabuco</td>
                            <td>90</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 14.08%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Samaipata</td>
                            <td>86</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 13.45%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Potosi</td>
                            <td>88</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 13.77%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Cotoca</td>
                            <td>87</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 13.61%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Montero</td>
                            <td>93</td>
                            <td class="w-50">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-primary" style="width: 14.55%"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Material</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <tbody>
                            <tr>
                                <td class="w-1 pe-0">
                                    <input type="checkbox" class="form-check-input m-0 align-middle"
                                        aria-label="Select task" checked="">
                                </td>
                                <td class="w-100">
                                    <a href="#" class="text-reset">Cemento</a>
                                </td>
                                <td class="text-nowrap text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                        </path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    Agosto 05, 2024
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        200/700 bolsas
                                    </a>
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                        3</a>
                                </td>
                                <td>
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(https://picsum.photos/200)"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1 pe-0">
                                    <input type="checkbox" class="form-check-input m-0 align-middle"
                                        aria-label="Select task">
                                </td>
                                <td class="w-100">
                                    <a href="#" class="text-reset">Arena</a>
                                </td>
                                <td class="text-nowrap text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                        </path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    Enero 01, 2024
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        30/140m<sub>3</sub>
                                    </a>
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                        6</a>
                                </td>
                                <td>
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(https://picsum.photos/200)"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1 pe-0">
                                    <input type="checkbox" class="form-check-input m-0 align-middle"
                                        aria-label="Select task">
                                </td>
                                <td class="w-100">
                                    <a href="#" class="text-reset">Grava</a>
                                </td>
                                <td class="text-nowrap text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                        </path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    Diciembre 28, 2024
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        10/100m<sub>3</sub>
                                    </a>
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                        1</a>
                                </td>
                                <td>
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(https://picsum.photos/200)"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1 pe-0">
                                    <input type="checkbox" class="form-check-input m-0 align-middle"
                                        aria-label="Select task" checked="">
                                </td>
                                <td class="w-100">
                                    <a href="#" class="text-reset">Ladrillos</a>
                                </td>
                                <td class="text-nowrap text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                        </path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    Noviembre 11, 2024
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        3000/21000 unidades
                                    </a>
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                        12</a>
                                </td>
                                <td>
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(https://picsum.photos/200)"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1 pe-0">
                                    <input type="checkbox" class="form-check-input m-0 align-middle"
                                        aria-label="Select task">
                                </td>
                                <td class="w-100">
                                    <a href="#" class="text-reset">Acero de refuerzo</a>
                                </td>
                                <td class="text-nowrap text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                        </path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    Noviembre 14, 2024
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        500/3500kg
                                    </a>
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                        5</a>
                                </td>
                                <td>
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(https://picsum.photos/200)"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-1 pe-0">
                                    <input type="checkbox" class="form-check-input m-0 align-middle"
                                        aria-label="Select task" checked="">
                                </td>
                                <td class="w-100">
                                    <a href="#" class="text-reset">Madera</a>
                                </td>
                                <td class="text-nowrap text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                        </path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    febrero 11, 2024
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                        200/700 tablas
                                    </a>
                                </td>
                                <td class="text-nowrap">
                                    <a href="#" class="text-secondary">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                        3</a>
                                </td>
                                <td>
                                    <span class="avatar avatar-sm"
                                        style="background-image: url(https://picsum.photos/200)"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contratos</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-secondary">
                            Mostrar
                            <div class="mx-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" value="8" size="3"
                                    aria-label="Invoices count">
                            </div>
                            contratos
                        </div>
                        <div class="ms-auto text-secondary">
                            <i class="las la-search"></i>
                            Buscar:
                            <div class="ms-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select all invoices"></th>
                                <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm icon-thick">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 15l6 -6l6 6"></path>
                                    </svg>
                                </th>
                                <th>Lugar del Proyecto</th>
                                <th>Cliente</th>
                                <th>Fecha de Inicio</th>
                                <th>Estado</th>
                                <th>Total Monetario</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001401</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Boyuibe</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-us me-2"></span>
                                    Emil Cunningham
                                </td>
                                <td>
                                    15 Dic 2024
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> Pagado
                                </td>
                                <td>$887</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001402</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Chimore</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-gb me-2"></span>
                                    Nita Tucker
                                </td>
                                <td>
                                    12 Abr 2024
                                </td>
                                <td>
                                    <span class="badge bg-warning me-1"></span> Plazo en 2 dias
                                </td>
                                <td>$1200</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001403</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Tarabuco</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-de me-2"></span>
                                    Winifred Ali
                                </td>
                                <td>
                                    23 Oct 2024
                                </td>
                                <td>
                                    <span class="badge bg-warning me-1"></span> Plazo en 2 dias
                                </td>
                                <td>$534</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001404</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Samaipata</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-br me-2"></span>
                                    Sadie Whitehead
                                </td>
                                <td>
                                    2 Sep 2024
                                </td>
                                <td>
                                    <span class="badge bg-secondary me-1"></span> Plazo en 2 semanas
                                </td>
                                <td>$1500</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001405</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Potosi</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-pl me-2"></span>
                                    Mauricio Snow
                                </td>
                                <td>
                                    29 Ene 2024
                                </td>
                                <td>
                                    <span class="badge bg-danger me-1"></span> Cancelado
                                </td>
                                <td>$---</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001406</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Cotoca</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-br me-2"></span>
                                    Gene Dyer
                                </td>
                                <td>
                                    4 Feb 2024
                                </td>
                                <td>
                                    <span class="badge bg-secondary me-1"></span> Plazo en 3 semanas
                                </td>
                                <td>$300</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001407</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Montero</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-us me-2"></span>
                                    Rosalyn Williams
                                </td>
                                <td>
                                    22 Mar 2024
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> Pagado
                                </td>
                                <td>$2500</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-secondary">001408</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Cercado</a></td>
                                <td>
                                    <span class="flag flag-xs flag-country-pl me-2"></span>
                                    Antione Freeman
                                </td>
                                <td>
                                    13 May 2024
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> Pagado
                                </td>
                                <td>$940</td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Acciones
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Pagado</a></li>
                                          <li><a class="dropdown-item" href="#">Plazo  cercano</a></li>
                                          <li><a class="dropdown-item" href="#">Cancelar</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">Mostrando <span>1</span> a <span>8</span> de <span>16</span> contratos
                    </p>
                    <ul class="pagination m-0 ms-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 6l-6 6l6 6"></path>
                                </svg>
                                prev
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                siguiente <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection