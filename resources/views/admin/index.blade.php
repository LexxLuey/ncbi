@extends('layouts.admin-dashboard')
@section('title', 'Admin Area')
@section('active-page', 'active-page')
@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-warning">
                            <i class="material-icons-outlined">person</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Total Applicants</span>
                            <span class="widget-stats-amount">{{ $students->count() }}</span>
                            <span class="widget-stats-info">{{ $students->count() }} new applicants this month</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 12%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-warning">
                            <i class="material-icons-outlined"><span class="material-icons">
                                    monetization_on
                                </span></i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Fees</span>
                            <span class="widget-stats-amount">140,390</span>
                            <span class="widget-stats-info">80,555 received this month</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 7%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card widget widget-stats">
                <div class="card-body">
                    <div class="widget-stats-container d-flex">
                        <div class="widget-stats-icon widget-stats-icon-warning">
                            <i class="material-icons-outlined">how_to_reg</i>
                        </div>
                        <div class="widget-stats-content flex-fill">
                            <span class="widget-stats-title">Completed Growth Track</span>
                            <span class="widget-stats-amount">{{ $growth_track }}</span>
                            <span class="widget-stats-info">{{ $growth_track }} students completed this month</span>
                        </div>
                        <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                            <i class="material-icons">keyboard_arrow_up</i> 12%
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col">

            <div class="section-description section-description-inline">
                <h1>NCBI Applicants</h1>
            </div>
            {{-- <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown hidden-on-mobile">
                                <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="material-icons">settings</i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                    <li><a href="#">Export CSV</a></li>
                                    <li><a href="#">Export Excel</a></li>
                                    <li><a href="#">Export PDF</a></li>
                                    <li><a href="#">Print</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> --}}
            <div class="card">
                <div class="card-body">
                    <table id="datatable4" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Surname</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Contact Address</th>
                                <th>Growth Track</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td><a href=" {{ route('student', $student) }} ">{{ $student->first_name }}</a></td>
                                    <td>{{ $student->surname }}</td>
                                    <td>{{ $student->phone_number }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>
                                        @if ($student->completed_growth_track)
                                            <span class="badge badge-success">Completed</span>
                                        @else
                                            <span class="badge badge-danger">Incompleted</span>
                                        @endif
                                    </td>
                                    <td class="not-export-col">
                                        <div class="row">
                                            <div class="col">
                                                {{-- <a href=" {{ route('edit-student', $student) }} "
                                                    class="btn btn-primary">EDIT</a> --}}
                                            </div>
                                            <div class="col">
                                                <form action="{{ route('delete-student', $student) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger rounded-pill">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <p>Nothing in DB</p>
                            @endforelse
                            <tfoot>
                                <tr>
                                    <th>First Name</th>
                                    <th>Surname</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Contact Address</th>
                                    <th>Growth Track</th>
                                    <th>Actions</th>                                </tr>
                            </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-javascripts')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
            $('#datatable5').DataTable({
                dom: "Blfrtip",
                buttons: [{
                        text: 'csv',
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
                    {
                        text: 'excel',
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
                    {
                        text: 'pdf',
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
                    {
                        text: 'print',
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible:not(.not-export-col)'
                        }
                    },
    
                ],
            });
        });
    </script>
@endsection
