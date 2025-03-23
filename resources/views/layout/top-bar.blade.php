@vite(['resources/sass/layouts/topbar.scss', 'resources/js/app.js'])

<header class="topbar p-3 d-flex justify-content-between align-items-center">
    <button id="toggleBtn" class="menu-btn btn btn-light"><i class="bi bi-list"></i></button>
    <div class="user d-flex align-items-center">
        <i class="user-icon bi bi-person-fill"></i>
        <span class="user-name">alexander pielago quiros</span>
        <span class="cargo">( alumno )</span>

        <div class="dropdown">
            <button class="btn p-0 border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="menu bi bi-three-dots-vertical"></i>
            </button>
            
            <ul class="dropdown-menu dropdown-menu-end">
                <li><h6 class="dropdown-header">Roles</h6></li>
                <li><a class="primary dropdown-item active" href="#"><i class="bi bi-person-circle"></i> DOCENTE</a></li>
                <li><a class="primary dropdown-item" href="#"><i class="bi bi-person-workspace"></i> AUTORIDAD FIM</a></li>
                <li><a class="primary dropdown-item" href="#"><i class="bi bi-award"></i> FERIA PROYECTO ABET</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="secondary dropdown-item" href="#">Mi Información</a></li>
                <li><a class="secondary dropdown-item" href="#">Reiniciar clave</a></li>
                <li><a class="secondary dropdown-item" href="#">Cerrar Sesión</a></li>
            </ul>
        </div>
    </div>
</header>