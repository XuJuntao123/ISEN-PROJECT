<?php 

  class Answer_Model extends Model
  {
    
    function __construct()
    {
      parent::__construct();
    }

    public function index(){
      $sql = "SELECT q_question FROM q WHERE id=:kid";
      $sth = $this->db->prepare($sql);
      $sth->execute(array(':kid' => $_GET['kid']
        ));
      $data = $sth->fetch(PDO::FETCH_OBJ);
      // $data->id; 
      echo "<h3>Question:</h3><p>".$data->q_question."</p>";     
      echo "<hr>";

      $sql="SELECT * FROM a WHERE question_id=:kid";
      $sth = $this->db->prepare($sql);
      $sth->execute(array(':kid' => $_GET['kid']));
      $data = $sth->fetchall(PDO::FETCH_OBJ);
      $count = $sth->rowcount();
       
    for($i = 0;$i < $sth->rowCount();$i++){
      echo "<h4>Answer ".$i.":</h4>";
      echo $data[$i]->answer;
      echo "<br>";
    }
    echo "<hr>";
  }
}
