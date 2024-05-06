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
            const item = { ...this.newitem };
      this.newMember = {
        id: "",
        text: "",
        done: false
      };
      this.lastId += 1;
      item.id = this.lastId;
      this.team.push(item);
      
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