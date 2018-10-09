<!DOCTYPE html>
<html>
    <head>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <form   method="POST" action="traitement.php">
            <textarea name="description" rows="5" cols="50"></textarea>
            <input type="submit" value="Envoyer" name="bt1" />
            <br>
            <select name="couleur[]" multiple="multiple">
                <option value="rouge">Rouge</option>
                <option vert="vert">Vert</option>
                <option bleu="bleu">Bleu</option>
            </select>
        </form>

    </body>
</html>