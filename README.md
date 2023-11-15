手順
・githubから(https://github.com/shoki-st1/Teamcommunity.git)をクローン
PSはターミナル
・dockerでbuild
PS>docker compose build
・起動
PS>docker compose up -d

初期の場合はデータベースの設定が必要な場合があります
その場合は
PS>docker compose exec db bash
でsetdb.txtを参考に設定してください

・落とすとき
PS>docker compose down

使用
docker
html,css
php,javascript
ポートに関しては8080を使用している

概要
タスク管理のアプリ
ユーザーの登録やログインではIDとパスワードが必要
新規でユーザーが作れるので用途に応じてアカウントの切り替えが出来る
ログインしメイン画面では、タスク入力されていると予定のある日はカレンダーの色が変わっている
タスクの登録は内容と開始日、終了日を入力、選択する
タスクの一覧表示追加、削除などが可能