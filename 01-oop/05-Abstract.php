<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05- Abstract</title>
    <link rel="stylesheet" href="css/master.css">
    <style>
        section {
            background-color: #0009;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 10px;

            h2 {
                margin: 0;
            }
        }
    </style>
</head>

<body>
    <nav class="controls">
        <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#ffffff"
                    d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z" />
            </svg>
        </a>
    </nav>
    <main>
        <h1>05- Abstract</h1>
        <section>

            <?php

           abstract class Database{
            //atributes
            protected $host;
            protected $user;
            protected $pass;
            protected $dbname;
            protected $conx;
            
            //Methods
            public function __construct($dbname,
                                        $host='localhost',
                                        $user='root',
                                        $pass='',
                                        ) {
            $this->host= $host;
            $this->user= $user;
            $this->pass= $pass;
            $this->dbname= $dbname;
            }

            public function connect (){
                try {
                    $this->conx = new PDO("mysql:host=$this->host;
                    dbname=$this->dbname", $this->user, $this->pass);
                    if($this->conx){
                        echo "👩‍🦰";
                    }
                  

                } catch (PDOException $e){
                    echo "Error: " . $e->getMessage();
                }
                
            }

           }
           class Pokemon extends Database {

           }
           $db=new Pokemon ('adso2613934');
           $db->connect();
        ?>



        </section>
    </main>
</body>

</html>