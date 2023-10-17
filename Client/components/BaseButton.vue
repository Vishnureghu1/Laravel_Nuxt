<template>
  <div>
    <button
      type="button"
      :class="buttonClass"
      @click="$emit('click')"
      :disabled="isDisabled"
    >
      <slot></slot>
    </button>
  </div>
</template>

<script>
export default {
  name: "BaseButton",
  props: {
    color: String,
    disabled: Boolean,
  },
  computed: {
    buttonClass() {
      return {
        "base-button": true,
        "primary-button": this.color === "primary",
      };
    },
    isDisabled() {
      return this.disabled;
    },
  },
};
</script>

<style scoped>
.base-button {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
    border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.primary-button {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}
</style>