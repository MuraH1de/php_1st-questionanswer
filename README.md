## ①課題内容（どんな作品か）

冬のオリンピックが近づいてきたので、冬のオリンピックの好きな競技を集計するアンケートを作りました。

【ファイル概要】
- ```question.php```  <br>
    ⇒好きな競技を選択するファイル
- ```second.php```  <br>
    ⇒選んだ競技の名称、人気順を表示するようにしました。
- ```result.php```p  <br>
    ⇒最終結果として、何人同じ競技が好きと選択したか表示する。  <br>
      （印象に残っている内容についても表示させる・・・後ほど搭載させます）


【動作】
1. ```question.php``` で好きな競技を選んで「回答！」ボタンを押す
2. ```second.php```　で必要事項を記入して「送信！」ボタンを押す
3. ```result.php```最終結果表示


## ②工夫した点・こだわった点

- ファイルの入出力を```json形式```、```csv形式```の両方に挑戦しました。
- 扱い方が異なる```jsonファイル```、```csvファイル```の両方の処理をしたため、配列や処理方法に苦戦した。

## ③質問・疑問（あれば）

- csvファイルで入出力するよりも、DBを扱ったほうが簡単でしょうか？？

## ④その他（感想、シェアしたいことなんでも）

見た目をもう少し工夫します！