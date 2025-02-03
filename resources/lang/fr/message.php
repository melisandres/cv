<?php
return [
    'nav' => [
        'projects' => 'Projets',
        'bio' => 'Biographie',
        'studies' => 'Études',
        'achievements' => 'Réalisations',
        'contact' => 'Contact',
        'grants' => 'Bourses',
        'residencies' => 'Résidences',
        'contest' => 'Concours',
        'other' => 'Autres',
    ],

    'bio' => [
        'title' => 'Biographie',
        'bio' => "Mélisandre s'est progressivement aventurée dans le domaine du développement web, explorant la narrativité interactive, la conception de jeux, et puisant dans son parcours artistique visuel. Elle a trouvé une passion pour la programmation, et le développement web full-stack. Son œuvre artistique se compose d'écrits qui naviguent entre littérature et média. Impliquée au sein de Lafin (l'Institut Académique Fictif d'Interprétations Narratologiques : un collectif fictif d'artistes et de chercheurs), elle a élaboré une série d'expérimentations pseudo-scientifiques sur les rêves, œuvré en tant qu'archiviste bénévole et rédigé quelques romans.",
    ],

    'projects' => [
        'title' => 'Projets',
        'link' => 'liens:',
        'coming-soon' => 'lien à venir, bientôt',
        'linkDescription' => 'visiter le site web',
        'moreInfoDescription' => 'en lire plus',
        'githubDescription' => 'voir le code',
        'itchioDescription' => 'jouer le jeu',
        'videoDescription' => 'regarder la vidéo',
        'galleryDescription' => 'voir la galerie',
        'projectList' => [
            'project1' => [
                'name' => 'TAG, YOU WRITE',
                'year' => 2025,
                'details' => [
                    'HTML, CSS, PHP, MYSQL, JS, bibliothèque D3',
                    'structure MVC',
                    'Visualisations interactives de données hiérarchiques avec D3.js et JS personnalisé, vues en arbre et liste pour la collaboration narrative. Auto-enregistrement des brouillons, sondages courts pour mises à jour, notifications, permissions, états de jeu, votes, textes lus/non lus, sauvegarde des états pour rafraîchissements fluides, génération de pages avec Twig/PHP, APIs REST pour données dynamiques.'
                ],
                'description' => 'Un projet qui me tient à cœur, un jeu d\'écriture collaborative. En développement.',
                'link' => 'https://la-fin.org/tag-you-write',
                'image' => 'tag-you-write.png',
                'alt' => 'image de la page d\'accueil, lien vers la galerie',
                'ready' => true, 
                'github' => 'https://github.com/melisandres/tag-you-write',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'tag-you-write.png',
                        'description' => 'page d\'accueil',
                        'alt' => 'tag you write page d\'accueil'
                    ],
                    [
                        'path' => 'tag-you-write1.png',
                        'description' => 'explorer les archives de collaborations',
                        'alt' => 'liste de collaborations'
                    ],
                    [
                        'path' => 'tag-you-write2.png',
                        'description' => 'une collaboration, vue comme un arbre (D3.js)',
                        'alt' => 'une collaboration vue comme un arbre'
                    ],
                    [
                        'path' => 'tag-you-write3.png',
                        'description' => 'cliquer sur un coeur pour voir son text',
                        'alt' => 'une modale avec le text associée, et l\'arbre de collaborations en dessous'
                    ],
                    [
                        'path' => 'tag-you-write4.jpeg',
                        'description' => 'une collaboration peut aussi être vue en tant que plan',
                        'alt' => 'vue en plan d\'une collaboration, avec une histoire visible'
                    ],
                    [
                        'path' => 'tag-you-write5.jpeg',
                        'description' => 'on peut itérer sur une histoire',
                        'alt' => 'le formulaire pour itérer sur un text'
                    ],
                ],
            ],
            'project2' => [
                'name' => 'LAFIN',
                'year' => 2024,
                'details' => [
                    'HTML, CSS, JavaScript et PHP',
                    'initialement développé et maintenu en Flash',
                    'présenté à la conférence Liminal Screen, Banff Centre (2008)',
                    'développé à la résidence Art and Language du Banff Centre (2007)',
                    'récipiendaire d\'une subvention du ministère du Tourisme, de la Culture et du Patrimoine de la Nouvelle-Écosse (2004)'
                ],
                'description' => "LAFIN explore l'expérimentation narrative à travers un institut fictif. Actuellement, je travaille sur son redéploiement.",
                'link' => 'https://la-fin.org',
                'image' => 'lafin.jpg',
                'alt' => 'image de la page d\'accueil, lien vers la galerie',
                'ready' => true, 
                'github' => 'https://github.com/melisandres/lafin',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'lafin.jpg',
                        'description' => 'page d\'accueil du site  archivé',
                        'alt' => 'lafin page d\'accueil du site archivé'
                    ],
                    [
                        'path' => 'lafin1.png',
                        'description' => 'vue de la page du programe de résidence sur grands écrans',
                        'alt' => 'page du programe de résidence, grands écrans'
                    ],
                    [
                        'path' => 'lafin2.png',
                        'description' => 'interaction avec la ligne de temp à partir d\'un téléphone',
                        'alt' => 'vue de la ligne de temp sur un téléphone'
                    ],  
                    [
                        'path' => 'lafin3.png',
                        'description' => 'vue de la page du programme de presse sur une tablette',
                        'alt' => 'vue de la page de \'Lafin Press\'sur une tablette'
                    ],
                ],
            ],
            'project3' => [
                'name' => 'STAMPEE',
                'year' => 2023,
                'details' => [
                    'HTML, CSS, PHP, MYSQL',
                    'structure MVC',
                    'creé une enchère, miser, et consulter l\'historique d\'une enchère'
                ],
                'description' => 'STAMPEE est un projet que j\'ai développé en classe, un site fictif d\'enchères de timbres.',
                'link' => 'https://la-fin.org/stampee',
                'image' => 'stampee.png',
                'alt' => '',
                'ready' => true, 
                'github' => 'https://github.com/melisandres/stampee',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'stampee.png',
                        'description' => 'page d\'accueil du site d\'enchères',
                        'alt' => 'page d\'accueil du site d\'enchères'
                    ],
                    [
                        'path' => 'stampee1.png',
                        'description' => 'vue de la page d\'enchère sur écran moyen',
                        'alt' => 'vue de la page d\'enchère sur écran moyen'
                    ],
                    [
                        'path' => 'stampee2.png',
                        'description' => 'vue de la page \'mes enchères\' sur grand écran',
                        'alt' => 'vue de la page \'mes enchères\' sur grand écran'
                    ],
                    [
                        'path' => 'stampee3.png',
                        'description' => 'vue de la page de création d\'une enchère sur un téléphone',
                        'alt' => 'vue de la page de création d\'une enchère sur un téléphone'
                    ],
                ],
            ],
            'project4' => [
                'name' => 'VINO',
                'year' => 2024,
                'details' =>[
                    'LARAVEL, VUE', 
                    'contribué à la gestion des comptes utilisateurs, au design général et UX/UI, et au système de recherche/filtrage'
                    ],
                'description' => 'Une application web pour gérer une cave à vins. Projet scolaire, équipe de trois.',
                'link' => 'https://app-vino.ca',
                'image' => 'vino.png',
                'alt' => 'image du logo de l\'application, lien vers la galerie', 
                'ready' => true, 
                'github' => 'https://github.com/melisandres/app_vino',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'vino1.png',
                        'description' => 'page cellier de l\'utilisateur',
                        'alt' => 'page d\'accueil de l\'application'
                    ],
                    [
                        'path' => 'vino2.png',
                        'description' => 'page pour mettre à jour les informations de l\'utilisateur',
                        'alt' => 'page pour mettre à jour les informations de l\'utilisateur'
                    ],
                    [
                        'path' => 'vino3.png',
                        'description' => 'page pour selectioner des vins, pour les ajouter à la cave',
                        'alt' => 'page pour selectioner des vins, pour les ajouter à la cave'
                    ],
                ],
            ],
            /* ,
            'project5' => [
                'name' => 'HANGMAN-O-GRAM',
                'year' => 2023,
                'details' => [
                    'HTML, CSS, PHP, MYSQL, JavaScript'
                ],
                'description' => 'Un projet amusant où vous pouvez envoyer des messages "pendus" secrets à vos amis.',
                'link' => 'https://la-fin.org/hangman',
                'image' => 'hangman.png',
                'alt' => '',
                'ready' => false
            ] */
            'project6' => [
                'name' => 'LAMP LIGHTER',
                'year' => 2017,
                'details' => [
                    'fabriqué avec Unity',
                    'programmé en C#',
                    'en collaboration avec l\'artist K. Nakashima'
                ],
                'description' => 'Une expérience immersive où vous jouez le rôle d\'un scientifique gérant les lampadaires pour étudier leur impact sur les oiseaux de la ville.',
                'link' => 'https://melisandre.itch.io/lamp-lighter',
                'image' => 'lamp-lighter.png',
                'alt' => '',
                'ready' => false, 
                'github' => 'https://github.com/melisandres/Street-Lamps',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'lamp-lighter1.jpeg',
                        'description' => 'Sur la page d\'accueil du jeu, le bouton pour lancer le jeu est révélé en augmentant l\'intensité de la lumière',
                        'alt' => 'lamp lighter page d\'accueil'
                    ],
                    [
                        'path' => 'lamp-lighter2.png',
                        'description' => 'le joueur prend connaissance des réflexions du personnage au sujet de l\'étude des oiseaux urbains',
                        'alt' => 'screenshot du joueur entouré de ses réflexions'
                    ],
                    [
                        'path' => 'lamp-lighter3.jpeg',
                        'description' => 'Les prochaines étapes du jeu sont toujours disponibles dans le cahier.',
                        'alt' => 'image du cahier, avec les prochaines étapes'
                    ],
                    [
                        'path' => 'lamp-lighter4.jpeg',
                        'description' => 'Le joueur peut grimper les lampadaires de la ville, pour observer les oiseaux avoisinants.',
                        'alt' => 'image du joueur grimpant un lampadaire'
                    ],
                    [
                        'path' => 'lamp-lighter5.jpeg',
                        'description' => 'Une fois sur le haut du lampadaire, le joueur peut ajuster la couleur et l\'intensité d\'un lampadaire, et voir l\'effet sur les oiseaux, en les taguant.',
                        'alt' => 'image du joueur taguant un oiseau'
                    ],
                    [
                        'path' => 'lamp-lighter6.jpeg',
                        'description' => 'Une fois un oiseau tagué, il sera ajouté au cahier du joueur.',
                        'alt' => 'image du cahier du joueur, avec un oiseau tagué'
                    ],
                    [
                        'path' => 'lamp-lighter7.jpeg',
                        'description' => 'Les réflexions du joueur se font en se promenant entre les lampadaires. Le joueur choisit parmi les réflexions pour se rendre à la prochaine réflexion.',
                        'alt' => 'image du joueur en train de réfléchir'
                    ],
                ],
            ],
            'project7' => [
                'name' => 'HELP IS NEEDED',
                'year' => 2017,
                'details' => [
                    'réalisé avec Twine',
                    'une histoire interactive construite avec des hyperliens et des conditions minimales'
                ],
                'description' => 'une aventure textuelle, plongeant les joueurs dans un monde onirique.',
                'link' => '',
                'image' => 'trust.png',
                'alt' => '',
                'ready' => true,
                'github' => '',
                'itchio' => 'https://melisandre.itch.io/help-is-needed',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'trust.png',
                        'description' => 'Le joueur explore un monde textuel, dans lequel il est constamment confronté à la question de qui il peut ou ne peut pas faire confiance.',
                        'alt' => 'une image d\'un jeux text où le joueur peut navigué par le biais de liens hypertextuel'
                    ],
                    [
                        'path' => 'help-is-needed2.png',
                        'description' => 'Chaque choix, de faire confiance ou non, mène à un différente rencontre. Le nombre de fois où le joueur choisit de faire confiance est compté, et affecte également l\'histoire.',
                        'alt' => 'une image d\'un jeux text où le joueur peut navigué par le biais de liens hypertextuel'
                    ],
                ],
            ],
            'project8' => [
                'name' => 'STAIR SAFETY',
                'year' => 2016,
                'details' => [
                    'réalisé avec Knytt Stories',
                    'un jeu de plateforme narratif'
                ],
                'description' => 'Un jeu narratif simple qui explore les méandres de la bureaucratie après un accident.',
                'link' => '',
                'image' => 'stair-safety.png',
                'alt' => '',
                'ready' => true,
                'github' => '',
                'itchio' => 'https://melisandre.itch.io/stair-safety',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'stair-safety1.png',
                        'description' => 'Le joueur se retrouve devant un escalier étroit et haut.',
                        'alt' => 'image du joueur, devant un escalier étroit et haut'
                    ],
                    [
                        'path' => 'stair-safety2.png',
                        'description' => 'Le joueur doit explorer, après avoir subi un accident quasi-inévitable.',
                        'alt' => 'image du joueur explorant un monde lunatique à l\'intersection de la bureaucratie et des escaliers'
                    ],
                    [
                        'path' => 'stair-safety3.png',
                        'description' => 'Le monde du jeu est une interprétation poétique des maux de la bureaucratie.',
                        'alt' => 'image du joueur devant un trou numérique'
                    ],
                    [
                        'path' => 'stair-safety4.png',
                        'description' => 'Le joueur peut très brièvement interragir avec d\'autres personnes en attente d\'être aidées.',
                        'alt' => 'image du joueur avec quelques npc\'s'
                    ],
                    [
                        'path' => 'stair-safety5.png',
                        'description' => 'Des moments de solitude et de réflexion.',
                        'alt' => 'image du joueur seul'
                    ],
                ],
            ],
            'project9' => [
                'name' => 'HOUSE GENERATOR',
                'year' => 2016,
                'details' => [
                    'fabriqué avec Unity',
                    'programmé en C#',
                    'dessiné à la plume'
                ],
                'description' => 'Une rue défile avec des maisons assemblées une a une.',
                'link' => '',
                'image' => 'houses.png',
                'alt' => '',
                'ready' => true,
                'github' => '',
                'itchio' => 'https://melisandre.itch.io/houses',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'houses.png',
                        'description' => 'Chaque fraction de seconde, une nouvelle maison est ajoutée à la gauche de la maison précédente, alors que la caméra se déplace vers la gauche.',
                        'alt' => 'Trois maisons, faites avec des composants dessinés à la main'
                    ],
                    [
                        'path' => 'houses1.jpeg',
                        'description' => 'Les maisons sont générées avec un ensemble de composants dessinés à la main, avec des règles qui comprènnent un élément aléatoire.',
                        'alt' => 'maisons faites avec des composants dessinés à la main'
                    ],
                ],
            ],
        ],
    ],    

    'studies' => [
        'title' => 'Studies',
        'studiesList' => [
            'study1' => [
                'program' => 'AEC conception et programmation de sites webs',
                'program-truncated' => 'AEC development web',
                'school' => 'College Maisonneuve',
                'location' => 'Montréal Qc',
                'year' => 2024,
                'image' => 'web.png',
                'alt' => '',
                'link' => '',
            ],
            'study2' => [
                'program' => 'AEC Independent Video Game Design',
                'program-truncated' => 'AEC design jeux vidéos',
                'school' => 'College Dawson',
                'location' => 'Montréal Qc',
                'year' => 2017,
                'image' => 'game.png',
                'alt' => '',
                'link' => '',
            ],
            'study3' => [
                'program' => 'Tellus Interactive Arts and Entertainment',
                'program-truncated' => 'Résidence narrativité interactive',
                'school' => 'The Canadian Film Center',
                'location' => 'Toronto Ont',
                'year' => 2007,
                'image' => 'int-narr.png',
                'alt' => '',
                'link' => 'https://cfccreates.com/content-hub/things-left-unsaid/',
            ],
            'study4' => [
                'program' => 'Bac en arts plastic',
                'program-truncated' => 'Bachelor of Fine Arts',
                'school' => 'NSCAD U',
                'location' => 'Halifax NS',
                'year' => 2003,
                'image' => 'media.png',
                'alt' => '',
                'link' => '',
            ]
        ],
    ],

    'achievements' => [
        'title' => 'Réalisations',
        'sidepanel-title' => 'introduction',
        'sidepanel-text' => 'web developement is a way to pull together creative endevours and explorations. Although this list is a little expansive, it is meant to represent the things I am proud of.',
        'grants' => 'grants',

    ],

    'contact' => [
        'title' => 'Contact',
        'greeting' => 'Contactez Mélisandre',
        'emailError' => 'Désolé, nous n\'avons pas pu envoyer votre message.',
        'messageSent' => 'Le message suivant a été envoyé:',
        'name' => 'prénom',
        'last-name' => 'nom de famille',
        'email' => 'courriel',
        'message' => 'message',
        'message-placeholder' => 'Rédigez un message pour Mé.',
        'message-initial' => '',
        'selectbox-message' => 'Sélectionnez une option',
        'submit' => 'envoyer',
        'option-groups' => [
            'options de bases' => [
                'tier1.1' => 'site sans HTML',
                'tier1.2' => 'site avec moins d\'une page',
                'tier1.3' => 'site sans adresse',
            ],
            'options exotiques' => [
                'tier2.1' => 'site fait de nuages',
                'tier2.2' => 'site fait de papier',
            ],
            'options executives' => [
                'tier3.1' => 'textes et images vivants',
                'tier3.2' => 'un big bang',
            ]
        ]
        ],
        'error' => [
            'title' => 'Oops! Something went wrong',
            'description' => 'We encountered an error while processing your request. Please try again later.',
            'back-home' => 'Return to Homepage',
            '404' => [
                'title' => 'Page Not Found',
                'description' => 'The page you are looking for does not exist.'
            ],
            '500' => [
                'title' => 'Server Error',
                'description' => 'We\'re experiencing some technical difficulties. Please try again later.'
            ]
        ],
];