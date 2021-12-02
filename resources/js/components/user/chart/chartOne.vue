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
          ['Month', 'Data'],
          ['Jan',     14],
          ['Feb',      1],
          ['Mar',      2],
          ['Apr',      2],
          ['May',      5],
          ['Jun',     10],
          ['Jul',     12],
          ['Aug',      8],
          ['Sep',     20],
          ['Oct',     18],
          ['Nov',      5],
          ['Dec',      8]
      ],
      options: {
        width: 500,
        height: 400
      }
   };
  },
}
</script>
