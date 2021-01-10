<template>
 <v-navigation-drawer
      absolute
      permanent
      right
    >
      <v-list dense >
        <v-list-item
          v-for="item in items"
          :key="item.title"
        >
          <v-list-item-content>
            <v-list-item-title>
              <v-btn @click="$router.push({name: item.route})"
                elevation="2"
                outlined
                raised
              >{{item.title}}</v-btn>
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
</template>

<script>
    export default {
        name: 'HeaderMenu',
        data () {
        return {
          items: [
            { title: 'Home', route: 'Home'},
            { title: 'Projetos', route: 'Projects'},
            { title: 'Contato'}
          ],
        }
      },
    }
</script>

<style>
.v-navigation-drawer__content {
      display: flex!important;
      align-items: center!important;
}
</style>
       