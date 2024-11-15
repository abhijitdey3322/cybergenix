<style>
    .hambug {height: 24px;width: 24px;position: relative;}
    .hambug.inactive span {height: 1px;width: 100%;background-color:#adb5bd;border: 1px solid #adb5bd;border-radius:50px;margin:4px 0;transition: all 1s ease;}
    .hambug.active span:nth-child(1) {transform: rotate(-45deg);position: absolute;}
    .hambug.active span:nth-child(2) {opacity: 0;position: absolute;transform: translateX(20px);transition: transform 1s ease;}
    .hambug.active span:nth-child(3) {transform: rotate(45deg);position: absolute;}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="col-md-3 mb-0 d-flex align-items-center">
            <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="images/brand-logo.png" alt="CyberGenix" height="40">
            </a>
        </div>
        <!-- Navbar Toggler Button for Mobile View -->
        <button class="navbar-toggler" style="border:none;box-shadow:none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hambug d-flex justify-content-center align-items-center flex-column inactive" onclick="this.classList.toggle('active')">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <!-- Collapsible Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto pe-0 pe-lg-5 mb-2 mb-lg-0">
                <li class="nav-item mx-1">
                    <a href="./index" class="nav-link fs-6 fw-semibold px-2 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-light border-bottom border-4 rounded-2 border-light' : 'text-primary'; ?>"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item dropdown nav-link fs-6 fw-semibold px-2 <?php echo (basename($_SERVER['PHP_SELF']) == 'web.php' || basename($_SERVER['PHP_SELF']) == 'app.php' || basename($_SERVER['PHP_SELF']) == 'soft.php' || basename($_SERVER['PHP_SELF']) == 'cons.php') ? 'text-light border-bottom border-4 rounded-2 border-light' : 'text-primary'; ?>">
                    <a class="nav-link dropdown-toggle m-0 p-0 <?php echo (basename($_SERVER['PHP_SELF']) == 'web.php' || basename($_SERVER['PHP_SELF']) == 'app.php' || basename($_SERVER['PHP_SELF']) == 'soft.php' || basename($_SERVER['PHP_SELF']) == 'cons.php') ? 'text-light' : 'text-primary'; ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-clipboard-list"></i> Services
                    </a>
                    <ul class="bg-primary dropdown-menu list-unstyled col">
                        <li class="col dropdown-item">
                            <a href="./web" class="btn btn-hover-light border-0 rounded-2 d-flex flex-column justify-content-center align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                <h5 class="fs-6 fw-bold">Website Development</h5>
                                <small>Take a tour through the product</small>
                            </a>
                        </li>
                        <li class="col dropdown-item">
                            <a href="./app" class="btn btn-hover-light border-0 rounded-2 d-flex flex-column justify-content-center align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                <h5 class="fs-6 fw-bold">Application Development</h5>
                                <small>Explore this other product we offer</small>
                            </a>
                        </li>
                        <li class="col dropdown-item">
                            <a href="./soft" class="btn btn-hover-light border-0 rounded-2 d-flex flex-column justify-content-center align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                <h5 class="fs-6 fw-bold">Software Development</h5>
                                <small>Get help from our support crew</small>
                            </a>
                        </li>
                        <li class="col dropdown-item">
                            <a href="./cons" class="btn btn-hover-light border-0 rounded-2 d-flex flex-column justify-content-center align-items-start gap-2 py-2 px-3 lh-sm text-start">
                                <h5 class="fs-6 fw-bold">Consultancy Services</h5>
                                <small>Get help from our support crew</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item mx-1">
                    <a href="./services" class="nav-link fs-6 fw-semibold px-2 <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'text-light border-bottom border-4 rounded-2 border-light' : 'text-primary'; ?>"><i class="fa-solid fa-clipboard-list"></i> Services</a>
                </li> -->
                <li class="nav-item mx-1">
                    <a href="./projects" class="nav-link fs-6 fw-semibold px-2 <?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'text-light border-bottom border-4 rounded-2 border-light' : 'text-primary'; ?>"><i class="fa-solid fa-code-branch"></i> Projects</a>
                </li>
                <li class="nav-item mx-1">
                    <a href="./contact" class="nav-link fs-6 fw-semibold px-2 <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'text-light border-bottom border-4 rounded-2 border-light' : 'text-primary'; ?>"><i class="fa-solid fa-phone"></i> Contact</a>
                </li>
            </ul>
            
            <!-- Right-side button -->
            <div class="d-flex">
                <a href="https://wa.me/917319589678" target="_blank" type="button" class="btn btn-primary fw-semibold"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
            </div>
        </div>
    </div>
</nav>


