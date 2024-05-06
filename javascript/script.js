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
      addItem() {
       const item = { ...this.newitem };
      this.newTask = {
        id: "",
        text: "",
        done: false
      };
      this.lastId += 1;
      item.id = this.lastId;
      // this.tasks.push(item);
      
      const data = new FormData();
   
      for(let key in item){
        data.append(key, item[key])
      }
      
      axios
      .post(this.apiUrl, data)
      .then((res) => {
        this.lastId = this.tasks.lenght -1;
        console.log(res.data);
      });

        },  removeItem(index) {
          this.tasks.splice(index,1);
      },
        getData() {
            axios
              .get(this.apiUrl)
              .then((res) => {
                console.log(res.data);
                this.tasks = res.data;
                 this.lastId = this.team.length - 1;
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
).mount('#app')