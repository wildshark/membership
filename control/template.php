<?php

function menu($token){

    return"
        <div class='logo'><a href='index.html'>
            <!-- <img src='assets/images/logo.png' alt='' /> --><span>Qus Account</span></a></div>
        <li class='label'>Main</li>
        <li><a href='?_page=dashboard&token={$token}'><i class='ti-bookmark-alt'></i> Dashboard </a></li>
        <li><a class='sidebar-sub-toggle'><i class='ti-book'></i> Membership <span class='sidebar-collapse-icon ti-angle-down'></span></a>
        <ul>
            <li><a href='?_admin=new.member&token={$token}'> Add</a></li>
            <li><a href='?_admin=membership&token={$token}'>List</a></li>
        </ul>
        </li>
        <li><a class='sidebar-sub-toggle'><i class='ti-book'></i> Region <span class='sidebar-collapse-icon ti-angle-down'></span></a>
        <ul>
            <li><a href='?_admin=new.region&token={$token}'> Add</a></li>
            <li><a href='?_admin=regions&token={$token}'>List</a></li>
        </ul>
        </li>
        
        </li>

        <li><a><i class='ti-close'></i> Help</a></li>
    ";
}


?>