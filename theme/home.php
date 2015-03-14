<?php
  session_start();
  if ( isset( $_SESSION['zone'] ) ):
    $zone = $_SESSION['zone'];
  else:
    $zone = 0;
  endif;
  $template_url = get_bloginfo( 'template_url' ) . '/';
  $projects_url = get_bloginfo( 'template_url' ) . '/projects/';
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>bbxdesign : Web Designer / Intégrateur WordPress</title>
    <meta name="author" content="bbx">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $template_url; ?>fonts.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $template_url; ?>home.css" type="text/css">
    <link rel="icon" href="/the-bbx.ico">
    <noscript>
      <style type="text/css">
        #loading,
        #timeline{ display: none;}
        #hey,
        #there,
        #view-portfolio,
        #send-email,
        .title,
        .subtitle,
        #testimonials .reel,
        .skill,
        .level strong,
        .project,
        #detail-background,
        #detail,
        #detail-image,
        #detail-name,
        #detail-description,
        #detail-border,
        #detail-text,
        #detail-link,
        #detail-close,
        #detail-next,
        #detail-previous,
        #detail-apps .app,
        .element,
        #send{ opacity: 1;}
        #header{ position: fixed; top: 0;}
        #projects{ height: auto;}
        .project{ position: relative;}
      </style>
    </noscript>
  </head>
  <body data-zone="<?php echo $zone; ?>">
    <div id="loading">
      <div id="loading-top"></div>
      <div id="loading-bottom"></div>
      <div id="loading-circle"></div>
      <div id="loading-disc"></div>
      <div id="loading-atoms">
        <div id="loading-atom-1" class="loading-atom"></div>
        <div id="loading-atom-2" class="loading-atom"></div>
        <div id="loading-atom-3" class="loading-atom"></div>
        <div id="loading-atom-4" class="loading-atom"></div>
      </div>
    </div>
    <header id="header">
      <div id="logo">
        <h1 id="name">bbxdesign</h1>
        <h2 id="description">Web Designer / Intégrateur WordPress</h2>
      </div>
      <a id="menu"></a>
      <nav id="nav">
        <ul>
          <li><a id="nav-home" class="nav on" href="http://bbxdesign.com/home">Home</a></li>
          <li><a id="nav-skills" class="nav" href="http://bbxdesign.com/skills">Skills</a></li>
          <li><a id="nav-portfolio" class="nav" href="http://bbxdesign.com/portfolio">Portfolio</a></li>
          <li><a id="nav-timeline" class="nav" href="http://bbxdesign.com/timeline">Timeline</a></li>
          <li><a id="nav-contact" class="nav" href="http://bbxdesign.com/contact">Contact</a></li>
          <li><a id="nav-blog" class="nav" href="http://bbxdesign.com/blog">Blog</a></li>
        </ul>
      </nav>
    </header>
    <section id="hello">
      <div id="you">
        <h3 id="hey">Web Designer &amp; CSS Guru</h3>
        <h4 id="there">
          bbx est un fou : il dessine au pixel pr&egrave;s, il code hyper propre,<br>
          il d&eacute;v des th&egrave;mes WordPress, et &eacute;crit m&ecirc;me des tutos gratuits.<br>
          Bref, il sait tout faire, m&ecirc;me les cheesecakes.
        </h4>
        <p>
          <a id="view-portfolio" class="button button-portfolio">Voir mon portfolio</a>
          <a id="send-email" class="button button-email">M'envoyer un email</a>
        </p>
      </div>
    </section>
    <div id="testimonials" class="slider">
      <div class="aperture">
        <div class="reel">
          <div class="item testimonial">
            <blockquote>
              &ldquo; Un grand merci pour ce g&eacute;nialissime tutoriel sur WP. C&rsquo;est &agrave; ce jour le meilleur que j&rsquo;ai pu trouver sur Internet. &rdquo;
            </blockquote>
            <p>Fr&eacute;d&eacute;ric Mathieu</p>
          </div>
          <div class="item testimonial">
            <blockquote>
              &ldquo; Waoouuh quelle r&eacute;activit&eacute; ! Merci pour ton suivi Jeremy, &ccedil;a fait vraiment plaisir. &rdquo;
            </blockquote>
            <p>Christian Bouet</p>
          </div>
          <div class="item testimonial">
            <blockquote>
              &ldquo; Bluff&eacute;, j'ai &eacute;t&eacute; bluff&eacute;, par la passion qui anime vos sites. &rdquo;
            </blockquote>
            <p>Nicolas Latchimy</p>
          </div>
          <div class="item testimonial">
            <blockquote>
              &ldquo; Waou ! C'est beau ! Ce que j'adore avec toi c'est que qd tu fais un truc m&ecirc;me tout petit c'est toujours bien fait ! &rdquo;
            </blockquote>
            <p>Corine Dutin</p>
          </div>
          <div class="item testimonial">
            <blockquote>
              &ldquo; Encore une fois un grand, tr&egrave;s grand merci, si ce blog prend enfin vie ce sera gr&acirc;ce &agrave; vous. &rdquo;
            </blockquote>
            <p>Le dinosaure radoteur</p>
          </div>
          <div class="item testimonial">
            <blockquote>
              &ldquo; Merci pour ce tutorial magique, qui me donne envie de l&acirc;cher tout pour faire des th&egrave;mes wordpress ^^. &rdquo;
            </blockquote>
            <p>Thomas Leduc</p>
          </div>
          <div class="item testimonial">
            <blockquote>
              &ldquo; En tout cas merci pour cette initiative, remplie d&rsquo;humour et de po&eacute;sie, et bonne continuation. &rdquo;
            </blockquote>
            <p>Benjamin Danon</p>
          </div>
        </div>
      </div>
      <div style="clear: left;"></div>
      <p class="dots">
        <a class="current">1</a>
        <a>2</a>
        <a>3</a>
        <a>4</a>
        <a>5</a>
        <a>6</a>
        <a>7</a>
      </p>
      <a id="testimonial-previous" class="arrow arrow-previous">Previous</a>
      <a id="testimonial-next" class="arrow arrow-next">Next</a>
    </div>
    <section id="skills">
      <div class="heading">
        <h3 class="title">Skills</h3>
        <h4 class="subtitle">L'art et la science</h4>
      </div>
      <div class="wrap">
        <ul class="skills">
          <li id="html5" class="skill">
            <div class="level">
              <strong>100%</strong>
            </div>
            <div class="skill-icon"></div>
            <h4 class="skill-title">HTML 5 + CSS 3</h4>
            <ul class="skill-list">
              <li>Responsive Design</li>
              <li>CSS Animations</li>
              <li>Transform &amp; Gradients</li>
              <li>HTML 5 Semantic Markup</li>
              <li>Font-Face</li>
            </ul>
          </li>
          <li id="wordpress" class="skill">
            <div class="level level-90">
              <strong>90%</strong>
            </div>
            <div class="skill-icon"></div>
            <h4 class="skill-title">WordPress</h4>
            <ul class="skill-list">
              <li>Original Designs</li>
              <li>Theme Settings</li>
              <li>Post Formats</li>
              <li>Custom Post Types</li>
              <li>Custom Taxonomies</li>
              <li>Category Colors</li>
            </ul>
          </li>
          <li id="jquery" class="skill">
            <div class="level level-80">
              <strong>80%</strong>
            </div>
            <div class="skill-icon"></div>
            <h4 class="skill-title">jQuery</h4>
            <ul class="skill-list">
              <li>DOM Manipulations</li>
              <li>Pinterest Layouts</li>
              <li>HTML 5 History</li>
              <li>Animations</li>
              <li>Sliders</li>
              <li>Image Galleries</li>
              <li>Modal Boxes</li>
            </ul>
          </li>
          <li id="photoshop" class="skill">
            <div class="level level-80">
              <strong>80%</strong>
            </div>
            <div class="skill-icon"></div>
            <h4 class="skill-title">Photoshop</h4>
            <ul class="skill-list">
              <li>Pixel Design</li>
              <li>Website Layouts</li>
              <li>Icon Conception</li>
              <li>Picture Manipulations</li>
            </ul>
          </li>
          <li id="illustrator" class="skill">
            <div class="level level-60">
              <strong>60%</strong>
            </div>
            <div class="skill-icon"></div>
            <h4 class="skill-title">Illustrator</h4>
            <ul class="skill-list">
              <li>Vector Design</li>
              <li>Logo Conception</li>
              <li>Background Patterns</li>
            </ul>
          </li>
        </ul>
      </div>
    </section>
    <section id="portfolio">
      <div class="heading">
        <h3 class="title">Portfolio</h3>
      </div>
      <div id="projects">
        <a id="bbx" class="project" href="http://bbxdesign.com/home" data-text="Presque 2 ans sans mise à jour visuelle ou éditoriale, bbxdesign se sentait bien navré et solitaire. Pour m'en excuser, je lui ai fait la totale : design fringant, animations CSS, responsive design, et du jQuery à foison. Un WordPress from scratch et des milliers de ligne de code à optimiser...">
          <img class="project-image" src="<?php echo $projects_url; ?>bbx.png" alt="JThomas">
          <div class="project-content">
            <h4 class="project-name">bbxdesign</h4>
            <h5 class="project-description">Vestiges d'un CSS Guru</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
              <p class="app app-wordpress">WordPress</p>
            </div>
          </div>
        </a>
        <a id="jt" class="project" href="http://jt.ms" data-text="Il y a quelques temps déjà, j'avais acheté le nom de domaine jt.ms parce qu'il reprenait quelque peu mes initiales. Pendant longtemps, je l'ai utilisé comme simple URL shortener avant de récemment le convertir en carte de visite digitale et animée. Du coup, lorsqu'on me demande ce que je fais sur le web, je réponds juste : 'j-t-point-m-s'.">
          <img class="project-image" src="<?php echo $projects_url; ?>jt.png" alt="JThomas">
          <div class="project-content">
            <h4 class="project-name">JT.ms</h4>
            <h5 class="project-description">Digital Web Card</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
            </div>
          </div>
        </a>
        <a id="cv" class="project" href="http://www.cambodiavietnam2010.com" data-text="En 2010, une amie et moi sommes allés en voyage en Asie du sud-est. Dès le départ, j'avais comme idée de concevoir un site web en rentrant qui relaterait notre parcours. L'idée était simple : 1 ville = 1 design. La réalisation du site a longtemps stagnée aux alentours des 80% (notamment à cause du jQuery...), avant de me décider, 1 an et demi plus tard, de l'achever définitivement.">
          <img class="project-image" src="<?php echo $projects_url; ?>cv.png" alt="Cambodia Vietnam 2010">
          <div class="project-content">
            <h4 class="project-name">Cambodia Vietnam 2010</h4>
            <h5 class="project-description">Trip Summary</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
            </div>
          </div>
        </a>
        <a id="wp" class="project" href="http://wordpress.bbxdesign.com" data-text="N'étant qu'un simple designer, j'ai très souvent eu recours à WordPress pour mes besoins en développement web. Au fil des ans, j'ai acquis une connaissance avancée de la création de thème, exclusivement à partir de zéro. Le tutoriel clair et concis est celui que j'aurais voulu lire à mes débuts avec WordPress.">
          <img class="project-image" src="<?php echo $projects_url; ?>wp.png" alt="WordPress : le Tutoriel">
          <div class="project-content">
            <h4 class="project-name">WordPress : le Tutoriel</h4>
            <h5 class="project-description">Super Cadeau</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
              <p class="app app-wordpress">WordPress</p>
            </div>
          </div>
        </a>
        <a id="em" class="project" href="http://editions-magellan.com" data-text="Une amie en stage chez l'éditeur de livres de voyage Magellan & Cie m'a recommandée pour la conception de leur site web. Je me suis chargé du design et de l'intégration, le développement en Rails étant effectué par un ami et collègue. Ce premier projet freelance reste à ce jour l'un de mes préférés.">
          <img class="project-image" src="<?php echo $projects_url; ?>em.png" alt="Editions Magellan">
          <div class="project-content">
            <h4 class="project-name">Editions Magellan</h4>
            <h5 class="project-description">Litt&eacute;rature de Voyage</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
            </div>
          </div>
        </a>
        <a id="at" class="project" href="http://australietrip.fr" data-text="Une amie avait pour projet de quitter Paris pour partir 1 an (au moins) en Australie. Elle m'a demandée la réalisation d'un simple blog WordPress comme journal de bord d'aventurière. Ça reste à ce jour ma première (et dernière) expérience avec Cufon (pour les polices).">
          <img class="project-image" src="<?php echo $projects_url; ?>at.png" alt="Australie Trip">
          <div class="project-content">
            <h4 class="project-name">Australie Trip</h4>
            <h5 class="project-description">Blog M&eacute;ridional</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
              <p class="app app-wordpress">WordPress</p>
            </div>
          </div>
        </a>
        <a id="yk" class="project" href="http://yeek.fr" data-text="Une collection de cadeaux geek et design ? Rien de plus simple avec les Custom Post de WordPress. Réalisé avec une amie, ce site est mon premier design orienté shopping, et m'a par ailleurs permis de quelque peu développer mes compétences en Php.">
          <img class="project-image" src="<?php echo $projects_url; ?>yk.png" alt="Yeek">
          <div class="project-content">
            <h4 class="project-name">Yeek</h4>
            <h5 class="project-description">Cadeaux Geek &amp; Design</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
              <p class="app app-wordpress">WordPress</p>
            </div>
          </div>
        </a>
        <a id="tt" class="project" href="http://task-this.bbxdesign.com" data-text="J'ai toujours voulu concevoir le site d'une appli iPhone. L'occasion ne se présentant pas, j'ai suggéré à l'auteur d'une appli que j'utilisais de lui réaliser (gratuitement) son site web. Résultat : une page unique (au sens propre) et une première expérience avec jQuery.">
          <img class="project-image" src="<?php echo $projects_url; ?>tt.png" alt="Task This">
          <div class="project-content">
            <h4 class="project-name">Task This</h4>
            <h5 class="project-description">iPhone App</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
            </div>
          </div>
        </a>
        <a id="jg" class="project" href="http://jgthms.com" data-text="Étant quasi-exclusivement lecteur d'articles en anglais concernant le web, j'ai voulu lancer mon propre blog en anglais. Une solution très simple s'est proposée : Jekyll, un générateur de site statique qui fait office de moteur de blog pour GitHub. Il m'a par ailleurs introduit à Git : une merveille.">
          <img class="project-image" src="<?php echo $projects_url; ?>jg.png" alt="jgthms">
          <div class="project-content">
            <h4 class="project-name">jgthms.com</h4>
            <h5 class="project-description">GitHub Blog</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
            </div>
          </div>
        </a>
        <a id="css" class="project" href="http://css.steaw.com" data-text="Mes compétences en intégration m'ont values le surnom de 'CSS Guru'. Pourtant, il n'y a rien de bien compliqué, si ? La preuve en humour, images, et poésie.">
          <img class="project-image" src="<?php echo $projects_url; ?>css.png" alt="CSS : l'Art & la Science">
          <div class="project-content">
            <h4 class="project-name">CSS : l'Art &amp; la Science</h4>
            <h5 class="project-description">M&eacute;ga Cadeau</h5>
            <div class="project-apps">
              <p class="app app-sublime-text">Sublime Text</p>
            </div>
          </div>
        </a>
        <a id="rtt" class="project" href="http://reachthethrone.com" data-text="Depuis 2011 et ma rentrée au Conservatoire de Bordeaux en MAO, j'ai produit une quantité grandissante de musique. Il manquait juste l'élément principal : la voix. Du coup, j'ai repris les versions acapella des morceaux de Jay-Z et Kanye West, en y incorporant ma propre production. Un cocktail de Rock / Hip Hop / Electro.">
          <img class="project-image" src="<?php echo $projects_url; ?>rtt.png" alt="Reach the Throne">
          <div class="project-content">
            <h4 class="project-name">Reach the Throne</h4>
            <h5 class="project-description">Hip Hop Album</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
            </div>
          </div>
        </a>
        <a id="jthomas" class="project" href="http://jthom.as" data-text="En fond : havre littéraire, culturel, et intime pour un nom de domaine joliment confidentiel. En forme : du Google Web Font, du HTML 5 History, du Pinterest Layout, et du WordPress, évidemment.">
          <img class="project-image" src="<?php echo $projects_url; ?>jthomas.png" alt="JThomas">
          <div class="project-content">
            <h4 class="project-name">Jthom.as</h4>
            <h5 class="project-description">Jardin secret</h5>
            <div class="project-apps">
              <p class="app">Photoshop</p>
              <p class="app app-sublime-text">Sublime Text</p>
              <p class="app app-wordpress">WordPress</p>
            </div>
          </div>
        </a>
        <div style="clear: both;"></div>
      </div>
    </section>
    <section id="timeline">
      <div class="heading">
        <h3 class="title">Timeline</h3>
        <h4 class="subtitle">Le parcours atypique d’un type pas typique</h4>
      </div>
      <div id="calendar">
        <div id="time"></div>
        <div id="chapters">
          <div id="magendie" class="chapter">
            <strong>Lyc&eacute;e Fran&ccedil;ois Magendie</strong>
            <em>ES-OIB</em>
            <div class="chapter-time">3 ans</div>
            <span></span>
          </div>
          <div id="cachan" class="chapter">
            <strong>Pr&eacute;pa Cachan D2</strong>
            <em>Eco-Gestion</em>
            <div class="chapter-time">2 ans</div>
            <span></span>
          </div>
          <div id="bordeaux4" class="chapter">
            <strong>Fac</strong>
            <em>Licence</em>
            <div class="chapter-time">6 mois</div>
            <span></span>
          </div>
          <div id="amtv" class="chapter">
            <strong>AMTV</strong>
            <em>Cursus Web</em>
            <div class="chapter-time">10 mois</div>
            <span></span>
          </div>
          <div id="mgd" class="chapter">
            <strong>MGD</strong>
            <em>Graphiste</em>
            <div class="chapter-time">10 mois</div>
            <span></span>
          </div>
          <div id="virtuoz" class="chapter">
            <strong>VirtuOz</strong>
            <em>Web Designer</em>
            <div class="chapter-time">10 mois</div>
            <span></span>
          </div>
          <div id="steaw" class="chapter">
            <strong>Steaw</strong>
            <em>Directeur Artistique Junior</em>
            <div class="chapter-time">2 ans 4 mois</div>
            <span></span>
          </div>
          <ul id="years">
            <li>1999</li>
            <li>2000</li>
            <li>2001</li>
            <li>2002</li>
            <li>2003</li>
            <li>2004</li>
            <li>2005</li>
            <li>2006</li>
            <li>2007</li>
            <li>2008</li>
            <li>2009</li>
            <li>2010</li>
            <li>2011</li>
            <li>2012</li>
          </ul>
        </div>
      </div>
      <div id="stories">
        <div id="stories-reel">
          <div class="story current" data-related="0">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(109, 137, 172); border-bottom-color: rgb(50, 89, 137);">1</div>
              <h5>Dipl&ocirc;mes et d&eacute;viations</h5>
              <p>Baccaular&eacute;at ES avec Option Internationale (litt&eacute;rature et histoire en anglais). J&rsquo;encha&icirc;ne avec une pr&eacute;pa Eco-Gestion pendant 2 ans. Malgr&eacute; mon bon niveau et mes chances de rentrer &agrave; Cachan (dixit le professeur principal), je me lasse de ce domaine et ne passe aucun concours. J&rsquo;ai n&eacute;anmoins mon DEUG (inutile) en poche et essaye de m&rsquo;accrocher &agrave; la 3e ann&eacute;e de Licence. Rien &agrave; faire : 6 mois suffiront &agrave; me convaincre de la n&eacute;cessit&eacute; d&rsquo;un parcours alternatif.</p>
            </div>
          </div>
          <div class="story" data-related="2">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(205, 205, 0); border-bottom-color: rgb(138, 138, 0);">2</div>
              <h5>Cr&eacute;ativit&eacute; et application</h5>
              <p>Entre-temps, je commence &agrave; m&rsquo;int&eacute;resser &agrave; Photoshop. Pas pour des sites web non, juste pour des banni&egrave;res et signatures de foot avant tout. L&rsquo;espace cr&eacute;atif apport&eacute; par ce nouvel outil me convainc de m&rsquo;y professionnaliser. J&rsquo;entre en septembre &agrave; l&rsquo;&eacute;cole AMTV de Bordeaux dans le cursus Infographiste. Les 6 premiers mois sont partag&eacute;s avec le cursus Web et m&rsquo;apprennent beaucoup sur le plan graphique. Au bout de cette demi-ann&eacute;e, le Web me s&eacute;duit davantage que l&rsquo;Infographie. Je d&eacute;cide donc de changer de cursus.</p>
            </div>
          </div>
          <div class="story" data-related="3">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(78, 78, 78); border-bottom-color: rgb(31, 31, 31);">3</div>
              <h5>Apparence et r&eacute;v&eacute;lation</h5>
              <p>Autant l&rsquo;&eacute;cole a un bon niveau graphique, autant elle est ex&eacute;crable au niveau web. On int&egrave;gre sous Dreamweaver en &lt;table&gt;, on supprime les Doctype, on se partage du code ASP sur des bouts de papier... Mais un unique cours d&rsquo;accessibilit&eacute; change ma vision du web. L&rsquo;intervenant nous parle de s&eacute;paration contenu/pr&eacute;sentation, de s&eacute;mantique, et de feuille de style, puis nous montre CSS Zen Garden. La r&eacute;v&eacute;lation ultime.</p>
            </div>
          </div>
          <div class="story" data-related="3">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(78, 78, 78); border-bottom-color: rgb(31, 31, 31);">4</div>
              <h5>Lecture et professionnalisation</h5>
              <p>Je me procure <em>CSS 2 Pratique du Design Web</em>, le lit deux fois, et commence &agrave; mettre en pratique ces techniques d'int&eacute;gration, en marge de mes cours &agrave; l'&eacute;cole. Je d&eacute;couvre Stop Design, Alsacreations et WordPress, avec lequel je r&eacute;alise mon projet de fin d'ann&eacute;e. Entre-temps, mes capacit&eacute;s linguistiques FR/NL/EN me permettent de d&eacute;crocher un poste inattendu chez Mistergoodeal en tant que Graphiste.</p>
            </div>
          </div>
          <div class="story" data-related="4">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(0, 153, 204); border-bottom-color: rgb(5, 99, 130);">5</div>
              <h5>Capitale et progression</h5>
              <p>Mon quotidien est fait de newsletters, de banni&egrave;res pub, mais rarement d'int&eacute;gration. Ce n'est que dans les derni&egrave;res semaines que je me vois responsable d'un projet d'envergure : l'int&eacute;gration du nouveau site M6 Boutique. Mais ma d&eacute;cision est d&eacute;j&agrave; prise : suite &agrave; une annonce que Pulupulu m'a refil&eacute;, et apr&egrave;s un test concluant, me voici rendu chez VirtuOz en tant que Web Designer.</p>
            </div>
          </div>
          <div class="story" data-related="5">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(182, 0, 0); border-bottom-color: rgb(133, 6, 6);">6</div>
              <h5>Op&eacute;ra et d&eacute;nominations</h5>
              <p>Mon r&ocirc;le est de travailler sur le site communautaire Skaaz, et d'assister le Directeur Artistique en place, Fran&ccedil;ois Le Pichon. Enfin... D&egrave;s mon 1er jour de travail, il m'annonce qu'il part dans 2 mois pour monter son studio de web design, ColdSteam (finalement appel&eacute; Steaw). Me voici donc &agrave; la fois Web Designer pour Skaaz et DA Junior <em>de facto</em> pour VirtuOz. Mais suite &agrave; la fermeture de Skaaz, et malgr&eacute; une bonne ambiance, mon quotidien parsem&eacute; de r&eacute;unions r&eacute;p&eacute;t&eacute;es et de d&eacute;buggage Flash me pousse &agrave; r&eacute;pondre &agrave; l'appel du pied de Fran&ccedil;ois.</p>
            </div>
          </div>
          <div class="story" data-related="6">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(9, 64, 98); border-bottom-color: rgb(2, 28, 44);">7</div><h5>St Lazare et horizons</h5>
              <p>Steaw, malgr&eacute; son jeune &acirc;ge, est d&eacute;j&agrave; en pleine ascension. Fran&ccedil;ois Le Pichon, son fr&egrave;re Vincent, et moi-m&ecirc;me, forment pendant plus d'un an une mini dream-team : le Graphic Fighter, l'Illustrateur, et le CSS Guru. La compl&eacute;mentarit&eacute; et la flexibilit&eacute; de l'&eacute;quipe, ainsi que le s&eacute;rieux reconnu de son travail, la font rapidement conna&icirc;tre, et l'am&egrave;nent notamment &agrave; New York en s&eacute;minaire et &agrave; San Francisco, invit&eacute;e par Microsoft suite &agrave; une collaboration au lancement d'IE9.</p>
            </div>
          </div>
          <div class="story" data-related="6">
            <div class="story-content">
              <div class="story-number" style="background-color: rgb(9, 64, 98); border-bottom-color: rgb(2, 28, 44);">8</div>
              <h5>Ste Anne et explorations</h5>
              <p>Le studio s'est entre-temps r&eacute;guli&egrave;rement agrandi, ce qui nous dirige vers de nouveaux locaux. L'axe exclusivement design pr&ocirc;n&eacute; par Steaw am&egrave;ne la cr&eacute;ation d'un studio ax&eacute; exclusivement d&eacute;veloppement : Waest. Malgr&eacute; ma situation que je sais exceptionnelle au sein d'un studio reconnu et moderne, et malgr&eacute; l'ambiance et la coh&eacute;sion in&eacute;galables qui r&egrave;gnent au sein de l'&eacute;quipe, mon d&eacute;sir de parcourir d'autres sentiers m'am&egrave;ne &agrave; quitter le web, et donc Steaw, en sachant pertinemment avoir go&ucirc;t&eacute; au gratin du domaine.</p>
            </div>
          </div>
          <a id="restart">&laquo;</a>
          <div style="clear: left;"></div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="heading">
        <h3 class="title">Contact</h3>
      </div>
      <?php echo do_shortcode( '[contact-form-7 id="2265" title="Contact"]' ); ?>
    </section>
    <div id="preview">
      <div id="detail-background"></div>
      <article id="detail">
        <div id="detail-image"></div>
        <div id="detail-left">
          <div id="detail-content">
            <h4 id="detail-name"></h4>
            <h5 id="detail-description"></h5>
            <hr id="detail-border">
            <p id="detail-text"></p>
            <a id="detail-link" class="button button-visit detail-button" target="_blank">Visiter le site</a>
            <div id="detail-apps"></div>
            <div id="detail-close"></div>
            <div id="detail-next"></div>
            <div id="detail-previous"></div>
          </div>
        </div>
      </article>
    </div>
    <script src="<?php echo $template_url; ?>jquery-1.10.2.min.js"></script>
    <script src="<?php echo $template_url; ?>jquery.easing.1.3.js"></script>
    <script src="<?php echo $template_url; ?>slider.js"></script>
    <script src="<?php echo $template_url; ?>home.js"></script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-5349320-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <?php wp_footer(); ?>
  </body>
</html>