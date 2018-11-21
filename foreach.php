<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search Array</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  </head>
  <body>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <form method="post">
          <div class="row py-2 my-3 bg-primary">
            <div class="col-md-8">
              <input type="text" class='form-control' placeholder='Search by name...' name="name" value="">
            </div>
            <div class="col-md-4">
              <input type="submit" class='btn btn-success btn-block' value="Search">
            </div>
          </div>
        </form>
        <table class='table table-striped'>
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $arr = array(
            array('id'=>"1","name"=>"peeter","email"=>"peter@pt.com"),
            array('id'=>"2","name"=>"Harry","email"=>"harry@disney.com"),
            array('id'=>"3","name"=>"Aman","email"=>"akd6203@gmail.com"),
            array('id'=>"4","name"=>"James","email"=>"jrocks@james.com"),
            array('id'=>"5","name"=>"Jose","email"=>"jose123@gmail.com")
            );
            for($i=0; $i<count($arr); $i++){
              if(isset($_POST['name'])){
                $name = $_POST['name'];
                if($name == $arr[$i]['name']){
                  echo '<tr>';
                  echo '<td>'.$arr[$i]['id'].'</td>';
                  echo '<td>'.$arr[$i]['name'].'</td>';
                  echo '<td>'.$arr[$i]['email'].'</td>';
                  echo '</tr>';
                }
              }
              else{
                echo '<tr>';
                echo '<td>'.$arr[$i]['id'].'</td>';
                echo '<td>'.$arr[$i]['name'].'</td>';
                echo '<td>'.$arr[$i]['email'].'</td>';
                echo '</tr>';
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
