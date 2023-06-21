					<div class="slider-depoimentos">
					    <?php
                        // Obtém o ID do post atual
                        $current_post_id = get_the_ID();

                        // Argumentos da WP_Query
                        $args = array(
                            'post_type'      => 'depoimentos',
                            'post_status'    => 'publish',
                            'posts_per_page' => -1,
                            'post__not_in'   => array($current_post_id)
                        );

                        // Inicializa a consulta
                        $query = new WP_Query($args);
                        while ($query->have_posts()) : $query->the_post(); ?>
					        <div class="depoimento-item">
					            <figure>
					                <a href="<?php the_permalink(); ?>">
					                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
					                    <span class="font-title-xs">Ver projeto <i class="fa-solid fa-chevron-right"></i></span>
					                </a>
					            </figure>
					            <div class="text">
					                <a href="<?php the_permalink(); ?>">
					                    <p class="font-testmonials"><?php the_field('texto'); ?></p>
					                </a>
					                <a href="<?php the_permalink(); ?>">
					                    <h4 class="font-testmonials-signature"><?php the_title(); ?></h4>
					                </a>
					            </div>
					        </div>
					    <?php
                        endwhile; ?>
					</div>