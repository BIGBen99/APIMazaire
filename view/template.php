<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <base href="<?= $webRoot ?>" />
        <link href="public/css/style.css" rel="stylesheet" /> 
        <title><?= $title ?></title>
    </head>
        
    <body>
        <div id="global">
            <header>
                <a href="/"><img src="public/images/APIMazaire.png" alt="API Mazaire"></a>
            </header>
            <div id="contenu">
                <?= $content ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Site réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
