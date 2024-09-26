<div class="container-fluid bg-light templateColor border">

    <div class="container clearfix">

        <div class="btn-group float-end p-2">

            <button class="btn btn-default btnView botonColor" attr-type="grid" attr-index="2">

                <i class="fas fa-th fa-xs pe-1"></i>

                <span class="col-xs-0 float-end small mt-1">GRID</span>

            </button>

            <button class="btn btn-default btnView" attr-type="list" attr-index="2">

                <i class="fas fa-list fa-xs pe-1"></i>

                <span class="col-xs-0 float-end small mt-1">LIST</span>

            </button>

        </div>

    </div>

</div>

<div class="container-fluid bg-white">

    <div class="container">

        <div class="clearfix pt-3 pb-0 px-2">

            <h4 class="float-start text-uppercase pt-2">Artículos más vistos</h4>

            <span class="float-end pt-2">

                <a href="#" class="btn btn-default templateColor">

                    <small>VER MÁS <i class="fas fa-chevron-right"></i></small>

                </a>

            </span>

        </div>

        <hr style="color: #666; border-top: 2px solid rgba(0,0,0,.3);">

        <!-- GRID -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 pt-3 pb-4 grid-2">

            <div class="col px-3 py-2 py-lg-0">

                <a href="#">

                    <figure class="imgProduct">

                        <img src="<?php echo $path; ?>views/assets/img/products/ropa/1/ropa01.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Falda de flores</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $23</del> $10

                    </h5>

                    <span class="float-end">

                        <div class="btn-group btn-group-sm">

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-heart"></i>

                            </button>

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-eye"></i>

                            </button>

                        </div>

                    </span>

                </div>

            </div><!-- /.col -->

            <div class="col px-3 py-2 py-lg-0">

                <a href="#">

                    <figure class="imgProduct">

                        <img src="<?php echo $path; ?>views/assets/img/products/ropa/2/ropa02.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Vestido jean</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $100</del> $70

                    </h5>

                    <span class="float-end">

                        <div class="btn-group btn-group-sm">

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-heart"></i>

                            </button>

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-eye"></i>

                            </button>

                        </div>

                    </span>

                </div>

            </div><!-- /.col -->

            <div class="col px-3 py-2 py-lg-0">

                <a href="#">

                    <figure class="imgProduct">

                        <img src="<?php echo $path; ?>views/assets/img/products/ropa/3/ropa03.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Top dama</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $70</del> $50

                    </h5>

                    <span class="float-end">

                        <div class="btn-group btn-group-sm">

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-heart"></i>

                            </button>

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-eye"></i>

                            </button>

                        </div>

                    </span>

                </div>

            </div><!-- /.col -->

            <div class="col px-3 py-2 py-lg-0">

                <a href="#">

                    <figure class="imgProduct">

                        <img src="<?php echo $path; ?>views/assets/img/products/ropa/4/ropa04.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Sombrero clasico</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $150</del> $99

                    </h5>

                    <span class="float-end">

                        <div class="btn-group btn-group-sm">

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-heart"></i>

                            </button>

                            <button type="button" class="btn btn-light border">

                                <i class="fas fa-eye"></i>

                            </button>

                        </div>

                    </span>

                </div>

            </div><!-- /.col -->

        </div><!-- /.row-cols -->

        <!-- LIST -->
        <div class="row list-2" style="display: none;">

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">

                <figure class="imgProduct">

                    <img src="<?php echo $path; ?>views/assets/img/products/ropa/1/ropa01.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">

                    <h5><small class="text-uppercase text-muted">Falda de flores</small></h5>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam est accusamus animi voluptatem saepe illo ducimus tempore tenetur nulla! Dolore assumenda dolores error aliquam fugiat autem libero ut. Animi, a.
                    </p>
                
                    <div class="clearfix">
    
                        <h5 class="float-start text-uppercase text-muted">
    
                            <del class="small" style="color: #BBB;">USD $23</del> $10
    
                        </h5>
    
                        <span class="float-end">
    
                            <div class="btn-group btn-group-sm">
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-heart"></i>
    
                                </button>
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-eye"></i>
    
                                </button>
    
                            </div>
    
                        </span>
    
                    </div>

                </div><!-- /.media-body -->

            </div><!-- /.media -->

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">

                
                <figure class="imgProduct">

                    <img src="<?php echo $path; ?>views/assets/img/products/ropa/2/ropa02.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">

                    <h5><small class="text-uppercase text-muted">Vestido jean</small></h5>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora possimus aliquid ea rem? Optio reiciendis, veritatis, veniam maxime ullam dignissimos nobis fugiat, officiis placeat mollitia deleniti provident adipisci perspiciatis ea.
                    </p>
                
                    <div class="clearfix">
    
                        <h5 class="float-start text-uppercase text-muted">
    
                            <del class="small" style="color: #BBB;">USD $100</del> $70
    
                        </h5>
    
                        <span class="float-end">
    
                            <div class="btn-group btn-group-sm">
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-heart"></i>
    
                                </button>
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-eye"></i>
    
                                </button>
    
                            </div>
    
                        </span>
    
                    </div>

                </div><!-- /.media-body -->

            </div><!-- /.media -->

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">

                
                <figure class="imgProduct">

                    <img src="<?php echo $path; ?>views/assets/img/products/ropa/3/ropa03.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">

                    <h5><small class="text-uppercase text-muted">Topa dama</small></h5>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe quis quibusdam pariatur adipisci nam id eveniet, dolores eaque porro officiis nobis expedita culpa aliquid, facere explicabo possimus necessitatibus. Provident, aliquid?
                    </p>
                
                    <div class="clearfix">
    
                        <h5 class="float-start text-uppercase text-muted">
    
                            <del class="small" style="color: #BBB;">USD $70</del> $50
    
                        </h5>
    
                        <span class="float-end">
    
                            <div class="btn-group btn-group-sm">
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-heart"></i>
    
                                </button>
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-eye"></i>
    
                                </button>
    
                            </div>
    
                        </span>
    
                    </div>

                </div><!-- /.media-body -->

            </div><!-- /.media -->

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">

                
                <figure class="imgProduct">

                    <img src="<?php echo $path; ?>views/assets/img/products/ropa/4/ropa04.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">

                    <h5><small class="text-uppercase text-muted">Sombrero clasico</small></h5>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae itaque exercitationem provident neque aspernatur temporibus similique incidunt quae. Corrupti, expedita. Inventore minima quia cumque, eum cum repellat molestiae est nemo!
                    </p>
                
                    <div class="clearfix">
    
                        <h5 class="float-start text-uppercase text-muted">
    
                            <del class="small" style="color: #BBB;">USD $150</del> $99
    
                        </h5>
    
                        <span class="float-end">
    
                            <div class="btn-group btn-group-sm">
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-heart"></i>
    
                                </button>
    
                                <button type="button" class="btn btn-light border">
    
                                    <i class="fas fa-eye"></i>
    
                                </button>
    
                            </div>
    
                        </span>
    
                    </div>

                </div><!-- /.media-body -->

            </div><!-- /.media -->

        </div><!-- /.row-cols -->

    </div><!-- /.container -->

</div><!-- /.container-fluid -->

