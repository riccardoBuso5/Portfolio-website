<!DOCTYPE html>      
<html 
<?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <!-- Fallback stylesheet link: ensures style.css is loaded even if functions.php doesn't enqueue it -->
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" media="all" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <nav class="main-navigation">
        </nav>
        <h1><!-- nome --> </h1>

        <div class="header-text">
            <p style="text-align: center; width: 100%; margin: 0 auto;">
                <!-- motto -->
            </p>
        </div>
    </header>

