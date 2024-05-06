<template>
  <form @submit.prevent="submit">
    <div class="bg-white py-[72px] h-screen div-background flex items-center justify-center">
      <div class="bg-white py-[27px] px-[70px] rounded-md shadow-md">
        <div class="my-[49px] flex items-center justify-center">
          <img src="images/LayoutOne/LogoLayout_one.png">
        </div>

        <div class="flex flex-col mb-[32px]">
          <label class="text-[#858585] text-[16px]">Digite seu e-mail</label>
          <input type="text"
            class="px-[20px] py-[12px] font-semibold text-[16px] outline-none w-full border border-gray-200/90 rounded-md mt-[6px] text-[#998AA6]"
            v-model="form.email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" required />
        </div>

        <div class="flex flex-col">
          <label class="text-[#858585] text-[16px]">Digite sua senha</label>
          <input type="password"
            class="px-[20px] py-[12px] font-semibold text-[16px] outline-none w-full border border-gray-200/90 rounded-md mt-[6px] text-[#998AA6]"
            v-model="form.password" :feedback="false" toggleMask autocomplete="off" readonly
            onfocus="this.removeAttribute('readonly');" required />
        </div>

        <div class="w-full flex">
          <a href="#" class="mb-[32px] text-[#26B893] font-bold text-[16px] w-full">
            Esqueceu sua senha? 
          </a>
        </div>

        <button type="submit"
          class="flex items-center gap-3 bg-[#26B893] w-full rounded-md py-3 px-[61px] justify-center">
          <span class="font-bold text-[16px] text-white">Entrar</span>
        </button>

        <p class="mb-0 text-center mt-[141px]">© 2024. Todos os direitos reservados, Políticas de <br> Privacidade © </p>

      </div>
    </div>
  </form>
</template>

<script>
import Layout from "../../Layouts/Auth.vue";
export default {
  layout: [Layout],
};
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import { useToast } from "vue-toastification";
import { ref, onUnmounted } from "vue";
import InputText from "primevue/inputtext";
import Password from "primevue/password";


const toast = useToast();
const sending = ref(false);
const error = ref(false);

const form = useForm({
  email: "",
  password: "",
});

function submit() {
  sending.value = true;
  if (form.email && form.password) {

    form.post(route("action.login"), {
      onSuccess: () => (window.location.href = "/index"),
      onFinish: () => (sending.value = false),
    });
  } else {
    sending.value = false
  }
}

onUnmounted(() => {
  let body = document.querySelector(".body-background");
  body.classList.remove(".body-background");
});
</script>

<style>
.div-background {
  background-image: url("/images/LayoutTen/Background.png");
  background-size: cover;
  background-attachment: fixed;
  background-size: 100% 100% 100% 100%;
  background-repeat: no-repeat;
}

body {
  margin: 0;
  padding: 0;
}
</style>
