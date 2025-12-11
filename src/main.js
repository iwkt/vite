// Vite entry: load SCSS (resides one level up under assets)
import "../assets/css/styles.scss";

// ハンバーガーメニューの開閉機能
const hamburger = document.getElementById("js-hamburger");
const nav = document.getElementById("js-nav");

if (hamburger && nav) {
  hamburger.addEventListener("click", () => {
    const isExpanded = hamburger.getAttribute("aria-expanded") === "true";
    
    hamburger.setAttribute("aria-expanded", !isExpanded);
    nav.classList.toggle("is-open");
  });
  
  // メニュー外をクリックしたら閉じる
  document.addEventListener("click", (e) => {
    if (!hamburger.contains(e.target) && !nav.contains(e.target)) {
      hamburger.setAttribute("aria-expanded", "false");
      nav.classList.remove("is-open");
    }
  });
}

if (import.meta.hot) {
  import.meta.hot.accept();
  console.log("🔥 Vite HMR is active");
}

