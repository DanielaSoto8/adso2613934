<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03- Visibility</title>
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

            form {
                border: 2px solid #fff6;
                background-color: #fff3;
                border-radius: 8px;
                display: flex;
                flex-direction: column;
                padding: 10px;
                width: 300px;

                label {
                    display: flex;
                    justify-content: space-between;
                    gap: 1.4rem;
                }

                output {
                    font-size: 1.4rem;
                }

                button {
                    background-color: #994bde;
                    border: 2px solid #fff6;
                    border-radius: 8px;
                    color: #fff9;
                    cursor: pointer;
                    font-size: 1rem;
                    width: 300px;
                    padding: 1rem;
                }

            }

            table {
                border-collapse: collapse;

                tr {

                    td {
                        background-color: #fff1;
                        padding: 8px;
                        border: 1px solid #fff;

                    }
                }

                tr:nth-child(even) td:nth-child(even) {
                    background-color: #fff2;
                }

                tr:nth-child(odd) td:nth-child(odd) {
                    background-color: #fff2;
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
        <h1>03-Visibility</h1>
        <section>

            <?php
             class Tablemaker{
                //atributes
                private $nr;//Number of rows
                private $nc;//Number of Columns

                //Methods
                public function __construct($nr, $nc){
                    $this->nr = $nr;
                    $this->nc = $nc;
                }

                public function drawTable() {
                    echo $this->startTable();
                   $this->contentTable();
                    echo $this->endTable();

                }

                private function startTable (){
                    return '<table>';
                }

                private function contentTable (){
                    
                    for($i=1;$i<=$this->nr;$i++){
                        echo "<tr>";
                     for ($j=1;$j<=$this->nc;$j++){
                        echo "<td></td>";

                     }
                        echo "</tr>";

                    }
                    
                
                    
                }

                private function endTable (){
                    return '</table>';
                }
            } 
            

            
            ?>
            <h2>Table maker</h2>

            <form method="POST">
                <label>
                    <p>Rows:</p>
                    <input type="range" name="nr" min="1" max="20" step="1" value="1" oninput="o1.value=this.value">
                    <output id="o1">0</output>
                </label>
                <label>
                    <p>Columns:</p>
                    <input type="range" name="nc" min="1" max="20" step="1" value="1" oninput="o2.value=this.value">
                    <output id="o2">0</output>
                </label>
                <button type="submit"> Make Table </button>
            </form>

            <?php
            if($_POST) {
                $nr=$_POST["nr"];
                $nc=$_POST["nc"];
                $table =new Tablemaker ($nr,$nc);
                $table-> drawTable();
            } 
         ?>

            

        </section>
    </main>
</body>

</html>