<template>
  <div>
    <div class="my-3 row justify-content-center">
      <div class="col-lg-5 card card-body shadow">
        <transition-group name="fade">
          <todo-item
            v-bind:content="todo.content"
            class="shadow-sm card card-body my-1"
            v-for="todo in todos"
            v-bind:key="todo.id"
          ></todo-item>
        </transition-group>
      </div>
    </div>
  </div>
</template>

<script>
import TodoItem from "./TodoItem";

export default {
  data() {
    return {};
  },
  props: ["todos"],
  components: {
    TodoItem
  }
};
</script>

<style scoped>
.card {
  border: none;
}
.fade-enter-active {
  transition: opacity 0.5s;
}
.fade-enter {
  opacity: 0;
}
.fade-enter-to {
  opacity: 1;
}
</style>