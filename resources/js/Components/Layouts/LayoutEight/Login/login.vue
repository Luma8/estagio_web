<template>
  <form @submit.prevent="submit">
    <div class="p-[20px] h-screen div-background relative flex items-center justify-center">
      <div class="">
        <div class="my-[49px] flex items-center justify-center">
          <img src="images/LayoutThree/Logo.png">
        </div>

        <div class="flex flex-col mb-[32px]">
          <label class="text-white text-[16px]">Digite seu e-mail</label>
          <input type="text"
            class="px-3 py-2 font-semibold text-[16px] text-white outline-none w-full border-0 bg-[#3f467db0] rounded-md mt-[6px]"
            v-model="form.email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" required />
        </div>

        <div class="flex flex-col">
          <label class="text-white text-[16px]">Digite sua senha</label>
          <input type="password"
            class="px-3 py-2 font-semibold text-[16px] text-white outline-none w-full border-0 bg-[#3f467db0] rounded-md mt-[6px]"
            v-model="form.password" :feedback="false" toggleMask autocomplete="off" readonly
            onfocus="this.removeAttribute('readonly');" required />
        </div>

        <div class="w-full flex justify-end">
          <p class="my-[32px] text-white text-[16px] w-[250px] w-full">
            Esqueceu sua senha? <a href="#" class="text-[#FB3434]">Clique Aqui.</a>
          </p>
        </div>

        <button type="submit"
          class="flex items-center gap-3 bg-[#FB3434] w-full rounded-xl py-3 px-[61px] justify-center">
          <span class="font-bold text-[16px] text-white">Entrar</span>
        </button>

        <div class="flex items-center my-[46px]">
          <div class="border-b border-white flex-grow"></div>
          <p class="mb-0 flex-grow text-white text-center">Ou entre com</p>
          <div class="border-b border-white flex-grow"></div>
        </div>

        <div class="flex item-center gap-3 mb-[90px]">
          <button
            class="flex justify-center flex-grow items-center gap-4 border border-[#EAEAEA] bg-[#3f467db0] px-[41px] py-[16px] rounded-xl">
            <img src="images/LayoutOne/google.png" alt="">
            <span class="text-white">Google</span>
          </button>
          <button
            class="flex justify-center flex-grow items-center gap-4 border border-[#EAEAEA] bg-[#3f467db0] px-[41px] py-[16px] rounded-xl">
            <img src="images/LayoutOne/Facebook.png" alt="">
            <span class="text-white">Facebook</span>
          </button>
        </div>

        <p class="mb-0 text-white">© 2024. Todos os direitos reservados, Políticas de Privacidade © </p>

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
  background-image: url("/images/LayoutThree/Background.png");
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
