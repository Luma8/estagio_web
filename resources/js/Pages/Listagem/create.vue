<template>
  <div class="h-screen flex flex-col gap-y-5">

    <div class="flex items-center gap-4 my-[12px]">
      <div class="w-[50%]">
        <label class="mb-[10px] text-[16px] font-bold">Nome</label>
        <input class="w-full rounded-xl p-[16px] border border-gray-300/90" placeholder="Digite o nome do perfil" type="text">
      </div>
      <div class="w-[50%]">
        <label class="mb-[10px] text-[16px] font-bold">E-mail</label>
        <input class="w-full rounded-xl p-[16px] border border-gray-300/90" placeholder="Digite o e-mail do perfil" type="text">
      </div>
    </div>

    <div class="flex items-center gap-4 my-[12px]">
      <div class="w-[50%]">
        <label class="mb-[10px] text-[16px] font-bold">Data de Nascimento</label>
        <input class="w-full rounded-xl p-[16px] border border-gray-300/90" placeholder="Digite a data de nascimento do perfil" type="text">
      </div>
      <div class="w-[50%]">
        <label class="mb-[10px] text-[16px] font-bold">Celular</label>
        <input class="w-full rounded-xl p-[16px] border border-gray-300/90" placeholder="Digite o celular do perfil" type="text">
      </div>
    </div>

    <div class="flex items-center gap-4 my-[12px] mb-[24px]">
      <div class="w-[50%]">
        <label class="mb-[10px] text-[16px] font-bold">Endereço</label>
        <input class="w-full rounded-xl p-[16px] border border-gray-300/90" placeholder="Digite o endereço do perfil" type="text">
      </div>
      <div class="w-[50%]">
        <label class="mb-[10px] text-[16px] font-bold">Linkedin</label>
        <input class="w-full rounded-xl p-[16px] border border-gray-300/90" placeholder="Digite o linkedin do perfil" type="text">
      </div>
    </div>

    <button class="w-full py-[12px] rounded-md text-white font-bold bg-[#EC4166]">Salvar</button>

  </div>
</template>

<script setup>

</script>