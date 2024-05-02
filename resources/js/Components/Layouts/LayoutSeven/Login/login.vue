<template>
  <form @submit.prevent="submit">
    <div class="h-screen flex items-center">

      <div class="w-[35%] h-full relative">
        <img class="w-full h-full img-pixel" src="images/LayoutSeven/Login.png" />
      </div>

      <div class="w-[65%] relative bg-white rounded-xl px-[230px] py-[76px] flex flex-col justify-center item-center h-full">

        <div class="my-[49px] flex-col flex ">
          <h1 class="font-semibold text-[48px] mb-[20px]">Log in</h1>
          <p class="text-[16px]">Amet minim mollit non deserunt ullamco est sit <br> aliqua dolor do amet sint. </p>
        </div>

        <button class="flex items-center gap-3 border justify-center rounded-3xl border-[#EAEAEA] py-[18px]">
          <img src="images/LayoutOne/google.png" />
          <span>Sign in with Goggle</span>
        </button>

        <div class="flex items-center gap-1 my-[32px]">
          <div class="border border-[#EAEAEA] flex-grow"></div>
          <span class="flex-grow justify-center items-center flex text-[12px]">Ou entre como</span>
          <div class="border border-[#EAEAEA] flex-grow"></div>
        </div>

        <input type="text" class="px-[24px] py-[16px] rounded-3xl border border-[#EAEAEA] mb-[32px]"
          placeholder="Digite seu e-mail" v-model="form.email" autocomplete="off" readonly
          onfocus="this.removeAttribute('readonly');" required />

        <input type="password" class="px-[24px] py-[16px] rounded-3xl border border-[#EAEAEA] mb-[32px]"
          placeholder="Digite sua senha" v-model="form.password" autocomplete="off" readonly
          onfocus="this.removeAttribute('readonly');" required />


        <button type="submit" class="flex items-center gap-3 bg-[#013C94] rounded-3xl px-[24px] py-[16px] justify-center">
          <span class="text-[16px] font-bold text-white">Entrar</span>
        </button>

        <div class="flex items-center justify-between my-[43px]">
          <div class="flex items-center gap-4">
            <input type="checkbox">
            <span>Manter-me Logado</span>
          </div>
          <a href="#" class="text-[#013C94] font-bold border-b-2 border-[#013C94]">Esqueci sua senha?</a>
        </div>

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
  background-image: url("/images/LayoutFive/photo.png");
  background-size: cover;
  background-attachment: fixed;
  background-size: 100% 100% 100% 100%;
  background-repeat: no-repeat;
}

.img-pixel {
  image-rendering: -moz-crisp-edges;
  /* Firefox */
  image-rendering: -webkit-optimize-contrast;
  /* Webkit (Chrome/Safari) */
  image-rendering: optimizeQuality;
  /* Internet Explorer */
  -ms-interpolation-mode: nearest-neighbor;
  /* Internet Explorer */
  image-rendering: pixelated;
  /* Padrão */
}

body {
  margin: 0;
  padding: 0;
}
</style>
