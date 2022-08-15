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
        <a class="nav-link menu-link" href="<?php echo $this->Url->build("/products/home")?>" role="button">
            <i class="ri-shopping-bag-line"></i> <span data-key="t-dashboards">Acessar Loja</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link <?= ($controller == 'Products') ? 'active' : ''?>" href="<?php echo $this->Url->build("/products")?>" role="button">
            <i class="ri-store-2-line"></i> <span data-key="t-dashboards">Produtos</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link <?= ($controller == 'Categories') ? 'active' : ''?>" href="<?php echo $this->Url->build("/categories")?>" role="button">
            <i class="ri-file-settings-line"></i> <span data-key="t-dashboards">Categorias</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link <?= ($controller == 'Features') ? 'active' : ''?>" href="<?php echo $this->Url->build("/features")?>" role="button">
            <i class="ri-pages-line"></i> <span data-key="t-dashboards">Características</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link menu-link <?= ($controller == 'Users') ? 'collapsed active' : ''?>" href="#users" data-bs-toggle="collapse" role="button"
           aria-expanded="false" aria-controls="users">
            <i class="ri-group-line"></i> <span data-key="t-users">Usuários</span>
        </a>
        <div class="collapse menu-dropdown <?= ($controller == 'Users') ? 'show' : ''?>" id="users">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="<?php echo $this->Url->build("/users"); ?>" class="nav-link <?= ($action == 'index') ? 'active' : ''?>" data-key="t-files-index"> Gerenciar Usuários </a>
                </li>

            </ul>
        </div>
    </li> <!-- end Meets Menu -->



</ul>