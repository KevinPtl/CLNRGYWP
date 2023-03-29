<?php get_header(); ?>
    <main>
        <?php 
            $webp_image_data = get_field('banner_image_webp');
            $fallback_image_data = get_field('banner_image_jpg');

            get_template_part('templates/services/banner', null, array(
                "title" => "Suppléments",
                "subtitle" => "Combler les lacunes de votre plan alimentaire",
                "background" => array(
                    "webp" => $webp_image_data['sizes']['page-banner'],
                    "jpg" => $fallback_image_data['sizes']['page-banner'],
                    "alt" => $fallback_image_data['alt']
                ),
                "icon_svg" => get_theme_file_uri('/assets/images/svg/supplements-icon-white.svg')
            ))
        ?>
        <?php 
            get_template_part('templates/services/about', null, array(
                "title" => "À propos du plan",
                "paragraphs" => array(
                    "Les suppléments peuvent offrir de nombreux bienfaits pour la santé, tels que l'amélioration de la santé physique, la réduction du stress, le renforcement du système immunitaire et bien plus encore. Cependant, il est important de sélectionner les bons suppléments pour répondre à vos besoins personnels.",
                    "C'est là que Cleanergy peut vous aider. Nous offrons une évaluation approfondie de votre santé physique et de votre hygiène de vie pour créer un plan personnalisé de supplémentation qui est spécifique à vos besoins. Notre plan fonctionne en identifiant les lacunes nutritionnelles dans votre régime alimentaire et en les comblant avec des suppléments ciblés pour aider à améliorer votre santé globale. Nous vous fournirons également des instructions claires sur la façon de prendre les suppléments recommandés et un suivi régulier pour vous aider à atteindre vos objectifs de santé. En suivant le plan personnalisé de Cleanergy, vous pourrez bénéficier des bienfaits potentiels des suppléments et atteindre une santé optimale."
                )
            ));
        ?>

        <?php 
            get_template_part('templates/services/steps', null, array(
                "title" => "Comment ça marche?",
                "steps" => array(
                    array(
                        "title" => "Contactez-nous pour un avenir plus sain",
                        "text" => "<a href=" . site_url('/contact') . ">Ici</a> ou <a href='tel:15147182147'>par téléphone</a>, <a href='mailto: nrg@clnrgy.com'>courriel</a>, <a href='https://www.facebook.com/clnrgy' target='_blank'>Facebook</a>. Choisissez les services que vous souhaitez en fonction de la discussion avec Mode de vie CLEANERGY."
                    ),
                    array(
                        "title" => "Remplissez les questionnaires",
                        "text" => "Examinez votre historique de plans passés. Détaillez votre mode de vie global et identifiez les différents facteurs de stress dans votre vie quotidienne."
                    ),
                    array(
                        "title" => "Évaluation",
                        "text" => "Nous examinerons votre hygiène de vie globale afin d'avoir une vue d'ensemble sur votre état de santé actuel."
                    ),
                    array(
                        "title" => "Recevez un plan personnalisé de supplémentation",
                        "text" => "Nous créerons un plan personnalisé de supplémentation basé sur les résultats de votre évaluation. Vous recevrez ce plan avec des instructions claires sur les suppléments recommandés et leurs bienfaits potentiels."
                    ),
                    array(
                        "title" => "Recevez des résultats",
                        "text" => "Vous devriez commencer à recevoir des résultats positifs. Suivez les instructions de votre plan avec diligence pour obtenir les meilleurs résultats possibles."
                    ),
                    array(
                        "title" => "Suivi",
                        "text" => "Vous bénéficierez d'un suivi régulier de notre part. Nous nous efforcerons de vous soutenir tout au long de votre parcours vers une santé optimale."
                    ),
                )
            ));
        ?>

        <?php 
            get_template_part('templates/services/benefits', null, array(
                "title" => "Ce qu'on vise à améliorer",
                "points" => array(
                    array(
                        "text" => "Plus d'énergie",
                        "fa-icon-class" => "fa-4x fa-regular fa-battery-bolt"
                    ),
                    array(
                        "text" => "Meilleur système digestif",
                        "fa-icon-class" => "fa-4x fa-regular fa-stomach"
                    ),
                    array(
                        "text" => "Meilleur focus",
                        "fa-icon-class" => "fa-4x fa-regular fa-head-side-brain"
                    ),
                    array(
                        "text" => "Meilleur sommeil",
                        "fa-icon-class" => "fa-4x fa-regular fa-face-sleeping"
                    )
                )
            ));
        ?>

        <?php get_template_part('templates/services/blogs', null, array(
                "title" => "Articles sur les suppléments", 
                "category" => get_category_by_slug("Suppléments")
            ));
        ?>

        <?php 
            get_template_part('templates/services/others', null, array(
                "title" => "Autres services",
                "services" => array(
                    array(
                        "title" => "Entrainement",
                        "svg_icon" => get_theme_file_uri('/assets/images/svg/training-icon-green.svg'),
                        "link" => "/entrainement"
                    ),
                    array(
                        "title" => "Nutrition",
                        "svg_icon" => get_theme_file_uri('/assets/images/svg/nutrition-icon-green.svg'),
                        "link" => "/nutrition"
                    ),
                )
            )); 
        ?>
    </main>
<?php get_footer(); ?>