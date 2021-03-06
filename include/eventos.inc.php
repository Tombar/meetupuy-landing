<?php

/*
  'conferencia' => array(
  'titulo'    => '',
  'lugar'     => '',
  'fecha'     => array(
  'ini' => '2012/11/4',
  'fin' => '2012/11/4'
  ),
  'horario'   =>  array(
  '2012/11/4' => array(
  'ini' => '15:00',
  'fin' => '20:00'
  )
  ),
  'costo'   => '',
  'link'      => '',
  'descripcion' => ''
  ),
 */
$anuales = array(
    /*

    'devfest' => array(
        'id'    => 'devfest',
        'titulo' => 'DevFest UY',
        'lugar' => 'Universidad Católica del Uruguay',
        'fecha' => '5/11/2012',
        'horario' => '15:00 a 20:00',
        'costo' => '',
        'link' => 'http://gdg.uy/devfest',
        'descripcion' => 'La temporada de DevFests ya ha comenzado en el mundo y en Uruguay se desarrollara el 5 de Noviembre desde las 15:00 en la Universidad Católica. El evento tendrá formato de conferencia donde participaran Ingenieros de Google y destacados expositores de la comunidad local donde se abordaran temas como Android, Go Language, HTML5, WebRTC, Google App Engine, Google APIs, YouTube APIs, Google Analytics entre otros.'
    ),
    '5MVDVALLEY' => array(
        'id'    => 'mvdvalley',
        'titulo' => '5MVDVALLEY',
        'lugar' => 'Luis Alberto de Herrera 1248 (Auditorium WTC), Montevideo.',
        'fecha' => '10/11/2012',
        'horario' => '10:00 a 23:00',
        'costo' => 'U$S 20',
        'audiencia' => '',
        'link' => 'http://montevideovalley.com/',
        'descripcion' => ''
    ),
    'PyconUY' => array(
        'id'  =>  'pycon',
        'titulo' => 'Pycon 2012',
        'lugar' => 'Laboratorio Tecnológico del Uruguay, Av. Italia 6201, Montevideo',
        'fecha' => '10/11/2012 a 11/11/2012',
        'horario' => '9:00 a 19:00',
        'costo' => '',
        'link' => 'http://uy.pycon.org',
        'descripcion' => ''
    ),
    'OWASP' => array(
        'id'  =>  'owasp',
        'titulo' => 'OWASP AppSec 2012',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '18/11/2012 a 21/11/2012',
        'horario' => '8:00 a 17:30',
        'costo' => 'U$S 250 ~ USD 800',
        'link' => 'https://www.owasp.org/index.php/AppSecLatam2012',
        'descripcion' => ''
    ),

    'MoodleMoot' => array(
        'id'  =>  'moodlemoot',
        'titulo' => 'MoodleMoot Uruguay',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '22/11/2012 a 23/11/2012',
        //'horario' => '8:00 a 17:30',
        'link' => 'http://evento.moodlemoot.org.uy/',
        'descripcion' => ''
    ),

    'DEVLATAM' => array(
        'id'  =>  'dal',
        'titulo' => 'Desarrollando América Latina',
        'lugar' => 'Laboratorio Tecnológico del Uruguay, Av. Italia 6201, Montevideo',
        'fecha' => '1/12/2012 a 2/12/2012',
        'horario' => '9:00 a 17:00',
        'costo' => '',
        'link' => 'https://eventioz.com/DALuruguay',
        'descripcion' => '',
        'tags'=>'desarrollo, oss, datos abiertos'
    ),
    'SegURU' => array(
        'id'  =>  'segurusummit',
        'titulo' => 'SegURU Summit 2012',
        'lugar' => 'Plaza Independencia 812 (UNIT), Montevideo',
        'fecha' => '5/12/2012',
        'horario' => '18:30',
        'costo' => '',
        'link' => 'http://uruguay.issa.org/seguru-summit-2012/',
        'descripcion' => '',
        'tags'=>'seguridad',
        'twitter' => "@ISSAUruguay"
    ),
    'NWUruguay' => array(
        'id'  =>  'notworking',
        'titulo' => '#NotWorking2012',
        'lugar' => 'Bodega Spinoglio, Montevideo',
        'fecha' => '12/12/2012',
        'horario' => '19:00',
        'costo' => '',
        'link' => 'http://notworking.com.uy/',
        'descripcion' => '',
        'tags'=>'emprendedores, startups'
    ),

    'Puntatech' => array(
        'id'  =>  'puntatechmeetup',
        'titulo' => 'Punta Tech Meetup',
        'lugar' => 'Fundación Pablo Atchugarry, Punta del Este, Maldonado',
        'fecha' => '8/1/2013',
        'horario' => '19:00',
        'costo' => 'por invitación',
        'link' => 'http://puntameetup.com/',
        'descripcion' => '',
        'tags'=>'negocios, startups, emprendedores, inversores'
    ),

    'GGJUY' => array(
        'id'  =>  'globalgamejam',
        'titulo' => 'Global Game Jam',
        'lugar' => '<a href="http://globalgamejam.org/sites/2013/universidad-ortantel" target="_blank">Auditorio Torre de las Telecomunicaciones</a> / <a href="http://globalgamejam.org/sites/2013/escuela-de-artes-visuales" target="_blank">A+ Escuela de Artes Visuales</a>',
        'fecha' => '25 al 27/1/2013',
        'horario' => '',
        'costo' => 'gratis',
        'link' => 'http://uruguaygamer.com/?p=1157',
        'tw_hastag' => '#GGJUY',
        'descripcion' => '',
        'tags'=>'gaming'
    ),

    'PerconMysqlUniv' => array(
        'id'  =>  'PerconMysqlUniv',
        'titulo' => 'Percona MySQL University',
        'lugar' => 'Universidad ORT, Cuareim 1451',
        'fecha' => '5/2/2013',
        'horario' => '8:00 a 18:30',
        'costo' => 'gratis',
        'link' => 'http://percona-mysql-university-montevideo-2013.eventbrite.com/',
        'tw_hastag' => '',
        'descripcion' => '',
        'tags'=>'mysql, db, XtraDB, replication, sphinx',
        'links_otros'=>array(
            ),
    ),
    */
    'rubyconf' => array(
        'id'  =>  'rubyconfuy',
        'titulo' => 'RubyConf Uruguay',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '22 y 23/3/2013',
        'horario' => '',
        'costo' => 'ver web',
        'link' => 'http://www.rubyconfuruguay.org',
        'twitter' => '#rubyconfuy',
        'descripcion' => '',
        'tags'=>'ruby, desarrollo',
        'links_otros'=>array(
        		/*
                array(
                    'txt' => 'RFP',
                    'uri' => 'https://docs.google.com/spreadsheet/viewform?formkey=dFExNnBYcndLSFBsUzh5ZVIzUHZOd3c6MQ&ifq',
                    'alt' => 'Request for proposal'
                ),
                */
                array(
                    'txt' => 'blog',
                    'uri' => 'http://rubyconfuruguay.org/news.html',
                    'alt' => 'blog'
                ),
            ),
    ),
    'CibSE' => array(
        'id'  =>  'cibse',
        'titulo' => 'CibSE',
        'lugar' => '<a href="http://cibse2013.ort.edu.uy/es/Presentacion.php" target="_blank">Campus de la Universidad ORT Uruguay</a>',
        'fecha' => '8 al 10/4/2013',
        'horario' => '',
        'costo' => 'gratis',
        'link' => 'http://cibse2013.ort.edu.uy/SE2013/es/Inicio.htm',
        'tw_hastag' => '#cibse',
        'descripcion' => 'XVI Congreso Iberoamericano en Ingeniería de Software',
        'tags'=>'desarrollo, ingenieria',
        'links_otros'=>array(
                array(
                    'txt' => 'CFP',
                    'uri' => 'cibse2013.ort.edu.uy/SE2013/es/Cibse2013se.pdf',
                    'alt' => 'Call for Papers'
                ),
                array(
                    'txt' => 'Apoyo empresas',
                    'uri' => 'http://cibse2013.ort.edu.uy/es/Empresas.htm',
                    'alt' => 'Apoyo empresas'
                ),
            ),
    ),
    'tecnologica' => array(
        'id'  =>  'tecnologica',
        'titulo' => 'Tecnológica 2013',
        'lugar' => 'Club de Expositor del Parque de Exposiciones de LATU',
        'fecha' => '8 y 9/5/2013',
        'horario' => '',
        'costo' => 'gratis',
        'link' => 'http://www.tecnologica.com.uy/',
        'tw_hastag' => '#tecnologica2013',
        'descripcion' => 'Una feria-congreso para profesionales. Una propuesta diferente, integrando todos los actores vinculados con Tecnologías TIC.',
        'tags'=>'TIC, IT, tecnología',
        'links_otros'=>array(
                array(
                    'txt' => 'Linkedin',
                    'uri' => 'http://http://www.linkedin.com/groups/Tecnol%C3%B3gicaUY-4882887',
                    'alt' => 'Grupo Linkedin'
                ),
                array(
                    'txt' => 'Facebook',
                    'uri' => 'http://www.facebook.com/Tecnologica.UY',
                    'alt' => 'Pagina de Facebook'
                ),
            ),
    ),
    'playavalley' => array(
        'id'  =>  'playavalley',
        'titulo' => '#PlayaValley',
        'lugar' => 'Centro Cultural La Paloma, La Paloma, Rocha',
        'fecha' => '',
        'horario' => '',
        'costo' => '',
        'link' => 'http://playavalley.com/',
        'descripcion' => '',
        'tags'=>'media, web'
    ),
    'encGenexus' => array(
        'id'  =>  'encgenexus',
        'titulo' => 'XXIII Encuentro GeneXus',
        'lugar' => 'Hotel Radisson, Montevideo',
        'fecha' => '30/9/2013 a 2/10/2013',
        'horario' => '',
        'costo' => '',
        'link' => 'http://www.genexus.com/',
        'descripcion' => '',
        'tags'=>'genexus'
    ),
    'techmeetup' => array(
        'id'  =>  'techmeetupuy',
        'titulo' => 'tech.meetupUY',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '22 y 23/11/2013',
        'horario' => '',
        'costo' => '',
        'link' => 'http://tech.meetup.uy',
        'descripcion' => '',
        'tags'=>'desarrollo, tecnología, IT'
    ),
);

$mensuales = array(
    'mvdjsmeetup' => array(
        'id'  =>  'mvdjsmeetup',
        'titulo' => 'MVDJS Meetup',
        'subtitulo' => 'Meetup de Javascript en Montevideo',
        'lugar' => 'ver web.',
        'fecha' => '1er jueves de mes',
        'horario' => '19:30',
        'costo' => '',
        'link' => 'http://www.meetup.com/mvd-js/',
        'descripcion' => '',
        'tags'=>'javascript, nodeJS, html5, frontend, css'
    ),
    'opencoffee' => array(
        'id'  =>  'opencoffee',
        'titulo' => 'Open Coffee',
        'lugar' => 'Amaretto Bakery Café',
        'fecha' => '2o Martes de mes',
        'horario' => '9:00',
        'costo' => '',
        'link' => 'http://opencoffeemvd.org/',
        'descripcion' => '',
        'tags' => 'proyectos, negocios, inversion, emprendedores'
    ),
    'ruby' => array(
        'id'  =>  'rubymeetup',
        'titulo' => 'Ruby Meetup',
        'lugar' => 'CoworkingMVD, Bulevar España 2529 Esq. Libertad, Montevideo',
        'fecha' => '2o martes de mes',
        'horario' => '19:30',
        'costo' => '',
        'link' => 'http://www.meetup.com/rubymvd/',
        'descripcion' => '',
        'tags'=>'ruby,rails,sinatra,web'
    ),
    'mysql' => array(
        'id'  =>  'mysqlmeetup',
        'titulo' => 'Mysql Meetup',
        'subtitulo' => 'Meetup de Mysql en Montevideo',
        'lugar' => 'UTU Buceo / Guruhub (ver link)',
        'fecha' => '2o jueves de mes',
        'horario' => '19:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/The-Montevideo-MySQL-Meetup-Group',
        'descripcion' => '',
        'tags'=>'mysql,linux,lamp, nosql,database,linux,cloud'
    ),
    'interactiondesign' => array(
        'id'  =>  'interactionDesign',
        'titulo' => 'Interaction Design UY',
        'lugar' => 'CoworkingMVD, Bulevar España 2529 Esq. Libertad, Montevideo',
        'fecha' => 'ver web',
        'horario' => '19:30',
        'costo' => '',
        'link' => 'http://www.meetup.com/Interaction-design-Uruguay',
        'descripcion' => '',
        'tags'=>'interaction Design,UX,content strategy,usability',
        'links_otros'=>array(),
    ),
    'scala' => array(
        'id'  =>  'scalameetup',
        'titulo' => 'Scala Meetup',
        'lugar' => 'ver web',
        'fecha' => '3er jueves de mes',
        'horario' => '20:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/Scala-Meetup-UY/',
        'descripcion' => '',
        'tags'=>'scala',
        'links_otros'=>array(
                array(
                    'txt' => 'blog',
                    'uri' => 'http://scala.meetup.uy',
                    'alt' => 'blog'
                ),
            ),
    ),
    'technbeers' => array(
        'id'  =>  'technbeers',
        'titulo' => 'TechNbeers',
        'lugar' => 'Asia de Cuba, Montevideo',
        'fecha' => '4o jueves de mes',
        'horario' => '',
        'costo' => '',
        'link' => 'http://montevideovalley.com/',
        'descripcion' => '',
        'tags'=>'proyectos, tecnologia'
    ),

    'gugmvd' => array(
        'id'  =>  'gugmvd',
        'titulo' => 'GUG MVD',
        'subtitulo' => 'Comunidad GeneXus en Montevideo',
        'lugar' => 'CDC - Latu, Av. Italia 6201',
        'fecha' => '',
        'horario' => '',
        'costo' => '',
        'link' => 'http://gugmontevideo.wordpress.com/',
        'descripcion' => '',
        'tags'=>'Genexus'
    ),
);
