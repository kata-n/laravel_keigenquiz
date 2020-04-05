<template>
  <div>
    <div class="fst__view">
      <div class="fst__content">
        <p class="fst__sentence">あの出来事は</p>
        <p class="fst__sentence">8％・・？？それとも10%・・？？</p>
      </div>
      <div class="fst__view-img">
      </div>
    </div>
    <p class="fst__message center">軽減税率に関するクイズに挑戦してみよう</p>
    <a href="/mainpage" class="quiz__startbtn">クイズに挑戦する</a>
    <div class="about">
      <h2 class="heading" id="about-keigen">軽減税率のフシギ</h2>
    </div>
    <div class="about__view">
      <div class="about__img">
        <img src="/images/top_view2.png" alt />
      </div>
      <div class="about__content" v-observe-visibility="visibilityChanged01"
        v-bind:class='{active:isVisible01}'>
        <p class="about__sentence">2019年の10月1日から消費税が10％となった日本。</p>
        <p>しかし以前と変わらず、消費税が8％の商品やサービスも存在しています。</p>
        <p>この軽減税率制度の導入により、8％と10％の消費税率が混在するようになりました。</p>
        <p>取引の内容によって消費税率が変わる為、中には線引きが難しいものもあります。</p>
        <p>そんな内容にクイズ形式で答えて、軽減税率について学んでみてはいかがでしょうか。</p>
        <p>クイズはランダムで5問出題されます！気軽に挑戦してみてください！</p>
      </div>
    </div>
    <div class="howkeigen">
      <h2 class="heading center">ざっくり軽減税率</h2>
      <div class="howkeigen__content">
        <div class="howkeigen__column">
          <div class="howkeigen__title">
            <p>対象は食品及び定期購読</p>
          </div>
          <div class="howkeigen__img">
            <img src="/images/how1.png" alt />
          </div>
          <div class="howkeigen__comment">
            <p>
              軽減税率の対象となる品目は、
              <br />①酒類・外食を除く飲食料品
              <br />②週２回以上発行される新聞
              <br />とされています。一方、対象外(10%)のものは外食や酒類、ケータリング、定期購読契約でない新聞などが該当します。
            </p>
          </div>
        </div>
        <div class="howkeigen__column">
          <div class="howkeigen__title">
            <p>主な使い道は社会保障の充実</p>
          </div>
          <div class="howkeigen__img">
            <img src="/images/how2.png" alt />
          </div>
          <div class="howkeigen__comment">
            <p>
              消費税が10％に増税されることにより約5兆円の税収増が見込まれています。
              これらは、社会保障の充実・少子化対策、赤字国債発行の抑制に充てられるとされています。
              消費税の使い道は、分かりやすく紹介されたページが内閣府で用意されています！<br>
              <a href="https://www.gov-online.go.jp/cam/shouhizei/keigenzeiritsu/" target="blank">軽減税率制度のこと | 政府広報オンライン</a>
            </p>
          </div>
        </div>
        <div class="howkeigen__column">
          <div class="howkeigen__title">
            <p>はじまるインボイス制度</p>
          </div>
          <div class="howkeigen__img">
            <img src="/images/how3.png" alt />
          </div>
          <div class="howkeigen__comment">
            <p>
              令和5年10月1日から導入が予定されているインボイス制度。
              <br />この制度が注目されている点は、支払をする取引先によって消費税の額が変わってしまう所。
              取引先が消費税の登録をしていない場合、消費税の支払額が増えてしまいます。
              これによって、今まで消費税を納めなくて良かった事業者も消費税を支払わないといけなくなると指摘されています。
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="book">
      <h2 class="titleonly center" id="book">参考になる本</h2>
      <div class="book__container">
        <div class="book__column">
          <div class="book__img">
            <!-- <img src="/images/book1.jpg" alt /> -->
            <a
              target="_blank"
              href="https://www.amazon.co.jp/gp/product/4539727052/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4539727052&linkCode=as2&tag=mikaaaandayo-22&linkId=fea2bf1f13ba35af29367ad6e11e7e08"
            >
              <img
                border="0"
                src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=4539727052&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=mikaaaandayo-22"
              />
            </a>
            <img
              src="//ir-jp.amazon-adsystem.com/e/ir?t=mikaaaandayo-22&l=am2&o=9&a=4539727052"
              width="1"
              height="1"
              border="0"
              alt
              style="border:none !important; margin:0px !important; display:none;"
            />
          </div>
          <div class="book__title">
            <p>消費税軽減税率インボイス対応マニュアル</p>
          </div>
          <div class="book__comment">
            <p>
              インボイス対応マニュアルと書いてありますが、
              <br />軽減税率の内容も基礎から書いてあります。
              <br />具体的な事例が載っていてわかりやすいです。
            </p>
          </div>
        </div>
        <div class="book__column">
          <div class="book__img">
            <img src="/images/book2.jpg" alt />
          </div>
          <div class="book__title">
            <p>徹底解説！ 消費税軽減税率150問150答</p>
          </div>
          <div class="book__comment">
            <p>
              クイズ出題の参考にしました。
              <br />Q and A 形式なので、こんな事例もあるのかと
              <br />参考になる本です。
            </p>
          </div>
        </div>
        <div class="book__column">
          <div class="book__img">
            <img src="/images/book3.jpg" alt />
          </div>
          <div class="book__title">
            <p>軽減税率のしくみと実務がよくわかる本</p>
          </div>
          <div class="book__comment">
            <p>
              かなり細かい部分も網羅されていますが、
              <br />実務上ではどの様に処理すると
              <br />いいのか具体的に書かれて良かったです。
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="imformation">
      <h2 class="titleonly center" id="imformation">お知らせ</h2>
      <div class="imformation__container">
        <div class="imformation__list">
          <dl v-for="(info, index) in information" :key="index">
            <dt>{{info.created_at}}</dt>
            <dd>{{info.information}}</dd>
          </dl>
        </div>
      </div>
      <a href="#top" v-scroll-to="'#top'" class="totop">TOP</a>
    </div>
    <div class="sitepolicy">
      <a href="/mainpage" class="quiz__startbtn__bottom">クイズに挑戦する</a>
    </div>
  </div>
</template>
<script>
export default {
  name: "ToppageContents",
  data() {
    return {
      difficultes: [1],
      difficult: [],
      information: [],
      isVisible01: false,
    };
  },
  mounted() {
    this.$http.get("/api/difficult").then(response => {
      this.difficult = response.data;
    });
    this.$http.get("/api/information").then(response => {
      this.information = response.data;
    });
  },
  methods: {
    goQuiz() {
      this.$router.push("/quiz?difficultes=" + this.difficultes);
    },
    visibilityChanged01(isVisible01, entry) {
      this.isVisible01 = isVisible01
    },
  }
};
</script>
<style>
</style>
