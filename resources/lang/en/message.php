<?php
return [
    'nav' => [
        'projects' => 'Projects',
        'bio' => 'Biography',
        'studies' => 'Studies',
        'achievements' => 'Achievements',
        'contact' => 'Contact',
        'grants' => 'Grants',
        'residencies' => 'Residencies',
        'contest' => 'Contests',
        'other' => 'Other',
    ],

    'bio' => [
        'title' => 'Biography',
        'bio' => "Mélisandre's foray into web development has been slow-building, through her explorations in interactive narrative/game design and her background in visual arts. Her art work consists of writing that oscillates between literature and media. Through her involvement with Lafin (the Liberal Arts Fictional Institute of Narrative: a fictional collective of artists and researchers), she has designed a series of poetic dream experiments, volunteered as an archivist, and written a few novels.",
    ],

    'projects' => [
        'title' => 'Projects',
        'link' => 'links:',
        'coming-soon' => 'link coming soon',
        'linkDescription' => 'visit the website',
        'moreInfoDescription' => 'read more about it',
        'githubDescription' => 'view the code',
        'itchioDescription' => 'play the game',
        'videoDescription' => 'watch the video',
        'galleryDescription' => 'view the gallery',
        'projectList' => [
            'project1' => [
                'name' => 'TAG, YOU WRITE',
                'year' => 2025,
                'details' =>[
                    'HTML, CSS, PHP, MYSQL, JS, D3 library', 
                    'MVC structure',
                    'interactive hierarchical data visualizations using D3.js and custom JS,
                    for both tree and outline views of collaborative story-building. Auto-save for drafts, short-polling for updates, notifications, permissions, game states, votes, texts read/unread, saving front-end states for seamless refreshes, generating pages with Twig/PHP, and RESTful APIs for dynamic data.',
                    ],
                'description' => 'A collaborative writing game. In development.',
                'link' => 'https://la-fin.org/tag-you-write',
                'image' => 'tag-you-write.png',
                'alt' => 'image of the home page, link to the gallery', 
                'ready' => true,
                'github' => 'https://github.com/melisandres/tag-you-write',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'tag-you-write.png',
                        'description' => 'home page',
                        'alt' => 'tag you write home page'
                    ],
                    [
                        'path' => 'tag-you-write1.png',
                        'description' => 'search through the entire library of stories',
                        'alt' => 'list of stories'
                    ],
                    [
                        'path' => 'tag-you-write2.png',
                        'description' => 'one story, viewed as a tree (D3.js)',
                        'alt' => 'one story viewed as a tree'
                    ],
                    [
                        'path' => 'tag-you-write3.png',
                        'description' => 'click on a node to view the connected text',
                        'alt' => 'a modal with the text node, with the tree view under it'
                    ],
                    [
                        'path' => 'tag-you-write4.jpeg',
                        'description' => 'a story can also be viewed as an outline',
                        'alt' => 'outline view of a story, with an open story node'
                    ],
                    [
                        'path' => 'tag-you-write5.jpeg',
                        'description' => 'one can iterate on a story',
                        'alt' => 'the form for iterating on a text node'
                    ],
                ],
            ],
            'project2' => [
                'name' => 'LAFIN',
                'year' => 2024,
                'details' =>[
                    'HTML, CSS, JavaScript, and PHP', 
                    'initially developed and maintained in Flash', 
                    'presented at the Liminal Screen conference, Banff Centre (2008)',
                    'developed at the Banff Centre Art and Language Residency (2007)',
                    'grant recipient, NS Dept of Tourism, Culture, & Heritage (2004)'
                    ],
                'description' => 'A web-based fictional institute active in narrative experimentation.',
                'link' => 'https://la-fin.org',
                'image' => 'lafin.jpg',
                'alt' => 'image of an archival home page, link to the gallery', 
                'ready' => true,
                'github' => 'https://github.com/melisandres/lafin',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'lafin.jpg',
                        'description' => 'home page of the archival site',
                        'alt' => 'lafin\'s archival home page'
                    ],
                    [
                        'path' => 'lafin1.png',
                        'description' => 'desktop view of the residency program page',
                        'alt' => 'desktop view of the residency program page'
                    ],
                    [
                        'path' => 'lafin2.png',
                        'description' => 'interaction with the time-line on mobile',
                        'alt' => 'mobile view of the time-line'
                    ],
                    [
                        'path' => 'lafin3.png',
                        'description' => 'tablet view of the \'Lafin Press\' page',
                        'alt' => 'tablet view of the \'Lafin Press\' page'
                    ],
                ],
            ],
            'project3' => [
                'name' => 'STAMPEE',
                'year' => 2023,
                'details' =>[
                    'HTML, CSS, PHP, MYSQL', 
                    'MVC structure', 
                    'create an auction, bid on stamps, and view the auction history'
                    ],
                'description' => 'A fictional stamp auction website.',
                'link' => 'https://la-fin.org/stampee',
                'image' => 'stampee.png',
                'alt' => 'image of the home page, link to the gallery', 
                'ready' => true,
                'github' => 'https://github.com/melisandres/stampee',
                'itchio' => '',
                'video' => '',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'stampee.png',
                        'description' => 'home page of the stamp auction website',
                        'alt' => 'home page of the stamp auction website'
                    ],
                    [
                        'path' => 'stampee1.png',
                        'description' => 'desktop view of the auction page on medium sized screen',
                        'alt' => 'desktop view of the auction page on medium sized screen'
                    ],
                    [
                        'path' => 'stampee2.png',
                        'description' => 'desktop view of \'my auctions\' page on large screen',
                        'alt' => 'desktop view of the \'my auctions\' page on large screen'
                    ],
                    [
                        'path' => 'stampee3.png',
                        'description' => 'mobile view of the form to create an auction',
                        'alt' => 'mobile view of the form to create an auction'
                    ],
                ],
            ],
            'project4' => [
                'name' => 'VINO',
                'year' => 2024,
                'details' =>[
                    'LARAVEL, VUE', 
                    'worked on the user account, the general UX/UI and design, and the search/filter system'
                    ],
                'description' => 'A fictional web-based app for managing one\'s wine cellar. School project. Three person team.',
                'link' => 'https://app-vino.ca',
                'image' => 'vino.png',
                'alt' => 'image of the app logo, link to the gallery', 
                'ready' => true,
                'github' => 'https://github.com/melisandres/app_vino',
                'itchio' => '',
                'video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'moreInfo' => '',
                'gallery' => [
                    [
                        'path' => 'vino1.png',
                        'description' => 'user\'s wine cellar',
                        'alt' => 'user\'s wine cellar'
                    ],
                    [
                        'path' => 'vino2.png',
                        'description' => 'page to update user info',
                        'alt' => 'page to update user info'
                    ],
                    [
                        'path' => 'vino3.png',
                        'description' => 'page to select wines to add to the cellar',
                        'alt' => 'page to select wines to add to the cellar'
                    ],
                ],
	    ],
            
            /* 'project5' => [
                'name' => 'HANGMAN-O-GRAM',
                'year' => 2023,
                'details' =>[
                    'HTML, CSS, PHP, MYSQL, JavaScript'
                    ],
                'description' => 'Send a secret "hangman" message to a friend.',
                'link' => 'https://la-fin.org/hangman',
                'image' => 'hangman.png',
                'alt' => '', 
                'ready' => false,
                'github' => '',
                'gallery' => [
                    [
                        'path' => 'hangman.png',
                        'description' => 'Description of image 1',
                        'alt' => 'Alt text for image 1'
                    ],
                ],
            ], */
            'project6' => [
                'name' => 'LAMP LIGHTER',
                'year' => 2017,
                'details' =>[
                    'made in unity', 
                    'programmed in C#',
                    'collaboration with artist K. Nakashima'
                    ],
                'description' => 'Play a scientist who manages street-lights to study their effects on city birds.',
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
                        'description' => 'On the game\'s home screen, the start button is revealed by first turning up the light.',
                        'alt' => 'home screen'
                    ],
                    [
                        'path' => 'lamp-lighter2.png',
                        'description' => 'The player is privy to ruminations about the study of urban birds.',
                        'alt' => 'screenshot of the player, surrounded by his ruminations'
                    ],
                    [
                        'path' => 'lamp-lighter3.jpeg',
                        'description' => 'The game\'s next steps are always available in the notebook.',
                        'alt' => 'screenshot of the notebook, with the next steps'
                    ],
                    [
                        'path' => 'lamp-lighter4.jpeg',
                        'description' => 'The player can climb the city\'s street-lights, to check on neighbouring birds.',
                        'alt' => 'screenshot of the player climbing a street-light'
                    ],
                    [
                        'path' => 'lamp-lighter5.jpeg',
                        'description' => 'Once on the top of the street-light, the player can adjust the color and intensity of a street-light, and see the effect on the birds, by tagging them.',
                        'alt' => 'screenshot of the player tagging a bird'
                    ],
                    [
                        'path' => 'lamp-lighter6.png',
                        'description' => 'Once a bird has been tagged, it will be added to the player\'s notebook.',
                        'alt' => 'screenshot of the player\'s notebook, with a tagged bird'
                    ],
                    [
                        'path' => 'lamp-lighter7.jpeg',
                        'description' => 'The player\'s thoughts occur while walking, between the street-lights. The player chooses among thoughts to move on to another connected thought.',
                        'alt' => 'screenshot of the player\'s engaged in thought.'
                    ],
                ],
            ],
            'project7' => [
                'name' => 'HELP IS NEEDED',
                'year' => 2017,
                'details' =>[
                    'made with Twine', 
                    'a branching story built with hyperlinks and minimal conditions'
                    ],
                'description' => 'A simple text-game, a dream-like world where help is needed.',
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
                        'path' => 'help-is-needed1.png',
                        'description' => 'The player explores a text-base world in which they encounter a sense of the uncanny, while constantly questionning who they might be able to trust.',
                        'alt' => 'an image of a text-based game, where the player can navigate via hyperlinks'
                    ],
                    [
                        'path' => 'help-is-needed2.png',
                        'description' => 'Each choice, to trust or not to trust, leads to a different encounter, and different pathes to explore. The number of times the player chooses to trust is tallied, and also affects the story.',
                        'alt' => 'an image of a text-based game, where the player can navigate via hyperlinks'
                    ],
                ],
            ],
            'project8' => [
                'name' => 'STAIR SAFETY',
                'year' => 2016,
                'details' =>[
                    'made with Knytt Stories', 
                    'a narratively driven plateformer'
                    ],
                'description' => 'A simple narrative game, about the bureaucratic ills of accidents.',
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
                        'description' => 'In the game, everything begins with a narrow and tall staircase.',
                        'alt' => 'image of the player, in front of a narrow and tall staircase'
                    ],
                    [
                        'path' => 'stair-safety2.png',
                        'description' => 'The player must explore, after they experience a quasi-inevitable accident.',
                        'alt' => 'image of the player exploring a lunatic world at the intersection of bureaucracy and stairs'
                    ],
                    [
                        'path' => 'stair-safety3.png',
                        'description' => 'The game world is a poetic interpretation of the bureaucratic ills of accidents.',
                        'alt' => 'image of the player in front of a number pit.'
                    ],
                    [
                        'path' => 'stair-safety4.png',
                        'description' => 'The player can very briefly interact with others waiting to be helped.',
                        'alt' => 'image of the player with some npc\'s'
                    ],
                    [
                        'path' => 'stair-safety5.png',
                        'description' => 'Moments of solitude, and reflection.',
                        'alt' => 'image of the player alone.'
                    ],
                ],
            ],
            'project9' => [
                'name' => 'HOUSE GENERATOR',
                'year' => 2016,
                'details' =>[
                    'made in Unity', 
                    'programmed in C#',
                    'drawn in pen'
                    ],
                'description' => 'A street drifts by—-its houses generated by a house generator.',
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
                        'description' => 'Every fraction of a second, a new house is added to the left of the previous house as the camera travels left.',
                        'alt' => 'three houses, made with hand-drawn components'
                    ],
                    [
                        'path' => 'houses1.jpeg',
                        'description' => 'The houses are generated with a set of hand drawn parts, and an element of randomness.',
                        'alt' => 'houses made with hand-drawn parts'
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
                'program-truncated' => 'AEC web dev',
                'school' => 'College Maisonneuve',
                'location' => 'Montreal Qc',
                'year' => 2024,
                'image' => 'web.png',
                'alt' => '',
                'link' => '',
            ],
            'study2' => [
                'program' => 'AEC Independent Video Game Design',
                'program-truncated' => 'AEC design jeux vidéos',
                'school' => 'College Dawson',
                'location' => 'Montreal Qc',
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
        'title' => 'Achievements',
        'sidepanel-title' => 'introduction',
        'sidepanel-text' => 'web developement is a way to pull together creative endevours and explorations. Although this list is a little expansive, it is meant to represent the things I am proud of.',
        'grants' => 'grants',

    ],

    'contact' => [
        'title' => 'Contact',
        'greeting' => 'Contact Mélisandre',
        'emailError' => 'Sorry, we couldn\'t send your message.',
        'messageSent' => 'The following message has been sent:',
        'name' => 'first name',
        'last-name' => 'last name',
        'email' => 'email',
        'message' => 'message',
        'message-placeholder' => 'Write a message for Mé.',
        'message-initial' => '',
        'selectbox-message' => 'Select one',
        'submit' => 'send',
        'option-groups' =>[
            'development' => [
                'tier1.1' => 'site without html',
                'tier1.2' => 'site with less than one page',
                'tier1.3' => 'site with no address',
            ],
            'content' =>[
                'tier2.1' => 'site made of cloud',
                'tier2.2' => 'site made of paper',
            ],
            '' =>[
                'tier3.1' => 'living texts and images',
                'tier3.2' => 'a big bang',
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