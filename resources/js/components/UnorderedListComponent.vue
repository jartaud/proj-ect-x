<template>
  <div class="container">
      <ul>
          <template v-for="(d, index) in ulData">
              <li v-if="d % 3 === 0 && d % 5 !== 0" :class="{greenify: d % 3 === 0}">
                  {{d}} -> three
              </li>
              <li v-if="d % 5 === 0 && d % 3 !== 0" :class="{orangify: d % 5 === 0}">
                  {{d}} -> five
              </li>
              <li v-if="d % 3 === 0 && d % 5 === 0" :class="{redify: d % 3 === 0 && d % 5 === 0}">
                  {{d}} -> three and five
             </li>
          </template>
      </ul>
  </div>
</template>

<script>
import range from "lodash/range";
export default {
    computed: {
        ulData() {
            return range(3,104)
                .filter((v) => v%3 === 0 || v%5 === 0 )
                
        }
    }
}
</script>

<style>
    .container{
        padding-top: 300px;
    }

    .greenify{color: green}
    .orangify{color: orange}
    .redify{color: red}

    ul {list-style-type: square;}
    ul li {font-size: 20px;}
</style>