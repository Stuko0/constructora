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
                ->value($contractsCount)
                ->description('Contratos Activos')
                ->progress((100 * $contractsCount) / 100)
                ->hint(1000 - $contractsCount . ' meta de contratos'),
            Widget::make()
                ->type('progress')
                ->class('card mb-3')
                ->statusBorder('start')
                ->accentColor('success')
                ->ribbon(['top', 'la-male'])
                ->progressClass('progress-bar')
                ->value($clientsCount)
                ->description('Clientes Registrados')
                ->progress((100 * $clientsCount) / 100)
                ->hint(1000 - $clientsCount . ' meta de clientes'),
            Widget::make()
                ->type('progress')
                ->class('card mb-3')
                ->statusBorder('start')
                ->accentColor('warning')
                ->ribbon(['top', 'la-users'])
                ->progressClass('progress-bar')
                ->value($activePersonnelCount)
                ->description('Personal Activo')
                ->progress((100 * $activePersonnelCount) / 100)
                ->hint(1000 - $activePersonnelCount . ' maximo de personal'),
            Widget::make()
                ->type('progress')
                ->class('card mb-3')
                ->statusBorder('start')
                ->accentColor('danger')
                ->ribbon(['top', 'la-coins'])
                ->progressClass('progress-bar')
                ->value(number_format($totalEarnings, 2) . '$')
                ->description('Ganancias')
                ->progress((100 * $totalEarnings) / 100000000)
                ->hint(100000000 - $totalEarnings . ' meta de ganancias anual'),
        ]);
@endphp

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card table-responsive" style="overflow-y:auto; max-height:400px;">
                <div class="card-header">
                    <h3 class="card-title">Obras Activas</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <thead>
                            <tr>
                                <th>Obra</th>
                                <th colspan="2">Empleados</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->location }}</td>
                                <td>{{ $project->employees }}</td>
                                <td class="w-50">
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary" style="width: {{ ($project->employees / $totalUsers) * 100 }}%"></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card table-responsive" style="overflow-y:auto; max-height:400px;">
                <div class="card-header">
                    <h3 class="card-title">Material</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <tbody>
                            @foreach ($resources as $resource)
                                <tr>
                                    <td class="w-1 pe-0">
                                        <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                                    </td>
                                    <td class="w-100">
                                        <a href="#" class="text-reset">{{ $resource->name }}</a>
                                    </td>
                                    <td class="text-nowrap text-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path> <path d="M16 3v4"></path> <path d="M8 3v4"></path> <path d="M4 11h16"></path> <path d="M11 15h1"></path> <path d="M12 15v3"></path> </svg> {{ \Carbon\Carbon::parse($resource->created_at)->format('F d, Y') }}
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <path d="M5 12l5 5l10 -10"></path> </svg> {{ $resource->stock }}/{{ $resource->quantity }} {{ Str::plural($resource->name) }}
                                        </a>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="#" class="text-secondary"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"> <path stroke="none" d="M0 0h24v24H0z" fill="none"></path> <path d="M8 9h8"></path> <path d="M8 13h6"></path> <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path> </svg> {{ $resource->commentsCount }}</a>
                                    </td>
                                </tr>
                            @endforeach
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
                                <input type="number" class="form-control form-control-sm" id="perPage" value="{{$perPage}}" size="3"
                                    aria-label="Invoices count">
                            </div>
                            contratos
                        </div>
                        <div class="ms-auto text-secondary">
                            <i class="las la-search"></i>
                            Buscar:
                            <div class="ms-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" id="search" value="{{$search}}" aria-label="Search invoice">
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
                                <th class="w-1">No.
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectsPaginated as $project)
                                <tr>
                                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                    <td><span class="text-secondary">{{ str_pad($project->id, 6, '0', STR_PAD_LEFT) }}</span></td>
                                    <td><a href="invoice.html" class="text-reset" tabindex="-1">{{ $project->location }}</a></td>
                                    <td>{{ $project->name }}</td> <td>{{ \Carbon\Carbon::parse($project->created_at)->format('d M Y') }}</td>
                                    <td><span class="badge {{ $project->status == 'Success' ? 'bg-success' : 'bg-warning' }} me-1"></span> {{ $project->status }}</td> 
                                    <td>${{ number_format($project->total, 2) }}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">
                        Mostrando <span>{{ ($projectsPaginated->currentPage() - 1) * $projectsPaginated->perPage() + 1 }}</span> 
                        a <span>{{ min($projectsPaginated->currentPage() * $projectsPaginated->perPage(), $projectsPaginated->total()) }}</span> 
                        de <span>{{ $projectsPaginated->total() }}</span> contratos
                    </p>
                    <ul class="pagination m-0 ms-auto">
                        <li class="page-item {{ $projectsPaginated->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $projectsPaginated->previousPageUrl() }}" tabindex="-1" aria-disabled="{{ $projectsPaginated->onFirstPage() ? 'true' : 'false' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 6l-6 6l6 6"></path>
                                </svg>
                                prev
                            </a>
                        </li>

                        @foreach ($projectsPaginated->getUrlRange(1, $projectsPaginated->lastPage()) as $page => $url)
                            <li class="page-item {{ $projectsPaginated->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        <li class="page-item {{ $projectsPaginated->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $projectsPaginated->nextPageUrl() }}" aria-disabled="{{ $projectsPaginated->hasMorePages() ? 'false' : 'true' }}">
                                siguiente 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon">
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
    <script>
        document.getElementById('perPage').addEventListener('change', function() {
            var perPage = this.value;
            var search = document.getElementById('search').value;
            window.location.href = `?per_page=${perPage}&search=${search}`;
        });
        document.getElementById('search').addEventListener('input', function() {
            var perPage = document.getElementById('perPage').value;
            var search = this.value;
            window.location.href = `?per_page=${perPage}&search=${search}`;
        });
        document.addEventListener('DOMContentLoaded', function () {
            const tableBody = document.querySelector('table tbody');
            if (tableBody && tableBody.rows.length > 7) {
                tableBody.parentElement.classList.add('table-container');
            }
        });
    </script>
@endsection