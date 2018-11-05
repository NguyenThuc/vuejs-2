<script src="router/index.js"></script>
<template>
  <div id="app">

    <router-view></router-view>

  </div>
</template>
<script>
    import HelloWorld from './components/HelloWorld.vue' ;
    import TheHeader from './components/TheHeader.vue' ;
    import TheFooter from './components/TheFooter.vue' ;

    export default {
        name: "app",

    }

</script>

<style>
  @import './assets/css/site.css';
  @import './assets/css/bootstrap.css';
  @import './assets/css/bootstrap-extend.css';
  @import './assets/css/brand-icons/brand-icons.min.css';
  @import './assets/css/material-design/material-design.min.css';
  @import 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic';
  @import './assets/css/flag-icon-css/flag-icon.css';
  @import './assets/css/custom.css';

</style>
