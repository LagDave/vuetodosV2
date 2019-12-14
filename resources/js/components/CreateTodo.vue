<template>
  <div>
    <div class="mt-5 row justify-content-center">
      <div class="col-lg-5 card card-body shadow">
        <small class="text-muted">Create a Todo Item</small>
        <br />
        <div class="row">
          <form class="w-100 form form-inline" v-on:submit.prevent="saveTodo">
            <div class="col-lg-8">
              <input v-model="todoContent" type="text" class="form-control w-100" />
            </div>
            <div class="col-lg-4">
              <button class="btn btn-primary w-100">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- MODAL -->
    <div
      class="modal fade"
      id="myModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bummer!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h2 class="text-center">Empty Todo Content</h2>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn w-100 btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->
  </div>
</template>

<script>
import EventBus from "../util/EventBus";

export default {
  data() {
    return {
      todoContent: ""
    };
  },
  methods: {
    saveTodo() {
      if (this.todoContent === "") {
        $("#myModal").modal("toggle");
      } else {
        EventBus.$emit("save-todo", this.todoContent);
        this.todoContent = "";
      }
    }
  }
};
</script>

<style scoped>
.card {
  border: none;
}
</style>