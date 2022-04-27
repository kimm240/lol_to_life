# lol_to_life
롤 닉네임을 입력하면, 해당 닉네임을 가진 계정이 롤에서 상위 몇 %인지 계산 후, 계산한 백분위를 기준으로 키가, 또는 아파트/빌라가, 또는 학벌이 무엇인지 알려준다. </br></br>
예를 들어, 상위 19%인 롤 닉네임 입력 -> 키로 변환 시, 상위 19%인 174 출력. Or 아파트/빌라로 변환 시, 상위 19%인 XX 아파트 출력. Or 학벌로 변환 시, 상위 19%인 XX 대학교 출력. </br><br>
http://loltolife.azurewebsites.net/ <비용 문제상 현재 운영 종료>    
      
bootstrap(version: 5.0), php(version: 8.0.2), mySQL(version: 8.0.25)로 구현했습니다.      

# 구조</br>
![image](https://user-images.githubusercontent.com/67453494/143828063-f595b85a-4ea6-49a5-813b-5b51354564f6.png)

# DB</br>
키: 병무청_병역판정검사현황_신장분포(95년생)</br>
아파트/빌라: 한국감정원_전국주택가격동향조사_매매가격(21년 4월, 5월, 6월, 7월)<br>
학벌: 이투스_정시지원참고표(21년 6월 모의평가)<br>
