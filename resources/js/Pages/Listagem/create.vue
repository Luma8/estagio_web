<template>
  <div class="h-screen">
    <div class="rounded-xl px-5 py-7 bg-white">
      <div class="flex items-center gap-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
        </svg>
        <span class="mb-0">
          Cadastrar Perfil
        </span>
      </div>

      <h1 class="mb-0 text-[16px] mb-[8px] font-bold mt-[16px]">Informações Pessoais</h1>
      <div class="flex flex-col gap-y-[16px]">

        <div class="flex items-center gap-4">
          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">Nome Completo</label>
            <input type="text" value="Eduardo Amaral" class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>
          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">Gênero</label>
            <select class="p-0 w-full border-0 outline-0 font-[400] text-[14px]">
              <option>Masculino</option>
            </select>
          </div>
          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">CNH</label>
            <input type="text" value="35850512483" class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>
        </div>

        <div class="flex items-center gap-4">
          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">CPF</label>
            <input type="text" value="876.986.123-45" class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>
          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">Gênero</label>
            <input type="date" value="11/04/1998" class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>
          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">CNH</label>
            <input type="text" value="35850512483" class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>
        </div>

      </div>

      <h1 class="mb-0 text-[16px] mb-[8px] font-bold mt-[32px]">Contato</h1>
      <div class="flex flex-col gap-y-[16px]">

        <div class="flex items-center gap-4">
          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">E-mail</label>
            <input type="text" value="eduardo.example@gmail.com"
              class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>
          <div class="border-b-2 border-gray-300/90 flex-grow px-3 flex items-center">
            <div class="flex flex-col border-r-2 border-gray-300/90 px-2">
              <label class="text-[#495057] text-[12px]">DDD</label>
              <select class="p-0 w-full border-0 outline-0 font-[400] text-[14px] w-[70px]">
                <option>11</option>
              </select>
            </div>
            <div class="flex flex-col px-4">
              <label class="text-[#495057] text-[12px]">CNH</label>
              <input type="text" value="35850512483" class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
            </div>
          </div>
        </div>

      </div>

      <h1 class="mb-0 text-[16px] mb-[8px] font-bold mt-[32px]">Redes Sociais (opcional)</h1>
      <div class="flex flex-col gap-y-[16px]">

        <div class="flex items-center gap-4">

          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">Facebook</label>
            <input type="text" value="facebook.com/eduardoamaral"
              class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>

          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">Twitter</label>
            <input type="text" value="twitter.com/eduardoamaral"
              class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>

        </div>
        
        <div class="flex items-center gap-4">

          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">Instagram</label>
            <input type="text" value="instagram.com/eduardoamaral"
              class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>

          <div class="border-b-2 border-gray-300/90 flex-grow px-3">
            <label class="text-[#495057] text-[12px]">Linkedin</label>
            <input type="text" value="linkedin.com/eduardoamaral"
              class="w-full p-0 border-0 outline-0 font-[400] text-[14px]">
          </div>

        </div>

      </div>
      <div class="flex justify-end mt-[32px]">
        <button class="rounded-2xl bg-[#087F5B] text-white px-[24px] py-3">Salvar</button>
      </div>
    </div>
  </div>
</template>

<script setup>

</script>