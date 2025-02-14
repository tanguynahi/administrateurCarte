<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Plateforme des personnels de BMI ">
    <meta name="keyword" content="Plateforme des personnels de BMI-WFS">
    <link rel="icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <title>Information sur le personnel</title>
    <!-- Application vendor css url -->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('assets/css/luno-style.css') }}">
    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
</head>

<body class="layout-1" data-luno="theme-indigo">
    @include('partials.siderbar')
    <div class="wrapper">
        @include('partials.hearder')
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
            <div class="container-fluid">
                <!-- Create invoice -->
                <div class="row g-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Détails du Personnel</h5>
                        <a href="{{ route('personnels.index') }}" class="btn btn-primary">Retour</a>
                    </div>
                    <div class="col-12">
                        <div class="card print_invoice">
                            <div class="card-body ">
                                <div class="card p-3 mx-2">
                                    <div class="row  mb-2">


                                        <div class="col-md-6 col-sm-8">
                                            @if (!empty($personnel->lien_photo))
                                                <img src="{{ asset($personnel->lien_photo ?? 'assets/img/profile_av.png') }}"
                                                    alt="Avatar" style="height: 150px; width:150px;">
                                            @else
                                                <img src="{{ asset('assets/img/avatar.png') }}"
                                                    alt="Avatar" style="height: 150px; width:150px;">
                                            @endif
                                        </div>
                                           <div class="col-md-6 col-sm-4">
                                            <label for="">Matricule</label> <br>
                                              <span class="text-danger"> {{ $personnel->matricule ?? 'XXXXXXXXXXX' }}</span>
                                           </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-sm-4 col-form-label">Nom et Prénoms * :
                                            <span>{{ $personnel->genre == 'Homme' ? 'M.' : 'Mme / Mlle' }}</span></label>

                                        <div class="col-md-4 col-sm-4">
                                            <input type="text" class="form-control form-control-lg"
                                                value="{{ $personnel->nom ?? 'XXXXXXXXXXX' }}" readonly>
                                        </div>
                                        <div class="col-md-5 col-sm-4">
                                            <input type="text" class="form-control form-control-lg"
                                                value="{{ $personnel->prenom ?? '' }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-sm-4 col-form-label">Profession *</label>
                                        <div class="col-md-9 col-sm-8">
                                            <input type="text" class="form-control form-control-lg"
                                                value=" {{ $personnel->poste ?? 'XXXXXXXXXXX' }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-sm-4 col-form-label">Email *</label>
                                        <div class="col-md-9 col-sm-8">
                                            <input type="text" class="form-control form-control-lg"
                                                value="{{ $personnel->email ?? 'XXXXXXXXXXX@gmail.com' }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-sm-4 col-form-label">Contact</label>
                                        <div class="col-md-9 col-sm-8">
                                            <input type="text" class="form-control form-control-lg"
                                                value=" {{ $personnel->contact ?? '00000000000' }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-sm-4 col-form-label">Adresse</label>
                                        <div class="col-md-9 col-sm-8">
                                            <input type="text" class="form-control form-control-lg"
                                                value=" {{ $personnel->adresse ?? '00000000000' }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3 mt-5">
                                        <label class="col-md-3 col-sm-4 col-form-label">QR code</label>
                                        <div class="col-md-9 col-sm-8">
                                            <div class="form-check form-switch">
                                                {!! QrCode::size(150)->generate(route('qrcodeviews', $personnel->id)) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-12 text-center text-md-end">
                        <button type="button" class="btn btn-lg btn-primary" onclick="printInvoice();">
                            <i class="fa fa-print me-2"></i>Imprimer
                        </button>
                    </div>
                </div>
                <script src="{{ asset('assets/js/bundle/invoice.bundle.js') }}"></script>
            </div>
        </div>
        @include('partials.footer')
    </div>

    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script>
        function printInvoice() {
            var printContents = document.querySelector('.print_invoice').innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload(); // Pour éviter les bugs d'affichage après impression
        }
    </script>
</body>

</html>












{{-- <div class="container py-4">
    <div class="card p-4" id="detailsCard">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Détails du Personnel</h5>
            <a href="{{ route('personnels.index') }}" class="btn btn-primary">Retour</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 col-sm-12 text-center">
                    <div class="image-input avatar xxl rounded-4 mb-3"
                        style="background-image: url(../assets/img/profile_av.png)">
                        <div class="avatar-wrapper rounded-4"
                            style="background-image: url({{ asset($personnel->lien_photo) }})"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <p><strong>Matricule :</strong> <span class="text-primary">{{ $personnel->matricule }}</span></p>
                    <p><strong>Nom & Prénoms :</strong> {{ $personnel->genre == 'Homme' ? 'M.' : 'Mme / Mlle' }}
                        {{ $personnel->nom ?? 'XXXXXXXXXXX' }} {{ $personnel->prenom ?? '' }}</p>
                    <p><strong>Profession :</strong> {{ $personnel->profession ?? 'XXXXXXXXXXX' }}</p>
                    <p><strong>Poste :</strong> {{ $personnel->poste ?? 'XXXXXXXXXXX' }}</p>
                    <p><strong>Email :</strong> {{ $personnel->email ?? 'XXXXXXXXXXX@gmail.com' }}</p>
                    <p><strong>Contact :</strong> {{ $personnel->contact ?? '00000000000' }}</p>
                    <p><strong>Adresse :</strong> {{ $personnel->adresse ?? 'XXXXXXXXXXX' }}</p>
                    <p>{!! QrCode::size(50)->generate('Votre texte ou URL ici') !!}</p>
                </div>
            </div>
        </div>
        <div class="floating-button">
            <a class="btn btn-primary" id="printButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-cloud-arrow-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708z" />
                    <path
                        d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                </svg>
                Télécharger Reçu
            </a>
        </div>
    </div>
</div> --}}
