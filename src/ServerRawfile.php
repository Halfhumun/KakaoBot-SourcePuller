<?php
	$token = $_GET["token"];
	if($token == "토큰 입력") {
		$result = "";
		$lines = @file("source.txt") or $result = "파일을 읽을 수 없습니다.";
		if ($lines != null){
			for($i = 0;$i < count($lines);$i++){
				$lines[$i] = str_replace("<","&lt;",$lines[$i]);
				$lines[$i] = str_replace("<","&gt;",$lines[$i]);
				$result .= $lines[$i] . "<br>";
            }
        }
    } else {
        $result = "Failed: Incorrect token";
    }
?>

<!DOCTYPE html>
<html lang="ko">
<meta charset="UTF-8" />
</head>
<body>
<p><?php echo $result; ?></p>
</body>
</html>