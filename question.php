<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel='stylesheet' href='css/reset.css'>
    <link rel='stylesheet' href='css/format.css'>
</head>
<body>

    <h1>北京冬季オリンピックで開催される競技の中で好きなものを選んでください。</h1>

    <form action='second.php' method="post">
        <input type="radio" name="event" value="freestyle">
            <label for="freestyle">スキーフリースタイル</label>
        <input type="radio" name="event" value="alpen">
            <label for="alpen">スキーアルペン</label>
        <input type="radio" name="event" value="ccs">
            <label for="ccs">スキークロスカントリー</label>
        <input type="radio" name="event" value="jump">
            <label for="jump">スキージャンプ</label><br>
        
        <input type="radio" name="event" value="nordic">
            <label for="nordic">ノルディック複合</label>
        <input type="radio" name="event" value="figure">
            <label for="figure">フィギュアスケート</label>
        <input type="radio" name="event" value="st">
            <label for="st">ショートトラック</label>
        <input type="radio" name="event" value="sskate">
            <label for="sskate">スピードスケート</label><br>

        <input type="radio" name="event" value="sb">
            <label for="sb">スノーボード</label>
        <input type="radio" name="event" value="ih">
            <label for="ih">アイスホッケー</label>
        <input type="radio" name="event" value="curling">
            <label for="curling">カーリング</label>
        <input type="radio" name="event" value="biaslon">
            <label for="biaslon">バイアスロン</label><br>

        <input type="radio" name="event" value="skelton">
            <label for="skelton">スケルトン</label>
        <input type="radio" name="event" value="luge">
            <label for="luge">リュージュ</label>
        <input type="radio" name="event" value="bb">
            <label for="bb">ボブスレー</label>
        <input type="radio" name="event" value="none">
            <label for="none">特にない</label><br>

        
        
        <button type="submit">回答！</button>
    </form>

</body>
</html>