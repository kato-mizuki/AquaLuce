# AquaLuce

AquaLuceは、美しくシンプルなWebサイトのUI/UXを提供するプロジェクトです。  
水と光をテーマにしたデザインを基に、レスポンシブで直感的な操作性を実現しています。

---

## 🌟 特徴

- **モダンなデザイン**  
  水と光をイメージした柔らかい色使いとアニメーションで、ユーザーに心地よい体験を提供。

- **レスポンシブ対応**  
  PC・タブレット・スマホなど、どのデバイスでも美しく表示されます。

- **簡単カスタマイズ**  
  HTML/CSS/JavaScript構成なので、デザインや機能を簡単に変更可能。

---

## 🚀 使用技術

- HTML5
- CSS3
- JavaScript
- [Font Awesome](https://fontawesome.com/)（SNSアイコン等）
- [Laravel](https://laravel.com/)（バックエンド、オプション）

---

## 📂 ディレクトリ構成

AquaLuce/  
├─ public/  
│ ├─ css/  
│ ├─ js/  
│ └─ img/  
├─ resources/  
│ ├─ views/  
│ └─ ...  
├─ routes/  
├─ app/  
└─ README.md


- `public/`：CSS・JavaScript・画像などの公開用ファイル
- `resources/views/`：BladeテンプレートやHTMLファイル
- `routes/`：ルーティング設定
- `app/`：アプリケーション本体

---

## 💻 インストール方法

1. リポジトリをクローン
```bash
 git clone https://github.com/kato-mizuki/AquaLuce.git  
```
2. ディレクトリに移動  
```bash
 cd AquaLuce
 ```
3. Laravelプロジェクトの場合、依存関係をインストール  
```bash
 composer install
 ```
4. .env ファイルを作成して設定
```bash
cp .env.example .env  
php artisan key:generate
```
5. サーバー起動
```bash
php artisan serv
```

## 🎨 ロゴ

AquaLuceのロゴは、水面に反射する光をイメージしたデザインです。  
- カラー：青系（#00ADEF）、光のハイライト：白または淡い黄色
- シンプルでモダンな波紋をモチーフにしています。

---

## ✨ 今後の機能追加予定

- SNS連携機能
- アニメーション効果の追加
- モバイルファーストの改善
- ユーザー入力フォームの強化

---

## 📄 ライセンス

このプロジェクトは **MITライセンス** の下で公開されています。  
詳細は [LICENSE](LICENSE) をご覧ください。

---

## 📩 お問い合わせ

ご質問やフィードバックは [GitHub Issues](https://github.com/kato-mizuki/AquaLuce/issues) までお願いします。
