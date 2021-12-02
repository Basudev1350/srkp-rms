<template>
    <div>
     <GChart  type="PieChart"  :options="options"  :data="data"/> 
    </div>
</template>
<script>
import { GChart } from "vue-google-charts";

export default{
  components:{
    GChart
  },
  data(){
   return{
       data: [
          ['Day', 'Data'],
          ['Sunday',       14],
          ['Monday',       10],
          ['Tuesday',      12],
          ['Wednesday',     5],
          ['Thursday',      8],
          ['Friday',       11],
          ['Saturday',      9]
      ],
      options: {
        width: 500,
        height: 400
      }
   };
  },
}
</script>
