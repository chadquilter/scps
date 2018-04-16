<template>
  <div class="crud">
    <div class="col-1">
      <img :src="image"/>
    </div>
    <div class="col-2">
      <h3>Name: {{ name | properCase }}</h3>
      <select @change="update">
        <option
          v-for="col in [ 'academics', 'sports' ]"
          :value="col"
          :key="col"
          :selected="col === type ? 'selected' : ''"
        >{{ col | properCase }}</option>
      </select>
      <button @click="del">Delete</button>
    </div>
  </div>
</template>
<script>
  export default {
    computed: {
      image() {
        return `/images/${this.type}.png`;
      }
    },
    methods: {
      update(val) {
        this.$emit('update', this.id, val.target.selectedOptions[0].value);
      },
      del() {
        this.$emit('delete', this.id);
      }
    },
    props: ['id', 'type', 'name'],
    filters: {
      properCase(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
      }
    }
  }
</script>
