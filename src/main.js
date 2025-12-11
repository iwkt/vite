// Vite entry: load SCSS (resides one level up under assets)
import "../assets/css/styles.scss";

if (import.meta.hot) {
  import.meta.hot.accept();
  console.log("🔥 Vite HMR is active");
}

