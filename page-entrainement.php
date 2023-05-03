<?php get_header(); ?>
    <main>
        <?php 
            $webp_image_data = get_field('banner_image_webp');
            $fallback_image_data = get_field('banner_image_fallback');

            get_template_part('templates/services/banner', null, array(
                "title" => "Entrainement",
                "title-classes" => "",
                "subtitle" => "Entrainement personnalisé pour toi",
                "background" => array(
                    "webp" => $webp_image_data['sizes']['page-banner'],
                    "jpg" => $fallback_image_data['sizes']['page-banner'],
                    "alt" => $fallback_image_data['alt']
                ),
                "icon_svg" => get_theme_file_uri('/assets/images/svg/training-icon-white.svg')
            ))
        ?>
        <?php 
            get_template_part('templates/services/about', null, array(
                "title" => "À propos du plan",
                "paragraphs" => array(
                    "L'exercice régulier peut apporter de nombreux avantages pour la santé, tels que l'amélioration de la forme physique, la gestion du poids, la réduction du stress et bien plus encore. Cependant, il est important de trouver un programme d'entraînement qui est adapté à vos objectifs personnels et à votre condition physique.",
                    "C'est là que Cleanergy peut vous aider. Nous offrons une évaluation biomécanique pour déterminer votre niveau actuel de forme physique et des évaluations de votre hygiène de vie globale pour créer un plan d'entraînement personnalisé pour vous. Ce plan fonctionne en s'adaptant à vos objectifs de condition physique, à votre horaire et à vos contraintes pour vous aider à atteindre vos objectifs de santé de manière efficace. Nous vous fournirons également des instructions claires sur la façon de réaliser les exercices recommandés et un suivi régulier pour vous aider à rester sur la bonne voie. En suivant le plan personnalisé de Cleanergy, vous pourrez bénéficier des bienfaits potentiels de l'exercice régulier et atteindre une forme physique optimale."
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
                        "text" => "Au cours de votre consultation, nous prendrons en compte votre niveau de condition physique actuel, toutes les blessures ou limitations que vous pourriez avoir et votre mode de vie global afin de créer un plan à la fois efficace et durable."
                    ),
                    array(
                        "title" => "Recevez un plan personnalisé d'entrainement",
                        "text" => "Nous créerons un plan personnalisé d'entrainement basé sur votre histoire de santé, de votre évaluation biomécanique et de vos besoins uniques."
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
                "title" => "Articles d'entrainement", 
                "category" => get_category_by_slug("Entrainement")
            ));
        ?>

        <?php 
            get_template_part('templates/services/others', null, array(
                "title" => "Autres services",
                "services" => array(
                    array(
                        "title" => "Suppléments",
                        "svg_icon" => get_theme_file_uri('/assets/images/svg/supplements-icon-green.svg'),
                        "link" => "/supplements"
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