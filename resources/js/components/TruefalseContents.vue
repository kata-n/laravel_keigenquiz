<template>
  <div class="offset-3 col-6">
    <section>
      <div class="card">
        <div class="card-body">
          <p class="badge badge-dark">第 1 問</p>
          <br />
          <h4 class="card-title">食料品を持ち帰ったときの税率はいくつでしょう？</h4>
          <hr />
          <button type="button" class="btn btn-primary btn-lg btn-block text-left">1. 8％</button>
          <button type="button" class="btn btn-primary btn-lg btn-block text-left">2. 10％</button>
          <button type="button" class="btn btn-primary btn-lg btn-block text-left">3. どちらも同じ</button>
        </div>
      </div>
    </section>
    <section>
      <h2 class="quiz-correct-h2">
        <img class="quiz-correct__logo" />正解
      </h2>
      <p>
        <button class="quiz-correct-answer">1</button>
      </p>
      <button>正解を表示する</button>
      <div class="alert alert-info">
        <strong>正解!</strong>
      </div>
      <div class="alert alert-danger">
        <strong>不正解!</strong>
      </div>
    </section>
    <section>
      <h2 class="quiz-commentary-h2">
        <img class="quiz-commentary__logo" src />解説
      </h2>
      <div class="quiz-commentary__text">
        2）3）どこが間違っていたの？
        <br />軽減税率は次のものに当てはまります
        <br />何えもありなんだ
        <br />スーパーで購入するものが正解です。
      </div>
      <button type="button" class="btn btn-primary center-block">次の問題へ</button>
      <button type="button" class="center-block">結果を見る</button>
    </section>
  </div>
</template>
<script>
export default {
  name: "TruefalseContents"
};
</script>
<style scoped>
.name {
  font-weight: bold;
}
</style>
