<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- For Naver Web Master Tool -->
    <meta name="naver-site-verification" content="cf9f2b406c084d27aec2a12fe337238adb05883a" />

    <!-- Meta information about this project -->
    <meta name="description" content="롤티어를 바탕으로 한 인생 데이터(키, 부동산, 학벌)을 알려줍니다." />
    <meta property="og:title" content="내세울 게 롤티어밖에 없는 롤창인생인 내가 이세계에선 강남 아파트 거주 부르주아?" />
    <meta property="og:description" content="롤티어를 바탕으로 인생 데이터(키, 부동산, 학벌)를 측정하여 알려줍니다." />
    <meta property="og:image" content="https://ifh.cc/g/5YzOJ6.png"/>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60f64db0ddbb15d4"></script>
       
    <!-- jQuery & jQuery UI Library -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script>
    $(function(){
        $('#autoSizingInput').autocomplete({
          source: "search.php",
          minLength: 1
        });
    });
    </script>
    <title>LOL_TO_LIFE_TIER</title>
  </head>
  <h1>내세울 게 롤티어밖에 없는 롤창인생인 내가 이세계에선 강남 아파트 거주 부르주아?</h1>
  <body>

<form class="row gy-2 gx-3 align-items-center" action="check1.php" method="POST">
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingInput">Name</label>
    <input type="text" name="nickname" class="form-control" id="autoSizingInput" placeholder="롤 닉네임을 입력하세요...">
  </div>
  <div class="col-auto">
    <label class="visually-hidden" for="autoSizingSelect">Preference</label>
    <select name="lifetier" class="form-select" id="autoSizingSelect">
      <option selected>인생 데이터</option>
      <option value="키">키(남자)</option>
      <option value="학벌">학벌</option>
      <option value="거주지">아파트/빌라</option>
    </select>
  </div>

  <div class="col-auto">
    <button type="submit" class="btn btn-primary">확인</button>

    <!-- Question Mark Button -->
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        ?
    </button>

    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <b style="font-size:20px;">어떻게 하나요?</b>
          1. 롤 닉네임을 입력합니다.<br>
          2. 변환하고자 하는 인생 데이터를 선택합니다.<br>
          3. 확인을 누릅니다.<br>

        <b style="font-size:20px;">원리</b>
          1. 입력한 롤 닉네임의 티어를 계산합니다.<br>
          2. 티어가 상위 몇 %인지 계산하고 그것을 바탕으로 인생 데이터를 계산합니다.<br>
          (예시)골드3 RP 20 -> 상위 19% -> 상위 19%의 키인 176을 보여줌.<br>

        <b style="font-size:20px;">자료 출처</b>
          키: 병무청_병역판정검사현황_신장분포(95년생)<br>
          아파트/빌라: 한국감정원_전국주택가격동향조사_매매가격(21년 4월, 5월, 6월, 7월)<br>
          학벌: 이투스_정시지원참고표(21년 6월 모의평가)<br>
        <br>
        <b style="font-size:20px;">롤 계정 db 업데이트 시점</b>
          매주 월요일에 롤 db가 업데이트됩니다. <br>
        <br>
        [Your product] isn't endorsed by Riot Games and doesn't reflect the views or opinions of Riot Games or anyone officially involved in producing or managing Riot Games properties. Riot Games, and all associated properties are trademarks or registered trademarks of Riot Games, Inc.
      </div>
    </div>
    <!-- Question Mark Button -->

  </div>

  
</form>
    <br>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_inline_share_toolbox"></div>
            
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
