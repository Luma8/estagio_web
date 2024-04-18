<template>
  <div class="h-screen">
    <span class="font-semibold text-[14px] text-[#858585] mb-0">Bem-vind de volta, {{ $page.props.user?.name
      }}!</span>
    <h1 class="font-bold text-[20px]">Cadastro</h1>
    <div class="rounded-xl p-4 bg-white mt-[24px]">
      <div class="flex flex-col">
        <label class="text-[#777980] text-[14px] font-semibold mt-[14px]">Nome do produto</label>
        <input type="text"
          class="outline-none border-2 border-[#E0E2E7] text-[14px] border-2 border-[#E0E2E7] p-2 rounded-xl bg-[#F9F9FC] w-full" />
      </div>
      <div class="flex flex-col">
        <label class="text-[#777980] text-[14px] font-semibold mt-[14px]">Categoria</label>
        <input type="text"
          class="outline-none border-2 border-[#E0E2E7] text-[14px] border-2 border-[#E0E2E7] p-2 rounded-xl bg-[#F9F9FC] w-full" />
      </div>
      <div class="mt-[14px]">
        <label class="text-[#777980] text-[14px] font-semibold">Portfólio</label>
        <div
          class="border-2 border-[#E0E2E7] flex flex-col items-center justify-center gap-y-4 py-6 rounded-xl border-dashed bg-[#F9F9FC]">
          <div class="flex items-center gap-3">
            <div class="w-[100px] h-[100px] bg-[#E0E2E7] rounded-xl flex justify-end">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#D3F4EF]">
                <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <div class="w-[100px] h-[100px] bg-[#E0E2E7] rounded-xl flex justify-end">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#D3F4EF]">
                <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <div class="w-[100px] h-[100px] bg-[#E0E2E7] rounded-xl flex justify-end">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="w-6 h-6 text-[#D3F4EF]">
                <path fill-rule="evenodd"
                  d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd" />
              </svg>
            </div>
          </div>
          <span class="text-[14px] text-[#858D9D] my-[16px]">Arraste e solte a imagem aqui ou clique em
            adicionarimagem</span>
          <button class="bg-[#F4FE41] px-5 py-2 rounded-xl flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                clip-rule="evenodd" />
            </svg>
            <span class="font-bold">Adicionar Imagem</span>
          </button>
        </div>
        <div class="mt-[14px]">
          <label class="text-[#777980] text-[14px] font-semibold">Valor base</label>
          <input
            class="outline-none border-2 border-[#E0E2E7] border-2 border-[#E0E2E7] p-2 rounded-xl bg-[#F9F9FC] w-full text-[14px]"
            type="text" value="R$ 121,00 reais" />
        </div>
        <button class="bg-[#F4FE41] px-5 py-2 rounded-xl flex items-center gap-2 mt-[14px]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path
              d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
          </svg>
          <span class="font-bold">Salvar</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>

</script>