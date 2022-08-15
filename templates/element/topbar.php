<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="/" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="/" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                        id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                           aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <?php if(isset($logged_user)):?>

                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-shopping-bag fs-22'></i>
                            <?php if(isset($logged_user['carts']) && sizeof($logged_user['carts'])):?>
                                <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info"><?=sizeof($logged_user['carts'])?></span>
                            <?php endif;?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart"
                             aria-labelledby="page-header-cart-dropdown">
                            <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold"> Meu Carrinho</h6>
                                    </div>
                                    <div class="col-auto">
                                    <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge"><?=sizeof($logged_user['carts'])?></span>
                                        itens</span>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 300px;">
                                <div class="p-2">
                                    <?php if(isset($logged_user['carts']) && sizeof($logged_user['carts']) == 0):?>
                                        <div class="text-center empty-cart" id="empty-cart">
                                            <div class="avatar-md mx-auto my-3">
                                                <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                                    <i class='bx bx-cart'></i>
                                                </div>
                                            </div>
                                            <h5 class="mb-3">Seu carrinho está vazio!</h5>
                                            <a href="/" class="btn btn-success w-md mb-3">Comprar</a>
                                        </div>
                                    <?php else:?>
                                        <?php $total = 0; foreach($logged_user['carts'] as $cart): $total+=$cart['total'];?>
                                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                                <div class="d-flex align-items-center">
                                                    <?php if(isset($cart['product']['imagem'])):?>
                                                        <img src="<?=$cart['product']['imagem']?>"
                                                             class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="product-pic">
                                                    <?php endif;?>
                                                    <div class="flex-1">
                                                        <h6 class="mt-0 mb-1 fs-14">
                                                            <a href="apps-ecommerce-product-details" class="text-reset"><?=$cart['product']['name']?></a>
                                                        </h6>
                                                        <p class="mb-0 fs-12 text-muted">
                                                            Quantidade: <span><?=$cart['qtd'] . ' x ' . number_format($cart['price'],2,',', '.')?></span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2">
                                                        <h5 class="m-0 fw-normal">R$<span class="cart-item-price"><?= number_format($cart['total'],2,',', '.')?></span></h5>
                                                    </div>
                                                    <div class="ps-2">
                                                        <button type="button"
                                                                class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                                    class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
                                 id="checkout-elem">
                                <?php if(isset($total)):?>
                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                        <h5 class="m-0 text-muted">Total:</h5>
                                        <div class="px-2">
                                            <h5 class="m-0" id="    ">R$ <?=number_format($total,2,',', '.')?></h5>
                                        </div>
                                    </div>
                                    <a href="/carts/finish" class="btn btn-success text-center w-100">
                                        Finalizar compra
                                    </a>
                                <?php else:?>
                                    <a href="/" class="btn btn-success text-center w-100">
                                        Comprar
                                    </a>
                                <?php endif;?>

                            </div>
                        </div>
                    </div>
                    <div class="dropdown ms-sm-3 header-item topbar-user">

                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <span class="text-start mx-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?=$logged_user['name']?></span>
                            </span>
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Bem vindo <?= $logged_user['name']?>!</h6>
                            <a class="dropdown-item" href="requests"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Minhas Compras</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/users/logout"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                    </div>
                <?php else:?>
                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <a href="/users/login" class="btn" id="page-header-user-dropdown">
                            <span class="d-flex align-items-center">
                                <span class="text-start mx-xl-2">
                                    <span class="d-none d-xl-inline-block fw-medium user-name-text">Fazer login</span>
                                </span>
                            </span>
                        </a>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</header>