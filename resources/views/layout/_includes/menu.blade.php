<div class="nav-side-menu">
    <div class="brand">{{ config('app.name', 'EasySell') }}</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">

        <div class="text-center">
            <img src="{{ asset('img/user-default.png') }}" class="img-fluid img-rounded foto-usuario">
            <div class="card-title btn-logout">
                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                |
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

                    <i class="fa fa-sign-out-alt fa-lg"></i> Sair
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#"><i class="fa fa-tachometer-alt fa-lg"></i> Dashboard</a>
            </li>

            <!--Usuários-->
            <li data-toggle="collapse" data-target="#usuarios" class="collapsed">
                <a href="#"><i class="fa fa-users fa-lg"></i> Usuários <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="usuarios">
                <li class="collapsed"><a href="{{route('admin.clientes.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.clientes')}}">Editar</a></li>
            </ul>

            <!--Clientes-->
            <li data-toggle="collapse" data-target="#clientes" class="collapsed">
                <a href="#"><i class="fa fa-user fa-lg"></i> Clientes <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="clientes">
                <li class="collapsed"><a href="{{route('admin.clientes.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.clientes')}}">Editar</a></li>
            </ul>

            <!--Vendedores-->
            <li data-toggle="collapse" data-target="#vendedores" class="collapsed">
                <a href="#"><i class="fa fa-user-tie fa-lg"></i> Vendedores <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="vendedores">
                <li class="collapsed"><a href="{{route('admin.vendedores.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.vendedores')}}">Editar</a></li>
            </ul>

            <!--Fornecedores-->
            <li data-toggle="collapse" data-target="#fornecedores" class="collapsed">
                <a href="#"><i class="fa fa-truck-moving fa-lg"></i> Fornecedores <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="fornecedores">
                <li class="collapsed"><a href="{{route('admin.fornecedores.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.fornecedores')}}">Editar</a></li>
            </ul>

            <!--Produtos-->
            <li data-toggle="collapse" data-target="#produtos" class="collapsed">
                <a href="#"><i class="fa fa-box fa-lg"></i> Produtos <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="produtos">
                <li class="collapsed"><a href="{{route('admin.produtos.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.produtos')}}">Editar</a></li>

                <!--Categoria-->
                <li data-toggle="collapse" data-target="#categoria" class="collapsed">
                    <a href="#"><i class="fa fa-glass-martini-alt fa-lg"></i> Categoria <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="categoria">
                    <li class="collapsed"><a href="{{route('admin.produtos.novo')}}">Novo</a></li>
                    <li><a href="{{route('admin.produtos')}}">Editar</a></li>
                </ul>

                <!--Tipo-->
                <li data-toggle="collapse" data-target="#tipo" class="collapsed">
                    <a href="#"><i class="fa fa-certificate fa-lg"></i> Tipo <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="tipo">
                    <li class="collapsed"><a href="{{route('admin.produtos.novo')}}">Novo</a></li>
                    <li><a href="{{route('admin.produtos')}}">Editar</a></li>
                </ul>
            </ul>

            <!--Promoções-->
            <li data-toggle="collapse" data-target="#promocoes" class="collapsed">
                <a href="#"><i class="fa fa-bullhorn fa-lg"></i> Promoções <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="promocoes">
                <li class="collapsed"><a href="{{route('admin.promocoes.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.promocoes')}}">Editar</a></li>
            </ul>

            <!--Estoque-->
            <li data-toggle="collapse" data-target="#estoque" class="collapsed">
                <a href="#"><i class="fa fa-boxes fa-lg"></i> Estoque <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="estoque">
                <li class="collapsed"><a href="{{route('admin.estoque')}}">Geral</a></li>
                <li><a href="{{route('admin.estoque.entrada')}}">Entrada</a></li>
                <li><a href="{{route('admin.estoque.saida')}}">Saída</a></li>
            </ul>

            <!--Pagamentos-->
            <li data-toggle="collapse" data-target="#pagamentos" class="collapsed">
                <a href="#"><i class="fa fa-dollar-sign fa-lg"></i> Pagamentos <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="pagamentos">
                <li class="collapsed"><a href="{{route('admin.pagamentos.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.pagamentos')}}">Editar</a></li>

                <!--Condições-->
                <li data-toggle="collapse" data-target="#condicoes" class="collapsed">
                    <a href="#"><i class="fa fa-credit-card fa-lg"></i> Condições <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="condicoes">
                    <li class="collapsed"><a href="{{route('admin.condicoes.novo')}}">Novo</a></li>
                    <li><a href="{{route('admin.condicoes')}}">Editar</a></li>
                </ul>
            </ul>

            <!--Vendas-->
            <li data-toggle="collapse" data-target="#vendas" class="collapsed">
                <a href="#"><i class="fa fa-shopping-cart fa-lg"></i> Vendas <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="vendas">
                <li class="collapsed"><a href="{{route('admin.vendas')}}">Geral</a></li>
                <li><a href="{{route('admin.vendas.novo')}}">Novo</a></li>
            </ul>

            <!--Relatorios-->
            <li data-toggle="collapse" data-target="#relatorios" class="collapsed">
                <a href="#"><i class="fa fa-chart-line fa-lg"></i> Relatorios <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="relatorios">
                <li class="collapsed"><a href="{{route('admin.clientes.novo')}}">Venda X Cliente</a></li>
                <li><a href="{{route('admin.clientes')}}">Vendas X Vendedores</a></li>
                <li><a href="{{route('admin.clientes')}}">Vendas X Produtos</a></li>
                <li><a href="{{route('admin.clientes')}}">Total Vendas</a></li>
                <li><a href="{{route('admin.clientes')}}">Fornecedores</a></li>
                <li><a href="{{route('admin.clientes')}}">Balancete</a></li>
            </ul>

            <!--Avisos-->
            <li data-toggle="collapse" data-target="#avisos" class="collapsed">
                <a href="#"><i class="fa fa-envelope fa-lg"></i> Avisos <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="avisos">
                <li class="collapsed"><a href="{{route('admin.avisos.novo')}}">Novo</a></li>
                <li><a href="{{route('admin.avisos')}}">Editar</a></li>
            </ul>
        </ul>
    </div>
</div>
