<?php 
    include('models/modCategory/Controller.Category.php');
    include('models/modContent/Controller.Content.php');
    
    $tema='';

    if(!isset($_GET['tema']) || $_GET['tema'] == '' ){
        $tema= 'default';
    }else{
        $tema= $_GET['tema'];
    }
  
    $allCategories = getAllCategories($conn);
    $currentCategory = getCategoryBySlug($conn, $tema);
    $allContent = getAllContentWithCategory($conn);

 ?>
<!--<><><><><><><><><><><><><><><><><><><><><><><><><><> GALERIA  <><><><><><><><><><><><><><><><><><><><><><><><><><>-->

<div id="videoGallery" class="box jplist" style="margin: 20px 0 50px 0">

    <!-- ios button: show/hide panel -->
<!--     <div class="jplist-ios-button">
        <i class="fa fa-sort"></i>
        Filtro
    </div> -->

    <!-- panel-->
    <div class="jplist-panel box panel-top clearfix ">
        <div class="btnVoltar">
            <a href="index.php">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
                Voltar
            </a>
        </div>

        <div
        class="jplist-drop-down"
        data-control-type="filter-drop-down"
        data-control-name="category-filter"
        data-control-action="filter">
            <ul>
            <li><span data-path="default">Todas as categorias</span></li>
                <?php

                     for($i=0;$i<count($allCategories);$i++) { 
                ?>
                        <li>
                            <span <?php echo ($tema==$allCategories[$i]->getSlug() )? 'data-default="true" ' : '' ?> data-path="<?php echo '.'.$allCategories[$i]->getSlug(); ?>">
                                <?php echo utf8_encode( $allCategories[$i]->getName() ); ?>
                                
                            </span>
                        </li>
                <?php 
                    }
                ?>
            </ul>
        </div>
    </div>
    
    <!-- /* 
        Textos Intro 
        - Mudam consoante o slug da categoria, com a mesma lógica dos items da galeria
    */ -->

    <div class="txtIntro">
        <?php echo (isset($currentCategory[0]) && ($currentCategory[0] != 'default') ) ?  utf8_encode($currentCategory[0]->getText()) : '' ?>
    </div>

    
    <!-- /* 
        Fim Textos Intro 
    */ -->
   

    <!-- data -->
    <div class="list box text-shadow content-gallery">
        <?php
            /* 
                Videos
            */
             for($k=0;$k<count($allContent);$k++) { 
        ?>
                <div class="vid-item col-xs-12 col-sm-6">
                    <a href="<?php echo $allContent[$k]->getUrl(); ?>">
                        <div class="videoRec">
                            <span>
                                <img src="<?php echo utf8_encode($allContent[$k]->getImg()); ?>" alt="" class="<?php echo utf8_encode($allContent[$k]->getSlugCat()) ?>"/>
                            </span>
                            <p class="vidTitle">
                                <?php echo utf8_encode($allContent[$k]->getTitle()) ?>
                            </p>
                            <p class="vidData">
                                <?php 
                                    setlocale(LC_ALL, 'pt_PT');
                                    $date = new DateTime($allContent[$k]->getDate());
                                    echo utf8_encode( strftime('%d de %B de %Y', $date->getTimestamp()) );
                                 ?></p>
                        </div>
                    </a>
                </div>
        <?php
            }
            /* 
               FIM Videos
            */
        ?>

<!--         <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="observamosmais"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="proximonivel"/>
                    </span>
                    <p class="vidTitle">0 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>

        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="turismoemportugal"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="economiaiberica"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjornalexpresso%2Fvideos%2F10154860869902949%2F&show_text=0&autoplay=true">
                <div class="videoRec">
                    <span>
                        <img src="https://graph.facebook.com/10154860869902949/picture" alt="" title="" class="economiaiberica"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>

        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="economiaiberica"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjornalexpresso%2Fvideos%2F10154860869902949%2F&show_text=0&autoplay=true">
                <div class="videoRec">
                    <span>
                        <img src="https://graph.facebook.com/10154860869902949/picture" alt="" title="" class="economiaiberica"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjornalexpresso%2Fvideos%2F10154860869902949%2F&show_text=0&autoplay=true">
                <div class="videoRec">
                    <span>
                        <img src="https://graph.facebook.com/10154860869902949/picture" alt="" title="" class="economiaiberica"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="economiaiberica"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="turismoemportugal"/>
                    </span>
                    <p class="vidTitle">Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>


        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="proximonivel"/>
                    </span>
                    <p class="vidTitle">1 Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="proximonivel"/>
                    </span>
                    <p class="vidTitle">2 Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjornalexpresso%2Fvideos%2F10154860869902949%2F&show_text=0&autoplay=true">
                <div class="videoRec">
                    <span>
                        <img src="https://graph.facebook.com/10154860869902949/picture" alt="" title="" class="proximonivel"/>
                    </span>
                    <p class="vidTitle">3 Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjornalexpresso%2Fvideos%2F10154860869902949%2F&show_text=0&autoplay=false">
                <div class="videoRec">
                    <span>
                        <img src="https://graph.facebook.com/10154860869902949/picture" alt="" title="" class="proximonivel"/>
                    </span>
                    <p class="vidTitle">4 Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div>
        <div class="vid-item col-xs-12 col-sm-6">
            <a href="http://www.youtube.com/embed/YEFesFY5TeI?autoplay=1">
                <div class="videoRec">
                    <span>
                        <img src="http://i.ytimg.com/vi/YEFesFY5TeI/mqdefault.jpg" alt="" title="" class="proximonivel"/>
                    </span>
                    <p class="vidTitle"> 5Lorem ipsum dolor sit amet,consectetur adipiscing elit.</p>
                    <p class="vidData">22 de Agosto de 2017</p>
                </div>
            </a>
        </div> -->
       
    </div>

    <div class="box jplist-hidden text-shadow align-center noResults">
        <p>Nenhum resultado encontrado!</p>
    </div>

    <!-- ios button: show/hide panel -->
<!--     <div class="jplist-ios-button">
        <i class="fa fa-sort"></i>
        Paginação
    </div> -->
    
    <!-- panel -->
    <div class="jplist-panel box panel-bottom clearfix">        
        <div 
           class="jplist-pagination text-center clearfix" 
           data-control-type="pagination" 
           data-control-name="paging" 
           data-control-action="paging"
           data-items-per-page="4"
           data-control-animate-to-top="true">
        </div>
        
    </div>

</div>

<!--<><><><><><><><><><><><><><><><><><><><><><><><><><> GALERIA END <><><><><><><><><><><><><><><><><><><><><><><><><><>-->