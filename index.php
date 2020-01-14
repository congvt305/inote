<?php
include_once 'model/NoteType.php';
include_once 'model/Note.php';
include_once 'model/DBConnect.php';
include_once 'model/NoteDB.php';
include_once 'controller/NoteManager.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
    </head>

    <body>

    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php">iNote</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <table class="navbar-nav mr-auto">
                <td>
                    <a class="btn btn-primary" href="index.php?page=addNote">Add Note</a>
                </td>
            </table>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="keyword">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </nav>
<?php
$noteManager = new NoteManager();

$page = isset($_GET['page']) ? $_GET['page'] : null;

switch ($page) {
    case 'detailNote':
        $noteManager->detailNote();
        break;
    case 'addNote':
        $noteManager->addNote();
        break;
    case 'editNote':
        $noteManager->editNote();
        break;
    case 'deleteNote':
        $noteManager->deleteNote();
        break;
    default:
        $noteManager->index();
}

?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</html>