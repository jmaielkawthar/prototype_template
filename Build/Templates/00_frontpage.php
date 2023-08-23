<?php
require_once 'Inc/functions.php';

$current_page_name = '';
$bodyclass = '';

//------------------------------------------------------------------------------

include 'Globals/head.php';
include 'Partials/header.php';
//------------------------------ START CONTENT ---------------------------------
?>
    <?php
        ce('header-slider', [
            'items' => [
                [
                    'text' => 'In heiklen Bereichen, insbesondere der Lohnadministration, können Fehler schmerzhafte finanzielle Folgen haben. <br> Mehr zum Thema ...',
                    'headline' => 'Steuern aktiv steuern',
                    'btn' => 'Online-Treuhand ',
                ],
                [
                    'text' => 'In heiklen Bereichen, insbesondere der Lohnadministration, können Fehler schmerzhafte finanzielle Folgen haben.Mehr zum Thema ...',
                    'btn' => 'Online-Treuhand',
                    'image' => 'Img/einhorn-true.webp',
                ],
                [
                    'text' => 'In heiklen Bereichen, insbesondere der Lohnadministration, können Fehler schmerzhafte finanzielle Folgen haben.Mehr zum Thema ...',
                    'btn' => 'Online-Treuhand',
                    'headline' => 'Steuern aktiv steuern',
                ],
            ],
        ]);
    ?>
    
        <?php  
            ce('heading', [
                'mb' => 'mb-md-70 mb-35',
                'class' => 'container',
                'headline' => 'Karriere',
                'text' => '',
            ]);
        ?>

        <?php  
            ce('teasercard-full-width', [
                'headline' => 'Deine Vorteile',
                'subline' => 'ONRAIN bietet dir als Arbeitgeber:',
                'title' => 'Integrität, Vertrauen, Professionalität',
                'text' => 'Wir setzen alles daran langfristige Beziehungen aufzubauen, hören aufmerksam zu und gehen individuelle Bedürfnisse und Anliegen ein.',
                'btn' => 'Mehr erfahren',
                'image' => 'Img/pig-crop.webp',
            ]);
        ?>
        <?php  
            ce('gallery', [
                'headline' => 'gellery images with fancybox',
                'items' => [
                    [
                        'text' => 'image caption 1',
                        'image' => 'Img/pig-crop.webp',
                    ],
                    [
                        'text' => 'image caption 2',
                        'image' => 'Img/einhorn-true.webp',
                    ],
                    [
                        'text' => 'image caption 3',
                        'image' => 'Img/pig-crop.webp',
                    ],
                    [
                        'text' => 'image caption 4',
                        'image' => 'Img/einhorn-true.webp',
                    ],
                    [
                        'text' => 'image caption 5',
                        'image' => 'Img/pig-crop.webp',
                    ],
                ],
            ]);
        ?>

        <?php  
            ce('headline-two-texts', [
                'mb' => 'mb-md-70 mb-35',
                'class' => 'container',
                'title' => '',
                'headline' => 'Offene Stellen',
                'subline' => 'Werde Teil eines coolen Teams',
                'items' => [
                    [
                        'title' => 'Treuhand Mandatsleiter/in Zürich',
                        'btn' => 'Stellenbeschrieb',
                        'text' => 'Du hast die Motivation, den Ehrgeiz und die Fähigkeiten, umfassende Treuhand-Mandate für stark wachsende Start-ups erfolgreich zu begleiten? Willkommen bei ONRAIN!
                        ',
                    ],
                    [
                        'btn' => 'Stellenbeschrieb',
                        'title' => 'Treuhand Mandatsleiter/in Zug',
                        'text' => 'Du hast die Motivation, den Ehrgeiz und die Fähigkeiten, umfassende Treuhand-Mandate für stark wachsende Start-ups erfolgreich zu begleiten? Willkommen bei ONRAIN!
                        ',
                    ],
                ],
            ]);
        ?>
        <?php  
            ce('teasercard-full-width', [
                'headline' => 'Deine Vorteile',
                'subline' => 'ONRAIN bietet dir als Arbeitgeber:',
                'title' => 'Integrität, Vertrauen, Professionalität',
                'text' => 'Wir setzen alles daran langfristige Beziehungen aufzubauen, hören aufmerksam zu und gehen individuelle Bedürfnisse und Anliegen ein.',
                'btn' => 'Mehr erfahren',
                'image' => 'Img/pig-crop.webp',
            ]);
        ?>

        <?php  
            ce('gallery', [
                'headline' => 'gellery images with fancybox',
                'items' => [
                    [
                        'text' => 'image caption 1',
                        'image' => 'Img/pig-crop.webp',
                    ],
                    [
                        'text' => 'image caption 2',
                        'image' => 'Img/einhorn-true.webp',
                    ],
                    [
                        'text' => 'image caption 3',
                        'image' => 'Img/pig-crop.webp',
                    ],
                    [
                        'text' => 'image caption 4',
                        'image' => 'Img/einhorn-true.webp',
                    ],
                    [
                        'text' => 'image caption 5',
                        'image' => 'Img/pig-crop.webp',
                    ],
                ],
            ]);
        ?>     

        
        <?php  
            ce('teaser-image-text', [
                'image' => 'Img/einhorn.png',
                'headline' => 'Claudia Wüthrich',
                'text' => '                ist diplomierte Treuhandexpertin und leitet die ABACONS Treuhand GmbH seit 2005 als Inhaberin und ist für die operative Tätigkeit der Unternehmung verantwortlich.
                Bevor sie die Leitung der ABACONS übernahm, war Claudia Mitarbeiterin der KPMG Zürich im Bereich Steuern. Anschliessend war sie für eine Steuerboutique in Zürich im Bereich Treuhand tätig.
                
                Nebst Claudia und Rolf sind Elena Koller und Simon Kegele als Mandatsleiter und ausgebildete Treuhänder Teil des ABACONS Teams.',
                'link' => 'www.linkedin.com/loremipsum',
            ]);
        ?> 
        <?php  
            ce('items-image-text', [
                'items' => [
                    [
                        'image' => 'Img/pig-crop.webp',
                        'headline' => 'Claudia Wüthrich',
                        'text' => '                ist diplomierte Treuhandexpertin und leitet die ABACONS Treuhand GmbH seit 2005 als Inhaberin und ist für die operative Tätigkeit der Unternehmung verantwortlich.
                        Bevor sie die Leitung der ABACONS übernahm, war Ceuhänder Teil des ABACONS Teams.',
                        'link' => 'www.linkedin.com/loremipsum',
                    ],
                    [
                        'image' => 'Img/pig-crop.webp',
                        'headline' => 'Claudia Wüthrich',
                        'text' => '                war Claudia Mitarbeiterin der KPMG Zürich im Bereich Steuern. Anschliessend war sie für eine Steuerboutique in Zürich im Bereich Treuhand tätig.
                        
                        Nebst Claudia und Rolf sind Elena Koller und Simon Kegele als Mandatsleiter und ausgebildete Treuhänder Teil des ABACONS Teams.',
                        'link' => 'www.linkedin.com/loremipsum',
                    ],
                    [
                        'image' => 'Img/pig-crop.webp',
                        'headline' => 'Claudia Wüthrich',
                        'text' => '                ihm, war Claudia Mitarbeiterin der KPMG Zürich im Bereich Steuern. Anschliessend war sie für eine Steuerboutique in Zürich im Bereich Treuhand tätig.
                        Mandatsleiter und ausgebildete Treuhänder Teil des ABACONS Teams.',
                        'link' => 'www.linkedin.com/loremipsum',
                    ],
                    [
                        'image' => 'Img/pig-crop.webp',
                        'headline' => 'Claudia Wüthrich',
                        'text' => '                ist diplomierte Treuhandexpertin und leitet die ABACONS Treuhand GmbH seit 2005 als Inhaberin und ist für die operative Tätigkeit der Unternehmung verantwortlich.
                        Bevor sie  mon Kegele als Mandatsleiter und ausgebildete Treuhänder Teil des ABACONS Teams.',
                        'link' => 'www.linkedin.com/loremipsum',
                    ],
                ],
            ]);
        ?>
                <?php  
            ce('text', [
                'mb' => 'mb-50',
                'class' => 'container',
                'subtitle' => 'Ihre Herausforderungen',
                'text' => 'In heiklen Bereichen, insbesondere der Lohnadministration, können Fehler schmerzhafte finanzielle Folgen haben.',
                'list' => ' 
                <li>Zunehmende Komplexität der gesetzlichen Vorschriften</li>
                <li>Bereitstellen von Ressourcen für administrative Aufgaben</li>
                <li>Abschlüsse und Deklarationen fristgerecht einreichen</li>
                <li>Jederzeit Zugriff, Übersicht und Kontrolle</li>',
            ]);
        ?>
        <?php  
            ce('text', [
                'mb' => 'mb-50',
                'class' => 'container',
                'subtitle' => 'Ihre Alternative',
                'text' => 'Wir arbeiten zusammen mit derselben Business-Software. Sie profitieren von folgenden Vorteilen:',
                'list' => ' 
                <li> Unterstützung, Fachwissen und Kontrolle gemäss Ihren Bedürfnissen</li>
                <li>Einhaltung der gesetzlichen Vorschriften</li>
                <li>Reduzierung des Fehlerrisikos</li>
                <li>Keine Infrastrukturkosten für Updates der Software</li>',
            ]);
        ?>

        <?php  
            ce('two-teasercard', [
                'items' => [
                    [
                        'class' => 'bg-overlay',
                        'headline' => 'Lohnausweis',
                        'text' => 'Als Arbeitgeber müssen Sie Ihren Mitarbeitern jährlich einen Lohnausweis ausstellen. Neben dem Lohn sind auch alle anderen Leistungen und Vorteile zu deklarieren, die dem Arbeitnehmer im Zusammenhang mit dem bestehenden, respektive ehemaligen Arbeitsverhältnis zugeflossen sind. ',
                    ],
                    [
                        'class' => '',
                        'headline' => 'Lohnbuchhaltung',
                        'text' => 'Sie machen den Unterschied aus und sind das Herz Ihres Unternehmens: gemeint sind Ihre Mitarbeiter. Mit der Anstellung von Personal sind für Sie aber auch zahlreiche administrative und formelle Dinge zu erledigen.',
                    ],
                ],
            ]);
        ?>

        <?php  
            ce('accordion', [
                'headline' => 'FAQ - Häufig gestellte Fragen zu Online Buchhaltung',
                'items' => [
                    [
                        'class' => 'collapse1',
                        'headline' => 'Lorem Ipsum dolor Sit Amet',
                        'text' => 'Als Arbeitgeber müssen Sie Ihren Mitarbeitern jährlich einen Lohnausweis ausstellen. Neben dem Lohn sind auch alle anderen Leistungen und Vorteile zu deklarieren, die dem Arbeitnehmer im Zusammenhang mit dem bestehenden, respektive ehemaligen Arbeitsverhältnis zugeflossen sind. ',
                    ],
                    [
                        'class' => 'collapse2',
                        'headline' => 'Lorem Ipsum dolor Sit Amet',
                        'text' => 'Sie machen den Unterschied aus und sind das Herz Ihres Unternehmens: gemeint sind Ihre Mitarbeiter. Mit der Anstellung von Personal sind für Sie aber auch zahlreiche administrative und formelle Dinge zu erledigen.',
                    ],
                    [
                        'class' => 'collapse3',
                        'headline' => 'Lorem Ipsum dolor Sit Amet',
                        'text' => 'Sie machen den Unterschied aus und sind das Herz Ihres Unternehmens: gemeint sind Ihre Mitarbeiter. Mit der Anstellung von Personal sind für Sie aber auch zahlreiche administrative und formelle Dinge zu erledigen.',
                    ],
                ],
            ]);
        ?>
    <div class="ce-advice-teaser pb-md-70 pb-35">
        <div class="container">
        <?php  
                ce('heading', [
                    'mb' => 'mb-md-85 mb-40',
                    'class' => 'no-container',
                    'headlineClass' => 'h2-tag',
                    'textClass' => 'heading-medium',
                    'headline' => 'Stellenangebot',
                    'text' => 'Treuhandallrounder (60–80%)',
                ]);
            ?>
            <div class="row">
                <div class="col-lg-8 main">
                    <?php  
                        ce('text', [             
                            'class' => 'no-container',
                            'text' => 'Sie begeistern sich für Steuerthemen und suchen nach neuen Herausforderungen? Sie reizt eine abwechslungsreiche Mandantenstruktur in einem wachsenden Unternehmen? Dann sind Sie bei uns genau richtig! ONRAIN ist ein Dienst­leister in den Bereichen Steuer­beratung, Wirtschafts­prüfung, Rechts­beratung und Unter­nehmens­beratung.',
                        ]);
                    ?>
                    

                    <?php  
                        ce('text', [
                            'mb' => 'mb-25',
                            'class' => 'no-container',
                            'text' =>' der Mandanten bei Betriebsprüfungen Was wir Ihnen bieten',
                            'list' => ' 
                            <li>Entwicklung und Begleitung von Geschäftsideen vom Business Plan bis zur Realisation</li>
                            <li>Mitarbeiterbeteiligungsprogramme (ESOP)</li>
                            <li>Gründungen</li>
                            <li>Sanierungen und Liquidationen</li>
                            <li> Vertretungen bei Betreibungen und Konkursen</li>
                            <li>Domizil</li>
                            <li>Interims-/ und Outsourcing-Lösungen</li>
                            <li>Budget, Investitions- und Liquiditätsplanung</li>',
                        ]);
                        ?>
                </div>
                <div class="col-lg-4 sidebar">
                <?php  
                        ce('teaser-card', [
                            'mb' => 'mb-50',
                            'class' => 'no-container',
                            'headline' => 'Lernen Sie uns persönlich kennen.',
                            'text' => 'Einfach online einen Termin vereinbaren.',
                            'btn' => 'Termin',
                        ]);
                ?>
                </div>
            </div>
        </div>   
    </div>

    <?php  
            ce('masonry', [
                'headline' => 'items images with masonry',
                'items' => [
                    [
                        'text' => 'Der Artikel-9-Impactfonds „Assiduus ESG -Urban Office I',
                        'image' => 'Img/pig-crop.webp',
                    ],
                    [
                        'text' => 'Der Artikel-9-Impactfonds „Assiduus ESG -Urban Office I“ ist ein
                        offener. Der Artikel-9-Impactfonds „Assiduus ESG -Urban Office I“ ist ein
                        offener.Der Artikel-9-Impactfonds „Assiduus ESG -Urban Office I“ ist ein
                        offener.',
                        'image' => 'Img/pig-crop.webp',
                    ],
                    [
                        'text' => 'Der Artikel-9-Impactfonds „Assiduus ESG -Urban Office I“ ist ein
                        offener Immobilien-Spezial-AIF und verfügt',
                        'image' => 'Img/einhorn-true.webp',
                    ],

                    [
                        'text' => 'Der Artikel-9-Impactfonds „Assiduus ESG -Urban Office I“ ist ein
                        offener Immobilien-Spezial-AIF und verfügt über ein Startportfolio',
                        'image' => 'Img/pig-crop.webp',
                    ],
                    [
                        'text' => 'Der Artikel-9-Impactfonds ',
                        'image' => 'Img/einhorn-true.webp',
                    ],
                    [
                        'text' => 'Der Artikel-9-Impactfonds „Assiduus ESG -Urban Office I“ ist ein
                        offener.',
                        'image' => 'Img/pig-crop.webp',
                    ],

                ],
            ]);
        ?>


<?php
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
// include 'Partials/footer.php';
//------------------------------------------------------------------------------