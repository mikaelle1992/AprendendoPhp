<?php
class Carro{
public $marca;
public $modelo;
public $ano;
public $cor;
}

$c1 = new Carro;
$c1->marca='ford';
$c1->modelo='TXT';
$c1->ano=2015;
$c1->cor='preto';
var_dump($c1);

class Post{
    public int $like =0;
    public array $comments=[];
    public string $author;
 
public function __construct($qtLikes=0){
$this->like=$qtLikes;
}

    public function aumentarlike(){
        $this->like++;
    }
}

$post1= new Post(25);

$post1->aumentarlike();

$post2=new Post();


echo "<br/> post 1:" .$post1->like."<br/>";
echo "post 2:" .$post2->like."<br/>";











?>