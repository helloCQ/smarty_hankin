<div class="post post-style-image">
                    <a class="post-img img-response d-block gradient-mask" href=" http://heitang.chuangzaoshi.com/archives/18"  style="background-image: url(http://heitang.chuangzaoshi.com/wp-content/uploads/2017/05/B-4.png)">
                    </a>
                    <div class="post-style-image-content">
                        <div class="post-meta-top">
                            <a class="post-meta-categories" href="http://heitang.chuangzaoshi.com/archives/category/creativity">
                                <i class="czs-bookmark"></i>
                                <?php $category = get_the_category(); echo $category[0]->cat_name; ?>    </a>
                            <span class="post-meta-time">
         • 2017.05.15    </span>
                        </div>
                        <div class="post-title">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </div>
                        <ul class="post-meta-bottom">
                            <li class="post-meta-author">
                                <a class="d-block" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" target="_blank">
                                        <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
                                        <span class="d-inline-block"><?php the_author(); ?></span>
                                    </a>
                            </li>
                            <?php get_template_part( 'layouts/home/_view_comments_like' );?>
                        </ul>
                    </div>
                </div>