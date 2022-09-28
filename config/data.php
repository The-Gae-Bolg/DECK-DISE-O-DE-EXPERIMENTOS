<?php 

//Datos dinámicos - NO SE TOCAN -
$slab_ids = getSlabIds();
$slab_progress = getSlabsData("slab_progress"); 
$slab_act1 = getSlabsData("act_1");
$slab_act2 = getSlabsData("act_2");
$slab_act3 = getSlabsData("act_3");



//-- Nombre del deck --
$deckTitle = "Diseño de experimentos básico: una guía práctica";

//-- Características --
$duration = "16 horas";
$level = "Básico";
$focus = "Metodología activa";
$learningExp = "Autodirigido";
$requirements = "probabilidad y estadística básica, Uso de Excel para utilizar fórmulas y generación de gráficas. Uso de internet para buscar información";

//-- Experto --
$exp_name = "";
$exp_desc = "";
$exp_position = "";
$exp_linkedin = "";
$exp_has_linkedin = false;
$exp_portfolio = "";
$exp_has_portfolio = false;


// -- Imagen Home --
/*
   FORMATO:
   * Ruta del archivo -> img/nombre-del-archivo
 */
$homeImage = "img/iStock-1305960650.jpg";

//-- Inicio --
$deckIntro = "<strong>Diseño de experimentos básico: una guía práctica</strong> es un programa de dieciséis horas de aprendizaje en línea.<br><br>
A través de sus actividades, contenidos temáticos y momentos de valoración se ha creado para ti una experiencia de aprendizaje que te permitirá fortalecer la competencia:<br><br> 
<strong>Aplico diseño de experimentos para generar información que ayude a tomar mejores decisiones en distintas áreas de conocimiento (administración, ingeniería, ciencia, etc.)</strong> <br><br>
Un programa con las características como el que estás a punto de iniciar te ofrece las herramientas necesarias para responder a los más altos estándares en tu desempeño.
";

//-- Bienvenida --
$deckWelcome = "¡Recibe la más cordial bienvenida!";

//-- Portadas de slabs -- 
/* 
   FORMATO:
   * Ruta del archivo -> img/topics/nombre-del-archivo
*/
$slabImages = [
    "img/topics/temario_1022352238.png", //Slab 1
    "img/topics/temario_968289874.png", //Slab 2
    "img/topics/temario_1311598658.png", //Slab 3
    "img/topics/temario_1323647411.png", //Slab 4
    "img/topics/temario_1347219231.png", //Slab 5
    "img/topics/temario_1213441993.png", //Slab 6
    "img/topics/temario_493302504.png", //Slab 7
    "img/topics/temario_1147573594.png", //Slab 8
    "img/topics/temario_1354171846.png", //Slab 9
    "img/topics/temario_1322485699.png" //Slab 10
];

//-- Títulos de slabs (Index) --
$slabHeadings = [
    "¿Qué es el diseño de experimentos?", //Slab 1
    "El método científico aplicado", //Slab 2
    "Estadística ¿Para qué?", //Slab 3
    "Experimentos en negocios", //Slab 4
    "¿Cuántos datos necesito en mi prueba?", //Slab 5
    "El poder oculto de las pruebas de hipótesis", //Slab 6
    "¿A es igual a B?", //Slab 7
    "EL ABC de la regresión", //Slab 8
    "Experimentos avanzados", //Slab 9
    "Seis Sigma para problemas difíciles" //Slab 10
];

// -- Nombre de slabs --
$slabTitles = [
    "¿Qué es el diseño de experimentos?", //Slab 1
    "El método científico aplicado", //Slab 2
    "Estadística ¿Para qué?", //Slab 3
    "Experimentos en negocios", //Slab 4
    "¿Cuántos datos necesito en mi prueba?", //Slab 5
    "El poder oculto de las pruebas de hipótesis", //Slab 6
    "¿A es igual a B?", //Slab 7
    "EL ABC de la regresión", //Slab 8
    "Experimentos avanzados", //Slab 9
    "Seis Sigma para problemas difíciles" //Slab 10
];

//-- Metas de aprendizaje --
$slabGoals = [
    "Ejemplifico tipos de experimentos utilizados en la vida real para tener un marco de referencia de las características de un experimento en una infografía.",
    "Aplico el método científico y la experimentación para encontrar soluciones en un reto propuesto en un video.",
    "Aplico elementos de estadística para describir una población con base en una muestra en un software comercial como Excel.",
    "Desarrollo los experimentos utilizados en negocios para innovar procesos en un infograma.",
    "Desarrollo,  en una infografía, el cálculo del tamaño de muestra que debo tener para que el resultado de un experimento tenga validez estadística.",
    "Construyo una prueba de hipótesis para tomar decisiones sobre situaciones que involucran variación en una hoja de cálculo en un reto propuesto en un video.",
    "Comunico el proceso de pruebas de hipótesis para comparar distintos parámetros entre dos poblaciones en un tríptico.",
    "Elaboro una guía de uso del análisis de regresión para la elaboración de relaciones entre variables independientes y una variable dependiente en una infografía.",
    "Desarrollo una serie de experimentos para generar una guía de trabajo en pruebas que involucran interacción con personas.",
    "Desarrollo un mapa mental de la metodología Seis Sigma para documentar experimentos más aplicados a la solución de problemas en una infografía."
];

$imgGoals = [
    "img/act/iStock-1022352238.jpg", //Slab 1
    "img/act/iStock-968289874.jpg", //Slab 2
    "img/act/iStock-1311598658.jpg", //Slab 3
    "img/act/iStock-1323647411.jpg",  //Slab 4
    "img/act/iStock-1347219231.jpg",  //Slab 5
    "img/act/iStock-1213441993.jpg", //Slab 6
    "img/act/iStock-493302504.jpg", //Slab 7
    'img/act/iStock-1147573594.jpg', //Slab 8
    'img/act/iStock-1354171846.jpg',  //Slab 9
    'img/act/iStock-1322485699.jpg'   //Slab 10
];

//-- Tipos de introducción --
/* 
   FORMATO:
   * Indicar tipo de introducción -> video o texto
*/ 
$slabIntroType = [
    "video", //Slab 1
    "audio", //Slab 2
    "text", //Slab 3
    "video", //Slab 4
    "audio", //Slab 5
    "text", //Slab 6
    "video", //Slab 7
    "audio", //Slab 8
    "text", //Slab 9
    "text" //Slab 10
];

//Material de introducción
/* 
   FORMATO: 
   * Ruta del archivo -> assets/videos/
*/ 
$slabIntro = [
/*Slab 1*/  [
                'assets/videos/DisenoExperimentos_1.mp4'
            ],
/*Slab 2*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/8b511e22-cd8d-4102-9f45-1edda9dbc63c?dark=true"></iframe>'
            ], 
/*Slab 3*/  [
                'Bienvenido, nos da gusto que nos acompañes al Slab Estadística <i>¿Para qué?</i> Aquí conocerás cómo la estadística nos guía desde la recopilación de datos, hasta su tratamiento. Es decir, desde su organización y presentación, así como su análisis e interpretación para que estos datos se conviertan en información que sea relevante para una mejor toma de decisiones.<br><br>
                Encontrarás distintos contenidos (presentación, videos, lecturas) que utilizarás para resolver un caso hipotético, pero basado en datos reales que te permita vivir la experiencia de la estadística.<br><br>
                Esperamos que esta experiencia sea enriquecedora para ti.
                '
            ],
/*Slab 4*/  [
                'assets/videos/DisenoExperimentos_4.mp4'
            ],                
/*Slab 5*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/ce6de8a8-f0e6-4fa8-879e-0270c0c8192f?dark=true"></iframe>'
            ],
/*Slab 6*/  [
                'Estamos alegres de tenerte en este Slab, donde realizarás una prueba de hipótesis para tomar decisiones sobre una situación ficticia.<br><br>
                Encontrarás distintos contenidos (presentación, videos, lecturas, ejemplos resueltos).<br><br>
                Realizarás un video corto que ejemplifique la solución de una prueba de hipótesis<br><br>
                Es hora de iniciar con el aprendizaje ¡Da clic en iniciar y comencemos!
                '
            ],
/*Slab 7*/  [
                'assets/videos/DisenoExperimentos_7.mp4'
            ],
/*Slab 8*/  [
                '<iframe height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/a9a7cf8f-ef4d-4235-b1fa-2d865c445145?dark=true"></iframe>'
            ],
/*Slab 9*/  [
                'Bienvenido al Slab Experimentos avanzados donde revisaremos diseños de experimentos más desarrollados y aplicaremos el análisis a uno de ellos para conocer formas más poderosas de experimentación.<br><br>
                Encontrarás distintos contenidos (presentación, videos, lecturas, ejemplos resueltos).<br><br>
                Realizarás un video donde resolverás un problema propuesto en Excel.<br><br>
                El reto está listo, ¡comencemos!
                '
            ],
/*Slab 10*/ [
                'Nos alegra que te unas al Slab Seis Sigma para problemas difíciles, descubrirás una metodología que utiliza experimentos de forma iterativa y ordenada para resolver problemas difíciles de gran variedad de industrias.<br><br>
                Encontrarás distintos contenidos (presentación, videos, lecturas) y elaborarás una infografía que posteriormente te puede servir de guía si decides profundizar en el tema.<br><br>
                Si estás listo, ¡da clic en comenzar!
                '
            ]
];

//-- Banner --
/* 
   FORMATO: 
   * Ruta del archivo -> assets/img/act/
*/ 
$banner = [
    
];

//-- Numero de Materiales --
/* 
   FORMATO: 
   * Indicar numero de material total
*/
$materialTotal = [
    4, //Slab 1
    1, //Slab 2
    4, //Slab 3
    5, //Slab 4
    2, //Slab 5
    4, //Slab 6
    3, //Slab 7
    3, //Slab 8
    3, //Slab 9
    2 //Slab 10
];

//Videos Imagen
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-1.png
   * Titulo de la Imagen -> Clase 1 Microsoft Excel 2010 - Introduccion
   * Link -> assets/videos/0_Introduccion.mp4
*/
$materialImg = [
  /* [    //slab 1
        [
            'img/pre-load/pre-load-1.png',
            'Elliot P Montgomery',
            'img/material/Elliot P Montgomery.jpeg',
            'Elliot P Montgomery.jpeg'
        ]
    ],
    null,   //slab 2
    null,   //slab 3
    null,   //slab 4
    null,   //slab 5
    null,   //slab 6
    [   //slab 7
        [
            'img/pre-load/pre-load-17.png',
            'Mega, macro, micro and trend',
            'img/material/mega-macro-micro-trend.jpg',
            'mega-macro-micro-trend.jpg'
        ],
        [
            'img/pre-load/pre-load-18.png',
            'The diagram classifying the trends in the matrix of their interactions',
            'img/material/The-diagram-classifying-the-trends-in-the-matrix-of-their-interactions_Q640.jpeg',
            'The-diagram-classifying-the-trends-in-the-matrix-of-their-interactions_Q640.jpeg'
        ]
    ],   
    null,   //slab 8
    [   //slab 9
        [
            'img/pre-load/pre-load-23.png',
            'Cono de futuros',
            'img/material/cono de futuros.jpeg',
            'cono de futuros.jpeg'
        ],
    ],   
*/
];

//Videos YouTube
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-1.png
   * Titulo del vídeo -> Clase 1 Microsoft Excel 2010 - Introduccion
   * Link -> https://www.youtube.com/embed/0hGS45mbBRg
*/
$materialYoutube = [
   
];

//Páginas web
/* 
   FORMATO: 
   * Ruta del archivo pre-load -> img/pre-load/pre-load-2.png
   * Titulo del archivo -> Introducción a Excel
   * Link -> https://blogdeuninformatico.com/estilos-y-formatos-de-celda-en-excel/
*/
$materialPage = [
    
];

//PDF descargable
$materialPdf = [
    [   //Slab 1
        [
            'img/pre-load/pre-load-1.png',
            'Datos Carro',
            'assets/docs/tools/DatosCarro.xlsx',
            'DatosCarro.xlsx'
        ], 
        [
            'img/pre-load/pre-load-2.png',
            '¿Qué es el diseño de experimentos?',
            'assets/docs/tools/DE_Slab1_descubre.pptx',
            'DE_Slab1_descubre.pptx'
        ],
        [
            'img/pre-load/pre-load-3.png',
            'How to design smart buisiness experiments',
            'assets/docs/tools/How to design smart buisiness experiments.pdf',
            'How to design smart buisiness experiments.pdf'
        ],
        [
            'img/pre-load/pre-load-4.png',
            'Videos de referencia',
            'assets/docs/tools/Videos de referencia.docx',
            'Videos de referencia.docx'
        ]
    ], 
    [   //Slab 2
        [
            'img/pre-load/pre-load-5.png',
            'Método científico aplicado',
            'assets/docs/tools/DE_Slab2_descubre.pptx',
            'DE_Slab2_descubre.pptx'
        ], 
    ], 
    [   //Slab 3
        [
            'img/pre-load/pre-load-6.png',
            'Estadística ¿Para qué?',
            'assets/docs/tools/DE_Slab3_descubre.pptx',
            'DE_Slab3_descubre.pptx'
        ], 
        [
            'img/pre-load/pre-load-7.png',
            'Aplicaciones estadística',
            'assets/docs/tools/Aplicaciones estadística.pdf',
            'Aplicaciones estadística.pdf'
        ],
        [
            'img/pre-load/pre-load-8.png',
            'Reto',
            'assets/docs/tools/DE_Slab3_reto.xlsx',
            'DE_Slab3_reto.xlsx'
        ],
        [
            'img/pre-load/pre-load-9.png',
            'Videos Referenica Slab 3',
            'assets/docs/tools/Videos Referenica Slab 3.docx',
            'Videos Referenica Slab 3.docx'
        ]
    ],
    [   //Slab 4
        [
            'img/pre-load/pre-load-10.png',
            'A Haug Experiments ed',
            'assets/docs/tools/A_Haug_Experiments_ed.pdf',
            'A_Haug_Experiments_ed.pdf'
        ],
        [
            'img/pre-load/pre-load-11.png',
            'Conducting Business Experiments Validating New Bus',
            'assets/docs/tools/Conducting_Business_Experiments_Validating_New_Bus.pdf',
            'Conducting_Business_Experiments_Validating_New_Bus.pdf'
        ],
        [
            'img/pre-load/pre-load-12.png',
            'Experimentos en negocios',
            'assets/docs/tools/DE_Slab4_descubre.pptx',
            'DE_Slab4_descubre.pptx'
        ],
        [
            'img/pre-load/pre-load-13.png',
            'How to design smart buisiness experiments',
            'assets/docs/tools/How to design smart buisiness experiments.pdf',
            'How to design smart buisiness experiments.pdf'
        ],
        [
            'img/pre-load/pre-load-14.png',
            'Step by step to smart buisness experiments',
            'assets/docs/tools/Step by step to smart buisness experiments.pdf',
            'Step by step to smart buisness experiments.pdf'
        ]
    ],
    [   //Slab 5
        [
            'img/pre-load/pre-load-15.png',
            'Cálculo tamaño muestra',
            'assets/docs/tools/Cálculo tamaño muestra.pdf',
            'Cálculo tamaño muestra.pdf'
        ],
        [
            'img/pre-load/pre-load-16.png',
            '¿Cuántos datos necesito en mi prueba?',
            'assets/docs/tools/DE_Slab5_descubre.pptx',
            'DE_Slab5_descubre.pptx'
        ]
    ],
    [   //Slab 6
        [
            'img/pre-load/pre-load-17.png',
            'Datos Puebla',
            'assets/docs/tools/Datos Puebla.xlsx',
            'Datos Puebla.xlsx'
        ],
        [
            'img/pre-load/pre-load-18.png',
            'Prueba de Hipótesis',
            'assets/docs/tools/DE_Slab6_descubre.pptx',
            'DE_Slab6_descubre.pptx'
        ],
        [
            'img/pre-load/pre-load-19.png',
            'Pruebas de Hipótesis',
            'assets/docs/tools/Pruebas de Hipótesis.pdf',
            'Pruebas de Hipótesis.pdf'
        ],
        [
            'img/pre-load/pre-load-20.png',
            'Ejemplos',
            'assets/docs/tools/Slab6_ejemplos.xlsx',
            'Slab6_ejemplos.xlsx'
        ]
    ],
    [   //Slab 7
        [
            'img/pre-load/pre-load-21.png',
            'C011Tests para dos muestras',
            'assets/docs/tools/C011Tests para dos muestras.pdf',
            'C011Tests para dos muestras.pdf'
        ],
        [
            'img/pre-load/pre-load-22.png',
            '¿Es A igual a B?',
            'assets/docs/tools/DE_Slab7_descubre.pptx',
            'DE_Slab7_descubre.pptx'
        ],
        [
            'img/pre-load/pre-load-23.png',
            'Pruebas de Hipótesis',
            'assets/docs/tools/Pruebas de Hipótesis.pdf',
            'Pruebas de Hipótesis.pdf'
        ]
    ],
    [   //Slab 8
        [
            'img/pre-load/pre-load-24.png',
            'El ABC de la regresión',
            'assets/docs/tools/DE_Slab8_descubre.pptx',
            'DE_Slab8_descubre.pptx'
        ],
        [
            'img/pre-load/pre-load-25.png',
            'Regresion Lineal Multiple',
            'assets/docs/tools/Regresion Lineal Multiple.pdf',
            'Regresion Lineal Multiple.pdf'
        ],
        [
            'img/pre-load/pre-load-26.png',
            'Regresión Lineal Simple-2',
            'assets/docs/tools/Regresión Lineal Simple-2.pdf',
            'Regresión Lineal Simple-2.pdf'
        ]
    ],
    [   //Slab 9
        [
            'img/pre-load/pre-load-27.png',
            'Bloques',
            'assets/docs/tools/bloques.pdf',
            'bloques.pdf'
        ],
        [
            'img/pre-load/pre-load-28.png',
            'Experimentos avanzados',
            'assets/docs/tools/DE_Slab9_descubre.pptx',
            'DE_Slab9_descubre.pptx'
        ],
        [
            'img/pre-load/pre-load-29.png',
            'Diseño de bloques completos al azar',
            'assets/docs/tools/DISEÑO DE BLOQUES COMPLETOS AL AZAR _ DBCA.pdf',
            'DISEÑO DE BLOQUES COMPLETOS AL AZAR _ DBCA.pdf'
        ]
    ],
    [   //Slab 10
        [
            'img/pre-load/pre-load-30.png',
            'Understanding the benefits of six sigma',
            'assets/docs/tools/Understanding the benefits of six sigma.pdf',
            'Understanding the benefits of six sigma.pdf'
        ],
        [
            'img/pre-load/pre-load-31.png',
            'Understanding basics of six sigma',
            'assets/docs/tools/understanding-basics-of-six-sigma-IJERTV9IS050866.pdf',
            'understanding-basics-of-six-sigma-IJERTV9IS050866.pdf'
        ]
    ]                         
];

//Vídeo
$materialVideo = [
    /*[   //Slab 1
        [
            'img/pre-load/pre-load-2.png',
            'Introducción al Diseño de futuros',
            'assets/videos/Masterclass Introducción al Diseño de futuros (Lourdes Rodríguez).mp4',
            'Masterclass Introducción al Diseño de futuros (Lourdes Rodríguez).mp4'
        ]
    ],
    [   //Slab 2
        [
            'img/pre-load/pre-load-6.png',
            'Secrets of a Fashion Trend Forecaster and Analyst',
            'assets/videos/Secrets of a Fashion Trend Forecaster and Analyst.mp4',
            'Secrets of a Fashion Trend Forecaster and Analyst.mp4'
        ],
    ],
    null, //Slab 3
    [   //Slab 4
        [
            'img/pre-load/pre-load-11.png',
            '¿Cómo hacer mejores encuestas para proyectos?',
            'assets/videos/¿Cómo hacer mejores encuestas para proyectos_.mp4',
            '¿Cómo hacer mejores encuestas para proyectos_.mp4'
        ],
        [
            'img/pre-load/pre-load-12.png',
            'Qué es la investigación cuantitativa y cómo te puede ayudar en tu negocio',
            'assets/videos/Hotmart Tips  Qué es la investigación cuantitativa y cómo te puede ayudar en tu negocio_1080p.mp4',
            'Hotmart Tips  Qué es la investigación cuantitativa y cómo te puede ayudar en tu negocio_1080p.mp4'
        ],
    ],
    [   //Slab 5
        [
            'img/pre-load/pre-load-14.png',
            'Gary van Broekhoven on helping you get to the why behind your customers',
            'assets/videos/GRAMS  Gary van Broekhoven on helping you get to the why behind your customers_360p.mp4',
            'GRAMS  Gary van Broekhoven on helping you get to the why behind your customers_360p.mp4'
        ]
    ],
    [   //Slab 6
        [
            'img/pre-load/pre-load-15.png',
            'Social Listening Tutorial How to get started in 3 steps',
            'assets/videos/Social Listening Tutorial_ How to get started in 3 steps (1).mp4',
            'Social Listening Tutorial_ How to get started in 3 steps (1).mp4'
        ],
        [
            'img/pre-load/pre-load-16.png',
            'What is Social Listening',
            'assets/videos/What is Social Listening_.mp4',
            'What is Social Listening_.mp4'
        ],
    ],
    [   //Slab 7
        [
            'img/pre-load/pre-load-19.png',
            'Alison Sander Megatrends - the art and science of trend tracking',
            'assets/videos/Alison Sander_ Megatrends - the art and science of trend tracking.mp4',
            'Alison Sander_ Megatrends - the art and science of trend tracking.mp4'
        ]
    ],
    [   //Slab 8
        [
            'img/pre-load/pre-load-20.png',
            'Insight, Innovation, Change Considerations from the field',
            'assets/videos/Insight, Innovation, Change_ Considerations from the field _ Gerry Power _ TEDxDCU.mp4',
            'Insight, Innovation, Change_ Considerations from the field _ Gerry Power _ TEDxDCU.mp4'
        ],
        [
            'img/pre-load/pre-load-21.png',
            'Insights vs. Observations! Difference between Observation and Insight with Simple Real Life Example',
            'assets/videos/Insights vs. Observations! Difference between Observation and Insight with Simple Real Life Example.mp4',
            'Insights vs. Observations! Difference between Observation and Insight with Simple Real Life Example.mp4'
        ],
        [
            'img/pre-load/pre-load-22.png',
            'Qué es insight en publicidad',
            'assets/videos/Qué es insight en publicidad  (✅Ejemplos) (1).mp4',
            'Qué es insight en publicidad  (✅Ejemplos) (1).mp4'
        ],
    ],
    [   //Slab 9
        [
            'img/pre-load/pre-load-24.png',
            'Facing Uncertainty A Futures Thinking Now Conversation',
            'assets/videos/Facing Uncertainty_ A Futures Thinking Now Conversation.mp4',
            'Facing Uncertainty_ A Futures Thinking Now Conversation.mp4'
        ],
        [
            'img/pre-load/pre-load-25.png',
            'What is the Cone of Plausibility',
            'assets/videos/What is the Cone of Plausibility_1080p.mp4',
            'What is the Cone of Plausibility_1080p.mp4'
        ],
    ],
    [   //Slab 10
        [
            'img/pre-load/pre-load-26.png',
            'OKR in 7 Simple Steps Secrets From a Successful Serial Founder',
            'assets/videos/OKR in 7 Simple Steps Secrets From a Successful Serial Founder_1080p.mp4',
            'OKR in 7 Simple Steps Secrets From a Successful Serial Founder_1080p.mp4'
        ],
        [
            'img/pre-load/pre-load-27.png',
            'Qué es la metodología OKR Objetivos y trabajo en equipo',
            'assets/videos/Qué es la metodología OKR Objetivos y trabajo en equipo_1080p.mp4',
            'Qué es la metodología OKR Objetivos y trabajo en equipo_1080p.mp4'
        ],
        [
            'img/pre-load/pre-load-28.png',
            'Qué son los OKR y cómo plantearlos  Ejemplos por área',
            'assets/videos/Qué son los OKR y cómo plantearlos  Ejemplos por área_1080p.mp4',
            'Qué son los OKR y cómo plantearlos  Ejemplos por área_1080p.mp4'
        ]
    ],
*/];

//-- Transcripciones --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabTranscriptions = [
    
];

//-- Referencias --
/* 
   FORMATO:
   * Texto de la transcripción (en caso de haber)
*/ 
$slabReferencias = [
/*Slab1*/   [
                'Bland, D. J. & Osterwalder, A. (2020). <i>Testing Business Ideas : A Field Guide for Rapid Experimentation. Wiley.</i>', 
                'Davenport, T.H.. (2009). <i>How to design smart business experiments. Strategic Direction. 28, 8.</i>',
                'Khan Academy (11 de noviembre de 2016) <i>Introduction to experiment design | Study design | AP Statistics | Khan Academy</i> [Video]. YouTube.<br> <a href="https://youtu.be/DaBq0naj0YY" class="estilo-ref" target="_blank">https://youtu.be/DaBq0naj0YY</a>',
                'Mack, C. (9 de noviembre de 2016) <i>Lecture64 (Data2Decision) Intro to Design of Experiments</i> [Video]. YouTube.<br> <a href="https://youtu.be/UTa-6YCqbBA" class="estilo-ref" target="_blank">https://youtu.be/UTa-6YCqbBA</a>',
                'Mead, R., Mead, A. & Gilmour, S. G. (2012). <i>Statistical Principles for the Design of Experiments: Applications to Real Experiments.</i>  Cambridge University Press.',
                'Montgomery, D. C. (2019). (2012). <i>Design and Analysis of Experiments</i>  (10th Edición).US Wiley Global Education.',
                'PSYCH EXPLAINED (4 de mayo de 2021) <i>Experimental Design: Variables, Groups, and Random Assignment</i> [Video]. YouTube.<br> <a href="https://youtu.be/xDWdJI_XT3k" class="estilo-ref" target="_blank">https://youtu.be/xDWdJI_XT3k</a>',
                'Pulido, H. G. (2012). <i>Análisis y diseño de experimentos (3rd Edición).</i>  McGraw-Hill Interamericana.',
                'Research Beast (6 de agosto de 2019) <i>Basics of Experimental Research Design</i> [Video]. YouTube.<br> <a href="https://youtu.be/q6hlAJbGULk" class="estilo-ref" target="_blank">https://youtu.be/q6hlAJbGULk</a>',
                'Scribbr (30 de junio de 2021) <i>Designing an Experiment: Step-by-step Guide | Scribbr 🎓</i> [Video]. YouTube.<br> <a href="https://youtu.be/1-wc7CNeIz8" class="estilo-ref" target="_blank">https://youtu.be/1-wc7CNeIz8</a>',
            ],
/*Slab2*/   [
                '2pi (11 de agosto de 2017) <i>¿Qué es el método científico?</i> [Video]. YouTube. <br> <a href="https://youtu.be/UlVo65i6eyc" class="estilo-ref" target="_blank">https://youtu.be/UlVo65i6eyc</a>', 
                'BBC (24 de octubre de 2014) <i>Brian Cox visits the worlds biggest vacuum | Human Universe - BBC</i> [Video] YouTube<br> <a href="https://youtu.be/E43-CfukEgs" class="estilo-ref" target="_blank">https://youtu.be/E43-CfukEgs</a>',
                'Cortez J. (26 de marzo de 2021) <i>El método científico - Parte 1 de 2</i> [Video]. YouTube. <br> <a href="https://youtu.be/zSZVNGjIZXo" class="estilo-ref" target="_blank">https://youtu.be/zSZVNGjIZXo</a>',
                'Cortez J. (26 de marzo de 2021) <i>El método científico - Parte 2 de 2</i> [Video]. YouTube. <br> <a href="https://youtu.be/y8eVxhN70EA" class="estilo-ref" target="_blank">https://youtu.be/y8eVxhN70EA</a>',
                'El método científico (s. f.) [Video] Khan Academy <br> <a href="https://es.khanacademy.org/science/biology/intro-to-biology/science-of-biology/v/the-scientific-method" class="estilo-ref" target="_blank">https://es.khanacademy.org/science/biology/intro-to-biology/science-of-biology/v/the-scientific-method</a>',
                'Gauch, H. G. (2012) <i>Scientific Method in Brief.</i> Cambridge University Press.',
                'Mak, D.K.; Mak, A.T. & Mak A.B. (2009) <i>Solving Everyday Problems With The Scientific Method: Thinking Like A Scientist.</i> World Scientific.',
                'Peer, W., Hakemulder, J. & Zyngier, S. (2012) <i>Scientific Methods for the Humanities.</i> John Benjamins Publishing Company.',
                'Robles E. (19 de mayo de 2021) <i>El Método Científico como NUNCA te lo han contado - Edrei Robles</i> [Video]. YouTube. <br> <a href="https://youtu.be/NJxmm6bAVYU" class="estilo-ref" target="_blank">https://youtu.be/NJxmm6bAVYU</a>',
            ],
/*Slab3*/   [
                'Anderson, D.R, Sweeney, D.J. & Williams, T.A. (2005). <i>Estadística para Administración y Economía.</i> Thomson.', 
                'Cuadros Acosta, I. (2013, 29 marzo). <i>Cálculos Estadísticos Básicos con Excel</i> [Video]. YouTube. <br> <a href="https://youtu.be/XDUndiON7fk" class="estilo-ref" target="_blank">https://youtu.be/XDUndiON7fk</a>',
                'Flores, K. R. (2014, 7 septiembre). <i></i>Estadística Descriptiva en Excel</i> [Video]. YouTube. <br> <a href="https://youtu.be/1IuCBFuNam4" class="estilo-ref" target="_blank">https://youtu.be/1IuCBFuNam4</a>',
                'Lind, D. A. (2018). <i>ISE BASIC STATISTICS FOR BUSINESS AND ECONOMICS</i> (9th Edición). McGraw-Hill Interamericana.',
                'Lind, D.A., Marchal, W.G. & Wathen, S.A. (2012). <i>Estadística Aplicada a los negocios y la Economía.</i> McGraw-Hill.',
                'Matemáticas Juan Medina.(s. f.) <i>Estadística descriptiva desde cero.</i>  [Video]. YouTube. <br> <a href="https://www.youtube.com/playlist?list=PLJAP7IL6V3CIEAgpa68rNKSYgID6_DHXj" class="estilo-ref" target="_blank">https://www.youtube.com/playlist?list=PLJAP7IL6V3CIEAgpa68rNKSYgID6_DHXj</a>',
                'Matemáticas Juan Medina. (6 de octubre de 2013). <i>Empezamos con los parámetros estadísticos. Medidas de centralización</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=av8a4pytjug" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=av8a4pytjug</a>',
                'Matemáticas Juan Medina. (6 de octubre de 2013). <i>Parámetros estadísticos. Medidas de dispersión</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=NuE2VY0CZ3g" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=NuE2VY0CZ3g</a>',
                'Matemáticas Profe Alex (4 de agosto de 2021). <i>Tipos de gráficos estadísticos</i> [Video]. YouTube. <br> <a href="https://www.youtube.com/watch?v=9G4HPNVA5w4" class="estilo-ref" target="_blank">https://www.youtube.com/watch?v=9G4HPNVA5w4</a>',
                'Matemáticas Profe Alex (2018, 6 septiembre). <i>Tipos de variables estadísticas | Cuantitativas Cualitativas</i> [Video]. YouTube. <br> <a href="https://youtu.be/nCszHELuwxk" class="estilo-ref" target="_blank">https://youtu.be/nCszHELuwxk</a>',
                'Matemáticas Profe Alex (2017, 7 marzo). <i>Conceptos básicos de estadística</i> [Video]. YouTube. <br> <a href="https://youtu.be/Xq3thcQqwbc" class="estilo-ref" target="_blank">https://youtu.be/Xq3thcQqwbc</a>',
                'Mead, R., Mead, A. & Gilmour, S. G. (2012). <i>Statistical Principles for the Design of Experiments : Applications to Real Experiments.</i> Cambridge University Press.',
                'Priyadarsini, K., Latha, A., Jaisankar, S. & Poongodi, B. (2017). <i>Business Statistics : Workbook Using Excel.</i> Laxmi Publications Pvt Ltd.',
                'ULAx Equis. (24 de enero de 2016). <i>Gráficos para variables cualitativas</i> [Video]. YouTube. <br> <a href="https://youtu.be/QAREEH131_M" class="estilo-ref" target="_blank">https://youtu.be/QAREEH131_M</a>',
            ],
/*Slab4*/   [
                'Abhijit, G. and Euchner, J. (2018) <i>Conducting Business Experiments.</i>', 
                'Anderson E.T. and Simester D. (2011) <i>Harvard Business Review, 89:3, 98-105.</i>',
                'Atomi (2 de julio de 2019) A Level Psychology - Experimental Designs [Video]. YouTube. <br> <a href="https://youtu.be/9eZYufPP2-o" class="estilo-ref" target="_blank">https://youtu.be/9eZYufPP2-o</a>',
                'Bland. D. J.  Osterwalder, A. (2020). <i>Testing Business Ideas : A Field Guide for Rapid Experimentation.</i> Wiley.',
                'Columbia Business School(4 de abril de 2013). <i>Creating a Culture of Rapid Experimentation</i> [Video]. YouTube. <br> <a href="https://youtu.be/7-WLX8gc8WY" class="estilo-ref" target="_blank">https://youtu.be/7-WLX8gc8WY</a>',
                'Davenport, T.H. (2009). How to design smart business experiments. Strategic Direction, 28, 8.',
                'GOTO Conferences (28 de marzo de 2016) <i>Building a Culture of Experimentation at Spotify • Ben Dressler •  2016 GOTO</i> [Video]. YouTube. <br> <a href="https://youtu.be/cAAFkViUBME" class="estilo-ref" target="_blank">https://youtu.be/cAAFkViUBME</a>',
                'Haug, A. (2018). <i>The use of experiments in business research.</i> In P. V. Freytag, & L. Young (Eds.), Collaborative Research Design: Working with Business for Meaningful Findings (pp. 223-248). Springer.',    
                'Research-Technology Management, 61:2, 27-36.',
                'Richard Atherton (31 de julio de 2017) Explaining the Business Experiment [Video]. YouTube. <br> <a href="https://youtu.be/Ns9QODBeLiU" class="estilo-ref" target="_blank">https://youtu.be/Ns9QODBeLiU</a>',
                'SKEMA Business School TV (20 de septiembre de 2017) MOOC: Business model experimentation - Part 1 [Video]. YouTube. <br> <a href="https://youtu.be/YbB5ZE6KJcg" class="estilo-ref" target="_blank">https://youtu.be/YbB5ZE6KJcg</a>',
            ],
/*Slab5*/   [
                'Alba, F.M. & Ruiz, F.N. (2004) <i>Muestreo Estadístico.</i> Septem Ediciones', 
                'Anderson, D.R, Sweeney, D.J. & Williams, T.A. (2005). <i>Estadística para Administración y Economía.</i> Thomson.',
                'Boza Chirino, J., Pérez Rodríguez, J.V. & De León Ledezma, J. (2016) <i>Introducción a las técnicas de muestreo.</i> Pirámide.',
                'Ebingen Villavicencio (19 de noviembre de 2018) <i>Cómo determinar el Tamaño de la Muestra</i> ( TESIS - Proyectos de Grado) [Video]. YouTube. <br> <a href="https://youtu.be/TskyWoEoGzM" class="estilo-ref" target="_blank">https://youtu.be/TskyWoEoGzM</a>',
                'Garcia. G.J., Reding, B.A.; López, A. J. (2013). Cálculo del tamaño de la muestra en investigación en educación médica. Investigación en Educación Médica, 2(8), 217-224.',
                'Izcara, P.S. (2007) Introducción al Muestreo. Miguel Ángel Porrúa',
                'Luis Ernesto Arriola Guillén (9 de diciembre de 2012) <i>Población, Muestra, Muestreo y Criterios de Selección</i> [Video]. YouTube. <br> <a href="https://youtu.be/zGtk_Ii9VBs" class="estilo-ref" target="_blank">https://youtu.be/zGtk_Ii9VBs</a>',
                'Matemóvil (3 de abril de 2020) <i>Variable aleatoria y función de densidad de probabilidad - continua</i> [Video]. YouTube. <br> <a href="https://youtu.be/2gI8Ri792ig" class="estilo-ref" target="_blank">https://youtu.be/2gI8Ri792ig</a>',
                'Matemóvil (27 de enero de 2020) <i>Función de probabilidad de variable aleatoria discreta | Intro</i> [Video]. YouTube. <br> <a href="https://youtu.be/7mF89j-rCoE" class="estilo-ref" target="_blank">https://youtu.be/7mF89j-rCoE</a>',
                'Matemóvil (27 de enero de 2020) <i>Variable aleatoria y función de densidad de probabilidad - discreta</i> [Video]. YouTube. <br> <a href="https://youtu.be/7mF89j-rCoE" class="estilo-ref" target="_blank">https://youtu.be/7mF89j-rCoE</a>',
                'Mathgc (16 de marzo de 2019) <i>VARIABLES ALEATORIAS Y DISTRIBUCIONES DE PROBABILIDAD</i> [Video]. YouTube. <br> <a href="https://youtu.be/lyTIMCPWjbQ" class="estilo-ref" target="_blank">https://youtu.be/lyTIMCPWjbQ</a>',
                'Píldoras matemáticas (1 de diciembre de 2017) <i>01 Qué es la distribución binomial</i> [Video]. YouTube. <br> <a href="https://youtu.be/Nl7BsFe4xmY" class="estilo-ref" target="_blank">https://youtu.be/Nl7BsFe4xmY</a>',
                'Universitat Politècnica de València - UPV  (28 de noviembre de 2011) <i>Distribución exponencial | | UPV</i> [Video]. YouTube. <br> <a href="https://youtu.be/yLluYRMEPzQ" class="estilo-ref" target="_blank">https://youtu.be/yLluYRMEPzQ</a>',
                'Villavicencio <i>E. CLASE: EL TAMAÑO MUESTRAL PARA LA TESIS CUÁNTAS PERSONAS DEBO ENCUESTAR PARTE 1</i> [Video]. YouTube. <br> <a href="https://youtu.be/1DcRKJV8Kls" class="estilo-ref" target="_blank">https://youtu.be/1DcRKJV8Kls</a>',
            ], 
/*Slab6*/   [
                'Anderson, D.R, Sweeney, D.J. & Williams, T.A. (2005). <i>Estadística para Administración y Economía.</i> Thomson.',
                'AulaDeEconomía (3 de septiembre de 2017) <i>Estadística prueba de hipotesis - parte 3 procedimiento</i> [Video]. YouTube. <br> <a href="https://youtu.be/QZkD1AH4dtU" class="estilo-ref" target="_blank">https://youtu.be/QZkD1AH4dtU</a>',
                'AulaDeEconomía (1 de septiembre de 2017) <i>Estadística prueba de hipotesis - parte 2 conceptos</i> [Video]. YouTube. <br> <a href="https://youtu.be/ttMkW7HdIKU" class="estilo-ref" target="_blank">https://youtu.be/ttMkW7HdIKU</a>',
                'AulaDeEconomía (31 de agosto de 2017) <i>Estadística prueba de hipótesis - parte 1 conceptos</i> [Video]. YouTube. <br> <a href="https://youtu.be/5ZvKgnRVSjI" class="estilo-ref" target="_blank">https://youtu.be/5ZvKgnRVSjI</a>',
                'Bioestadístico (26 de febrero de 2019) <i>19. Prueba de hipótesis para promedios | Curso de estadística</i> [Video]. YouTube. <br> <a href="https://youtu.be/aJVD_Xz-WkQ" class="estilo-ref" target="_blank">https://youtu.be/aJVD_Xz-WkQ</a>',
                'DrClbustos (26 de mayo de 2013) <i>Pruebas de Hipótesis estadísticas - Una introducción</i> [Video]. YouTube. <br> <a href="https://youtu.be/juRM3cpyik8" class="estilo-ref" target="_blank">https://youtu.be/juRM3cpyik8</a>',
                'Duvi (5 de julio de 2020) <i>Prueba de Hipótesis I - Clase 11 de Probabilidad y Estadística</i> [Video]. YouTube. <br> <a href="https://youtu.be/IXuLsCCc5Js" class="estilo-ref" target="_blank">https://youtu.be/IXuLsCCc5Js</a>',
                'Duvi (5 de julio de 2020) <i>Prueba de Hipótesis II - Clase 12 de Probabilidad y Estadística</i> [Video]. YouTube. <br> <a href="https://youtu.be/HN76VY5HrKk" class="estilo-ref" target="_blank">https://youtu.be/HN76VY5HrKk</a>',
                'Hernández, R.R. Cárdenas, A.T. & Hernández, R.N. (2020)  Prueba de hipótesis estadística con Excel. AmatEditorial.'
            ],
/*Slab7*/   [
                'Anderson, D.R., Sweeney, D.J. & Williams, T.A. (2005). <i>Estadística para Administración y Economía.</i> Thomson.',
                'AulaDeEconomia (21 de octubre de 2017) <i>Estadística prueba de hipótesis diferencia medias en Excel - parte 11</i> [Video].YouTube. <br> <a href="https://youtu.be/zV4XqD_mHRQ" class="estilo-ref" target="_blank">https://youtu.be/zV4XqD_mHRQ</a>',
                'AulaDeEconomia (7 de octubre de 2017) <i>Estadística prueba de hipótesis diferencia proporciones - parte 10</i> [Video]. YouTube. <br> <a href="https://youtu.be/OWXHbqp8jy0" class="estilo-ref" target="_blank">https://youtu.be/OWXHbqp8jy0</a>',    
                'AulaDeEconomia (18 de septiembre de 2017) <i>Estadística prueba de hipótesis diferencia de medias muestra pequeña - parte 8</i> [Video]. YouTube. <br> <a href="https://youtu.be/tR_8mY2OVY8" class="estilo-ref" target="_blank">https://youtu.be/tR_8mY2OVY8</a>',
                'AulaDeEconomia (18 de septiembre de 2017) <i>Estadística prueba de hipótesis medias pareadas - parte 9</i> [Video]. YouTube. <br> <a href="https://youtu.be/3hYY8AQpIvo" class="estilo-ref" target="_blank">https://youtu.be/3hYY8AQpIvo</a>',
                'AulaDeEconomia (16 de septiembre de 2017) <i>Estadística prueba de hipótesis diferencia de medias - parte 7</i>  [Video]. YouTube. <br> <a href="https://youtu.be/yGelIc-H2ng" class="estilo-ref" target="_blank">https://youtu.be/yGelIc-H2ng</a>',
                'DrClbustos (26 de mayo de 2013) <i>Pruebas de Hipótesis estadísticas - Una introducción</i> [Video]. YouTube. <br> <a href="https://youtu.be/juRM3cpyik8" class="estilo-ref" target="_blank">https://youtu.be/juRM3cpyik8</a>',
                'El Tío Estadístico (20 de julio de 2020) <i>Prueba t de Student [PARA MUESTRAS RELACIONADAS]✅ en Excel 2019💥</i> [Video]. YouTube. <br> <a href="https://youtu.be/e8WZbDReQm8" class="estilo-ref" target="_blank">https://youtu.be/e8WZbDReQm8</a>',
                'El Tío Estadístico (6 de julio de 2020) <i>Prueba t de Student [para muestras independientes]✅ en Excel 2019💥</i>  [Video]. YouTube. <br> <a href="https://youtu.be/3uZ7M97JRO8" class="estilo-ref" target="_blank">https://youtu.be/3uZ7M97JRO8</a>',
                'Hernández, R.R., Cárdenas, A.T. & Hernández, R.N. (2020) <i>Prueba de hipótesis estadística con Excel. AmatEditorial.</i>',
                'Jessica Pérez Rivera (26 de octubre de 2021) <i>Prueba de hipótesis para una varianza poblacional</i> [Video]. YouTube. <br> <a href="https://youtu.be/1ngi8mLRwHI" class="estilo-ref" target="_blank">https://youtu.be/1ngi8mLRwHI</a>',
                'Más que números (27 de mayo de 2020) <i>PRUEBA DE HIPÓTESIS PARA DIFERENCIA DE MEDIAS CON MUESTRAS DEPENDIENTES (MUESTRAS PAREADAS)</i> [Video]. YouTube. <br> <a href="https://youtu.be/_4iR54x3s4I" class="estilo-ref" target="_blank">https://youtu.be/_4iR54x3s4I</a>',
            ],
/*Slab8*/   [
                'Aarón Martínez (15 de mayo de 2020) <i>PRACTICA REGRESIÓN LINEAL SIMPLE Y MÚLTIPLE CON EXCEL</i>  [Video]. YouTube. <br> <a href="https://youtu.be/ixVvVYH2ybc" class="estilo-ref" target="_blank">https://youtu.be/ixVvVYH2ybc</a>',
                'Anderson, D.R., Sweeney, D.J. & Williams, T.A. (2005). <i>Estadística para Administración y Economía.</i> Thomson.',
                'Carlos Velazco (11 de mayo de 2013) <i>Ecuación de regresión logarítmica</i> [Video]. YouTube. <br> <a href="https://youtu.be/0dq3Hok7e-M" class="estilo-ref" target="_blank">https://youtu.be/0dq3Hok7e-M</a>',
                'Carlos Velazco (7 de mayo de 2013) <i>Ecuación de regresión exponencial</i> [Video]. YouTube. <br> <a href="https://youtu.be/jqub1i15B0Q" class="estilo-ref" target="_blank">https://youtu.be/jqub1i15B0Q</a>',
                'Carlos Velazco (7 de mayo de 2013) <i>Ecuación de regresión potencial</i> [Video]. YouTube. <br> <a href="https://youtu.be/W1hGbO72PIk" class="estilo-ref" target="_blank">https://youtu.be/W1hGbO72PIk</a>',
                'JP (4 de junio de 2015) <i>Ejemplo de Regresión No Lineal</i> [Video]. YouTube. <br> <a href="https://youtu.be/9bBPU4Gpedk" class="estilo-ref" target="_blank">https://youtu.be/9bBPU4Gpedk</a>',
                'Lind, D,A., Marchal, W.G. & Wathen, S.A. (2012). <i>Estadística Aplicada a los negocios y la Economía.</i> McGraw-Hill.',
                'Rebeca So (20 de mayo de 2020) <i>RN03: Regresión no lineal</i>  [Video]. YouTube. <br> <a href="https://youtu.be/V6bV0oXZS8w" class="estilo-ref" target="_blank">https://youtu.be/V6bV0oXZS8w</a>',
                'Rebeca So (20 de mayo de 2020) <i>RN04: Regresión no lineal (ejemplo)</i>  [Video]. YouTube. <br> <a href="https://youtu.be/EQvhsT-r7mo" class="estilo-ref" target="_blank">https://youtu.be/EQvhsT-r7mo</a>',
                'Romer Daniel Oyola Guzmán (15 de febrero de 2021) <i>Regresión no lineal usando Excel</i> [Video]. YouTube. <br> <a href="https://youtu.be/LhTt6nVf_gk" class="estilo-ref" target="_blank">https://youtu.be/LhTt6nVf_gk</a>',
                'SFPIE UV (12 de junio de 2014) <i>Escritura de los resultados - Regresión lineal simple y múltiple (parte 1 de 5)</i> [Video]. YouTube. <br> <a href="https://youtu.be/p747mbpgB8U" class="estilo-ref" target="_blank">https://youtu.be/p747mbpgB8U</a>',
                'SFPIE UV (12 de junio de 2014) <i>Escritura de los resultados - Regresión lineal simple y múltiple (parte 2 de 5)</i> [Video]. YouTube. <br> <a href="https://youtu.be/KkcPHTVUCMc" class="estilo-ref" target="_blank">https://youtu.be/KkcPHTVUCMc</a>',
                'SFPIE UV (12 de junio de 2014) <i>Escritura de los resultados - Regresión lineal simple y múltiple (parte 5 de 5)</i> [Video]. YouTube. <br> <a href="https://youtu.be/TtSEqEbBmls" class="estilo-ref" target="_blank">https://youtu.be/TtSEqEbBmls</a>',
            ],
/*Slab9*/   [
                'Abel Solís (1 de agosto de 2016) <i>Bloques Completamente al Azar en EXCEL</i> [Video]. YouTube. <br> <a href="https://youtu.be/UvP7xZBVLws" class="estilo-ref" target="_blank">https://youtu.be/UvP7xZBVLws</a>',
                'Dean, A., Voss, D. & Draguljić, D. (2017) <i>Design and Analysis of Experiments (2nd Edition).</i> Springer.',
                'Gutiérrez, P.H. & De la Vara, S.R. (2008) <i>Análisis y diseño de experimentos (2da edición).</i> McGraw-Hill Interamericana.',
                'Limber Oscar (5 de julio 2017) <i>Diseños de Bloques al Azar</i> [Video]. YouTube. <br> <a href="https://youtu.be/PKTybumEiIU" class="estilo-ref" target="_blank">https://youtu.be/PKTybumEiIU</a>',
                'Mead, R., Mead, A. & Gilmour, S. G. (2012). <i>Statistical Principles for the Design of Experiments : Applications to Real Experiments.</i> Cambridge University Press.',
                'Monardes, C. (29 de mayo de 2013) <i>Diseño de Experimentos - Clase 01</i> [Video]. YouTube. <br> <a href="https://youtu.be/LUXCD5mnfPs" class="estilo-ref" target="_blank">https://youtu.be/LUXCD5mnfPs</a>',
                'Montgomery, D. C. (2019). <i>Design and Analysis of Experiments (10th Edición).</i> Wiley Global Education US.',
                'Oreggioni J. (13 de abril 2020) <i>Bloques completamente al azar</i> [Video]. YouTube. <br> <a href="https://youtu.be/tmaA5YXm7Zc" class="estilo-ref" target="_blank">https://youtu.be/tmaA5YXm7Zc</a>',
                'Profe Raúl García (20 de abril de 2020) <i>Teoría y ejemplo: Diseño de bloques completamente al azar (DBCA)</i> [Video]. YouTube. <br> <a href="https://youtu.be/yp8OeUMIuAg" class="estilo-ref" target="_blank">https://youtu.be/yp8OeUMIuAg</a>',
            ],
/*Slab10*/   [
                'Academia Lean Sigma (22 de abril de 2020) <i>¿Qué es Six Sigma? ¡En esté video te lo explicamos!</i> [Video]. YouTube. <br> <a href="https://youtu.be/MWCapF_KK1k" class="estilo-ref" target="_blank">https://youtu.be/MWCapF_KK1k</a>',
                'Allen, T.T. (2006). <i>Introduction to Engineering Statistics and Six Sigma.</i> Springer.',
                'Bureau Veritas Formación (13 de diciembre de 2017) <i>¿Qué es el Seis Sigma? (eLearning)</i> [Video]. YouTube. <br> <a href="https://youtu.be/4lJWfpO7Z8s" class="estilo-ref" target="_blank">https://youtu.be/4lJWfpO7Z8s</a>',
                'Cudney, E.A. & Agustiady, T.K. (2016) <i>Design for Six Sigma: A Practical Approach Through Innovation.</i> CRC Press.',
                'Fursule, N.V., Bansod, S.V. & Fursule, S.N.e. (2012). <i>Understanding the Benefits and limitations of Six Sigma Methodology.</i> IJSPR, 2, 1-9.',
                'Globuss Biogestión (8 de agosto de 2019) <i>Seis sigma cinturon verde - Lista de reproducción</i> [Video]. YouTube. <br> <a href="https://youtube.com/playlist?list=PL48vSlJGaMg_X3ItqywjVdKZgAjfI_i1d" class="estilo-ref" target="_blank">https://youtube.com/playlist?list=PL48vSlJGaMg_X3ItqywjVdKZgAjfI_i1d</a>',
                'Kadry, S. (2018). <i>Understanding Six Sigma: Concepts, Applications and Challenges.</i> Nova.',
                'Learn Lean (31 de agosto de 2017) <i>What is Six Sigma: Step by Step Explanation</i> [Video]. YouTube. <br> <a href="https://youtu.be/9gTQfAzxDq4" class="estilo-ref" target="_blank">https://youtu.be/9gTQfAzxDq4</a>',
                'Lunau, S. (ed), (2009) <i>Design for Six Sigma +Lean Toolset Implementing Innovations Successfully.</i> Springer.',
                'Patel, A. & Chudgar, C. (2020). <i>Understanding basics of Six Sigma.</i> IJERT, 9, 1204-1210.',
                'Pyzdek, T. & Keller, P. (2018). <i>The Six Sigma Handbook.</i> McGraw-Hill Education.',
                'Simplilearn (25 de febrero de 2020) <i>Six Sigma In 9 Minutes | What Is Six Sigma? | Six Sigma Explained | Six Sigma Training | Simplilearn</i> [Video]. YouTube. <br> <a href="https://youtu.be/4EDYfSl-fmc" class="estilo-ref" target="_blank">https://youtu.be/4EDYfSl-fmc</a>',
                'The Council for Six Sigma Certification (2018) <i>Six Sigma, A complete Step by Step Guide.</i> TCSSC',
            ],
];

/* 
   FORMATO:
   * Ruta del archivo -> assets/docs/transcripts/nombre-del-archivo
 */
$slabTranscriptionDoc = [
    "assets/docs/transcripts/SCRUM_S1.pdf",
    "assets/docs/transcripts/SCRUM_S2.pdf",
    "assets/docs/transcripts/SCRUM_S3.pdf",
    "assets/docs/transcripts/SCRUM_S4.pdf",
    "assets/docs/transcripts/SCRUM_S5.pdf",
    "assets/docs/transcripts/SCRUM_S6.pdf",
    "assets/docs/transcripts/SCRUM_S7.pdf",
    "assets/docs/transcripts/SCRUM_S8.pdf",
    "assets/docs/transcripts/SCRUM_S9.pdf",
    "assets/docs/transcripts/SCRUM_S10.pdf"

]; 

// ** ACTIVIDADES **

//-- Instrucciones Descubre --
$act1_Instructions = [
    //Slab 1 
    [  
        "Completa los espacios en blanco para descubrir los conceptos clave sobre qué es el diseño de experimentos.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 2 
    [     
        "Identifica y ordena  el proceso para el método científico.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 3
    [   
        "Lee atentamente los conceptos clave sobre Estadística  y relaciónalos con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."	
    ],
    //Slab 4
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre experimentos en negocios.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 5
    [   
        "Lee atentamente los conceptos clave sobre cálculo del tamaño de muestra para un experimento y relaciónalo con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 6
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre prueba de hipótesis.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 7
    [   
        "Lee atentamente los conceptos clave sobre <strong>Pruebas de hipótesis entre dos poblaciones</strong> y relaciónalo con la definición correcta.",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 8
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre <i>Análisis de regresión</i>",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ],
    //Slab 9
    [   
        "Completa los espacios en blanco para descubrir los conceptos clave sobre diseño de experimentos en bloques completos al azar (DBCA)",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante.",
    ],
    //Slab 10
    [   
        "Lee atentamente los conceptos clave sobre <strong>Seis Sigma</strong> y relaciónalo con la definición correcta. ",
        "Selecciona y arrastra los recuadros para asociar cada concepto con la definición correcta.",
        "Realiza una captura de pantalla con el resultado de tu actividad y guárdala, ya que la necesitarás más adelante."
    ]
];

//-- Herramientas Actividad Descubre --
$act1_tools = [
/* Slab 1 */'<iframe src="https://lxlab.h5p.com/content/1291750654164412468/embed" aria-label="slab 1 ¿Qué es el diseño de experimentos?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 2 */'<iframe src="https://lxlab.h5p.com/content/1291750662009048148/embed" aria-label="Slab 2 El método científico aplicado" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 3 */'<iframe src="https://lxlab.h5p.com/content/1291750668742191578/embed" aria-label="slab 3 Estadística ¿Para qué?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 4 */'<iframe src="https://lxlab.h5p.com/content/1291750678530782828/embed" aria-label="Slab 4 Experimentos en negocios" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 5 */'<iframe src="https://lxlab.h5p.com/content/1291750709706094918/embed" aria-label="Slab 5 ¿Cuántos datos necesito en mi prueba?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 6 */'<iframe src="https://lxlab.h5p.com/content/1291752125753484418/embed" aria-label="Slab 6 El poder oculto de las pruebas de hipótesis" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 7 */'<iframe src="https://lxlab.h5p.com/content/1291752131642736948/embed" aria-label="Slab 7 ¿A es igual a B?" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 8 */'<iframe src="https://lxlab.h5p.com/content/1291752140241133808/embed" aria-label="Slab 8 EL ABC de la regresión" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 9 */'<iframe src="https://lxlab.h5p.com/content/1291752157466286228/embed" aria-label="Slab 9 Experimentos avanzados" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>',
/* Slab 10*/'<iframe src="https://lxlab.h5p.com/content/1291752160187103808/embed" aria-label="Slab 10 Seis Sigma para problemas difíciles" width="1088" height="637" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay *; geolocation *; microphone *; camera *; midi *; encrypted-media *"></iframe><script src="https://lxlab.h5p.com/js/h5p-resizer.js" charset="UTF-8"></script>'
];

//-- Instrucciones Actividad Demuestra --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * Un paso está compuesto por:
        * "instruction" -> La instrucción principal
        * "list" -> (Opcional) Una lista compuesta por items 
                 ->  Es un arreglo de arreglos de "item"
        * "subinstruction_list" -> (Opcional) Lista de subpasos individuales
                                -> Cada subaso es un arreglo, que tiene un elemento "subinstruction"
                                -> (Opcional) Los subpasos pueden tener extras, como botones o enlaces, marcados como "subinstruction_extra"
        * "instruction_extra" -> (Opcional) Enlaces, botones, imágenes o videos
                              -> Se necesita agregar el elemento HTML completo
                              -> Cada "instruction_extra" que se agregue necesitará la clase "tracker" como atributo
                              -> Si el "instruction_extra" es un botón, necesitará la clase "btn btn-outline-primary"
                              -> Si el botón es imagen, necesita especificar la ruta -> img/logos/nombre-del-archivo
    
 */
$act2_instructions = [
    //SLAB 1
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <i>Diseño de experimentos.</i>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <ol type='a'>
                    <li>Tipos de experimentos.</li>
                    <li>Diseño de experimentos.</li>
                    <li>Variables dependientes, independientes y de ruido.</li>
                    <li>Tipos de investigación.</li>
                    <li>Etapas de un experimento.</li>
                    <li>Modos de elegir una muestra.</li>
                </ol>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.",
            ]
        ],
    ],
    //SLAB 2
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>el método científico aplicado.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "El reto de Josefina",
                "img" => "img/act/iStock-1192334561.jpg",
                "text" => "<div>Josefina trabaja en TransporteX, una compañía especializada en el transporte de personal. Tienen varios servicios desde transporte de ejecutivos en autos de lujo hasta camiones con capacidad para 54 pasajeros.
                    <br><br>
                    Ella está encargada de la planeación de las rutas y ya que debe obtener el máximo beneficio de la flota programa los viajes de forma consecutiva con un margen de quince minutos entre la llegada a la base y la salida a su siguiente destino.
                    <br><br>
                    Este tiempo se utiliza para limpiar y desinfectar la unidad.
                    <br><br>
                    Últimamente Josefina ha recibido quejas de que los vehículos están sucios y esto ha causado molestias entre varios de los clientes.  
                    <br><br>
                    Por tal motivo ella ha acudido contigo porque espera aprovechar tu conocimiento del método científico para que le ayudes a establecer una estrategia para  identificar las causas de este problema.
                    <br><br>
                    Una primera investigación realizada por Josefina y su equipo indica que no hay suficiente tiempo para realizar la limpieza de los vehículos. Tardan más de lo planeado en sus trayectos de ida y vuelta, de manera que los quince minutos necesarios para la limpieza se han visto mermados.
                    <br><br>
                    Una solución sencilla sería incrementar el tiempo de tolerancia a 30 o 45 minutos. Sin embargo, esta decisión tiene implicaciones económicas fuertes pues se requiere comprar unidades adicionales para mantener el mismo nivel de servicio, puesto que algunas estarían ociosas durante más tiempo. La encargada del proyecto te solicita  que utilices el método científico para investigar las causas de este incremento en el tiempo,  para buscar soluciones sin incrementar el número de unidades.
                    <br><br>
                    A fin de que su investigación sea más realista, Josefina entonces te pide que hagas un recorrido de prueba y lleves a cabo la observación de los tiempos de traslado.
                    <br><br>
                    Para este propósito debes realizar esta observación varias veces a fin de proponer al menos tres hipótesis de por qué varía el tiempo de traslado entre su origen y su destino. Así mismo te solicita que describas el experimento que usarás para probar cada hipótesis.
                    <br><br>
                    Debido a que la audiencia del reporte son los mismos choferes, quienes no suelen leerlos, te solicita un video de máximo cinco minutos de duración donde especifiques las observaciones, hipótesis y experimentos a realizar. Si puedes realizar  también los experimentos puedes agregar al reporte los resultados y tu conclusión.
                    <br><br>
                    Incluye en tu reporte una vista del origen y destino que estás analizando, para esto te puede auxiliar de una herramienta como <a href='https://www.google.com.mx/maps/preview' target='_blank'>Google Maps.</a>
                    <br><br>
                    El video debe ser cargado en tu sitio de evidencias.
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Identifica un recorrido que puedas realizar sin riesgo. Especifica el origen y el destino. Sobre esta ruta realizarás tus observaciones y experimentos."],
                    ["subinstruction" => "Realiza varias veces ese recorrido de tal manera que tengas oportunidad de tener tus observaciones iniciales."],
                    ["subinstruction" => "A partir de estas observaciones elabora hipótesis sobre por qué, en el recorrido que haces, hay variación de tiempo. Al menos elabora tres hipótesis y pruébalas, es decir, experimenta."],
                    ["subinstruction" => "Analiza los datos y concluye cuál de las hipótesis explica mejor la variación en los tiempos de recorrido."],
                    ["subinstruction" => "Realiza un video de cinco minutos máximo y explica las etapas del método científico. Muestra entonces la solución al reto (observaciones, hipótesis, experimentos, análisis y conclusiones)."],
                    ["subinstruction" => "Sube tu video a YouTube y guarda el enlace, ya que lo compartirás más adelante."],
                ],
            ]
        ],
    ],
    //SLAB 3
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>estadística.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Contesta las preguntas que se te plantean en un documento de Google y guarda el enlace, ya que lo compartirás más adelante."
            ],
            //Paso 3
            [
                "case_title" => "X-car y las ventas",
                "img" => "img/act/iStock-1354041251.jpg",
                "text" => "<div>Jaime es el gerente de ventas de autos usados en X-car. Tiene a su cargo tres sucursales. Cada mes recibe el <a href='assets/docs/tools/DE_Slab3_reto.xlsx' target='_blank'>reporte mensual de ventas</a>. El reporte consiste en una lista que registra la siguiente información:
                    <br><br>
                    <ul>
                        <li>El número de ventas.</li>
                        <li>El tipo de automóvil vendido (compacto, sedán, pickup, SUV e híbrido).</li>
                        <li>La localización de la sucursal donde se realizó la venta.</li>
                        <li>El modo de pago (contado, crédito propio o crédito bancario.</li>
                        <li>Los días que llevó concretar la venta del vehículo.</li>
                        <li>La ganancia de la venta (en dólares).</li>
                        <li>El total mensual (que asciende a $336 318).</li>
                    </ul>
                    Jaime no encuentra la manera de organizar esta información de tal modo que pueda tomar mejores decisiones. Por lo tanto, ha decidido contratarte para que le ayudes con tu conocimiento de estadística. Su objetivo es entender mejor la situación y determinar algunas estrategias. Jaime te ha pedido que realices las actividades descritas a continuación. Es tu trabajo organizar mejor estos datos, de tal modo que le permita a Jaime obtener aprendizajes que le permitan cambiar el rumbo pues le solicitan incrementar la venta mensual a $500 000 en tres meses.
                    <br><br>
                    Jaime tiene la intuición de que las ganancias pueden estar influidas por diferentes variables y algunas combinaciones. Por lo tanto, te pide que las analices y las incluyas en los reportes que le entregarás.
                    <br><br>
                    El análisis puedes hacerlo, inicialmente, con cálculos a mano de tal manera que entiendas la mecánica, sin embargo, debes repetir parte de estos análisis varias veces. Puedes utilizar Excel (o una hoja de cálculo similar) para poder completar el análisis.  
                    <br><br>
                    Los resultados deberás subirlos a un documento para realizar un reporte.
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Preguntas:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "¿Cuáles de los datos a considerar son cuantitativos y cuáles cualitativos? Argumenta tu respuesta."],
                    ["subinstruction" => "Al revisar los datos de venta por tipo de vehículo es claro que hay dos que dominan ¿Podrías identificar cuáles son? Utiliza gráficas de pie. Copia esta gráfica en el reporte."],
                    ["subinstruction" => "Cuando analizas las ventas por oficina ¿Hay alguna que destaque hacia arriba o hacia abajo? ¿Qué podrías concluir de esta información? Utiliza gráficas de barras e incluye en el reporte una captura de las gráficas que utilices, así como tus conclusiones."],
                    ["subinstruction" => "Según el análisis cuantitativo de los datos de venta ¿Hay algún modelo que se venda más que deberíamos impulsar? ¿Existe algún modelo que se venda menos y que se deba eliminar de mi catálogo? Incluye el análisis estadístico en tu reporte."],
                    ["subinstruction" => "En cuanto al análisis cuantitativo, realiza un histograma y una distribución de frecuencias acumuladas sobre el tiempo, para concretar una venta ¿Cuántos días tarda en concretarse una venta? ¿Cuál es el plazo para el 80% de las ventas? Por favor incluye el histograma en tu documento."],
                    ["subinstruction" => "En cuanto al análisis cualitativo ¿Existe alguna oficina en la que se deba de reforzar el entrenamiento para reducir el número de días que tardan en concretar una venta? Realiza una gráfica de barras por oficina y modelo, después  compara con las otras oficinas para responder esta pregunta. Incluye las gráficas que realizaste en el reporte."],
                    ["subinstruction" => "¿Puedes identificar cuál sería el mercado al que debería enfocarse la agencia con base en las ganancias por unidad y ganancias por día? Analiza los datos globales sin discriminar oficinas y posteriormente por oficina. Incluye este análisis en tu reporte."],
                ],
            ]
        ],
    ],
    //SLAB 4
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <i>El uso de experimentos en negocios.</i>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <i>
                <ol type='a'>
                    <li>Dimensiones de los experimentos.</li>
                    <li>El objetivo de los experimentos en negocios.</li>
                    <li>Diferencias entre experimentos cuantitativos y cualitativos.</li>
                    <li>Consideraciones éticas de la investigación.</li>
                    <li>Proceso de experimentación en negocios.</li>
                    <li>Reglas de experimentación.</li>
                    <li>Tipos de experimentación.</li>
                </ol>
                </i>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.",
            ]
        ],
    ],
    //SLAB 5
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <i>El cálculo del tamaño de muestra.</i>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <ol type='a'>
                    <li>Diferencia entre muestra y población (¿Por qué debo hacer muestras?).</li>
                    <li>Distribuciones de probabilidad para datos discretos (binomial) y continuos (exponencial).</li>
                    <li>Técnicas de muestreo.</li>
                    <li>Errores de muestreo.</li>
                    <li>Instrucciones para realizar cálculos estadísticos con Excel.</li>
                    <li>Un ejemplo sencillo del cálculo de muestra.</li>
                </ol>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad.",
            ]
        ],
    ],
    //SLAB 6
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>pruebas de hipótesis.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "Ayuda a Gerardo Lara",
                "img" => "img/act/iStock-1353222431.jpg",
                "text" => "<div>Gerardo Lara es gerente de Recursos Humanos en R&B, una firma de consultoría en México que tiene once oficinas en México y más de 2400 empleados. Gerardo ha recibido una petición para investigar un par de situaciones que parecen violar las políticas y guías de la firma. Estas posibles violaciones se están dando  en la oficina ubicada en Puebla que cuenta con 387 empleados.
                    <br>
                    Gerardo se da cuenta que ambos temas son sensibles y prefiere usar métodos que eliminen la subjetividad de las acciones que pueda tomar. Por esta razón y al saber que eres un experto en pruebas de hipótesis, ha solicitado tu ayuda.
                    <br>
                    El primer problema al que se enfrenta Gerardo es la posible violación de la política de igualdad de oportunidades. Dentro de R&B se ha recomendado que la proporción de mujeres sea al menos del 45%.
                    <br><br>
                    La segunda problemática tiene que ver con las horas de capacitación de la oficina. Es una política que los empleados tomen 60 horas de capacitación al año. Números arriba y abajo de esta política tienen impacto en la operación de la firma. La empresa ha medido este parámetro durante años y puede considerar que la desviación estándar de las horas de capacitación de la compañía es de 35 horas.
                    <br><br>
                    En estos dos casos se busca tener un nivel de significancia del 1% de tal forma que haya poco margen de error.
                    <br>
                    Finalmente, también quiere aprovechar tu experiencia para evaluar la posibilidad de ofrecer a los empleados un servicio de transporte. Para que la empresa lo brinde, y debido a que el costo del transporte aumenta con el cuadrado de la distancia, el promedio del recorrido debe ser menor a 15 km, es decir si es mayor a ese número, no se ofrecerá el servicio. Para esta propuesta no se tiene la distancia desde el domicilio de los trabajadores hasta la oficina. Por esta razón, se hará un estudio piloto sobre 27 trabajadores que serán elegidos al azar. El nivel de significancia para esta acción es de 5%.
                    <br><br>
                    Gerardo y tú cuentan con el archivo <a href='assets/docs/tools/Datos Puebla.xlsx' target='_blank'>Datos_Puebla</a> que muestra el género y las horas de capacitación de los 387 empleados de la oficina. Por cuestiones de confidencialidad se ha removido el nombre y número de empleado y solo se maneja como muestra o dato.  Este archivo también cuenta con 27 datos de distancia elegidos aleatoriamente. Presiona <strong>F9</strong> tres veces y el resultado que obtengas es la muestra para resolver el tercer problema, para su conveniencia ya se cuenta con el cálculo de la media y desviación estándar de esta muestra.
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Para ayudar a Gerardo, deberás entregar un video y un documento en Excel que muestre las soluciones empleadas para resolver estas tres situaciones a las que se enfrenta."],
                    ["subinstruction" => "Realiza un video de máximo cinco minutos de duración, el cual debe de contar con:
                    <br>
                    <ul>
                        <li>Una breve descripción del problema.</li>
                        <li>Una explicación de la prueba de hipótesis a utilizar en cada situación.</li>
                        <li>El planteamiento de la zona de aceptación y rechazo para la toma de decisión.</li>
                    </ul>
                    "],
                    ["subinstruction" => "Realiza un documento en Excel que muestre sobre cada una de las tres situaciones presentadas:
                    <br>
                    <ol>
                        <li>Identificar qué tipo de situación tenemos: datos continuos con desviación estándar conocida y proporción de la población.</li>
                        <li>Establecer claramente la hipótesis nula y la alternativa. Recuerda que al aceptar la hipótesis alternativa es cuando tenemos una acción.</li>
                        <li>Definir y calcular el estadístico de prueba y el valor crítico de dicho estadístico.</li>
                        <li>Implementar en un documento de Excel la prueba de hipótesis de cada situación y obtén el resultado de dicha prueba.</li>
                        <li>Indicar la decisión a tomar con base en el resultado de la prueba.</li>
                        <li>Guarda el documento en Drive y el enlace del documento,  ya que lo compartirás más adelante.</li>
                    </ol>
                    "],
                ],
            ]
        ],
    ],
    //SLAB 7
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora un tríptico sobre la comparación de dos poblaciones mediante pruebas de hipótesis.",
            ],
            //Paso 2
            [
                "instruction" => "Investiga sobre los siguientes temas a incluir en tu tríptico:<br>
                <ol type='a'>
                    <li>Pruebas de hipótesis sobre las medias de dos poblaciones independientes.</li>
                    <li>Pruebas de hipótesis sobre las medias de dos poblaciones dependientes o pareadas.</li>
                    <li>Pruebas de hipótesis sobre las proporciones de dos poblaciones independientes.</li>
                    <li>Elección y cálculo de los parámetros de prueba para cada una de las tres pruebas anteriores.</li>
                    <li>Instrucciones para la implementación de las pruebas de hipótesis anteriores en una hoja de cálculo (Excel).</li>
                    <li>Incluye un ejemplo de aplicación de cada tipo de prueba estudiado.</li>
                    <li>Explicación del error tipo 1 y tipo 2 para los ejemplos de prueba de hipótesis.</li>
                </ol>",
            ],
            //Paso 3
            [
                "instruction" => "Puedes recurrir adicionalmente a las siguientes fuentes:<br>
                <ol type='a'>
                    <li>Lecturas:</li>
                    <ol type='i'>
                        <li>Anderson, D.R, Sweeney, D.J. & Williams, T.A. (2005). <i>Estadística para Administración y Economía.</i> Thomson.</li>
                        <li>Hernández, R.R. Cárdenas, A.T. & Hernández, R.N. (2020) <i>Prueba de hipótesis estadística con Excel.</i> AmatEditorial.</li>
                    </ol>
                    <li>Videos:</li>
                    <ol type='i'>
                        <li>DrClbustos (26 de mayo de 2013) <i>Pruebas de Hipótesis estadísticas - Una introducción</i> [Video]. YouTube. <br> <a class='tracker btn btn-outline-primary' href='https://youtu.be/juRM3cpyik8' target='_blank'>https://youtu.be/juRM3cpyik8</a></li>
                        <li>AulaDeEconomia (16 de septiembre de 2017) Estadística prueba de hipótesis diferencia de medias - parte 7  [Video]. YouTube. <br> <a class='tracker btn btn-outline-primary' href='https://youtu.be/yGelIc-H2ng' target='_blank'>https://youtu.be/yGelIc-H2ng</a></li>
                        <li>AulaDeEconomia (18 de septiembre de 2017) Estadística prueba de hipótesis diferencia de medias muestra pequeña - parte 8 [Video]. YouTube. <br> <a class='tracker btn btn-outline-primary' href='https://youtu.be/tR_8mY2OVY8' target='_blank'>https://youtu.be/tR_8mY2OVY8</a></li>
                        <li>AulaDeEconomia (18 de septiembre de 2017) Estadística prueba de hipótesis medias pareadas - parte 9 [Archivo de Video]. YouTube. <br> <a class='tracker btn btn-outline-primary' href='https://youtu.be/3hYY8AQpIvo' target='_blank'>https://youtu.be/3hYY8AQpIvo</a></li>
                        <li>AulaDeEconomia (7 de octubre de 2017) Estadística prueba de hipótesis diferencia proporciones - parte 10 [Video]. YouTube. <br> <a class='tracker btn btn-outline-primary' href='https://youtu.be/OWXHbqp8jy0' target='_blank'>https://youtu.be/OWXHbqp8jy0</a></li>
                        <li>AulaDeEconomia (21 de octubre de 2017) Estadística prueba de hipótesis diferencia medias en Excel - parte 11 [Video]. YouTube. <br> <a class='tracker btn btn-outline-primary' href='https://youtu.be/zV4XqD_mHRQ' target='_blank'>https://youtu.be/zV4XqD_mHRQ</a></li>    
                    </ol>
                </ol>
                ",
            ],
            //Paso 4
            [
                "instruction" => "Utiliza como referencia el formato tríptico y asegúrate de incluir la información pertinente en cada cara.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Triptico.pdf" class="tracker btn btn-outline-primary" target="_blank">Triptico</a>'
            ],
            //Paso 5
            [
                "instruction" => "Considera que para diseñar tu tríptico, puedes utilizar la herramienta Genially.",
                "instruction_extra" =>  '<a href="https://genial.ly/es/" class="tracker text-center" target="_blank"><img src="img/logos/genially.png" alt="Logo genially"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Verifica que los textos sean breves y fáciles de entender.",
            ],
            //Paso 7
            [
                "instruction" => "Selecciona los apoyos visuales a integrar:
                <ol type='a'>
                    <li>Imágenes, dibujos, fotografías, ilustraciones, etc.</li>
                    <li>Combinaciones de letras y colores.</li>
                </ol>",
            ],
            //Paso 8
            [
                "instruction" => "Recuerda que el tríptico es un documento que debe ser concreto y llamativo.",
            ],
            //Paso 9
            [
                "instruction" => "Guarda el enlace con el resultado de tu actividad.",
            ],
        ],
    ],
    //SLAB 8
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <strong>Análisis de regresión.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <ol type='a'>
                    <li>Tipos de relación entre variables.</li>
                    <li>Regresión lineal simple.</li>
                    <li>Regresión lineal múltiple.</li>
                    <li>Regresión no lineal.</li>
                    <li>Suposiciones de la regresión.</li>
                    <li>Ejemplos de aplicación de la regresión.</li>
                    <li>Implementación de la regresión en Excel.</li>
                </ol>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad, ya que lo compartirás más adelante.",
            ]
        ],
        /*"extra_element" => 
        [
            "extra_intro" => "<strong>Nota.</strong> Para realizar esta actividad, es necesario que conozcas previamente las dos fases anteriores del método Design Thinking.",
            "extra_instruction_list" => 
            [
        
            ]
        ]*/
    ],
    //SLAB 9
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Lee con atención el siguiente texto sobre <strong>experimentos avanzados.</strong>", 
            ],
            //Paso 2
            [
                "instruction" => "Realiza el reto que se te plantea."
            ],
            //Paso 3
            [
                "case_title" => "La nueva fórmula",
                "img" => "img/act/iStock-1323997059.jpg",
                "text" => "<div>La compañía Química Corona S.A. produce, entre otros productos, detergente para ropa. Su departamento de desarrollo ha estado trabajando en una nueva formulación para un detergente en gel y ha presentado cuatro formulaciones que parecen prometedoras al departamento de Mercadotecnia.
                    <br><br>
                    El director de Mercadotecnia, Javier Domínguez, te ha llamado para solicitar una prueba independiente que le ayude a entender si hay una oportunidad de ganar participación en el mercado.
                    <br>
                    Para esto propones probar los cuatro detergentes sobre seis tipos de tela: algodón (1), seda (2), lana (3), popelina (4), poliéster (5) y una mezcla algodón-poliéster(6).
                    <br><br>
                    El experimento consiste en crear una mancha con betabel y zanahoria y se aplica a los seis tipos de tela. Después de aplicar la mancha y dejarla sobre la tela durante una hora se utiliza el detergente y se mide el porcentaje de reducción de la mancha. Si la mancha es removida totalmente recibe una calificación de cien este es el máximo posible, si la mancha no es removida recibe una calificación de cero. El porcentaje de remoción se expresa entre estos dos límites.
                    <br><br>
                    En la tabla siguiente se muestra el resultado de las 24 pruebas. Decides analizar el estudio como un diseño de bloques completos al azar.
                    <br><br>
                    <img src='img/material/Tabla.png' alt='Tabla de resultados' width='98%'>
                    <br><br>
                    Reflexiona sobre tu reto con las siguientes preguntas:
                    <br><br>
                    ¿Cuáles serían los tratamientos y cuáles los bloques?.
                    <br><br>
                    ¿Puedes plantear las hipótesis nula y alternativa que permita contestar al director Domínguez?
                    <br><br>
                    Utiliza un nivel de significancia <strong>𝛂</strong>=5% para tomar la decisión.
                    <br><br>
                    En caso de que no todos sean iguales, ¿Cuál o cuáles deberían ser los detergentes que conviene promocionar? 
                    </div>",
                "diagnostic" =>"" 
            ],
            //Paso 5
            [
                "instruction" => "<strong>Reto:</strong>",
                "subinstruction_list" => [
                    ["subinstruction" => "Debes analizar el problema propuesto mediante dos métodos:
                    <br><br> 
                    1) aplicando las ecuaciones que encontrarás en los videos de referencia y la presentación del tema y 2) utilizando los comandos de Excel disponibles en análisis de datos."],
                    ["subinstruction" => "El reporte a tu reto consistirá en un video de cinco minutos de duración (máximo) en el que debes:
                    <br>
                    <ol>
                        <li>Presentar el problema.</li>
                        <li>Presentar el esquema de análisis justificando el por qué se sugiere el modelo DCBA.</li>
                        <li>Justificar la elección de los tratamientos y los bloques.</li>
                        <li>Presentar la solución e interpretarla para dar una recomendación al director de mercadotecnia.</li>
                        <li>Revisar si hay uno o más detergentes que sean significativamente mejores y recomendarlos para una campaña de publicidad.</li>
                        <li>Mostrar el procedimiento para realizar este análisis en Excel y su interpretación.</li>
                        <li>Realiza el reporte en un documento de Google y guarda el enlace del documento, ya que lo compartirás más adelante.</li>
                    </ol>"],
                ],
            ]
        ],
    ],
    //SLAB 10
    ["instruction_list" => 
        [
            //Paso 1
            [
                "instruction" => "Elabora una infografía sobre <strong>la metodología Seis Sigma.</strong>",
            ],
            //Paso 2
            [
                "instruction" => "Investiga en fuentes de información confiables, sobre:<br>
                <ol type='a'>
                    <li>¿Cuáles son los objetivos de Seis Sigma? realiza un mínimo de tres.</li>
                    <li>¿Qué es la metodología DMAIC y en qué situaciones se utiliza?.</li>
                    <li>¿Qué es la metodología DMADV o DFSS y en qué situaciones se utiliza?</li>
                    <li>¿Cuáles son los entregables de cada etapa?</li>
                    <li>¿Cuáles son las herramientas que se utilizan en cada etapa?</li>
                    <li>¿Cuáles son los principales beneficios de Seis Sigma?</li>
                </ol>",
            ],
            //Paso 3
            [
                "instruction" => "Utiliza la guía para elaborar una infografía.",
                "instruction_extra" =>  '<a href="assets/docs/tools/demuestra/Infografía.pdf" class="tracker btn btn-outline-primary" target="_blank">Guía para elaborar una infografía</a>'
            ],
            //Paso 4
            [
                "instruction" => "No olvides citar las fuentes de consulta en la parte inferior de tu infografía. Utiliza el Generador de referencias en formato APA.",
                "instruction_extra" =>  '<a href="https://www.cva.itesm.mx/biblioteca/pagina_con_formato_version_oct/apa.htm" class="tracker btn btn-outline-primary" target="_blank">Generador de referencias en formato APA</a>'
            ],
            //Paso 5
            [
                "instruction" => "Utiliza la herramienta digital de tu preferencia para desarrollar tu infografía. Te sugerimos explorar Canva.",
                "instruction_extra" =>  '<a href="https://www.canva.com/es_mx/q/pro/?utm_source=google_sem&utm_medium=cpc&utm_campaign=REV_MX_ES_CanvaPro_Branded_EM&utm_term=REV_ES_MX_CanvaPro_Branded_Canva_EM&gclid=Cj0KCQiA-qGNBhD3ARIsAO_o7ykYlo56xkbekmO0Cm-bPIVF-YJaKawoHJEvv3oliUF2D-BgrdGr4kMaAkmxEALw_wcB&gclsrc=aw.ds" class="tracker text-center" target="_blank"><img src="img/logos/canva.png" alt="Logo canva"/></a>'
            ],
            //Paso 6
            [
                "instruction" => "Guarda el enlace con el resultado final de la actividad, ya que lo compartirás más adelante.",
            ]
        ],
    ],
];


//-- Instrucciones Actividad Autovaloración --
/*
    FORMATO:
   * Cada paso completo es un arreglo
   * "introduction" -> Un párrafo de introducción a la actividad (opcional)
   * "text" -> Determina si el texto es normal o negritas
   * "type" -> Determina el tipo de inciso (letra o número)
   * "extra" -> Agrega un hipervínculo después del paso
   * "extra_element" -> Agreaga una lista extra de instrucciones
   *                 -> Está compuesta de los siguientes elementos:
   *                    -> "extra_intro" -> Introducción a la sección
   *                    -> "extra_instruction_list" -> Lista de instrucciones
   *                    -> "extra_instruction" -> Instrucción extra
   
*/
$act3_instructions = [
    //Slab 1
    [   
        //Type: nada o letter
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
            
        ],
        
        
    ],
    //Slab 2
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 2
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
    ],
    //Slab 3
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 4
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 5
    [   
        //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 6
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
        
    ],
    //Slab 7
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
        
    ],
    //Slab 8
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
    //Slab 9
    [   
        //Bold or nomral
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        //Slab 1
        [   
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
        
    ],
    //Slab 10
    [   //Intro
        "type" => "nada",
        "text" => "normal",
        //Instrucciones
        "instruction_list" => 
        [   
            
            //Paso 1
            [
                
                "instruction" => 'Analiza tu nivel de desempeño de acuerdo con la actividad realizada en la sección <i>Demuestra.</i>',
                
            ],
            //Paso 2
            [
                "instruction" => "Lee con detenimiento y realiza un ejercicio de reflexión que te permita reconocer el grado de desempeño.",
            ],
            //Paso 3
            [
                "instruction" => "En <i>Mi nivel de desempeño</i> selecciona el color y marca con una <strong>X</strong> en el semáforo, cuya descripción corresponda con tu desempeño en la actividad.                ",
            ],
            //Paso 4
            [
                "instruction" => "Comparte tus reflexiones sobre tu aprendizaje en el recuadro que aparece al final.",
            ],
            //Paso 5
            [
                "instruction" => "Guarda tu documento de Autovaloración, ya que lo compartirás más adelante.",
            ],
        ],
    ],
];

//-- Herramientas autovaloración --
/* 
   FORMATO:   
   * "type" -> Indica la visualización de las herramientas:
        * "row" -> Visualización simple. La herramienta se muestra con botón
        * "col" -> Visualización alternativa. La herramienta se muestra con imagen  

   * "tool" -> Indica el link o la ruta de la herramienta
        * Ruta del archivo -> assets/docs/tools/autoval/nombre-del-archivo

   * "img" -> Indica la ruta de la imagen
        * Ruta del archivo -> img/act/nombre-del-archivo

   * "instruction" -> Breve indicación de la imagen
    */
$act3_finalization = 
[
    //Slab 1
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab1_AV.pdf',
    ],
    //Slab 2
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab2_AV.pdf',
    ],
    //Slab 3
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab3_AV.pdf',
    ],
    //Slab 4
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab4_AV.pdf',
    ],
    //Slab 5
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab5_AV.pdf',
    ],
    //Slab 6
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab6_AV.pdf',
    ],
    //Slab 7
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab7_AV.pdf',
    ],
    //Slab 8
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab8_AV.pdf',
    ],
    //Slab 9
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab9_AV.pdf',
    ],
    //Slab 10
    [
        "type" => "row",
        "tool" => 'assets/docs/tools/autoval/DISENO_EXPERIMENTOS_Slab10_AV.pdf',
    ],
    
];



//-- Formulario autoevaluación --
/* 
   FORMATO:
   * Agregar el código embebido del formulario
*/
$act3_forms = 
[
/* Slab1 */    '<div data-tf-widget="QDr8vupW" data-tf-iframe-props="title=Formulario_DE_S1" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab2 */    '<div data-tf-widget="mRmHqupZ" data-tf-iframe-props="title=Formulario_DE_S2" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab3 */    '<div data-tf-widget="xhjnSGB1" data-tf-iframe-props="title=Formulario_DE_S3" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab4 */    '<div data-tf-widget="vFBlbYSx" data-tf-iframe-props="title=Formulario_DE_S4" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab5 */    '<div data-tf-widget="SNco2Z44" data-tf-iframe-props="title=Formulario_DE_S5" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab6 */    '<div data-tf-widget="PkJrfwHQ" data-tf-iframe-props="title=Formulario_DE_S6" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab7 */    '<div data-tf-widget="HnmjZf4e" data-tf-iframe-props="title=Formulario_DE_S7" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab8 */    '<div data-tf-widget="m778xkGp" data-tf-iframe-props="title=Formulario_DE_S8" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab9 */    '<div data-tf-widget="MEEuIrwk" data-tf-iframe-props="title=Formulario_DE_S9" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>',
/* Slab10 */   '<div data-tf-widget="Lhowfz5T" data-tf-iframe-props="title=Formulario_DE_S10" data-tf-medium="snippet" style="width:100%;height:400px;"></div><script src="//embed.typeform.com/next/embed.js"></script>'
];

//-- Cierre SLAB --
$act3_final_message = 
[
    "Gracias por haber sido parte de esta experiencia de aprendizaje, te felicitamos porque ahora conoces sobre <highlight>Diseño de experimentos.</highlight>",
    "¡Slab finalizado! Has aprendido sobre <highlight>el método científico.</highlight> Recuerda que practicar lo aprendido es crucial para lograr el dominio de cualquier tema.",
    "¡Lo lograste! Has completado esta experiencia de aprendizaje sobre <highlight>estadística.</highlight>",
    "¡Lo has hecho muy bien! Si quieres repasar <highlight>Experimentos en negocios,</highlight> puedes regresar al Slab las veces que desees.",
    "¡Slab finalizado! Recuerda que practicar lo aprendido sobre <highlight>el cálculo del tamaño de muestra</highlight> es crucial para dominarlo.",
    "Gracias por haber sido parte de esta experiencia de aprendizaje, te felicitamos porque ahora conoces sobre <highlight>las pruebas de hipótesis para tomar decisiones.</highlight>",
    "Gracias por haber sido parte de esta experiencia de aprendizaje, te felicitamos porque ahora conoces sobre <highlight>Pruebas de hipótesis entre dos poblaciones.</highlight>",
    "¡Te felicitamos por terminar este Slab! Ahora conoces más sobre <highlight>el análisis de regresión.</highlight>",
    "¡Felicidades aprendedor! Has terminado con éxito este Slab, donde conociste acerca de <highlight>Diseños en bloques completos al azar.</highlight>",
    "Gracias por haber sido parte de esta experiencia de aprendizaje, te felicitamos porque ahora conoces sobre <highlight>Seis Sigma.</highlight>",
];

//-- Cierre Deck --
$Diagnostic_message = 'Has concluido con éxito el Deck <highlight>Diseño de experimentos básico: una guía práctica.</highlight>
    <br><br>
    Esperamos que las actividades realizadas en esta experiencia de aprendizaje hayan contribuido al desarrollo de la competencia: <highlight>Aplico diseño de experimentos para generar información que ayude a tomar mejores decisiones en distintas áreas de conocimiento (administración, ingeniería, ciencia, etc.)</highlight>
    <br><br>
    Estamos seguros de que lo aprendido será de gran ayuda para tu éxito y crecimiento.'
?>