@extends('layouts.dashboard')
@section('content')
    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 g-xl-3 g-2 mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 512.039 512.039">
                            <path class="fill-secondary"
                                d="m255.874 67.497c-111.609-97.618-253.518-11.848-255.845 104.427-.593 29.633 7.961 58.498 24.988 85.109h110.364l19.63-32.718c5.7-9.499 19.494-9.805 25.517-.335l41.417 65.083 60.373-127.451c5.265-11.121 20.956-11.474 26.763-.69l51.752 96.111h125.898c93.262-145.76-91.055-311.811-230.857-189.536z" />
                            <path class="fill-muted"
                                d="m338.667 279.144-41.936-77.881-59.301 125.19c-5.045 10.651-19.884 11.576-26.211 1.632l-42.97-67.523-11.513 19.188c-2.711 4.518-7.593 7.282-12.862 7.282h-95.128c2.982 3.121-12.911-12.74 196.548 195.634 5.85 5.821 15.307 5.822 21.158 0 206.236-205.168 193.572-192.519 196.548-195.634h-111.126c-5.519.001-10.591-3.029-13.207-7.888z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="text-muted">Heart rate</div>
                        <div><span class="h4">104</span> <small class="text-muted">bpm</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 461.187 461.187">
                            <path class="fill-secondary"
                                d="M368.153,40.72c-12.48-11-23.24-20.52-23.24-34.92c-0.064-3.176-2.624-5.736-5.8-5.8c-8.44,0-57.96,53.04-57.96,89    c-0.012,32.099,25.999,58.13,58.098,58.142c32.099,0.012,58.13-25.999,58.142-58.098c0-0.015,0-0.03,0-0.044    C397.393,66.6,381.873,52.84,368.153,40.72z" />
                            <path class="fill-muted"
                                d="M291.713,179.88L291.713,179.88c-35.4-31.28-69.04-60.8-69.04-105.88c0.044-3.313-2.606-6.036-5.919-6.08    c-0.054-0.001-0.107-0.001-0.161,0c-14,0-152.8,142.2-152.8,240c-0.015,84.632,68.581,153.252,153.213,153.267    c84.632,0.015,153.252-68.581,153.267-153.213c0-0.018,0-0.036,0-0.054C370.433,249.36,330.433,214.04,291.713,179.88z     M217.193,417.08c-3.126,0-5.66-2.534-5.66-5.66c0-3.126,2.534-5.66,5.66-5.66c49.208-0.044,89.094-39.912,89.16-89.12    c0-3.126,2.534-5.66,5.66-5.66c3.126,0,5.66,2.534,5.66,5.66C317.607,372.1,272.653,417.036,217.193,417.08z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="text-muted">Blood</div>
                        <div><span class="h4">112/90</span> <small class="text-muted">mm/Hg</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 511.451 511.451">
                            <path class="fill-secondary"
                                d="m489.02 140.845c-119.142-185.894-66.418-185.788-173.458-8.819-6.4 9.43-25.208 42.91-17.155 75.25 41.902 160.953 264.669 66.19 190.613-66.431z" />
                            <path class="fill-muted"
                                d="m363.571 323.156c-79.018-20.807-125-110.689-92.294-184.513-109.163-173.981-75.237-171.439-140.009-63.066-76.083 140.275-131.681 203.444-122.883 278.275 25.714 230.396 375.914 197.935 355.186-30.696z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="text-muted">Water</div>
                        <div><span class="h4">4</span> <small class="text-muted">Litres</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 24 24">
                            <path class="fill-muted"
                                d="m7.25 15.5c-.853 0-1.622-.473-2.007-1.233-.386-.765-.311-1.665.196-2.352l5.823-7.915h-8.512c-1.516 0-2.75 1.233-2.75 2.75v9.5c0 1.517 1.234 2.75 2.75 2.75h5.027l.781-3.5z" />
                            <path class="fill-muted"
                                d="m22.241 7h-.241v-.25c0-1.517-1.234-2.75-2.75-2.75h-2.783c-.009.084-.016.169-.035.253l-.973 4.247h1.541c.861 0 1.633.479 2.015 1.25.382.769.297 1.673-.222 2.359l-5.22 6.891h5.677c1.516 0 2.75-1.233 2.75-2.75v-.25h.241c.965 0 1.75-.785 1.75-1.75v-5.5c0-.965-.785-1.75-1.75-1.75z" />
                            <path class="fill-secondary"
                                d="m9.803 21c-.106 0-.213-.022-.315-.069-.32-.148-.493-.5-.417-.844l1.358-6.087h-3.179c-.283 0-.542-.159-.669-.412-.127-.252-.103-.555.065-.783l6.989-9.5c.209-.287.592-.388.917-.237.323.148.498.502.418.849l-1.393 6.083h3.423c.285 0 .545.161.671.416.127.255.098.56-.074.787l-7.197 9.5c-.145.192-.368.297-.597.297z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="text-muted">Glucose</div>
                        <div><span class="h4">98</span> <small class="text-muted">mg/dl</small></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 512 512">
                            <path class="fill-muted"
                                d="M256,496A240,240,0,0,0,425.706,86.294,240,240,0,0,0,86.294,425.706,238.432,238.432,0,0,0,256,496ZM97.608,97.608A224,224,0,0,1,414.392,414.392,224,224,0,0,1,97.608,97.608Z" />
                            <path class="fill-muted"
                                d="M256,464c114.691,0,208-93.309,208-208S370.691,48,256,48,48,141.309,48,256,141.309,464,256,464Zm0-400c105.869,0,192,86.131,192,192S361.869,448,256,448,64,361.869,64,256,150.131,64,256,64Z" />
                            <path class="fill-secondary"
                                d="M125.27,385.423c.052.061.107.118.16.178.1.109.19.223.295.328,3.263,3.284,6.7,6.485,10.225,9.516a8.053,8.053,0,0,0,1.138.846,183.189,183.189,0,0,0,105.288,43.2A32.08,32.08,0,0,0,248,440c.789,0,1.569-.039,2.344-.1,1.879.057,3.763.1,5.656.1a183.721,183.721,0,0,0,142.749-68.041c.061-.058.124-.112.183-.172a7.909,7.909,0,0,0,.571-.631l.008-.009,0,0,.04-.05a182.43,182.43,0,0,0,15.335-22.259c.033-.057.058-.116.09-.174.07-.126.136-.254.2-.384.051-.1.1-.21.146-.316A182.865,182.865,0,0,0,440,256c0-1.893-.038-3.777-.1-5.656.056-.775.1-1.555.1-2.344a31.984,31.984,0,0,0-.5-5.624,183.2,183.2,0,0,0-43.241-105.333,7.992,7.992,0,0,0-1.612-1.881q-3.822-4.379-7.912-8.509a7.991,7.991,0,0,0-1.706-1.7A183.393,183.393,0,0,0,256,72C154.542,72,72,154.542,72,256a182.917,182.917,0,0,0,16.475,76.071,7.948,7.948,0,0,0,.791,1.692A183.638,183.638,0,0,0,97.945,350.1a7.941,7.941,0,0,0,1.123,1.862,185.27,185.27,0,0,0,25.915,33.088C125.076,385.178,125.169,385.3,125.27,385.423ZM152,384a15.728,15.728,0,0,1-6.153-1.256q-4.191-3.648-8.134-7.565A15.993,15.993,0,1,1,152,384Zm13.065,13.2a31.883,31.883,0,0,0,3.14-1.623,31.805,31.805,0,0,0,.721,4.05Q166.976,398.442,165.065,397.2Zm11.279-49.935a15.989,15.989,0,1,1,5.434,9.042A32.008,32.008,0,0,0,176.344,347.265ZM200,408a16,16,0,1,1,16-16A16.019,16.019,0,0,1,200,408Zm16.629,11.329q.6-.363,1.175-.753c.135.384.279.764.428,1.142C217.7,419.594,217.164,419.458,216.629,419.329ZM216,312a16,16,0,1,1,16,16A16.019,16.019,0,0,1,216,312Zm8,48a16,16,0,1,1,16,16A16.019,16.019,0,0,1,224,360Zm25.894,63.877q-2.716-.1-5.413-.28a16,16,0,1,1,5.413.28Zm18.686-40.355a32.165,32.165,0,0,0-4.1-2.942,32.165,32.165,0,0,0,2.942-4.1,32.165,32.165,0,0,0,4.1,2.942A32.165,32.165,0,0,0,268.58,383.522ZM272,352a16,16,0,1,1,16,16A16.019,16.019,0,0,1,272,352Zm24,64a16,16,0,1,1,16-16A16.019,16.019,0,0,1,296,416Zm30.908-7.721a31.862,31.862,0,0,0,.887-4.7,31.9,31.9,0,0,0,4.367,2.144C330.429,406.605,328.675,407.453,326.908,408.279ZM344,392a16,16,0,1,1,16-16A16.019,16.019,0,0,1,344,392Zm44.326-32.607a16,16,0,1,1,11.6-16.824A168.819,168.819,0,0,1,388.326,359.393Zm-15.587-80.129A15.821,15.821,0,0,1,368,280a16,16,0,1,1,8.085-29.791,31.843,31.843,0,0,0,7.287,18.2c-.032.111-.071.22-.105.33A32.253,32.253,0,0,0,372.739,279.264ZM400,312a16,16,0,1,1,16-16A16.019,16.019,0,0,1,400,312Zm23.877-62.106a16,16,0,1,1-.28-5.413Q423.782,247.176,423.877,249.894Zm-4.548-33.265c.129.535.265,1.066.389,1.6-.378-.149-.758-.293-1.142-.428Q418.964,217.225,419.329,216.629ZM397.2,165.065q1.238,1.914,2.427,3.861a31.805,31.805,0,0,0-4.05-.721A31.883,31.883,0,0,0,397.2,165.065ZM392,184a16,16,0,1,1-16,16A16.019,16.019,0,0,1,392,184Zm-39.656-35.265a32.031,32.031,0,0,0,5.434-9.042,15.956,15.956,0,0,1,17.4-1.98q3.914,3.942,7.565,8.134A15.728,15.728,0,0,1,384,152a16,16,0,1,1-31.656-3.265Zm-5.114,27.579a32,32,0,0,0,9.066,5.459A15.994,15.994,0,1,1,344,176a16.211,16.211,0,0,1,3.055.29C347.114,176.3,347.172,176.3,347.23,176.314ZM327.679,164.49A32.13,32.13,0,0,0,328,160a31.889,31.889,0,0,0,8.73-1.22c.142.658.308,1.307.49,1.95A31.774,31.774,0,0,0,327.679,164.49ZM328,112a16,16,0,1,1-16,16A16.019,16.019,0,0,1,328,112Zm-40-8a31.8,31.8,0,0,0-2.99-13.486,166.478,166.478,0,0,1,30.069,8.22A32.041,32.041,0,0,0,296,128a31.819,31.819,0,0,0-17.8,5.424,31.9,31.9,0,0,0-2.038-4.614A32.135,32.135,0,0,0,288,104Zm8,72a16,16,0,0,1,0-32,15.821,15.821,0,0,1,4.739.736,32.238,32.238,0,0,0,10.525,10.525A15.821,15.821,0,0,1,312,160,16.019,16.019,0,0,1,296,176Zm16,32a16,16,0,1,1-16-16A16.019,16.019,0,0,1,312,208ZM256,88a15.987,15.987,0,0,1,9.225,29.053,31.817,31.817,0,0,0-22.773-4.562A15.826,15.826,0,0,1,240,104,16.019,16.019,0,0,1,256,88Zm-8,40a16,16,0,1,1-16,16A16.019,16.019,0,0,1,248,128Zm0,48a16,16,0,1,1-16,16A16.019,16.019,0,0,1,248,176ZM208,96a16,16,0,1,1-16,16A16.019,16.019,0,0,1,208,96Zm0,48a15.949,15.949,0,0,1,8.085,2.209,31.85,31.85,0,0,0,7.288,18.2A16,16,0,1,1,208,144Zm0,48a31.627,31.627,0,0,0,8.026-1.039c-.011.346-.026.691-.026,1.039a31.984,31.984,0,0,0,49.8,26.576,31.992,31.992,0,0,0,60.392,0,31.922,31.922,0,0,0,38.384-2.1A32.167,32.167,0,0,0,381.424,230.2a32.076,32.076,0,0,0-2.21,3.838A32,32,0,1,0,368,296a31.816,31.816,0,0,0,5.424,17.8A32.051,32.051,0,0,0,352,344c0,.342.015.68.026,1.02a31.965,31.965,0,0,0-32.174,10.019c.1-1,.148-2.014.148-3.039a31.993,31.993,0,0,0-59.42-16.478,32.165,32.165,0,0,0-4.1-2.942A31.992,31.992,0,1,0,200,312c0,.342.015.68.026,1.02a32.008,32.008,0,0,0-39.3,24.2A31.889,31.889,0,0,0,152,336c-.342,0-.68.015-1.02.026a32,32,0,0,0-14.5-35.446A31.925,31.925,0,0,0,133.132,256a31.933,31.933,0,0,0,5.444-41.8,32.006,32.006,0,0,0,20.4-38.222c.34.011.678.026,1.02.026a31.816,31.816,0,0,0,17.8-5.424A32.051,32.051,0,0,0,208,192Zm-31.763-83.825a31.294,31.294,0,0,0,.084,8.315A31.826,31.826,0,0,0,167.929,113Q172.009,110.473,176.237,108.175ZM160,128a16,16,0,1,1-16,16A16.019,16.019,0,0,1,160,128Zm-31.845,19.135a31.917,31.917,0,0,0,.865,4.891c-.34-.011-.678-.026-1.02-.026a32.037,32.037,0,0,0-4.062.267C125.308,150.526,126.719,148.82,128.155,147.135ZM128,168a16,16,0,1,1-16,16A16.019,16.019,0,0,1,128,168ZM98.734,196.921a32.136,32.136,0,0,0,2.69,4.883,31.778,31.778,0,0,0-5.241,2.4Q97.377,200.522,98.734,196.921ZM112,216a16,16,0,1,1-16,16A16.019,16.019,0,0,1,112,216ZM88.036,258.826C88.02,257.885,88,256.945,88,256s.02-1.885.036-2.826A32.14,32.14,0,0,0,90.868,256,32.14,32.14,0,0,0,88.036,258.826ZM96,280a16,16,0,1,1,16,16A16.019,16.019,0,0,1,96,280Zm15.446,61.51q-4.028-6.782-7.423-13.957A15.992,15.992,0,1,1,120,344,15.774,15.774,0,0,1,111.446,341.51Z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="text-muted">Cholesterol</div>
                        <div><span class="h4">94</span> <small class="text-muted">mg/dl</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->
    {{-- <div class="row mb-5">
        <div class="col-12">
            <div class="card py-3 bg-primary-gradient text-light">
                <div class="card-body d-flex align-items-center flex-column flex-md-row">
                    <img class="w240" src="../assets/img/working_out.svg" alt="" />
                    <div class="media-body ms-md-5 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                        <h4 class="px-xl-4 px-3 fw-bold">Your yesterday activity</h4>
                        <div class="px-xl-4 px-3 mb-4">Don't stop and improve your activity</div>
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                            <div class="py-2 px-xl-4 px-3">
                                <h5 class="mb-1">900 kcal</h5>
                                <div>Burned calories</div>
                            </div>
                            <div class="py-2 px-xl-4 px-3">
                                <h5 class="mb-1">80:20:09 min</h5>
                                <div>Training</div>
                            </div>
                            <div class="py-2 px-xl-4 px-3">
                                <h5 class="mb-1">11:21:10 min</h5>
                                <div>On legs</div>
                            </div>
                            <div class="py-2 px-xl-4 px-3">
                                <h5 class="mb-1">12,900</h5>
                                <div>Steps</div>
                            </div>
                            <div class="py-2 px-xl-4 px-3">
                                <h5 class="mb-1">12 km</h5>
                                <div>Distance</div>
                            </div>
                            <div class="py-2 px-xl-4 px-3">
                                <h5 class="mb-1">18</h5>
                                <div>Floors</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .row end -->
    <div class="row g-3 mb-5 row-deck">
        <div class="col-12">
            <h5 class="mb-0">Todays Plan</h5>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 512.001 512.001">
                            <circle class="fill-primary" cx="255.995" cy="63.999" r="63.999" />
                            <path class="fill-muted"
                                d="M380.385,465.702L301.57,495.26l39.194,14.698c16.868,6.263,35.068-2.415,41.202-18.733    C385.231,482.518,384.265,473.399,380.385,465.702z" />
                            <path class="fill-muted"
                                d="M107.238,354.024c-16.515-6.125-34.984,2.188-41.202,18.733c-6.203,16.547,2.188,34.984,18.733,41.202l34.523,12.945    l91.143-34.183L107.238,354.024z" />
                            <path class="fill-muted"
                                d="M445.964,372.758c-6.219-16.547-24.687-24.859-41.202-18.733l-255.995,95.998c-16.547,6.219-24.937,24.655-18.734,41.202    c6.133,16.313,24.329,24.998,41.202,18.733l255.995-95.998C443.778,407.742,452.168,389.305,445.964,372.758z" />
                            <path class="fill-primary"
                                d="M479.996,255.995h-76.217l-55.155-110.31c-5.732-11.453-17.392-17.978-29.409-17.687H256h-63.218    c-12.015-0.291-23.66,6.235-29.405,17.687l-55.155,110.31H32.005c-17.671,0-31.999,14.328-31.999,31.999    c0,17.671,14.328,31.999,31.999,31.999h95.998c12.125,0,23.203-6.844,28.624-17.687l35.374-70.748v120.08l63.997,23.997    l64.001-24.004V231.558l35.374,70.748c5.422,10.844,16.5,17.687,28.624,17.687h95.998c17.671,0,31.999-14.328,31.999-31.999    S497.667,255.995,479.996,255.995z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="h5 mb-1">Meditation</div>
                        <div class="text-muted small">6:00 to 7:00am at. Home</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 512 512">
                            <path class="fill-muted"
                                d="M121,68.5H45c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S129.291,68.5,121,68.5z" />
                            <path class="fill-muted"
                                d="M121,188.5H45c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S129.291,188.5,121,188.5z" />
                            <path class="fill-muted"
                                d="M91,128.5H15c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S99.291,128.5,91,128.5z" />
                            <path class="fill-primary"
                                d="M482,203.5h-91v-60c0-26.346-32.229-40.218-51.22-21.202L219.789,242.289c-11.719,11.719-11.719,30.703,0,42.422    l68.789,68.789l-83.789,83.789c-11.719,11.719-11.719,30.703,0,42.422c11.718,11.718,30.703,11.719,42.422,0l105-105    c11.719-11.719,11.719-30.703,0-42.422L283.422,263.5L331,215.922V233.5c0,16.567,13.433,30,30,30h121c16.567,0,30-13.433,30-30    S498.567,203.5,482,203.5z" />
                            <path class="fill-primary"
                                d="M280.14,51.04c-11.924-7.925-27.744-6.357-37.852,3.75l-82.5,82.5c-11.719,11.719-11.719,30.703,0,42.422    s30.704,11.718,42.423-0.001l65.112-65.112l21.934,15.8l29.306-29.306c4.902-4.902,10.684-8.707,17.007-11.678L280.14,51.04z" />
                            <path class="fill-primary"
                                d="M198.578,305.922c-7.601-7.601-12.675-16.956-15.35-27.072L24.789,437.289c-11.719,11.719-11.719,30.703,0,42.422    c11.718,11.718,30.703,11.719,42.422,0l152.578-152.578L198.578,305.922z" />
                            <circle class="fill-primary" cx="406" cy="68.5" r="45" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="h5 mb-1">Running</div>
                        <div class="text-muted small">7:00 to 8:00am at. Arrowhead Golf</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 512 512">
                            <path class="fill-primary"
                                d="M330.667,122.667c23.467,0,42.667-19.2,42.667-42.667s-19.2-42.667-42.667-42.667S288,56.533,288,80     S307.2,122.667,330.667,122.667z" />
                            <path class="fill-muted"
                                d="M106.667,261.333C48,261.333,0,309.333,0,368s48,106.667,106.667,106.667c58.667,0,106.667-48,106.667-106.667     S165.333,261.333,106.667,261.333z M106.667,442.667C65.067,442.667,32,409.6,32,368s33.067-74.667,74.667-74.667     c41.6,0,74.667,33.067,74.667,74.667S148.267,442.667,106.667,442.667z" />
                            <path class="fill-primary"
                                d="M404.267,238.933v-42.667c-32,0-58.667-11.733-77.867-30.933L284.8,124.8c-6.4-7.467-17.067-12.8-28.8-12.8     s-22.4,4.267-29.867,12.8l-58.667,58.667c-7.467,7.467-12.8,18.133-12.8,29.867s5.333,22.4,12.8,30.933l67.2,59.733v106.667     h42.667V277.333L230.4,230.4l50.133-51.2l16,16C323.2,222.933,360.533,238.933,404.267,238.933z" />
                            <path class="fill-muted"
                                d="M405.333,261.333c-58.667,0-106.667,48-106.667,106.667s48,106.667,106.667,106.667C464,474.667,512,426.667,512,368     S464,261.333,405.333,261.333z M405.333,442.667c-41.6,0-74.667-33.067-74.667-74.667s33.067-74.667,74.667-74.667     C446.933,293.333,480,326.4,480,368S446.933,442.667,405.333,442.667z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="h5 mb-1">Cycling</div>
                        <div class="text-muted small">8:00 to 8:30am at. Arrowhead Golf</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body d-flex align-items-center">
                    <div class="avatar lg rounded-circle no-thumbnail">
                        <svg class="avatar" viewBox="0 0 512 512">
                            <path class="fill-primary"
                                d="m361.88 321.716-24.599-39.647c25.816 32.077 73.585 33.671 101.473 4.016 25.464-27.077 24.164-69.6-2.916-95.068-27.066-25.456-69.598-24.165-95.067 2.917-19.566 20.806-23.115 50.389-12.099 74.259l-59.504-95.904 88.302-25.481c27.423-7.913 40.383-39.303 26.45-64.27-10.117-18.128-31.115-26.77-51.059-21.014l-133.684 38.576c-34.661 10.003-50.183 50.295-31.151 80.971l40.406 65.123-70.863 43.969c85.253 1.959 146.851 27.916 224.311 31.553z" />
                            <path class="fill-muted"
                                d="m19.105 365.89c193.797-55.09 266.988 56.126 481.68.085 8.016-2.092 12.817-10.287 10.725-18.302s-10.287-12.816-18.302-10.725c-206.264 53.844-279.556-57.55-482.306.085-7.968 2.265-12.592 10.561-10.327 18.53 2.266 7.97 10.565 12.592 18.53 10.327z" />
                            <path class="fill-muted"
                                d="m493.208 406.948c-206.643 53.942-279.154-57.666-482.306.085-7.968 2.265-12.592 10.561-10.327 18.53s10.564 12.593 18.53 10.327c193.797-55.09 266.988 56.126 481.68.085 8.016-2.092 12.817-10.287 10.725-18.302-2.092-8.016-10.287-12.817-18.302-10.725z" />
                        </svg>
                    </div>
                    <div class="flex-fill ms-3">
                        <div class="h5 mb-1">Swimming</div>
                        <div class="text-muted small">4:00 to 5:30pm at. Arrowhead Golf</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Workout Statistic</h6>
                    <div class="dropdown morphing scale-left">
                        <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i
                                class="icon-size-fullscreen"></i></a>
                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu shadow border-0 p-2">
                            <li><a class="dropdown-item" href="#">File Info</a></li>
                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                            <li><a class="dropdown-item" href="#">Move to</a></li>
                            <li><a class="dropdown-item" href="#">Rename</a></li>
                            <li><a class="dropdown-item" href="#">Block</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body d-flex flex-wrap flex-row align-items-center border-bottom">
                    <div>
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail chart-color1 lift">
                                <svg class="avatar sm" viewBox="0 0 512 512">
                                    <path class="fill-white"
                                        d="M121,68.5H45c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S129.291,68.5,121,68.5z">
                                    </path>
                                    <path class="fill-white"
                                        d="M121,188.5H45c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S129.291,188.5,121,188.5z">
                                    </path>
                                    <path class="fill-white"
                                        d="M91,128.5H15c-8.291,0-15,6.709-15,15s6.709,15,15,15h76c8.291,0,15-6.709,15-15S99.291,128.5,91,128.5z">
                                    </path>
                                    <path class="fill-white"
                                        d="M482,203.5h-91v-60c0-26.346-32.229-40.218-51.22-21.202L219.789,242.289c-11.719,11.719-11.719,30.703,0,42.422    l68.789,68.789l-83.789,83.789c-11.719,11.719-11.719,30.703,0,42.422c11.718,11.718,30.703,11.719,42.422,0l105-105    c11.719-11.719,11.719-30.703,0-42.422L283.422,263.5L331,215.922V233.5c0,16.567,13.433,30,30,30h121c16.567,0,30-13.433,30-30    S498.567,203.5,482,203.5z">
                                    </path>
                                    <path class="fill-white"
                                        d="M280.14,51.04c-11.924-7.925-27.744-6.357-37.852,3.75l-82.5,82.5c-11.719,11.719-11.719,30.703,0,42.422    s30.704,11.718,42.423-0.001l65.112-65.112l21.934,15.8l29.306-29.306c4.902-4.902,10.684-8.707,17.007-11.678L280.14,51.04z">
                                    </path>
                                    <path class="fill-white"
                                        d="M198.578,305.922c-7.601-7.601-12.675-16.956-15.35-27.072L24.789,437.289c-11.719,11.719-11.719,30.703,0,42.422    c11.718,11.718,30.703,11.719,42.422,0l152.578-152.578L198.578,305.922z">
                                    </path>
                                    <circle class="fill-white" cx="406" cy="68.5" r="45"></circle>
                                </svg>
                            </div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div>Running</div>
                                <div><span class="h6 fw-bold">315</span> <small class="text-muted">Hours</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-lg-4 ms-lg-4 ms-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail chart-color2 lift">
                                <svg class="avatar sm" viewBox="0 0 512 512">
                                    <path class="fill-white"
                                        d="M330.667,122.667c23.467,0,42.667-19.2,42.667-42.667s-19.2-42.667-42.667-42.667S288,56.533,288,80     S307.2,122.667,330.667,122.667z" />
                                    <path class="fill-white"
                                        d="M106.667,261.333C48,261.333,0,309.333,0,368s48,106.667,106.667,106.667c58.667,0,106.667-48,106.667-106.667     S165.333,261.333,106.667,261.333z M106.667,442.667C65.067,442.667,32,409.6,32,368s33.067-74.667,74.667-74.667     c41.6,0,74.667,33.067,74.667,74.667S148.267,442.667,106.667,442.667z" />
                                    <path class="fill-white"
                                        d="M404.267,238.933v-42.667c-32,0-58.667-11.733-77.867-30.933L284.8,124.8c-6.4-7.467-17.067-12.8-28.8-12.8     s-22.4,4.267-29.867,12.8l-58.667,58.667c-7.467,7.467-12.8,18.133-12.8,29.867s5.333,22.4,12.8,30.933l67.2,59.733v106.667     h42.667V277.333L230.4,230.4l50.133-51.2l16,16C323.2,222.933,360.533,238.933,404.267,238.933z" />
                                    <path class="fill-white"
                                        d="M405.333,261.333c-58.667,0-106.667,48-106.667,106.667s48,106.667,106.667,106.667C464,474.667,512,426.667,512,368     S464,261.333,405.333,261.333z M405.333,442.667c-41.6,0-74.667-33.067-74.667-74.667s33.067-74.667,74.667-74.667     C446.933,293.333,480,326.4,480,368S446.933,442.667,405.333,442.667z" />
                                </svg>
                            </div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div>Cycling</div>
                                <div><span class="h6 fw-bold">245</span> <small class="text-muted">Hours</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="ms-lg-4 ms-lg-4 ms-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail chart-color3 lift">
                                <svg class="avatar sm" viewBox="0 0 512.001 512.001">
                                    <circle class="fill-white" cx="255.995" cy="63.999" r="63.999" />
                                    <path class="fill-white"
                                        d="M380.385,465.702L301.57,495.26l39.194,14.698c16.868,6.263,35.068-2.415,41.202-18.733    C385.231,482.518,384.265,473.399,380.385,465.702z" />
                                    <path class="fill-white"
                                        d="M107.238,354.024c-16.515-6.125-34.984,2.188-41.202,18.733c-6.203,16.547,2.188,34.984,18.733,41.202l34.523,12.945    l91.143-34.183L107.238,354.024z" />
                                    <path class="fill-white"
                                        d="M445.964,372.758c-6.219-16.547-24.687-24.859-41.202-18.733l-255.995,95.998c-16.547,6.219-24.937,24.655-18.734,41.202    c6.133,16.313,24.329,24.998,41.202,18.733l255.995-95.998C443.778,407.742,452.168,389.305,445.964,372.758z" />
                                    <path class="fill-white"
                                        d="M479.996,255.995h-76.217l-55.155-110.31c-5.732-11.453-17.392-17.978-29.409-17.687H256h-63.218    c-12.015-0.291-23.66,6.235-29.405,17.687l-55.155,110.31H32.005c-17.671,0-31.999,14.328-31.999,31.999    c0,17.671,14.328,31.999,31.999,31.999h95.998c12.125,0,23.203-6.844,28.624-17.687l35.374-70.748v120.08l63.997,23.997    l64.001-24.004V231.558l35.374,70.748c5.422,10.844,16.5,17.687,28.624,17.687h95.998c17.671,0,31.999-14.328,31.999-31.999    S497.667,255.995,479.996,255.995z" />
                                </svg>
                            </div>
                            <div class="flex-fill ms-3 text-truncate">
                                <div>Yoga</div>
                                <div><span class="h6 fw-bold">45</span> <small class="text-muted">Session</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-sm-block ms-auto">
                        <div class="btn-group" role="group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio1">Week</label>
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio2">Month</label>
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked="">
                            <label class="btn btn-sm btn-outline-secondary" for="btnradio3">Year</label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="apexcharts-canvas" id="apex-WorkoutStatistic"></div>
                </div>
            </div> <!-- .card end -->
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card bg-transparent border-0">
                <div class="row g-3">
                    <div class="col-xl-12 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Sleep analysis</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                        title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu shadow border-0 p-2">
                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">The quality of your sleep is definitely weak. <br>Correct it
                                    tonight. <a href="#">View more</a></span>
                            </div>
                            <div class="ac-line-transparent" id="apex-Sleepanalysis"></div>
                        </div> <!-- .card end -->
                    </div>
                    <div class="col-xl-12 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Energy balance</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                        title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu shadow border-0 p-2">
                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <span class="text-muted">Your energy management is too weak. <br>inprove food quality. <a
                                        href="#">View more</a></span>
                                <div class="ac-line-transparent" id="apex-Energybalance"></div>
                            </div>
                        </div> <!-- .card end -->
                    </div>
                </div> <!-- .row end -->
            </div>
        </div>
    </div> <!-- .row end -->
    <div class="row g-3">
        <div class="col-xl-4 col-lg-12">
            <h5>Connected devices <a href="#" class="small">Add New</a> </h5>
            <div class="row row-cols-xl-2 row-cols-lg-4 row-cols-md-2 row-cols-2 g-xl-3 g-2 mb-3 row-deck">
                <div class="col">
                    <div class="card py-3">
                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                        <div class="card-body text-center">
                            <svg class="avatar lg mb-4 fill-muted" viewBox="0 0 512 512">
                                <path
                                    d="m385.521 307.86c4.143 0 7.5-3.357 7.5-7.5v-183.415c0-15.163-12.336-27.5-27.5-27.5h-259.292c-15.163 0-27.5 12.337-27.5 27.5v278.109c0 15.163 12.337 27.5 27.5 27.5h259.292c15.164 0 27.5-12.337 27.5-27.5v-54.735c0-9.697-15-9.697-15 0v54.735c0 6.893-5.607 12.5-12.5 12.5h-259.292c-6.893 0-12.5-5.607-12.5-12.5v-278.109c0-6.893 5.607-12.5 12.5-12.5h259.292c6.893 0 12.5 5.607 12.5 12.5v183.415c0 4.143 3.358 7.5 7.5 7.5z" />
                                <path
                                    d="m437.132 224.961h-9.21v-113.224c0-31.706-25.794-57.5-57.5-57.5h-17.866v-15.455c0-21.385-17.398-38.782-38.783-38.782h-155.796c-21.384 0-38.781 17.397-38.781 38.782v15.455h-17.866c-31.706 0-57.5 25.794-57.5 57.5v19.271c0 9.697 15 9.697 15 0v-19.271c0-23.435 19.065-42.5 42.5-42.5h269.093c23.435 0 42.5 19.065 42.5 42.5v288.525c0 23.435-19.065 42.5-42.5 42.5h-269.094c-23.435 0-42.5-19.065-42.5-42.5v-229.28c0-9.697-15-9.697-15 0v229.28c0 31.706 25.794 57.5 57.5 57.5h17.866v15.455c0 21.385 17.397 38.782 38.781 38.782h155.797c21.385 0 38.782-17.397 38.782-38.782v-15.455h17.866c31.706 0 57.5-25.794 57.5-57.5v-113.223h9.21c17.115 0 31.039-13.924 31.039-31.039s-13.923-31.039-31.038-31.039zm-302.937-186.179c0-13.113 10.668-23.782 23.781-23.782h155.797c13.113 0 23.782 10.669 23.782 23.782v15.455h-203.36zm203.361 434.436c0 13.113-10.669 23.782-23.782 23.782h-155.797c-13.113 0-23.781-10.669-23.781-23.782v-15.455h203.36zm99.576-201.179h-9.21v-32.078h9.21c8.844 0 16.039 7.195 16.039 16.039s-7.195 16.039-16.039 16.039z" />
                                <path
                                    d="m289.339 256c0-29.48-23.983-53.464-53.464-53.464s-53.464 23.984-53.464 53.464 23.983 53.464 53.464 53.464 53.464-23.984 53.464-53.464zm-53.464 38.464c-21.209 0-38.464-17.255-38.464-38.464s17.255-38.464 38.464-38.464 38.464 17.255 38.464 38.464-17.255 38.464-38.464 38.464z" />
                                <path
                                    d="m318.952 360.078c22.608 0 41.001-18.393 41.001-41.001s-18.393-41.002-41.001-41.002-41.002 18.394-41.002 41.002 18.394 41.001 41.002 41.001zm0-67.003c14.337 0 26.001 11.664 26.001 26.002 0 14.337-11.664 26.001-26.001 26.001-14.338 0-26.002-11.664-26.002-26.001 0-14.338 11.664-26.002 26.002-26.002z" />
                                <path
                                    d="m152.799 233.925c22.608 0 41.001-18.394 41.001-41.002s-18.393-41.001-41.001-41.001-41.002 18.393-41.002 41.001 18.393 41.002 41.002 41.002zm0-67.003c14.337 0 26.001 11.664 26.001 26.001 0 14.338-11.664 26.002-26.001 26.002-14.338 0-26.002-11.664-26.002-26.002 0-14.337 11.664-26.001 26.002-26.001z" />
                                <path
                                    d="m152.799 360.078c22.608 0 41.001-18.393 41.001-41.001s-18.393-41.002-41.001-41.002-41.002 18.394-41.002 41.002 18.393 41.001 41.002 41.001zm0-67.003c14.337 0 26.001 11.664 26.001 26.002 0 14.337-11.664 26.001-26.001 26.001-14.338 0-26.002-11.664-26.002-26.001 0-14.338 11.664-26.002 26.002-26.002z" />
                                <path
                                    d="m318.952 151.922c-22.608 0-41.002 18.393-41.002 41.001s18.394 41.002 41.002 41.002 41.001-18.394 41.001-41.002-18.392-41.001-41.001-41.001zm0 67.003c-14.338 0-26.002-11.664-26.002-26.002 0-14.337 11.664-26.001 26.002-26.001 14.337 0 26.001 11.664 26.001 26.001 0 14.338-11.664 26.002-26.001 26.002z" />
                                <path
                                    d="m265.32 153.073c0-16.236-13.209-29.446-29.445-29.446s-29.445 13.21-29.445 29.446 13.209 29.445 29.445 29.445 29.445-13.208 29.445-29.445zm-43.89 0c0-7.966 6.48-14.446 14.445-14.446s14.445 6.48 14.445 14.446c0 7.965-6.48 14.445-14.445 14.445s-14.445-6.48-14.445-14.445z" />
                                <path
                                    d="m206.43 358.927c0 16.236 13.209 29.446 29.445 29.446s29.445-13.21 29.445-29.446-13.209-29.445-29.445-29.445-29.445 13.208-29.445 29.445zm43.89 0c0 7.966-6.48 14.446-14.445 14.446s-14.445-6.48-14.445-14.446c0-7.965 6.48-14.445 14.445-14.445s14.445 6.48 14.445 14.445z" />
                            </svg>
                            <div class="mb-0">Apple Watch</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card py-3">
                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                        <div class="card-body text-center">
                            <svg class="avatar lg mb-4 fill-muted" viewBox="0 0 512.001 512.001">
                                <path
                                    d="M498.112,419.272c-5.093-2.141-10.955,0.248-13.096,5.34c-14.051,33.395-46.539,54.973-82.767,54.973    c-43.468,0-79.812-31.062-88.015-72.153c0.007-0.158,0.024-0.313,0.024-0.473c0-4.405-0.578-8.676-1.653-12.748    c-0.07-1.451-0.108-2.91-0.108-4.377c0-37.54,23.17-69.765,55.958-83.14l24.168,85.85c1.242,4.41,5.254,7.293,9.621,7.293    c0.897,0,1.809-0.122,2.715-0.377c5.316-1.497,8.413-7.02,6.916-12.336l-24.169-85.857c4.735-0.775,9.592-1.184,14.543-1.184    c35.711,0,68.017,21.153,82.303,53.891c2.209,5.062,8.102,7.374,13.165,5.165c5.062-2.209,7.375-8.103,5.166-13.165    c-17.468-40.027-56.969-65.891-100.634-65.891c-6.826,0-13.507,0.632-19.992,1.831l-0.857-3.045    c-2.893-10.277-5.052-20.733-6.476-31.288c0-0.004-0.001-0.008-0.001-0.012c-0.824-6.11-1.405-12.252-1.731-18.414    c0.91,4.586,4.956,8.043,9.809,8.043h13.663c18.916,0,34.306-15.39,34.306-34.306s-15.39-34.306-34.306-34.306h-29.997    l-76.693-67.96c3.979,1.155,8.178,1.787,12.524,1.787c24.813,0,45-20.187,45-45s-20.187-45-45-45s-45,20.187-45,45    c0,8.455,2.347,16.369,6.419,23.134c-7.155-3.259-14.983-4.987-23.081-4.987c-14.887,0-28.882,5.798-39.409,16.324l-81.882,81.881    c-0.022,0.022-0.039,0.048-0.061,0.07c-0.263,0.268-0.513,0.553-0.748,0.854c-0.027,0.035-0.057,0.067-0.083,0.102    c-0.01,0.013-0.021,0.024-0.03,0.037c-5.199,6.915-8.168,15.198-8.797,24.132H90.173c-5.523,0-10,4.478-10,10v12.237    c0,20.822,16.94,37.763,37.763,37.763h11.856l-5.128,22.143c-4.879-0.666-9.856-1.018-14.914-1.018    C49.234,280.082,0,329.317,0,389.833c0,37.05,18.457,69.868,46.657,89.751H10c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10    h99.751c54.26,0,99.442-39.583,108.207-91.387c0.611,4.937,4.813,8.761,9.915,8.761h68.02    c6.553,25.68,22.185,47.765,43.262,62.626h-63.488c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10H402.25    c44.298,0,84.021-26.384,101.202-67.217C505.593,427.277,503.202,421.415,498.112,419.272z M372.873,188.585h23.79    c7.888-0.001,14.306,6.416,14.306,14.305c0,7.888-6.417,14.306-14.306,14.306H383c-5.174,0-9.43,3.929-9.947,8.966    c-0.12-3.015-0.18-6.031-0.18-9.052V188.585z M353.842,238.957H253.618c-1.602-1.911-3.283-3.767-5.062-5.547l-31.516-31.517    l41.521-41.521l94.599,68.524C353.32,232.255,353.546,235.611,353.842,238.957z M339.085,258.957l-61.276,55.508l-5.839-36.281    c-0.011-0.07-0.023-0.14-0.036-0.21c-1.208-6.609-3.183-12.977-5.853-19.017H339.085z M302.498,32.411c13.785,0,25,11.215,25,25    c0,13.785-11.215,25-25,25c-13.785,0-25-11.215-25-25C277.498,43.626,288.712,32.411,302.498,32.411z M215.569,106.025    c6.749-6.75,15.722-10.467,25.267-10.467s18.518,3.717,25.269,10.468l86.769,77.059v20.908l-89.487-64.82    c-1.761-1.275-3.817-1.901-5.863-1.901c-2.577,0-5.138,0.992-7.074,2.929l-50.504,50.505l-33.373-9.214l-20.743-5.727    L215.569,106.025z M117.936,238.958c-9.794-0.001-17.763-7.969-17.763-17.763v-2.237h12.003c2.223,7.37,5.844,14.194,10.525,20    H117.936z M109.751,479.584C60.262,479.584,20,439.323,20,389.833s40.262-89.751,89.751-89.751c3.51,0,6.972,0.209,10.379,0.604    l-20.121,86.892c-0.688,2.97,0.017,6.092,1.914,8.479c1.897,2.387,4.779,3.777,7.828,3.777h89.191    C193.953,444.633,155.86,479.584,109.751,479.584z M122.331,379.833l17.283-74.636c31.833,11.265,55.471,40.006,59.328,74.636    H122.331z M144.151,285.61l6.139-26.514l47.929,27.676l15.739,68.609C203.063,322.513,177.026,296.488,144.151,285.61z     M216.738,278.054c-0.621-2.707-2.34-5.034-4.746-6.424l-64.738-37.382c-8.26-4.77-14.706-14.173-16.821-24.541    c-1.271-6.229-0.893-12.128,1.036-17.159l29.122,8.04l37.102,10.243l36.722,36.722c9.283,9.282,15.446,21.008,17.827,33.916    l12.15,75.493c-0.045,0-0.088-0.003-0.133-0.003h-29.42v-0.001L216.738,278.054z M237.873,396.958v-20h26.385    c13.038,0,24.159,8.359,28.287,20H237.873z M294.803,367.414c-2.898-2.244-6.045-4.177-9.397-5.749l-3.806-23.649l76.677-69.458    c1.12,5.279,2.407,10.525,3.872,15.729l0.86,3.054C328.591,300.563,302.467,330.64,294.803,367.414z" />
                                <path
                                    d="M502,379.833c-5.523,0-10,4.478-10,10l-0.001,0.469c-0.016,5.522,4.448,10.013,9.971,10.029c0.01,0,0.02,0,0.03,0    c5.509,0,9.983-4.458,10-9.971l0.001-0.527C512,384.311,507.523,379.833,502,379.833z" />
                                <path
                                    d="M243.4,482.517c-1.86-1.87-4.43-2.93-7.07-2.93c-2.63,0-5.21,1.06-7.07,2.93c-1.86,1.86-2.93,4.431-2.93,7.07    c0,2.63,1.07,5.21,2.93,7.07c1.86,1.859,4.44,2.93,7.07,2.93s5.21-1.07,7.07-2.93c1.87-1.86,2.93-4.44,2.93-7.07    C246.33,486.947,245.27,484.377,243.4,482.517z" />
                            </svg>
                            <div class="mb-0">Stages Smart</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card py-3">
                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                        <div class="card-body text-center">
                            <svg class="avatar lg mb-4 fill-muted" viewBox="0 0 512.057 512.057">
                                <path
                                    d="m471.837 0h-431.618c-21.99 0-39.882 17.891-39.882 39.882v432.293c0 21.991 17.891 39.882 39.882 39.882h291.745c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-291.745c-13.72 0-24.882-11.162-24.882-24.882v-432.293c0-13.72 11.163-24.882 24.882-24.882h94.306v141.425c0 17.139 13.943 31.082 31.082 31.082h15.485c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-15.485c-8.867 0-16.082-7.215-16.082-16.082v-141.425h213.006v141.425c0 8.867-7.214 16.082-16.082 16.082h-130.386c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h130.387c17.138 0 31.082-13.943 31.082-31.082v-141.425h94.306c13.72 0 24.882 11.162 24.882 24.882v432.293c0 13.72-11.162 24.882-24.882 24.882h-104.904c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h104.903c21.991 0 39.882-17.891 39.882-39.882v-432.293c0-21.991-17.891-39.882-39.882-39.882z" />
                                <path
                                    d="m346.281 130.346v-73.185c0-8.798-7.158-15.956-15.956-15.956h-148.594c-8.798 0-15.956 7.158-15.956 15.956v73.185c0 8.798 7.158 15.955 15.956 15.955h148.595c8.798 0 15.955-7.157 15.955-15.955zm-165.506 0v-73.185c0-.527.429-.956.956-.956h148.595c.527 0 .956.429.956.956v73.185c0 .526-.429.955-.956.955h-148.595c-.527 0-.956-.429-.956-.955z" />
                                <path
                                    d="m219.774 97.412h-.563c.055-9.55.084-19.767-.034-21.186-.265-3.18-2.177-5.774-4.871-6.608-2.672-.825-5.516.207-7.603 2.769-2.266 2.779-12.726 21.638-15.878 27.352-.769 1.395-.744 3.091.065 4.462s2.283 2.212 3.875 2.212h15.385c-.019 2.554-.039 5.004-.058 7.215-.021 2.485 1.976 4.518 4.461 4.539h.04c2.467 0 4.478-1.989 4.499-4.461.012-1.364.034-4.01.058-7.293h.623c2.485 0 4.5-2.015 4.5-4.5s-2.013-4.501-4.499-4.501zm-9.564 0h-7.797c2.9-5.187 5.728-10.163 7.849-13.791-.002 3.753-.023 8.68-.052 13.791z" />
                                <path
                                    d="m257.615 89.927c1.605-2.15 2.568-4.807 2.568-7.691 0-7.11-5.785-12.896-12.896-12.896s-12.896 5.785-12.896 12.896c0 2.884.963 5.54 2.568 7.691-3.474 2.94-5.689 7.325-5.689 12.222 0 8.832 7.185 16.017 16.017 16.017s16.017-7.185 16.017-16.017c0-4.897-2.215-9.282-5.689-12.222zm-10.327-11.586c2.148 0 3.896 1.747 3.896 3.896s-1.748 3.896-3.896 3.896-3.896-1.748-3.896-3.896 1.747-3.896 3.896-3.896zm0 30.825c-3.869 0-7.017-3.147-7.017-7.017s3.147-7.017 7.017-7.017 7.017 3.147 7.017 7.017-3.148 7.017-7.017 7.017z" />
                                <path
                                    d="m283.154 103.799 7.263-6.675c1.22-1.121 1.3-3.02.178-4.239-1.121-1.22-3.019-1.3-4.239-.179l-5.186 4.766v-2.797c0-1.657-1.343-3-3-3s-3 1.343-3 3v18.991c0 1.657 1.343 3 3 3s3-1.343 3-3v-3.443l5.807 5.603c.583.562 1.333.841 2.083.841.786 0 1.571-.307 2.16-.917 1.15-1.192 1.116-3.092-.076-4.242z" />
                                <path
                                    d="m317.291 101.171h-5.681c-1.657 0-3 1.343-3 3s1.343 3 3 3h2.213c-.677 1.963-2.14 3.495-4.729 3.495-3.582 0-6.495-2.914-6.495-6.495 0-3.582 2.914-6.496 6.495-6.496 1.301 0 2.557.383 3.63 1.108 1.373.927 3.238.565 4.165-.808s.565-3.237-.808-4.165c-2.069-1.397-4.485-2.136-6.988-2.136-6.89 0-12.495 5.605-12.495 12.496 0 6.89 5.605 12.495 12.495 12.495 6.592 0 11.197-5.138 11.197-12.495.001-1.656-1.342-2.999-2.999-2.999z" />
                                <path
                                    d="m261.692 209.719c2.209 0 4-1.791 4-4s-1.791-4-4-4h-9.113c-2.209 0-4 1.791-4 4v21.628c0 2.209 1.791 4 4 4h9.113c2.209 0 4-1.791 4-4s-1.791-4-4-4h-5.113v-2.813h4.441c2.209 0 4-1.791 4-4s-1.791-4-4-4h-4.441v-2.814h5.113z" />
                                <path
                                    d="m230.093 223.347c-2.692 0-4.233-1.471-4.642-1.921-1.483-1.639-4.013-1.763-5.65-.278-1.637 1.483-1.761 4.013-.278 5.649 2.62 2.892 6.472 4.55 10.57 4.55 5.217 0 9.606-3.376 10.437-8.027.605-3.388-.907-8.161-7.157-10.467-2.426-.895-4.701-1.863-5.645-2.273-.017-.04-.024-.095-.013-.174.043-.305.352-.564.844-.713 2.391-.722 4.731 1.075 4.839 1.159 1.69 1.393 4.191 1.165 5.604-.514 1.421-1.691 1.203-4.215-.488-5.636-2.069-1.741-6.983-4.26-12.263-2.67-3.492 1.053-5.966 3.826-6.455 7.236-.463 3.23.938 6.339 3.659 8.112.177.115.362.216.554.302.128.058 3.172 1.413 6.596 2.676 1.367.504 2.116 1.187 2.05 1.555-.087.484-.952 1.434-2.562 1.434z" />
                                <path
                                    d="m293.569 205.52c0-2.209-1.791-4-4-4h-12.054c-2.209 0-4 1.791-4 4s1.791 4 4 4h2.003v17.827c0 2.209 1.791 4 4 4s4-1.791 4-4v-17.827h2.051c2.209 0 4-1.791 4-4z" />
                                <path
                                    d="m324.679 205.995c-1.164 0-2.271.507-3.03 1.389l-11.094 12.877c-1.442 1.674-1.254 4.2.419 5.642 1.674 1.444 4.2 1.255 5.641-.419l8.064-9.36 8.063 9.359c.791.919 1.908 1.39 3.032 1.39.924 0 1.854-.318 2.609-.97 1.674-1.441 1.861-3.968.419-5.641l-11.094-12.877c-.758-.883-1.865-1.39-3.029-1.39z" />
                                <path
                                    d="m195.441 207.384-8.064 9.36-8.063-9.359c-1.441-1.675-3.967-1.863-5.641-.42-1.674 1.441-1.861 3.968-.419 5.641l11.094 12.877c.76.883 1.866 1.39 3.03 1.39s2.271-.507 3.03-1.389l11.094-12.877c1.442-1.674 1.254-4.2-.419-5.642-1.674-1.443-4.2-1.253-5.642.419z" />
                                <circle cx="255.613" cy="447.657" r="9.937" />
                                <path
                                    d="m244.215 421.768c-2.661 0-5.237-1.418-6.597-3.92-1.978-3.64-.63-8.193 3.009-10.171 4.664-2.534 9.95-3.874 15.285-3.874 5.027 0 10.041 1.197 14.5 3.461 3.693 1.876 5.167 6.391 3.291 10.083-1.875 3.693-6.39 5.167-10.083 3.292-2.398-1.219-4.992-1.836-7.708-1.836-2.882 0-5.616.691-8.124 2.054-1.136.618-2.363.911-3.573.911z" />
                                <path
                                    d="m292.079 397.857c-1.323 0-2.663-.35-3.878-1.086-9.672-5.857-20.797-8.953-32.173-8.953-11.374 0-22.499 3.096-32.172 8.953-3.544 2.143-8.156 1.012-10.3-2.531-2.146-3.543-1.012-8.155 2.531-10.301 12.017-7.275 25.828-11.121 39.941-11.121 14.116 0 27.928 3.847 39.944 11.123 3.543 2.146 4.676 6.757 2.53 10.3-1.411 2.329-3.886 3.616-6.423 3.616z" />
                            </svg>
                            <div class="mb-0">MI Smart Scale 3</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card py-3">
                        <div class="dropdown morphing scale-left position-absolute top-0 end-0 mt-2 me-2">
                            <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                            <ul class="dropdown-menu shadow border-0 p-2">
                                <li><a class="dropdown-item" href="#">File Info</a></li>
                                <li><a class="dropdown-item" href="#">Copy to</a></li>
                                <li><a class="dropdown-item" href="#">Move to</a></li>
                                <li><a class="dropdown-item" href="#">Rename</a></li>
                                <li><a class="dropdown-item" href="#">Block</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                        <div class="card-body text-center">
                            <svg class="avatar lg mb-4 fill-muted" viewBox="0 -66 512.00035 512">
                                <path
                                    d="m461.285156 226.507812-76.492187-5.464843-50.554688-84.214844-25.273437-42.167969v-11.679687c.007812-12.675781-10.261719-22.957031-22.9375-22.964844-2.839844-.003906-5.65625.523437-8.300782 1.546875l-72.6875 28.039062 5.492188-18.433593c4.335938-15.496094-2.699219-31.921875-16.90625-39.476563l-57.035156-30.640625c-4.148438-2.226562-9.316406-.804687-11.742188 3.230469l-83.660156 133.96875-1.765625-1.023438c-4.226563-2.429687-9.621094-.96875-12.046875 3.257813-.054688.089844-.101562.179687-.152344.273437l-26.191406 49.308594c-2.257812 4.257813-.683594 9.535156 3.53125 11.867188l318.535156 176.550781c1.308594.722656 2.777344 1.101563 4.273438 1.101563h131.664062c29.238282-.027344 52.9375-23.722657 52.964844-52.964844v-45.65625c-.09375-28.609375-22.183594-52.328125-50.714844-54.457032zm-94.941406-1.890624-10.082031 3.363281-78.988281-102.699219 20.304687-15.246094zm-230.691406-204.03125 49.621094 26.632812c6.878906 3.636719 10.316406 11.550781 8.28125 19.058594l-7.292969 24.578125-50.671875-30.386719-17.546875-10.53125zm-52.265625 84.25 4.519531-7.0625 29.042969 21.601562c14.78125 11.097656 22.328125 29.375 19.683593 47.671875l-1.101562 25.511719-78.894531-45.472656zm375.648437 257.097656h-129.394531l-308.964844-171.257813 17.839844-33.542969 292.519531 168.3125c1.34375.773438 2.863282 1.179688 4.414063 1.175782h158.894531c0 19.5-15.808594 35.3125-35.308594 35.3125zm35.308594-52.96875h-156.539062l-60.546876-34.859375 20.355469-20.753907c3.363281-3.527343 3.230469-9.117187-.300781-12.480468-3.457031-3.296875-8.910156-3.242188-12.304688.121094l-23.550781 24.011718-33.546875-19.332031 33.644532-26.914063c3.804687-3.046874 4.421874-8.605468 1.375-12.414062-3.046876-3.804688-8.605469-4.421875-12.410157-1.375l-39.046875 31.242188-28.742187-16.527344 43.609375-36.34375c3.75-3.121094 4.257812-8.6875 1.140625-12.4375-3.121094-3.75-8.691407-4.257813-12.441407-1.140625l-48.621093 40.527343-13.648438-7.855468 1.429688-33.886719c3.269531-24.414063-6.960938-48.679687-26.71875-63.382813l-30.078125-22.363281 11.363281-17.839843 78.140625 46.882812c1.050781.605469 2.214844.980469 3.417969 1.105469.210937 0 .394531.070312.609375.085937.210937.019532.34375.0625.511718.0625 1.089844.003906 2.175782-.195312 3.195313-.589844l89.421875-34.488281c1.636719-.625 3.46875-.410156 4.917969.574219 1.453125.996094 2.316406 2.648438 2.304687 4.414062v9.710938l-31.78125 23.832031c-3.898437 2.929688-4.683594 8.464844-1.753906 12.359375.019531.027344.039062.054688.058594.078125l88.277344 114.761719c2.28125 2.988281 6.214843 4.191406 9.78125 2.992188l24.8125-8.273438 79.328124 5.667969c19.304688 1.429687 34.261719 17.46875 34.335938 36.828125zm0 0" />
                                <path
                                    d="m52.964844 256h-44.136719c-4.875 0-8.828125 3.953125-8.828125 8.828125s3.953125 8.828125 8.828125 8.828125h44.136719c4.875 0 8.828125-3.953125 8.828125-8.828125s-3.953125-8.828125-8.828125-8.828125zm0 0" />
                                <path
                                    d="m0 317.792969c0 4.875 3.953125 8.828125 8.828125 8.828125h114.757813c4.875 0 8.828124-3.953125 8.828124-8.828125s-3.953124-8.828125-8.828124-8.828125h-114.757813c-4.875 0-8.828125 3.953125-8.828125 8.828125zm0 0" />
                                <path
                                    d="m220.691406 361.933594h-211.863281c-4.875 0-8.828125 3.949218-8.828125 8.824218s3.953125 8.828126 8.828125 8.828126h211.863281c4.875 0 8.824219-3.953126 8.824219-8.828126s-3.949219-8.824218-8.824219-8.824218zm0 0" />
                            </svg>
                            <div class="mb-0">MI Smart Shoes</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12">
            <h5>Maps Route</h5>
            <div class="card">
                <div class="d-flex align-items-center flex-column flex-md-row">
                    <div class="media-body ms-xl-4 m-0 mt-4 mt-md-0 text-md-start text-center">
                        <div class="d-flex px-xl-3 px-2 mb-4">
                            <img class="avatar rounded" src="../assets/img/profile_av.png" alt="">
                            <div class="flex-fill ms-3">
                                <h5 class="mb-0">nellie maxwell</h5>
                                <small class="text-muted">nellie.maxwell@gamil.com</small>
                            </div>
                        </div>
                        <h6 class="px-xl-3 px-2 fw-bold mb-0">2.7 miles Late Evening Bike Ride</h6>
                        <div class="px-xl-3 px-2 mb-4">Feb 11, 2021 9:10PM</div>
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                            <div class="py-2 px-xl-3 px-2">
                                <strong>7 min</strong>
                                <div class="small text-muted">Duration</div>
                            </div>
                            <div class="py-2 px-xl-3 px-2">
                                <strong>11:38km/h</strong>
                                <div class="small text-muted">Avg. Speed</div>
                            </div>
                            <div class="py-2 px-xl-3 px-2">
                                <strong>20:45km/h</strong>
                                <div class="small text-muted">Max. Speed</div>
                            </div>
                            <div class="py-2 px-xl-3 px-2">
                                <strong>980kcal</strong>
                                <div class="small text-muted">Calories</div>
                            </div>
                            <div class="py-2 px-xl-3 px-2">
                                <strong>12m</strong>
                                <div class="small text-muted">Min. Latitude</div>
                            </div>
                            <div class="py-2 px-xl-3 px-2">
                                <strong>108m</strong>
                                <div class="small text-muted">Max. Latitude</div>
                            </div>
                        </div>
                    </div>
                    <iframe style="width: 100%; height: 380px; border: 0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"
                        src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12074.66938771027!2d-74.40733235849672!3d40.83526985386759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x89c3a786df3d45ed%3A0xd2ca0189df6dc9e7!2sNormandy%20Park%2C%20Parsippany%2C%20NJ%2007054%2C%20United%20States!3m2!1d40.8402518!2d-74.4064636!4m5!1s0x89c3a86ee04fc3d1%3A0x22e044ab1c8bb3e3!2sDestination%20JUMP*21%2C%2039%20Leslie%20Ct%2C%20Whippany%2C%20NJ%2007981%2C%20United%20States!3m2!1d40.8245013!2d-74.390345!5e0!3m2!1sen!2sin!4v1613110633269!5m2!1sen!2sin"></iframe>
                </div>
            </div>
        </div>
    </div> <!-- .row end --> --}}
@endsection
