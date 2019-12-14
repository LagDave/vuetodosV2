<template>
  <div>
    <div class="row">
      <div class="content col-lg-9">{{content}}</div>
      <div class="btn-group col-lg-3">
        <button class="btn btn-sm btn-danger">
          <i class="fas fa-trash"></i>
        </button>
        <button class="btn btn-sm btn-success">
          <i class="fas fa-pen"></i>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["content"]
};
</script>