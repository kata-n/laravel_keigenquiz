<template>
  <div class="offset-3 col-6">
    <section>
      <div class="card">
        <div class="card-body">
          <p class="badge badge-dark">第 {{ quizNumber }} 問</p>
          <br />
          <h4 class="card-title">{{ title }}</h4>
          <hr />
          <button
            @click="goAnswer(1)"
            :disabled="isAlreadyAnswered"
            type="button"
            class="btn btn-primary btn-lg btn-block text-left"
          >1. {{ circle }}</button>
          <button
            @click="goAnswer(2)"
            :disabled="isAlreadyAnswered"
            type="button"
            class="btn btn-primary btn-lg btn-block text-left"
          >2. {{ uncircle }}</button>
          <button
            @click="goAnswer(3)"
            :disabled="isAlreadyAnswered"
            type="button"
            class="btn btn-primary btn-lg btn-block text-left"
          >3. {{ uncircle2 }}</button>
        </div>
      </div>
    </section>
    <section>
      <p>
        <button v-show="isAlreadyAnswered" disabled class="quiz-correct-answer">{{ correctNo }}</button>
      </p>
      <button @click="goAnswer(0)" v-show="!isAlreadyAnswered">正解を表示する</button>
      <div class="alert alert-info" v-show="isCorrect">
        <strong>正解!</strong>
      </div>
      <div class="alert alert-danger" v-show="isMistake">
        <strong>不正解!</strong>
      </div>
    </section>
    <section>
      <h2 class="quiz-commentary-h2" v-show="isAlreadyAnswered">
        <img class="quiz-commentary__logo" src />解説
      </h2>
      <div class="quiz-commentary__text" v-show="isAlreadyAnswered">{{ commentary }}</div>
      <button
        @click="goNextQuiz"
        v-if="!isQuizFinish"
        v-show="isAlreadyAnswered"
        type="button"
        class="btn btn-primary center-block"
      >次の問題へ</button>
      <button v-if="isQuizFinish" @click="showResult" type="button" class="center-block">結果を見る</button>
    </section>
    <result-truefalse ref="result" v-bind:score="score"></result-truefalse>
  </div>
</template>
<script>
import ResultTruefalse from "./ResultTruefalse";
export default {
  name: "TruefalseContents",
  components: {
    ResultTruefalse
  },
  data() {
    return {
      quizData: [],

      title: "",
      circle: "",
      uncircle: "",
      uncircle2: "",
      imageSrc: "",
      answers: [],
      commentary: "",
      correctNo: 0,
      isCorrect: false, //正解かどうか
      isMistake: false, //間違いかどうか
      isAlreadyAnswered: false, //回答済みかどうか
      isQuizFinish: false, //クイズが終了したかどうか
      score: 0,
      quizNumber: 1,
      categoryName: ""
    };
  },
  mounted() {
    this.$http.get(`/api/mainpage`).then(response => {
      this.quizData = response.data;
      this.findNextQuiz(0);
      console.log(this.quizData);
    });
  },
  methods: {
    goAnswer(selectAnswerNum) {
      if (selectAnswerNum === 0) {
        // selectAnswerNumが0の場合は、click 「正解を表示する」ボタンのクリック alert-info、alert-dangerを非表示
        this.isCorrect = false;
        this.isMistake = false;
      } else if (selectAnswerNum === Number(this.correctNo)) {
        // 正解を押した場合 alert-infoを表示し、alert-dangerを非表示にする そしてスコアを加算する
        this.isCorrect = true;
        this.isMistake = false;
        this.score += 1;
      } else {
        // 不正解の場合 alert-infoを非表示し、alert-dangerを表示にする
        this.isMistake = true;
        this.isCorrect = false;
      }
      this.isAlreadyAnswered = true;
      if (this.quizNumber >= 3) {
        this.endQuiz();
      }
    },
    findNextQuiz(quizNumber) {
      this.title = this.quizData[quizNumber].title;
      this.answers = [
        this.quizData[quizNumber].circle,
        this.quizData[quizNumber].uncircle,
        this.quizData[quizNumber].uncircle2
      ];
      this.commentary = this.quizData[quizNumber].commentary;
      this.circle = this.quizData[quizNumber].circle;
      this.uncircle = this.quizData[quizNumber].uncircle;
      this.uncircle2 = this.quizData[quizNumber].uncircle2;
      this.correctNo = this.quizData[quizNumber].correct_num;
    },
    goNextQuiz() {
      if (this.quizNumber >= 3) {
        this.endQuiz();
      } else {
        this.findNextQuiz(this.quizNumber);
        this.quizNumber += 1;
        this.isCorrect = false;
        this.isMistake = false;
        this.isAlreadyAnswered = false;
      }
    },
    endQuiz() {
      this.isQuizFinish = true;
      this.answerNo = "-";
      this.isAlreadyAnswered = true;
    },
    showResult() {
      // this.$refs.modal.render();
      this.$refs.result.showResult();
    }
  }
};
</script>
<style scoped>
.name {
  font-weight: bold;
}
</style>
