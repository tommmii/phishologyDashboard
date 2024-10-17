<script>
import { Head, Link } from '@inertiajs/vue3';


import StatisticsCard from '@/Components/PhishologyStatisticsCard.vue';
import PerformanceChart from '@/Components/PhishologyPerformanceChart.vue';
import WatchlistChart from '@/Components/PhishologyWatchlistChart.vue';

import ContentAnalysisSummary from '@/Components/PhishologyContentAnalysisSummary.vue';
import ModelAnalysisSummary from '@/Components/PhishologyModelSummary.vue';

export default {
  components: {
    StatisticsCard,
    PerformanceChart,
    WatchlistChart,
  },
};
</script>

<template>
  <div class="flex h-screen bg-gray-900 text-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 flex flex-col">
      <div class="text-2xl font-bold p-6"><i>phishology</i></div>
      <ul class="flex-grow">
        <li class="p-4 bg-gray-700 hover:bg-gray-600">Dashboard</li>
        <li class="p-4 hover:bg-gray-700">Analytics</li>
        <li class="p-4 hover:bg-gray-700">Content Analysis</li>
        <li class="p-4 hover:bg-gray-700">Settings</li>
      </ul>
      <div class="p-4">
        <div>Tommi</div>
        <div>tommi@phishology.app</div>
      </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex-grow p-6">
      <!-- Header -->
      <!-- <div class="text-3xl font-semibold mb-6">Analytics Dashboard</div> -->

      <!-- statistics -->
      <div class="grid grid-cols-4 gap-4 mb-6">
        <StatisticsCard title=" Messages Scanned" value="2,765" valueChange="10" />
        <StatisticsCard title="Spam detected" value="253" valueChange="-10" />
        <StatisticsCard title="Messages Blocked" value="896" valueChange="10" />
        <StatisticsCard title="Accuracy" value="62%" valueChange="5" />
      </div>

      <!-- peformance / watchlist -->
      <div class="grid grid-cols-2 gap-4 mb-6">
        <PerformanceChart />
        <WatchlistChart />
      </div>

      <!-- content analysis, and the ability to view status of model (e.g. runtime)-->
      <!-- <div class="grid grid-cols-2 gap-4">
        <ContentAnalysisSummary />
        <ModelAnalysisSummary />
      </div> -->

      
    </div>
  </div>
</template>


<style scoped>
/* Additional styling if needed */
</style>
