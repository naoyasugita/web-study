<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewpoint" content="width=device-width, initial_scale = 1">
    <meta name="theme-color" content="#444444">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <header>
        <h1>
      <a href="index.html">
        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" width="244" height="76" alt="ZOO LOGICAL">
      </a>
    </h1>
    <nav class="nav-global">
        <ul>
            <li><a href="about.html">動物園について</a></li>
            <li><a href="guide.html">ガイドのご案内</a></li>
            <li><a href="animals.html">人気の動物たち</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </nav>