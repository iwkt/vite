# WordPress + Vite テーマテンプレート

このテーマは Vite を使って WordPress を開発するためのスターターです。カードコンポーネントなどのサンプルは削除し、空のテンプレートとして利用できます。

## 前提

- Node 18+
- npm
- WordPress (例: Local アプリで `http://localhost:10061/`)

## セットアップ

```bash
npm ci
```

## 開発

```bash
npm run dev
```

- WP: `http://localhost:10061/`
- Vite: `http://localhost:5173/wp-content/themes/vite/`
- 開発判定: `WP_DEBUG` が true または `WP_ENVIRONMENT_TYPE=local`

## ビルド（本番）

```bash
npm run build
```

- 出力先: `dist/`
- 本番では `dist/assets/css/style.css` と `dist/assets/js/main.js` を使用

## デプロイ（Xserver 等レンタルサーバー）

1. ローカルで `npm run build`
2. サーバーにアップするもの
   - `dist/` 以下の成果物
   - テーマの PHP ファイル（`functions.php`, `front-page.php`, `header.php`, `footer.php`, `style.css` など）
3. アップしないもの
   - `src/`, `node_modules/`, `package*.json`, `vite.config.js`

## レイアウトシステム

### グローバルコンテナ（Container Query 用）

このテーマでは、Container Query を使用して font-size などを定義するためのグローバルコンテナ `.l-container` を提供しています。

```html
<div class="l-container">
  <!-- コンテンツ -->
</div>
```

### `.inner` ユーティリティ（中央寄せラッパー）

はにわまんの記事（[レイアウトの基本である.inner の中央寄せを覚えよう！](https://haniwaman.com/inner/)）を参考にした、中央寄せ用のユーティリティクラスです。

```html
<section>
  <div class="inner">
    <h2>見出し</h2>
    <p>コンテンツ</p>
  </div>
</section>
```

**特徴：**

- 固定幅（980px）で中央寄せ
- `max-width: 100%` でレスポンシブ対応
- Container Query で font-size を自動調整
  - 768px 以上: 16px
  - 1024px 以上: 18px

**使い方：**
LP サイトなどで、セクションごとに `.inner` で囲むことで、保守性の高いレイアウトを実現できます。

```html
<section id="about">
  <div class="inner">
    <h2>ABOUT</h2>
    <p>コンテンツ</p>
  </div>
</section>

<section id="service">
  <div class="inner">
    <h2>SERVICE</h2>
    <p>コンテンツ</p>
  </div>
</section>
```

## 注意点

- ポート 5173 が埋まっている場合は既存の Node プロセスを停止してから `npm run dev`
- HTTPS で閲覧する場合、Vite も HTTPS にするか、WP を HTTP で確認
- 開発時のみ `@vite/client` と `main.js` を読み込み、本番は `dist` の成果物を参照
