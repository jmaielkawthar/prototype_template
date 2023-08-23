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
                'headline' => 'Bewerbungsformular',
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
                'textarea' => 'Message',
                'fileUpload' => 'Bewerbung hochladen',
                'text' => 'Note: Please fill out the fields marked with an asterisk.The Privacy Policy applies.',
                'btn' => 'Absenden',
            ]);
        ?>

<?php 
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
// include 'Partials/footer.php';
//------------------------------------------------------------------------------v 