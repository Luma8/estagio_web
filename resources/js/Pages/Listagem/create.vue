<template>
  <div class="h-screen">
    <span class="font-semibold text-[14px] text-[#858585] mb-0">Bem-vind de volta, {{ $page.props.user?.name
      }}!</span>
    <h1 class="font-bold text-[20px]">Cadastro</h1>
    <div class="rounded-xl p-4 bg-white">
      <div class="flex flex-col">
        <label>Nome do produto</label>
        <input type="text" class="outline-none border-0 border-2 border-[#E0E2E7] p-3 bg-[#F9F9FC]"/>
      </div>
    </div>
  </div>
</template>

<script setup>

</script>