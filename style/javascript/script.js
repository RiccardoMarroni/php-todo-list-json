const { createApp } = Vue;

createApp({
    data() {
        return {
            newText: "",
            tasks: [],
            apiUrl: "server.php"
        };
    },
    methods : {
        removeItem(index) {
            this.tasks.splice(index,1);
        },
        addItem() {
            this.tasks.push({});
            this.tasks[this.tasks.length - 1].text = this.newText;
            this.tasks[this.tasks.length - 1].done = false;
        },
        getData() {
            axios
              .get(this.apiUrl)
              .then((res) => {
                console.log(res.data);
                this.team = res.data;
                // this.lastId = this.team.length - 1;
              })
              .catch((error) => {
                console.log(error);
              })
              .finally(() => {});
          },
        },
        created() {
            this.getData();
          },
    }
).mount('#app');