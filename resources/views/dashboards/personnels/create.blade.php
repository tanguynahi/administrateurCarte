@extends('layouts.dashboard')
@push('css')
    <!-- Application vendor css url -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/cssbundle/dataTables.min.css') }}">
@endpush

@section('content')
    <div class="row g-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Formulaire d'insription</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                class="icon-size-fullscreen"></i></a>
                        <a href="{{ route('personnels.index') }}" class="btn btn-primary d-inline">Retour</a>
                    </div>
                </div>
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
                <div class="card-body" id="add_administrator">
                    <form action="{{ route('personnels.store') }}" method="POST" id="add_admin_form"
                        enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-4 col-sm-12">
                                {{-- <label class="col-form-label">Avatar</label> --}}
                                <div class="image-input avatar xxl rounded-4"
                                    style="background-image: url(../assets/img/avatar.png)">
                                    <div class="avatar-wrapper rounded-4"
                                        style="background-image: url(../assets/img/profile_av.png)"></div>
                                    <div class="file-input">
                                        <input type="file" class="form-control" name="lien_photo" id="file-input">
                                        <label for="file-input" class="fa fa-pencil shadow text-muted"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-floating">
                                    <input type="text" id="matricule" name="matricule"
                                        class="form-control @error('matricule') is-invalid @enderror" value="{{ old('matricule') }}"
                                        placeholder="matricule" autocomplete="matricule" autofocus required>
                                    <label>Entrez le matricule<span class="text-danger fw-bold">*</span></label>
                                    @error('matricule')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-12">
                                <div class="form-floating">
                                    <select class="form-select form-control @error('genre') is-invalid @enderror"
                                        id="genre" name="genre" autocomplete="genre" autofocus require>
                                        <option value="">Sélectionnez le genre</option>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option>
                                    </select>
                                    @error('genre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="floatingSelect">Genre<span class="text-danger fw-bold">*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-floating">
                                    <input type="text" id="nom" name="nom"
                                        class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}"
                                        placeholder="Nom" autocomplete="nom" autofocus required>
                                    <label>Entrez le nom<span class="text-danger fw-bold">*</span></label>
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-floating">
                                    <input type="text" id="prenom" name="prenom"
                                        class="form-control @error('prenom') is-invalid @enderror"
                                        value="{{ old('prenom') }}" placeholder="Prénom(s)" autocomplete="prenom" autofocus
                                        required>
                                    <label>Entrez le Prénom(s)<span class="text-danger fw-bold">*</span></label>
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12">
                                <div class="form-floating">
                                    <select class="form-select form-control @error('poste') is-invalid @enderror"
                                        id="poste" name="poste" autocomplete="poste" autofocus require>
                                        <option value="">Sélectionnez le poste</option>
                                        <option value="N1">N1</option>
                                        <option value="N2">N2</option>
                                    </select>
                                    {{-- <select class="form-select form-control @error('ville_id') is-invalid @enderror"
                                        id="ville_id" name="ville_id" autocomplete="ville_id" autofocus required>
                                        <option value="">Sélectionner une ville</option>
                                        @foreach ($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->libelle }}
                                            </option>
                                        @endforeach
                                    </select> --}}

                                    @error('poste')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="floatingSelect">Genre<span class="text-danger fw-bold">*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-floating">
                                    <input type="text" id="profession" name="profession"
                                        class="form-control @error('profession') is-invalid @enderror"
                                        value="{{ old('profession') }}" placeholder="Prénom(s)" autocomplete="profession"
                                        autofocus required>
                                    <label>Entrez la Profession<span class="text-danger fw-bold">*</span></label>
                                    @error('profession')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                        autocomplete="email" autofocus required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label>Entrez une adresse email<span class="text-danger fw-bold">*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-floating">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('adresse') is-invalid @enderror"
                                            id="adresse" name="adresse" placeholder="adresse" autocomplete="adresse"
                                            autofocus>
                                        @error('adresse')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label>Entrez une adresse</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-floating">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('contact') is-invalid @enderror"
                                            id="contact" name="contact" value="{{ old('contact') }}" minlength="10"
                                            maxlenghth="10" placeholder="Ex: 0777007700"
                                            onKeyPress="if(this.value.length==10) return false;" autocomplete="contact"
                                            autofocus required>
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label>Entrez un contact<span class="text-danger fw-bold">*</span></label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="mt-3">
                            <p><span class="text-danger fw-bold">*</span>Champs obligatoires.</p>
                        </div>
                        <div class="row g-3 ">
                            <div class="mx-auto d-flex justify-content-center">

                                <a href="{{ route('personnels.index') }}" class="btn btn-secondary w-25 mx-2">Annuler</a>
                                <button type="submit" id="add_admin_btn"
                                    class="btn btn-primary w-25 mx-2">Enregistrer</button>
                            </div>
                        </div>
                    </form>
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
