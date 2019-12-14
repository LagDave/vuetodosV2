<template>
  <div>
    <div class="row">
      <div class="content col-lg-9">{{todo.content}}</div>
      <div class="btn-group col-lg-3">
        <button v-on:click="deleteTodo(todo.id)" class="btn btn-sm btn-danger">
          <i class="fas fa-trash"></i>
        </button>
        <button type="submit" class="btn btn-sm btn-success">
          <i class="fas fa-pen"></i>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import EventBus from "../util/EventBus";

export default {
  props: ["todo"],
  methods: {
    deleteTodo(id) {
      EventBus.$emit("delete-todo", id);
    }
  }
};
</script>