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
  <body>

  <h1>내세울 게 롤티어밖에 없는 롤창인생인 내가 이세계에선 강남 아파트 거주 부르주아?</h1>
  <h2 style="font-size:15px;">이게 뭔가요? <br>
    1. 롤 티어의 백분위를 그대로 인생 데이터에 적용하여 보여줍니다.<br>
    (예시)Gold3 20p -> 상위 19% -> 남자의 상위 17% 키인 178<br>
  </h2>
  <h3 style="font-size:15px;">어떻게 하나요? <br>
    1. 롤 닉네임을 입력하세요!(자동완성 기능을 이용하여 입력해주세요.)<br>
    2. 확인하고 싶은 인생 데이터를 선택해주세요.<br>
    3. 확인을 누르세요. <br>
    4. 궁금한 게 있다면 ?버튼을 눌러서 확인해보세요. <br>
  </h3>
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
        <b style="font-size:20px;">롤 db 기준</b>
          1. 5vs5 솔로랭크<br>
          2. 롤 db 업데이트 날짜: 2021/07/20<br>
      
        <b style="font-size:20px;">자료 출처</b>
          키: 병무청_병역판정검사현황_신장분포(95년생)<br>
          아파트/빌라: 한국감정원_전국주택가격동향조사_매매가격(21년 4월, 5월, 6월, 7월)<br>
          학벌: 이투스_정시지원참고표(21년 6월 모의평가)<br>
        <b style="font-size:20px;">광고/기타 문의</b>
          kimm240240@gmail.com<br>
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

    <div>
      <p>&copy; 김현규 2021. All Rights Reserved. </p>
    </div>
    
    <!-- Kakao Adfit -->
    <ins class="kakao_ad_area" style="display:none;" 
      data-ad-unit    = "DAN-Ly56dFkRY5wqgQU3" 
      data-ad-width   = "320" 
      data-ad-height  = "100"></ins> 
    <script type="text/javascript" src="//t1.daumcdn.net/kas/static/ba.min.js" async></script>

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
