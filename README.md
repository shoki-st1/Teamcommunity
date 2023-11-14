手順
・githubから(https://github.com/shoki-st1/Teamcommunity.git)をクローン
PSはターミナル
・dockerでbuild
PS>docekr compose build
・dockerの機動
PS>docker comose up -d
・落とすとき
PS>docker compose down


使用
docker
html,css
php,javascript
ポートに関しては8080を使用している

概要
タスク管理のアプリ

新規でユーザーが作れるので複数のアカウントを持つことも可能
ログインし、タスク入力されていると予定のある日はカレンダーの色が変わっている
タスクの一覧表示追加、削除などが可能