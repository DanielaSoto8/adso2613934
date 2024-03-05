<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04- inheritance</title>
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

            div.pks {
                display: flex;
                gap: 10px;
                div.pokemon {
                    border: 1px dotted #fff;
                    align-items: center;
                    flex-direction: column;
                    gap: 10px;
                    display: flex;
                    padding: 10px;
                    transition: all 0.5s ease-in; 
                    filter: blur(2px) grayscale(1);
                    img {
                        height: 100px;
                        object-fit: cover;
                        width: 100px;
                    }
                }
                div.pokemon:hover {
                    transform: scale(1.1);
                    filter: blur(0) grayscale(0);
                }
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
        <h1>04- inheritance</h1>
        <section>

            <?php

            class Pokemon{   
            // Atributes
            protected $name;
            protected $type;
            protected $healt;
            protected $img;
        

            //Methods
            public function __construct($name,$type,$healt, $img){
                $this->name = $name;
                $this->type = $type;
                $this->healt = $healt;
                $this->img = $img;
            }
            public function attack (){
                return "Attack";
            }
            public function defense (){
                return "Defense";
            }
            public function show(){
                return "<div class='pokemon'>" . $this->name . "<img src='".$this->img."'>" . $this->type . $this->healt . "</div>" ; 
            }
        }
        class Evolve extends Pokemon {
            public function levelUp($name,$type,$healt,$img) {
                parent::__construct($name,$type,$healt,$img);
                }
            }
                
        ?>
         <h2>Evolve your Pokemon</h2>

         <div class="pks"> 
            <?php

        

        $pk = new Evolve('charmander', 'fire', 150,'img/verde.jpg');
         echo $pk ->show();
        $pk -> levelUp('charmeleon', 'fire', 250,'img/amarillo.jpg');
        echo $pk->show();
        $pk -> levelUp('charizard', 'fire', 250,'img/gris.jpg');
        echo $pk->show();

?>
 </div>
            
</section>
    </main>
</body>

</html>