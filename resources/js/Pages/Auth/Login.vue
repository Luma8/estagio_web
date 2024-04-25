<template>
  <form @submit.prevent="submit">
    <div class="p-[20px] div-background relative flex items-center justify-center h-screen">
      <div class="bg-white rounded-xl my-4 h-[90vh] p-[32px] flex flex-col justify-center item-center w-[603px]">
        <div class="my-[49px] flex items-center justify-center">
          <img src="images/LayoutThree/Logo.png">
        </div>

        <div class="flex flex-col mb-[32px]">
          <label class="text-[#858585] text-[16px]">Digite seu e-mail</label>
          <input type="text"
            class="px-3 py-2 font-semibold text-[16px] text-[#998AA6] outline-none w-full border-0 bg-gray-300/90 rounded-xl mt-[6px]"
            v-model="form.email" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');" required />
        </div>

        <div class="flex flex-col">
          <label class="text-[#858585] text-[16px]">Digite sua senha</label>
          <input type="password"
            class="px-3 py-2 font-semibold text-[16px] text-[#998AA6] outline-none w-full border-0 bg-gray-300/90 rounded-xl mt-[6px]"
            v-model="form.password" :feedback="false" toggleMask autocomplete="off" readonly
            onfocus="this.removeAttribute('readonly');" required />
        </div>

        <p class="text-[#858585] mt-[6px] mb-[32px] text-[16px] border-b-2 w-[250px] border-gray-200/90">Esqueceu sua
          senha? Clique Aqui.</p>
        <button type="submit" class="flex items-center gap-3 bg-[#013C94] rounded-xl py-3 px-[61px] justify-center">
          <span class="font-bold text-[16px] text-white">Entrar</span>
        </button>
        <div class="flex items-center gap-3 mb-[55px] mt-[24px]">
          <input type="checkbox" />
          <p class="mb-0 text-[#858585]">Manter-me logado</p>
        </div>
        <p class="mb-0 text-[#858585]">© 2024. Todos os direitos reservados, Políticas de Privacidade © </p>
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
