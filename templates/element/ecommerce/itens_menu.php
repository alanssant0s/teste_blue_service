<?php use Cake\View\View;
/**
 * @var \App\Model\Entity\User $loggedUser
 **/
$controller = View::getRequest()->getAttribute('params')['controller'];
$action = View::getRequest()->getAttribute('params')['action'];
?>


<ul class="navbar-nav" id="navbar-nav">
    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
    <li class="nav-item">
        <a class="nav-link menu-link <?= ($controller == 'Products' && $action =='home') ? 'active' : ''?>" href="<?php echo $this->Url->build("/products/home")?>" role="button">
            <i class="ri-home-4-line"></i> <span data-key="t-dashboards">Página Inicial</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link <?= ($controller == 'Requests') ? 'active' : ''?>" href="<?php echo $this->Url->build("/requests")?>" role="button">
            <i class="ri-shopping-bag-line"></i> <span data-key="t-dashboards">Minhas Compras</span>
        </a>
    </li>


    <?php if($logged_user['type'] <= \App\Model\Entity\User::$_LAST_ADMIN):?>
    <li class="nav-item">
        <a class="nav-link menu-link" href="<?php echo $this->Url->build("/products")?>" role="button">
            <i class="ri-shield-user-line"></i> <span data-key="t-dashboards">Admin</span>
        </a>
    </li>
    <?php endif;?>
</ul>