@extends('layouts.dashboard')

@push('css')
    <!-- Application vendor css url -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/cssbundle/dataTables.min.css') }}">
@endpush

@section('content')
    <div class="row g-3">
        @if (session('succes'))
            <div class="alert alert-success">
                {{ session('succes') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Liste des Personnels de BMI</h6>
                    <div class="dropdown morphing scale-left">
                        {{-- <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                class="icon-size-fullscreen"></i></a>
                        <a href="{{ route('mutualistes.importer') }}" class="btn btn-success d-inline">Importer</a> --}}
                        <a href="{{ route('personnels.create') }}" class="btn btn-primary d-inline">Ajouter un Personnel
                        </a>
                    </div>
                </div>
                <div class="card-body" id="show_all_admin">
                    <div class="table-responsive">
                        <table id="myTable" class="table myDataTable table-hover align-middle mb-0 card-table">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nom & Prénoms</th>
                                    {{-- <th>Catégorie</th> --}}
                                    <th>Matricule</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    {{-- <th>Ville</th> --}}
                                    <th>Adresse</th>
                                    {{-- <th>Genre</th>
                                    <th>Pièce</th>
                                    <th>N° Pièce</th> --}}
                                    {{-- <th>Disponibilité</th> --}}
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personnels as $index => $personnel)
                                    @php
                                        $imgUrl = $personnel->lien_photo
                                            ? asset($personnel->lien_photo)
                                            : asset('assets/img/profile_av.png');

                                        $statusBadge = '';
                                        if ($personnel->status == 2) {
                                            $statusBadge = '<span class="badge bg-danger"> Compte Bloqué </span>';
                                        } elseif ($personnel->status == 1) {
                                            $statusBadge = '<span class="badge bg-success"> Compte Validé </span>';
                                        } else {
                                            $statusBadge =
                                                '<span class="badge bg-warning"> En attente de validation </span>';
                                        }

                                        $isOnline =
                                            $personnel->disponibilite == 'En ligne'
                                                ? '<span class="badge bg-success"> En ligne </span>'
                                                : '<span class="badge bg-danger"> Hors Ligne </span>';
                                        $nom_prenoms = $personnel->nom.' '.$personnel->prenom;
                                    @endphp
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <img src="{{ $imgUrl }}" class="avatar sm rounded me-2"
                                                alt="profile-image">

                                            <span>
                                                @if ($personnel->genre == 'Homme')
                                                    M.
                                                @else
                                                    Mme / Mlle
                                                @endif {{Str::limit($nom_prenoms ?? '', 10)}}
                                            </span>
                                        </td>
                                        {{-- <td>{{ $personnel->direction->libelle ?? '' }}</td> --}}
                                        <td>{{ $personnel->matricule }}</td>
                                        <td>{{Str::limit($personnel->email ?? '',15)  }}</td>
                                        <td>{{ formatPhoneNumber($personnel->contact, '-') ?? '' }}</td>
                                        {{-- <td>{{ $personnel->ville->libelle ?? '' }}</td> --}}
                                        <td>{{ Str::limit($personnel->adresse ?? '', 20) }}</td>
                                        {{-- <td>{{ $personnel->genre ?? '' }}</td>
                                        <td>{{ $personnel->typePiece->libelle ?? '' }}</td>
                                        <td>{{ $personnel->numero_piece ?? '' }}</td> --}}
                                        {{-- <td>{!! $isOnline !!}</td> --}}
                                        <td>{!! $statusBadge !!}</td>
                                        <td>
                                            @if ($personnel->status == 2)
                                                <a href="{{ route('restauration', $personnel->id) }}" id="ShowAdmin"
                                                    class="btn btn-link btn-sm text-success infoIcon"
                                                    data-bs-toggle="tooltip" data-bs-toggle="modal"
                                                    data-bs-target="#info_admin" data-bs-placement="top" title="Restauré">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('personnels.show', $personnel->id) }}" id="ShowAdmin"
                                                    class="btn btn-link btn-sm text-success infoIcon"
                                                    data-bs-toggle="tooltip" data-bs-toggle="modal"
                                                    data-bs-target="#info_admin" data-bs-placement="top" title="Infos"><i
                                                        class="fa fa-eye"></i></a>
                                                {{-- <a href="#" id="EditAdmin"
                                                class="btn btn-link btn-sm text-primary editIcon"
                                                data-bs-target="#edit_admin" title="Modifier"><i
                                                    class="fa fa-pencil"></i></a> --}}

                                                @if (Auth::user()->hasRole('super-administrateur'))
                                                    <a href="#deleteModal{{ $personnel->id }}" id="DeleteMutualiste"
                                                        class="btn btn-link btn-sm text-danger deleteIcon"
                                                        data-bs-toggle="modal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Supprimer"><i
                                                            class="fa fa-trash"></i></a>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>

                                    <!-- Modal delete-->
                                    <div class="modal fade flip" id="deleteModal{{ $personnel->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                        colors="primary:#405189,secondary:#f06548"
                                                        style="width:90px;height:90px">
                                                    </lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4>Vous êtes sur le point de supprimer le compte d'un <br>
                                                            Personnel ?</h4>
                                                        <p class="text-muted fs-15 mb-4">En supprimant ce compte, vous
                                                            supprimez
                                                            <br> toutes les informations le concernant de notre base de
                                                            données.
                                                        </p>
                                                        <div class="hstack gap-2 justify-content-center remove">
                                                            <button
                                                                class="btn btn-link link-success fw-medium text-decoration-none"
                                                                id="deleteRecord-close" data-bs-dismiss="modal"><i
                                                                    class="ri-close-line me-1 align-middle"></i>
                                                                Fermer</button>

                                                            <form method="POST"
                                                                action="{{ route('personnel.desactive', $personnel->id) }}">
                                                                @csrf
                                                                @method('POST')
                                                                {{-- <input name="_method" type="hidden" value="DELETE"> --}}
                                                                <button class="btn btn-danger" id="delete-record">Oui,
                                                                    supprimer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Plugin Js -->
    <script src="{{ asset('assets/dashboard/js/bundle/dataTables.bundle.js') }}"></script>
    <!-- Vendor Script -->
    <script>
        // Data Table
        var langUrl = "{{ asset('DataTables/fr-FR.json') }}";

        $(document).ready(function() {
            $('#myTable').addClass('nowrap').dataTable({
                responsive: true,
                searching: true,
                paging: true,
                ordering: true,
                info: false,
                language: {
                    url: langUrl,
                },
                lengthMenu: [
                    [5, 10, 25, 50, 100],
                    // [5, 10, 25, 50, 100, 150, 200, 250],
                ],
                dom: 'Bfrtip', // Add this line to include Buttons
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
@endpush
