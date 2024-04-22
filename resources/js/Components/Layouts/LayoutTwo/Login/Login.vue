<template>
  <form @submit.prevent="submit">
    <div class="bg-[#124A41] p-[20px] relative">
      <div class="flex items-center justify-between">
        <div class="bg-white rounded-xl my-4 h-[90vh] p-[120px] flex flex-col justify-center item-center w-[603px]">
          <div class="flex flex-col mb-[16px]">
            <h1 class="font-bold text-[48px] mb-[16px]">Log in</h1>
            <p class="mb-0 text-[#6F7187]">Amet minim mollit non deserunt ullamco est sit <br> <span
                class="font-bold text-[#00A88D]">aliqua dolor do amet</span> sint.</p>
          </div>
          <div class="flex mb-[32px] border-b-2 flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                clip-rule="evenodd" />
            </svg>
            <input type="text" placeholder="Digite seu e-mail" class="px-3 py-2 font-semibold text-[16px] text-[#998AA6] outline-none w-full border-0"
              v-model="form.email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" required />
          </div>
          <div class="flex mb-[32px] border-b-2 flex gap-2 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M15.75 1.5a6.75 6.75 0 0 0-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 0 0-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 0 0 .75-.75v-1.5h1.5A.75.75 0 0 0 9 19.5V18h1.5a.75.75 0 0 0 .53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1 0 15.75 1.5Zm0 3a.75.75 0 0 0 0 1.5A2.25 2.25 0 0 1 18 8.25a.75.75 0 0 0 1.5 0 3.75 3.75 0 0 0-3.75-3.75Z"
                clip-rule="evenodd" />
            </svg>
            <input type="password"
              placeholder="Digite sua senha"
              class="px-3 py-2 font-semibold text-[16px] text-[#998AA6] outline-none w-full border-0"
              v-model="form.password" :feedback="false" toggleMask autocomplete="off" readonly
              onfocus="this.removeAttribute('readonly');" required />
          </div>
          <div class="flex justify-between items-center">
            <p class="text-[#858585] text-[16px]">Esqueceu sua senha?</p>
            <button type="submit" class="flex items-center gap-3 bg-[#124A41] rounded-xl py-3 px-[61px] justify-center">
              <span class="font-bold text-[16px] text-white">Entrar</span>
            </button>
          </div>
          <div class="flex justify-between items-center gap-1 my-[16px]">
            <span class="border-b-2 border-[#EAEAEA] w-full" />
            <span class="font-semibold text-[12px] text-[#6F7187] w-full text-center">Ou entre com</span>
            <span class="border-b-2 border-[#EAEAEA] w-full" />
          </div>
          <div class="flex items-center justify-center gap-5">
            <a href="#" class="flex border-2 py-4 w-full border-[#EAEAEA] rounded-xl items-center gap-3 justify-center">
              <img src="images/LayoutOne/google.png" alt="Google">
              <span class="text-[16px] font-bold">Google</span>
            </a>
            <a href="#" class="flex border-2 py-4 w-full border-[#EAEAEA] rounded-xl items-center gap-3 justify-center">
              <img src="images/LayoutOne/Facebook.png" alt="Facebook">
              <span class="text-[16px] font-bold">Facebook</span>
            </a>
          </div>
        </div>
        <div class="2xl:px-[260px] px-[80px]">
          <img src="images/LayoutTwo/LogoLayoutTwo.png" />
          <h1 class="my-[26px] font-bold text-[48px] text-white">Entre em sua conta.</h1>
          <p class="mb-[26px] text-[24px] font-[400] text-white">Faça o login agora para desfrutar de uma <br> experiência completa e personalizada.</p>
          <span class="font-bold text-[16px] text-white">Entre para acessar suas informações pessoais</span>
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
.body-background {
  background-image: url("/images/background.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100% 100% 100%;
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  height: 163.5vh;
}

body {
  margin: 0;
  padding: 0;
}
</style>
