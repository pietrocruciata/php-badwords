<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main>
        <form action="./server.php">
            <p>
                <label for="paragraph">messaggio:</label>
                <textarea name="paragraph" id="paragraph" placeholder="scrivi il messaggio"></textarea>
            </p>
            <p>
                <label for="censored">messaggio da censurare:</label>
                <input type="text" name="censored" id="censored" placeholder="scrivi il messaggio ">
            </p>

            <button>Invia</button>
        </form>
    </main>
</body>

</html>