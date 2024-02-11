@props(['pageName'])
<div class="row p-0 m-0 vh-100">
    <div class="col-2 bg-dark-blue p-0 m-0">
        <div class="border-bottom-white-3 bg-darker-blue">
            <div class="d-flex justify-content-center">
                <img src="/imgs/logo_batia1.png" alt="" class="h-5">
            </div>
            <h5 class="text-white text-center font-Signika-Negative" href="#">Barangay Health Management System
            </h5>
        </div>
        <div class="text-light p-3">
            <a class="btn text-white w-100 d-flex text-decoration-none" href="{{ route('home') }}">
                <i class="bi bi-house-door-fill px-3"></i>
                <p class="p-0 m-0">Home</p>
            </a>
            <a class="btn text-white w-100 d-flex text-decoration-none" href="{{ route('healthRecord') }}">
                <i class="bi bi-file-earmark-medical-fill px-3"></i>
                <p class="p-0 m-0">Health Record</p>
            </a>
            <a class="btn text-white w-100 d-flex text-decoration-none" href="{{ route('vaccination') }}">
                <i class="bi bi-shield-shaded px-3"></i>
                <p class="p-0 m-0">Vaccination</p>
            </a>
            <a class="btn text-white w-100 d-flex text-decoration-none" href="{{ route('familyPlanning') }}">
                <i class="bi bi-people-fill px-3"></i>
                <p class="p-0 m-0">Family Planning</p>
            </a>
            <a class="btn text-white w-100 d-flex text-decoration-none" href="{{ route('record') }}">
                <i class="bi bi-person-plus-fill px-3"></i>
                <p class="p-0 m-0">Records</p>
            </a>
        </div>
    </div>
    <div class="col-10 overflow-hidden vh-100 p-0 m-0">
        <nav class="navbar navbar-expand-lg bg-light p-0 shadow-sm">
            <div class="container-fluid">
                <p class="navbar-brand font-Signika-Negative p-0 m-0" href="#">
                    <u>{{ $pageName }}</u>
                </p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="dropdown px-4">
                                <div class="nav-link text-black d-flex justify-content-center align-items-center"
                                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-person-circle h3 px-1 py-0 m-0"></i>
                                    <p class="p-0 m-0">Admin</p>
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="vh-95 overflow-auto p-3">
            {{ $slot ?? '' }}
            <footer class="border-top-dark-blue-3 d-flex justify-content-between font-Signika-Negative p-1">
                <small>Copyright <i class="bi bi-c-circle"></i> 2024 All Rights Reserve </small>
                <div class=""><img src="/imgs/img_bocaue.png" alt="" class="h-1"></div>
            </footer>
        </div>
    </div>
</div>
