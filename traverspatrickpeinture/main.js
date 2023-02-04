const { createApp } = Vue

createApp({
  data() {
    return {
      showModalCommande: false,
      showModalRemerciement: false,

      formEmail:
      {
        email: null,
        nom: null,
        prenom: null,
        tel: null,
        lieu: null,
        message: null,
      },
      chargement: false,
    }
  },
  
  computed:{
    
  },
  async created() {

  },
  methods: {
    envoieEmail()
    {
      // console.log(this.formEmail);
      // this.chargement=true;
      // let data=new FormData();
      // data.append('email',this.formEmail.email);
      // data.append('nom',this.formEmail.nom);
      // data.append('prenom',this.formEmail.prenom);
      // data.append('tel',this.formEmail.tel);
      // data.append('lieu',this.formEmail.lieu);
      // data.append('message',this.formEmail.message);
      // console.log(data);
      // fetch('/traverspatrickpeinture/index.php/sendEmail',{
      //   method:'post',
      //   body:data
      // })
      //   .then( (response) => {
      //     this.showModalCommande= false;
      //     this.chargement=false;
      //     this.formEmail.email=null;
      //     this.formEmail.nom=null;
      //     this.formEmail.prenom=null;
      //     this.formEmail.tel=null;
      //     this.formEmail.lieu=null;
      //     this.formEmail.message=null;
      //     console.log(this.formEmail);
      //     //window.location.href="./remerciement.html";
      // })

      this.chargement = true;
      this.showModalCommande= false;
      this.chargement = false;
      window.location.href="./remerciement.html";
    },
},
}).mount('#app')

