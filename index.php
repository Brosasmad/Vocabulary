<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <title> Deutsch lernen </title>
        <script defer type="text/javascript" src="js.js"> </script>
    </head>
        <body>
            <h1 style="font-size: 45px">
                Vocabulary(German and English)
                </h1>
                <hr>

                <?php
                $connect = mysqli_connect("MySQL-8.2", "root", "", "Vocabulary");
                $result = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM Words ORDER BY RAND() LIMIT 1 "));

                echo '<div id="de" value="'.$result['de_name'].'" ></div>
                <div id="en" value="'.$result['en_name'].'" ></div>
                ';
                ?>

                <!--Put text which you would like to translate to another language-->

                <div class="section1" > 
                    <span class="title"> 
                        <?php
                            echo "Write in English: " . $result['de_name'];
                        ?>
                    </span>
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
                <style>
.antwort {
font-size: 40px;

}                    
.input {
    width: 372px;
    height: 55px;
    margin-top: 20px;
    font-size: 29px; */
    padding: 0px 13px;
    box-sizing: border-box;
    text-align: center;
    border-radius: 10px;
    border: 0;
    background: #69efef;
    color: black;
}
.input:hover {
    background: #69efef;
    cursor:pointer;
}
.input:focus {
border: 0px;


}
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus
 {
  -webkit-box-shadow: 0 0 0px 1000px #8debeb inset;
}

* {outline: none;}
.title {
 font-size: 30px;
 font-weight: 600;
}

.section1 {
    display: inline-block;
    vertical-align: top;
}
#res {
height: 100px;

}
img {
    height : 400px;
}
.button {
  border: none;
  color: rgb(0, 0, 0);
  padding: 30px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 1px 1px;
  cursor: pointer;
  border-radius: 12px;
background: #69efef;
}
.button:hover {
background: #abf0f0;
}
.button1 {
  border: none;
  color: rgb(0, 0, 0);
  padding: 30px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 1px 1px;
  cursor: pointer;
  border-radius: 12px;
background: #47a1a1;
}
.button1:hover {
background: #739d9d;
}
</style>
        </body>
</html>