<?php
/**
 * Front page template
 */

get_header();
?>

<main>
  <!-- ヒーローセクション -->
  <section class="l-hero">
    <div class="l-hero__inner">
      <h1 class="l-hero__title">WordPress Theme with Vite</h1>
      <p class="l-hero__text">FLOCSS構成でスタイリングされたテーマです</p>
      <button class="c-button c-button--primary">ボタンサンプル</button>
    </div>
  </section>

  <!-- カードセクション -->
  <section class="l-section">
    <div class="l-section__inner">
      <h2 class="l-section__title">サンプルコンテンツ</h2>
      <div class="l-section__grid">
        <div class="c-card">
          <div class="c-card__image">
            <img src="https://via.placeholder.com/400x300" alt="サンプル画像1">
          </div>
          <div class="c-card__body">
            <h3 class="c-card__title">カードタイトル1</h3>
            <p class="c-card__text">これはサンプルのカードコンテンツです。FLOCSSのObjectレイヤーのコンポーネントとして定義できます。</p>
            <a href="#" class="c-button c-button--secondary">詳細を見る</a>
          </div>
        </div>

        <div class="c-card">
          <div class="c-card__image">
            <img src="https://via.placeholder.com/400x300" alt="サンプル画像2">
          </div>
          <div class="c-card__body">
            <h3 class="c-card__title">カードタイトル2</h3>
            <p class="c-card__text">これはサンプルのカードコンテンツです。FLOCSSのObjectレイヤーのコンポーネントとして定義できます。</p>
            <a href="#" class="c-button c-button--secondary">詳細を見る</a>
          </div>
        </div>

        <div class="c-card">
          <div class="c-card__image">
            <img src="https://via.placeholder.com/400x300" alt="サンプル画像3">
          </div>
          <div class="c-card__body">
            <h3 class="c-card__title">カードタイトル3</h3>
            <p class="c-card__text">これはサンプルのカードコンテンツです。FLOCSSのObjectレイヤーのコンポーネントとして定義できます。</p>
            <a href="#" class="c-button c-button--secondary">詳細を見る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- テキストセクション -->
  <section class="l-section">
    <div class="l-section__inner">
      <h2 class="l-section__title">ブレイクポイントのテスト</h2>
      <p class="l-section__text">
        このテーマでは以下のブレイクポイントが設定されています：
      </p>
      <ul class="c-list">
        <li class="c-list__item">スマートフォン: 768px未満</li>
        <li class="c-list__item">タブレット: 768px以上</li>
        <li class="c-list__item">デスクトップ: 1024px以上</li>
        <li class="c-list__item">大型デスクトップ: 1980px以上</li>
      </ul>
    </div>
  </section>
</main>

<?php
get_footer();
?>

