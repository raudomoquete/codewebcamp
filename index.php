<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contenedor">
            <h2> La mejor conferencia para desarrolladores en español</h2>
            <p>
            Donde se ofreceran las mejores charlas, cursos, tecnicas de desarrollo y demas. No te lo puedes perder!
            </p>
        </section> <!--seccion-->

        <section class="programa" >
            <div class="contenedor-video">
                <video autoplay loop poster="bg-talleres.jpg">
                    <source src="video/video.mp4" type="video/mp4">
                    <source src="video/video.webm" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">                        
                </video>
            </div> <!--.contenedor video-->
            <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <nav class="menu-programa">
                    <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                    <a href="#conferencias"><i class="fas fa-comments"></i>Conferencias</a>
                    <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="far fa-clock"></i> 13:00 hrs</p>
                            <p><i class="far fa-calendar-alt"></i> 10 de Dic</p>
                            <p><i class="fas fa-user"></i> Raudo Moquete Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                                <h3>Responsive Web Design</h3>
                                <p><i class="far fa-clock"></i> 17:00 hrs</p>
                                <p><i class="far fa-calendar-alt"></i> 10 de Dic</p>
                                <p><i class="fas fa-user"></i> Michael Rosario Baez</p>
                            </div>
                            <a href="#" class="button float-right">Ver todos</a>
                    </div> <!--cierre del div id talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                            <div class="detalle-evento">
                                <h3>Como ser freelancer</h3>
                                <p><i class="far fa-clock"></i> 10:00 hrs</p>
                                <p><i class="far fa-calendar-alt"></i> 10 de Dic</p>
                                <p><i class="fas fa-user"></i> Raudo Moquete Sanchez</p>
                            </div>
                            <div class="detalle-evento">
                                    <h3>Tecnologias del futuro</h3>
                                    <p><i class="far fa-clock"></i> 17:00 hrs</p>
                                    <p><i class="far fa-calendar-alt"></i> 10 de Dic</p>
                                    <p><i class="fas fa-user"></i> Susan Sanchez</p>
                                </div>
                                <a href="#" class="button float-right">Ver todos</a>
                        </div> <!--cierre del div id talleres-->
                        <div id="seminarios" class="info-curso ocultar clearfix">
                                <div class="detalle-evento">
                                    <h3>Diseñeo UI/UX para moviles</h3>
                                    <p><i class="far fa-clock"></i> 10:00 hrs</p>
                                    <p><i class="far fa-calendar-alt"></i> 10 de Dic</p>
                                    <p><i class="fas fa-user"></i> Susan Sanchez</p>
                                </div>
                                <div class="detalle-evento">
                                        <h3>Aprende a Programar en una mañana</h3>
                                        <p><i class="far fa-clock"></i> 9:00 hrs</p>
                                        <p><i class="far fa-calendar-alt"></i> 11 de Dic</p>
                                        <p><i class="fas fa-user"></i> Bryant Baldallaque</p>
                                    </div>
                                    <a href="#" class="button float-right">Ver todos</a>
                            </div> <!--cierre del div id talleres-->
                </div> <!--cierre de programa-evento-->
            </div> <!--contenedor-->
            </div> <!--contenido-programa-->

        </section> <!--cierre de la seccion programa-->

        <section class="invitados contenedor seccion">
            <h2>Nuestros Invitados</h2>
            <ul class="lista-invitados clearfix">
                <li>
                    <div class="invitado">
                        <img src="img/invitado1.jpg" alt="imagen invitado">
                        <p>Rafael Bautista</p>
                    </div>
                </li>
                <li>
                  <div class="invitado">
                        <img src="img/invitado2.jpg" alt="imagen invitado">
                        <p>Shari Herrera</p>
                  </div>
                 </li>
                 <li>
                   <div class="invitado">
                       <img src="img/invitado3.jpg" alt="imagen invitado">
                       <p>Gregorio Sanchez</p>
                    </div>
                  </li>
                 <li>
                  <div class="invitado">
                       <img src="img/invitado4.jpg" alt="imagen invitado">
                       <p>Susana Rivera</p>
                  </div>
                 </li>
                 <li>
                        <div class="invitado">
                            <img src="img/invitado5.jpg" alt="imagen invitado">
                            <p>Harold Garcia</p>
                        </div>
                    </li>
                    <li>
                            <div class="invitado">
                                <img src="img/invitado6.jpg" alt="imagen invitado">
                                <p>Susan Sanchez</p>
                            </div>
                     </li>
            </ul>
        </section>
        <div class="contador parallax">
            <div class="contenedor">
                <ul class="resumen-evento clearfix">
                    <li><p class="numero"></p>Invitados</li>
                    <li><p class="numero"></p>Talleres</li>
                    <li><p class="numero"></p>Dias</li>
                    <li><p class="numero"></p>Conferencias</li>
                </ul>
            </div>
        </div>

        <section class="precios seccion">
            <h2>Precios</h2>
            <div class="contenedor">
                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por dia</h3>
                            <p class="numero">$30</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <a href="#" class="button hollow">Comprar</a>
                        </div>
                    </li>
                    <li>
                            <div class="tabla-precio">
                                <h3>Todos los dias</h3>
                                <p class="numero">$50</p>
                                <ul>
                                    <li>Bocadillos Gratis</li>
                                    <li>Todas las conferencias</li>
                                    <li>Todos los talleres</li>
                                </ul>
                                <a href="#" class="button">Comprar</a>
                            </div>
                        </li>
                        <li>
                                <div class="tabla-precio">
                                    <h3>Pase por 2 dias</h3>
                                    <p class="numero">$45</p>
                                    <ul>
                                        <li>Bocadillos Gratis</li>
                                        <li>Todas las conferencias</li>
                                        <li>Todos los talleres</li>
                                    </ul>
                                    <a href="#" class="button hollow">Comprar</a>
                                </div>
                            </li>
                </ul>
            </div>
        </section>

        <div id="mapa" class="mapa"></div> <!--los datos del mapa se llenan con JavaScript-->

        <section class="seccion">
            <h2>Testimoniales</h2>
            <div class="testimoniales contenedor clearfix">
            
            <div class="testimonial">
                <blockquote><!--cuando usa testimoniales es obligatorio usar blockquote-->
                    <p>Como desarrollador he aprendido cosas basicas, cosas importantes, lo mejor de programar es que traduces una necesidad en una solucuion</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg"  alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>                        
                    </footer>
                </blockquote>
            </div><!--fin testimonial-->
            <div class="testimonial">
                    <blockquote><!--cuando usa testimoniales es obligatorio usar blockquote-->
                        <p>Como desarrollador he aprendido cosas basicas, cosas importantes, lo mejor de programar es que traduces una necesidad en una solucuion</p>
                        <footer class="info-testimonial clearfix">
                            <img src="img/testimonial.jpg"  alt="imagen testimonial">
                            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>                        
                        </footer>
                    </blockquote>
                </div><!--fin testimonial-->
                <div class="testimonial">
                        <blockquote><!--cuando usa testimoniales es obligatorio usar blockquote-->
                            <p>Como desarrollador he aprendido cosas basicas, cosas importantes, lo mejor de programar es que traduces una necesidad en una solucuion</p>
                            <footer class="info-testimonial clearfix">
                                <img src="img/testimonial.jpg"  alt="imagen testimonial">
                                <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>                        
                            </footer>
                        </blockquote>
                    </div><!--fin testimonial-->
                </div>
        </section>

        <div class="newsletter parallax">
            <div class="contenido contenedor">
                <p> registrate al newsletter:</p>
                <h3>codemastercamp</h3>
                <a href="#" class="button transparente">Registro</a>
            </div><!--contenido-->
        </div><!--newsletter-->

        <section class="seccion">
            <h2>Faltan</h2>
            <div class="cuenta-regresiva contenedor">
                <ul class="clearfix">
                    <li><p id="dias" class="numero"></p> dias</li>
                    <li><p id="horas" class="numero"></p> horas</li>
                    <li><p id="minutos" class="numero"></p> minutos</li>
                    <li><p id="segundos" class="numero"></p> segundos</li>
                </ul>
            </div>
        </section>
        <?php include_once 'includes/templates/footer.php'; ?>

       