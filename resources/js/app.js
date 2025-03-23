import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleBtn');
    const menuItems = document.querySelectorAll('.sidebar-main > ul > li > a');

    if (!sidebar || !toggleBtn) return; 

    function setSidebarState() {
        const state = localStorage.getItem('sidebar');
        if (state === 'collapsed') {
            sidebar.classList.add('collapsed');
        } else {
            sidebar.classList.remove('collapsed');
        }
    }

    setSidebarState();

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        localStorage.setItem('sidebar', sidebar.classList.contains('collapsed') ? 'collapsed' : 'expanded');
    });

    // Manejo de Submenús
    function toggleSubMenu(event) {
        event.preventDefault();
        
        let parentLi = this.parentElement;
        let submenu = parentLi.querySelector('.submenu');

        if (!submenu) return; // Si no hay submenú, no hagas nada

        // Cerrar otros submenús antes de abrir el nuevo
        document.querySelectorAll('.sidebar-main .submenu').forEach(sub => {
            if (sub !== submenu) {
                sub.style.display = 'none';
                sub.parentElement.classList.remove('active');
            }
        });

        let isOpen = submenu.style.display === 'block';
        submenu.style.display = isOpen ? 'none' : 'block';
        parentLi.classList.toggle('active', !isOpen);
    }

    // Agregar evento de clic a los elementos que tienen submenú
    menuItems.forEach(item => {
        let hasSubMenu = item.nextElementSibling && item.nextElementSibling.classList.contains('submenu');
        if (hasSubMenu) {
            item.addEventListener('click', toggleSubMenu);
        }
    });
});

document.querySelectorAll('.sidebar-main li > a').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const submenu = link.nextElementSibling;
        if (submenu && submenu.classList.contains('submenu')) {
            submenu.classList.toggle('active');
        }
    });
});
