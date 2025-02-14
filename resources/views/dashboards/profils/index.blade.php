@extends('layouts.dashboard')
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
        <div class="col-xxl-3 col-lg-4 col-md-4">
            <div class="list-group list-group-custom sticky-top me-xl-4" style="top: 100px;">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Details Personnels</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Change Mot de passe </a>
            </div>
        </div>
        <div class="col-xxl-8 col-lg-8 col-md-8">
            <div id="list-item-1" class="card fieldset border border-muted mt-0">

                <span class="fieldset-tile text-muted bg-body">Details Personnels:</span>
                <form method="POST" action="{{ route('updateInfos') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card">
                        <input type="text" name="idPersonne" value="{{ $personnel->id }}" style="display: none">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-9 col-sm-8">
                                    <div class="image-input avatar xxl rounded-4"
                                        style="background-image: url(../assets/img/avatar.png)">
                                        <div class="avatar-wrapper rounded-4"
                                            style="background-image: url({{ asset($personnel->lien_photo ?? 'assets/img/profile_av.png') }})">
                                        </div>
                                        <div class="file-input">
                                            <input type="file" class="form-control" name="photos" id="file-input">
                                            <label for="file-input" class="fa fa-pencil shadow text-muted"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-sm-4 col-form-label">Genre *</label>
                                <div class="col-md-9 col-sm-8">
                                    <select class="form-control form-control-lg" name="genre" id="genre">
                                        <option value="Homme"
                                            {{ old('genre', $personnel->genre) == 'Homme' ? 'selected' : '' }}>Homme
                                        </option>
                                        <option value="Femme"
                                            {{ old('genre', $personnel->genre) == 'Femme' ? 'selected' : '' }}>Femme
                                        </option>
                                    </select>
                                    @error('genre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-sm-4 col-form-label">Nom & Prénoms :*</label>
                                <div class="col-md-5 col-sm-4">
                                    <input type="text"
                                        class="form-control @error('nom') is-invalid @enderror form-control-lg"
                                        name="nom" id="nom" value="{{ old('nom', $personnel->nom) }}">
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <input type="text" class="form-control form-control-lg" name="prenom" id="prenom"
                                        value="{{ old('prenom', $personnel->prenom) }}">
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-sm-4 col-form-label">Profession *</label>
                                <div class="col-md-9 col-sm-8">
                                    <input type="text" class="form-control form-control-lg" name="profession"
                                        id="profession" value="{{ old('profession', $personnel->profession) }}">
                                    @error('profession')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-sm-4 col-form-label">Contact *</label>
                                <div class="col-md-9 col-sm-8">
                                    <input type="text" class="form-control form-control-lg" name="contact" id="contact"
                                        value="{{ old('contact', $personnel->contact) }}">
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-sm-4 col-form-label">Email</label>
                                <div class="col-md-9 col-sm-8">
                                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                                        value="{{ old('email', $personnel->email) }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-lg btn-light me-2" type="reset">Annuel</button>
                            <button class="btn btn-lg btn-primary" type="submit">Enregistrer</button>
                        </div>
                </form>
            </div>
        </div>
        <div id="list-item-2" class="card fieldset border border-muted mt-5">
            <!-- form: Change Password -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <span class="fieldset-tile text-muted bg-body">Change Password</span>
            <form action="{{ route('passwordNom') }}" method="POST">
                @csrf
                @method('post')
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{ $personnel->nom }}" disabled
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="{{ $personnel->email }}"
                                        placeholder="Email" disabled>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" value="{{ $personnel->contact }}"
                                        placeholder="Phone Number" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <h6 class="border-top pt-2 mt-2 mb-3">Mot de passe Actuel</h6>
                                <div class="mb-3">
                                    <input type="password"
                                        class="form-control  @error('motpasseActuel') is-invalid @enderror form-control-lg"
                                        placeholder="mot de passe actuel" name="motpasseActuel"
                                        value="{{ old('motpasseActuel') }}">
                                    @error('motpasseActuel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-1">
                                    <label for="">Nouveau mot de passe</label>
                                    <input type="password" class="form-control form-control-lg"
                                        placeholder="Nouveau mot de passe " name="newpasse" id="newpasse"
                                        @error('motpasseActuel') is-invalid @enderror value="{{ old('motpasseActuel') }}">
                                    @error('motpasseActuel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="confirmpasse">Confirmer le mot de passe</label>
                                    <input type="password" id="confirmpasse" name="confirmpasse"
                                        class="form-control form-control-lg" placeholder="Confirmer mot de passe">
                                    <span class="text-muted small text-danger">Minimum 8 caractères</span>
                                    <div id="password-error" class="text-danger mt-1" style="display: none;">Les mots de
                                        passe ne correspondent pas.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-lg btn-light me-2" type="reset">Annuel</button>
                        <button class="btn btn-lg btn-primary" type="submit">Envoyer</button>
                    </div>
                </div>
            </form>

        </div>


    </div>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#confirmpasse").on("keyup", function() {
                let newPassword = $("#newpasse").val();
                let confirmPassword = $(this).val();

                if (newPassword !== confirmPassword) {
                    $("#password-error").show();
                } else {
                    $("#password-error").hide();
                }
            });
        });
    </script>
@endpush
