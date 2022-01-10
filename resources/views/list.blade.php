<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ToDoList</title>
</head>
<body>
<h1>ToDo List</h1>
    <div>
        <h2>タスクの一覧</h2>
        <a href="/create-page">タスクを追加</a>
        <table border=1>
            <tr>
                <th>タスク名</th>
                <th>説明</th>
                <th>担当者</th>
                <th>見積時間(h)</th>
                <th colspan="2">操作</th>
            </tr>
            <tr>
                <td>洗濯</td>
                <td>衣類の洗濯</td>
                <td>けい</td>
                <td>40分</td>
                <td><a href="/edit-page/#">編集</a></td>
                <td><a href="/delete-page/#">削除</a></td>
            </tr>
        </table>
    </div>

</body>
</html>
