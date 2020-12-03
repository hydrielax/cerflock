const Home = {
  template: '<h1> Home </h1>',
  name: 'Home',

}


const Members = {
  template: '#members',
  name: 'Members',
  data() {
    return {
      members: [
        { name: "Adrien iuh", img: "data/profilepictures/adrienG.jpg", description: "blabla" },
        { name: "Alexis Delage", img: "data/profilepictures/alexisD.jpg", description: "blabla" },
        { name: "Alexis Fetet", img: "data/profilepictures/alexisF.jpg", description: "blabla" },
        { name: "Alice Petit", img: "data/profilepictures/aliceP.jpg", description: "blabla" },
        { name: "Gabrielle ", img: "data/profilepictures/gabrielle.jpg", description: "blabla" },
        { name: "Maël Grandin", img: "data/profilepictures/maelG.JPG", description: "blabla" },
        { name: "Sarah Gastineau", img: "data/profilepictures/sarahG.jpg", description: "blabla" },
        { name: "Vincent Houée", img: "data/profilepictures/vincentH.jpg", description: "blabla" },
      ]
    }
  }
}

const Events = {
  template: '<h1> Events </h1>',
  name: 'Events'
}

const Lol = {
  template: '<h1> Lol </h1>',
  name: 'lols'
}

// router 
const router = new VueRouter({
  routes: [
    { path: '/', component: Home, name: 'Home' },
    { path: '/members', component: Members, name: 'Members' },
    { path: '/events', component: Events, name: 'Events' },
    { path: '/lol', component: Lol, name: 'Lol' },

  ]
})

var app = new Vue({
  el: '#app', // element qu'on vise au sein de notre document
  vuetify: new Vuetify(),
  router,
  data: {
    user: ""

  } // etat 
}).$mount('#app'); // instance de vue