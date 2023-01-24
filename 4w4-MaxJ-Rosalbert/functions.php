    <?php
    /**
     * L'ensemble des fonctions du thème
     */



    wp_enqueue_style('4w4-gr1-principal', //identificateur
            get_template_directory_uri() . '/style.css' , // adresse url de style.css
            array(),
            filemtime(get_template_directory() . '/style.css'), 
            'all'); //media


