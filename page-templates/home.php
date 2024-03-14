<?php
/**
 * Template Name: Home
 *
 * @package click5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$template_dir = get_template_directory_uri();
get_header();
?>

<!-- hero -->
<section>
    <div class="wrapper d-flex align-items-end" id="hero"
        style="background-image: url('<?php echo click5_check_background(); ?>')">
        <div class="container">
            <div class="row">
                <div class="content col-12 text-center">
                    <div class="hero__label">Tiger Electric</div>
                    <h1><?php echo get_field("hero_title_1"); ?></h1>
                    <h3><?php echo get_field("hero_title_2"); ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- features -->
<section>
    <div class="features" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 features__col">
                    <div class="features__icon">
                        <img src="<?php echo $template_dir ?>/img/icon_licensed.webp" alt="">
                    </div>
                    <div class="features__content">
                        <h3>Licensed, Insured</h3>
                        <p>& Experienced</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 features__col">
                    <div class="features__icon">
                        <img src="<?php echo $template_dir ?>/img/icon_pricing.webp" alt="">
                    </div>
                    <div class="features__content">
                        <h3>Transparent Pricing</h3>
                        <p>no catches of fine print</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 features__col">
                    <div class="features__icon">
                        <img src="<?php echo $template_dir ?>/img/icon_stocked.webp" alt="">
                    </div>
                    <div class="features__content">
                        <h3>Fully-Stocked</h3>
                        <p>Service Vehicle</p>
                    </div>
                </div>
                <div class="col-12 col-lg-3 features__col">
                    <div class="features__icon">
                        <img src="<?php echo $template_dir ?>/img/icon_billing.webp" alt="">
                    </div>
                    <div class="features__content">
                        <h3>Provide Pricing, Billing</h3>
                        <p>& Financing Options On-Site</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about -->
<section>
    <div class="wrapper" id="about" style="background-image: url(<?php echo $template_dir ?>/img/tiger_half.jpg)">
        <div class="container">
            <div class="row">

                <div class="pretitle col-12">
                    About Tiger Electric
                </div>

                <div class="headline col-12">
                    <h2><?php echo get_field("about_title"); ?></h2>
                </div>

                <div class="content col-12 text-center">
                    <?php echo get_field("about_text"); ?>

                    <a href="<?php echo get_field("about_button")['url']; ?>"><span><?php echo get_field("about_button")['title']; ?></span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- services -->
<section>
    <?php if( have_rows("services_items") ) : ?>

    <div class="wrapper" id="services">
        <div class="container">

            <div class="row">
                <?php while( have_rows("services_items") ) : the_row(); 

                $image = get_sub_field('image');
                $title = get_sub_field('title');
                
                ?>

                <div class="services-item" style="background-image: url(<?php echo $image ?>">
                    <div class="services-item__heading"><?php echo $title ?></div>
                    <a href="#">
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <?php endif; ?>
</section>

<!-- cta -->
<section>
    <div class="wrapper pt-0" id="cta">
        <div class="container">
            <div class="row">
                <div class="content col-12 text-center">

                    <h2>Questions? We Can Help! Contact Us Today!</h2>

                    <div class="buttons d-flex justify-content-center align-items-center">
                        <a href="tel:<?php echo get_field("c5ts_phone", "option"); ?>" class="phone"><span>Call Us
                            </span> <?php echo get_field("c5ts_phone", "option"); ?></a>
                        <a href="<?php the_permalink(20); ?>" class="schedule">Contact Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- reviews -->
<section>
    <?php if(!is_page(117) && have_rows("reviews", 117)) : ?>

    <div class="wrapper" id="reviews" itemscope itemtype="https://schema.org/Product">
        <div class="d-none">
            <span itemprop="name" content="click5 Interactive"></span>
            <link itemprop="image" href="#">
            <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">351 West Hubbard Street</span>
                <span itemprop="addressLocality">Chicago</span>
                <span itemprop="addressRegion">IL</span>
                <span itemprop="postalCode">60654</span>
                <span itemprop="addressCountry">US</span>
            </div>
            <span itemprop="telephone"><?php echo get_field("c5ts_phone", "option"); ?></span>
            <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                <span itemprop="ratingValue">5</span>/5 based on <span
                    itemprop="reviewCount"><?php echo count( get_field("reviews", 117) ); ?></span> reviews
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="home-headline col-12 text-center">
                    <h3>Lorem Ipsum Dolor Sit Amet</h3>
                    <h2>Client Testimonials</h2>
                </div>
            </div>

            <div class="row reviews">
                <?php while(have_rows("reviews", 117)) : the_row(); ?>
                <?php if( get_sub_field("homepage") && get_sub_field("homepage")[0] == 1 ) : ?>

                <div class="review" itemprop="review" itemscope itemtype="https://schema.org/Review">
                    <div class="content">
                        <div class="opinion" itemprop="reviewBody">
                            <?php echo get_sub_field("review"); ?>
                        </div>

                        <div class="overview" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <p><strong itemprop="name"><?php echo get_sub_field("customer_info"); ?></strong></p>
                        </div>
                    </div>
                </div>

                <?php endif; ?>
                <?php endwhile; ?>

            </div>
        </div>
    </div>

    <?php endif; ?>
</section>


<?php get_footer(); ?>