<template>
  <app-layout title="Create a new article">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create a new article
      </h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <jet-form-section @submitted="submitForm">
          <template #title>Creating a new article</template>
          <template #description>Details about creating an article</template>

          <template #form>
            <!-- Title -->
            <div class="col-span-6 sm:col-span-4">
              <jet-label>Title</jet-label>
              <jet-input
                type="text"
                name="title"
                placeholder="Title"
                v-model="form.title"
                class="mt-1 w-full"
              />
            </div>

            <br />
            <!-- Body -->
            <div class="col-span-6 sm:col-span-4">
              <jet-label>Body</jet-label>
              <textarea
                name="body"
                placeholder="body"
                v-model="form.body"
                class="
                  border-gray-300
                  focus:border-indigo-300
                  focus:ring
                  focus:ring-indigo-200
                  focus:ring-opacity-50
                  rounded-md
                  shadow-md
                  mt-1
                  block
                  w-full
                "
              ></textarea>
              <jet-input-error
                :message="form.errors.body"
                class="mt-2"
              ></jet-input-error>
            </div>

            <br />
          </template>
          <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
              Created.
            </jet-action-message>

            <jet-button
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Create
            </jet-button>
          </template>
        </jet-form-section>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetFormSection from "@/Jetstream/FormSection.vue";

export default defineComponent({
  props: ["articles"],
  components: {
    AppLayout,
    JetButton,
    JetInput,
    JetLabel,
    JetFormSection,
  },
  data() {
    return {
      form: this.$inertia.form({
        title: "",
        body: "",
      }),
    };
  },
  methods: {
    submitForm() {
      this.form.post(this.route("articles.store"));
    },
  },
});
</script>
