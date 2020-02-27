<template>

  <div class="offset-3 col-6">
      <div class="card">
          <div class="card-body">
              <p class="badge badge-dark">第 1 問</p>
              {{props.item.title}}
              <br>
              <h4 class="card-title">食料品を持ち帰ったときの税率はいくつ？</h4>
              <hr>
              <button type="button" class="btn btn-primary btn-lg btn-block text-left">1. 8％</button>
              <button type="button" class="btn btn-primary btn-lg btn-block text-left">2. 10％</button>
              <button type="button" class="btn btn-primary btn-lg btn-block text-left">3. どちらも同じ</button>
          </div>
      </div>
  </div>

          <div v-if="hidden">
          <h1 class="c-bar c-bar--large c-bar--pink">問題 {{quizNum}}.{{quizzes[quizNum - 1].title}}</h1>
          <div v-if="showQuiz">
            <div v-if="quizzes[quizNum - 1].image_name">
              <div class="p-quiz__img">
                <img :src="quizzes[quizNum - 1].image_name" alt="クイズ画像">
              </div>
            </div>

            <div class="p-quiz__choice">
              <ul v-for="choice in aChoice">
                <li class="c-bar c-bar--gray" @click="showAnswer(choice)">{{ choice }}</li>
              </ul>
            </div>
          </div>
        </div>

</template>
<script>
export default {
  name: "QuizContents",
  components: {
    QuizResult
  },
    data:function() {
        return{
            quizNum: 1,
            totalQuizNum: 0,
            totalCorrectNum: 0,
            truefalses: [
                {
                    title: "",
                    circle: "",
                    uncircle: "",
                    commentary: ""
                }
            ],
                aChoice: [],
                showQuiz: true,
                showExplain: false,
                existImage: false,
                hidden: false,
                alertMsg: false,
                judgment: "",
                axiosUrl: ""
        };
    },
    created() {
    //DOM構築前にクイズデータをaxiosで取得
    this.getTrufalses();
    },
    methods: {
    getTrufalses: function() {
      let quizUrl = location.pathname;
      let catId = quizUrl.match(/\d/g);
      let catNum;
      if (catId) {
        catNum = catId.join("");
      }
      if (quizUrl == "/mainpage/" + catNum) {
        this.axiosUrl = "ajax/menu" + catNum;
      }  else {
        this.axiosUrl = "ajax/menu";
      }
      axios
        .get(this.axiosUrl)
        .then(res => {
          this.quizzes = res.data;
          this.totalQuizNum = this.quizzes.length;
          //クイズがある時はDOMを表示しクイズがない場合は無いですメッセージを表示
          if (this.totalQuizNum) {
            this.hidden = true;
          } else {
            this.alertMsg = true;
          }
          this.getChoice(this.quizNum - 1);
        })
        .catch(error => {
          console.log(error);
        });
    },
    shuffleAry: function(array) {
      const ary = array.slice();
      for (let i = ary.length - 1; 0 < i; i--) {
        let r = Math.floor(Math.random() * (i + 1));
        [ary[i], ary[r]] = [ary[r], ary[i]];
      }
      return ary;
    },
    getChoice: function(index) {
      //前回の選択肢を削除してから新しく選択肢を追加する
      this.aChoice = [];
      this.aChoice.push(
        this.quizzes[index].circle,
        this.quizzes[index].uncircle,
      );
      this.aChoice = this.shuffleAry(this.aChoice);
    },
    showAnswer: function(choice) {
      this.showQuiz = !this.showQuiz; //false
      this.showExplain = !this.showExplain; //true
      let answer = this.quizzes[this.quizNum - 1].correct;
      if (choice === answer) {
        this.judgment = true;
        this.totalCorrectNum++;
        this.$refs.totalCorrectNum;
      } else {
        this.judgment = false;
      }
    },
    next: function() {
      if (this.quizNum < this.totalQuizNum) {
        this.showQuiz = true;
        this.showExplain = false;
        this.quizNum++;
        this.nextCounter++;
        this.getChoice(this.quizNum - 1);
      } else {
        this.$refs.result.showResult();
      }
    }
  }
};
</script>
<style scoped>
    .name {
        font-weight: bold;
    }
</style>
