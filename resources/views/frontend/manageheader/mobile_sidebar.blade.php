
{{-- <div class="mobile_side_bar m-3">
    <a href="#" id="exploreBtn"><i class="bi bi-grid-fill"></i> Explore Categories</a>
</div> --}}

<div class="mobile_sidebar_menu" id="mobileSidebarMenu">
    
    <div class="menu-panel category-panel active">
        <div class="menu-header d-flex justify-content-between align-items-center">
            <h6>Main Categories</h6>
            <button id="closeSidebar" class="btn btn-sm btn-outline-danger border-0 fs-3">&times;</button>
        </div>
        <ul class="menu-list">
            <li>
                <a href="#">Electronic Devices</a>
                <span class="toggle-submenu" data-target="subcategory-panel"><i class="bi bi-chevron-right"></i></span>
            </li>
            <li>
                <a href="#">Electronic Devices</a>
                <span class="toggle-submenu" data-target="subcategory-panel"><i class="bi bi-chevron-right"></i></span>
            </li>
            <li>
                <a href="#">Electronic Devices</a>
                <span class="toggle-submenu" data-target="subcategory-panel"><i class="bi bi-chevron-right"></i></span>
            </li>
            <li>
                <a href="#">Electronic Devices</a>
                <span class="toggle-submenu" data-target="subcategory-panel"><i class="bi bi-chevron-right"></i></span>
            </li>
            <li>
                <a href="#">Electronic Devices</a>
                <span class="toggle-submenu" data-target="subcategory-panel"><i class="bi bi-chevron-right"></i></span>
            </li>
            <li>
                <a href="#">Fashion & Beauty</a>
                <span class="toggle-submenu" data-target="subcategory-panel"><i class="bi bi-chevron-right"></i></span>
            </li>
        </ul>
    </div>

    <div class="menu-panel subcategory-panel">
        <div class="menu-header d-flex align-items-center gap-3">
            <button class="back-btn" data-back="category-panel"><i class="bi bi-chevron-left"></i></button>
            <h6>Sub Categories</h6>
        </div>
        <ul class="menu-list">
            <li>
                <a href="#">Smartphones</a>
                <span class="toggle-submenu" data-target="childcategory-panel"><i class="bi bi-chevron-right"></i></span>
            </li>
        </ul>
    </div>

    <div class="menu-panel childcategory-panel">
        <div class="menu-header d-flex align-items-center gap-3">
            <button class="back-btn" data-back="subcategory-panel"><i class="bi bi-chevron-left"></i></button>
            <h6>Products List</h6>
        </div>
        <ul class="menu-list">
            <li><a href="#">iPhone 15 Pro</a></li>
            <li><a href="#">Samsung S24 Ultra</a></li>
        </ul>
    </div>

</div>