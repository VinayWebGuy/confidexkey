<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConfidexKey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <div class="searching">
            <div class="loader"></div>
        </div>
        <div id="icons">
            <i id="search-icon" class="fa fa-search"></i>
            <i id="add-icon" class="fa fa-plus"></i>
        </div>
        <div class="on logo-text" id="logo">ConfidexKey</div>
        <div class="box" id="add-form">
            <i class="fa fa-times close-icon"></i>
            <h2>Add Data</h2>
            <form id="send-data" method="post">
                <textarea name="msg" placeholder="Message"></textarea>
                <p class="error-message"></p>
                <input autocomplete="off" type="file" name="file" id="file">
                <input autocomplete="off" class="pin" name="pin" type="text" placeholder="Pin">
                <p class="error-message"></p>
                <button>Add</button>
            </form>
        </div>
        <div class="box" id="result">
            <i class="fa fa-times close-icon"></i>
            <div class="result-msg"></div>
            <a target="_blank" href="" class="download-file">Download <i class="fa fa-download"></i></a>
            <div class="share-block">
                <span class="share-copied">Copied!</span>
                <div class="copy-result">Copy <i class="fa fa-clipboard"></i></div>
            </div>
            <textarea id="hiddenTextArea2"></textarea>
        </div>
        <div class="box" id="search-block">
            <i class="fa fa-times close-icon"></i>
            <h2>Search Data</h2>
            <form method="post" id="search-form">
                <input autocomplete="off" class="key" name="key" type="text" placeholder="Key">
                <p class="error-message"></p>
                <input autocomplete="off" class="pin" name="pin" type="text" placeholder="Pin">
                <p class="error-message"></p>
                <button>Search</button>
            </form>
        </div>
        <div class="box" id="success">
            <i class="fa fa-times close-icon"></i>
            <h2>Data Inserted Successfully</h2>
            <div class="successInput">
                <label for="key">Key</label>
                <input id="keyResult" readonly type="text" value="Hello World">
                <span class="copied">Copied!</span>
                <i class="fa fa-clipboard copy-icon" data-target="keyResult"></i>
            </div>
            <div class="successInput">
                <label for="pin">Pin</label>
                <input id="pinResult" readonly type="text" value="Hello World">
                <span class="copied">Copied!</span>
                <i class="fa fa-clipboard copy-icon" data-target="pinResult"></i>
            </div>
            <div class="share-block">
                <span class="share-copied">Copied!</span>
                <div class="share-data">Share <i class="fa fa-share"></i></div>
            </div>
            <textarea id="hiddenTextArea"></textarea>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>