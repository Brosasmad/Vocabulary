<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Deutsch lernen</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script defer type="text/javascript" src="js.js"> </script>
    </head>
    <body>
        <?php

            include_once "./block.php";
            // $connect = mysqli_connect("MySQL-8.2", "root", "", "Vocabulary");
            // $result = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM Words ORDER BY RAND() LIMIT 1 "));

            // echo '<div id="de" value="'.$result['de_name'].'" ></div>
            // <div id="en" value="'.$result['en_name'].'" ></div>
            // ';
        ?>







<!--         <h1 style="font-size: 45px">Vocabulary(German and English)</h1>
        <hr> -->

        <!--Put text which you would like to translate to another language-->

<!--         <div class="section1" > 
            <span class="title"><?php echo "Write in English: " . $result['de_name']; ?></span>

            <div>
                <input type="text" id="word" name="word" placeholder="Write in English" class="input">
            </div>
            
            <div id="res" class ="antwort"> </div>
            
            <div>
                <button onClick="window.location.reload();" class="button1" id="space"> Reload </button>
                <button type="submit" class="button" id="my"> Submit</button>
            </div>
        </div>
        
        <div id='result'class="section1" ></div>
         -->
    </body>
</html>