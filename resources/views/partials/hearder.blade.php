  <!-- start: page header -->
  <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
      <div class="container-fluid">
          <nav class="navbar">
              <!-- start: toggle btn -->
              <div class="d-flex">
                  <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
                      <span class="hamburger-icon">
                          <span class="line"></span>
                          <span class="line"></span>
                          <span class="line"></span>
                      </span>
                  </button>
                  <button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
                      <span class="hamburger-icon">
                          <span class="line"></span>
                          <span class="line"></span>
                          <span class="line"></span>
                      </span>
                  </button>
                  <a href="{{ route('dashboard') }}" class="brand-icon d-flex align-items-center mx-2 mx-sm-3 text-primary">
                      {{-- <svg height="22" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path class="fill-muted"
                              d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z" />
                          <path class="fill-muted"
                              d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z" />
                          <path class="fill-secondary"
                              d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z" />
                          <path class="fill-muted"
                              d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z" />
                      </svg> --}}
                  </a>
              </div>

              <!-- start: link -->
              <ul class="header-right justify-content-end d-flex align-items-center mb-0">

                  <!-- start: quick light dark -->
                  <li class="d-none d-xl-inline-block">
                      <a class="nav-link fullscreen" href="javascript:void(0);"
                          onclick="toggleFullScreen(documentElement)">
                          <svg viewBox="0 0 16 16" width="18px" fill="currentColor"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.8279 10.172C5.73414 10.0783 5.60698 10.0256 5.4744 10.0256C5.34182 10.0256 5.21467 10.0783 5.1209 10.172L1.0249 14.268V11.5C1.0249 11.3674 0.972224 11.2402 0.878456 11.1464C0.784688 11.0527 0.657511 11 0.524902 11C0.392294 11 0.265117 11.0527 0.171349 11.1464C0.0775808 11.2402 0.0249023 11.3674 0.0249023 11.5V15.475C0.0249023 15.6076 0.0775808 15.7348 0.171349 15.8285C0.265117 15.9223 0.392294 15.975 0.524902 15.975H4.4999C4.63251 15.975 4.75969 15.9223 4.85346 15.8285C4.94722 15.7348 4.9999 15.6076 4.9999 15.475C4.9999 15.3424 4.94722 15.2152 4.85346 15.1214C4.75969 15.0277 4.63251 14.975 4.4999 14.975H1.7319L5.8279 10.879C5.92164 10.7852 5.9743 10.6581 5.9743 10.5255C5.9743 10.3929 5.92164 10.2658 5.8279 10.172ZM10.1719 10.172C10.2657 10.0783 10.3928 10.0256 10.5254 10.0256C10.658 10.0256 10.7851 10.0783 10.8789 10.172L14.9749 14.268V11.5C14.9749 11.3674 15.0276 11.2402 15.1213 11.1464C15.2151 11.0527 15.3423 11 15.4749 11C15.6075 11 15.7347 11.0527 15.8285 11.1464C15.9222 11.2402 15.9749 11.3674 15.9749 11.5V15.475C15.9749 15.6076 15.9222 15.7348 15.8285 15.8285C15.7347 15.9223 15.6075 15.975 15.4749 15.975H11.4999C11.3673 15.975 11.2401 15.9223 11.1463 15.8285C11.0526 15.7348 10.9999 15.6076 10.9999 15.475C10.9999 15.3424 11.0526 15.2152 11.1463 15.1214C11.2401 15.0277 11.3673 14.975 11.4999 14.975H14.2679L10.1719 10.879C10.0782 10.7852 10.0255 10.6581 10.0255 10.5255C10.0255 10.3929 10.0782 10.2658 10.1719 10.172ZM5.8279 5.82799C5.73414 5.92173 5.60698 5.97439 5.4744 5.97439C5.34182 5.97439 5.21467 5.92173 5.1209 5.82799L1.0249 1.73199V4.49999C1.0249 4.6326 0.972224 4.75978 0.878456 4.85355C0.784688 4.94732 0.657511 4.99999 0.524902 4.99999C0.392294 4.99999 0.265117 4.94732 0.171349 4.85355C0.0775808 4.75978 0.0249023 4.6326 0.0249023 4.49999V0.524994C0.0249023 0.392386 0.0775808 0.265209 0.171349 0.17144C0.265117 0.0776723 0.392294 0.0249939 0.524902 0.0249939H4.4999C4.63251 0.0249939 4.75969 0.0776723 4.85346 0.17144C4.94722 0.265209 4.9999 0.392386 4.9999 0.524994C4.9999 0.657602 4.94722 0.784779 4.85346 0.878547C4.75969 0.972315 4.63251 1.02499 4.4999 1.02499H1.7319L5.8279 5.12099C5.92164 5.21476 5.9743 5.34191 5.9743 5.47449C5.9743 5.60708 5.92164 5.73423 5.8279 5.82799Z" />
                              <path class="fill-secondary"
                                  d="M10.5253 5.97439C10.3927 5.97439 10.2655 5.92173 10.1718 5.82799C10.078 5.73423 10.0254 5.60708 10.0254 5.47449C10.0254 5.34191 10.078 5.21476 10.1718 5.12099L14.2678 1.02499H11.4998C11.3672 1.02499 11.24 0.972315 11.1462 0.878547C11.0525 0.784779 10.9998 0.657602 10.9998 0.524994C10.9998 0.392386 11.0525 0.265209 11.1462 0.17144C11.24 0.0776723 11.3672 0.0249939 11.4998 0.0249939H15.4748C15.6074 0.0249939 15.7346 0.0776723 15.8283 0.17144C15.9221 0.265209 15.9748 0.392386 15.9748 0.524994V4.49999C15.9748 4.6326 15.9221 4.75978 15.8283 4.85355C15.7346 4.94732 15.6074 4.99999 15.4748 4.99999C15.3422 4.99999 15.215 4.94732 15.1212 4.85355C15.0275 4.75978 14.9748 4.6326 14.9748 4.49999V1.73199L10.8788 5.82799C10.785 5.92173 10.6579 5.97439 10.5253 5.97439Z" />
                          </svg>
                      </a>
                  </li>


                  <!-- start: User dropdown-menu -->
                  <li>
                      <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                          <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#"
                            role="button" data-bs-toggle="dropdown">
                            @if (!empty(auth()->user()->administrateur->lien_photo))
                                <img class="avatar img-thumbnail rounded-circle shadow"
                                    src="{{ asset(auth()->user()->administrateur->lien_photo ?? 'assets/img/profile_av.png') }}"
                                    alt="Image de profile">
                            @else
                                <img class="avatar img-thumbnail rounded-circle shadow"
                                    src="{{ asset('assets/img/profile_av.png') }}" alt="Image de profile">
                            @endif
                        </a>
                          <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                              <div class="card border-0 w240">
                                <div class="card-body border-bottom d-flex">
                                    @if (!empty(auth()->user()->administrateur->lien_photo))
                                        <img class="avatar rounded-circle"
                                            src="{{ asset(auth()->user()->administrateur->lien_photo ?? "assets/img/profile_av.png") }}"
                                            alt="Image de profile">
                                    @else
                                        <img class="avatar rounded-circle" src="{{ asset('assets/img/profile_av.png') }}"
                                            alt="Image de profile">
                                    @endif
                                    <div class="flex-fill ms-3">
                                        @if (auth()->user()->administrateur)
                                            <h6 class="card-title mb-0">{{ auth()->user()->administrateur->nom }}
                                                {{ auth()->user()->administrateur->prenom }}</h6>
                                            <span class="text-muted">{{ auth()->user()->administrateur->email }}</span>
                                        @else
                                            <h6 class="card-title mb-0">Administrateur</h6>
                                            <span class="text-muted"></span>
                                        @endif
                                    </div>
                                </div>

                                  <div class="list-group m-2 mb-3">
                                      <a class="list-group-item list-group-item-action border-0"
                                          href="page-profile.html"><i class="w30 fa fa-user"></i>My Profile</a>
                                      <a class="list-group-item list-group-item-action border-0"
                                          href="account-settings.html"><i class="w30 fa fa-gear"></i>Settings</a>
                                      <a class="list-group-item list-group-item-action border-0"
                                          href="account-billing.html"><i class="w30 fa fa-credit-card"></i>Billing</a>
                                      <a class="list-group-item list-group-item-action border-0"
                                          href="../page-teamsboard.html"><i class="w30 fa fa-users"></i>Manage
                                          Team</a>
                                      <a class="list-group-item list-group-item-action border-0"
                                          href="../dashboard-enevt.html"><i class="w30 fa fa-calendar"></i>My
                                          Events</a>
                                      <a class="list-group-item list-group-item-action border-0"
                                          href="../page-support-ticket.html"><i class="w30 fa fa-tag"></i>Support
                                          Ticket</a>
                                  </div>
                                  <a class="btn bg-secondary text-light text-uppercase rounded-0" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>
          </nav>
      </div>
  </header>
  <!-- start: page toolbar -->
  <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
      <div class="container-fluid">
          <div class="row g-3 mb-3 align-items-center">
              <div class="col">
                  <ol class="breadcrumb bg-transparent mb-0">
                      <li class="breadcrumb-item"><a class="text-secondary" href="{{ route('dashboard') }}">Tableau
                              de bord</a>
                      </li>
                      @if (in_array(Route::currentRouteName(), ['dashboard']))
                      @else
                          <li class="breadcrumb-item active" aria-current="page">{{ $soustitre ?? 'SOUS titre' }}</li>
                      @endif
                  </ol>
              </div>
          </div>
          @if (in_array(Route::currentRouteName(), ['dashboard']))

          <h1 class="fs-5 color-900 mt-1 mb-0">Bienvenue,
              @if (auth()->check() && auth()->user()->administrateur)
                  {{ formatGender(auth()->user()->administrateur->genre) }}
                  {{ auth()->user()->administrateur->nom }}
                  {{ auth()->user()->administrateur->prenom }}
              @else
                  !
              @endif
          </h1>
          @endif <!-- .row end -->
          {{-- <div class="row align-items-center">
        <div class="col">
          <h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, Allie!</h1>
          <small class="text-muted">You have 12 new messages and 7 new notifications.</small>
        </div>
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-12 mt-2 mt-md-0">
          <!-- daterange picker -->
          <div class="input-group">
            <input class="form-control" type="text" name="daterange">
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Send Report"><i class="fa fa-envelope"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Download Reports"><i class="fa fa-download"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Generate PDF"><i class="fa fa-file-pdf-o"></i></button>
            <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Share Dashboard"><i class="fa fa-share-alt"></i></button>
          </div>
          <!-- Plugin Js -->
          <script src="../assets/js/bundle/daterangepicker.bundle.js"></script>
          <!-- Jquery Page Js -->
          <script>
            // date range picker
            $(function() {
              $('input[name="daterange"]').daterangepicker({
                opens: 'left'
              }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
              });
            })
          </script>
        </div>
      </div> <!-- .row end --> --}}
      </div>
  </div>
  <!-- start: page body -->
