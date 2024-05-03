<template>
  <div>
    <h1 class="font-bold text-[24px] mb-[8px]">Dashboard Admin</h1>
    <div class="flex items-center gap-4">
      <span class="font-semibold text-[14px] text-[#0365F8]">Dashboard</span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-[#989898]">
        <path fill-rule="evenodd"
          d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
          clip-rule="evenodd" />
      </svg>
      <span class="font-semibold text-[14px] text-[#989898]">Listagem</span>
    </div>

    <div class="p-[12px] bg-white rounded-md mt-[12px]">

      <div class="flex flex-col mb-[12px]">
        <label class="text-[#858585] text-[16px] mb-[9px]">Digite seu nome</label>
        <input value="kleber Silvar"
          class="px-[20px] py-[12px] rounded-md bg-gray-200/90 text-[#998AA6] placeholder:text-[#998AA6]" />
      </div>

      <div class="flex flex-col mb-[12px]">
        <label class="text-[#858585] text-[16px] mb-[9px]">Digite seu e-mail</label>
        <input value="kleber Silvar"
          class="px-[20px] py-[12px] rounded-md bg-gray-200/90 text-[#998AA6] placeholder:text-[#998AA6]" />
      </div>

      <div class="flex flex-col mb-[12px]">
        <label class="text-[#858585] text-[16px] mb-[9px]">Digite sua data de nascimento</label>
        <input value="kleber Silvar"
          class="px-[20px] py-[12px] rounded-md bg-gray-200/90 text-[#998AA6] placeholder:text-[#998AA6]" />
      </div>

      <div class="flex flex-col mb-[12px]">
        <label class="text-[#858585] text-[16px] mb-[9px]">digite sua profissão</label>
        <input value="kleber Silvar"
          class="px-[20px] py-[12px] rounded-md bg-gray-200/90 text-[#998AA6] placeholder:text-[#998AA6]" />
      </div>

      <div class="flex flex-col mb-[12px]">
        <label class="text-[#858585] text-[16px] mb-[9px]">Digite seu estado civil</label>
        <input value="kleber Silvar"
          class="px-[20px] py-[12px] rounded-md bg-gray-200/90 text-[#998AA6] placeholder:text-[#998AA6]" />
      </div>

      <button class="bg-[#013C94] rounded-[2px] text-white px-[19px] py-[12px]">salvar</button>

    </div>


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