<?php
    class QueryBuilder{
        protected $pdo;
        public function __construct($pdo){
            $this->pdo=$pdo;
        }
        public function selectAll($table){
            $statement=$this->pdo->prepare("select * from $table");
            $statement->execute();
          return  $users=$statement->fetchAll(PDO::FETCH_OBJ);
        }
        public function insert($dataArr,$table){
            $getDataKey=array_keys($dataArr);
            $col=implode(",",$getDataKey);
            $questionMark="";
            foreach($getDataKey as $key){
                $questionMark.="?,";
            }
            $questionMark=rtrim($questionMark,",");
            $sql="insert into $table ($col) values ($questionMark)";
            $statement=$this->pdo->prepare($sql);
            $getDataValues=array_values($dataArr);
            $statement->execute($getDataValues);
            // dd( $questionMark);

        }
    }