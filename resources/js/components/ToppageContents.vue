<template>
  <div class="offset-3 col-6">
    <section>
      <div>けいげんクイズ</div>
      <div>あの出来事は8％・10%どっち?</div>
      <p>軽減税率に関するクイズに挑戦してみよう</p>
    </section>
  </div>
</template>
<script>
export default {
  name: "ToppageContents",
  data() {
    return {
      difficultes: [1],
      difficult: []
    };
  },
  mounted() {
    this.$http.get("/api/difficult").then(response => {
      this.difficult = response.data;
    });
  },
  methods: {
    goQuiz() {
      this.$router.push("/quiz?difficultes=" + this.difficultes);
    }
  }
};
</script>
<style scoped>
.name {
  font-weight: bold;
}
</style>
