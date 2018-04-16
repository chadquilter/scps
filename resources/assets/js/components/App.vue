<template>
  <div id="app">
    <div class="heading">
      <h1>Academic Calendar Items</h1>
    </div>
    <ac-component
      v-for="schedule in schedules"
      v-bind="schedule"
      :key="schedule.id"
      @update="update"
      @delete="del"
    ></ac-component>
    <div>
      <button @click="create()">Add</button>
    </div>
  </div>
</template>

<script>
  function Schedule({ id, type, name}) {
    this.id = id;
    this.type = type;
    this.name = name;
  }

  import CrudComponent from './AcItemsComponent.vue';

  export default {
    data() {
      return {
        schedules: []
      }
    },
    methods: {
      create() {
        // To do
      },
      read() {
        // To do
      },
      update(id, type) {
        // To do
      },
      del(id) {
        // To do
      }
    },
    components: {
      AcItemsComponent
    }
  }

  methods() {
  read() {
    window.axios.get('/api/cruds').then(({ data }) => {
      data.forEach(crud => {
        this.cruds.push(new Crud(crud));
      });
    });
  },
},

created() {
  this.read();
}
</script>
