<template>
  <app-layout :title="article.title">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ article.title }}
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-4">
            {{ article.body }}
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";

export default defineComponent({
  props: ["article"],
  components: {
    AppLayout,
    JetInput,
    JetButton,
  },
});
</script>
