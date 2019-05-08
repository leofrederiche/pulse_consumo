new Vue({
    el: "#app",
    data: {
        termos : ""
    },
    
    methods:{
        ValidaTermos(termo){
            if (!termo){
                alert("Necessário aceitar a Política de Privacidade.");
            }
        },
    }
})