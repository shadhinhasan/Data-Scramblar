<?php
include_once "scramblar-function.php";
$task='encode';
if (isset($_GET['task']) && $_GET['task']!='') {
    $task = $GET['task'];
}

$key='abcdefghijklmnopqrstuvwxyz1234567890';
if('key' == $task){
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('',$key_original);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Form Example</title>

    <style>
        body{
            margin-top: 30px;
        }

        #data{
            width:100%; 
            height:160px;
        }
        
        #result{
            width:100%;
            height:160px;
        }

        .hidden{
            display:none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Data Scramble</h1>
                <p>Use this application to scramble your data</p>
                <p>
                    <a href="/scrambler.php?task=encode">Encode</a>
                    <a href="/scrambler.php?task=decode">Decode</a>
                    <a href="/scrambler.php?task=key">Generate-Key</a>
                </p> 
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="key">Key</label>
                    <input type="text" name="key" id="key" <?php displayKey($key); ?>>

                    <label for="data">Data</label>
                    <textarea name="data" id="data"></textarea>

                    <label for="result">Result</label>
                    <textarea id="result"></textarea>

                    <button type="submit">Do It For Me</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>