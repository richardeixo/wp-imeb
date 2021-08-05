<section class="titulo-materiais">
        <h1>Materiais Gratuitos</h1>
    </section>
    <section class="boxconteudo-materiais">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1default" data-toggle="tab">Clientes</a></li>
                        <li><a href="#tab2default" data-toggle="tab">Médicos</a></li>
                    </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1default">
                        <div class="lista-ebooks">
                            <div class="um-lista-ebook">
                            <?php
                            foreach ($the_query->posts as $key => $post) { ?>
                            <a href="<?php echo get_post_meta($post->ID, 'link_materiais', true); ?>">
                                <div class="content-lista-unica" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
                                    <h2><?= $post->post_title;?></h2>
                                    <p>
                                        <?=  $post->post_content ?>
                                    </p>
                                </div>
                            </a>            <?php
                                        }?>
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2default">
                        <div class="lista-ebooks">
                            <div class="um-lista-ebook">
                                <div class="content-lista-unica">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/ebooks/ret24.png">
                                    <h2>O novo Coronavírus</h2>
                                    <p>
                                        O novo coronavírus pegou
                                        todo mundo de surpresa.
                                        Como ele surgiu? Como
                                        somos infectados? Por que
                                        ele leva à morte? O que fazer
                                        se eu estiver com os sinto-
                                        mas? Baixe a Cartilha e tire
                                        todas as principais dúvidas
                                        sobre essa pandemia.
                                    </p>
                                </div>
                                <div class="content-lista-unica">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/ebooks/ret24.png">
                                    <h2>O novo Coronavírus</h2>
                                    <p>
                                        O novo coronavírus pegou
                                        todo mundo de surpresa.
                                        Como ele surgiu? Como
                                        somos infectados? Por que
                                        ele leva à morte? O que fazer
                                        se eu estiver com os sinto-
                                        mas? Baixe a Cartilha e tire
                                        todas as principais dúvidas
                                        sobre essa pandemia.
                                    </p>
                                </div>
                                <div class="content-lista-unica">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/images/ebooks/ret24.png">
                                    <h2>O novo Coronavírus</h2>
                                    <p>
                                        O novo coronavírus pegou
                                        todo mundo de surpresa.
                                        Como ele surgiu? Como
                                        somos infectados? Por que
                                        ele leva à morte? O que fazer
                                        se eu estiver com os sinto-
                                        mas? Baixe a Cartilha e tire
                                        todas as principais dúvidas
                                        sobre essa pandemia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



                        <?php
                            foreach ($the_query_medico->posts as $key => $post) { ?>
                            <a href="<?php echo get_post_meta($post->ID, 'link_materiais', true); ?>">
                                <div class="content-lista-unica" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <img src="<?=get_the_post_thumbnail_url($post->ID) ?>">
                                    <h2><?= $post->post_title;?></h2>
                                    <p>
                                        <?=  $post->post_content ?>
                                    </p>
                                </div>
                            </a>            <?php
                                        }?>