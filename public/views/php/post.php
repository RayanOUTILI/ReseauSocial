<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/post.css">
    <script src="../js/post.js"></script>
    <title>Publier un post</title>
</head>

<body>
    <?php include_once('nav.php'); ?>

    <div class="post-container">
        <form action="" method="post">
            <label for="post_title">Titre</label>
            <input type="text" name="post_title" required>

            <label for="post_text">Texte</label>
            <textarea name="post_text" required></textarea>

            <label for="post_images">Images (maintenez Ctrl pour sélectionner plusieurs):</label>
            <input type="file" name="post_images[]" multiple>

            <label for="post_visibility">Visibilité:</label>
            <select name="post_visibility">
                <option value="friends">Amis seulement</option>
                <option value="public">Public</option>
            </select>

            <button type="submit" name="submit_post">Publier</button>
        </form>
        <?php
            if(isset($_POST['submit_post']))
            {
                $GLOBALS['action'] = "createNewPost";
            }
        ?>

        <div class="preview-container" id="post-preview">
            <h2>Aperçu du Post</h2>
            <p id="preview-title"></p>
            <p id="preview-text"></p>
            <div id="preview-images"></div>
        </div>
    </div>
</body>

</html>