<template>
  <transition name="resultfade">
    <div class="modal" v-if="showfade">
      <article class="p-quiz__result" v-if="show">
        <section class="p-quiz__content">
          <h2 class="heading">クイズ結果</h2>
          <p v-if="score > 0">3問中{{score}}問正解しました！</p>
          <p v-else>全問不正解です。。もう１度挑戦してみましょう！</p>
          <div class="container">
            <div>
              <button @click="start" class="btn__retry">リトライ</button>
              <button @click="tweet" class="btn__twitter">
                <i class="fab fa-twitter fa-lg mr-3"></i>ツイート
              </button>
              <a href="/" class="quiz__topbtn">トップページへ</a>
            </div>
          </div>
        </section>
      </article>
    </div>
  </transition>
</template>

<script>
export default {
  name: "ResultTruefalse",
  props: ["score"],
  data: function() {
    return {
      show: false,
      showfade: false
    };
  },
  methods: {
    showResult: function() {
      this.show = !this.show;
      this.showfade = !this.showfade;
    },
    start: function() {
      window.location.href = "/mainpage";
    },
    tweet: function() {
      if ((this.score = 0)) {
        open(
          "https://twitter.com/intent/tweet?text=%E5%85%A8%E5%95%8F%E4%B8%8D%E6%AD%A3%E8%A7%A3%E3%83%BB%E3%83%BB%E3%82%82%E3%81%86%E4%B8%80%E5%BA%A6%E6%8C%91%E6%88%A6%E3%81%97%E3%81%A6%E3%81%BF%E3%82%88%E3%81%86%EF%BC%81%0a&url=https%3A%2F%2Fshikatana.com&hashtags=%E3%81%91%E3%81%84%E3%81%92%E3%82%93%E3%82%AF%E3%82%A4%E3%82%BA",
          "_blank"
        );
      } else {
        open(
          "https://twitter.com/intent/tweet?text=" +
            this.score +
            "%E5%95%8F%E6%AD%A3%E8%A7%A3%E3%81%97%E3%81%BE%E3%81%97%E3%81%9F%EF%BC%81%0a&url=https%3A%2F%2Fshikatana.com&hashtags=%E3%81%91%E3%81%84%E3%81%92%E3%82%93%E3%82%AF%E3%82%A4%E3%82%BA",
          "_blank"
        );
      }
    }
  }
};
</script>

<style scoped>
</style>
