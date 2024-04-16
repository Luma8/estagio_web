<template>
  <div>
    <Bar v-if="type === 'bar' " :data="chartData" :options="chartOptions" :type="type"/>
    <Pie v-if="type === 'pie'" :data="chartData" :options="chartOptions" :type="type"/>
  </div>
</template>

<script setup>
import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
  ArcElement
} from 'chart.js'
import { Bar, Pie } from 'vue-chartjs'

ChartJS.register(CategoryScale, LinearScale, BarElement, ArcElement, Title, Tooltip, Legend)

const props = defineProps({
  chartData: {
    type: Array,
    required: true
  },
  chartOptions: Object,
  type: {
    type: String,
    required: true
  }
});
</script>
