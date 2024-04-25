<template>
  <div>

    <div class="flex flex-col">
      <p class="text-[#C2C6CE] mb-[8px] text-[18px] ">Dashboard</p>
      <h1 class="text-white text-[23px] font-semibold mb-[14px]">Seja bem-vindo!</h1>
    </div>

    <div class="p-[24px] rounded-2xl flex flex-col gap-y-4 bg-white">

      <div class="flex items-center gap-3">
        <div class="flex-grow flex flex-col">
          <label>Nome Completo</label>
          <input type="text" class="rounded-[20px] px-[20px] py-[12px] border-0 outline-0 bg-gray-200/90" />
        </div>
        <div class="flex-grow flex flex-col">
          <label>Email</label>
          <input type="text" class="rounded-[20px] px-[20px] py-[12px] border-0 outline-0 bg-gray-200/90" />
        </div>
      </div>

      <div class="flex items-center gap-3">
        <div class="flex-grow flex flex-col">
          <label>Endereço</label>
          <input type="text" class="rounded-[20px] px-[20px] py-[12px] border-0 outline-0 bg-gray-200/90" />
        </div>
      </div>

      <div class="flex items-center gap-3">
        <div class="flex-grow flex flex-col">
          <label>Data de nascimento</label>
          <input type="text" class="rounded-[20px] px-[20px] py-[12px] border-0 outline-0 bg-gray-200/90" />
        </div>
        <div class="flex-grow flex flex-col">
          <label>Gênero</label>
          <input type="text" class="rounded-[20px] px-[20px] py-[12px] border-0 outline-0 bg-gray-200/90" />
        </div>
      </div>

      <div class="flex items-center gap-3">
        <div class="flex-grow flex flex-col">
          <label>Número de telefone</label>
          <input type="text" class="rounded-[20px] px-[20px] py-[12px] border-0 outline-0 bg-gray-200/90" />
        </div>
        <div class="flex-grow flex flex-col">
          <label>Interesses</label>
          <input type="text" class="rounded-[20px] px-[20px] py-[12px] border-0 outline-0 bg-gray-200/90" />
        </div>
      </div>

      <button class="text-white bg-[#013C94] px-[19px] py-[12px] rounded-[12px] w-[100px]">
        Salvar
      </button>
    </div>

  </div>
</template>