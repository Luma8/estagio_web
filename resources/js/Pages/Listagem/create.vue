<template>
  <div>
    <h1 class="font-bold text-[24px] mb-0">Cadastrar</h1>
    <div class="flex items-center gap-4">
      <span class="font-semibold text-[14px] text-[#26B893]">Dashboard</span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#989898]">
        <path fill-rule="evenodd"
          d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
          clip-rule="evenodd" />
      </svg>
      <span class="font-semibold text-[14px] text-[#26B893]">Listagem</span>
    </div>

    <div class="border p-[24px] border-gray-300/90 rounded-md bg-white mt-[12px]">
      <h1 class="mb-0 font-bold text-[18px]">Dados Pessoais</h1>
      <div class="flex items-center gap-4 mt-[14px]">
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Nome</label>
          <input placeholder="Nome" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Sobrenome</label>
          <input placeholder="Sobrenome" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
        <div class="flex flex-col flex-grow gap-y-1">
          <label>E-mail</label>
          <input placeholder="E-mail" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
      </div>
      <div class="flex items-center gap-4 mt-[14px]">
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Data de Nascimento</label>
          <input placeholder="Data de Nascimento" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Ocupação</label>
          <input placeholder="Ocupação" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Estado Civil</label>
          <input placeholder="Estado Civil" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
      </div>
    </div>

    <div class="border p-[24px] border-gray-300/90 rounded-md bg-white mt-[12px]">
      <h1 class="mb-0 font-bold text-[18px]">Dados Profissional</h1>
      <div class="flex items-center gap-4 mt-[14px]">
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Empresa</label>
          <input placeholder="Empresa" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Cargo</label>
          <input placeholder="Cargo" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
        <div class="flex flex-col flex-grow gap-y-1">
          <label>Experiência</label>
          <input placeholder="Experiência" class="placeholder:text-[#858D9D] border rounded-md border-[#858D9D] px-[12px] py-[10px]" />
        </div>
      </div>
    </div>

    <button class="text-white px-[19px] py-[12px] bg-[#26B893] text-[16px] font-bold mt-[12px] rounded-[12px]">Salvar</button>

  </div>
</template>

<script>
export default {
  data() {
    return {
      interval: null,
      time: null,
      dateString: null
    }
  },
  methods: {
    updateTime() {
      const now = new Date();
      // Obter as horas, minutos e segundos
      const hours = now.getHours();
      const minutes = now.getMinutes();
      const seconds = now.getSeconds();
      // Converter para formato AM/PM
      const timeString = hours >= 12 ? 'PM' : 'AM';
      const formattedHours = hours % 12 || 12;
      const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
      const formattedSeconds = seconds < 10 ? '0' + seconds : seconds;
      // Atualizar o estado
      this.time = `${formattedHours}:${formattedMinutes}:${formattedSeconds} ${timeString}`;
    },
    updateDateString() {
      const now = new Date();
      // Obter o dia da semana, dia do mês, mês e ano
      const daysOfWeek = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
      const monthsOfYear = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
      const dayOfWeek = daysOfWeek[now.getDay()];
      const dayOfMonth = now.getDate();
      const month = monthsOfYear[now.getMonth()];
      const year = now.getFullYear();
      // Construir a string de data
      this.dateString = `${dayOfWeek}, ${dayOfMonth} de ${month} de ${year}`;
    }
  },
  created() {
    // Atualizar o tempo a cada segundo
    this.interval = setInterval(() => {
      this.updateTime();
    }, 1000);

    // Atualizar a string de data a cada segundo
    this.interval = setInterval(() => {
      this.updateDateString();
    }, 1000);
  },
  beforeDestroy() {
    // Prevenir vazamento de memória
    clearInterval(this.interval);
  }
}
</script>