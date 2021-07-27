<?php
$conn = mysqli_connect(
  'lollifedb.mysql.database.azure.com',
  'kimm240@lollifedb',
  'gusrb13579!',
  'data',
  '3306'
);

$what = $_POST['lifetier'];
$first_data = null;
$second_data = null;

if($what == "학벌"){
  $sql = "SELECT * FROM sum_result WHERE sum_name='{$_POST['nickname']}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $sum_name = $row['sum_name'];

  if(is_null($row['sum_name'])){
    echo "닉네임이 존재하지 않습니다.";
    $what="닉네임을 다시 입력하세요.";
    $first_data=null;
    $second_data=null;
  }
  else{
    $lol_db_size=4220447;
    $univ_db_size=4942;
    $rank_in_univ_from_lol=(int)(round(($row['sum_res']*($univ_db_size/$lol_db_size))));
    if($rank_in_univ_from_lol === 0) $rank_in_univ_from_lol = $rank_in_univ_from_lol + 1;

    $sql= "SELECT * FROM university WHERE rank_of_this=$rank_in_univ_from_lol";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $first_data = $row['university_name'];
    $second_data = $row['university_section'];
  }


  if($result === false){
    echo '데이터를 가져오는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
  } else {
  }
}

elseif($what == "키"){
  $sql = "SELECT * FROM sum_result WHERE sum_name='{$_POST['nickname']}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $sum_name = $row['sum_name'];

  if(is_null($row['sum_name'])){
    echo "닉네임이 존재하지 않습니다.";
    $what="닉네임을 다시 입력하세요.";
    $first_data=null;
    $second_data=null;
  }
  else{
    $lol_db_size=4220447;
    $ratio=($row['sum_res'] / $lol_db_size)*100;

    $sql = "SELECT * FROM height_ratio WHERE ratio < $ratio";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $first_data = $row['height'];
    $second_data = "cm";
  }


  if($result === false){
    echo '데이터를 가져오는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
  } else {
  }

}

elseif($what == "거주지"){
  $sql = "SELECT * FROM sum_result WHERE sum_name='{$_POST['nickname']}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $sum_name = $row['sum_name'];

  if(is_null($row['sum_name'])){
    echo "닉네임이 존재하지 않습니다.";
    $what="닉네임을 다시 입력하세요.";
    $first_data=null;
    $second_data=null;
  }
  else{
    $lol_db_size=4220447;
    $resi_db_size=82726;
    $rank_in_univ_from_lol=(int)(round(($row['sum_res']*($resi_db_size/$lol_db_size))));
    if($rank_in_univ_from_lol === 0) $rank_in_univ_from_lol = $rank_in_univ_from_lol + 1;

    $sql= "SELECT * FROM resident  WHERE apart_rank=$rank_in_univ_from_lol";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $first_data = $row['location'];
    $second_data= $row['name'];
    $second_data .= "<br> (전용면적: ";
    $second_data .= $row['rounded_area'];
    $second_data .= "제곱미터)";
  }


  if($result === false){
    echo '데이터를 가져오는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
  } else {

  }
}

else{
  $what = "확인하고 싶은 인생티어를 선택해주세요.";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LOL_AND_LIFE_TIER</title>
  </head>
  <body>
      <div class="card" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title">배치 결과</h5>
      <h6 class="card-subtitle mb-2 text-muted">
          <?php echo $sum_name ?>
      </h6>
      <p class="card-text">
          <?php echo $what ?> <br>
          <?php echo $first_data ?>
          <?php echo $second_data ?>
      </p>
      <a href="index.php" class="card-link">돌아가기</a>
      <a href="https://lifetolol.azurewebsites.net/" class="card-link">인생티어를롤티어로변환하기</a>
    </div>
  </div>                
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
