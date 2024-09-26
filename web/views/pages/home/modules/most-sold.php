<div class="container-fluid bg-light templateColor border">

    <div class="container clearfix">

        <div class="btn-group float-end p-2">

            <button class="btn btn-default btnView botonColor" attr-type="grid" attr-index="3">

                <i class="fas fa-th fa-xs pe-1"></i>

                <span class="col-xs-0 float-end small mt-1">GRID</span>

            </button>

            <button class="btn btn-default btnView" attr-type="list" attr-index="3">

                <i class="fas fa-list fa-xs pe-1"></i>

                <span class="col-xs-0 float-end small mt-1">LIST</span>

            </button>

        </div>

    </div>

</div>

<div class="container-fluid bg-white">

    <div class="container">

        <div class="clearfix pt-3 pb-0 px-2">

            <h4 class="float-start text-uppercase pt-2">Artículos más vendidos</h4>

            <span class="float-end pt-2">

                <a href="#" class="btn btn-default templateColor">

                    <small>VER MÁS <i class="fas fa-chevron-right"></i></small>

                </a>

            </span>

        </div>

        <hr style="color: #666; border-top: 2px solid rgba(0,0,0,.3);">

        <!-- GRID -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 pt-3 pb-4 grid-3">

            <div class="col px-3 py-2 py-lg-0">

                <a href="#">

                    <figure class="imgProduct">

                        <img src="<?php echo $path; ?>views/assets/img/products/cursos/1/curso01.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Curso de php</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $50</del> $15

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

                        <img src="<?php echo $path; ?>views/assets/img/products/cursos/2/curso02.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Curso de jquery</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $30</del> $10

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

                        <img src="<?php echo $path; ?>views/assets/img/products/cursos/3/curso03.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Curso de bootstrap</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $15</del> $9

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

                        <img src="<?php echo $path; ?>views/assets/img/products/cursos/4/curso04.jpg" class="img-fluid">

                    </figure>

                    <h5><small class="text-uppercase text-muted">Curso de javascript</small></h5>

                </a>

                <h6>

                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                </h6>

                <div class="clearfix">

                    <h5 class="float-start text-uppercase text-muted">

                        <del class="small" style="color: #BBB;">USD $70</del> $20

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
        <div class="row list-3" style="display: none;">

            <div class="media border-bottom px-3 pt-4 pb-3 pb-lg-2">

                <figure class="imgProduct">

                    <img src="<?php echo $path; ?>views/assets/img/products/cursos/1/curso01.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">
                
                    <h5><small class="text-uppercase text-muted">Curso de php</small></h5>
                    
                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius facere quasi quia. Magni repudiandae, enim itaque non cum vitae doloribus temporibus vel perferendis impedit dicta architecto eos, inventore officia reiciendis!
                    </p>

                    <div class="clearfix">

                        <h5 class="float-start text-uppercase text-muted">

                            <del class="small" style="color: #BBB;">USD $50</del> $15

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

                    <img src="<?php echo $path; ?>views/assets/img/products/cursos/2/curso02.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">
                
                    <h5><small class="text-uppercase text-muted">Curso de jquery</small></h5>
                    
                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod animi eligendi quae blanditiis dolorem quo excepturi provident sequi nulla. Error quibusdam amet debitis ea! Amet dolorem id nisi corporis assumenda.
                    </p>

                    <div class="clearfix">

                        <h5 class="float-start text-uppercase text-muted">

                            <del class="small" style="color: #BBB;">USD $30</del> $10

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

                    <img src="<?php echo $path; ?>views/assets/img/products/cursos/3/curso03.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">
                
                    <h5><small class="text-uppercase text-muted">Curso de bootstrap</small></h5>
                    
                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse accusamus officiis ut porro praesentium non facilis pariatur vel vitae voluptates? Optio mollitia, neque tempore delectus eos nisi eum aut porro.
                    </p>

                    <div class="clearfix">

                        <h5 class="float-start text-uppercase text-muted">

                            <del class="small" style="color: #BBB;">USD $15</del> $9

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

                    <img src="<?php echo $path; ?>views/assets/img/products/cursos/4/curso04.jpg" class="img-fluid" style="width: 150px;">

                </figure>

                <div class="media-body ps-3">
                
                    <h5><small class="text-uppercase text-muted">Curso de javascript</small></h5>
                    
                    <span class="badge badgeNew bg-warning text-uppercase text-white mt-1 p-2">Nuevo</span>

                    <p class="my-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto dignissimos maxime deleniti, adipisci molestiae dolorem distinctio culpa commodi, at sapiente harum unde veritatis, reprehenderit beatae itaque nobis excepturi nam eos!
                    </p>

                    <div class="clearfix">

                        <h5 class="float-start text-uppercase text-muted">

                            <del class="small" style="color: #BBB;">USD $70</del> $20

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

