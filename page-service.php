<?php get_header(); ?>

	<main class="site-main">
		<div class="p-service__wrapper">
      <h1><?php the_title(); ?></h1>
      <section class="p-service__sevice">
        <h2 class="subHeading">SERVICE.</h2>
        <p class="">「クロマニヨン」はブランディングカンパニーです・・・と言われても</p>
        <div class="p-service__concept">
          <h3 class="p-service__subHeading">企業理念の構築</h3>
          <p class="p-service__conceptParagraph">会社が大切にする価値観、方向性</p>
        </div>
        <div class="p-service__concept">
          <h3 class="p-service__subHeading">事業継承を契機にしたリブランディング</h3>
          <p class="p-service__conceptParagraph">次世代への経営・事業継承を契機に、</p>
        </div>
      </section>
      <section class="p-service__solution">
        <h2 class="subHeading">SOLUTION.</h2>
        <p class="p-service__solutionParagraph">説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
        <ul class="p-service__solutionList">
          <li class="p-service__solitionItem">
            <h3 class="p-service__solutionHeading">Brand insight</h3>
            <div class="p-service__solutionDesc">
              <p class="p-service__solutionParagraph">説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
              <div class="p-service__solutionKeywords">
                <span class="p-service__solutionTag">#分 析</span>
                <ul class="p-service__solutionKeywordsList">
                  <li class="p-service__solutionKeywordsItem">既存資料分析</li>
                  <li class="p-service__solutionKeywordsItem">キーパーソンインタビュー</li>
                  <li class="p-service__solutionKeywordsItem">社員意識調査</li>
                </ul>
                <a href="<?php echo home_url('/works/'); ?>" class="p-service__solutionSeeWorksLink">SEE WORKS</a>
              </div>
            </div>
          </li>
          <li class="p-service__solitionItem">
            <h3 class="p-service__solutionHeading">Brand Personality</h3>
            <div class="p-service__solutionDesc">
              <p class="p-service__solutionParagraph">説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
              <div class="p-service__solutionKeywords">
                <span class="p-service__solutionTag">#verval開発</span>
                <ul class="p-service__solutionKeywordsList">
                  <li class="p-service__solutionKeywordsItem">社名・商品のネーミング</li>
                  <li class="p-service__solutionKeywordsItem">企業理念の体型管理・構築</li>
                  <li class="p-service__solutionKeywordsItem">企業理念の再構築</li>
                </ul>
                <a href="<?php echo home_url('/works/'); ?>" class="p-service__solutionSeeWorksLink">SEE WORKS</a>
              </div>
              <div class="p-service__solutionKeywords">
                <span class="p-service__solutionTag">#core visual開発</span>
                <ul class="p-service__solutionKeywordsList">
                  <li class="p-service__solutionKeywordsItem">ブランドロゴ開発</li>
                  <li class="p-service__solutionKeywordsItem">プロダクトロゴ開発</li>
                  <li class="p-service__solutionKeywordsItem">キービジュアル開発</li>
                </ul>
                <a href="<?php echo home_url('/works/'); ?>" class="p-service__solutionSeeWorksLink">SEE WORKS</a>
              </div>
            </div>
          </li>
        </ul>
      </section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
