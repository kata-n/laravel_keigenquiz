<template>
  <div class="quiz">
    <section class="quiz__area">
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
            v-on:click="showModal=!showModal"
            class="btn btn-primary btn-lg btn-block text-left"
          >1. {{ circle }}</button>
          <button
            @click="goAnswer(2)"
            :disabled="isAlreadyAnswered"
            type="button"
            v-on:click="showModal=!showModal"
            class="btn btn-primary btn-lg btn-block text-left"
          >2. {{ uncircle }}</button>
          <button
            @click="goAnswer(3)"
            :disabled="isAlreadyAnswered"
            type="button"
            v-on:click="showModal=!showModal"
            class="btn btn-primary btn-lg btn-block text-left"
          >3. {{ uncircle2 }}</button>
        </div>
      </div>
    </section>
    <section>
      <button
        @click="goAnswer(0)"
        v-show="!isAlreadyAnswered"
        class="answer_btn"
        v-on:click="showModal=!showModal"
      >正解を表示する</button>

      <adsense
        ad-client="ca-pub-1723163929361068"
        ad-slot="8131538943"
        ad-style="display:block"
        ad-format="auto">
      </adsense>

      <transition name="modal">
        <div class="modal" v-if="showModal">
          <div class="modeal_inner">
            <div class="alert alert-info" v-show="isCorrect">
              <strong>正解!</strong>
            </div>
            <div class="alert alert-danger" v-show="isMistake">
              <strong>不正解!</strong>
            </div>
            <div
              v-show="isAlreadyAnswered"
              disabled
              class="quiz-correct-answer"
            >正解は{{ correctNo }}番です!</div>
            <div class="quiz-answer-area">
              <h2 class="quiz-commentary-h2" v-show="isAlreadyAnswered">
                <img class="quiz-commentary__logo" src />解説
              </h2>
              <div class="quiz-commentary__text" v-show="isAlreadyAnswered">{{ commentary }}</div>
            </div>
            <button
              @click="goNextQuiz"
              v-if="!isQuizFinish"
              v-show="isAlreadyAnswered"
              type="button"
              class="center-block next_btn"
            >次の問題へ</button>
            <button
              @click="showResult"
              v-if="isQuizFinish"
              v-on:click="showfade = !showfade"
              type="button"
              class="center-block result_btn"
            >結果をみる！</button>
            <result-truefalse ref="result" v-bind:score="score"></result-truefalse>
          </div>
        </div>
      </transition>
    </section>
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
      categoryName: "",
      showModal: false,
      showfade: false
    };
  },
  mounted() {
    this.$http.get(`/api/mainpage`).then(response => {
      this.quizData = response.data;
      this.findNextQuiz(0);
    });
  },
  methods: {
    goAnswer(selectAnswerNum) {
      if (selectAnswerNum === 0) {
        this.isCorrect = false;
        this.isMistake = false;
      } else if (selectAnswerNum === Number(this.correctNo)) {
        this.isCorrect = true;
        this.isMistake = false;
        this.score += 1;
      } else {
        this.isMistake = true;
        this.isCorrect = false;
      }
      this.isAlreadyAnswered = true;
      if (this.quizNumber >= 5) {
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
      if (this.quizNumber >= 5) {
        this.endQuiz();
      } else {
        this.findNextQuiz(this.quizNumber);
        this.quizNumber += 1;
        this.isCorrect = false;
        this.isMistake = false;
        this.isAlreadyAnswered = false;
        this.showModal = false;
      }
    },
    endQuiz() {
      this.isQuizFinish = true;
      this.answerNo = "-";
      this.isAlreadyAnswered = true;
    },
    showResult() {
      this.$refs.result.showResult();
    }
  }
};
</script>
<style scoped>
.name {
  font-weight: bold;
}
.modal {
  display: inline;
}
.modal-enter-active {
  transition: opacity 0.5s;
}
.modal-enter {
  opacity: 0;
}
</style>
