<template>
  <form @submit.prevent="submit">
    <div class="bg-gradient-to-t from-[#F24A62] to-[#FF369C] h-screen relative">
      <div class="flex items-center h-screen">
        <div class="w-[50%] h-screen flex items-center justify-center relative">
          <img class="absolute bottom-0 right-0" src="images/LayoutFour/Ornament1.png" />
          <img class="absolute top-0 left-0" src="images/LayoutFour/Ornament2.png" />
          <div>
            <h1 class="mb-[27px] font-bold text-[64px] text-white">Entre em sua <br> conta.</h1>
            <p class="mb-[27px] text-[24px] font-[400] text-white">Faça o login agora para desfrutar de <br> uma
              experiência completa e <br> personalizada.</p>
            <span class="font-bold text-[16px] text-white">Entre para acessar suas informações pessoais</span>
          </div>
        </div>
        <div class="w-[50%] bg-gray-200/90 px-[62px] flex flex-col h-screen">
          <div class="flex flex-col 2xl:mb-[16px] mb-[10px]">
            <h1 class="font-bold 2xl:mt-[53px] mb-[30px] text-[32px]">Welcome Back!</h1>
            <p class="mb-[24px] text-[#6F7187]">Amet minim mollit non deserunt ullamco est sit <br> aliqua dolor do amet
              sint.</p>
          </div>
          <div class="bg-white rounded-2xl 2xl:p-[40px] p-[30px] h-full">
            <div class="2xl:mb-[40px] mb-[10px]">
              <label class="text-[16px] font-semibold mb-[10px]">E-mail</label>
              <input type="text" placeholder="Digite seu e-mail"
                class="p-[16px] text-[16px] font-semibold text-[16px] rounded-xl placeholder:text-[#6F7187] text-[#6F7187] w-full border border-gray-200/90"
                v-model="form.email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" required />
            </div>
            <div>
              <label class="text-[16px] font-semibold mb-[10px]">Senha</label>
              <input type="password" placeholder="Digite sua senha"
                class="p-[16px] text-[16px] font-semibold text-[16px] rounded-xl placeholder:text-[#6F7187] text-[#6F7187] w-full border border-gray-200/90"
                v-model="form.password" :feedback="false" toggleMask autocomplete="off" readonly
                onfocus="this.removeAttribute('readonly');" required />
            </div>
            <div class="flex justify-end mt-[24px] 2xl:mb-[40px] mb-[10px]">
              <p class="text-[#FF369C] text-[16px] font-bold border-b border-[#FF369C]">Esqueceu sua senha?</p>
            </div>
            <button type="submit" class="bg-[#FF369C] rounded-xl py-[16px] w-full justify-center">
              <span class="font-bold text-[16px] text-white">Entrar</span>
            </button>
            <a href="#"
              class="flex border-2 my-[24px] py-4 w-full border-[#EAEAEA] rounded-xl items-center gap-3 justify-center">
              <img src="images/LayoutOne/google.png" alt="Google">
              <span class="text-[16px] font-bold">Entrar com Google</span>
            </a>
            <div class="text-center">
              <p class="text-[16px]">Não tem uma conta? <span
                  class="text-[#FF369C] font-bold border-b border-[#FF369C]">Criar conta</span></p>
            </div>
          </div>
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
