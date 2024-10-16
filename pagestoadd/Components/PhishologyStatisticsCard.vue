<template>
    <div class="bg-gray-800 p-4 rounded-md text-center shadow-md">
      <h3 class="text-xl font-bold">{{ title }}</h3>
      <p class="text-3xl font-semibold">{{ value }}</p>
      <p :class="{'text-green-400': valueChange > 0, 'text-red-400': valueChange < 0}">
        {{ valueChange > 0 ? '▲' : '▼' }} {{ valueChange }}%
      </p>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      title: String,
      value: String,
      valueChange: Number,
    },
  };
  </script>
  
  <style scoped>
  
  </style>
  