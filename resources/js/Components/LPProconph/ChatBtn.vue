<template>
  <div class="fixed h-full gap-5 w-full z-50 inset-0 flex items-center justify-end px-[40px]">

    <div v-if="callChat" class="bg-white shadow-3xl rounded-3xl w-[372px]">
      <div
        class="py-[24px] px-[28px] rounded-t-3xl bg-gradient-to-r from-[#E81212] to-[#00246A] flex items-center justify-between ">
        <div class="flex items-center gap-4">
          <img src="images/logoRounded.png" alt="">
          <h1 class="mb-0 text-white font-semibold text-[22px]">ProConph</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
          <path fill-rule="evenodd"
            d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
            clip-rule="evenodd" />
        </svg>
      </div>
      <div class="px-[28px] py-[20px] bg-[#00246A]">
        <span class="text-white"><span class="text-[#58B743] mr-[10px]">•</span>Online</span>
      </div>
      <div class="h-[281px] py-[10px] overflow-y-auto px-[28px]">
        <div class="rounded-2xl border border-[#F0F2F7] w-[284.39px]">
          <div class="bg-[#F0F2F7] py-[9px] px-[16px]">
            <span class="font-bold text-[15px]"> Hi!👋O que traz você aqui hoje? <br> Ficaremos felizes em
              ajudá-lo!</span>
          </div>
          <div class="border-b gap-6 border-[#F0F2F7] flex items-center justify-center py-[10px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                clip-rule="evenodd" />
            </svg>
            <span class="text-[#007DFC]">Empresa</span>
          </div>
          <div class="flex gap-6 items-center justify-center py-[10px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>
            <span class="text-[#007DFC]">Suporte</span>
          </div>
        </div>
        <div class="flex justify-end">
          <button class="my-[11px] bg-[#00246A] px-[36px] py-[10px] flex gap-3 rounded-3xl">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-white">
              <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
              <path
                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>
            <span class="text-white">Suporte</span>
          </button>
        </div>
        <div class="px-[15px] py-[10px] bg-[#F0F2F7] rounded-[20px] text-[15px]">
          Você poderia fornecer alguns <br> detalhes sobre o problema que <br> encontrou?
        </div>
      </div>
      <div class="border-t border-[#DBDFE6] flex justify-between items-center px-[25px] py-[19px]">
        <input placeholder="Digite sua mensagem..." class="placeholder:text-[#DBDFE6] p-0 w-full" />
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6 text-[#8894AB]">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
        </svg>
      </div>
    </div>

    <div class="flex items-center justify-center w-[72px] h-[72px] rounded-full relative">
      <div class="h-[72px] w-[72px] rounded-full z-0 bg-[#E81212] blur-lg absolute"></div>
      <button @click="changeCallChat" class="flex items-center justify-center w-[52px] h-[52px] z-50 rounded-full bg-[#E81212] text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
          <path fill-rule="evenodd"
            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
            clip-rule="evenodd" />
        </svg>
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const callChat = ref(false);

const changeCallChat = () => {
  callChat.value = !callChat.value;
}

</script>