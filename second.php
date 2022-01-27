<?php
    $event = $_POST['event'];
    if ($event == "freestyle")  {$event_name = "スキーフリースタイル"; $event_no=1;}
    elseif($event == "alpen")   {$event_name = "スキーアルペン"; $event_no=2;}
    elseif($event == "ccs" )    {$event_name = "スキークロスカントリー"; $event_no=3;}
    elseif($event == "jump")    {$event_name = "スキージャンプ"; $event_no=4;}
    elseif($event == "nordic")  {$event_name = "ノルディック複合"; $event_no=5;}
    elseif($event == "figure")  {$event_name = "フィギュアスケート"; $event_no=6;}
    elseif($event == "st")      {$event_name = "ショートトラック"; $event_no=7;}
    elseif($event == "sskate")  {$event_name = "スピードスケート"; $event_no=8;}
    elseif($event == "sb")      {$event_name = "スノーボード"; $event_no=9;}
    elseif($event == "ih")      {$event_name = "アイスホッケー"; $event_no=10;}
    elseif($event == "curling") {$event_name = "カーリング"; $event_no=11;}
    elseif($event == "biaslon") {$event_name = "バイアスロン"; $event_no=12;}
    elseif($event == "skelton") {$event_name = "スケルトン"; $event_no=13;}
    elseif($event == "luge")    {$event_name = "リュージュ"; $event_no=14;}
    elseif($event == "bb")      {$event_name = "ボブスレー"; $event_no=15;}
    else                        {$event_name = "特にない"; $event_no=16;}

    //echo $event_no.'<br />';
    //集計用CSVファイル御読み込み
    //$row = 1;
    // ファイルが存在しているかチェックする
    if (($handle = fopen("sum.csv", "r")) !== FALSE) {
        // 1行ずつfgetcsv()関数を使って読み込む
        while (($data = fgetcsv($handle))) {
            $mydb[] = $data;
            //echo $row.'行目<br />';
            //if($row == $event_no){
                //echo '条件一致<br />';
                //$data[3] += 1;
                //$data[3] = 10000;
            //}
            //$row += 1;
            //fputcsv($handle,$data);
        }
        fclose($handle);
    }

    //おためし
    // echo 'mydb <br />';
    // var_dump( $mydb );
    // echo '<br />';
    // $shumoku = $mydb[$event_no-1][0];
    $num = 0;
    while($num < 16){
        if($num == $event_no-1){
            $count = intval($mydb[$num][3])+1;
            // echo $shumoku.'  '.$count.'<br />';
        }
        else{
            $count = intval($mydb[$num][3]);
        }
        $mydb[$num][3] = $count;
        $num += 1;
    }

    //書き込み
    $whandle = fopen("sum.csv", "w");
    $num = 0;
    while($num < 16){
        fputcsv($whandle, $mydb[$num]);
        $num += 1;
    }
    fclose($whandle);


    //多い順でソート
    foreach($mydb as $key => $value)
    {
        $sort_keys[$key] = $value[3];
    }
    array_multisort($sort_keys, SORT_DESC, $mydb);
    //echo 'Last <br />';
    //var_dump($mydb);
    //echo '<br />';

    //選んだものの順番を探す
    $num = 0;
    while($num < 16){
        //echo $mydb[$num][2].'<br />';
        if($mydb[$num][2] == intval($event_no)){
            //echo '条件一致<br />';
            $class = $num + 1;
            break;
        }
        $num += 1;
    }
    //echo '選んだ '.$event_name.' は '.$class.' 位です。 <br />';

    //JSON形式に作成
    $json = array(
        "id" => 0,
        "event" => $event,
        "event_name" => $event_name,
        "event_no" => $event_no
    );
    $json = json_encode($json);
    file_put_contents("test.json" , $json);
    //ar_dump( $json );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second</title>
</head>
<body>
    <form action='result.php' method="post">
        <h1>アンケート回答ありがとうございます！</h1>
        <h2>あなたが選んだ競技種目は<?= $event_name; ?>です。<br>
            人気順位は<?= $class; ?>位です。</h2>

        <h3>冬のオリンピックで印象に残っているものがあれば記入してください。</h3>
        <textarea name='omoide' id=''></textarea>

        <h3>あなたのニックネームを記入してください。</h3>
        <textarea name='nickname' id=''></textarea>

        <h3>あなたのメールアドレスを記入してください。</h3>
        <textarea name='mailaddress' id=''></textarea>
        <br>

        <button type="submit">送信！</button>
    </form>
</body>
</html>