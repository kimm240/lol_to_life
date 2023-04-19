# lol_to_life
롤 닉네임을 입력하면, 해당 닉네임을 가진 계정이 롤에서 상위 몇 %인지 계산 후, 계산한 백분위를 기준으로 키가, 또는 아파트/빌라가, 또는 학벌이 무엇인지 알려줍니다. </br></br>
예를 들어, 상위 19%인 롤 닉네임 입력 -> 키로 변환 시, 상위 19%인 174 출력. Or 아파트/빌라로 변환 시, 상위 19%인 XX 아파트 출력. Or 학벌로 변환 시, 상위 19%인 XX 대학교 출력. </br><br>
http://loltolife.azurewebsites.net/ <비용 문제상 현재 운영 종료>    
      
bootstrap(version: 5.0), php(version: 8.0.2), mySQL(version: 8.0.25)로 구현했습니다.      

# 구조</br>
![image](https://user-images.githubusercontent.com/67453494/143828063-f595b85a-4ea6-49a5-813b-5b51354564f6.png)

# DB</br>
키: 병무청_병역판정검사현황_신장분포(95년생)</br>
아파트/빌라: 한국감정원_전국주택가격동향조사_매매가격(21년 4월, 5월, 6월, 7월)<br>
학벌: 이투스_정시지원참고표(21년 6월 모의평가)<br>

# 성능 개선</br>
index.php에서 특정 닉네임을 검색할 때 시간이 5~6초가 발생함으로써 <br>
사용자 입장에서 불편할 수 있는 상황이 발생했습니다. <br>
그래서 해당 DB에서 검색할 때 쓰이는 ‘닉네임’의 속성에 <br>
Index를 달았습니다. 그 결과 검색할 때 걸리는 시간이 크게 감소하여 문제를 해결할 수 있었습니다.

닉네임을 입력할 때, 입력된 내용을 바탕으로 예상되는 닉네임들의 리스트를 <br>
search.php에서 %like%를 활용하여 찾아주었습니다. <br>
이 때, %like%로 할 시 인덱스가 작동하지 않아 전체 테이블을 스캔해서 시간이 많이 발생하였습니다. <br>
따라서 이 부분을 %like%에서 like%로 수정해주었습니다.

