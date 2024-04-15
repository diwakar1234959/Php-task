<?php
namespace Html;
class Table{
public $title = "";
public $row =0;
public function message(){
    echo "{$this->title}<br>{$this->row}";
} 
}
$table = new Table();
$table->title = "My table";
$table->row = 5;
?>
<html>
    <head>
</head>
<body>
    <?php
    $table->message();
    ?>
</body>
    </html>