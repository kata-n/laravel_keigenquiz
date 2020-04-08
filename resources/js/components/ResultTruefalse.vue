<template>
  <transition name="resultfade">
    <div class="modal" v-if="showfade">
      <article class="p-quiz__result">
        <section class="p-quiz__content">
          <h2 class="heading">クイズ結果</h2>
          <p v-if="score > 0 && score < 5">5問中{{score}}問正解しました！</p>
          <p v-else-if="score = 5">おめでとうございます！全問正解です！</p>
          <p v-else>全問不正解です・・もう１度挑戦してみよう！</p>
          <div class="container">
            <div>
              <button @click="start" class="btn__retry">リトライ</button>
              <button @click="tweet" class="btn__twitter">
                <i class="fab fa-twitter fa-lg mr-3"></i>ツイート
              </button>
              <a href="/" class="quiz__startbtn__retry">トップページへ</a>
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
      showfade: false
    };
  },
  methods: {
    showResult: function() {
      this.showfade = !this.showfade;
    },
    start: function() {
      window.location.href = "/mainpage";
    },
    tweet: function() {
      switch (this.score) {
    case 0: {
              open(
            "https://twitter.com/intent/tweet?text=%E5%85%A8%E5%95%8F%E4%B8%8D%E6%AD%A3%E8%A7%A3%E3%83%BB%E3%83%BB%E3%82%82%E3%81%86%E4%B8%80%E5%BA%A6%E6%8C%91%E6%88%A6%E3%81%97%E3%81%A6%E3%81%BF%E3%82%88%E3%81%86%EF%BC%81%0a&url=https%3A%2F%2Fapplication-keigen-quiz.shikatana.com&hashtags=%E3%81%91%E3%81%84%E3%81%92%E3%82%93%E3%82%AF%E3%82%A4%E3%82%BA",
            "_blank"
          );
      break
    }
      case 5: {
          open(
            "https://twitter.com/intent/tweet?text=%E5%85%A8%E5%95%8F%E6%AD%A3%E8%A7%A3%E3%81%A7%E3%81%99%EF%BC%81%E3%82%82%E3%81%97%E3%81%8B%E3%81%97%E3%81%A6%E7%B5%8C%E6%8B%85%E5%BD%93%E8%80%85%E3%83%BB%E3%83%BB%EF%BC%9F%EF%BC%9F%0a&url=https%3A%2F%2Fapplication-keigen-quiz.shikatana.com&hashtags=%E3%81%91%E3%81%84%E3%81%92%E3%82%93%E3%82%AF%E3%82%A4%E3%82%BA",
            "_blank"
          );
      break
    }
    default: {
          open(
            "https://twitter.com/intent/tweet?text=" +
              this.score +
              "%E5%95%8F%E6%AD%A3%E8%A7%A3%E3%81%97%E3%81%BE%E3%81%97%E3%81%9F%EF%BC%81%0a&url=https%3A%2F%2Fapplication-keigen-quiz.shikatana.com&hashtags=%E3%81%91%E3%81%84%E3%81%92%E3%82%93%E3%82%AF%E3%82%A4%E3%82%BA",
            "_blank"
          );
          }
        }
    }
  }
};
</script>

<style scoped>
</style>
