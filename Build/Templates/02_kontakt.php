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
            ce('heading', [
                'mb' => 'mb-md-70 mb-35',
                'class' => 'container',
                'headline' => 'Kontaktformular',
                'text' => '',
            ]);
        ?>
        <?php  
            ce('form', [
                'items' => [
                    [
                        'label' => 'Anrede',
                    ],
                    [
                        'label' => 'Vorname*',
                    ],
                    [
                        'label' => 'Name*',
                    ],
                    [
                        'label' => 'Firma',
                    ],
                    [
                        'label' => 'E-Mail*',
                    ],
                    [
                        'label' => 'Tel-Nr.',
                    ],
                ],
                'maps' => [
                    [
                        'key' => 'x',
                        'section' => [
                            [
                                'title' => 'ABACONS Treuhand GmbH',
                                'list' => [
                                    [
                                        'li' => 'Waffenplatzstrasse 41',
                                    ],
                                    [
                                        'li' => 'CH–8002 Zürich',
                                    ],
                                    [
                                        'li' => 'Tel +41 43 499 00 60',
                                    ],
                                    [
                                        'li' => 'Fax +41 43 499 00 61',
                                    ],
                                    [
                                        'li' => 'info@abacons.ch',
                                    ],
        
                                ],
                            ],
                            [
                                'title' => 'ABACONS Treuhand GmbH',
                                'text' => 'Einfach online einen Termin vereinbaren.',
                                'btn' => 'termin',
                            ],

                        ],

                    ],
                    [
                        'key' => 'x1',
                        'section' => [
                            [
                                'title' => 'ABACONS Treuhand GmbH',
                                'text' => '!!',

                            ],
                            [
                                'title' => 'ABACONS Treuhand GmbH',
                                'text' => 'Einfach online einen Termin vereinbaren.',
                                'btn' => 'termin',
                            ],

                        ],

                    ],
                ],
                'textarea' => 'Message',
               
                'text' => 'Note: Please fill out the fields marked with an asterisk.The Privacy Policy applies.',
                'btn' => 'Absenden',
            ]);
        ?>

<?php 
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
// include 'Partials/footer.php';
//------------------------------------------------------------------------------v 