<?php
function layout_head(string $title)
{
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Individuell</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.typekit.net/sae0oqc.css">
        <link rel="stylesheet" href="/public/css/createProduct.css" />
        <link rel="stylesheet" href="/public/css/oneProduct.css" />
        <link rel="stylesheet" href="/public/css/nav.css" />
        <link rel="stylesheet" href="/public/css/products.css" />
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5CCXT44F');</script>
        <!-- End Google Tag Manager -->
        <script src="/dist/main.js"></script>
    </head>

    <?php
}
?>