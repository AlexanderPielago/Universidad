@vite(['resources/sass/layouts/sidebar.scss', 'resources/js/app.js'])
<!-- Sidebar -->
<nav id="sidebar" class="sidebar min-vh-100">
    <div  class="sidebar-container">
        <div class="sidebar-topbard">
            <div class="logo">
                <img class="rotar" src="{{asset('img/rueda.svg')}}"alt="SVG Rotando">
            </div>
            <div class="title">
                <label> OEARP - FIM</label>
                <p>Facultad de Ingeniería Mecánica</p>
            </div>
        </div>
        <nav class="sidebar-main">
            <ul>
                <li>
                    <a  href="#"><i class="icon bi bi-tag"></i>       
                        <span>General</span> <i class="bi bi-caret-right-fill"></i>
                    </a>
                    <div class="submenu">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>Submenu 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>Submenu 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>Submenu 3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"><i class="icon bi bi-hourglass-split"></i>
                        <span>Aula Virtual Histórico</span> <i class="arrow bi bi-caret-right-fill"></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Submenu 1</a></li>
                                <li><a href="#">Submenu 2</a></li>
                                <li><a href="#">Submenu 3</a></li>
                            </ul>
                        </div>
                </li>
                
            </ul>
        </nav>         
        <div class="sidebar-footer">
            
        </div>             
    </div>
</nav>

{{-- <li><a href="#"><i class="bi bi-person"></i> <span>Administrador</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-award"></i> <span>Acreditación FIM</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-people"></i> <span>Oficina de Personal</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-camera-video"></i> <span>Virtual</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-file-earmark-text"></i> <span>Documentos Académicos</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-search"></i> <span>Supervisión</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-person"></i> <span>Administrador</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-award"></i> <span>Acreditación FIM</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-people"></i> <span>Oficina de Personal</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-camera-video"></i> <span>Virtual</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-file-earmark-text"></i> <span>Documentos Académicos</span> <i class="bi bi-caret-right-fill"></i></a></li>
                <li><a href="#"><i class="bi bi-search"></i> <span>Supervisión</span> <i class="bi bi-caret-right-fill"></i></a></li> --}}