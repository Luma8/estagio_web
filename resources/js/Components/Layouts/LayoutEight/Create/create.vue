<template>
  <div>

    <div class="p-[44px]">
      <h1 class="text-gray-400/90 font-[16px] mb-[12px]"><span class="text-[#0365F8] font-bold">Dashboard/</span> Cadastro
      </h1>
      <div class="bg-white rounded-[12px] p-[24px]">

        <div class="flex items-center gap-4 mb-[30px]">
          <div class="flex-grow flex flex-col gap-[3px]">
            <label class="font-semibold text-[16px] text-[#858585]">Nome complete</label>
            <input placeholder="Nome completo"
              class="px-[26px] py-[12px] rounded-xl bg-gray-300/90" />
          </div>
          <div class="flex-grow flex flex-col gap-[3px]">
            <label class="font-semibold text-[16px] text-[#858585]">E-mail</label>
            <input placeholder="exemplo@email.com"
              class="px-[26px] py-[12px] rounded-xl bg-gray-300/90" />
          </div>
          <div class="flex-grow flex flex-col gap-[3px]">
            <label class="font-semibold text-[16px] text-[#858585]">Endereço</label>
            <input placeholder="exemplo@email.com"
              class="px-[26px] py-[12px] rounded-xl bg-gray-300/90" />
          </div>
        </div>

        <div class="flex items-center gap-4 mb-[30px]">
          <div class="flex-grow flex flex-col gap-[3px]">
            <label class="font-semibold text-[16px] text-[#858585]">Data de nascimento</label>
            <input placeholder="10 de março de 1990"
              class="px-[26px] py-[12px] rounded-xl bg-gray-300/90" />
          </div>
          <div class="flex-grow flex flex-col gap-[3px]">
            <label class="font-semibold text-[16px] text-[#858585]">Gênero</label>
            <input placeholder="Masculino"
              class="px-[26px] py-[12px] rounded-xl bg-gray-300/90" />
          </div>
          <div class="flex-grow flex flex-col gap-[3px]">
            <label class="font-semibold text-[16px] text-[#858585]">Número de telefone</label>
            <input placeholder="(00) 12345-6789"
              class="px-[26px] py-[12px] rounded-xl bg-gray-300/90" />
          </div>
        </div>
        
        <div class="flex items-center gap-4 mb-[30px]">
          <div class="flex-grow flex flex-col gap-[3px]">
            <label class="font-semibold text-[16px] text-[#858585]">Interesses</label>
            <input placeholder="Viajar, Fotografia, Futebol"
              class="px-[26px] py-[12px] rounded-xl bg-gray-300/90" />
          </div>
        </div>

        <button class="text-white bg-[#013C94] px-[19px] py-[12px] rounded-2xl w-full">
          Salvar
        </button>

      </div>
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