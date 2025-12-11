// Viteエントリポイント：SCSSを取り込む
import "../css/styles.scss";

// 開発時のHMR確認ログ
if (import.meta.hot) {
  import.meta.hot.accept();
  console.log("🔥 Vite HMR is active");
}

