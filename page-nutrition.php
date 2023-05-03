<?php get_header(); ?>
    <main>
        <?php 
            $webp_image_data = get_field('banner_image_webp');
            $fallback_image_data = get_field('banner_image_fallback');

            get_template_part('templates/services/banner', null, array(
                "title" => "Nutrition",
                "title-classes" => "",
                "subtitle" => "Décisions nutritionelles orientées",
                "background" => array(
                    "webp" => $webp_image_data['sizes']['page-banner'],
                    "jpg" => $fallback_image_data['sizes']['page-banner'],
                    "alt" => $fallback_image_data['alt']
                ),
                "icon_svg" => get_theme_file_uri('/assets/images/svg/nutrition-icon-white.svg')
            ))
        ?>
        <?php 
            get_template_part('templates/services/about', null, array(
                "title" => "À propos du plan",
                "paragraphs" => array(
                    "Chez Cleanergy, nous croyons que la nutrition est la clé pour une vie plus saine et plus heureuse. C'est pourquoi nous travaillons avec nos clients pour élaborer des décisions nutritionelles orientées qui correspondent à leurs besoins uniques. Nous allons vous aider en vous fournissant des conseils sur les aliments à inclure dans votre alimentation quotidienne, ainsi que sur les habitudes alimentaires à adopter pour atteindre vos objectifs de santé. De plus, nous vous accompagnerons tout au long de votre parcours avec des suivis réguliers pour vous aider à rester sur la bonne voie.",
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
                        "text" => "Lors de votre consultation en nutrition, nous prendrons le temps d'évaluer vos habitudes alimentaires actuelles, de discuter de vos objectifs et de vous fournir les conseils et le soutien dont vous avez besoin pour apporter des changements durables."
                    ),
                    array(
                        "title" => "Recevez un plan d'orientation alimentaire",
                        "text" => "Nous créerons un plan d'orientation alimentaire basé sur les résultats de votre évaluation. Ce plan comprends tout ce qui vous faut pour améliorer votre santé."
                    ),
                    array(
                        "title" => "Recevez vos résultats",
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
                "title" => "Articles sur la nutrition", 
                "category" => get_category_by_slug("Nutrition")
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
                        "title" => "Entrainement",
                        "svg_icon" => get_theme_file_uri('/assets/images/svg/training-icon-green.svg'),
                        "link" => "/entrainement"
                    ),
                )
            )); 
        ?>
    </main>
<?php get_footer(); ?>