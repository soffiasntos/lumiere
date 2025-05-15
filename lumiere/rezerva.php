<?php
require_once("sistema/conexao.php");
 ?>


<!DOCTYPE html>
<html>

<head>
  <title><?php echo $nome_sistema ?></title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  
  <link rel="shortcut icon" type="image/x-icon" href="sistema/img/icone.png">

  <!-- =======================================================
    Theme Name: Alstar
    Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<style type="text/css">

a, a:hover {
  color: <?php echo $cor_sistema?>;
}


/* Back to top button */
.back-to-top {
  background:<?php echo $cor_sistema?>;
  color: #fff;
}


.back-to-top:focus {
  background: <?php echo $cor_sistema?>;
  color: #fff;
}

.back-to-top:hover {
  background: <?php echo $cor_sistema?>;
  color: #fff;
}

.navbar-default {
  background: <?phpecho $cor_sistema?> ;
}

.form-control:focus {
  border-color:;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 2px <?php echo $cor_sistema?>;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 2px <?php echo $cor_sistema?>;
}

.service .carousel-indicators .active {
  background:<?php echo $cor_sistema?>;
}

.btn-theme {
  background:<?php echo $cor_sistema?>;
}

.contact-widget i {
  color:<?php echo$cor_sistema?>;
}

#intro .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 3px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid<?php echo $cor_sistema?>;
}

#intro .btn-get-started:hover {
  background:<?php echo $cor_sistema?>;
  color: #fff;
  text-decoration: none;
}


footer {
	background:<?php echo $cor_sistema?>;
	color: #fff;
	padding: 50px 0 30px;
}

</style>






<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.html"><?php echo $nome_sistema?></a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#portfolio">Works</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="./banner/banner2.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
               
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="./banner/2.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
             
              </div>
            </div>
          </div>

        

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>About us</h2>
            <div class="heading-line"></div>
            <p>A Lumière é uma locadora online dedicada a proporcionar aos seus clientes uma experiência única no mundo do cinema e entretenimento</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="sistema/img/rr.jpg" alt="">
        </div>

        <div class="col-md-6 content">
        
          <h3>Acreditamos que o cinema tem o poder de conectar pessoas e de proporcionar experiências emocionantes e transformadoras.
          </h3>
          <p>
          Com uma vasta seleção de filmes, séries e documentários, nosso objetivo é tornar o acesso à cultura cinematográfica mais fácil, conveniente

          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Details are the key for perfection</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">We mix all detailed things together</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2> <?php echo $titulo_servicos ?></h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Locação de Filmes e Séries</h4>
                      <p>Na Lumière, você encontra um catálogo diversificado de filmes e séries, desde clássicos do cinema até os lançamentos mais recentes. Com apenas alguns cliques, você pode alugar títulos exclusivos e assistir no conforto da sua casa, sem complicações.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="sistema/img/fundo.jpg" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item ">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Curadoria Especializada</h4>
                      <p>Nossa equipe seleciona os melhores conteúdos para garantir que você tenha acesso a obras de qualidade. Seja para maratonar uma série envolvente, explorar documentários instigantes ou reviver grandes clássicos, oferecemos recomendações personalizadas para cada gosto.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/22.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Acesso Fácil e Conveniente</h4>
                      <p>Com uma plataforma intuitiva e acessível, alugar um filme na Lumière é rápido e prático. Compatível com diversos dispositivos, garantimos que sua experiência seja fluida e sem interrupções, para que você possa aproveitar o melhor do entretenimento onde e quando quiser.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/33.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Works -->
  <section id="portfolio" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Works</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <ul id="og-grid" class="og-grid">
            <li>
              <a href="https://youtu.be/vXKcWRu8K_U?si=VwlZGDVTeG238Ro8" data-largesrc="img/works/1.png" data-title="Aftersun" data-description="Sophie reflete sobre a alegria e a melancolia das férias que ela tirou com seu pai 20 anos antes. Memórias reais e imaginárias preenchem as lacunas enquanto ela tenta reconciliar o pai que conheceu com o homem que desconhecia.
">
                <img src="img/works/thumbs/1.png" alt="" />
              </a>
            </li>
            <li>
              <a href="https://youtu.be/_NzqP0jmk3o?si=dIS-KT9bFXV_Gsob" data-largesrc="img/works/2.png" data-title="ainda estou aqui" data-description="No início da década de 1970, o Brasil enfrenta o endurecimento da ditadura militar. No Rio de Janeiro, a família Paiva - Rubens, Eunice e seus cinco filhos - vive à beira da praia em uma casa de portas abertas para os amigos. Um dia, Rubens Paiva é levado por militares à paisana e desaparece.">
                <img src="img/works/thumbs/6.png" alt="" />
              </a>
            </li>
            <li>
              <a href="https://youtu.be/Z9AYPxH5NTM?si=TNk2glbltT0eIfUx" data-largesrc="img/works/3.png" data-title="call me by your name" data-description="O jovem Elio está enfrentando outro verão preguiçoso na casa de seus pais na bela e lânguida paisagem italiana. Mas tudo muda com a chegada de Oliver, um acadêmico que veio ajudar a pesquisa de seu pai.
">
                <img src="img/works/thumbs/3.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="

https://youtu.be/F5CVQ5asYtY?si=wfXitNQCThd2YupP
" data-largesrc="img/works/4.png" data-title="cantando na chuva
" data-description= "Cantando na Chuva é um musical que se passa na transição do cinema mudo para o sonoro. Don Lockwood, um astro do cinema mudo, e sua parceira Lina Lamont enfrentam dificuldades quando seu filme precisa ser adaptado para o som. Com a ajuda da dubladora Kathy Selden, eles tentam salvar a produção, resultando em cenas icônicas e números musicais memoráveis.">
                <img src="img/works/thumbs/4.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="
https://youtu.be/m8GuedsQnWQ?si=kyewRfA_GVoER4lt
" data-largesrc="img/works/5.png" data-title="in the mood for love
" data-description="Em 1962, o jornalista Chow Mo-wan se muda para Hong Kong com sua mulher, que está sempre envolvida com o trabalho e para pouco em casa. Chow faz amizade com a vizinha Su Li-zhen e ambos descobrem que seus parceiros os traem.
">
                <img src="img/works/thumbs/5.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="https://youtu.be/9NJj12tJzqc?si=bpobxAMZQWMJpz-g" data-largesrc="img/works/6.png" data-title="moonlight" data-description="Em Moonlight: Sob a Luz do Luar, acompanhamos três momentos da vida de Chiron, um jovem negro morador de uma comunidade pobre de Miami. Do bullying na infância, passando pela crise de identidade da adolescência e a tentação do universo do crime e das drogas, este é um poético estudo de personagem.
">
                <img src="img/works/thumbs/2.png" alt="img01" />
              </a>
            </li>
            <li>
              <a data-largesrc="img/works/7.png" data-title="o pagador de promessas 
" data-description="Zé do Burro, um simples camponês, faz uma promessa a Santa Bárbara para curar seu burro doente e decide levá-lo até Salvador para cumprir seu voto. Porém, ao chegar à cidade, ele enfrenta resistência da Igreja e das autoridades, que não aceitam a promessa de um homem humilde. O filme aborda temas como fé, preconceito e a tensão entre a religiosidade popular e institucionalizada. O Pagador de Promessas ganhou a Palma de Ouro no Festival de Cannes de 1962.
">
                <img src="img/works/thumbs/7.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="https://youtu.be/kA244xewjcI?si=FpXS41Gc85nj3_se
" data-largesrc="img/works/8.png" data-title="
Past lives" data-description="Vidas Passadas é um drama que conta a história de Nora (Greta Lee) e Hae Sung (Teo Yoo), dois amigos de infância com uma conexão profunda, mas que acabam se separando quando a família de Nora decide sair da Coréia do Sul e se mudar para a cidade de Toronto. Vinte anos depois, os dois amigos se reencontram em Nova York e vivenciam uma semana fatídica enquanto confrontam as noções de destino, amor e as escolhas que compõem uma vida.
">
                <img src="img/works/thumbs/8.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="https://youtu.be/Ngy4qNT7WSo?si=iXX8MxVdRyT4pR6s
" data-largesrc="img/works/9.png" data-title="recife frio
" data-description="Um meteorito cai sobre Recife e a cidade começa a enfrentar baixas temperaturas. O local sofre com os efeitos deste acontecimento sobrenatural e deixa de ser tropical para incluir até pinguins em sua região.
">
                <img src="img/works/thumbs/9.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="https://youtu.be/hWBxoH4-4yw?si=m-g1DsG4NFTPd054" data-largesrc="img/works/10.png" data-title="Soul
" data-description="Joe é um professor de música do ensino médio apaixonado por jazz, cuja vida não foi como ele esperava. Quando ele viaja a uma outra realidade para ajudar outra pessoa a encontrar sua paixão, ele descobre o verdadeiro sentido da vida.
">
                <img src="img/works/thumbs/12.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/11.png" data-title="the love witch
" data-description="A jovem bruxa Elaine está determinada a encontrar um amor e faz feitiços e poções para seduzir os homens que deseja, mas após finalmente conhecer o homem de seus sonhos, seu desespero para ser amada a leva à beira da insanidade.
">
                <img src="img/works/thumbs/11.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/12.png" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                <img src="img/works/thumbs/10.png" alt="img01" />
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 2 -->
  <section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="img/clients/1.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="img/clients/2.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="img/clients/3.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="img/clients/4.png" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Our Team</h2>
            <div class="heading-line"></div>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="img/team/1p.jpg" alt="" class="img-circle img-responsive" />
            <h4>Havana Rose Liu</h4>
            <p>Marketing </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/2p.jpg" alt="" class="img-circle img-responsive" />
            <h4>Courtney Eaton</h4>
            <p>Curadora de Conteúdo</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/3p.jpg" alt="" class="img-circle img-responsive" />
            <h4>Cailee Spaeny</h4>
            <p>Analista de Comunicação</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/4.jpg" alt="" class="img-circle img-responsive" />
            <h4>Mira Ladovic</h4>
            <p>Desenvolvedora</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2> <?php echo $titulo_contato ?></h2>
            <div class="heading-line"></div>
            <p> <?php echo $subtitulo_contato?> </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" class="form-horizontal contactForm" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              <?php echo $endereco_sistema ?><br />
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
            <?php echo $telefone_sistema?><br> 

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
             <?php echo $email_sistema ?><br />
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Alstar. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>


  <style>
    .navbar-default {
    background:rgb(0, 0, 0);
},
  </style>
</body>

</html>
