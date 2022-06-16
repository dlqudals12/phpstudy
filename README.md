- php는 sever가 주도권을 가지고 있는 언어(js는 client가 주도권을 가지고 있음)
+ echo -> 출력
+ echo "1"."2"; -> 출력하면 12(12는 문자열String)
+ strlen("") -> ""안의 문자의 length를 알려줌
- 변수 앞에는 $를 붙임
+ url parmeter -> ~~?parameter=...
+ $_GET['name'] -> name이라는 parameter를 받는다.
- nl2br() -> 줄바꿈이 되어 있으면 자동으로 해줌
+ var_dump ->  데이터 타입과 길이
- isset -> 값이 있는지 없는지에 따라 Boolean으로 return
+ if(), while() -> ()안에 변수 $a 로 선언 
- forech() -> $a의 foreach문 foreach($a as $key)
- scanfir('dirname') -> 폴더 밑에 파일들을 가져올때 