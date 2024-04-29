<template>
  <form @submit.prevent="submit">
    <div class="h-screen flex items-center">

      <div class="w-[50%] bg-[#F3F5F9] h-full relative">
        <div class="absolute inset-0 opacity-50 z-10 h-[50%] bg-white w-full blur border-b-2 border-white"></div>
        <img class="absolute inset-0 m-auto" src="images/LayoutSix/Ellipse.png" />
      </div>

      <div class="w-[50%] relative bg-white rounded-xl p-[182px] flex flex-col justify-center item-center h-full">

        <div class="my-[49px] flex-col flex ">
          <h1 class="font-semibold text-[48px] mb-[20px]">Bem-vindo!</h1>
          <p class="text-[16px]">Entre e acesse suas informações pessoais</p>
        </div>

        <div class="border-l-4 border-[#FF9141]">
          <div class="flex flex-col px-[12px] py-2 border border-gray-200/90">
            <label class="text-[#858585] text-[16px]">Email</label>
            <input type="text"
              class="font-semibold p-0 text-[16px] text-[#998AA6] outline-none w-full border-0 mt-[4px] w-full"
              placeholder="Digite seu E-mail" v-model="form.email" autocomplete="off" readonly
              onfocus="this.removeAttribute('readonly');" required />
          </div>
        </div>
        <div class="border-l-4 border-[#FF9141]">
          <div class="flex flex-col px-[12px] py-2 border border-gray-200/90">
            <label class="text-[#858585] text-[16px]">Senha</label>
            <input type="password"
              class="font-semibold p-0 text-[16px] text-[#998AA6] outline-none w-full border-0 mt-[4px] w-full"
              placeholder="Digite sua senha" v-model="form.password" autocomplete="off" readonly
              onfocus="this.removeAttribute('readonly');" required />
          </div>
        </div>

        <div class="flex items-center justify-between my-[43px]">
          <div class="flex items-center gap-4">
            <input type="checkbox">
            <span>Lembra-me</span>
          </div>
          <a href="#" class="text-[#FF9141] font-semibold">Esqueci a senha</a>
        </div>

        <button type="submit" class="flex items-center gap-3 bg-[#FF9141] py-[18px] px-[61px] justify-center">
          <span class="text-[16px] text-white">Entrar</span>
        </button>
        <p class="font-bold text-center mt-[17px]">Não tem uma conta? <span class="text-[#FF9141]">Cadastrar agora</span></p>

        <div class="absolute inset-x-0 flex items-center justify-center bottom-0">
          <p class="mb-0 text-[#858585] text-center">
            Ao se inscrever, você concorda com os <strong>Termos e</strong> <br> <strong>Política de
              Privacidade</strong> da nossa empresa
          </p>
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

body {
  margin: 0;
  padding: 0;
}
</style>
