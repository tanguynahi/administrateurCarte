<div class="sidebar p-2 py-md-3 @@cardClass">
    <div class="container-fluid">
        <!-- sidebar: title-->
        <div class="title-text d-flex align-items-center mb-4 mt-1">
            <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">BMI</span><span>-WFS</span></h4>
        </div>
        <div class="main-menu flex-grow-1">
            <ul class="menu-list">
                <li>
                    <a class="m-link @if (in_array(Route::currentRouteName(), ['dashboard'])) active @endif " href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path class="fill-secondary" fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                        <span class="ms-2">Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a class="m-link " href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path class="fill-secondary"
                                d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <span class="ms-2">Mes Messages</span>
                    </a>
                </li>
                @if (auth()->check() && auth()->user()->administrateur)
                    {{-- {{ auth()->user()->assignRole('super-administrateur') }} --}}
                    @if ( auth()->user()->administrateur->profil == SA())
                        <li>
                            <a class="m-link @if (in_array(Route::currentRouteName(), ['personnels.index','personnels.create','personnels.show'])) active @endif " href="{{ route('personnels.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 8C6.79565 8 7.55871 7.68393 8.12132 7.12132C8.68393 6.55871 9 5.79565 9 5C9 4.20435 8.68393 3.44129 8.12132 2.87868C7.55871 2.31607 6.79565 2 6 2C5.20435 2 4.44129 2.31607 3.87868 2.87868C3.31607 3.44129 3 4.20435 3 5C3 5.79565 3.31607 6.55871 3.87868 7.12132C4.44129 7.68393 5.20435 8 6 8ZM1 14C1 14 0 14 0 13C0 12 1 9 6 9C11 9 12 12 12 13C12 14 11 14 11 14H1Z" />
                                    <path class="fill-secondary" d="M11.1464 3.14645C11.0527 3.24021 11 3.36739 11 3.5C11 3.63261 11.0527 3.75979 11.1464 3.85355C11.2402 3.94732 11.3674 4 11.5 4H15.5C15.6326 4 15.7598 3.94732 15.8536 3.85355C15.9473 3.75979 16 3.63261 16 3.5C16 3.36739 15.9473 3.24021 15.8536 3.14645C15.7598 3.05268 15.6326 3 15.5 3H11.5C11.3674 3 11.2402 3.05268 11.1464 3.14645Z" />
                                    <path class="fill-secondary" d="M11.1464 6.14645C11.2402 6.05268 11.3674 6 11.5 6H15.5C15.6326 6 15.7598 6.05268 15.8536 6.14645C15.9473 6.24021 16 6.36739 16 6.5C16 6.63261 15.9473 6.75979 15.8536 6.85355C15.7598 6.94732 15.6326 7 15.5 7H11.5C11.3674 7 11.2402 6.94732 11.1464 6.85355C11.0527 6.75979 11 6.63261 11 6.5C11 6.36739 11.0527 6.24021 11.1464 6.14645Z" />
                                    <path class="fill-secondary" d="M13.1464 9.14645C13.2402 9.05268 13.3674 9 13.5 9H15.5C15.6326 9 15.7598 9.05268 15.8536 9.14645C15.9473 9.24021 16 9.36739 16 9.5C16 9.63261 15.9473 9.75979 15.8536 9.85355C15.7598 9.94732 15.6326 10 15.5 10H13.5C13.3674 10 13.2402 9.94732 13.1464 9.85355C13.0527 9.75979 13 9.63261 13 9.5C13 9.36739 13.0527 9.24021 13.1464 9.14645Z" />
                                    <path class="fill-secondary" d="M13.1464 12.1464C13.2402 12.0527 13.3674 12 13.5 12H15.5C15.6326 12 15.7598 12.0527 15.8536 12.1464C15.9473 12.2402 16 12.3674 16 12.5C16 12.6326 15.9473 12.7598 15.8536 12.8536C15.7598 12.9473 15.6326 13 15.5 13H13.5C13.3674 13 13.2402 12.9473 13.1464 12.8536C13.0527 12.7598 13 12.6326 13 12.5C13 12.3674 13.0527 12.2402 13.1464 12.1464Z" />
                                  </svg>
                                <span class="ms-2">Personnels BMI</span>
                            </a>
                        </li>
                    @endif
                @else
                    !
                @endif

                <li>
                    <a class="m-link  @if (in_array(Route::currentRouteName(), ['utisateurProfil'])) active @endif" href="{{ route('utisateurProfil') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path class="fill-secondary"
                                d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <span class="ms-2">Profils</span>
                    </a>
                </li>


                <li>
                    <a class="m-link " href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M7.5 1v7h1V1h-1z" />
                            <path class="fill-secondary"
                                d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                        </svg>
                        <span class="ms-2">Deconnexion</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
                {{-- <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Applications" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              </svg>
              <span class="ms-2">Applications</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu-Applications">
              <li><a class="ms-link" href="app-calendar.html">Calendar</a></li>
              <li><a class="ms-link" href="app-calendar-tui.html">tui Calendar</a></li>
              <li><a class="ms-link" href="app-email.html">Email App</a></li>
              <li><a class="ms-link" href="app-chat.html">Chat app</a></li>
              <li><a class="ms-link" href="app-campaigns.html">Campaigns</a></li>
              <li><a class="ms-link" href="app-social.html">Social App</a></li>
              <li><a class="ms-link" href="app-file-manager.html">File Manager</a></li>
              <li><a class="ms-link" href="app-todo.html">Todo App</a></li>
              <li><a class="ms-link" href="app-contacts.html">Contacts</a></li>
              <li><a class="ms-link" href="app-tasks.html">Tasks</a></li>
              <li><a class="ms-link" href="app-project.html">Projects</a></li>
              <li><a class="ms-link" href="app-jkanban.html">Kanban Board</a></li>
              <li><a class="ms-link" href="app-blog.html">Blog</a></li>
            </ul>
          </li>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Account" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 13C0 13.5304 0.210714 14.0391 0.585786 14.4142C0.960859 14.7893 1.46957 15 2 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H2ZM1 3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H2C1.73478 14 1.48043 13.8946 1.29289 13.7071C1.10536 13.5196 1 13.2652 1 13V3ZM2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H6C6.13261 5 6.25979 5.05268 6.35355 5.14645C6.44732 5.24021 6.5 5.36739 6.5 5.5C6.5 5.63261 6.44732 5.75979 6.35355 5.85355C6.25979 5.94732 6.13261 6 6 6H2.5C2.36739 6 2.24021 5.94732 2.14645 5.85355C2.05268 5.75979 2 5.63261 2 5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H6C6.13261 8 6.25979 8.05268 6.35355 8.14645C6.44732 8.24021 6.5 8.36739 6.5 8.5C6.5 8.63261 6.44732 8.75979 6.35355 8.85355C6.25979 8.94732 6.13261 9 6 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H6C6.13261 10 6.25979 10.0527 6.35355 10.1464C6.44732 10.2402 6.5 10.3674 6.5 10.5C6.5 10.6326 6.44732 10.7598 6.35355 10.8536C6.25979 10.9473 6.13261 11 6 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5Z" />
                <path class="fill-secondary" d="M8.5 11C8.5 11 8 11 8 10.5C8 10 8.5 8.5 11 8.5C13.5 8.5 14 10 14 10.5C14 11 13.5 11 13.5 11H8.5ZM11 8C11.3978 8 11.7794 7.84196 12.0607 7.56066C12.342 7.27936 12.5 6.89782 12.5 6.5C12.5 6.10218 12.342 5.72064 12.0607 5.43934C11.7794 5.15804 11.3978 5 11 5C10.6022 5 10.2206 5.15804 9.93934 5.43934C9.65804 5.72064 9.5 6.10218 9.5 6.5C9.5 6.89782 9.65804 7.27936 9.93934 7.56066C10.2206 7.84196 10.6022 8 11 8V8Z" />
              </svg>
              <span class="ms-2">Account</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu-Account">
              <li><a class="ms-link" href="account-settings.html">Settings</a></li>
              <li><a class="ms-link" href="account-invoices.html">Invoice List</a></li>
              <li><a class="ms-link" href="account-create-invoice.html">Create Invoices</a></li>
              <li><a class="ms-link" href="account-billing.html">Billing</a></li>
            </ul>
          </li>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_professors" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path d="M12 15.1111L13 15.1111C13.5304 15.1111 14.0391 14.9004 14.4142 14.5253C14.7893 14.1502 15 13.6415 15 13.1111L15 2.61108C15 2.08065 14.7893 1.57194 14.4142 1.19687C14.0391 0.821798 13.5304 0.611084 13 0.611084L3 0.611085C2.46957 0.611085 1.96086 0.821799 1.58579 1.19687C1.21071 1.57194 0.999999 2.08065 0.999999 2.61109L1 13.1111C1 13.6415 1.21071 14.1502 1.58579 14.5253C1.96086 14.9004 2.46957 15.1111 3 15.1111L4 15.1111L4 14.1111L3 14.1111C2.73478 14.1111 2.48043 14.0057 2.29289 13.8182C2.10536 13.6307 2 13.3763 2 13.1111L2 2.61109C2 2.34587 2.10536 2.09151 2.29289 1.90398C2.48043 1.71644 2.73478 1.61109 3 1.61109L13 1.61108C13.2652 1.61108 13.5196 1.71644 13.7071 1.90398C13.8946 2.09151 14 2.34587 14 2.61108L14 13.1111C14 13.3763 13.8946 13.6307 13.7071 13.8182C13.5196 14.0057 13.2652 14.1111 13 14.1111L12 14.1111L12 15.1111Z" />
                <path class="fill-secondary" d="M3.55564 16C3.55564 16 2.66675 16 2.66675 15.1111C2.66675 14.2222 3.55564 11.5556 8.00008 11.5556C12.4445 11.5556 13.3334 14.2222 13.3334 15.1111C13.3334 16 12.4445 16 12.4445 16H3.55564ZM8.00008 10.6667C8.70732 10.6667 9.3856 10.3857 9.8857 9.88564C10.3858 9.38554 10.6667 8.70726 10.6667 8.00002C10.6667 7.29278 10.3858 6.6145 9.8857 6.1144C9.3856 5.61431 8.70732 5.33335 8.00008 5.33335C7.29284 5.33335 6.61456 5.61431 6.11446 6.1144C5.61437 6.6145 5.33341 7.29278 5.33341 8.00002C5.33341 8.70726 5.61437 9.38554 6.11446 9.88564C6.61456 10.3857 7.29284 10.6667 8.00008 10.6667Z" />
                <path class="fill-secondary" d="M4.5747 3.4254C4.49135 3.34205 4.44453 3.22901 4.44453 3.11113C4.44453 2.99326 4.49135 2.88021 4.5747 2.79686C4.65805 2.71351 4.7711 2.66669 4.88897 2.66669H11.1112C11.2291 2.66669 11.3421 2.71351 11.4255 2.79686C11.5088 2.88021 11.5556 2.99326 11.5556 3.11113C11.5556 3.22901 11.5088 3.34205 11.4255 3.4254C11.3421 3.50875 11.2291 3.55558 11.1112 3.55558H4.88897C4.7711 3.55558 4.65805 3.50875 4.5747 3.4254Z" />
              </svg>
              <span class="ms-2">Professors</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu_professors">
              <li><a class="ms-link" href="professors-add.html">Add Professors</a></li>
              <li><a class="ms-link" href="professors-list.html">Professors List</a></li>
              <li><a class="ms-link" href="professors-profile.html">Professors Profile</a></li>
              <li><a class="ms-link" href="professors-leave.html">Leave Request</a></li>
              <li><a class="ms-link" href="professors-attendance.html">Attendance</a></li>
            </ul>
          </li>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_students" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-secondary" d="M15 14C15 14 16 14 16 13C16 12 15 9 11 9C7 9 6 12 6 13C6 14 7 14 7 14H15ZM7.022 13C7.01461 12.999 7.00727 12.9976 7 12.996C7.001 12.732 7.167 11.966 7.76 11.276C8.312 10.629 9.282 10 11 10C12.717 10 13.687 10.63 14.24 11.276C14.833 11.966 14.998 12.733 15 12.996L14.992 12.998C14.9874 12.9988 14.9827 12.9995 14.978 13H7.022ZM11 7C11.5304 7 12.0391 6.78929 12.4142 6.41421C12.7893 6.03914 13 5.53043 13 5C13 4.46957 12.7893 3.96086 12.4142 3.58579C12.0391 3.21071 11.5304 3 11 3C10.4696 3 9.96086 3.21071 9.58579 3.58579C9.21071 3.96086 9 4.46957 9 5C9 5.53043 9.21071 6.03914 9.58579 6.41421C9.96086 6.78929 10.4696 7 11 7ZM14 5C14 5.39397 13.9224 5.78407 13.7716 6.14805C13.6209 6.51203 13.3999 6.84274 13.1213 7.12132C12.8427 7.3999 12.512 7.62087 12.1481 7.77164C11.7841 7.9224 11.394 8 11 8C10.606 8 10.2159 7.9224 9.85195 7.77164C9.48797 7.62087 9.15725 7.3999 8.87868 7.12132C8.6001 6.84274 8.37913 6.51203 8.22836 6.14805C8.0776 5.78407 8 5.39397 8 5C8 4.20435 8.31607 3.44129 8.87868 2.87868C9.44129 2.31607 10.2044 2 11 2C11.7956 2 12.5587 2.31607 13.1213 2.87868C13.6839 3.44129 14 4.20435 14 5Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.216 14C5.06776 13.6878 4.99382 13.3455 5 13C5 11.645 5.68 10.25 6.936 9.28C6.30909 9.08684 5.65595 8.99237 5 9C1 9 0 12 0 13C0 14 1 14 1 14H5.216Z" />
                <path d="M4.5 8C5.16304 8 5.79893 7.73661 6.26777 7.26777C6.73661 6.79893 7 6.16304 7 5.5C7 4.83696 6.73661 4.20107 6.26777 3.73223C5.79893 3.26339 5.16304 3 4.5 3C3.83696 3 3.20107 3.26339 2.73223 3.73223C2.26339 4.20107 2 4.83696 2 5.5C2 6.16304 2.26339 6.79893 2.73223 7.26777C3.20107 7.73661 3.83696 8 4.5 8Z" />
              </svg>
              <span class="ms-2">Students</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu_students">
              <li><a class="ms-link" href="students-add.html">Add Students</a></li>
              <li><a class="ms-link" href="students-list.html">Students List</a></li>
              <li><a class="ms-link" href="students-profile.html">Students Profile</a></li>
            </ul>
          </li>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_course" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-secondary" d="M5 10.5C5 10.3674 5.05268 10.2402 5.14645 10.1464C5.24021 10.0527 5.36739 10 5.5 10H7.5C7.63261 10 7.75979 10.0527 7.85355 10.1464C7.94732 10.2402 8 10.3674 8 10.5C8 10.6326 7.94732 10.7598 7.85355 10.8536C7.75979 10.9473 7.63261 11 7.5 11H5.5C5.36739 11 5.24021 10.9473 5.14645 10.8536C5.05268 10.7598 5 10.6326 5 10.5ZM5 8.5C5 8.36739 5.05268 8.24021 5.14645 8.14645C5.24021 8.05268 5.36739 8 5.5 8H10.5C10.6326 8 10.7598 8.05268 10.8536 8.14645C10.9473 8.24021 11 8.36739 11 8.5C11 8.63261 10.9473 8.75979 10.8536 8.85355C10.7598 8.94732 10.6326 9 10.5 9H5.5C5.36739 9 5.24021 8.94732 5.14645 8.85355C5.05268 8.75979 5 8.63261 5 8.5ZM5 6.5C5 6.36739 5.05268 6.24021 5.14645 6.14645C5.24021 6.05268 5.36739 6 5.5 6H10.5C10.6326 6 10.7598 6.05268 10.8536 6.14645C10.9473 6.24021 11 6.36739 11 6.5C11 6.63261 10.9473 6.75979 10.8536 6.85355C10.7598 6.94732 10.6326 7 10.5 7H5.5C5.36739 7 5.24021 6.94732 5.14645 6.85355C5.05268 6.75979 5 6.63261 5 6.5ZM5 4.5C5 4.36739 5.05268 4.24021 5.14645 4.14645C5.24021 4.05268 5.36739 4 5.5 4H10.5C10.6326 4 10.7598 4.05268 10.8536 4.14645C10.9473 4.24021 11 4.36739 11 4.5C11 4.63261 10.9473 4.75979 10.8536 4.85355C10.7598 4.94732 10.6326 5 10.5 5H5.5C5.36739 5 5.24021 4.94732 5.14645 4.85355C5.05268 4.75979 5 4.63261 5 4.5Z" />
                <path d="M3 0H13C13.5304 0 14.0391 0.210714 14.4142 0.585786C14.7893 0.960859 15 1.46957 15 2V14C15 14.5304 14.7893 15.0391 14.4142 15.4142C14.0391 15.7893 13.5304 16 13 16H3C2.46957 16 1.96086 15.7893 1.58579 15.4142C1.21071 15.0391 1 14.5304 1 14V13H2V14C2 14.2652 2.10536 14.5196 2.29289 14.7071C2.48043 14.8946 2.73478 15 3 15H13C13.2652 15 13.5196 14.8946 13.7071 14.7071C13.8946 14.5196 14 14.2652 14 14V2C14 1.73478 13.8946 1.48043 13.7071 1.29289C13.5196 1.10536 13.2652 1 13 1H3C2.73478 1 2.48043 1.10536 2.29289 1.29289C2.10536 1.48043 2 1.73478 2 2V3H1V2C1 1.46957 1.21071 0.960859 1.58579 0.585786C1.96086 0.210714 2.46957 0 3 0V0Z" />
                <path class="fill-secondary" d="M1 5V4.5C1 4.36739 1.05268 4.24021 1.14645 4.14645C1.24021 4.05268 1.36739 4 1.5 4C1.63261 4 1.75979 4.05268 1.85355 4.14645C1.94732 4.24021 2 4.36739 2 4.5V5H2.5C2.63261 5 2.75979 5.05268 2.85355 5.14645C2.94732 5.24021 3 5.36739 3 5.5C3 5.63261 2.94732 5.75979 2.85355 5.85355C2.75979 5.94732 2.63261 6 2.5 6H0.5C0.367392 6 0.240215 5.94732 0.146447 5.85355C0.0526784 5.75979 0 5.63261 0 5.5C0 5.36739 0.0526784 5.24021 0.146447 5.14645C0.240215 5.05268 0.367392 5 0.5 5H1ZM1 8V7.5C1 7.36739 1.05268 7.24021 1.14645 7.14645C1.24021 7.05268 1.36739 7 1.5 7C1.63261 7 1.75979 7.05268 1.85355 7.14645C1.94732 7.24021 2 7.36739 2 7.5V8H2.5C2.63261 8 2.75979 8.05268 2.85355 8.14645C2.94732 8.24021 3 8.36739 3 8.5C3 8.63261 2.94732 8.75979 2.85355 8.85355C2.75979 8.94732 2.63261 9 2.5 9H0.5C0.367392 9 0.240215 8.94732 0.146447 8.85355C0.0526784 8.75979 0 8.63261 0 8.5C0 8.36739 0.0526784 8.24021 0.146447 8.14645C0.240215 8.05268 0.367392 8 0.5 8H1ZM1 11V10.5C1 10.3674 1.05268 10.2402 1.14645 10.1464C1.24021 10.0527 1.36739 10 1.5 10C1.63261 10 1.75979 10.0527 1.85355 10.1464C1.94732 10.2402 2 10.3674 2 10.5V11H2.5C2.63261 11 2.75979 11.0527 2.85355 11.1464C2.94732 11.2402 3 11.3674 3 11.5C3 11.6326 2.94732 11.7598 2.85355 11.8536C2.75979 11.9473 2.63261 12 2.5 12H0.5C0.367392 12 0.240215 11.9473 0.146447 11.8536C0.0526784 11.7598 0 11.6326 0 11.5C0 11.3674 0.0526784 11.2402 0.146447 11.1464C0.240215 11.0527 0.367392 11 0.5 11H1Z" />
              </svg>
              <span class="ms-2">Courses</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu_course">
              <li><a class="ms-link" href="course-add.html">Add Courses</a></li>
              <li><a class="ms-link" href="course-list.html">All Courses</a></li>
              <li><a class="ms-link" href="course-info.html">Courses Info</a></li>
              <li><a class="ms-link" href="course-episodes.html">Episodes</a></li>
              <li><a class="ms-link" href="course-books.html">Books</a></li>
            </ul>
          </li>
          <li class="divider py-2 lh-sm"><span class="small">INSTRUCTOR</span></li>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_management" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-secondary" d="M8 14L11 11.2844L8.90811 5.65127L10.9968 3H5L7.09189 5.65127L5 11.2844L8 14Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7143 0.857143H2.28571C1.49674 0.857143 0.857143 1.49674 0.857143 2.28571V13.7143C0.857143 14.5033 1.49674 15.1429 2.28571 15.1429H13.7143C14.5033 15.1429 15.1429 14.5033 15.1429 13.7143V2.28571C15.1429 1.49674 14.5033 0.857143 13.7143 0.857143ZM2.28571 0C1.02335 0 0 1.02335 0 2.28571V13.7143C0 14.9767 1.02335 16 2.28571 16H13.7143C14.9767 16 16 14.9767 16 13.7143V2.28571C16 1.02335 14.9767 0 13.7143 0H2.28571Z" />
              </svg>
              <span class="ms-2">Management</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu_management">
              <li><a class="ms-link" href="mgmt-classes.html">Classes</a></li>
              <li><a class="ms-link" href="mgmt-departments.html">Departments</a></li>
              <li><a class="ms-link" href="mgmt-examlist.html">Exam List</a></li>
              <li><a class="ms-link" href="mgmt-holiday.html">Holiday</a></li>
              <li><a class="ms-link" href="mgmt-timetable.html">Time Table</a></li>
            </ul>
          </li>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu_administrator" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path d="M6 8C6.79565 8 7.55871 7.68393 8.12132 7.12132C8.68393 6.55871 9 5.79565 9 5C9 4.20435 8.68393 3.44129 8.12132 2.87868C7.55871 2.31607 6.79565 2 6 2C5.20435 2 4.44129 2.31607 3.87868 2.87868C3.31607 3.44129 3 4.20435 3 5C3 5.79565 3.31607 6.55871 3.87868 7.12132C4.44129 7.68393 5.20435 8 6 8ZM1 14C1 14 0 14 0 13C0 12 1 9 6 9C11 9 12 12 12 13C12 14 11 14 11 14H1Z" />
                <path class="fill-secondary" d="M11.1464 3.14645C11.0527 3.24021 11 3.36739 11 3.5C11 3.63261 11.0527 3.75979 11.1464 3.85355C11.2402 3.94732 11.3674 4 11.5 4H15.5C15.6326 4 15.7598 3.94732 15.8536 3.85355C15.9473 3.75979 16 3.63261 16 3.5C16 3.36739 15.9473 3.24021 15.8536 3.14645C15.7598 3.05268 15.6326 3 15.5 3H11.5C11.3674 3 11.2402 3.05268 11.1464 3.14645Z" />
                <path class="fill-secondary" d="M11.1464 6.14645C11.2402 6.05268 11.3674 6 11.5 6H15.5C15.6326 6 15.7598 6.05268 15.8536 6.14645C15.9473 6.24021 16 6.36739 16 6.5C16 6.63261 15.9473 6.75979 15.8536 6.85355C15.7598 6.94732 15.6326 7 15.5 7H11.5C11.3674 7 11.2402 6.94732 11.1464 6.85355C11.0527 6.75979 11 6.63261 11 6.5C11 6.36739 11.0527 6.24021 11.1464 6.14645Z" />
                <path class="fill-secondary" d="M13.1464 9.14645C13.2402 9.05268 13.3674 9 13.5 9H15.5C15.6326 9 15.7598 9.05268 15.8536 9.14645C15.9473 9.24021 16 9.36739 16 9.5C16 9.63261 15.9473 9.75979 15.8536 9.85355C15.7598 9.94732 15.6326 10 15.5 10H13.5C13.3674 10 13.2402 9.94732 13.1464 9.85355C13.0527 9.75979 13 9.63261 13 9.5C13 9.36739 13.0527 9.24021 13.1464 9.14645Z" />
                <path class="fill-secondary" d="M13.1464 12.1464C13.2402 12.0527 13.3674 12 13.5 12H15.5C15.6326 12 15.7598 12.0527 15.8536 12.1464C15.9473 12.2402 16 12.3674 16 12.5C16 12.6326 15.9473 12.7598 15.8536 12.8536C15.7598 12.9473 15.6326 13 15.5 13H13.5C13.3674 13 13.2402 12.9473 13.1464 12.8536C13.0527 12.7598 13 12.6326 13 12.5C13 12.3674 13.0527 12.2402 13.1464 12.1464Z" />
              </svg>
              <span class="ms-2">Administrator</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu_administrator">
              <li><a class="ms-link" href="admin-hostel.html">Hostel</a></li>
              <li><a class="ms-link" href="admin-library.html">Library</a></li>
              <li><a class="ms-link" href="admin-transport.html">Transport</a></li>
            </ul>
          </li> --}}
            </ul>
            {{-- <ul class="menu-list">
          <li class="divider py-2 lh-sm"><span class="small">RESOURCES</span><br> <small class="text-muted">you need to know about LUNO</small></li>
          <li class="collapsed">
            <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path d="M5.33801 1.59C4.38559 1.85248 3.43965 2.1379 2.50101 2.446C2.41529 2.47376 2.3391 2.52504 2.28111 2.59399C2.22312 2.66295 2.18567 2.7468 2.17301 2.836C1.61901 6.993 2.89901 10.026 4.42601 12.024C5.07252 12.8784 5.84341 13.6311 6.71301 14.257C7.05901 14.501 7.36501 14.677 7.60601 14.79C7.72601 14.847 7.82401 14.885 7.89901 14.908C7.93181 14.9195 7.96562 14.9279 8.00001 14.933C8.03398 14.9275 8.06743 14.9191 8.10001 14.908C8.17601 14.885 8.27401 14.847 8.39401 14.79C8.63401 14.677 8.94101 14.5 9.28701 14.257C10.1566 13.6311 10.9275 12.8784 11.574 12.024C13.101 10.027 14.381 6.993 13.827 2.836C13.8145 2.74676 13.777 2.66285 13.719 2.59388C13.661 2.52491 13.5848 2.47366 13.499 2.446C12.848 2.233 11.749 1.886 10.662 1.591C9.55201 1.29 8.53101 1.067 8.00001 1.067C7.47001 1.067 6.44801 1.289 5.33801 1.59ZM5.07201 0.56C6.15701 0.265 7.31001 0 8.00001 0C8.69001 0 9.84301 0.265 10.928 0.56C12.038 0.86 13.157 1.215 13.815 1.43C14.0901 1.52085 14.334 1.68747 14.5187 1.9107C14.7034 2.13394 14.8213 2.40474 14.859 2.692C15.455 7.169 14.072 10.487 12.394 12.682C11.6824 13.621 10.834 14.4479 9.87701 15.135C9.5461 15.3728 9.19549 15.5819 8.82901 15.76C8.54901 15.892 8.24801 16 8.00001 16C7.75201 16 7.45201 15.892 7.17101 15.76C6.80452 15.5819 6.45391 15.3728 6.12301 15.135C5.16603 14.4478 4.31759 13.621 3.60601 12.682C1.92801 10.487 0.545005 7.169 1.14101 2.692C1.17869 2.40474 1.29665 2.13394 1.48132 1.9107C1.666 1.68747 1.9099 1.52085 2.18501 1.43C3.1402 1.11681 4.10281 0.826725 5.07201 0.56Z" />
                <path class="fill-secondary" d="M8 5.38462C8.21217 5.38462 8.41566 5.46566 8.56569 5.60992C8.71571 5.75418 8.8 5.94983 8.8 6.15385V6.53846H7.2V6.15385C7.2 5.94983 7.28429 5.75418 7.43431 5.60992C7.58434 5.46566 7.78783 5.38462 8 5.38462ZM9.2 6.53846V6.15385C9.2 5.84783 9.07357 5.55434 8.84853 5.33795C8.62348 5.12157 8.31826 5 8 5C7.68174 5 7.37652 5.12157 7.15147 5.33795C6.92643 5.55434 6.8 5.84783 6.8 6.15385V6.53846C6.58783 6.53846 6.38434 6.61951 6.23431 6.76376C6.08429 6.90802 6 7.10368 6 7.30769V9.23077C6 9.43478 6.08429 9.63044 6.23431 9.7747C6.38434 9.91896 6.58783 10 6.8 10H9.2C9.41217 10 9.61566 9.91896 9.76569 9.7747C9.91571 9.63044 10 9.43478 10 9.23077V7.30769C10 7.10368 9.91571 6.90802 9.76569 6.76376C9.61566 6.61951 9.41217 6.53846 9.2 6.53846Z" />
              </svg>
              <span class="ms-2">Authentication</span>
              <span class="arrow fa fa-angle-right ms-auto text-end"></span>
            </a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu-Authentication">
              <li><a class="ms-link" href="../auth-404.html">404</a></li>
              <li><a class="ms-link" href="../auth-403.html">403</a></li>
              <li><a class="ms-link" href="../auth-500.html">500</a></li>
              <li><a class="ms-link" href="../auth-signin.html">Sign in</a></li>
              <li><a class="ms-link" href="../auth-signup.html">Sign up</a></li>
              <li><a class="ms-link" href="../auth-password-reset.html">Password reset</a></li>
              <li><a class="ms-link" href="../auth-two-step.html">2-Step Authentication</a></li>
              <li><a class="ms-link" href="../auth-lockscreen.html">Lockscreen</a></li>
              <li><a class="ms-link" href="../auth-maintenance.html">Maintenance</a></li>
            </ul>
          </li>
          <li>
            <a class="m-link" href="../docs/index.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-secondary" d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
              </svg>
              <span class="ms-2">Documentation</span>
            </a>
          </li>
          <li>
            <a class="m-link" href="../docs/doc-changelog.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path class="fill-secondary" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg>
              <span class="ms-2">Changelog</span>
              <span id="Changelog"></span>
            </a>
          </li>
        </ul> --}}
        </div>

    </div>
</div>
